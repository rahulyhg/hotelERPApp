<?php
namespace hotelERPApp;
class Model_Staffmgmt_Department extends \Model_Table
{
	public $table='hotelERPApp_department';
	function init(){
		parent::init();
		

	    $this->hasMany('hotelERPApp/Staffmgmt_Staffmember','hotelERPApp_department_id');
	}
}