$(function () {
  $('.tampilModalTambah').on('click', function () {
    $('#judulModal').html('Tambah Data');
    $('.modal-footer button[type=submit]').html('Tambah');
    $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/tambah');

    $('#nama').val('');
    $('#nim').val('');
    $('#email').val('');
    $('#prodi').val('');
    $('#id').val('');
  });

  $('.tampilModalUbah').on('click', function () {
    $('#judulModal').html('Ubah Data');
    $('.modal-footer button[type=submit]').html('Ubah');
    $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/ubah');

    const id = $(this).data('id');

    $.ajax({
      url: 'http://localhost/phpmvc/public/mahasiswa/getUbah',
      data: { id: id }, //id yang pertama akan dikirimkan dan berisi nilai dari const id
      method: 'post', //id dikirimkan melalui method post
      dataType: 'json', //mengembalikan data berupa json
      success: function (data) {
        $('#nama').val(data.nama);
        $('#nim').val(data.nim);
        $('#email').val(data.email);
        $('#prodi').val(data.prodi);
        $('#id').val(data.id);
      }
    });
  });
});