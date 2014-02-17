<?php
class page_hotelERPApp_page_owner_branch extends page_componentBase_page_owner_main{
	function init(){
		parent::init();
		//$crud=$this->add('CRUD');
		//$crud->setModel('hotelERPApp/Master_Branch');

		$crudbranch=$this->add('CRUD'); 
		$crudbranch->setModel('hotelERPApp/Master_Branch');
		if($crudbranch->grid){
			
			$crudbranch->add_button->set('Add Branch Head Name');
		}
	}
}

