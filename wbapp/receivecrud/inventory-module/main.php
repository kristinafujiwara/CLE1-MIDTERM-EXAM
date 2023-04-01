

<h3 class="deduction">Deductions</h3>
<div id="subcontent">
    <table id="data-list">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Deductions</th>
      </tr>
      <?php
$count = 1;
$count = 1;

if($deduction->list_deduction() != false){
foreach($deduction->list_deduction() as $value){
   extract($value);
  
?>
      <tr>
        <td><?php echo $count;?></td>
        <td><a href="index.php?page=deduction&subpage=users&action=profile&id=<?php echo $user_id;?>"><?php echo $user_lastname.', '.$user_firstname;?></a></td>
        <td><?php echo $deduct_description;?></td>
        <td><?php echo $deduct_amount;?></td>
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