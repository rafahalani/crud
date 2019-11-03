<?php
declare(strict_types=1);

class Connection
{
    public function Connect (){
        $dbhost = 'localhost';
        $dbuser = 'Rafah';
        $dbpass = 'Wachtwoord123';
        $db = 'crud';
        $pdo = new PDO('mysql:host='. $dbhost .';dbname='. $db, $dbuser, $dbpass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $pdo;
    }

    public function select(PDO $pdo, string $query) : array
    {
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertNewStudent(array $GET, Connection $database, PDO $pdo): void
    {
        $newStudent = new Student($GET['studentName'], $GET['studentEmail'], $GET['studentID']);
        $database->insertNewStudent($pdo, $newStudent);
        require 'View/studentform.php';
        require 'index.php';
    }
}
