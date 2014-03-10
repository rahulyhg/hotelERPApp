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
            $menu->addMenuItem('hotelERPApp_page_owner_service','Service','info');
            $menu->addMenuItem('hotelERPApp_page_owner_room','Room','info');
            $menu->addMenuItem('hotelERPApp_page_owner_packageservice','Package Service','info');
            $menu->addMenuItem('hotelERPApp_page_owner_roomcategory','Room Category','info');
            $menu->addMenuItem('hotelERPApp_page_owner_roomtype','Room Type','info');
            $menu->addMenuItem('hotelERPApp_page_owner_employee','Employee','info');
            $menu->addMenuItem('hotelERPApp_page_owner_idcardtype','Id Type','info');

             
            
      }
} 

