<?php include 'components/head.php'; ?>

<!-- CONTENT GOES HERE -->
<?php include 'components/navbar-header.php'; ?>

<div class="wrapper">

  <div class="container">

    <br />
    <div class="card">
        <div class="card-body pb-1">
          <div class="text-center">
            <img src="assets/img/sample.jpg" class="img-thumbnail img-150 rounded-circle" />
            <h3 class="mt-2 text-success">Terimakasih</h3>
            <p>
               <strong>Citra Rezania</strong> telah membuat schedule kunjungan
            </p>
          </div>
        </div>


    </div>
    <div class="my-3">
      <button class="btn btn-outline-secondary btn-block mb-2" data-toggle="modal" data-target="#modalresche">Re-schedule</button>
      <a class="btn btn-primary  btn-block " href="home-user.php">Selesai</a>
    </div>
  </div>


</div>


<?php include 'components/navbar-bottom.php'; ?>

<?php include 'components/modal.php'; ?>
<!-- END CONTENT GOES HERE -->

<?php include 'components/footer.php'; ?>
