<?php
class page_hotelERPApp_page_owner_guestbook extends page_componentBase_page_owner_main{
	function init(){
		parent::init();
		$crud=$this->add('CRUD'); 
		$crud->setModel('hotelERPApp/Customer_Guestbook');
		if($crud->grid)
		{

			$crud->add_button->set('New Customer');
		}
	}
}