<?php
class page_hotelERPApp_page_owner_main extends page_componentBase_page_owner_main{
	function init(){
		parent::init();
		//$crud=$this->add('CRUD');
		$hotel_crud=$this->add('CRUD'); 
		$hotel_crud->setModel('hotelERPApp/Master_Hotel'); 
		if($hotel_crud->grid)
		{

			$hotel_crud->add_button->set('Add Hotel Branch');
		}
		$hotel_crud=$this->add('CRUD'); 
		$hotel_crud->setModel('hotelERPApp/Master_Branch'); 
		if($hotel_crud->grid)
		{

			$hotel_crud->add_button->set('Add Branch Head');
		}
		//$crud->setModel('hotelERPApp/Master_Hotel');
	}
}
