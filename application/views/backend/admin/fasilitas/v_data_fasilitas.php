		
		<!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800"><?php echo $title; ?></h1>

          <div class="card shadow mb-4">
            <div class="card-body">
				<div id="pesan-sukses"></div>

				<a href="<?php echo base_url().'admin/fasilitas/tambah_fasilitas' ?>" class="btn btn-success btn-sm" title="tambah data Fasilitas" style="margin: 15px;">Tambah Data</a>

            	<div class="table-responsive my-5">
					<table class="table table-striped table-bordered" id="datatable" style="width: 100%">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Fasilitas</th>
								<th>Kapasitas</th>
								<th>Deskripsi</th>
								<th>harga</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody id="show-jurusan">
							
						</tbody>
					</table>
				</div>

            </div>
          </div>


          <script type="text/javascript">

          		
          </script>


