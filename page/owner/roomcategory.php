<?php
class page_hotelERPApp_page_owner_roomcategory extends page_componentBase_page_owner_main{
	function init(){
		parent::init();
		$crud=$this->add('CRUD'); 
		$crud->setModel('hotelERPApp/Model_Roomcategory');
		if($crud->grid)
		{

			$crud->add_button->set('Add Room Category');
		}
	}
}