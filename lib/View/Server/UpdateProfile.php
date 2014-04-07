<?php

namespace hotelERPApp;

class View_Server_UpdateProfile extends \View{
	function init(){
		parent::init();

		$this->add('View_Info')->set('I am Profile Update View');
	}
}