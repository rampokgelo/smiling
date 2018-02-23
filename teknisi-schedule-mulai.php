<?php include 'components/head.php'; ?>

<!-- CONTENT GOES HERE -->
<?php include 'components/navbar-header.php'; ?>

<div class="wrapper">
  <div class="container">
      <br />
      <h6>Schedule Hari Ini</h6>
      <h3>No. Tiket : IN1762358</h3>
      <ul class="tiket-journey list-unstyled">
        <li class="active">
          <div class="card">
            <div class="card-body">
              <label><strong>Take Order</strong></label>
              <br />
              3 Februari 2018 - 16:30
            </div>
          </div>
        </li>
        <li class="active">
          <div class="card">
            <div class="card-body">
              <label><strong>Arrival</strong></label>
              <br />
              <form>
                <div class="form-group">
                  <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Nomor Konfirmasi">
                </div>
                <button type="submit" class="btn btn-primary disabled">Arrived</button>
              </form>
            </div>
          </div>
        </li>
        <li class="">
          <div class="card">
            <div class="card-body">
              <label><strong>Handling</strong></label>
              <br />
              <form>
                <div class="form-group">
                  <textarea class="form-control" id="inlineFormInputGroup" placeholder="Update Progress" rows="3"></textarea>
                </div>
              </form>
            </div>
          </div>
        </li>
        <li class="">
          <div class="card">
            <div class="card-body">
              <div class="alert alert-warning mb-0" role="alert">
                On Progress
              </div>
            </div>
          </div>
        </li>
      </ul>
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
