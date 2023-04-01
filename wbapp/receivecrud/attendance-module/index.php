<div id="third-submenu">
    <a href="index.php?page=release">Attendance List</a> | 
    <a href="index.php?page=release&action=create">Add Attendance</a> | 

    Search <input type="text"/>
</div>
<div id="subcontent">
    <?php
      switch($action){
                case 'create':
                    require_once 'attendance-module/create-transaction.php';
                break; 
                
                default:
                    require_once 'attendance-module/main.php';
                break; 
            }
    ?>
  </div>