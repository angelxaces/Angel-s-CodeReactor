<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class X3cams extends MY_Controller {

	public function __construct()
	{
 		parent::__construct();
		@session_start();
		$this->load->helper(array('xml', 'email', 'form'));
		$this->load->helper('MY_curl');
		$this->mMenu = array(
				'Home' => array(
					'name'		=> 'Home Ⓘ',
					'url'		=> '/'
				),
				'Introduction' => array(
					'name'		=> 'introduction',
					'url'		=> '/home/introduction'
				),
				'Datastream' => array(
					'name'		=> 'DataStream',
					'url'		=> '/home/datastream'
				),
				'Datastream2' => array(
					'name'		=> 'DataStream2',
					'url'		=> '/home/datastream2'
				)
			);
	}


	public function index()
	{


		$this->render('home', 'with_breadcrumb');
	}

	public function introduction()
	{
		$c = array(
			'page_title' => 'Not Another Responsive Website Demo',
			'carousel' => true,
			'site_name' => 'Why chickes are offended by black tar'
		);
		$this->render('grid_layout', 'with_breadcrumb');
	}

	public function cast()
	{
		$this->render('cathouse', 'with_breadcrumb');
	}

	public function view_debugger()
	{
		$this->load->view('layouts/with_breadcrumb');
	}

	public function datastream() {


		$hdrs = array('track' => 'default', 'tour' => 'x1Rd', 'campaign' => 'KZ7tX', 'c' => '15', 'p' => '1', 'gender' => 'f');
		$this->mC = array(
			'menu' => array('children' => 'pole_north', 'url' => 'home/pole_north','name' => 'Acme: Arctic Division'),
			'toolbar' => array('children' => 'name', 'Cli'=> 'Command Line Interface' , 'url' => 'home/'),
			'site_name' => 'Acme: Arctic Division',
			'page_title' => 'NASCAR V3',
			'inner_view' => '../pole_north',
			'current_uri' => current_url(),
			'ctrler' => 'pole_north',
			'content' => 'Operation Pole North. Covert operation to bring all poles north. No pole left behind.',
			//'connections' => curl2xml('https://chaturbate.com/affiliates/in/?track=default&tour=x1Rd&campaign=KZ7tX&c=15&p=1', $hdrs)
			//'connections' => curl2xml('https://chaturbate.com/affiliates/api/onlinerooms/?format=xml&wm=KZ7tX', $hdrs)
			//'xml' => new SimpleXMLElement('https://chaturbate.com/affiliates/api/onlinerooms/?format=xml&wm=KZ7tX', 0, TRUE)
			//'xml' => new SimpleXML_load_file('https://chaturbate.com/affiliates/api/onlinerooms/?format=xml&wm=KZ7tX') or die ("error: same xml bullshit")
			//'connections' => json_decode($ch, false)
			//'connections' => $xml
		);

		$this->render('pole_north', 'with_breadcrumb');
		//$this->load->view('pole_north', $c);
		//curl_close($ch);

	}
	public function datastream2() {
		//$ch = curl_init('https://chaturbate.com/affiliates/in/?track=default&tour=x1Rd&campaign=KZ7tX&c=15&p=0"');
		//$opn = fopen('/affiliates/in/?track=default&tour=x1Rd&campaign=KZ7tX&c=100&p=0', 'w');
		// $options = array(
		// 	CURLOPT_URL => 'https://axacams.chaturbate.com',
		// 	CURLOPT_HEADER => TRUE,
		// 	CURLOPT_HTTPHEADER =>
		// 	array('track: default', 'tour: x1Rd', 'campaign: KZ7tX', 'c: 15', 'p: 0', 'format: xml'),
		// );

		// $options = array(
		// 	CURLOPT_URL => 'https://chaturbate.com/affiliates/api/onlinerooms/?format=xml&wm=KZ7tX',
		// 	CURLOPT_HEADER => TRUE,
		// 	);
		// curl_setopt_array($ch, $options);
		//
		// $xml = curl_exec($ch);


		$c = array(
			'menu' => array('children' => 'pole_north', 'url' => 'home/pole_north','name' => 'Acme: Arctic Division'),
			'site_name' => 'Acme: Arctic Division',
			'page_title' => 'up up and away... Ill get you a towel',
			'inner_view' => '../pole_north',
			'current_uri' => current_url(),
			'ctrler' => 'pole_north',
			'content' => 'Operation Pole North. Covert operation to bring all poles north. No pole left behind.',
			'connections' => $this->render_json(curl2xml('https://chaturbate.com/affiliates/api/onlinerooms/?format=json&wm=KZ7tX'), true)
		);
		$this->render('pole_north', 'with_breadcrumb');

	}
}
//
