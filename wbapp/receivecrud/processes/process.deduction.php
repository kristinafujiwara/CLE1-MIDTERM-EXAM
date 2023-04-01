<?php
include '../classes/class.deduction.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';
$id= isset($_GET['id']) ? $_GET['id'] : '';
$status= isset($_GET['status']) ? $_GET['status'] : '';

switch($action){
	case 'new':
        create_new_deduction();
	break;
}

function create_new_deduction(){
	$deduction = new Deduction();
    $description = $_POST['description'];
    $lastname = ucwords($_POST['lastname']);
    $firstname = ucwords($_POST['firstname']);
    $amount = ucwords($_POST['amount']);
    
    $result = $deduction->new_deduction($description,$amount,$lastname,$firstname);
    if($result){
        $id = $deduction->get_user_id($lastname);
        header('location: ../index.php?page=deduction&subpage=users&action=profile&id='.$id);
    }
}