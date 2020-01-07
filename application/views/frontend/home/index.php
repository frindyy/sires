
    
    

     


    <!-- Features Special  -->
      <section class="features bg-light p-5">
        <div class="container">

          <div class="row mb-3 text-center">
            <div class="col">
              <h3>Our Facilities</h3>
              <!-- <p>Promo Pakaian cocok untuk Lebaran</p> -->
            </div>
          </div>

          <div class="row">
          <?php foreach ($tampil_image as $row) : ?>
          
            <div class="col-sm-12 col-md-6 col-lg-3">
              <figure class="figure">
                <div class="figure-img">
                  <img src="<?php echo base_url('assets/upload_image/'.$row->foto_fasilitas); ?>" class="figure-img img-fluid">
                  <a href="" class="d-flex justify-content-center">
                    <img src="<?php echo base_url(); ?>assets_user/img/special_eid/ic_view.png" class="align-self-center">
                  </a>
                </div>
                  <figcaption class="figure-caption text-center">
                    <h5><?php echo $row->nm_fasilitas; ?></h5>
                    <a href="<?php echo base_url().'detail_fasilitas/preview/'.$row->id_fasilitas; ?>" class="btn btn-outline-primary">Details</a>
                  </figcaption>
                </figure>
            </div>
            <?php endforeach; ?>
            <!-- <div class="col-sm-12 col-md-6 col-lg-3">
              <figure class="figure">
                <div class="figure-img">
                  <img src="<?php echo base_url(); ?>assets_user/img/slideshow/room_lab1.jpg" class="figure-img img-fluid">
                  <a href="" class="d-flex justify-content-center">
                    <img src="<?php echo base_url(); ?>assets_user/img/special_eid/ic_view.png" class="align-self-center">
                  </a>
                </div>
                  <figcaption class="figure-caption text-center">
                    <h5>Lab Komputer</h5>
                    <button class="btn btn-outline-primary">Details</button>
                  </figcaption>
                </figure>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
              <figure class="figure">
                <div class="figure-img">
                  <img src="<?php echo base_url(); ?>assets_user/img/slideshow/vila1.jpg" class="figure-img img-fluid">
                  <a href="" class="d-flex justify-content-center">
                    <img src="<?php echo base_url(); ?>assets_user/img/special_eid/ic_view.png" class="align-self-center">
                  </a>
                </div>
                  <figcaption class="figure-caption text-center">
                    <h5>Villa Graha Umsida</h5>
                    <button class="btn btn-outline-primary">Details</button>
                  </figcaption>
                </figure>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
              <figure class="figure">
                <div class="figure-img">
                  <img src="<?php echo base_url(); ?>assets_user/img/slideshow/vila1.jpg" class="figure-img img-fluid">
                  <a href="" class="d-flex justify-content-center">
                    <img src="<?php echo base_url(); ?>assets_user/img/special_eid/ic_view.png" class="align-self-center">
                  </a>
                </div>
                  <figcaption class="figure-caption text-center">
                    <h5>Villa Graha Umsida</h5>
                    <button class="btn btn-outline-primary">Details</button>
                  </figcaption>
                </figure>
            </div> -->

          </div>

        </div>
      </section>
    <!-- End Features Special  -->

    <!-- Designer -->
      <!-- <section class="designer p-5">
        <div class="container">

          <div class="row mb-3">
            <div class="col">
              <h3>Our Designers</h3>
              <p>Pakaian Terbaik dari designer professional</p>
            </div>
          </div>

          <div class="row">

            <div class="col-6 col-md-3 text-center">
              <figure class="figure">
                      <img src="<?php echo base_url(); ?>assets_user/img/designer/1.png" class="img-fluid">
                  <figcaption class="figure-caption text-center">
                    <h5>Anne Mortgerry</h5>
                    <p>Designer</p>
                  </figcaption>
                </figure>
            </div>
            <div class="col-6 col-md-3 text-center">
                <figure class="figure">
                        <img src="<?php echo base_url(); ?>assets_user/img/designer/2.png" class="img-fluid">
                    <figcaption class="figure-caption text-center">
                      <h5>Ainuna Qurota</h5>
                      <p>Artistic</p>
                    </figcaption>
                  </figure>
              </div>
              <div class="col-6 col-md-3 text-center">
                  <figure class="figure">
                          <img src="<?php echo base_url(); ?>assets_user/img/designer/3.png" class="img-fluid">
                      <figcaption class="figure-caption text-center">
                        <h5>Luluk Ulfiah</h5>
                        <p>Designer</p>
                      </figcaption>
                    </figure>
                </div>
                <div class="col-6 col-md-3 text-center">
                    <figure class="figure">
                            <img src="<?php echo base_url(); ?>assets_user/img/designer/4.png" class="img-fluid">
                        <figcaption class="figure-caption text-center">
                          <h5>Moch Riski ady</h5>
                          <p>Designer</p>
                        </figcaption>
                      </figure>
                  </div>

          </div>

          <div class="row m-3">
            <div class="col text-center">
              <a href="" class="btn btn-warning text-white">See All Our Designer</a>
            </div>
          </div>

        </div>
      </section> -->
    <!-- End Designer -->

    <section class="visimisi bg-light p-5">
      <div class="container">


          <div class="row">

            <div class="col-lg-4 d-flex align-items-center">
              <h3 class="title">Visi Dan Misi</h3>
            </div>
            <div class="col-lg-8">

              <div class="row">
                <div class="col">
                  <h3 class="text-center">Visi</h3>
                  <p>Menjadi Direktorat Pengelolahan Aset dan Lingkungan Unggul dan Inovatif dalam menunjang sarana dan prasarana & pelayanan terbaik dalam pengembangan IPTEK berdasarkan nilai-nilai islam untuk kesejahteraan Masyarakat</p>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <h3 class="text-center">Misi</h3>
                  <ul>
                    <li>Meningkatkan sarana dan prasarana dan pelayanan terbaik dalam penyelenggaraan pendidikan & pengajaran secara proffesional sesuai perkembangan IPTEKS berdasarkan nila-nilai Islam.</li>
                    <li>Meningkatkan sarana dan prasarana dan pelayanan terbaik dalam mendukung penelitian untuk proses pembelajaran & pengembangan IPTEKS untuk kesejahteraan masyarakat.</li>
                    <li>eningkatkan sarana dan prasarana dan pelayanan terbaik dalam meningkatkan kerja sama dengan lembaga dalam negri & luar negri untuk penguatan Catur Dharma perguruan tinggi Muhammadiyah.</li>
                  </ul>
                </div>
              </div>

            </div>

          </div>

      </div>
    </section>


    
 <!-- Modal -->
      <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalScrollableTitle">Daftar</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukan NIM">
                  </div>
                  <div class="form-group">
                    <label for="nm_mahasiswa">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nm_mahasiswa" name="nm_mahasiswa" placeholder="Masukan Nama Lengkap">
                  </div>
                  <div class="form-group">
                    <label for="fakultas">Fakultas</label>
                    <select class="form-control" name="fakultas" id="fakultas">
                      <option>--Fakultas--</option>
                      <?php foreach ($tampil_fakultas->result() as $row) { ?>
                          <option value="<?php echo $row->id_fakultas;?>"><?php echo $row->nm_fakultas; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <select class="form-control" id="jurusan" name="jurusan">
                      <option>--Jurusan--</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Masukan Email">
                  </div>
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Email">
                  </div>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </div>
      </div>

     

    

    <script>
      $(document).ready(function(){

          $('#fakultas').change(function(){
          var id = $(this).val();
          $.ajax({
            type: 'POST',
            url : '<?php echo base_url()."home/get_jurusan" ?>',
            data : {id:id},
            async : true,
            dataType : 'json',
            success:function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<option value='+data[i].id_jurusan+'>'+data[i].nm_jurusan+'</option>';
                    }
                    $('#jurusan').html(html);
            } 
          });
        });

      });
      
    </script>
 