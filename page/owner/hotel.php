<?php
class page_hotelERPApp_page_owner_hotel extends page_componentBase_page_owner_main{
	function init(){
		parent::init();
		$hotel_crud=$this->add('CRUD'); 
		$hotel_crud->setModel('hotelERPApp/Model_Hotel');
		if($hotel_crud->grid)
		{

			$hotel_crud->add_button->set('Add Branch');
		}
	}
}