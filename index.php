<?php
include 'src/models/database/DatabaseConnection.php';
use MyProject\Database\DatabaseConnectionFactory;
include "src/controller/UserController.php";
include "src/models/UserModel.php";
$configFile = 'config/config.json';

$mysqlConfig = json_decode(file_get_contents($configFile), true);

$mysqlConnection = DatabaseConnectionFactory::createConnection('mysql', $mysqlConfig);
// $mysqlDb = $mysqlConnection->getConnection();
// $user = new UserControler($mysqlConnection);
// $userRepository = new UserRepository($mysqlConnection);
// $data = array(
//     "username" => "john_doe",
//     "email" => "John",
// );
// // echo $userRepository->createUser($data);
// $userRepository->getAllUser();
// // echo $userRepository->getAllUser();
// $user->getHome();

// $mysqlDb = $mysqlConnection->closeConnection();
print_r(pdo_drivers());
echo phpinfo();
