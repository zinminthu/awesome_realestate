<?php
defined('BASEPATH') OR exit('No direct script access allowed');//

class Blog extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()  //action
	{
		//$this->load->view('welcome_message');
		$articles = array(
			array('id' => 1, 'title'=>'title1','description'=>'blah...'),
			array('id' => 2, 'title'=>'title2','description'=>'blah blah...'),
			array('id' => 3, 'title'=>'title3','description'=>'blah blah blah...'));

		$data['articles']= $articles;

		$this->load->view('blog',$data);
	}

	
}
