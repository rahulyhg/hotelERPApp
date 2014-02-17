<?php
class page_hotelERPApp_page_owner_staff extends page_componentBase_page_owner_main{
	function init(){
		parent::init();
		/*$crud=$this->add('CRUD');
		$crud->setModel('hotelERPApp/Master_Staff');*/

		$staff_crud=$this->add('CRUD'); 
		$staff_crud->setModel('hotelERPApp/Master_Staff');
		if($staff_crud->grid){
			
			$staff_crud->add_button->set('Add Staff');
		}
	}
}
