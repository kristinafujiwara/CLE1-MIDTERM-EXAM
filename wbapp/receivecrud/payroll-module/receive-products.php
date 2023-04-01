<h3>Receive Transaction</h3>
<div id="receive-details">
  <table>
    <tr>
      <td><label for="recdate">Receive Date</label></td>
      <td class="info-text"><?php echo $receive->get_receive_date($id);?></td>
      <td><label for="purfrom">Purchased From</label></td>
      <td class="info-text"><?php echo $receive->get_receive_supplier($id);?></td>
    </tr>
    <tr>
      <td><label for="recamount">Amount</label></td>
      <td class="info-text"><?php echo $receive->get_receive_amount($id);?></td>
      <td><label for="recstatus">Status</label></td>
      <td class="info-text">
        <?php if($receive->get_receive_save($id) == 0){
            echo "Open Transaction";
          }else{
            echo "Saved Transaction";
          }
          ?>
      
      </td>
    </tr>
  </table>
</div>

<div class="btn-box">
  <?php
    if($receive->get_receive_save($id) == 0){
  ?>
<a class="btn-jsactive" onclick="document.getElementById('id01').style.display='block'">Add Product</a> | 
<a class="btn-jsactive" onclick="document.getElementById('id02').style.display='block'">Save</a>
      <?php
    }
    ?>
</div>
<div id="subcontent">
    <table id="data-list">
      <tr>
        <th>#</th>
        <th>Product</th>
        <th>Quantity</th>
      </tr>
<?php
$count = 1;
$count = 1;
if($receive->list_receive_items($id) != false){
foreach($receive->list_receive_items($id) as $value){
   extract($value);
  
?>
      <tr>
        <td><?php echo $count;?></td>
        <td><?php echo $product->get_prod_name($prod_id);?></td>
        <td><?php echo $rec_qty;?></td>
      </tr>
    
