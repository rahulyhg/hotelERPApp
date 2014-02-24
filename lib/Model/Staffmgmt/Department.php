<?php
namespace hotelERPApp;
class Model_Staffmgmt_Department extends \Model_Table
{
	public $table='hotelERPApp_department';
<<<<<<< HEAD
	function init()
	{
		parent::init();
		$this->addField('dept_no')->caption('Department Number');
		$this->addField('dept_name')->caption('Department Name');
		
		
		$this->add('dynamic_model/Controller_AutoCreator');

	}
} 
=======
	function init(){
		parent::init();
		

	    $this->hasMany('hotelERPApp/Staffmgmt_Staffmember','hotelERPApp_department_id');
	}
}
>>>>>>> 4a2def41aa602ae2ff7a5cb117ba9e22aef77ec3
