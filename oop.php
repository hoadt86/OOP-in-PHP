<?php
// Tính trừu tượng
interface getInfo{
    public function getInfo();
}

abstract class Person{ 
    public $name;//tính Đóng gói: được thể hiện bằng phạm vi truy cập 
    public $email;
    protected $tel;// protected: chỉ được truy cập trong class và ở class con

    public abstract function setInfo($name,$email, $tel );
    public abstract function getInfo();

}
//Tính kế thừa: class Teacher kế thừa class Person
class Teacher extends Person implements getInfo{
    //Tính đa hình: ghi đè phương thức của lớp cha
    public function setInfo($name, $email, $tel)
    {
        $this->name = $name;
        $this->email = $email;
        $this->tel = $tel;
    }
    
    public function getInfo()
    {
        return 'Tên giáo viên là: '.$this->name.'<br/>' .'Email: '.$this->email.'<br/>' .'Số điện thoại: '.$this->tel; 
    }
}
//Tính kế thừa: class Student kế thừa class Person
class Student extends Person implements getInfo{
    //Tính đa hình: ghi đè phương thức của lớp cha
    public function setInfo($name, $email, $tel)
    {
        $this->name = $name;
        $this->email = $email;
        $this->tel = $tel;
    }
    
    public function getInfo()
    {
        return 'Tên học sinh là: '.$this->name.'<br/>' .'Email: '.$this->email.'<br/>' .'Số điện thoại: '.$this->tel; 
    }
}


$teacher = new teacher;
$teacher->setInfo('Mai Ngọc Ánh', 'Maingocanh@gmail.com','013253959728' );
echo $teacher->getInfo();
echo '<hr/>';
$student = new Student;
$student->setInfo('Nguyễn Thị Hồng','Hongnguyen@gmail.com', '0124343959728' );
echo $student->getInfo();



