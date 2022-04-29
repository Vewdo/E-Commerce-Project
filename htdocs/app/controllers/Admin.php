<?php
class Site extends Controller
{
	public function __construct()
    {
        $this->loginModel = $this-> model('loginModel');
    }

    public function index()
    {
            $this->view('Admin/AdminPage');       
    }


}


?>