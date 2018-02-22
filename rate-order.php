<?php include 'components/head.php'; ?>

<!-- CONTENT GOES HERE -->
<?php include 'components/navbar-header.php'; ?>

<div class="wrapper bg-light">

  <div class="container">
    <form>
      <div class="text-center">
        <br />
        <small class="mb-2 text-muted">Nomer Tiket</small>
        <h5 class="card-title">IN123456</h5>
        <img src="assets/img/sample.jpg" class="img-thumbnail img-150 rounded-circle" />
        <p class="my-2">
           <strong>Budi Reza</strong> <br />
           <small>ID729834</small>
        </p>
        <div class="mb-3">
          <button class="btn btn-link px-0"><i class="fas fa-star text-warning fa-2x"></i></button>
          <button class="btn btn-link px-0"><i class="fas fa-star text-warning fa-2x"></i></button>
          <button class="btn btn-link px-0"><i class="fas fa-star text-warning fa-2x"></i></button>
          <button class="btn btn-link px-0"><i class="fas fa-star text-warning fa-2x"></i></button>
          <button class="btn btn-link px-0"><i class="fas fa-star text-muted fa-2x"></i></button>
        </div>
        <textarea class="form-control" placeholder="Komentar anda" rows="3">
        </textarea>
      </div>
      <div class="my-3">
        <a class="btn btn-primary  btn-block" href="myorder.php">Rate Layanan</a>
      </div>
    </form>

  </div>


</div>

<!-- END CONTENT GOES HERE -->

<?php include 'components/footer.php'; ?>
