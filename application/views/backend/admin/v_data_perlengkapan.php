		
		<!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800"><?php echo $title; ?></h1>

          <div class="card shadow mb-4">
            <div class="card-body">
				<div id="pesan-sukses"></div>

					<p>
			        	 <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
						    Tambah
						  </a>
					  </p>

					  <div class="collapse" id="collapseExample">
						  <div class="card card-body">
							   <form id="form-perlengkapan" method="post" action="<?php echo base_url()."admin/perlengkapan/tambah_proses" ?>">
								  <div class="form-row">
								    <div class="form-group col-4">
								      <input type="text" class="form-control nm_perlengkapan" name="nm_perlengkapan" id="nm_perlengkapan" placeholder="Masukan Nama Perlengkapan">
								    </div>
								     <div class="form-group col-3">
						                <select class="form-control satuan" name="satuan" id="satuan">
						                	<option value="">--Pilih Satuan--</option>
						                	<option value="unit">Unit</option>
						                	<option value="jam">Jam</option>
						                </select>
								    </div>
								    <div class="form-group col-3">
								      <input type="text" class="form-control harga" name="harga" id="harga" placeholder="Masukan Harga">
								    </div>
								    <div class="col">
								      <button type="submit" class="btn btn-primary">Submit</button>
								    </div>
								  </div>
								</form>
						  </div>
						</div>

            	<div class="table-responsive my-5">
					<table class="table table-striped table-bordered" id="datatable" style="width: 100%">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Perlengkapan</th>
								<th>Satuan</th>
								<th>Harga</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody id="show-perlengkapan">

						</tbody>
					</table>
				</div>

            </div>
          </div>

          <!-- Modal Edit -->
				<div class="modal fade" id="modal-edit-perlengkapan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-dialog-scrollable" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Edit Data Perlengkapan</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
						
					<form>

						<input type="hidden" name="id_perlengkapan_edit" id="id_perlengkapan_edit" class="id_perlengkapan_edit">
				       		 <div class="form-group">
						      <input type="text" class="form-control nm_perlengkapan_edit" name="nm_perlengkapan_edit" id="nm_perlengkapan_edit" placeholder="Masukan Nama Perlengkapan">
						    </div>
						     <div class="form-group">
				                <select class="form-control satuan_edit" name="satuan_edit" id="satuan_edit">
				                	<option value="">--Pilih Satuan--</option>
				                	<option value="unit">Unit</option>
				                	<option value="jam">Jam</option>
				                </select>
						    </div>
						    <div class="form-group">
						      <input type="text" class="form-control harga_edit" name="harga_edit" id="harga_edit" placeholder="Masukan Harga">
						    </div>

				      	</div>
				      	<div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					        <button type="submit" class="btn btn-primary" id="btn-edit-perlengkapan">Edit</button>
				      	</div>
				    </form>

				    </div>
				  </div>
				</div>

          <script type="text/javascript">

          		tampil_perlengkapan();

				function tampil_perlengkapan(){
					$.ajax({
						type : 'get',
						url : '<?php echo base_url()."admin/perlengkapan/tampil_perlengkapan" ?>',
						async : true,
						dataType : 'JSON',
						success:function(data){
							var baris = "";
             				for (var i=0; i<data.length; i++) {
             					baris += '<tr>'+
             							 '<td>'+ (i+1) +'</td>'+
             							 '<td>'+ data[i].nm_perlengkapan +'</td>'+
             							 '<td>'+ data[i].satuan +'</td>'+
             							 '<td>'+ 'Rp ' +rupiah(data[i].harga) +'</td>'+
                                         '<td class="text-center">'+
                                            '<a href=""javascript:;"" data-toggle="modal" class="btn btn-info btn-sm item-edit" title="Edit data Perlengkapan" data="'+data[i].id_perlengkapan+'"><i class="fa fa-edit"></i></a>'+' '+
                                            '<a href="" data-toggle="modal" class="btn btn-danger btn-sm item-hapus" title="Hapus data Perlengkapan" data-id="'+data[i].id_perlengkapan+'"><i class="fa fa-trash"></i></a>'+
                                         '</td>'+
             							 '</tr>';
             				}
             				$('#show-perlengkapan').html(baris);
						}
					});
				}

				$('#form-perlengkapan').submit(function(e){
					e.preventDefault();
					var me = $(this);
					 $.ajax({
	                    url:me.attr('action'),
	                    type:me.attr('method'),
	                    data:me.serialize(),
	                    dataType:'json',
	                    success:function(data){
	                    	if (data.success == true) {

                        	   $('.form-group').removeClass('has-error')
                                        .removeClass('has-success');
		                        $('.text-danger').remove();

		                        me[0].reset();
		                        $('.collapse').collapse('hide');
		                        $('#pesan-sukses').html(data.message);
		                        tampil_perlengkapan();
		                        

	                      }else{

	                        $.each(data.message,function(key, value){
	                          var element = $('#' + key);
	                          element.closest('div.form-group')
	                          .removeClass('has-error')
	                          .addClass(value.length > 0 ? 'has-error' : 'has-success').
	                          find('.text-danger').remove();
	                          element.after(value);
	                        })
	                      }
	                    }
					});
					 return false;
					});

				//UPDATE PERLENGKAPAN
				$('#show-perlengkapan').on('click','.item-edit',function(){
					var id_perlengkapan = $(this).attr('data');
					$.ajax({
						type : "GET",
		                url  : '<?php echo base_url()."admin/perlengkapan/ambil_data_id" ?>',
		                dataType : "JSON",
		                data : {id_perlengkapan:id_perlengkapan},
		                success:function(data){
		                	$('#modal-edit-perlengkapan').modal('show');
		                	$('.id_perlengkapan_edit').val(data.id_perlengkapan);
		                	$('.nm_perlengkapan_edit').val(data.nm_perlengkapan);
		                	$('.satuan_edit').val(data.satuan);
		                	$('.harga_edit').val(data.harga);
		                }
					});
					return false;
				});

				$('#btn-edit-perlengkapan').on('click',function(){
					var id_perlengkapan = $('#id_perlengkapan_edit').val();
					var nm_perlengkapan = $('#nm_perlengkapan_edit').val();
					var satuan = $('#satuan_edit').val();
					var harga = $('#harga_edit').val();
					$.ajax({
						type : 'POST',
						url : '<?php echo base_url()."admin/perlengkapan/update_perlengkapan" ?>',
						dataType : 'JSON',
						data : {id_perlengkapan:id_perlengkapan, nm_perlengkapan:nm_perlengkapan, satuan:satuan, harga:harga },
						success:function(data){
							$('[name="nm_perlengkapan_edit"]').val("");
							$('[name="satuan_edit"]').val("");
							$('[name="harga_edit"]').val("");
							$('#modal-edit-perlengkapan').modal('hide');
							// $('#pesan-sukses').html(data.message);
							tampil_perlengkapan();
						}
					});
					return false;
				});
				//END UPDATE FAKULTAS

				//FUNCTION FORMAT ANGKA RUPIAH
				function rupiah(angka){
				   var reverse = angka.toString().split('').reverse().join(''),
				   ribuan = reverse.match(/\d{1,3}/g);
				   ribuan = ribuan.join('.').split('').reverse().join('');
				   return ribuan;
				}
          </script>


