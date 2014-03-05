<?php
class page_hotelERPApp_page_owner_main extends page_componentBase_page_owner_main{
	function init(){
		parent::init();
		// $tabhotel=$this->add('Tabs');
		// $tabhotel->addTabURL('hotelERPApp_page_owner_hotel','Hotel');
		// $tabhotel->addTabURL('hotelERPApp_page_owner_branch','Branch');
		$menu=$this->add('Menu',null);

            $menu->addMenuItem('hotelERPApp_page_owner_hotel','Hotel');
            $menu->addMenuItem('hotelERPApp_page_owner_branch','Branch');
<<<<<<< HEAD
            $menu->addMenuItem('hotelERPApp_page_owner_Newcustomer_guestbook','New Customer');
=======
            $menu->addMenuItem('hotelERPApp_page_owner_customer','New Customer');
>>>>>>> 7b764f002fd038d1090c0852fb27b333379194c9
		
	}
}
