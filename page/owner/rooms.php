<?php
class page_hotelERPApp_page_owner_rooms extends page_componentBase_page_owner_main{
	function init(){
		parent::init();
/*		$crud=$this->add('CRUD');
		$crud->setModel('hotelERPApp/Master_Rooms');*/
		$room_crud=$this->add('CRUD'); 
		$room_crud->setModel('hotelERPApp/Master_Rooms');
		if($room_crud->grid){
			
			$room_crud->add_button->set('Add Rooms');
		}
	}
}
