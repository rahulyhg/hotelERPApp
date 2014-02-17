<?php 
class page_hotelERPApp_page_owner_main extends page_componentBase_page_owner_main
{ 
	function init()
	{ 
		parent::init(); 
		$tab=$this->add('Tabs');
		$tab->addTabURL('hotelERPApp_page_owner_hotel','Hotel');
		$tab->addTabURL('hotelERPApp_page_owner_branch','Branch');
		$tab->addTabURL('hotelERPApp_page_owner_packages','Packages');
		$tab->addTabURL('hotelERPApp_page_owner_rooms','Rooms');
		$tab->addTabURL('hotelERPApp_page_owner_customers','Customers');
		$tab->addTabURL('hotelERPApp_page_owner_services','Services');
		$tab->addTabURL('hotelERPApp_page_owner_rent','Rent');
		$tab->addTabURL('hotelERPApp_page_owner_staff','Staff');
		$tab->addTabURL('hotelERPApp_page_owner_accounts','Accounts');

	} 
} 