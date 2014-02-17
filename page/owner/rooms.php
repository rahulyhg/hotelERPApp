<?php
class page_hotelERPApp_page_owner_rooms extends page_componentBase_page_owner_main{
	function init(){
		parent::init();
/*		$crud=$this->add('CRUD');
		$crud->setModel('hotelERPApp/Master_Rooms');*/
		$crudroom=$this->add('CRUD'); 
		$crudroom->setModel('hotelERPApp/Master_Rooms');
		if($crudroom->grid){
			
			$crudroom->add_button->set('Add Rooms');
		}
	}
}
