<?php

// require '../DBconfig.php';
require_once(dirname(__FILE__) . '../../DBconfig.php');

class User {
    private $conn;

    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }

    public function register ( $username, $email, $password ) {
        $hashedPassowrd = password_hash( $password, PASSWORD_BCRYPT );
        $stmt = $this->conn->prepare('INSERT INTO users (username, email, `password`, isDeleted) VALUES (?, ?, ?, 0)'); // Prepare SQL query
        
        if (!$stmt) {
            throw new Exception('Failed to prepare statement: ' . $this->conn->error);
        }
        
        $stmt->bind_param('sss', $username, $email, $hashedPassowrd);
        return $stmt->execute();
    }

    public function login ( $username, $password ) {
        $stmt = $this->conn->prepare('SELECT `password` FROM users WHERE username = ? '); // Prepare SQL query

        if (!$stmt) {
            throw new Exception('Failed to prepare statement: ' . $this->conn->error);
        }

        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows <= 0) {    
            $stmt->close();
            return false; // Username not found
        }

        $row = $result->fetch_assoc();
        $storedHashedPassword = $row['password'];

        $result->free();
        $stmt->close();
        
        // Verify the password input with the stored hashed password
        if (password_verify($password, $storedHashedPassword)) {
            return true; // Login successful
        } else {
            return false; // Invalid password
        }
    }

}