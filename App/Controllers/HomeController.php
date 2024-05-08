<?php 



class HomeController extends Controller
{
    public function index()
    {
        $data = ["name"=>"Home Page"];
        $this->view('home',$data);
    }
}