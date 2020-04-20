<?php
    class User extends Controller {

        public function __construct() {
            
        }

        public function show($name = ''){
            $this->view('user/show');
        }
    }
?>