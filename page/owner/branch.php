<?php
class page_hotelERPApp_page_owner_branch extends page_componentBase_page_owner_main{
	function init(){
		parent::init();
		$this->h1->add('H1')->setElement('a')
             ->setAttr('href','?page=hotelERPApp_page_owner_main')
             ->set($this->component_namespace);
		// $branch_crud->setModel('hotelERPApp/Branch');
		$branch=$this->add('hotelERPApp/Model_Branch');
		
		$hotel=$branch->join('hotelERPApp_hotel','hotel_id');
		$hotel->addField('head','branch_head')->type('readonly');
		$hotel->addField('branchname','name')->type('readonly');
		// $auth=$this->api->auth;
		$this->api->auth->check(array('head'));
		$crud=$this->add('CRUD',array('allow_add'=>false,'allow_edit'=>true,'allow_del'=>true)); 
		$crud->setModel($branch,array('branchname','head','branch_address','branch_contact_no','branch_email'));
		// $branch_crud->addFz	ield('','');
		
	}
}