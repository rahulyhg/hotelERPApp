<?php
namespace hotelERPApp;
class Model_Master_Booking extends \Model_Table
{
	public $table='hotelERPApp_booking';
	function init(){
		parent::init();
		$this->addField('name')->caption('Customer Name');
		$this->addField('id_no')->caption('Id Card Number');
		$this->addField('gender')->caption('Gender');
		$this->addField('date')->caption('Date of Booking');
		$this->addField('room_no')->caption('Room Number');
		$this->addField('address')->caption('Address');
		$this->addField('contact')->caption('Contact');
		$this->addField('email')->caption('Email-Id');
		$this->addField('from')->caption('From');
		$this->addField('to')->caption('To');

	    $this->hasMany('hotelERPApp/Master_Bookingcustomer','hotelERPApp_booking_id');
	}
}