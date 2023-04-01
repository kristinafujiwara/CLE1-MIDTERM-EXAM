<div id="third-submenu">
    <a href="index.php?page=payroll">Payroll List</a> | 
    <a href="index.php?page=payroll&action=create">Add Payroll</a> | 
    Search <input type="text"/>
</div>
<div id="subcontent">
    <?php
      switch($action){
                case 'create':
                    require_once 'payroll-module/create-transaction.php';
                break; 
               
                default:
                    require_once 'payroll-module/main.php';
                break; 
            }
    ?>
  </div>