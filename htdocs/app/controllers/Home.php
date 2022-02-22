<?php
class Home extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        if(strcasecmp($actual_link, 'http://localhost/Main/timeline') == 0){
            $this->view('Main/timeline');
        }else{
            $this->view('Main/home');
        }

        
    }
}
