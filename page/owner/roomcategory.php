<?php
class page_hotelERPApp_page_owner_roomcategory extends page_componentBase_page_owner_main{
	function init(){
		parent::init();

		$this->h1->add('H1')->setElement('a')
             ->setAttr('href','?page=hotelERPApp_page_owner_configure')
             ->set($this->component_namespace);
		$crud=$this->add('CRUD'); 
		$crud->setModel('hotelERPApp/Model_Roomcategory');
		if($crud->grid)
		{

			$crud->add_button->set('Add Room Category');
		}
	}
}