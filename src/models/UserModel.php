<?php

// require_once 'DatabaseConnection.php';
class UserRepository
{
    private $db;

    public function __construct($databaseConnection)
    {
        $this->db = $databaseConnection;
    }

    public function getUserById($userId)
    {
        $conn = $this->db->getConnection();

        $stmt = $conn->prepare("SELECT * FROM users WHERE user_id = ?");
        $stmt->bind_param("i", $userId);
        $stmt->execute();

        $result = $stmt->get_result();
        $userData = $result->fetch_assoc();

        $stmt->close();
        // $this->db->closeConnection();

        // if ($userData) {
        //     return new User($userData['user_id'], $userData['username'], $userData['email']);
        // }

        return null;
    }
    public function getAllUser()
    {
        $conn = $this->db->getConnection();
        $result = $conn->query('SELECT * FROM users');

        // Check if the query was successful
        if ($result) {
            // Fetch all rows as an associative array
            $users = $result->fetch_all(MYSQLI_ASSOC);

            // Display or process the data
            foreach ($users as $user) {
                echo "User ID: " . $user['id'] . "\n";
                echo "Username: " . $user['username'] . "\n";
                echo "Email: " . $user['email'] . "\n";
                // Add more fields as needed
                echo "<br/>";
            }

            // $stmt->close();
            // $this->db->closeConnection();

            // if ($userData) {
            //     return $userData;
            // }

            // return $userData;
        }}

    public function updateUser($user)
    {
        $conn = $this->db->getConnection();

        $stmt = $conn->prepare("UPDATE users SET username = ?, email = ? WHERE user_id = ?");
        $stmt->bind_param("ssi", $user->getUsername(), $user->getEmail(), $user->getUserId());
        $result = $stmt->execute();

        $stmt->close();
        $this->db->closeConnection();

        return $result;
    }

    public function createUser($user)
    {
        $conn = $this->db->getConnection();

        $stmt = $conn->prepare("INSERT INTO users (username, email) VALUES (?, ?)");
        $stmt->bind_param("ss", $user["username"], $user["email"]);
        $result = $stmt->execute();
        $stmt->close();
        $this->db->closeConnection();

        return $result;
    }

    public function deleteUser($userId)
    {
        $conn = $this->db->getConnection();

        $stmt = $conn->prepare("DELETE FROM users WHERE user_id = ?");
        $stmt->bind_param("i", $userId);
        $result = $stmt->execute();

        $stmt->close();
        $this->db->closeConnection();

        return $result;
    }
}
