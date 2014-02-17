<?php
class page_hotelERPApp_page_owner_rent extends page_componentBase_page_owner_main{
	function init(){
		parent::init();
		/*$crud=$this->add('CRUD');
		$crud->setModel('hotelERPApp/Master_Rent');*/

		$crudrent=$this->add('CRUD'); 
		$crudrent->setModel('hotelERPApp/Master_Rent');
		if($crudrent->grid){
			
			$crudrent->add_button->set('Add Rent');
		}
	}
}
