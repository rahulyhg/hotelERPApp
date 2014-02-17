<?php
class page_hotelERPApp_page_owner_packages extends page_componentBase_page_owner_main{
	function init(){
		parent::init();
		//$crud=$this->add('CRUD');
		//$crud->setModel('hotelERPApp/Master_Packages');

		$packages_crud=$this->add('CRUD'); 
		$packages_crud->setModel('hotelERPApp/Master_Packages');
		if($packages_crud->grid){
			
			$packages_crud->add_button->set('Add Packages');
		}
	}
}
