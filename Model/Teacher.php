<?php


class Teacher
{
    private $teacherID;
    private $teacherName;
    private $teacherclassID;
    private $teacherEmail;

    public function __construct(string $teacherName, string $teacherEmail, int $teacherclassID, int $teacherID)
    {
        $this->teacherName = $teacherName;
        $this->teacherclassID = $teacherclassID;
        $this->teacherEmail = $teacherEmail;
        $this->teacherID = $teacherID;
    }

    public function getteacherName() : string
    {
        return $this->teacherName;
    }


    public function getteacherEmail() : string
    {
        return $this->teacherEmail;
    }

    public function getteacherclassid() : int
    {
        return $this->teacherclassID;
    }
    public function getteacherID() : int
    {
        return $this->teacherID;
    }



}