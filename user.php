<?php
class User {
    private $username;
    private $email;
    private $password;

    public function __construct($username, $email, $password) {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    public function validate() {
        // Validate username
        if (!preg_match('/^[a-z]{3,15}$/', $this->username)) {
            return "Username must be lowercase and between 3-15 characters.";
        }

        // Validate email
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return "Invalid email format.";
        }

        // Validate password (example: minimum 8 characters, at least one uppercase letter, one lowercase letter, one number, and one special character)
        if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}$/', $this->password)) {
            return "Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character.";
        }

        return true; // Validation passed
    }

    public function register() {
        // Success message
        return "User registered successfully! <br /> Data entered are Username:". $this->username . ", Email:". $this->email;
    }

    // Getter methods
    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }
}