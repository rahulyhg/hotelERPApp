<?php
class page_hotelERPApp_page_owner_roomtype extends page_componentBase_page_owner_main{
	function init(){
		parent::init();
		$crud=$this->add('CRUD'); 
		$crud->setModel('hotelERPApp/Model_Roomtype');
		if($crud->grid)
		{

			$crud->add_button->set('Add Room Type');
		}
	}
}