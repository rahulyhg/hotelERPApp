<?php
class page_hotelERPApp_page_owner_main extends page_componentBase_page_owner_main{
	function init(){
		parent::init();
		$menu=$this->add('Menu',null);

            $menu->addMenuItem('hotelERPApp_page_owner_hotel','Hotel');
            $menu->addMenuItem('hotelERPApp_page_owner_branch','Branch');

            $menu->addMenuItem('hotelERPApp_page_owner_Newcustomer_guestbook','New Customer');

            $menu->addMenuItem('hotelERPApp_page_owner_customer','New Customer');

		
	}
}
