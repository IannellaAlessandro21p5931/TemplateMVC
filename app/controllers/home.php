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

        public function form_t() {
            include('../app/data/trainstations.php');
            $this->view('home/form_t', [ 'trainstations' => $trainstations ]);

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
                    fwrite($file, $_POST['halbtax'].";");
                    fwrite($file, $_POST['klasse'].";");
                    fwrite($file, $_POST['typ'].";");
                    
                    //Preis Berechnen Von Frauenfeld
                    if($_POST['von'] == 0) {
                        if($_POST['nach'] == 1) {
                            $preis = 10;
                            if($_POST['anz'] >= 1) {
                                $preis = $preis * $_POST['anz'];
                                if($_POST['halbtax'] == 2) {
                                    $preis = $preis / $_POST['halbtax'];
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                } else if($_POST['halbtax'] == 1) {
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                }
                            }
                        } else if ($_POST['nach'] == 2) {
                            $preis = 15;
                            if($_POST['anz'] >= 1) {
                                $preis = $preis * $_POST['anz'];
                                if($_POST['halbtax'] == 2) {
                                    $preis = $preis / $_POST['halbtax'];
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                } else if($_POST['halbtax'] == 1) {
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                }
                            }
                        } else if ($_POST['nach'] == 3) {
                            $preis = 20;
                            if($_POST['anz'] >= 1) {
                                $preis = $preis * $_POST['anz'];
                                if($_POST['halbtax'] == 2) {
                                    $preis = $preis / $_POST['halbtax'];
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                } else if($_POST['halbtax'] == 1) {
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                }
                            }
                        }
                    }

                    //Preis Berechnen Von Kreuzlingen
                    if($_POST['von'] == 1) {
                        if($_POST['nach'] == 0) {
                            $preis = 10;
                            if($_POST['anz'] >= 1) {
                                $preis = $preis * $_POST['anz'];
                                if($_POST['halbtax'] == 2) {
                                    $preis = $preis / $_POST['halbtax'];
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                } else if($_POST['halbtax'] == 1) {
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                }
                            }
                        } else if ($_POST['nach'] == 2) {
                            $preis = 15;
                            if($_POST['anz'] >= 1) {
                                $preis = $preis * $_POST['anz'];
                                if($_POST['halbtax'] == 2) {
                                    $preis = $preis / $_POST['halbtax'];
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                } else if($_POST['halbtax'] == 1) {
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                }
                            }
                        } else if ($_POST['nach'] == 3) {
                            $preis = 20;
                            if($_POST['anz'] >= 1) {
                                $preis = $preis * $_POST['anz'];
                                if($_POST['halbtax'] == 2) {
                                    $preis = $preis / $_POST['halbtax'];
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                } else if($_POST['halbtax'] == 1) {
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                }
                            }
                        }
                    }

                    //Preis Berechnen Von Oberaach
                    if($_POST['von'] == 2) {
                        if($_POST['nach'] == 0) {
                            $preis = 15;
                            if($_POST['anz'] >= 1) {
                                $preis = $preis * $_POST['anz'];
                                if($_POST['halbtax'] == 2) {
                                    $preis = $preis / $_POST['halbtax'];
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                } else if($_POST['halbtax'] == 1) {
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                }
                            }
                        } else if ($_POST['nach'] == 1) {
                            $preis = 15;
                            if($_POST['anz'] >= 1) {
                                $preis = $preis * $_POST['anz'];
                                if($_POST['halbtax'] == 2) {
                                    $preis = $preis / $_POST['halbtax'];
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                } else if($_POST['halbtax'] == 1) {
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                }
                            }
                        } else if ($_POST['nach'] == 3) {
                            $preis = 5;
                            if($_POST['anz'] >= 1) {
                                $preis = $preis * $_POST['anz'];
                                if($_POST['halbtax'] == 2) {
                                    $preis = $preis / $_POST['halbtax'];
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                } else if($_POST['halbtax'] == 1) {
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                }
                            }
                        }
                    }

                    //Preis Berechnen Von Romanshorn
                    if($_POST['von'] == 3) {
                        if($_POST['nach'] == 0) {
                            $preis = 20;
                            if($_POST['anz'] >= 1) {
                                $preis = $preis * $_POST['anz'];
                                if($_POST['halbtax'] == 2) {
                                    $preis = $preis / $_POST['halbtax'];
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                } else if($_POST['halbtax'] == 1) {
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                }
                            }
                        } else if ($_POST['nach'] == 1) {
                            $preis = 20;
                            if($_POST['anz'] >= 1) {
                                $preis = $preis * $_POST['anz'];
                                if($_POST['halbtax'] == 2) {
                                    $preis = $preis / $_POST['halbtax'];
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                } else if($_POST['halbtax'] == 1) {
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                }
                            }
                        } else if ($_POST['nach'] == 2) {
                            $preis = 5;
                            if($_POST['anz'] >= 1) {
                                $preis = $preis * $_POST['anz'];
                                if($_POST['halbtax'] == 2) {
                                    $preis = $preis / $_POST['halbtax'];
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                } else if($_POST['halbtax'] == 1) {
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 4) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        public function form_o() {
            include('../app/data/trainstations.php');
            $this->view('home/form_o', [ 'trainstations' => $trainstations ]);

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
                    fwrite($file, $_POST['halbtax'].";");
                    fwrite($file, $_POST['klasse'].";");
                    fwrite($file, $_POST['typ'].";");
                    
                    //Preis Berechnen Von Frauenfeld
                    if($_POST['von'] == 0) {
                        if($_POST['nach'] == 1) {
                            $preis = 10;
                            if($_POST['anz'] >= 1) {
                                $preis = $preis * $_POST['anz'];
                                if($_POST['halbtax'] == 2) {
                                    $preis = $preis / $_POST['halbtax'];
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                } else if($_POST['halbtax'] == 1) {
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                }
                            }
                        } else if ($_POST['nach'] == 2) {
                            $preis = 15;
                            if($_POST['anz'] >= 1) {
                                $preis = $preis * $_POST['anz'];
                                if($_POST['halbtax'] == 2) {
                                    $preis = $preis / $_POST['halbtax'];
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                } else if($_POST['halbtax'] == 1) {
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                }
                            }
                        } else if ($_POST['nach'] == 3) {
                            $preis = 20;
                            if($_POST['anz'] >= 1) {
                                $preis = $preis * $_POST['anz'];
                                if($_POST['halbtax'] == 2) {
                                    $preis = $preis / $_POST['halbtax'];
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                } else if($_POST['halbtax'] == 1) {
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                }
                            }
                        }
                    }

                    //Preis Berechnen Von Kreuzlingen
                    if($_POST['von'] == 1) {
                        if($_POST['nach'] == 0) {
                            $preis = 10;
                            if($_POST['anz'] >= 1) {
                                $preis = $preis * $_POST['anz'];
                                if($_POST['halbtax'] == 2) {
                                    $preis = $preis / $_POST['halbtax'];
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                } else if($_POST['halbtax'] == 1) {
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                }
                            }
                        } else if ($_POST['nach'] == 2) {
                            $preis = 15;
                            if($_POST['anz'] >= 1) {
                                $preis = $preis * $_POST['anz'];
                                if($_POST['halbtax'] == 2) {
                                    $preis = $preis / $_POST['halbtax'];
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                } else if($_POST['halbtax'] == 1) {
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                }
                            }
                        } else if ($_POST['nach'] == 3) {
                            $preis = 20;
                            if($_POST['anz'] >= 1) {
                                $preis = $preis * $_POST['anz'];
                                if($_POST['halbtax'] == 2) {
                                    $preis = $preis / $_POST['halbtax'];
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                } else if($_POST['halbtax'] == 1) {
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                }
                            }
                        }
                    }

                    //Preis Berechnen Von Oberaach
                    if($_POST['von'] == 2) {
                        if($_POST['nach'] == 0) {
                            $preis = 15;
                            if($_POST['anz'] >= 1) {
                                $preis = $preis * $_POST['anz'];
                                if($_POST['halbtax'] == 2) {
                                    $preis = $preis / $_POST['halbtax'];
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                } else if($_POST['halbtax'] == 1) {
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                }
                            }
                        } else if ($_POST['nach'] == 1) {
                            $preis = 15;
                            if($_POST['anz'] >= 1) {
                                $preis = $preis * $_POST['anz'];
                                if($_POST['halbtax'] == 2) {
                                    $preis = $preis / $_POST['halbtax'];
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                } else if($_POST['halbtax'] == 1) {
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                }
                            }
                        } else if ($_POST['nach'] == 3) {
                            $preis = 5;
                            if($_POST['anz'] >= 1) {
                                $preis = $preis * $_POST['anz'];
                                if($_POST['halbtax'] == 2) {
                                    $preis = $preis / $_POST['halbtax'];
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                } else if($_POST['halbtax'] == 1) {
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                }
                            }
                        }
                    }

                    //Preis Berechnen Von Romanshorn
                    if($_POST['von'] == 3) {
                        if($_POST['nach'] == 0) {
                            $preis = 20;
                            if($_POST['anz'] >= 1) {
                                $preis = $preis * $_POST['anz'];
                                if($_POST['halbtax'] == 2) {
                                    $preis = $preis / $_POST['halbtax'];
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                } else if($_POST['halbtax'] == 1) {
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                }
                            }
                        } else if ($_POST['nach'] == 1) {
                            $preis = 20;
                            if($_POST['anz'] >= 1) {
                                $preis = $preis * $_POST['anz'];
                                if($_POST['halbtax'] == 2) {
                                    $preis = $preis / $_POST['halbtax'];
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                } else if($_POST['halbtax'] == 1) {
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                }
                            }
                        } else if ($_POST['nach'] == 2) {
                            $preis = 5;
                            if($_POST['anz'] >= 1) {
                                $preis = $preis * $_POST['anz'];
                                if($_POST['halbtax'] == 2) {
                                    $preis = $preis / $_POST['halbtax'];
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                } else if($_POST['halbtax'] == 1) {
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        public function form_s() {
            include('../app/data/trainstations.php');
            $this->view('home/form_s', [ 'trainstations' => $trainstations ]);

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
                    fwrite($file, $_POST['halbtax'].";");
                    fwrite($file, $_POST['klasse'].";");
                    fwrite($file, $_POST['typ'].";");
                    
                    //Preis Berechnen Von Frauenfeld
                    if($_POST['von'] == 0) {
                        if($_POST['nach'] == 1) {
                            $preis = 10;
                            if($_POST['anz'] >= 1) {
                                $preis = $preis * $_POST['anz'];
                                if($_POST['halbtax'] == 2) {
                                    $preis = $preis / $_POST['halbtax'];
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                } else if($_POST['halbtax'] == 1) {
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                }
                            }
                        } else if ($_POST['nach'] == 2) {
                            $preis = 15;
                            if($_POST['anz'] >= 1) {
                                $preis = $preis * $_POST['anz'];
                                if($_POST['halbtax'] == 2) {
                                    $preis = $preis / $_POST['halbtax'];
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                } else if($_POST['halbtax'] == 1) {
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                }
                            }
                        } else if ($_POST['nach'] == 3) {
                            $preis = 20;
                            if($_POST['anz'] >= 1) {
                                $preis = $preis * $_POST['anz'];
                                if($_POST['halbtax'] == 2) {
                                    $preis = $preis / $_POST['halbtax'];
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                } else if($_POST['halbtax'] == 1) {
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                }
                            }
                        }
                    }

                    //Preis Berechnen Von Kreuzlingen
                    if($_POST['von'] == 1) {
                        if($_POST['nach'] == 0) {
                            $preis = 10;
                            if($_POST['anz'] >= 1) {
                                $preis = $preis * $_POST['anz'];
                                if($_POST['halbtax'] == 2) {
                                    $preis = $preis / $_POST['halbtax'];
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                } else if($_POST['halbtax'] == 1) {
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                }
                            }
                        } else if ($_POST['nach'] == 2) {
                            $preis = 15;
                            if($_POST['anz'] >= 1) {
                                $preis = $preis * $_POST['anz'];
                                if($_POST['halbtax'] == 2) {
                                    $preis = $preis / $_POST['halbtax'];
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                } else if($_POST['halbtax'] == 1) {
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                }
                            }
                        } else if ($_POST['nach'] == 3) {
                            $preis = 20;
                            if($_POST['anz'] >= 1) {
                                $preis = $preis * $_POST['anz'];
                                if($_POST['halbtax'] == 2) {
                                    $preis = $preis / $_POST['halbtax'];
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                } else if($_POST['halbtax'] == 1) {
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                }
                            }
                        }
                    }

                    //Preis Berechnen Von Oberaach
                    if($_POST['von'] == 2) {
                        if($_POST['nach'] == 0) {
                            $preis = 15;
                            if($_POST['anz'] >= 1) {
                                $preis = $preis * $_POST['anz'];
                                if($_POST['halbtax'] == 2) {
                                    $preis = $preis / $_POST['halbtax'];
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                } else if($_POST['halbtax'] == 1) {
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                }
                            }
                        } else if ($_POST['nach'] == 1) {
                            $preis = 15;
                            if($_POST['anz'] >= 1) {
                                $preis = $preis * $_POST['anz'];
                                if($_POST['halbtax'] == 2) {
                                    $preis = $preis / $_POST['halbtax'];
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                } else if($_POST['halbtax'] == 1) {
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                }
                            }
                        } else if ($_POST['nach'] == 3) {
                            $preis = 5;
                            if($_POST['anz'] >= 1) {
                                $preis = $preis * $_POST['anz'];
                                if($_POST['halbtax'] == 2) {
                                    $preis = $preis / $_POST['halbtax'];
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                } else if($_POST['halbtax'] == 1) {
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                }
                            }
                        }
                    }

                    //Preis Berechnen Von Romanshorn
                    if($_POST['von'] == 3) {
                        if($_POST['nach'] == 0) {
                            $preis = 20;
                            if($_POST['anz'] >= 1) {
                                $preis = $preis * $_POST['anz'];
                                if($_POST['halbtax'] == 2) {
                                    $preis = $preis / $_POST['halbtax'];
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                } else if($_POST['halbtax'] == 1) {
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                }
                            }
                        } else if ($_POST['nach'] == 1) {
                            $preis = 20;
                            if($_POST['anz'] >= 1) {
                                $preis = $preis * $_POST['anz'];
                                if($_POST['halbtax'] == 2) {
                                    $preis = $preis / $_POST['halbtax'];
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                } else if($_POST['halbtax'] == 1) {
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                }
                            }
                        } else if ($_POST['nach'] == 2) {
                            $preis = 5;
                            if($_POST['anz'] >= 1) {
                                $preis = $preis * $_POST['anz'];
                                if($_POST['halbtax'] == 2) {
                                    $preis = $preis / $_POST['halbtax'];
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                } else if($_POST['halbtax'] == 1) {
                                    if($_POST['klasse'] == 2) {
                                        $preis = $preis * $_POST['klasse'];
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    } else if($_POST['klasse'] == 1) {
                                        if($_POST['typ'] == 1) {
                                            $preis = $preis * $_POST['typ'];
                                            fwrite($file, $preis."\n");
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
?>