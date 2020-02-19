<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('pokemon_model', 'pokeManager');
    }

    public function index()
    {

        // Chargement des CSS
        $this->data['css'] = $this->layout->add_css(array(
            'assets/plugins/bootstrap/css/bootstrap.min',
            'assets/css/styles'
        ));
        // Chargement des JS
        $this->data['js'] = $this->layout->add_js(array(
            'assets/plugins/jquery-3.3.1.min',
            'assets/plugins/bootstrap/js/bootstrap.min',
        ));

        $this->data['pokemons'] = $this->pokeManager->getPokemons('*');

        $this->data['title'] = 'Contenu du Pokédex';

        $this->data['subview'] = 'front_office/home/main';

        $this->load->view('components_home/main', $this->data);
        //die(var_dump($this->data['pokemons']));

    }

    public function cv()
    {

        // Chargement des CSS
        $this->data['css'] = $this->layout->add_css(array(
            'assets/plugins/bootstrap/css/bootstrap.min',
            'assets/css/styles'
        ));
        // Chargement des JS
        $this->data['js'] = $this->layout->add_js(array(
            'assets/plugins/jquery-3.3.1.min',
            'assets/plugins/bootstrap/js/bootstrap.min',
        ));

        $this->data['title'] = 'Mon CV';

        $this->data['subview'] = 'front_office/cv/main';

        $this->load->view('components_home/main', $this->data);
        //die(var_dump($this->data['pokemons']));

    }

    public function contact()
    {

        // Chargement des CSS
        $this->data['css'] = $this->layout->add_css(array(
            'assets/plugins/bootstrap/css/bootstrap.min',
            'assets/css/styles'
        ));
        // Chargement des JS
        $this->data['js'] = $this->layout->add_js(array(
            'assets/plugins/jquery-3.3.1.min',
            'assets/plugins/bootstrap/js/bootstrap.min',
        ));

        $this->data['title'] = 'Contactez moi';

        $this->data['subview'] = 'front_office/contact/main';

        $this->load->view('components_home/main', $this->data);
        //die(var_dump($this->data['pokemons']));

    }

    public function recommandations()
    {

        // Chargement des CSS
        $this->data['css'] = $this->layout->add_css(array(
            'assets/plugins/bootstrap/css/bootstrap.min',
            'assets/css/styles'
        ));
        // Chargement des JS
        $this->data['js'] = $this->layout->add_js(array(
            'assets/plugins/jquery-3.3.1.min',
            'assets/plugins/bootstrap/js/bootstrap.min',
        ));

        $this->data['title'] = 'Votre recommandation';

        $this->data['subview'] = 'front_office/recommandations/main';

        $this->load->view('components_home/main', $this->data);
        //die(var_dump($this->data['pokemons']));

    }
    public function mes_recommandations()
    {

        // Chargement des CSS
        $this->data['css'] = $this->layout->add_css(array(
            'assets/plugins/bootstrap/css/bootstrap.min',
            'assets/css/styles'
        ));
        // Chargement des JS
        $this->data['js'] = $this->layout->add_js(array(
            'assets/plugins/jquery-3.3.1.min',
            'assets/plugins/bootstrap/js/bootstrap.min',
        ));

        $this->data['title'] = 'Vos recommandation';

        $this->data['subview'] = 'front_office/mes_recommandations/main';

        $this->load->view('components_home/main', $this->data);
        //die(var_dump($this->data['pokemons']));

    }
    public function projects()
    {

        // Chargement des CSS
        $this->data['css'] = $this->layout->add_css(array(
            'assets/plugins/bootstrap/css/bootstrap.min',
            'assets/css/styles'
        ));
        // Chargement des JS
        $this->data['js'] = $this->layout->add_js(array(
            'assets/plugins/jquery-3.3.1.min',
            'assets/plugins/bootstrap/js/bootstrap.min',
        ));

        $this->data['title'] = 'Mes projets';

        $this->data['subview'] = 'front_office/projects/main';

        $this->load->view('components_home/main', $this->data);
        //die(var_dump($this->data['pokemons']));

    }
}




