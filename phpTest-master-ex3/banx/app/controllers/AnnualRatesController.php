<?php

/**
 * Controller which serving as annual rates functions.
 * @author xxxxxxxxxxxxxxxxxx
 * @copyright (c) 2018, Techbanx
 */
class AnnualRatesController extends ControllerBase
{

	/**
	 * Action for retrieve countries annual info by ids.
     * @return array key-value pairs of country name to annual rates
     */
    public function getByCountryIdsAction()
    {
		$countryIds = $this->request->get('countryids');
		$response = [];
		if(is_array($countryIds)){
			foreach($countryIds as $countryId){
				$annualRates = AnnualRates::findFirstByCountryId($countryId);
				if ($annualRates) {
					$response[] = [$annualRates->name => $annualRates->annualRates . '%'];
				} else {
					echo "Country Id is not exit";
				}
			}
		} else {
			echo "Country list should be an array";
		}
		return json_encode($response);
    }
	
}

