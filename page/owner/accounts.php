<?php
class page_hotelERPApp_page_owner_accounts extends page_componentBase_page_owner_main{
	function init(){
		parent::init();
		/*$crud=$this->add('CRUD');
		$crud->setModel('hotelERPApp/Master_Accounts');*/

		$account_crud=$this->add('CRUD'); 
		$account_crud->setModel('hotelERPApp/Master_Accounts');
		if($account_crud->grid){
			
			$account_crud->add_button->set('Add Account');
		}
		
	}
}
