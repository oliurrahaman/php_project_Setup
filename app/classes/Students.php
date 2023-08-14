<?php


namespace App\classes;


class Students
{
    public  $students=[];
    public  function __construct()
    {
        $this->students=[
          0=>[
              'name'=>'oliur',
              'email'=>'oliur@gmail.com',
              'mobile'=>'01906098450',
          ],
          1=>[
              'name'=>'Sany',
              'email'=>'sany@gmail.com',
              'mobile'=>'01706098450',
          ],
          2=>[
              'name'=>'Rajon',
              'email'=>'rajon@gmail.com',
              'mobile'=>'01806098450',
          ],

        ];
    }
    public function  getAllStudents()
    {
        return $this->students;
    }

}