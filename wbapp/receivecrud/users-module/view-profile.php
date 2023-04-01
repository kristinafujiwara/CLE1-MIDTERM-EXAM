<h3 class="profile">System User Profile</h3>
<div class="btn-box">
<a class="btn-jsactive" onclick="document.getElementById('id03').style.display='block'">Change Email</a> | 
<a class="btn-jsactive" onclick="document.getElementById('id02').style.display='block'">Change Password</a> | 
            <?php
            if($user->get_user_status($id) == "1"){
              ?>
                <a class="btn-jsactive" onclick="document.getElementById('id01').style.display='block'">Disable Account</a>
              <?php
            }else{ 
            ?>
                <a class="btn-jsactive" onclick="document.getElementById('id01').style.display='block'">Activate Account</a>
            <?php
            }
            ?>
</div>
<br/>
<div id="form-block">
<form method="POST" action="processes/process.user.php?action=update">
        <div id="form-block-half">
            <label for="fname">First Name</label>
            <input type="text" id="fname" class="input" name="firstname" value="<?php echo $user->get_user_firstname($id);?>" placeholder="Your name..">

            <label for="lname">Last Name</label>
            <input type="text" id="lname" class="input" name="lastname" value="<?php echo $user->get_user_lastname($id);?>" placeholder="Your last name..">

            <label for="access">Position</label>
            <select id="access" name="access">
              <option value="applicator"><?php if($user->get_user_access($id) == "Applicator"){ echo "";};?>Applicator</option>
              <option value="assistant"><?php if($user->get_user_access($id) == "Assistant"){ echo "";};?>Assistant</option>
              <option value="cashier"><?php if($user->get_user_access($id) == "Cashier"){ echo "";};?>Cashier</option>
              <option value="controller"><?php if($user->get_user_access($id) == "Controller"){ echo "";};?>Controller</option>
              <option value="crew"><?php if($user->get_user_access($id) == "Crew"){ echo "";};?>Crew</option>
              <option value="eradicator"><?php if($user->get_user_access($id) == "Eradicator"){ echo "";};?>Eradicator</option>
              <option value="expert"><?php if($user->get_user_access($id) == "Expert"){ echo "";};?>Expert</option>
              <option value="exterminator"><?php if($user->get_user_access($id) == "Exterminator"){ echo "";};?>Exterminator</option>
              <option value="fumigator"><?php if($user->get_user_access($id) == "Fumigator"){ echo "";};?>Fumigator</option>
              <option value="inspector"><?php if($user->get_user_access($id) == "Inspector"){ echo "";};?>Inspector</option>
              <option value="manager"><?php if($user->get_user_access($id) == "Manager"){ echo "";};?>Manager</option>
              <option value="operator"><?php if($user->get_user_access($id) == "Operator"){ echo "";};?>Operator</option>
              <option value="representative"><?php if($user->get_user_access($id) == "Representative"){ echo "";};?>Representative</option>
              <option value="sprayer"><?php if($user->get_user_access($id) == "Sprayer"){ echo "";};?>Sprayer</option>
              <option value="staff"><?php if($user->get_user_access($id) == "Staff"){ echo "";};?>Staff</option>
              <option value="supervisor"><?php if($user->get_user_access($id) == "Supervisor"){ echo "";};?>Supervisor</option>
              <option value="technician"><?php if($user->get_user_access($id) == "Technician"){ echo "";};?>Technician</option>
              <option value="treater"><?php if($user->get_user_access($id) == "Treater"){ echo "";};?>Treater</option>
              <option value="worker"><?php if($user->get_user_access($id) == "Worker"){ echo "";};?>Worker</option>
            </select>
        </div>
     
        <div id="form-block-half">
            <label for="status">Account Status</label>
            <select id="status" name="status" disabled>
              <option <?php if($user->get_user_status($id) == "0"){ echo "selected";};?>>Deactivated</option>
              <option <?php if($user->get_user_status($id) == "1"){ echo "selected";};?>>Active</option>
            </select>
            <label for="email">Email</label>
            <input type="email" id="email" class="input" name="email" disabled value="<?php echo $user->get_user_email($id);?>" placeholder="Your email..">
            <input type="hidden" id="userid" name="userid" value="<?php echo $id;?>"/>
        </div>
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <div id="button-block3">
        <input type="submit" value="Update">
        </div>
        </form>
</div>

<div id="id01" class="modal">
  <div #id="form-update" class="modal-content">
    <div class="container">
      <h2>Change User Status</h2>
      <p>Are you sure you want to change account status?</p>
      <div class="clearfix">
        
        <?php
         if($user->get_user_status($id) == "1"){  
         ?>
           <button class="confirmbtn" onclick="disableSubmit()">Confirm</button>
        <?php }else {?>
           <button class="confirmbtn" onclick="enableSubmit()">Confirm</button>
        <?php };?>
        <button class="cancelbtn" onclick="document.getElementById('id01').style.display='none'">Cancel</button>
      </div>
    </div>
    </div>
</div>
<div id="id02" class="modal">
  <div #id="form-update" class="modal-content">
    <div class="container">
   
      <h2>Update User Password</h2>

      <form method="POST" id="passwordForm" action="processes/process.user.php?action=updatepassword">
      <input type="hidden" id="userid" name="userid" value="<?php echo $id;?>"/>
        <label for="crpassword">Current Password</label>
            <input type="password" id="crpassword" class="input" name="crpassword" placeholder="Current Password"> 
            <label for="npassword">New Password</label>
            <input type="password" id="npassword" class="input" name="npassword" placeholder="New Password"> 
            <label for="copassword">Confirm Password</label>
            <input type="password" id="copassword" class="input" name="copassword" placeholder="Confirm Password">           
       </form> 
      <div class="clearfix">
      <button class="submitbtn" onclick="passwordSubmit()">Confirm</button>
        <button class="cancelbtn" onclick="document.getElementById('id02').style.display='none'">Cancel</button>
        
      </div>
      </div>
    </div>
  </div>
</div>
<div id="id03" class="modal">
  <div #id="form-update" class="modal-content">
    <div class="container">
   
      <h2>Update User Email</h2>

      <form method="POST" id="emailForm" action="processes/process.user.php?action=updateemail">
      <input type="hidden" id="userid" name="userid" value="<?php echo $id;?>"/>
        <label for="useremail">Current Email</label>
            <input type="email" id="useremail" class="input" name="useremail" placeholder="Current Email"> 
            <label for="copassword">New Email</label>
            <input type="email" id="newemail" class="input" name="newemail" placeholder="New Email">     
            <label for="crpassword">Enter Password</label>
            <input type="password" id="crpassword" class="input" name="crpassword" placeholder="Current Password">       
       </form> 
      <div class="clearfix">
      <button class="submitbtn" onclick="emailSubmit()">Confirm</button>
        <button class="cancelbtn" onclick="document.getElementById('id03').style.display='none'">Cancel</button>
        
      </div>
      </div>
    </div>
  </div>
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');
var modal_password = document.getElementById('id02');
var modal_email = document.getElementById('id03');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }else if(event.target == modal_password){
    modal_password.style.display = "none";
  }else if(event.target == modal_email){
    modal_email.style.display = "none";
  }
}

function enableSubmit() {
    window.location.href = "processes/process.user.php?action=status&id=<?php echo $id;?>&status=1";
}
function disableSubmit() {
    window.location.href = "processes/process.user.php?action=status&id=<?php echo $id;?>&status=0";
}
function passwordSubmit() {
  document.getElementById("passwordForm").submit();
}
function emailSubmit() {
  document.getElementById("emailForm").submit();
}
</script>