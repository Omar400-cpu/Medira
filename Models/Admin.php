<?php
require_once 'Person.php';

class Admin extends Person {
    public function __construct($name, $phoneNum, $gender, $dateOfBirth, $username, $password) {
        parent::__construct($name, $phoneNum, $gender, $dateOfBirth, $username, $password);
    }
}
?>