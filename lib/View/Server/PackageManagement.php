<?php

namespace hotelERPApp;

class View_Server_PackageManagement extends \View{
	function init(){
		parent::init();

				$package=$this->add('hotelERPApp/Model_Package');
				$g=$this->add('Grid');
				$package_model=$this->api->xhotelerpauth->model->ref('hotelERPApp/Package');
				$g->setModel($package_model);

				$add=$g->addButton('Add Package');
				$add->js('click',$this->js()->univ()->frameURL('Add Package',$this->api->url('hotelERPApp_page_package')));

				$g->addColumn('button','edit');
				$g->addColumn('button','delete');


				$g->addClass('Package');
				$g->js('packageevent')->reload();
				
				if($_GET['edit']){
					$g->js()->univ()->frameURL('Edit Package',$this->api->url('hotelERPApp_page_package',array('package_id'=>$_GET['edit'])))->execute();
				}
			

				if($_GET['delete']){
					$packdel=$this->add('hotelERPApp/Model_Package');
					$packdel->load($_GET['delete']);
					$packdel->delete();
					$g->js(null,$g->js()->univ()->successMessage('Done'))->reload()->execute();
				}



	}
}