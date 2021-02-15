 <div class="container mt-3">

  <div class="row">
   <div class="col-lg-6">
    <?php Flasher::flash(); ?>
   </div>
  </div>
  <div class="row">
   <div class="col-lg-6">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
      Tambah Data Mahasiswa
    </button>
    <br><br>
    <h3>Daftar Mahasiswa</h3>
    
    <ul class="list-group">
     <?php foreach ($data['mhs'] as $mhs) : ?>
     <li class="list-group-item ">
     <?= $mhs['nama'] ?>
     <a class="badge badge-danger float-right ml-1" href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id'] ?>" onclick="return confirm('Yakin?')">delete</a>
     <a class="badge badge-success float-right ml-1 tampilModalUbah" href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id'] ?>" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>">edit</a>
     <a class="badge badge-primary float-right ml-1" href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'] ?>">detail</a>
     </li>
     <?php endforeach; ?>
    </ul>
   </div>
  </div>
 </div>

 <!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="POST">
         <input type="hidden" name="id" id="id">
          <div class="form-group">
           <label for="nama">Nama : </label>
           <input type="text" class="form-control" maxlength="50" name="nama" id="nama">
          </div>
          <div class="form-group">
           <label for="nim">NIM : </label>
           <input type="number" class="form-control" maxlength="13" name="nim" id="nim">
          </div>
          <div class="form-group">
           <label for="email">Email : </label>
           <input type="email" class="form-control" maxlength="50" name="email" id="email">
          </div>
          <div class="form-group">
           <label for="jurusan">Jurusan</label>
           <select class="form-control" id="jurusan" name="jurusan">
             <option value="Teknik Informatika">Teknik Infomatika</option>
             <option value="Teknik Mesin">Teknik Mesin</option>
             <option value="Teknik Alat Berat">Teknik Alat Berat</option>
             <option value="Management">Management</option>
             <option value="Keperawatan">Keperawatan</option>
             <option value="Farmasi">Farmasi</option>
           </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
         </form>
      </div>
    </div>
  </div>
</div>