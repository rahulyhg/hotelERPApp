<?php
namespace hotelERPApp;
class Model_Master_Rent extends \Model_Table
{
	public $table='hotelERPApp_rent';
	function init()
	{
		parent::init();
		$this->addField('rent');
		$this->hasMany('Branch','hotel_id');
		$this->add('dynamic_model/Controller_AutoCreator');

	}
}