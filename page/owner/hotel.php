<?php
class page_hotelERPApp_page_owner_hotel extends page_componentBase_page_owner_main{
	function init(){
		parent::init();
		//$crud=$this->add('CRUD');
		$crudhotel=$this->add('CRUD'); 
		$crudhotel->setModel('hotelERPApp/Master_Hotel'); 
		if($crudhotel->grid){

			$crudhotel->add_button->set('Add Hotel Branch');
		}
		//$crud->setModel('hotelERPApp/Master_Hotel');
	}
}
