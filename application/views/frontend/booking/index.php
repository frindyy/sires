<div class="container cart-header">
        <div class="row mt-5 text-center">
            <div class="col">
                <h3>Your Reserve</h3>
                <p>Pastikan Pemesanan Anda Terbayar Lunas</p>
            </div>
        </div>
    </div>

    <!-- Breadcrumb -->
      <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb cart-breadcrumb bg-transparent pl-0">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Reserve Checkout</li>
            </ol>
          </nav>
      </div>
    <!-- End Breadcrumb -->


      <!-- Checkout -->
      <section class="checkout">
          <div class="container">
              <div class="row justify-content-between" style="margin-bottom: 100px;">
                  <div class="col-lg-8">
                      <h4 class="mb-4">Reservasi</h4>
                      <!-- <div class="row mb-4">
                          <div class="col-2">
                              <img src="img/cart/item1.png" alt="">
                          </div>
                          <div class="col-4">
                              <h5 class="m-0">Jeans Pubb</h5>
                              <p class="m-0" style="color:#b7b7b7">IDR 210.000</p>
                          </div>
                          <div class="col-4">
                            <button type="button" class="btn btn-sm" style="background-color: #eaeaea;color: #fff;"><i class="fas fa-minus-circle"></i></button>
                            <span class="mx-2">20</span>
                            <button type="button" class="btn btn-sm" style="background-color:#04D12D;color: #fff;"><i class="fas fa-plus-circle"></i></button>
                          </div>
                          <div class="col-2 text-right">
                            <button type="button" class="btn btn-sm btn-danger"><i class="fas fa-times-circle"></i></button>
                          </div>
                      </div>
                      <div class="row mb-4">
                            <div class="col-2">
                                <img src="img/cart/item1.png" alt="">
                            </div>
                            <div class="col-4">
                                <h5 class="m-0">Jeans Pubb</h5>
                                <p class="m-0" style="color:#b7b7b7">IDR 210.000</p>
                            </div>
                            <div class="col-4">
                              <button type="button" class="btn btn-sm" style="background-color: #eaeaea;color: #fff;"><i class="fas fa-minus-circle"></i></button>
                              <span class="mx-2">20</span>
                              <button type="button" class="btn btn-sm" style="background-color:#04D12D;color: #fff;"><i class="fas fa-plus-circle"></i></button>
                            </div>
                            <div class="col-2 text-right">
                              <button type="button" class="btn btn-sm btn-danger"><i class="fas fa-times-circle"></i></button>
                            </div>
                        </div>
                        <div class="row mb-4">
                                <div class="col-2">
                                    <img src="img/cart/item1.png" alt="">
                                </div>
                                <div class="col-4">
                                    <h5 class="m-0">Jeans Pubb</h5>
                                    <p class="m-0" style="color:#b7b7b7">IDR 210.000</p>
                                </div>
                                <div class="col-4">
                                  <button type="button" class="btn btn-sm" style="background-color: #eaeaea;color: #fff;"><i class="fas fa-minus-circle"></i></button>
                                  <span class="mx-2">20</span>
                                  <button type="button" class="btn btn-sm" style="background-color:#04D12D;color: #fff;"><i class="fas fa-plus-circle"></i></button>
                                </div>
                                <div class="col-2 text-right">
                                  <button type="button" class="btn btn-sm btn-danger"><i class="fas fa-times-circle"></i></button>
                                </div>
                            </div>

                            <h4 class="mb-3" style="margin-top: 100px;">Your Address</h4> -->
                            <form>
                                <div class="form-group">
                                    <label for="jenis_reservasi">Jenis Reservasi</label>
                                     <select class="custom-select" id="jenis_reservasi" name="jenis_reservasi">
                                          <option selected>--Jenis Reservasi--</option>
                                          <option value="1">Meeting</option>
                                          <option value="2">Class room</option>
                                      </select>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="jenis_ruangan">Jenis Ruangan</label>
                                    <select class="custom-select" id="jenis_ruangan" name="jenis_ruangan">
                                          <option selected>--Jenis Ruangan--</option>
                                          <option value="1">VIP</option>
                                          <option value="2">Reguler</option>
                                      </select>
                                </div> -->
                                 <div class="form-group">
                                    <label for="address2">Jumlah Peserta</label>
                                    <input type="text" class="form-control" id="address2" placeholder="Jumlah Peserta">
                                </div>
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="tgl_dari">Dari</label>
                                    <input type="text" class="form-control" id="datetimepicker" name="tgl_dari" placeholder="Tanggal Dari">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="tgl_sampai">Sampai</label>
                                    <input type="text" class="form-control" id="datetimepicker2" name="tgl_sampai" placeholder="Tanggal Sampai">
                                  </div>
                                </div>
                                <p>
                                  <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Tambah Perlengkapan</button>
                                </p>
                            </form>

                              <div class="collapse" id="collapseExample">
                                <div class="card card-body">

                                <form>
                                      <div class="form-row">
                                        <div class="form-group col-md-7">
                                         <label for="nm_perlengkapan">Perlengkapan</label>
                                           <select class="custom-select" id="nm_perlengkapan" name="nm_perlengkapan">
                                                <option selected>--Perlengkapan--</option>
                                                <option value="1">Meeting</option>
                                                <option value="2">Class room</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-5">
                                          <label for="harga">Harga</label>
                                          <input type="text" class="form-control" id="harga" name="harga" disabled>
                                        </div>
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <input type="text" class="form-control" id="qty" name="qty" placeholder="Qty">
                                        </div>
                                        <div class="col">
                                          <button type="submit" class="btn btn-success btn-sm text-white">Tambah</button>
                                        </div>
                                      </div>
                                </form>

                                <hr>
                              <div class="table-responsive">
                                <table class="table table-hover">
                                  <thead class="thead-dark">
                                    <tr>
                                      <th>#</th>
                                      <th>Nama Perlengkapan</th>
                                      <th>Qty</th>
                                      <th>Harga</th>
                                      <th>Sub Harga</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>1</td>
                                      <td>Mark</td>
                                      <td>Otto</td>
                                      <td>@mmdo</td>
                                      <td>@mmdo</td>
                                    </tr>
                                    <tr>
                                      <td>1</td>
                                      <td>Mark</td>
                                      <td>Otto</td>
                                      <td>@mmdo</td>
                                      <td>@mmdo</td>
                                    </tr>
                                    <tr>
                                      <td colspan="4" class="text-center"><strong>Total Harga</strong></td>
                                      <td>Rp.200000</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>

                              </div>
                            </div> <!-- collapse -->

                  </div> <!-- Col-lg-6 -->

                    <hr>

                  <div class="col-lg-4">
                        <div class="card rounded-0 checkout-detail">
                            <div class="card-body">
                                <h5 class="card-title">Informasi Biaya</h5>

                                <div class="row mb-3">
                                    <div class="col">
                                        <h6 class="m-0">Jeans Pubb</h6>
                                        <small style="color: #b7b7b7;">2 Item</small>
                                    </div>
                                    <div class="col d-flex justify-content-end">
                                        <h6 class="m-0 align-self-center text-success">IDR 210.000</h6>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <h6 class="m-0">Jeans Pubb</h6>
                                        <small style="color: #b7b7b7;">2 Item</small>
                                    </div>
                                    <div class="col d-flex justify-content-end">
                                        <h6 class="m-0 align-self-center text-success">IDR 210.000</h6>
                                    </div>
                                </div>

                                <hr>

                                <div class="row mb-3">
                                    <div class="col">
                                        <h6 class="m-0">Courier</h6>
                                        <small style="color: #b7b7b7;">JNT Express</small>
                                    </div>
                                    <div class="col d-flex justify-content-end">
                                        <h6 class="m-0 align-self-center text-success">IDR 210.000</h6>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <h6 class="m-0">Tax</h6>
                                        <small style="color: #b7b7b7;">Negara 20%</small>
                                    </div>
                                    <div class="col d-flex justify-content-end">
                                        <h6 class="m-0 align-self-center text-success">IDR 210.000</h6>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <h6 class="m-0">Eid Promo</h6>
                                        <small style="color: #b7b7b7;">10% OFF</small>
                                    </div>
                                    <div class="col d-flex justify-content-end">
                                        <h6 class="m-0 align-self-center text-danger">IDR -210.000</h6>
                                    </div>
                                </div>

                                <hr>

                                <div class="row mb-3">
                                    <div class="col">
                                        <h6 class="m-0">Total Harga</h6>
                                    </div>
                                    <div class="col d-flex justify-content-end">
                                        <h6 class="m-0 align-self-center text-primary">IDR 210.000</h6>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col">
                                <button type="button" class="btn btn-block" style="background-color: #eaeaea;color: #adadad;">Cancel</button>
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-primary btn-block text-white" data-toggle="modal" data-target="#checkout-modal">Checkout</button>
                            </div>
                        </div>

                  </div>
              </div>
          </div>
      </section>
      <!-- End Checkout -->

      
      <!-- Modal -->
      <div class="modal fade checkout-modal-success" id="checkout-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-body text-center">
              <img src="img/cart/success_checkout.png" class="mb-5">
              <h3>Checkout Berhasil</h3>
              <p>Anda akan mendapatkan barang anda <br> dalam beberapa hari</p>
              <button type="button" class="btn mt-3" data-dismiss="modal" style="background-color: #eaeaea;color: #adadad;">Close</button>
            </div>
          </div>
        </div>
      </div>

      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_user/datetimepicker/css/jquery.datetimepicker.min.css"/>
      <script src="<?php echo base_url(); ?>assets_user/datetimepicker/js/jquery.datetimepicker.js"></script>
      <script type="text/javascript">
          $(document).ready(function() {
              $('#datetimepicker').datetimepicker();
              $('#datetimepicker2').datetimepicker();
          });
      </script>