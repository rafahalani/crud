<?php


class Teacher
{
    private $teacherID;
    private $teacherName;
    private $teacherEmail;

    public function __construct(string $teacherName, string $teacherEmail, int $teacherID)
    {
        $this->teacherName = $teacherName;
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

    public function getteacherID() : int
    {
        return $this->teacherID;
    }



}