<div id="third-submenu">
    <a href="index.php?page=deduction">Deduction List</a> | 
    <a href="index.php?page=deduction&subpage=users&action=create">Add Deduction</a>    | 
    Search <input type="text"/>
</div>
<div id="subcontent">
    <?php
      switch($action){
                case 'result':
                    require_once 'inventory-module/search-user.php';
                break;
                case 'create':
                    require_once 'inventory-module/create-deduction.php';
                break;
                default:
                    require_once 'inventory-module/main.php';
                break; 
            }
    ?>
  </div>