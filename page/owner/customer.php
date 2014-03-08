<?php
class page_hotelERPApp_page_owner_customer extends page_componentBase_page_owner_main{
	function init(){
		parent::init();

		$this->h1->add('H1')->setElement('a')
             ->setAttr('href','?page=hotelERPApp_page_owner_main')
             ->set($this->component_namespace);
		// $crud=$this->add('CRUD'); 
		
		// $crud->setModel('hotelERPApp/Model_Customer');
		
		// if($crud->grid)
		// {
    
		// 	$crud->grid->addQuickSearch(array('name'));
	
		// 	$crud->grid->addPaginator(10);

		// 	$crud->add_button->set('New Customer');
		// }
		
		$menu=$this->add('hotelERPApp/View_MyMenu');
		$menu->addMenuItem('hotelERPApp_page_owner_newcustomer','New Customer','info','plus');
		$menu->addMenuItem('hotelERPApp_page_owner_showcustomer','Show Customer','info','search');

	}
}