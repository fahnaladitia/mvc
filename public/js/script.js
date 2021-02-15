$(function () {


 $('.tombolTambahData').on('click', function () {


  $('#formModalLabel').html('Tambah Data Mahasiswa');
  $('.modal-footer button[type=submit]').html('Tambah Data');
  $('#nama').val('');
  $('#nim').val('');
  $('#email').val('');
  $('#jurusan').val('');
  $('#id').val('');
 });

 $('.tampilModalUbah').on('click', function () {


  $('#formModalLabel').html('Edit Data Mahasiswa');
  $('.modal-footer button[type=submit]').html('Edit Data');
  $('.modal-body form').attr('action', 'http://localhost/mvc/public/mahasiswa/ubah')

  const id = $(this).data('id');

  $.ajax({

   url: 'http://localhost/mvc/public/mahasiswa/getubah',
   data: {id : id},
   method: 'POST',
   dataType: 'json',
   success: function(data) {
    $('#nama').val(data.nama);
    $('#nim').val(data.nim);
    $('#email').val(data.email);
    $('#jurusan').val(data.jurusan);
    $('#id').val(data.id);
   }
  });
 
 });


});