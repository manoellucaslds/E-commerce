<?php   
    // Define o fuso horário para São Paulo
    date_default_timezone_set('America/Sao_Paulo'); 

    //iniciando sessão
    session_start();
    
    //exibir error/warning no php    
    ini_set('display_errors', 1); 
    ini_set('display_startup_errors', 1); 
    error_reporting(E_ALL);
    
    //definir diretorios
    define ("ROOT_PATH", dirname(__DIR__));
    define("RELATIVE_PATH", dirname($_SERVER["PHP_SELF"]));

    require_once ROOT_PATH.'/app/core/App.php';
    
    new App();
    
?>