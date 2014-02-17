<?php
class page_hotelERPApp_page_owner_services extends page_componentBase_page_owner_main{
	function init(){
		parent::init();
		/*$crud=$this->add('CRUD');
		$crud->setModel('hotelERPApp/Master_Services');*/

		$crudservice=$this->add('CRUD'); 
		$crudservice->setModel('hotelERPApp/Master_Services');
		if($crudservice->grid){
			
			$crudservice->add_button->set('Add Services');
		}
	}
}
