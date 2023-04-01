<?php
/* include the class file (global - within application) */
include_once 'classes/class.user.php';
include_once 'classes/class.product.php';
include_once 'classes/class.receive.php';
include_once 'classes/class.release.php';
include_once 'classes/class.inventory.php';
include_once 'classes/class.deduction.php';
include_once 'classes/class.admin.php';
include 'config/config.php';

$page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
$subpage = (isset($_GET['subpage']) && $_GET['subpage'] != '') ? $_GET['subpage'] : '';
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';

$admin = new admin();
$user = new User();
 // $payroll = new Payroll();
//s$attendance = new Attendance(); 
$deduction = new Deduction();
$product = new Product();
$receive = new Receive();
$release = new Release();
$inventory = new Inventory();


if(!$admin->get_session()){
	header("location: login.php");
}
$user_id = $user->get_user_id($_SESSION['user_email']);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Payroll System</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Assistant&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="css/custom.css?<?php echo time();?>">
</head>
<body1>
<div id="container">
    <div id="header">
      <h2>V3 Pestmasters</h2>
    </div>
    <div id="wrapper">
            <div id="menu">
            <a href="index.php" class="home"><i class="fa-sharp fa-solid fa-house-chimney"></i> HOME</a> 
                <a href="index.php?page=employee" class="emp"><i class="fa-solid fa-user"></i> EMPLOYEES</a>
                <a href="index.php?page=release" class="attendance"><i class="fa-solid fa-calendar"></i> ATTENDANCE</a>
                <a href="index.php?page=payroll" class="payroll"><i class="fa-solid fa-wallet"></i> PAYROLL</a>
                <a href="index.php?page=deduction" class="deduction"><i class="fa-solid fa-hand-holding-dollar"></i> DEDUCTIONS</a>
                <a href="logout.php" class="move-right"><i class="fa-solid fa-right-from-bracket"></i> Log Out</a>
            </div>
            <div id="content">
                <?php
                switch($page){
                            case 'employee':
                                require_once 'employee-module/index.php';
                            break; 
                            case 'payroll':
                                require_once 'payroll-module/index.php';
                            break; 
                            case 'deduction':
                                require_once 'inventory-module/index.php';
                            break; 
                            case 'release':
                                require_once 'attendance-module/index.php';
                            break; 
                            default:
                                require_once 'main.php';
                            break; 
                        }
                ?>
            </div>
    </div>
</div>
</body>
</html>