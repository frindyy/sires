		
		<!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800"><?php echo $title; ?></h1>

          <div class="card shadow mb-4">
            <div class="card-body">
				<div id="pesan-sukses"></div>

        	 <a href="" class="btn btn-success btn-sm" title="tambah data Pengguna" style="margin: 15px;" data-toggle="modal" data-target="#modal-tambah">Tambah Data</a>

            	<div class="table-responsive">
					<table class="table table-striped table-bordered" id="datatable" style="width: 100%">
						<thead>
							<tr>
								<th>No</th>
								<th>Kode User</th>
								<th>Nama</th>
								<th>level</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody id="tampil-pengguna">

						</tbody>
					</table>
				</div>

            </div>
          </div>

          <!-- Modal ADD -->
				<div class="modal fade" id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-dialog-scrollable" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Tambah Pengguna</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
						
					<form action="<?php echo base_url().'admin/data_pengguna/proses_tambah_pengguna' ?>" method="post" id="form-pengguna">
				        <div class="form-group">
			                <label for="id_user">Kode User</label>
			                <input type="text" name="id_user" class="form-control id_user" id="id_user" value="<?= $kode_user; ?>" readonly>
			            </div>
			            <div class="form-group">
			                <label for="nama_user">Nama Lengkap</label>
			                <input type="text" name="nama_user" class="form-control nama_user" id="nama_user" placeholder="Masukan Nama">
			            </div>
			             <div class="form-group">
			                <label for="tgl_lahir">Tanggal Lahir</label>
			                <input type="text" name="tgl_lahir" class="form-control tgl_lahir" id="tgl_lahir" placeholder="Masukan Tanggal Lahir">
			            </div>
			            <div class="form-group">
			                <label for="nm_role">Level</label>
			                <select class="form-control nm_role" name="nm_role" id="nm_role">
			                	<option value="">--Pilih Level--</option>
			                	<?php 
			                		$role = $this->db->get('tb_role');
			                		foreach ($role->result() as $row) { ?>
			                			<option value="<?php echo $row->id_role;?>"><?php echo $row->nm_role; ?></option>
			                	<?php		
			                		}
			                	 ?>
			                </select>
			            </div>
			            <div class="form-group">
			                <label for="jenis_kelamin">Jenis Kelamin</label>
			                <select class="form-control jenis_kelamin" name="jenis_kelamin" id="jenis_kelamin">
			                	<option value="">--Jenis Kelamin--</option>
			                	<option value="laki-laki">Laki-Laki</option>
			                	<option value="perempuan">Perempuan</option>
			                </select>
			            </div>
			            <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control alamat" rows="3" id="alamat" name="alamat"></textarea>
                        </div>
                         <div class="form-group">
			                <label for="username">Username</label>
			                <input type="text" name="username" class="form-control username" id="username" placeholder="Masukan Username">
			            </div>
			             <div class="form-group">
			                <label for="password">Password</label>
			                <input type="text" name="password" class="form-control password" id="password" placeholder="Masukan Password">
			            </div>

				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="submit" class="btn btn-primary">Tambah</button>
				      </div>
				    </form>

				    </div>
				  </div>
				</div>

				<!-- Modal Edit -->
				<div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-dialog-scrollable" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Edit Pengguna</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
						
					<form>
				        <div class="form-group">
			                <label for="id_user2">Kode User</label>
			                <input type="text" name="id_user_edit" class="form-control id_user_edit" id="id_user2" readonly>
			            </div>
			            <div class="form-group">
			                <label for="nama_user2">Nama Lengkap</label>
			                <input type="text" name="nama_user_edit" class="form-control nama_user_edit" id="nama_user2" placeholder="Masukan Nama">
			            </div>
			             <div class="form-group">
			                <label for="tgl_lahir2">Tanggal Lahir</label>
			                <input type="text" name="tgl_lahir_edit" class="form-control tgl_lahir_edit" id="tgl_lahir2" placeholder="Masukan Tanggal Lahir">
			            </div>
			            <div class="form-group">
			                <label for="nm_role2">Level</label>
			                <select class="form-control nm_role_edit" name="nm_role_edit" id="nm_role2">
			                	<option value="">--Pilih Level--</option>
			                	<?php 
			                		$role = $this->db->get('tb_role');
			                		foreach ($role->result() as $row) { ?>
			                			<option value="<?php echo $row->id_role;?>"><?php echo $row->nm_role; ?></option>
			                	<?php		
			                		}
			                	 ?>
			                </select>
			            </div>
			            <div class="form-group">
			                <label for="jenis_kelamin2">Jenis Kelamin</label>
			                <select class="form-control jenis_kelamin_edit" name="jenis_kelamin_edit" id="jenis_kelamin2">
			                	<option value="">--Jenis Kelamin--</option>
			                	<option value="laki-laki">Laki-Laki</option>
			                	<option value="perempuan">Perempuan</option>
			                </select>
			            </div>
			            <div class="form-group">
                            <label for="alamat2">Alamat</label>
                            <textarea class="form-control alamat_edit" rows="3" id="alamat_edit" name="alamat2"></textarea>
                        </div>
                         <div class="form-group">
			                <label for="username2">Username</label>
			                <input type="text" name="username_edit" class="form-control username_edit" id="username2" placeholder="Masukan Username">
			            </div>
			             <div class="form-group">
			                <label for="password2">Password</label>
			                <input type="text" name="password_edit" class="form-control password_edit" id="password2" placeholder="Masukan Password">
			            </div>

				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="submit" class="btn btn-primary" id="btn-edit">Edit</button>
				      </div>
				    </form>

				    </div>
				  </div>
				</div>

				<!-- Modal Delete Pengguna -->
				    <div class="modal fade" id="ModalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				    <div class="modal-dialog" role="document">
				        <div class="modal-content">
				        <div class="modal-header">
				            <h5 class="modal-title" id="exampleModalLabel">Delete Pengguna</h5>
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
				            <input type="hidden" name="id_user_delete" class="id_user_delete">
				            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
				            <button type="button" class="btn btn-primary btn-delete">Yes</button>
				        </div>
				        </div>
				    </div>
				    </div>

          <script type="text/javascript">
		



			tampil_data_pengguna();
			
			//Tampil Data
			function tampil_data_pengguna(){
				$.ajax({
					type:'GET',
					url: '<?php echo base_url()."admin/data_pengguna/ambil_data_pengguna" ?>',
					async : true,
					dataType: 'json',
					success:function(data){
						var baris = "";
             				for (var i=0; i<data.length; i++) {
             					baris += '<tr>'+
             							 '<td>'+ (i+1) +'</td>'+
             							 '<td>'+ data[i].id_user +'</td>'+
             							 '<td>'+ data[i].nama_user +'</td>'+
             							 '<td>'+ data[i].nm_role +'</td>'+
                                         '<td>'+
                                            '<a href=""javascript:;"" data-toggle="modal" class="btn btn-info btn-sm item-edit" title="Edit data pengguna" data="'+data[i].id_user+'"><i class="fa fa-edit"></i></a>'+' '+
                                            '<a href="" data-toggle="modal" class="btn btn-danger btn-sm item-hapus" title="Hapus data pengguna" data-id="'+data[i].id_user+'"><i class="fa fa-trash"></i></a>'+
                                         '</td>'+
             							 '</tr>';
             				}
             				$('#tampil-pengguna').html(baris);
					}
				});
			} //End Function Tampil data Pengguna

			//InsertData
			$('#form-pengguna').submit(function(e){
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
		                        $('#modal-tambah').modal('hide');
		                        $('#pesan-sukses').html(data.message);
		                        tampil_data_pengguna();

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
         });

			//Get UPDATE
			$('#tampil-pengguna').on('click','.item-edit',function(){
				var id_user = $(this).attr('data');
				$.ajax({
					type : "GET",
	                url  : '<?php echo base_url()."admin/data_pengguna/ambil_data_id" ?>',
	                dataType : "JSON",
	                data : {id_user:id_user},
	                success:function(data){
	                	 $('#modal-edit').modal('show');
	                	 $('.id_user_edit').val(data.id_user);
	                	 $('.nama_user_edit').val(data.nama_user);
	                	 $('.tgl_lahir_edit').val(data.tgl_lahir);
	                	 $('.nm_role_edit').val(data.id_role);
	                	 $('.jenis_kelamin_edit').val(data.jenis_kelamin);
	                	 $('.alamat_edit').val(data.alamat);
	                	 $('.username_edit').val(data.username);
	                	 $('.password_edit').val(data.pass);
	                }
				});
				return false;
			});

			$('#btn-edit').on('click',function(){
				var id_user = $('#id_user2').val();
				var nama_user = $('#nama_user2').val();
				var tgl_lahir = $('#tgl_lahir2').val();
				var nm_role = $('#nm_role2').val();
				var jenis_kelamin = $('#jenis_kelamin2').val();
				var alamat = $('#alamat2').val();
				var username = $('#username2').val();
				var password = $('#password2').val();

				$.ajax({
					type:'POST',
					url: '<?php echo base_url()."admin/data_pengguna/update_pengguna" ?>',
					dataType: 'JSON',
					data: {id_user:id_user, nama_user:nama_user, tgl_lahir:tgl_lahir, nm_role:nm_role, jenis_kelamin:jenis_kelamin, alamat:alamat, username:username, password:password},
					success:function(data){
						 $('[name="nama_user_edit"]').val("");
						 $('[name="tgl_lahir_edit"]').val("");
						 $('[name="nm_role_edit"]').val("");
						 $('[name="jenis_kelamin_edit"]').val("");
						 $('[name="alamat_edit"]').val("");
						 $('[name="username_edit"]').val("");
						 $('[name="password_edit"]').val("");
						 $('#modal-edit').modal('hide');
						 tampil_data_pengguna();

					}
				});
				return false;
			});

			//DELETE PENGGUNA
			 $('#tampil-pengguna').on('click','.item-hapus',function(){
                var id_user = $(this).data('id');
                $('#ModalDelete').modal('show');
                $('.id_user_delete').val(id_user);
            });

			 $('.btn-delete').on('click',function(){
			 	var id_user = $('.id_user_delete').val();
			 	$.ajax({
			 		url : '<?php echo base_url()."admin/data_pengguna/hapus_pengguna" ?>',
			 		method : 'POST',
			 		data : {id_user:id_user},
			 		success:function(data){
			 			$('#ModalDelete').modal('hide');
                        $('.id_user_delete').val("");
                        tampil_data_pengguna();
			 		}
			 	});
			 });

			 //END DELETE PENGGUNA



			// function hapusdata(id){
			// 	var tanya = confirm('Apakah anda ingin menghapus data ini ?');
			// 	if (tanya) {
			// 		$.ajax({
			// 			type: 'POST',
			// 			url: '<?php echo base_url()."admin/data_pengguna/hapus_pengguna" ?>',
			// 			data: 'id_user='+id,
			// 			success:function(data){
			// 				console.log(data);
			// 			}
			// 		});
			// 	}
			// }

          </script>


