<?php include 'components/head.php'; ?>

<!-- CONTENT GOES HERE -->
<?php include 'components/navbar-header.php'; ?>

<div class="wrapper">
  <div class="bg-light">
    <div class="container">
      <form class="py-2">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Cari Alamat">
          <div class="input-group-append">
            <button class="btn btn-secondary" type="button"><i class="fab fa-sistrix"></i></button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="iframe-container">
    <div id="map"></div>
  </div>
  <div class="container">
    <form>
      <div class="card">
          <div class="card-body pb-1">
            <h6 class="card-subtitle mb-2 text-muted">Nomer Tiket</h6>
            <h5 class="card-title">IN123456</h5>
          </div>

          <div class="input-group input-group-card-b">
            <div class="input-group-prepend">
              <span class="input-group-text" id=""><i class="fa fa-calendar"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Tanggal">
            <input type="text" class="form-control" placeholder="Jam">
          </div>
      </div>
      <div class="my-3">
        <a href="order-step1.php" class="btn btn-primary btn-block">Lanjut</a>
      </div>

    </form>
  </div>
  <script>
    function initMap() {
      var uluru = {lat: -25.363, lng: 131.044};
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 4,
        center: uluru
      });
      var marker = new google.maps.Marker({
        position: uluru,
        map: map
      });
    }
  </script>
  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBs6NfOSugQMHV2eJJciPbpdjIxi7v5SHc&callback=initMap">
  </script>

</div>


<?php include 'components/navbar-bottom.php'; ?>
<?php include 'components/modal.php'; ?>

<!-- END CONTENT GOES HERE -->

<?php include 'components/footer.php'; ?>
<script>
$(window).on('load',function(){
    $('#modaltiket').modal('show');
});
</script>
