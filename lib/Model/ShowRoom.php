<?php
namespace hotelERPApp;
class Model_ShowRoom extends Model_Room{
	
	function init(){
		parent::init();
		$this->addCondition('is_active',true);  
	}
}