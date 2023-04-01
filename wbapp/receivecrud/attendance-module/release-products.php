<h3>Release Transaction</h3>
<div id="receive-details">
  <table>
    <tr>
      <td><label for="recdate">Release Date</label></td>
      <td class="info-text"><?php echo $release->get_release_date($id);?></td>
      <td><label for="purfrom">Sold To</label></td>
      <td class="info-text"><?php echo $release->get_release_customer($id);?></td>
    </tr>
    <tr>
      <td><label for="recamount">Amount</label></td>
      <td class="info-text"><?php echo $release->get_release_amount($id);?></td>
      <td><label for="recstatus">Status</label></td>
      <td class="info-text">
        