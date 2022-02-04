<?php


namespace App\classes;


class Student{

    protected $text;
    protected $students;
    protected $result = [];

    public function __construct($post=null){
        if(isset($post['search'])){
            $this->text = $post['search'];
        }

    }

    public function getAllStudent(){
        return [
            0=>[
                'name' => 'Rakib',
                'mobile' => '01916687307',
                'email' => 'rakib456@gmail.com',
                'address' => 'Dhanmondi'
            ],
            1=>[
                'name' => 'Hasan1',
                'mobile' => '01916687309',
                'email' => 'rakib458@gmail.com',
                'address' => 'Dhanmondi7'
            ],
            2=>[
                'name' => 'Hasan2',
                'mobile' => '01916687300',
                'email' => 'rakib456@gmail.com',
                'address' => 'Dhanmondi8'
            ],
            3=>[
                'name' => 'Hasan3',
                'mobile' => '01916687303',
                'email' => 'rakib453@gmail.com',
                'address' => 'Dhanmondi3'
            ],
            4=>[
                'name' => 'Rakib Hasan',
                'mobile' => '01916687307',
                'email' => 'rakib456@gmail.com',
                'address' => 'Dhanmondi'
            ],
            5=>[
                'name' => 'Rakib Hasan1',
                'mobile' => '01916687309',
                'email' => 'rakib458@gmail.com',
                'address' => 'Dhanmondi7'
            ],
            6=>[
                'name' => 'Rakib Hasan2',
                'mobile' => '01916687300',
                'email' => 'rakib456@gmail.com',
                'address' => 'Dhanmondi8'
            ],
            7=>[
                'name' => 'Rakib Hasan3',
                'mobile' => '01916687303',
                'email' => 'rakib453@gmail.com',
                'address' => 'Dhanmondi3'
            ],
        ];
    }
    public function getStudentBySearchText(){
        $this->students = $this->getAllStudent();
        foreach ($this->students as $student){
            if($this->text == $student['name']){
                $this->result = $student;
                break;
            }
        }
        return $this->result;
    }
}