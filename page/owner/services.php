<?php
class page_hotelERPApp_page_owner_services extends page_componentBase_page_owner_main{
	function init(){
		parent::init();
		/*$crud=$this->add('CRUD');
		$crud->setModel('hotelERPApp/Master_Services');*/

		$services_crud=$this->add('CRUD'); 
		$services_crud->setModel('hotelERPApp/Master_Services');
		if($services_crud->grid){
			
			$services_crud->add_button->set('Add Services');
		}
	}
}
