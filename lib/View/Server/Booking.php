<?php

namespace hotelERPApp;

class View_Server_Booking extends \View{
	function init(){
		parent::init();

		$this->add('View_Info')->set('I am Booking View');
	}
}