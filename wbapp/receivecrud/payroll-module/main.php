<h3>Payroll List</h3>
<div id="subcontent">
    <table id="data-list">
      <tr>
        <th>ID</th>
        <th>Date</th>
        <th>Name</th>
        <th>Deduction</th>
        <th>Salary</th>
       
      </tr>
<?php
$count = 1;

if($receive->list_receive() != false){
foreach($receive->list_receive() as $value){
   extract($value);
  
?>
      <tr>
        <td><?php echo $count;?></td>
        <td><a href="index.php?page=receive&action=receive&id=<?php echo $rec_id;?>"><?php echo $rec_date_added;?></a></td>
        <td><?php echo $rec_supplier;?></td>
        <td><?php echo $rec_amount;?></td>
        <td><?php echo $rec_description;?></td>
        
      </tr>
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