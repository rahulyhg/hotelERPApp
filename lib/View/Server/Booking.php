<?php

namespace hotelERPApp;

class View_Server_Booking extends \View{
	function init(){
		parent::init();


			$customer=$this->add('hotelERPApp/Model_Customer');
				$g=$this->add('CRUD');
				$g->setModel($customer);
	}
}