 <?php
class page_hotelERPApp_page_owner_main extends page_componentBase_page_owner_main{
      function init(){
             parent::init();
             $this->h1->add('H1')->setElement('a')
             ->setAttr('href','?page=hotelERPApp_page_owner_main')
             ->set($this->component_namespace);
             
            $menu=$this->add('hotelERPApp/View_MyMenu');
            $menu->addMenuItem('hotelERPApp_page_owner_hotel','Hotel(Owner)','info','user');
            $menu->addMenuItem('hotelERPApp_page_owner_branch','Branch','info','home');
            $menu->addMenuItem('hotelERPApp_page_owner_customer','Customer','info');
            $menu->addMenuItem('hotelERPApp_page_owner_package','Package','info','briefcase');
            $menu->addMenuItem('hotelERPApp_page_owner_packageservice','Package Service');
            $menu->addMenuItem('hotelERPApp_page_owner_room','Room');
            $menu->addMenuItem('hotelERPApp_page_owner_roomcategory','Room Category');
            $menu->addMenuItem('hotelERPApp_page_owner_roomtype','Room Type');
            $menu->addMenuItem('hotelERPApp_page_owner_service','Service');
            $menu->addMenuItem('hotelERPApp_page_owner_employee','Employee');
            $menu->addMenuItem('hotelERPApp_page_owner_idcardtype','Id Type');

             
            
      }
} 

