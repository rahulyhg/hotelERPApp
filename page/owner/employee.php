<?php
class page_hotelERPApp_page_owner_employee extends page_componentBase_page_owner_main{
	function init(){
		parent::init();
		$crud=$this->add('CRUD'); 
		$crud->setModel('hotelERPApp/Model_Employees');
		if($crud->grid)
		{

			$crud->add_button->set('Add New Employee');
		}
	}
}