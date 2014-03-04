<?php
namespace hotelERPApp;
class Model_Master_Branch extends \Model_Table
{
	public $table='hotelERPApp_branch';
	function init()
	{
		parent::init();
		 $this->hasOne('hotelERPApp/Master_Hotel','hotel_id');
		 
		$this->addField('branch_address')->caption('Address');
		$this->addField('branch_contact_no')->caption('Contact Number');
		$this->addField('branch_email')->caption('E-mail');

		$this->hasMany('hotelERPApp/Packages_Package','branch_id');
		$this->hasMany('hotelERPApp/Roommgmt_Room','branch_id');
		$this->hasMany('hotelERPApp/Customer_Guestbook','branch_id');
		$this->hasMany('hotelERPApp/Employee_Employees','branch_id');
		$this->hasMany('hotelERPApp/Services_Service','branch_id');

		$this->add('dynamic_model/Controller_AutoCreator');

	}
} 