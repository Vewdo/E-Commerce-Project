<?php
class Home extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
            $this->view('Main/home');      
    }

    public function timeline()
    {
        $this->view('Main/timeline');
    }
}
