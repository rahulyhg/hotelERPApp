<?php

namespace hotelERPApp;

class View_Server_CheckRoomAvailability extends \View{
	function init(){
		parent::init();

		$this->add('View_Info')->set('I am Chekc Room Availability View');
	}
}