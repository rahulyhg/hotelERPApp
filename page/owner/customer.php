<?php
class page_hotelERPApp_page_owner_customer extends page_componentBase_page_owner_main{
	function init(){
		parent::init();
		$crud=$this->add('CRUD'); 
		$crud->setModel('hotelERPApp/Model_Customer');
		if($crud->grid)
		{

			$crud->add_button->set('New Customer');
		}
	}
}