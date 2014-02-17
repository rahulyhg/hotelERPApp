<?php
class page_hotelERPApp_page_owner_branch extends page_componentBase_page_owner_main{
	function init(){
		parent::init();
		//$crud=$this->add('CRUD');
		//$crud->setModel('hotelERPApp/Master_Branch');

		$branch_crud=$this->add('CRUD'); 
		$branch_crud->setModel('hotelERPApp/Master_Branch');
		if($branch_crud->grid){
			
			$branch_crud->add_button->set('Add Branch Head Name');
		}
	}
}

