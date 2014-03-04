<?php
namespace hotelERPApp;
class Model_Master_Newcustomer extends \Model_Table
{
	public $table='hotelERPApp_customer';
	function init(){
		parent::init();
		$this->addField('customername')->caption('Customer Name');
		$this->addField('customername')->caption('Customer Name');
		$this->addField('customername')->caption('Customer Name');

	    $this->hasMany('hotelERPApp/Master_Bookingcustomer','hotelERPApp_customer_id');
	    $this->hasMany('hotelERPApp/Service_Mealsorder','hotelERPApp_customer_id');
	    $this->hasMany('hotelERPApp/Service_Laundary','hotelERPApp_customer_id');
	    $this->hasMany('hotelERPApp/Service_Treatment','hotelERPApp_customer_id');
	    
	}
}