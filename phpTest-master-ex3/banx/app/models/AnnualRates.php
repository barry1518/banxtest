<?php

use Phalcon\Mvc\Model;

/**
 * Model which holding annual rates of covered countries.
 * @author xxxxxxxxxxxxxxxxxx
 * @copyright (c) 2018, Techbanx
 */
class AnnualRates extends Model
{
	/**
	 * Country id.
     * @var integer 
     */
	public $countryId;
	
	/**
	 * Country name.
     * @var string 
     */
	public $name;
	
	/**
	 * Annual rate.
     * @var float
     */
	public $annualRates;

}
