<?php
require_once ROOT_PATH . "/app/models/ModelDashboard.php";
class DashboardController
{

    public function main()
    {

        if (isset($_SESSION["login"])) {
            require_once ROOT_PATH . "/app/views/DashboardView.php";
        } else {
            require_once ROOT_PATH . "/app/views/LoginView.php";
        }
    }

    /* Login */
    public function login()
    {
        if (isset($_POST["login"])) {

            $username = $_POST["username"];
            $password = $_POST["password"];
            $data = array($username, $password);

            if (ModelDashboard::login($data)) {
                $_SESSION["login"] = true;
                if (isset($_SESSION["erro"])) {
                    unset($_SESSION["erro"]);
                }
                header("Location:" . RELATIVE_PATH . "/dashboard/");
            } else {
                $_SESSION["erro"] = true;
                $_SESSION["last_time"] = time();
                header("Location: " . RELATIVE_PATH . "/dashboard/");
            }


        }
    }

    public static function logout()
    {
        unset($_SESSION["login"]);
        session_destroy();
        header("Location: " . RELATIVE_PATH . "/dashboard/");
    }
}



?>