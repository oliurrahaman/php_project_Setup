<?php


namespace App\classes;


class Home
{
    public $message,$student,$students,$product,$products;
    public function  __construct()
    {
        $this->message ="Hello Oli";
    }
    public function index(){
        $this->student= new Students();
        $this->students=$this->student->getAllStudents();


      return view('home',['students'=>$this->students]);
    }
    public  function about()
    {
        $this->product= new Products();
        $this->products=$this->product->getAllProducts();
        return view('about',['products'=>$this->products]);
    }
    public  function fullName()
    {
        return view('full-name');
    }
    public function  contact()
    {
        return view('contact');
    }


}