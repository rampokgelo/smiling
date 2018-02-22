<?php include 'components/head.php'; ?>

<!-- CONTENT GOES HERE -->
<?php include 'components/navbar-header.php'; ?>

<div class="wrapper">

  <div class="container">
    <br />
    <div class="card mb-3">
        <div class="card-header">
          Teknisi kami kana mengunjungi anda di:
        </div>
        <div class="card-body">

          <div class="media">
            <i class="fa fa-map-marker-alt fa-2x mr-3 text-secondary"></i>
            <div class="media-body">
              <h5 class="mt-0">Alamat</h5>
              <p>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at.
              </p>
            </div>
          </div>

          <div class="media">
            <i class="fa fa-clock fa-2x mr-3 text-secondary"></i>
            <div class="media-body">
              <h5 class="mt-0">Waktu</h5>
              <p>
                2 Februari 2018 - 16:30
              </p>
            </div>
          </div>

        </div>
    </div>

    <div class="card">
        <div class="card-header">
          Kontak Detail
        </div>
        <div class="card-body">

          <form>
            <div class="form-group">
              <label>No HP</label>
              <input type="number" class="form-control" placeholder="ex 08 xxx xxx xxx">
              <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
              <label>Nama</label>
              <input type="text" class="form-control" placeholder="Nama">
            </div>
          </form>

        </div>
    </div>

    <div class="my-3">
      <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
          <a class="nav-link text-dark" href="home-user.php">Kembali</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn-primary" href="order-step2.php">Set</a>
        </li>
      </ul>
    </div>
  </div>


</div>

<!-- END CONTENT GOES HERE -->

<?php include 'components/footer.php'; ?>
