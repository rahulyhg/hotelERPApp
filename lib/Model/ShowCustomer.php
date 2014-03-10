<?php
namespace hotelERPApp;
class Model_ShowCustomer extends Model_Customer{
	
	function init(){
		parent::init();
		$this->addCondition('is_active',true);  
	}
}