<?php
namespace hotelERPApp;
class Model_Employee_Employees extends \Model_Table
{
	public $table='hotelERPApp_employees';
	function init(){
		parent::init();
		$this->hasOne('hotelERPApp/Master_Branch','branch_id');
		
		$this->addField('name')->caption('Employee Name');
		$this->addField('f_name')->caption('Father Name');
		$this->addField('emp_code')->caption('Employee Code');
		$this->addField('dept_name')->caption('Department Name');
		$this->addField('id_type')->caption('Id Card Type');
		$this->addField('id_no')->caption('Id Card Number');
		$this->addField('contact')->caption('Contact Number');
		$this->addField('address')->caption('Address');
		$this->addField('hire_date')->caption('Hire Date');
		$this->addField('designation')->caption('Designation');
		$this->addField('email')->caption('Email-Id');
		$this->addField('dob')->caption('DOB');
		$this->addField('gender')->caption('Gender');
		$this->addField('account_no')->caption('Account Number');
		$this->addField('is_active')->caption('Is Active');


	//    $this->hasMany('hotelERPApp/Master_Bookingcustomer','hotelERPApp_booking_id');
	}
}