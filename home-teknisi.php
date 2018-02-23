<?php include 'components/head.php'; ?>

<!-- CONTENT GOES HERE -->
<?php include 'components/navbar-header.php'; ?>

<div class="wrapper">
  <div class="container">
      <br />
      <div class="card">
          <div class="card-body">
            <div class="text-center">
              <h6>Selamat Datang</h6>
              <img src="assets/img/sample.jpg" class="img-thumbnail img-150 rounded-circle" />
              <p class="my-2">
                 <strong>Budi Reza</strong> <br />
              </p>
            </div>
            <hr />
            <div class="row mb-3">
              <div class="col px-2">
                <div class="text-center">
                  <a href="teknisi-schedule.php">
                    <h3 class="text-primary mb-0">5</h3>
                    <small class="small-x text-muted">Total Tiket</small>
                  </a>
                </div>
              </div>
              <div class="col px-2">
                <div class="text-center">
                  <a href="teknisi-schedule.php">
                    <h3 class="text-info mb-0">3</h3>
                    <small class="small-x text-muted">Scheduled</small>
                  </a>
                </div>
              </div>
              <div class="col px-2">
                <div class="text-center">
                  <a href="teknisi-schedule.php">
                    <h3 class="text-warning mb-0">2</h3>
                    <small class="small-x text-muted">Not Scheduled</small>
                  </a>
                </div>
              </div>
            </div>

            <div class="alert alert-dark mb-0" role="alert">
              <div class="media">
                <i class="far fa-smile fa-2x mr-2"></i>
                <div class="media-body align-self-center">
                  Pencapaian Kemarin
                </div>
              </div>
            </div>

          </div>



          <div class="card-footer">
            <small>Sabtu 27 Januari 2017, 13:00 WIB</small>
          </div>
      </div>
  </div>

</div>


<?php include 'components/navbar-bottom-teknisi.php'; ?>
<?php include 'components/modal.php'; ?>

<!-- END CONTENT GOES HERE -->

<?php include 'components/footer.php'; ?>
<!-- <script>
$(window).on('load',function(){
    $('#modaltiket').modal('show');
});
</script> -->
