<?php

/**
 * Controller which calulating interests.
 * @author zhiqiang
 */
class InterestController extends ControllerBase
{

	/**
	 * Action for calculating interests.
     * @return array key-value pairs of country name to annual rates
     */
    public function calculateInterestAction()
    {
		$amount = $this->request->get('amount');
		$days = $this->request->get('days');
		$countryIds = $this->request->get('countryids');
		$response = [];
		if(is_array($countryIds)){
			foreach($countryIds as $countryId){
				$annualRates = AnnualRates::findFirstByCountryId($countryId);
				if($annualRates){ 
					if($days > 0) { // the day can't negative
						$response[] = [$annualRates->name => $this->calculate($amount, $days, $annualRates->annualRates)];
					} else {
						echo "The day can't be negative";
					}
				} else {
					echo "Country Id is not exit";
				}
			}
		} else {
			echo "Country list should be an array";
		}
		return json_encode($response);
    }
	
	/**
	 * Method for calculating interests for given amount and days.
	 * @param integer $amount
	 * @param integer $days
	 * @param float $annualRate
     * @return array key-value pairs of country name to annual rates
     */
	private function calculate($amount, $days, $annualRate) {
		return $amount + ($amount * $annualRate / 100 * $days) / 365;
	}
	
}

