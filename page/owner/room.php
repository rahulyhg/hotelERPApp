<?php
class page_hotelERPApp_page_owner_room extends page_componentBase_page_owner_main{
	function init(){
		parent::init();
		$crud=$this->add('CRUD'); 
		$crud->setModel('hotelERPApp/Model_Room');
		if($crud->grid)
		{

			$crud->add_button->set('New Room');
		}
	}
}