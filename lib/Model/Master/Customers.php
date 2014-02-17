<?php
namespace hotelERPApp;
class Model_Master_Customers extends \Model_Table
{
	public $table='hotelERPApp_customers';
	function init()
	{
		parent::init();
		$this->hasOne('hotelERPApp/Master_Rooms','customers_id')->caption('Room');
		$this->addField('customer_name');
		$this->hasMany('Branch','hotel_id');
		$this->add('dynamic_model/Controller_AutoCreator');

	}
}