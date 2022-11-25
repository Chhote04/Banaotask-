<div class="col-md-4" style="margin-top:30px;">
    <h1 class="text-center" >Sign Up</h1>
    <form action="insert_rg.php" method="post" style="margin-bottom: 35px;">
    <div class="mb-2">
    <label for="user" class="form-label">Username </label>
    <input type="text" class="form-control" name="un" id="user" aria-describedby="emailHelp">
     
  </div>
  <div class="mb-2">
    <label for="exampleInputEmail1" class="form-label">Email Address</label>
    <input type="email" class="form-control" name="em" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-2">
     <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">Password</label>
  </div>
  <div class="col-auto">
    <input type="password" name="pw" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
  </div>
  <div class="col-auto">
    <span id="passwordHelpInline" class="form-text">
      Must be 8-20 characters long.
    </span>
  </div>
  </div>

  <div class="mb-2">
     <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">Confirm Password</label>
  </div>
  <div class="col-auto">
    <input type="password" name="cpw" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
  </div>
  <div class="col-auto">
    <span id="passwordHelpInline" class="form-text">
      Must be 8-20 characters long.
    </span>
  </div>
  </div>
  
  <button type="submit" class="btn btn-dark">Sign Up</button>
  </form>
 </div>