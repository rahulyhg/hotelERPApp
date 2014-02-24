<?php
namespace hotelERPApp;
class Model_Staffmgmt_Department extends \Model_Table
{
	public $table='hotelERPApp_department';
	function init()
	{
		parent::init();
		$this->addField('dept_no')->caption('Department Number');
		$this->addField('dept_name')->caption('Department Name');
		
		
		$this->add('dynamic_model/Controller_AutoCreator');

	}
} 