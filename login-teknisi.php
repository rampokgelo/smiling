<?php include 'components/head.php'; ?>

<!-- CONTENT GOES HERE -->
<div class="bg-full" style="background-image:url(assets/img/bg-login.jpg);"></div>

<div class="container d-flex justify-content-center align-items-center" style="height:100vh;">

  <div class="card form-login" >
    <div class="card-body">
      <p class="brand">
        <img src="assets/img/logo-smiling.png" />
      </p>
      <br />
      <!-- <h1 class="text-center">Welcome</h1> -->
      <form>
        <div class="form-group">
          <label class="sr-only">Username</label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa fa-user"></i></div>
            </div>
            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
          </div>
        </div>
        <div class="form-group">
          <label class="sr-only">Password</label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa fa-lock"></i></div>
            </div>
            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Password">
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
      </form>
      <br />
      <div class="">
        <span><a href="#">Forgot Password</a></span>
      </div>
    </div>
  </div>

</div>

<!-- END CONTENT GOES HERE -->

<?php include 'components/footer.php'; ?>
