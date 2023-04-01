<?php
include '../classes/class.release.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch($action){
    case 'create':
        create_new_transaction();
	break;
    case 'additem':
        new_release_item();
	break;
    case 'saveitem':
        save_receive_items();
	break;
}

function create_new_transaction(){
	$release = new Release();
   $name= ucwords($_POST['sname']);
    $desc= ucwords($_POST['desc']); 
    $amount= $_POST['amount']; 
    $rid = $release->new_release($name, $desc, $amount);
    if(is_numeric($rid)){
        header('location: ../index.php?page=release&action=release&id='.$rid);
    }
}

