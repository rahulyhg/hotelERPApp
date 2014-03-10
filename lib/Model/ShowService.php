<?php
namespace hotelERPApp;
class Model_ShowService extends Model_Service{
	
	function init(){
		parent::init();
		$this->addCondition('is_active',true);  
	}
}