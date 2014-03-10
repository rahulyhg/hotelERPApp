<?php
namespace hotelERPApp;
class Model_Employees extends \Model_Table
{
	public $table='hotelERPApp_employees';
	function init(){
		parent::init();
		$this->hasOne('hotelERPApp/Hotel','hotel_id');
		$this->hasOne('hotelERPApp/Branch','branch_id');
		$this->hasOne('hotelERPApp/Idcardtype','idcardtype_id');
		$this->addField('id_no')->caption('Id Card Number');
		
		$this->addField('name')->caption('Employee Name');
		$this->addField('f_name')->caption('Father Name');
		$this->addField('emp_code')->caption('Employee Code');
		$this->addField('dept_name')->caption('Department Name');
		//$this->addField('id_type')->caption('Id Card Type');
		$this->addField('contact')->caption('Contact Number');
		$this->addField('address')->caption('Address');
		$this->addField('hire_date')->type('date')->caption('Hire Date');
		$this->addField('designation')->caption('Designation');
		$this->addField('email')->caption('Email-Id');
		$this->addField('dob')->type('date')->caption('DOB');
		$this->addField('gender')->caption('Gender');
		$this->addField('account_no')->caption('Account Number');
		$this->addField('is_active')->type('boolean');

		$this->add('dynamic_model/Controller_AutoCreator');

	}
}