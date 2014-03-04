<?php
class page_hotelERPApp_page_owner_branch extends page_componentBase_page_owner_main{
	function init(){
		parent::init();
		$branch_crud=$this->add('CRUD'); 
		$branch_crud->setModel('hotelERPApp/Branch');
		if($branch_crud->grid)
		{

			$branch_crud->add_button->set('Add Branch Details');
		}
	}
}