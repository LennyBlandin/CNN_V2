<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model', 'userManager');
	}

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
	public function index()
	{
		// Chargement des CSS
		$this->data['css'] = $this->layout->add_css(array(
			'assets/plugins/bootstrap/css/bootstrap.min',
			'assets/plugins/elegant_font/css/style',
			'assets/css/styles'
		));
		// Chargement des JS
		$this->data['js'] = $this->layout->add_js(array(
			'assets/plugins/jquery-3.3.1.min',
			'assets/plugins/bootstrap/js/bootstrap.min',
		));

		// Chargement de la vue
		$this->data['title'] = '';
		$this->data['subview'] = 'index';

		// Définition de la variable pour voir si l'utilisateur est connecté
		// $loggedInCheck = $this->checkIfLoggedIn();

		// die(var_dump($loggedInCheck));

		// Si l'utilisateur est connecté on affiche un header différent
		/* if ($loggedInCheck) {

		}*/

		$this->load->view('components_home/main', $this->data);

		//$this->data['test'] = 'une donnée';

		//$this->layout->view('index', $this->data);

		// die(var_dump($test));

		// $this->load->view('index');
	}
}
