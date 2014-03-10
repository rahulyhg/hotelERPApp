<?php
class page_hotelERPApp_page_owner_package extends page_componentBase_page_owner_main{
	function init(){
		parent::init();

		$this->h1->add('H1')->setElement('a')
             ->setAttr('href','?page=hotelERPApp_page_owner_main')
             ->set($this->component_namespace);
		// $crud=$this->add('CRUD'); 
		// $crud->setModel('hotelERPApp/Model_Package');
		// if($crud->grid)
		// {

		// 	$crud->add_button->set('Add New Package');
		// }
        $menu=$this->add('hotelERPApp/View_MyMenu');
		$menu->addMenuItem('hotelERPApp_page_owner_newpackage','New Package','info','plus');
		$menu->addMenuItem('hotelERPApp_page_owner_showpackage','Show Package','info','search');
	}
}