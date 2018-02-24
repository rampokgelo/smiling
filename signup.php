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
          <label class="sr-only">Nama</label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa fa-user"></i></div>
            </div>
            <input type="text" class="form-control" placeholder="Nama">
          </div>
        </div>
        <div class="form-group">
          <label class="sr-only">Email</label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa fa-mail"></i></div>
            </div>
            <input type="text" class="form-control" placeholder="Email">
          </div>
        </div>
        <div class="form-group">
          <label class="sr-only">Nomor Telepon</label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa fa-phone"></i></div>
            </div>
            <input type="number" class="form-control" placeholder="Nomor Telepon">
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Signup</button>
      </form>
      <br />
      <div class="">
        <span>Sudah punya akun ? <a href="index.php">Login</a></span>
      </div>
    </div>
  </div>

</div>

<!-- END CONTENT GOES HERE -->

<?php include 'components/footer.php'; ?>
