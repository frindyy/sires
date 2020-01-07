		
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
							   <form id="form-fakultas" method="post" action="<?php echo base_url()."admin/fakultas/tambah_proses" ?>">
								  <div class="form-row">
								    <div class="form-group col-7">
								      <input type="text" class="form-control" name="nm_fakultas" id="nm_fakultas" placeholder="Masukan Nama Fakultas">
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
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody id="show-fakultas">
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
          </div>

          <!-- Modal Edit -->
				<div class="modal fade" id="modal-edit-fakultas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-dialog-scrollable" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Edit Fakultas</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
						
					<form>
						<input type="hidden" name="id_fakultas_edit" id="id_fakultas_edit" class="id_fakultas_edit">
				        <div class="form-group">
			                <label for="nm_fakultas_edit">Nama Fakultas</label>
			                <input type="text" name="id_user_edit" class="form-control nm_fakultas_edit" id="nm_fakultas_edit" name="nm_fakultas_edit">
			            </div>

				      	</div>
				      	<div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					        <button type="submit" class="btn btn-primary" id="btn-edit-fakultas">Edit</button>
				      	</div>
				    </form>

				    </div>
				  </div>
				</div>

          <script type="text/javascript">

          		tampil_fakultas();

				function tampil_fakultas(){
					$.ajax({
						type : 'get',
						url : '<?php echo base_url()."admin/fakultas/tampil_fakultas" ?>',
						async : true,
						dataType : 'JSON',
						success:function(data){
							var baris = "";
             				for (var i=0; i<data.length; i++) {
             					baris += '<tr>'+
             							 '<td>'+ (i+1) +'</td>'+
             							 '<td>'+ data[i].nm_fakultas +'</td>'+
                                         '<td class="text-center">'+
                                            '<a href=""javascript:;"" data-toggle="modal" class="btn btn-info btn-sm item-edit" title="Edit data fakultas" data="'+data[i].id_fakultas+'"><i class="fa fa-edit"></i></a>'+' '+
                                            '<a href="" data-toggle="modal" class="btn btn-danger btn-sm item-hapus" title="Hapus data fakultas" data-id="'+data[i].id_fakultas+'"><i class="fa fa-trash"></i></a>'+
                                         '</td>'+
             							 '</tr>';
             				}
             				$('#show-fakultas').html(baris);
						}
					});
				}

				$('#form-fakultas').submit(function(e){
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
		                        tampil_fakultas();
		                        

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

				//UPDATE FAKULTAS
				$('#show-fakultas').on('click','.item-edit',function(){
					var id_fakultas = $(this).attr('data');
					$.ajax({
						type : "GET",
		                url  : '<?php echo base_url()."admin/fakultas/ambil_data_id" ?>',
		                dataType : "JSON",
		                data : {id_fakultas:id_fakultas},
		                success:function(data){
		                	$('#modal-edit-fakultas').modal('show');
		                	$('.id_fakultas_edit').val(data.id_fakultas);
		                	$('.nm_fakultas_edit').val(data.nm_fakultas);
		                }
					});
					return false;
				});

				$('#btn-edit-fakultas').on('click',function(){
					var id_fakultas = $('#id_fakultas_edit').val();
					var nm_fakultas = $('#nm_fakultas_edit').val();
					$.ajax({
						type : 'POST',
						url : '<?php echo base_url()."admin/fakultas/update_fakultas" ?>',
						dataType : 'JSON',
						data : {id_fakultas:id_fakultas, nm_fakultas:nm_fakultas},
						success:function(data){
							$('[name="nm_fakultas_edit"]').val("");
							$('#modal-edit-fakultas').modal('hide');
							tampil_fakultas();
						}
					});
					return false;
				});
				//END UPDATE FAKULTAS
          </script>


