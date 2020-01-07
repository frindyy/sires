<!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
        <a class="navbar-brand" href="#">
            <img src="<?php echo base_url(); ?>assets_user/img/Logo_umsida2.png" alt="Pratama Store" width="160px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav text-uppercase mx-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#" style="color:  #081370">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="color:  #081370">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="color:  #081370">Fasilitas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url().'reservasi' ?>" style="color:  #081370">Reservasi</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#" style="color:  #081370">Status Booking</a>
            </li> -->
          </ul>
          <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">Daftar</button>
          <a href="<?php echo base_url().'auth' ?>"><button type="submit" class="btn btn-primary ml-3">Login</button></a>
        </div>
        </div>
      </nav>
    <!-- End Navbar -->