<?php
namespace hotelERPApp;
class Model_ShowPackage extends Model_Package{
	
	function init(){
		parent::init();
		$this->addCondition('is_active',true);  
	}
}