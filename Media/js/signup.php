<?php
function validateSignupData($data) {
    $errors = [];

    // Extract and sanitize inputs
    $fullName = trim($data['fullName'] ?? '');
    $email = trim($data['email'] ?? '');
    $phoneNumber = trim($data['phoneNumber'] ?? '');
    $password = $data['password'] ?? '';
    $gender = $data['gender'] ?? null;
    $day = $data['day'] ?? '';
    $month = $data['month'] ?? '';
    $year = $data['year'] ?? '';

    // Validate full name
    if (empty($fullName) || !preg_match("/^[a-zA-Z\s]+$/", $fullName)) {
        $errors[] = "Full name must contain only letters and spaces.";
    }

    // Validate email
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // Validate phone number
    if (empty($phoneNumber) || !preg_match("/^\d{10}$/", $phoneNumber)) {
        $errors[] = "Phone number must be 10 digits.";
    }

    // Validate password
    if (empty($password) || strlen($password) < 8 || !preg_match("/[A-Z]/", $password)) {
        $errors[] = "Password must be at least 8 characters long and include at least one uppercase letter.";
    }

    // Validate gender
    if (empty($gender) || !in_array($gender, ['Male', 'Female', 'Other'])) {
        $errors[] = "Please select a valid gender.";
    }

    // Validate date of birth
    if (empty($day) || empty($month) || empty($year) || !checkdate($month, $day, $year)) {
        $errors[] = "Invalid date of birth.";
    }

    return $errors;
}
?>
