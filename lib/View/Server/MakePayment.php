<?php

namespace hotelERPApp;

class View_Server_MakePayment extends \View{
	function init(){
		parent::init();

		$this->add('View_Info')->set('I am Make Payment View');
	}
}