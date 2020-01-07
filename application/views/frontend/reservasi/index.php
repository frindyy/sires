

<!-- Breadcrumb -->
      <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent pl-0">
              <li class="breadcrumb-item"><a href="#">Reservasi</a></li>
              <li class="breadcrumb-item active" aria-current="page">Detail Reservasi</li>
            </ol>
          </nav>
      </div>
    <!-- End Breadcrumb -->

    <!-- Product Single -->
      <section class="single-product" style="margin-bottom: 250px;">
          <div class="container">

              <div class="row">
                 
                  <div class="col">

                      <!-- Nav tabs -->
                          <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link active" id="belum_bayar-tab" data-toggle="tab" href="#belum_bayar" role="tab" aria-controls="belum_bayar" aria-selected="true">Reservasi Belum Bayar</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="simpan-tab" data-toggle="tab" href="#simpan" role="tab" aria-controls="simpan" aria-selected="false">Reservasi Tersimpan</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="history-tab" data-toggle="tab" href="#history" role="tab" aria-controls="history" aria-selected="false">History Transaksi Reservasi</a>
                            </li>
                          </ul>

                          <!-- Tab panes -->
                          <div class="tab-content">
                            <div class="tab-pane active" id="belum_bayar" role="tabpanel" aria-labelledby="belum_bayar-tab">
                              
                                <div class="table-responsive my-5">
                                    <table class="table table-striped table-bordered" id="datatable" style="width: 100%">
                                      <thead>
                                        <tr>
                                          <th>No Transaksi</th>
                                          <th>Waktu</th>
                                          <th>Status</th>
                                          <th>Aksi</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <!-- <?php
                                          $no=1;
                                          foreach ($tampil_fakultas as $row) { ?>
                                            <tr>
                                              <td><?= $no++; ?></td>
                                              <td><?= ucwords($row['nm_fakultas']); ?></td>
                                              <td class="text-center">
                                                <a href="" class="btn btn-warning btn-sm" title="Edit data Fakultas"><i class="fa fa-edit"></i></a>
                                                            <a href="<?php echo base_url().'admin/fakultas/hapus_fakultas/'.$row['id_fakultas']; ?>" class="btn btn-danger btn-sm hapus_fakultas" title="Hapus data Fakultas"><i class="fa fa-trash"></i></a>
                                              </td>
                                            </tr>
                                        <?php
                                          }
                                        ?> -->
                                      </tbody>
                                    </table>
                                  </div>

                            </div>
                            <div class="tab-pane" id="simpan" role="tabpanel" aria-labelledby="simpan-tab">...</div>
                            <div class="tab-pane" id="history" role="tabpanel" aria-labelledby="history-tab">...</div>
                          </div>

                  </div>
                   

              </div>

          </div>
      </section>
    <!-- End Product Single -->

    <script>
      $('#myTab a').on('click', function (e) {
          e.preventDefault()
          $(this).tab('show');
        });
    </script>

    


  
