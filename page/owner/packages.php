<?php
class page_hotelERPApp_page_owner_packages extends page_componentBase_page_owner_main{
	function init(){
		parent::init();
		//$crud=$this->add('CRUD');
		//$crud->setModel('hotelERPApp/Master_Packages');

		$crudpack=$this->add('CRUD'); 
		$crudpack->setModel('hotelERPApp/Master_Packages');
		if($crudpack->grid){
			
			$crudpack->add_button->set('Add Packages');
		}
	}
}
