<?php
class page_hotelERPApp_page_owner_newservice extends page_componentBase_page_owner_main{
	function init(){
		parent::init();

		$this->h1->add('H1')->setElement('a')
             ->setAttr('href','?page=hotelERPApp_page_owner_service')
             ->set($this->component_namespace);
		$cr=$this->add('CRUD');
		$cr->setModel('hotelERPApp/Model_Service');

		
	}
}