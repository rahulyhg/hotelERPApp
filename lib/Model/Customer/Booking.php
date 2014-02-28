<?php
namespace hotelERPApp;
class Model_Customer_Booking extends \Model_Table
{
	public $table='hotelERPApp_booking';
	function init(){
		parent::init();
		$this->addField('name')->caption('Customer Name');
		$this->addField('id_type')->caption('Id Card Type');
		$this->addField('id_no')->caption('Id Card Number');
		$this->addField('gender')->caption('Gender');
		$this->addField('date')->caption('Date of Booking');
		$this->addField('from')->caption('From');
		$this->addField('to')->caption('To');
		$this->addField('actual_checkin')->caption('Actual Check In Date');
		$this->addField('actual_checkout')->caption('Actual Check Out Date');
		$this->addField('room_category')->caption('Room Category');
		$this->addField('room_type')->caption('Room Type');
		$this->addField('no_of_person')->caption('Number of Persons');
		$this->addField('room_no')->caption('Room Number');
		$this->addField('address')->caption('Address');
		$this->addField('contact')->caption('Contact Number');
		$this->addField('email')->caption('Email-Id');
		$this->addField('is_active')->caption('Is Active');

	    //$this->hasMany('hotelERPApp/Master_Bookingcustomer','hotelERPApp_booking_id');
	}
}