<?php
namespace hotelERPApp;
class Model_Master_Customer extends \Model_Table
{
	public $table='hotelERPApp_customer';
	function init(){
		parent::init();
		$this->addField('name')->caption('Name');

	    $this->hasMany('hotelERPApp/Master_Bookingcustomer','hotelERPApp_customer_id');
	    $this->hasMany('hotelERPApp/Service_Mealsorder','hotelERPApp_customer_id');
	    $this->hasMany('hotelERPApp/Service_Laundary','hotelERPApp_customer_id');
	    $this->hasMany('hotelERPApp/Service_Treatment','hotelERPApp_customer_id');
	    
	}
}