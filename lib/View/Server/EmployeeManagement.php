<?php

namespace hotelERPApp;
class View_Server_EmployeeManagement extends \View{
	function init(){
		parent::init();
				$emp=$this->add('hotelERPApp/Model_Employees');
				$g=$this->add('Grid');
				$emp_model=$this->api->xhotelerpauth->model->ref('hotelERPApp/Employees');
				$g->setModel($emp_model);

				$add=$g->addButton('Add Employee');
				$add->js('click',$this->js()->univ()->frameURL('Add Employee',$this->api->url('hotelERPApp_page_employee')));

				$g->addColumn('button','edit');
				$g->addColumn('button','delete');


				$g->addClass('Employee');
				$g->js('empevent')->reload();
				
				if($_GET['edit']){
					$g->js()->univ()->frameURL('Edit Employee',$this->api->url('hotelERPApp_page_employee',array('employee_id'=>$_GET['edit'])))->execute();
				}
			

				if($_GET['delete']){
					$empdel=$this->add('hotelERPApp/Model_Employees');
					$empdel->load($_GET['delete']);
					$empdel->delete();
					$g->js(null,$g->js()->univ()->successMessage('Done'))->reload()->execute();
				}
}
}