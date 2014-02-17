<?php
class page_hotelERPApp_page_owner_customers extends page_componentBase_page_owner_main{
	function init(){
		parent::init();
		/*$crud=$this->add('CRUD');
		$crud->setModel('hotelERPApp/Master_Customers');*/

		$customer_crud=$this->add('CRUD'); 
		$customer_crud->setModel('hotelERPApp/Master_Customers');
		if($customer_crud->grid){
			
			$customer_crud->add_button->set('Add Customer Name');
		}
	}
}
