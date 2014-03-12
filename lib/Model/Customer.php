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
		$this->addField('name')->caption('Customer Name')->mandatory('Cannot be Null');
		$this->addField('gender')->caption('Gender')->mandatory('Cannot be Null');

		$this->addField('date')->type('date')->caption('Date of Booking')->mandatory('Cannot be Null');
		$this->addField('from')->type('date')->caption('From')->mandatory('Cannot be Null');
		$this->addField('to')->type('date')->caption('To')->mandatory('Cannot be Null');
		$this->addField('actual_checkin')->type('date')->caption('Actual Check In Date')->mandatory('Cannot be Null');
		$this->addField('actual_checkout')->type('date')->caption('Actual Check Out Date')->mandatory('Cannot be Null');

		$this->addField('no_of_person')->caption('Number of Persons')->type('int')->mandatory('Cannot be Null');
		$this->addField('room_no')->caption('Room Number')->mandatory('Cannot be Null');
		$this->addField('address')->caption('Address')->mandatory('Cannot be Null');
		$this->addField('contact')->caption('Contact Number')type('int')->mandatory('Cannot be Null');
		$this->addField('email')->caption('Email-Id')->mandatory('Cannot be Null');
		$this->addField('is_active')->type('boolean')               ;

		
		$this->hasMany('hotelERPApp/Services','customer_id');
		$this->hasMany('hotelERPApp/Room','customer_id');

		$this->add('dynamic_model/Controller_AutoCreator');


	    
	}
}