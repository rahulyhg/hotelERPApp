<?php

namespace hotelERPApp;

class Plugins_AuthenticationCheck extends \componentBase\Plugin{
	public $namespace = 'hotelERPApp';

	function init(){
		parent::init();
		
		$this->addHook('website-page-loaded',array($this,'AuthenticatePage'));
	}

	function AuthenticatePage($obj,&$page){

		$subpage = $_GET['subpage'];
		// throw new \Exception($_GET['cairo_ps_surface_dsc_begin_page_setup(surface)e'], 1);
		

		// ONLY WORKS FOR PAGES CONTAINS "xsocial-" IN PAGE
		// DO NOT CHECK FOR xsocial-login PAGE

		$allowed_page=array('xhotelerp-branchadminlogin');

		if(strpos($subpage,	'xhotelerp-') === 0 AND !in_array($subpage, $allowed_page)){
			$allowed_page = array(
					'branch'=>array(),
				);

			$login_page=array(
					'branch'=>'xhotelerp-branchadminlogin',
				);
			
			// IF session has logged_in_user value meanse user is there
			// load auth in api->xsocialauth and login this user
			$logged_in_user = $this->api->recall('logged_in_user',false);
			$type_of_user = $this->api->recall('type_of_user',false);
			
			if(!$logged_in_user){
				if(in_array($subpage, $allowed_page['branch'])){
					$this->api->redirect($this->api->url(null,array('subpage'=>$login_page['branch'])));
				}
				
				$this->api->redirect($this->api->url(null,array('subpage'=>'home')));
			}
			
			// if(!in_array($subpage, $allowed_page[$type_of_user])){				
			// 	$this->api->redirect($this->api->url(null,array('subpage'=>$login_page[$type_of_user])));
			// }

			$xhotelerpauth =$this->add('BasicAuth',array('is_default_auth'=>false));
			$xhotelerpauth->setModel('hotelERPApp/Branch','email','password');
			$this->api->xhotelerpauth = $xhotelerpauth;
				
			// TODO :: Set cu_id = null when logout

			$xhotelerpauth->login($logged_in_user);

		}
	}

	function getDefaultParams($new_epan){}
}