<?php
class page_hotelERPApp_page_owner_newemployee extends page_componentBase_page_owner_main{
	function init(){
		parent::init();

		$this->h1->add('H1')->setElement('a')
             ->setAttr('href','?page=hotelERPApp_page_owner_employee')
             ->set($this->component_namespace);
		$cr=$this->add('CRUD');

			if($cr->grid){
    
			$cr->grid->addQuickSearch(array('name'));
	
			$cr->grid->addPaginator(10);

			$cr->add_button->set('New Employee');
		}

		$cr->setModel('hotelERPApp/Model_Employees');

		
	}
}