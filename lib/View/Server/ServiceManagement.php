<?php

namespace hotelERPApp;

class View_Server_ServiceManagement extends \View{
	function init(){
		parent::init();



				$service=$this->add('hotelERPApp/Model_Service');
				$g=$this->add('Grid');
				$g->setModel($service);

				$add=$g->addButton('Add Service');
				$add->js('click',$this->js()->univ()->frameURL('Add Service',$this->api->url('hotelERPApp_page_service')));

				$g->addColumn('button','edit');
				$g->addColumn('button','delete');


				$g->addClass('Service');
				$g->js('serviceevent')->reload();
				
				if($_GET['edit']){
					$g->js()->univ()->frameURL('Edit Service',$this->api->url('hotelERPApp_page_service',array('service_id'=>$_GET['edit'])))->execute();
				}
			

				if($_GET['delete']){
					$servicedel=$this->add('hotelERPApp/Model_Service');
					$servicedel->load($_GET['delete']);
					$servicedel->delete();
					$g->js(null,$g->js()->univ()->successMessage('Done'))->reload()->execute();
				}



	}
}



		
  		// $tabs=$this->add('Tabs');
		// $tab1=$tabs->addTab('New Service');
		// $tab2=$tabs->addTab('Show Service');

		// $cr1=$tab1->add('CRUD');


		// 	if($cr1->grid){
    
		// 	$cr1->grid->addQuickSearch(array('name'));
	
		// 	$cr1->grid->addPaginator(10);

		// }

		// $cr1->setModel($this->api->xhotelerpauth->model->ref('hotelERPApp/Service'));



		// $cr=$tab2->add('CRUD',array('allow_add'=>false,'allow_edit'=>false,'allow_del'=>false));

		// 	if($cr->grid){
    
		// 	$cr->grid->addQuickSearch(array('name'));
	
		// 	$cr->grid->addPaginator(10);

			
		// }

		// $service=$this->api->xhotelerpauth->model->ref('hotelERPApp/Service');
		// $service->addCondition('is_active',true);

		// $cr->setModel('hotelERPApp/Model_ShowService');



	
