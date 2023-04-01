<h3 class="addemp">Provide the Required Information</h3>
<div id="form-block">
    <form method="POST" action="processes/process.user.php?action=new">
        <div id="form-block-half">
            <label for="fname">First Name</label>
            <input type="text" id="fname" class="input" name="firstname" placeholder="Your name">

            <label for="lname">Last Name</label>
            <input type="text" id="lname" class="input" name="lastname" placeholder="Your last name">

            <label for="access">Position</label>
            <select id="access" name="access">
              <option value="applicator">Applicator</option>
              <option value="assistant">Assistant</option>
              <option value="cashier">Cashier</option>
              <option value="controller">Controller</option>
              <option value="crew">Crew</option>
              <option value="eradicator">Eradicator</option>
              <option value="expert">Expert</option>
              <option value="exterminator">Exterminator</option>
              <option value="fumigator">Fumigator</option>
              <option value="inspector">Inspector</option>
              <option value="manager">Manager</option>
              <option value="operator">Operator</option>
              <option value="representative">Representative</option>
              <option value="sprayer">Sprayer</option>
              <option value="staff">Staff</option>
              <option value="supervisor">Supervisor</option>
              <option value="technician">Technician</option>
              <option value="treater">Treater</option>
              <option value="worker">Worker</option>
            </select>
        </div>
        <div id="form-block-half">
            <label for="email">Email</label>
            <input type="email" id="email" class="input" name="email" placeholder="Your email">

            <label for="password">Password</label>
            <input type="password" id="password" class="input" name="password" placeholder="Enter password">

            <label for="confirmpassword">Confirm Password</label>
            <input type="password" id="confirmpassword" class="input" name="confirmpassword" placeholder="Confirm password">
            
        </div>
        <div id="button-block">
        <input type="submit" value="Save">
        </div>
  </form>
</div>