<?php 
class page_hotelERPApp_page_uninstall extends page_componentBase_page_uninstall{ 
	function init(){ 
		parent::init(); 
		$this->h1->add('H1')->setElement('a')
             ->setAttr('href','?page=hotelERPApp_page_owner_main')
             ->set($this->component_namespace);
		$this->uninstall(); 
	} 
} 