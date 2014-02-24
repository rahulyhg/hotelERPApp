<?php
namespace hotelERPApp;
class Model_Staffmgmt_Staffmember extends \Model_Table
{
	public $table='hotelERPApp_staff';
<<<<<<< HEAD
	function init()
	{
		parent::init();
		$this->addField('emp_no')->caption('Employee Number');
		$this->addField('emp_name')->caption('Employee Name');
		$this->addField('emp_contact')->caption('Contact Number');
		$this->addField('emp_address')->caption('Address');
		$this->addField('hiredate')->caption('Hire Date');
		$this->addField('designation')->caption('Designation');
		$this->addField('dob')->caption('DOB');
		$this->addField('sex')->caption('Sex');
		$this->addField('is_active')->caption('Is Active');
		$this->addField('resign_date')->caption('Resign Date');
		
		

		
		
		$this->add('dynamic_model/Controller_AutoCreator');

	}
} 
=======
	function init(){
		parent::init();
		

	    
	}
}
>>>>>>> 4a2def41aa602ae2ff7a5cb117ba9e22aef77ec3
