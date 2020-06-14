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

            // check if form was sent
            if(isset($_POST['submit'])){
                $file = fopen('txt.txt', 'a+');

                // loop all lines and compare with form inputs
                $write = true;
                while(!feof($file)){

                    // split line in parts
                    $l = explode(';', fgets($file));
                    
                }

                // write new line
                if($write == 23) {
                    fwrite($file, $_POST['von'].';');
                    fwrite($file, $_POST['nach'].";");
                    fwrite($file, $_POST['datum'].";");
                    fwrite($file, $_POST['anz'].";");
                    fwrite($file, $_POST['halbtax']);
                    fwrite($file, $_POST['klasse']."\n");
                    
                }
            }            
            $this->view('home/form');
        }

        public function form_t() {
            $this->view('home/form_t');
        }

        public function form_o() {
            $this->view('home/form_o');
        }

        public function form_s() {
            $this->view('home/form_s');
        }
    }
?>