

<!-- Breadcrumb -->
      <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent pl-0">
              <li class="breadcrumb-item"><a href="#">Fasilitas</a></li>
              <li class="breadcrumb-item active" aria-current="page">Detail Fasilitas</li>
            </ol>
          </nav>
      </div>
    <!-- End Breadcrumb -->

    <!-- Product Single -->
      <section class="single-product">
          <div class="container">

              <div class="row">
                 
                  <div class="col-md col-lg-5">
                  <figure class="figure">
                      <div id="gallery">
                        <img src="<?php echo base_url('assets/upload_image/upload1.png'); ?>" class="figure-img img-fluid" style="width: 380px;height: 250px">
                        </div>
                        <figcaption class="figure-caption product-thumbnail-container d-flex justify-content-between">
                          <?php foreach ($image_all as $row) : ?>
                            <a href="<?php echo base_url('assets/upload_image/'.$row->foto_fasilitas); ?>">
                                <img src="<?php echo base_url('assets/upload_image/'.$row->foto_fasilitas); ?>" width="65px">
                            </a>
                            <?php endforeach; ?>
                        </figcaption>
                      </figure>
                      <!-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="..." alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="..." alt="Second slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="..." alt="Third slide">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div> -->
                  </div>
                   

                  <div class="col-md col-lg-4">
                        <h3><?= $fasilitas_all['nm_fasilitas']; ?></h3>
                        <p class="text-muted"><?= "Rp. ".number_format($fasilitas_all['harga']); ?></p>
                        <!-- <button type="button" class="btn" style="background-color: #eaeaea;color: #fff;"><i class="fas fa-minus-circle"></i></button>
                        <span class="mx-2">20</span>
                        <button type="button" class="btn" style="background-color:#04D12D;color: #fff;"><i class="fas fa-plus-circle"></i></button> -->

                        <div class="btn-product">
                            <a href="<?php echo base_url().'booking' ?>" class="btn btn-primary" style="color: #fff;">Booking</a>
                            <a href="" class="btn" style="background-color: #eaeaea;color: #adadad;">Cancel</a>
                        </div>

                        <!-- <div class="designed-by">
                        <h5>Upload By</h5>
                        <div class="row">
                            <div class="col-3">
                                <img src="<?php echo base_url();?>assets_user/img/single_product/2.png" alt="">
                            </div>
                            <div class="col">
                                <h4>Anne Morgery</h4>
                                <p>14.2K <span>Followes</span></p>
                            </div>
                        </div>
                    </div> -->
                  </div>

              </div>

          </div>
      </section>
    <!-- End Product Single -->

    
    <!-- Product Description -->
    <section class="product-description p-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-9">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Deskripsi Fasilitas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Review</a>
              </li>
            </ul>
            <div class="tab-content p-3" id="myTabContent">
              <div class="tab-pane fade show active product-review" id="description" role="tabpanel" aria-labelledby="description-tab">
                <p class="text-justify"><?= $fasilitas_all['deskripsi']; ?></p>
              </div>
              <div class="tab-pane fade product-review" id="review" role="tabpanel" aria-labelledby="review-tab">

                <div class="row"> 
                  <div class="col-1 d-none d-md-block mr-3">
                    <img src="<?php echo base_url();?>assets_user/img/single_product/2.png" alt="">
                  </div>
                  <div class="col">
                      <h5>Frindy Pratama</h5>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, animi?</p>
                  </div>
                </div>
                <div class="row"> 
                    <div class="col-1 d-none d-md-block mr-3">
                      <img src="<?php echo base_url();?>assets_user/img/single_product/2.png" alt="">
                    </div>
                    <div class="col">
                        <h5>Frindy Pratama</h5>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, animi?</p>
                    </div>
                  </div>
                  <div class="row"> 
                      <div class="col-1 d-none d-md-block mr-3">
                        <img src="<?php echo base_url();?>assets_user/img/single_product/2.png" alt="">
                      </div>
                      <div class="col">
                          <h5>Frindy Pratama</h5>
                          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, animi?</p>
                      </div>
                    </div>
                    <div class="row"> 
                      <div class="col-1 d-none d-md-block mr-3">
                        <img src="<?php echo base_url();?>assets_user/img/single_product/2.png" alt="">
                      </div>
                      <div class="col">
                          <h5>Frindy Pratama</h5>
                          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, animi?</p>
                      </div>
                    </div>
                    <div class="row"> 
                        <div class="col-1 d-none d-md-block mr-3">
                          <img src="<?php echo base_url();?>assets_user/img/single_product/2.png" alt="">
                        </div>
                        <div class="col">
                            <h5>Frindy Pratama</h5>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, animi?</p>
                        </div>
                      </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- End Product Description -->


  <!-- Similar Product -->
    <section class="similar-product p-5">
      <div class="container">

        <div class="row mb-3">
            <div class="col">
              <h3>Similar Product</h3>
              <p>Pakaian Pelengkap Product Di Atas</p>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
                <figure class="figure">
                    <img src="<?php echo base_url();?>assets_user/img/similar-product/1.png" class="figure-img img-fluid">
                    <figcaption class="figure-caption">
                      <div class="row">
                        <div class="col">
                            <h4>Hatty Bomb</h4>
                            <p>Match 20%</p>
                        </div>
                        <div class="col align-items-center d-flex justify-content-end">
                          <p style="font-size: 18px;">IDR 209.000</p>
                        </div>
                      </div>
                    </figcaption>
                  </figure>
            </div>
            <div class="col-md-4">
                <figure class="figure">
                    <img src="<?php echo base_url();?>assets_user/img/similar-product/2.png" class="figure-img img-fluid">
                    <figcaption class="figure-caption">
                      <div class="row">
                        <div class="col">
                            <h4>Hatty Bomb</h4>
                            <p>Match 20%</p>
                        </div>
                        <div class="col align-items-center d-flex justify-content-end">
                          <p style="font-size: 18px;">IDR 209.000</p>
                        </div>
                      </div>
                    </figcaption>
                  </figure>
            </div>
            <div class="col-md-4">
                <figure class="figure">
                    <img src="<?php echo base_url();?>assets_user/img/similar-product/3.png" class="figure-img img-fluid">
                    <figcaption class="figure-caption">
                      <div class="row">
                        <div class="col">
                            <h4>Hatty Bomb</h4>
                            <p>Match 20%</p>
                        </div>
                        <div class="col align-items-center d-flex justify-content-end">
                          <p style="font-size: 18px;">IDR 209.000</p>
                        </div>
                      </div>
                    </figcaption>
                  </figure>
            </div>
          </div>

      </div>
    </section>
  <!-- End Similar Product -->

  <script type="text/javascript">
    $('.product-thumbnail-container a').click(function(e){
      e.preventDefault();
      $("#gallery").empty().append(
            $("<img>", {src: this.href})
        );
    })
    // $('#carouselExampleControls').on('click',function(){
    //   $('.carousel-item').removeClass('active');
    //   $(this,'.carousel-item').addClass('active');
    // })
  </script>
