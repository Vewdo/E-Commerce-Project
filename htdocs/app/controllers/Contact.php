<?php
class Contact extends Controller
{
    
    public function __construct()
    {
    }

    public function index()
    {
            $this->view('Contact/about');
    }

    public function contactus()
    {
        $this->view('Contact/contactus');
    }

    public function report()
    {
        $this->view('Contact/report');
    }
}
