<?php
class Contact extends Controller
{
    
    public function __construct()
    {
    }




    public function index()
    {
        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        if(strcasecmp($actual_link, 'http://localhost/Contact/about') == 0){
            $this->view('Contact/about');
        }else{
            $this->view('Contact/contactus');
        }
    }
}
