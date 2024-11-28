<?php 

    class App {
        protected $controller = 'Home';
        protected $methot = 'index';
        protected $params = [];

        public function __construct()
        {
            $url = $this->parseURL();
            //controller
            //mencocokan yang ada di folder dengan tang ada di url
            if(file_exists('../app/controllers/'  $url[0] . '.php') ) {
                $this->controller = $url=[0];
                unset($url[0]);
            }
            //memanggil contreoller yang sesuai di tuliskan di url
            require_once '../app/controllers/' . $this->controller . '.php  ';

            //jika nama controller tidak ada, di timpa file controller yang baru
            $this->controller = new $this->controller;
        }

class App {
    public function __construct()
    {
        $url = $this->parseURL();
        var_dump($url);
    }

    public function parseURL()
    {
        if( isset($_GET['url']) ){
            $url=rtrim($_GET['url'], '/');
            $url=
            return $url;
        }
    }
}


<?php
    class App {


        //method
        //cek index ke 1 method
        if( isset($url[1])){

            //cek apakah ada method
            if( method_exists($this->controller, $url[1]) ) {

                //jika tidak ada maka di timpa dari url
                $this->controller = $url[1];
                unset($url[1]);
            }
        }
        
        //params
        if( !empaty($url)) {
            $this->params = array_values($url);
        }

        call_user_func_array([$this-> controller,$this->method],$this->params); 

        public function parseURL() {
            if(isset($_GET['url']) ) {
                //menghilangkan simbol pada akhir url
                $url = rtrim($_GET['url'], '/');

                //membersihkan url sebelum di pecah
                $url = filter_var($url, FILTER_SANITIZE_URL);

                //memecah controller dan method yand ada di url
                $url = explode('/',$url);
                return $url;

            }
        }
    }