<div class="container mt-3">	

 	<div class="row">
 		<div class="col-lg-6">
 			<?php Flasher::flash(); ?>
 		</div>
 	</div>

  <div class="row">
    <div class="col-lg-6">
      <button type="button" class="btn btn-primary mb-3 tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">Tambah Data Mahasiswa
    </button>  

    </div>
  </div>
   
	<div class="row mb-3">
      <div class="col-lg-6">
        <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="cari mahasiswa.." name="keyword" id="keyword" autocomplete="off">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
            </div>
          </div>
        </form>
      </div>
    </div>


  <div class="row">
		<div class="col-lg-6 ">
		  	<h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
            <?php foreach( $data['mhs'] as $mhs  ): ?>
              <li class="list-group-item"><?= $mhs['nama']; ?>
                <a style="text-decoration:none" href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge bg-danger float-end me-1" onclick="return confirm('Yakin Ingin Menghapus Data Mahasiswa Ini?');">Hapus</a>

                <a  style="text-decoration:none" href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id'] ?>" class="badge bg-success float-end tampilModalUbah me-1" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= 	$mhs['id']; ?>">Ubah</a>

                <a style="text-decoration:none" href="<?= BASEURL; ?>/mahasiswa/detail/<?= 	$mhs['id']; ?>" class="badge bg-primary float-end me-1">Detail</a>
              </li>
            <?php 	endforeach; ?>			   
		      	</ul>
	    	</div>
	  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambahkan Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
        <input type="hidden" name="id" id="id">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" >
            </div>

            <div class="form-group">
                <label for="NIM" class="form-label">NIM</label>
                <input type="number" class="form-control" id="NIM" name="NIM" >
            </div>

             <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com">
            </div>
            <div class="form-group">
              <label for="jurusan">Jurusan</label>
              <select class="form-control" id="jurusan" name="jurusan">
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Informatika">Informatika</option>
                <option value="Informatika">Sistem Komputer</option>
						</select>
        </div>
           
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>

