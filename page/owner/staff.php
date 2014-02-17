<?php
class page_hotelERPApp_page_owner_staff extends page_componentBase_page_owner_main{
	function init(){
		parent::init();
		/*$crud=$this->add('CRUD');
		$crud->setModel('hotelERPApp/Master_Staff');*/

		$crudstaff=$this->add('CRUD'); 
		$crudstaff->setModel('hotelERPApp/Master_Staff');
		if($crudstaff->grid){
			
			$crudstaff->add_button->set('Add Staff');
		}
	}
}
