<?php
class page_hotelERPApp_page_owner_rent extends page_componentBase_page_owner_main{
	function init(){
		parent::init();
		/*$crud=$this->add('CRUD');
		$crud->setModel('hotelERPApp/Master_Rent');*/

		$rent_crud=$this->add('CRUD'); 
		$rent_crud->setModel('hotelERPApp/Master_Rent');
		if($rent_crud->grid){
			
			$rent_crud->add_button->set('Add Rent');
		}
	}
}
