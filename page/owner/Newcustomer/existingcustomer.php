<?php
class page_hotelERPApp_page_owner_Newcustomer_guestbook extends page_componentBase_page_owner_main{
	function init(){
		parent::init();
		$crud=$this->add('CRUD'); 
		$crud->setModel('hotelERPApp/Customer_Guestbook');
		
	}
}