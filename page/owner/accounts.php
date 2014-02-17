<?php
class page_hotelERPApp_page_owner_accounts extends page_componentBase_page_owner_main{
	function init(){
		parent::init();
		/*$crud=$this->add('CRUD');
		$crud->setModel('hotelERPApp/Master_Accounts');*/

		$crudacc=$this->add('CRUD'); 
		$crudacc->setModel('hotelERPApp/Master_Accounts');
		if($crudacc->grid){
			
			$crudacc->add_button->set('Add Account');
		}
		
	}
}
