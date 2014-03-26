<?php
class page_hotelERPApp_page_owner_configure extends page_componentBase_page_owner_main{
	function init(){
		parent::init();

		$this->h1->add('H1')->setElement('a')
             ->setAttr('href','?page=hotelERPApp_page_owner_main')
             ->set($this->component_namespace);
		
		
		$menu=$this->add('hotelERPApp/View_MyMenu');
		$menu->addMenuItem('hotelERPApp_page_owner_roomcategory','Add Room Category','info','plus');
		$menu->addMenuItem('hotelERPApp_page_owner_roomtype','Add Room Type','info','plus');
		$menu->addMenuItem('hotelERPApp_page_owner_idcardtype','Add Id Type','info','plus');
		
		
	}
}