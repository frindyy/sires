		
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
							   <form id="form-jurusan" method="post" action="<?php echo base_url()."admin/jurusan/tambah_proses" ?>">
								  <div class="form-row">
								    <div class="form-group col-5">
						                <select class="form-control nm_fakultas" name="nm_fakultas" id="nm_fakultas">
						                	<option value="">--Pilih Fakultas--</option>
						                	<?php 
						                		$fakultas = $this->db->get('tb_fakultas');
						                		foreach ($fakultas->result() as $row) { ?>
						                			<option value="<?php echo $row->id_fakultas;?>"><?php echo $row->nm_fakultas; ?></option>
						                	<?php		
						                		}
						                	 ?>
						                </select>
								    </div>
								     <div class="form-group col-5">
								      <input type="text" class="form-control" name="nm_jurusan" id="nm_jurusan" placeholder="Masukan Nama Jurusan">
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
								<th>Nama Fakultas</th>
								<th>Jurusan</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody id="show-jurusan">
							
						</tbody>
					</table>
				</div>

            </div>
          </div>

          <!-- Modal Edit -->
				<div class="modal fade" id="modal-edit-jurusan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-dialog-scrollable" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Edit Jurusan</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
						
					<form>
					   <input type="hidden" name="id_jurusan_edit" id="id_jurusan_edit" class="id_jurusan_edit">
			           <div class="form-group">
			           	<label for="nm_fakultas_edit">Nama Fakultas</label>
			                <select class="form-control nm_fakultas_edit" name="nm_fakultas_edit" id="nm_fakultas_edit">
			                	<option value="">--Pilih Fakultas--</option>
			                	<?php 
			                		$fakultas = $this->db->get('tb_fakultas');
			                		foreach ($fakultas->result() as $row) { ?>
			                			<option value="<?php echo $row->id_fakultas;?>"><?php echo $row->nm_fakultas; ?></option>
			                	<?php		
			                		}
			                	 ?>
			                </select>
					    </div>
			            <div class="form-group">
			                <label for="nm_jurusan_edit">Nama Jurusan</label>
			                <input type="text" name="nm_jurusan_edit" class="form-control nm_jurusan_edit" id="nm_jurusan_edit">
			            </div>

				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="submit" class="btn btn-primary" id="btn-edit-jurusan">Edit</button>
				      </div>
				    </form>

				    </div>
				  </div>
				</div>

				<!-- Modal Delete JURUSAN -->
				    <div class="modal fade" id="ModalDeleteJurusan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				    <div class="modal-dialog" role="document">
				        <div class="modal-content">
				        <div class="modal-header">
				            <h5 class="modal-title" id="exampleModalLabel">Delete Jurusan</h5>
				            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				            <span aria-hidden="true">&times;</span>
				            </button>
				        </div>
				        <div class="modal-body">
				            <div class="alert alert-info">
				                Anda yakin mau menghapus data ini?
				            </div>
				        </div>
				        <div class="modal-footer">
				            <input type="hidden" name="id_jurusan_delete" class="id_jurusan_delete">
				            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
				            <button type="button" class="btn btn-primary btn-delete-jurusan">Yes</button>
				        </div>
				        </div>
				    </div>
				    </div>

          <script type="text/javascript">

          		tampil_jurusan();

          		

				function tampil_jurusan(){
					$.ajax({
						type : 'get',
						url : '<?php echo base_url()."admin/jurusan/tampil_jurusan" ?>',
						async : true,
						dataType : 'JSON',
						success:function(data){
							var baris = "";
             				for (var i=0; i<data.length; i++) {
             					baris += '<tr>'+
             							 '<td>'+ (i+1) +'</td>'+
             							 '<td>'+ data[i].nm_fakultas +'</td>'+
             							 '<td>'+ data[i].nm_jurusan +'</td>'+
                                         '<td class="text-center">'+
                                            '<a href=""javascript:;"" data-toggle="modal" class="btn btn-info btn-sm item-edit" title="Edit data Jurusan" data="'+data[i].id_jurusan+'"><i class="fa fa-edit"></i></a>'+' '+
                                            '<a href="" data-toggle="modal" class="btn btn-danger btn-sm item-hapus" title="Hapus data Jurusan" data-id="'+data[i].id_jurusan+'"><i class="fa fa-trash"></i></a>'+
                                         '</td>'+
             							 '</tr>';
             				}
             				$('#show-jurusan').html(baris);
						}
					});
				}

				$('#form-jurusan').submit(function(e){
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
		                        tampil_jurusan();
		                        

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

				//UPDATE JURUSAN
				$('#show-jurusan').on('click','.item-edit',function(){
					var id_jurusan = $(this).attr('data');
					$.ajax({
						type : "GET",
		                url  : '<?php echo base_url()."admin/jurusan/ambil_data_id" ?>',
		                dataType : "JSON",
		                data : {id_jurusan:id_jurusan},
		                success:function(data){
		                	$('#modal-edit-jurusan').modal('show');
		                	$('.id_jurusan_edit').val(data.id_jurusan);
		                	$('.nm_fakultas_edit').val(data.id_fakultas);
		                	$('.nm_jurusan_edit').val(data.nm_jurusan);
		                }
					});
					return false;
				});

				$('#btn-edit-jurusan').on('click',function(){
					var id_jurusan = $('#id_jurusan_edit').val();
					var nm_fakultas = $('#nm_fakultas_edit').val();
					var nm_jurusan = $('#nm_jurusan_edit').val();
					$.ajax({
						type : 'POST',
						url : '<?php echo base_url()."admin/jurusan/update_jurusan" ?>',
						dataType : 'JSON',
						data : {id_jurusan:id_jurusan, nm_fakultas:nm_fakultas, nm_jurusan:nm_jurusan},
						success:function(data){
							$('[name="nm_fakultas_edit"]').val("");
							$('[name="nm_jurusan_edit"]').val("");
							$('#modal-edit-jurusan').modal('hide');
							tampil_jurusan();
						}
					});
					return false;
				});
				//END UPDATE JURUSAN

				//DELETE JURUSAN
			 $('#show-jurusan').on('click','.item-hapus',function(){
                var id_jurusan = $(this).data('id');
                $('#ModalDeleteJurusan').modal('show');
                $('.id_jurusan_delete').val(id_jurusan);
            });

			 $('.btn-delete-jurusan').on('click',function(){
			 	var id_jurusan = $('.id_jurusan_delete').val();
			 	$.ajax({
			 		url : '<?php echo base_url()."admin/jurusan/hapus_jurusan" ?>',
			 		method : 'POST',
			 		data : {id_jurusan:id_jurusan},
			 		success:function(data){
			 			$('#ModalDeleteJurusan').modal('hide');
                        $('.id_jurusan_delete').val("");
                        // $('#pesan-sukses').html(data.message);
                        tampil_jurusan();
			 		}
			 	});
			 });
			 //END DELETE JURUSAN
          </script>


