<?php

namespace hotelERPApp;

class View_Server_Booking extends \View{
	function init(){
		parent::init();

				$cust=$this->add('hotelERPApp/Model_Customer');
				$g=$this->add('Grid');
				$cust_model=$this->api->xhotelerpauth->model->ref('hotelERPApp/Customer');
				$g->setModel($cust_model);

				$add=$g->addButton('Add Customer');
				$add->js('click',$this->js()->univ()->frameURL('Add Customer',$this->api->url('hotelERPApp_page_customer')));

				$g->addColumn('button','checkin');
				$g->addColumn('button','checkout');
				$g->addColumn('button','cancle');
				$g->addColumn('button','edit');
				$g->addColumn('button','delete');


				$g->addClass('Customer');
				$g->js('custevent')->reload();
				
				if($_GET['edit']){
					$g->js()->univ()->frameURL('Edit Customer',$this->api->url('hotelERPApp_page_customer',array('customer_id'=>$_GET['edit'])))->execute();
				}
			

				if($_GET['delete']){
					$custdel=$this->add('hotelERPApp/Model_Customer');
					$custdel->load($_GET['delete']);
					$custdel->delete();
					$g->js(null,$g->js()->univ()->successMessage('Done'))->reload()->execute();
				}
	}
}