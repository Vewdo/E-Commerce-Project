<?php
class Site extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        if(strcasecmp($actual_link, 'http://localhost/Site/MainPage') == 0){
            $this->view('Site/MainPage');
        }else{
            $this->view('Site/MainPageLight');
        }

        
    }
}