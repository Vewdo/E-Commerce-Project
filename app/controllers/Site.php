<?php
class Site extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
            $this->view('Site/MainPage');       
    }

    public function Settings()
    {
        $this->view('Site/Settings');  
    }

    public function AdminPage()
    {
        $this->view('Site/AdminPage');  
    }

    public function CartPage()
    {
        $this->view('Site/CartPage');  
    }

    public function Search()
    {

        if(!isset($_POST['input'])){
        $data=[
                'categories' => trim($_POST['categories']),
            ];

            echo "<video autoplay loop>
            <source src='https://cdn.discordapp.com/attachments/802332587229970457/820945192974155776/spy.mp4' type='video/mp4'>
            </video>";

        }else{
            $data=[
                'inputs' => trim($_POST['input']),
            ];
            

        }
      
        $this->view('Site/Search',$data);  
    }
}