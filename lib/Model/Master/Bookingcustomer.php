<?php
namespace hotelERPApp;
class Model_Master_Bookingcustomer extends \Model_Table
{
	public $table='hotelERPApp_bookingcustomer';
	function init(){
		parent::init();
		 $this->hasOne('hotelERPApp/Master_Customer','hotelERPApp_customer_id');
		$this->addField('name')->caption('Name');

	    
	}
}