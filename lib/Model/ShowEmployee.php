<?php
namespace hotelERPApp;
class Model_ShowEmployee extends Model_Employees{
	
	function init(){
		parent::init();
		$this->addCondition('is_active',true);  
	}
}