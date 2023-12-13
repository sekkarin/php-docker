<?php
class UserControler
{
    private $userModel;
    public function __construct($userModel)
    {
        // $this->var = $var;
        $this->userModel = $userModel;
        // $this->userModel.
        // $this->userModel.exec("")
    }

    public function getHome()
    {
        // $userModel->
        include "./src/Templates/home.php";
    }

}
?>
