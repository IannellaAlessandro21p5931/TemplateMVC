<?php
    class Home extends Controller {

        protected $user;
        public function __construct() {
            $this->user = $this->model('User');
        }

        public function index($name = ''){
            $user = $this->model('User');
            $user->name = $name;
            $this->view('home/index', ['user' => $user]);

            $this->goto('home', 'start');
        }

        public function start() {
            $this->view('home/start');
        }

        public function auswahl() {
            $this->view('home/auswahl');
        }

        public function form() {
            
            include('../app/data/trainstations.php');
            $this->view('home/form', [ 'trainstations' => $trainstations ]);
            
            $this->view('home/form');

        }
    }
?>