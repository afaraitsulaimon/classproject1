<?php 

function addForm(){
	return '<form action='.htmlentities($_SERVER["PHP_SELF"]).' class="form" method="post">
	  <div class="form-group">
	    <label>Username</label>
	    <input type="text" class="form-control" placeholder="Username" name="Username">
	  </div>
	  <div class="form-group">
	    <label>Email</label>
	    <input type="text" class="form-control" placeholder="Email" name="Email">
	  </div> 
	  <div class="form-group">
	    <label>Phone</label>
	    <input type="text" class="form-control" placeholder="Phone" name="Phone">
	  </div>
	  <div class="form-group">
	    <label>Password</label>
	    <input type="password" class="form-control" placeholder="Password" name="Password">
	  </div>
	  <div class="form-group">
	    <label>Password Again</label>
	    <input type="password" class="form-control" placeholder="Password Again" name="PasswordAgain">
	  </div>
	  <input type="hidden" name="Authority" value="Admin">
	  <div class="form-group">
	    <label>Gender</label>&nbsp;&nbsp;&nbsp;
	    <label class="radio-inline"><input type="radio" name="gender" checked>Male</label>
	    <label class="radio-inline"><input type="radio" name="gender">Female</label>
	  </div>
	  <button type="submit" name="addUser" class="btn btn-success btn-block">Add User</button>
	</form>';
}

function editForm($fieldvalue){
	return '<form action='.htmlentities($_SERVER["PHP_SELF"]).'class="form" method="post">
	  <div class="form-group">
	    <label>Username</label>
	    <input type="text" class="form-control" placeholder="Username" value='.$fieldvalue["Username"].' name="Username">
	  </div>
	  <div class="form-group">
	    <label>Email</label>
	    <input type="text" class="form-control" placeholder="Email" name="Email" value='.$fieldvalue["Email"].'>
	  </div> 
	  <div class="form-group">
	    <label>Phone</label>
	    <input type="text" class="form-control" placeholder="Phone" name="Phone" value='.$fieldvalue["Phone"].'>
	  </div>
	  <input type="hidden" name="Authority" value='.$fieldvalue["Authority"].'>
	  <input type="hidden" name="id" value='.$fieldvalue["id"].'>
	  <div class="form-group">
	    <label>Gender</label>&nbsp;&nbsp;&nbsp;
	    <label class="radio-inline"><input type="radio" name="gender" checked>Male</label>
	    <label class="radio-inline"><input type="radio" name="gender">Female</label>
	  </div>
	  <button type="submit" name="addUser" class="btn btn-success btn-block">Add User</button>
	</form>';
}

