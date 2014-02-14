<?php 
class page_hotelERPApp_page_owner_main extends page_componentBase_page_owner_main
{ 
	function init()
	{ 
		parent::init(); 

		$cr=$this->add('CRUD'); 
		$cr->setModel('hotelERPApp/Master_Admin_Administrator'); 

	} 
} 