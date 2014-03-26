<?php
class page_hotelERPApp_page_owner_showroom extends page_componentBase_page_owner_main{
	function init(){
		parent::init();

		$this->h1->add('H1')->setElement('a')
             ->setAttr('href','?page=hotelERPApp_page_owner_room')
             ->set($this->component_namespace);
		$cr=$this->add('CRUD',array('allow_add'=>false,'allow_edit'=>false,'allow_del'=>false));

			if($cr->grid){
    
			$cr->grid->addQuickSearch(array('name'));
	
			$cr->grid->addPaginator(10);

			
		}

		$cr->setModel('hotelERPApp/Model_ShowRoom');

		
	}
}