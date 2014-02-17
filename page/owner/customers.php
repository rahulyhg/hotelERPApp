<?php
class page_hotelERPApp_page_owner_customers extends page_componentBase_page_owner_main{
	function init(){
		parent::init();
		/*$crud=$this->add('CRUD');
		$crud->setModel('hotelERPApp/Master_Customers');*/

		$crudcustomer=$this->add('CRUD'); 
		$crudcustomer->setModel('hotelERPApp/Master_Customers');
		if($crudcustomer->grid){
			
			$crudcustomer->add_button->set('Add Customer Name');
		}
	}
}
