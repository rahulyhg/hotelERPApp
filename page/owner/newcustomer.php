<?php
class page_hotelERPApp_page_owner_newcustomer extends page_componentBase_page_owner_main{
	function init(){
		parent::init();

		$this->h1->add('H1')->setElement('a')
             ->setAttr('href','?page=hotelERPApp_page_owner_customer')
             ->set($this->component_namespace);
		// $cr=$this->add('CRUD');
		// $cr->setModel('hotelERPApp/Model_Customer');
        $this->add('H1')->set("Customer Registration");
		$cols=$this->add('Columns');
		$col1=$cols->addColumn(2);
		$col2=$cols->addcolumn(8);
		$col3=$cols->addcolumn(2);
		$form=$col2->add('Form');
		// $form->setModel('hotelERPApp/Customer');
		
		// ----
		$form->addField('line','id_card_no');
		$form->addField('line','name');
		$form->addField('radio','gender');

		$form->addField('DatePicker','date');
		$form->addField('DatePicker','from');
		$form->addField('DatePicker','to');
		$form->addField('DatePicker','actual_checkin');
		$form->addField('DatePicker','actual_checkout');

		$form->addField('line','no_of_person');
		$form->addField('line','room_no');
		$form->addField('text','address');
		$form->addField('line','contact');
		$form->addField('line','email');
		$form->addField('checkbox','is_active');//->type('boolean') 

		// ---

		$form->addSubmit('Register');
		if($form->isSubmitted()) {
			$customer=$this->add('hotelERPApp/Model_Customer');
			$customer['id_card_no']=$form->get('id_card_no');
			$customer['name']=$form->get('name');
			$customer['gender']=$form->get('gender');
			$customer['date']=$form->get('date');
			$customer['from']=$form->get('from');
			$customer['to']=$form->get('to');
			$customer['actual_checkin']=$form->get('actual_checkin');
			$customer['actual_checkout']=$form->get('actual_checkout');
			$customer['no_of_person']=$form->get('no_of_person');
			$customer['room_no']=$form->get('room_no');
			$customer['address']=$form->get('address');
			$customer['contact']=$form->get('contact');
			$customer['email']=$form->get('email');
			$customer['is_active']=$form->get('is_active');
			$customer->save();
			$form->js()->reload()->Execute();

		}

	}
}