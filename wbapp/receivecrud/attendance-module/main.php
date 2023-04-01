<h3 class="attendance">Attendance</h3>
<div id="subcontent">
    <table id="data-list">
      <tr>
        <th>ID</th>
        <th>Date</th>
        <th>Name</th>
        <th>Time In</th>
        <th>Time Out</th>
      </tr>
<?php
$count = 1;
$count = 1;
if($release->list_release() != false){
foreach($release->list_release() as $value){
   extract($value);
  
?>
      <tr>
        <td><?php echo $count;?></td>
        <td><a href="index.php?page=release&action=create&id=<?php echo $rel_id;?>"><?php echo $rel_date_added;?></a></td>
        <td><?php echo $rel_customer;?></td>
        <td><?php echo $rel_time_added;?></td>
        <td> <input type="timeout" value="Timeout"><?php echo $rel_description;?></td>
        
</div>
      <tr>
<?php
 $count++;
}
}else{
  echo "No Record Found.";
}
?>
    </table>
</div>