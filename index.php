<?php 

//session
session_start();

/// require the model and db connection
require("models/connection.php");
require("models/db_functions.php");

/// get the request
$req = filter_input(INPUT_POST, "request");
if($req == null){
    $req = filter_input(INPUT_GET, "request");
}

/// process the request
switch($req){
    case "student-dashboard";
        // handle the request
        include("studentDashboard.php"); 
        break;
    case "admin-dashboard";
        //handle the request
        //include "views/admin.php";
        break;
    default: // first case that runs when the page loads
        include("login.php");
        break;
}

