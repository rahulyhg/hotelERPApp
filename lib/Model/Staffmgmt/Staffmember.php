<?php
namespace hotelERPApp;
class Model_Staffmgmt_Staffmember extends \Model_Table
{
	public $table='hotelERPApp_staff';

	function init()
	{
		parent::init();
		$this->addField('emp_code')->caption('Employee Code');
		$this->addField('emp_name')->caption('Employee Name');
		$this->addField('emp_contact')->caption('Contact Number');
		$this->addField('emp_address')->caption('Address');
		$this->addField('hiredate')->caption('Hire Date');
		$this->addField('designation')->caption('Designation');
		$this->addField('dob')->caption('DOB');
		$this->addField('sex')->caption('Sex');
		$this->addField('account_no')->caption('Account Number');
		$this->addField('is_active')->caption('Is Active');
		
		

		
		
		$this->add('dynamic_model/Controller_AutoCreator');

	}
} 
