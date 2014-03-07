<?php
namespace hotelERPApp;
class Model_Customer extends \Model_Table{
	public $table='hotelERPApp_customer';
	function init(){
		parent::init();
		$this->hasOne('hotelERPApp/Hotel','hotel_id');
		$this->hasOne('hotelERPApp/Branch','branch_id');
		$this->hasOne('hotelERPApp/Package','package_id');
		$this->hasOne('hotelERPApp/Roomcategory','roomcategory_id');
		$this->hasOne('hotelERPApp/Roomtype','roomtype_id');
		$this->hasOne('hotelERPApp/Idcardtype','idcardtype_id');
		$this->addField('id_no')->caption('Id Card Number');
		$this->addField('name')->caption('Customer Name');
		$this->addField('gender')->caption('Gender');
		$this->addField('date')->caption('Date of Booking');
		$this->addField('from')->caption('From');
		$this->addField('to')->caption('To');
		$this->addField('actual_checkin')->caption('Actual Check In Date');
		$this->addField('actual_checkout')->caption('Actual Check Out Date');
		$this->addField('no_of_person')->caption('Number of Persons');
		$this->addField('room_no')->caption('Room Number');
		$this->addField('address')->caption('Address');
		$this->addField('contact')->caption('Contact Number');
		$this->addField('email')->caption('Email-Id');
		$this->addField('is_active')->caption('Is Active');

		
		$this->hasMany('hotelERPApp/Services','customer_id');
		$this->hasMany('hotelERPApp/Room','customer_id');

		$this->add('dynamic_model/Controller_AutoCreator');


	    
	}
}