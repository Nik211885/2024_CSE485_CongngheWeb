<?php
$users = [
    [
        "username" => "johndoe",
        "password" => password_hash("password123", PASSWORD_DEFAULT), // Store hashed password
        "name" => "John Doe",
        "email" => "johndoe@example.com"
    ],
    // Add more users...
];

//print_r($users);
