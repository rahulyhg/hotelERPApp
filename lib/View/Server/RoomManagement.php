<?php

namespace hotelERPApp;

class View_Server_RoomManagement extends \View{
	function init(){
		parent::init();

				$room=$this->add('hotelERPApp/Model_Room');
				$g=$this->add('Grid');
				$g->setModel($room);

				$add=$g->addButton('Add Room');
				$add->js('click',$this->js()->univ()->frameURL('Add Room',$this->api->url('hotelERPApp_page_room')));

				$g->addColumn('button','edit');
				$g->addColumn('button','delete');


				$g->addClass('Room');
				$g->js('roomevent')->reload();
				
				if($_GET['edit']){
					$g->js()->univ()->frameURL('Edit Room',$this->api->url('hotelERPApp_page_room',array('room_id'=>$_GET['edit'])))->execute();
				}
			

				if($_GET['delete']){
					$roomdel=$this->add('hotelERPApp/Model_Room');
					$roomdel->load($_GET['delete']);
					$roomdel->delete();
					$g->js(null,$g->js()->univ()->successMessage('Done'))->reload()->execute();
				}
}
}