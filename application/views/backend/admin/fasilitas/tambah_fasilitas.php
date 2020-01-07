		
	

          <div class="card shadow mb-4">
            <div class="card-body">
				<div id="pesan"></div>

	
            	<!-- Approach -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Tambah Fasilitas</h6>
                </div>
                <div class="card-body">
                 
					<form action="<?php echo base_url().'admin/fasilitas/tambah_fasilitas' ?>" method="POST" enctype="multipart/form-data">
						  <div class="form-group">
						    <label for="id_fasilitas">Kode Fasilitas</label>
						    <input type="text" class="form-control" id="id_fasilitas" name="id_fasilitas" value="<?php echo $kode_fasilitas; ?>" readonly>
						  </div>
						  <div class="form-group">
						    <label for="nm_fasilitas">Nama Fasilitas</label>
						    <input type="text" class="form-control" id="nm_fasilitas" name="nm_fasilitas" placeholder="Masukan Nama Fasilitas" value="<?php echo set_value('nm_fasilitas'); ?>">
						    <small class="text-danger"><?php echo form_error('nm_fasilitas'); ?></small>
						  </div>
						  <div class="form-row">
	                          <div class="form-group col-md-6">
	                            <label for="kap_ruangan">Kapasitas Ruangan</label>
	                            <input type="text" class="form-control" id="kap_ruangan" name="kap_ruangan" placeholder="Masukan Kapasitas Ruangan" value="<?php echo set_value('kap_ruangan'); ?>">
	                            <small class="text-danger"><?php echo form_error('kap_ruangan'); ?></small>
	                          </div>
	                          <div class="form-group col-md-6">
	                            <label for="harga_fasilitas">Harga Fasilitas</label>
	                            <input type="text" class="form-control" id="harga_fasilitas" name="harga_fasilitas" placeholder="Masukan Harga Fasilitas" value="<?php echo set_value('harga_fasilitas'); ?>">
	                            <small class="text-danger"><?php echo form_error('harga_fasilitas'); ?></small>
	                          </div>
	                       </div>
	                       <!-- <strong>Width = 380px and Height = 320px</strong> -->
	                       <?php for ($i=1; $i <=5 ; $i++) :?>
	                       <div class="form-group">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="filefoto<?php echo $i;?>">
                                <label class="custom-file-label" for="image">Choose file</label>
                              </div>
                            </div>
                            <?php endfor;?>
						  <div class="form-group">
						    <label for="deskripsi_fasilitas">Deskripsi Fasilitas</label>
						    <textarea class="form-control" id="deskripsi_fasilitas" name="deskripsi_fasilitas" rows="3"><?php echo set_value('deskripsi_fasilitas'); ?></textarea>
						    <small class="text-danger"><?php echo form_error('deskripsi_fasilitas'); ?></small>
						  </div>
						  <button type="submit" class="btn btn-primary btn-block">Submit</button>
						  <button type="submit" class="btn btn-danger btn-block">Back</button>
						</form>

                </div>
              </div>

            </div>
          </div>


          <script type="text/javascript">
				$('.custom-file-input').on('change', function(){
	              let filename = $(this).val().split('\\').pop();
	              $(this).next('.custom-file-label').addClass("selected").html(filename);
	            });
          		
          </script>


