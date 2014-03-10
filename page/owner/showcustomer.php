<?php
class page_hotelERPApp_page_owner_showcustomer extends page_componentBase_page_owner_main{
	function init(){
		parent::init();

		$this->h1->add('H1')->setElement('a')
             ->setAttr('href','?page=hotelERPApp_page_owner_customer')
             ->set($this->component_namespace);
		$cr=$this->add('CRUD',array('allow_add'=>false,'allow_edit'=>false,'allow_del'=>false));
		$cr->setModel('hotelERPApp/Model_ShowCustomer');

		
	}
}