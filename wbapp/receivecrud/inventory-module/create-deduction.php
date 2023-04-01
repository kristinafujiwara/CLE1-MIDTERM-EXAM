<h3 class="adddeduct">Provide the Required Information</h3>
<div id="form-block">
    <form method="POST" action="processes/process.deduction.php?action=new">
        <div id="form-block-half">
            <label for="fname">First Name</label>
            <input type="text" id="fname" class="input" name="firstname" placeholder="Your name">

            <label for="lname">Last Name</label>
            <input type="text" id="lname" class="input" name="lastname" placeholder="Your last name">
        </div>
        <div id="form-block-half">
            <label for="description">Description</label>
            <input type="text" id="description" class="input" name="description" placeholder="Enter description">

            <label for="amount">Deduction</label>
            <input type="text" id="amount" class="input" name="amount" placeholder="Enter amount">
        </div>
        <div id="button-block">
        <input type="submit" value="Save">
        </div>
  </form>
</div>