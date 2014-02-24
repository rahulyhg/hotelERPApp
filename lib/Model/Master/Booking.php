<?php
namespace hotelERPApp;
class Model_Master_Booking extends \Model_Table
{
	public $table='hotelERPApp_booking';
	function init(){
		parent::init();
		$this->addField('name')->caption('Name');

	    $this->hasMany('hotelERPApp/Master_Bookingcustomer','hotelERPApp_booking_id');
	}
}