const flashData = $('.flash-data').data('flashdata');
const flashDataPetugas = $('.flash-datap').data('flashdata');

if (flashData) {
  Swal.fire({
    icon: 'success',
    title: 'Congratulation',
    text: flashData
  });
}

// tombol berhasil khusus petugas
if (flashDataPetugas) {
  Swal.fire({
    icon: 'success',
    title: 'Congratulation',
    text:  flashDataPetugas,
    footer : '<b>Note : </b> Harap Approve Data terlebih dahulu...'
  });
}

// tombol-hapus
$('.tombol-hapus').on('click', function (e) {

e.preventDefault();
const href = $(this).attr('href');

Swal.fire({
    title: 'Apakah anda yakin',
    text: "Data akan dihapus",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#fa5838',
    cancelButtonColor: '#808080',
    confirmButtonText: 'Hapus Data!'
  }).then((result) => {
    if (result.isConfirmed) {
      document.location.href = href;
    
    }
  })
});


// tombol-edit
$('.tombol-edit').on('click', function (e) {

  e.preventDefault();
  const href = $(this).attr('href');
  
  Swal.fire({
      title: 'Apakah anda yakin',
      text: "Data akan diedit",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#5ac146',
      cancelButtonColor: '#808080',
      confirmButtonText: 'Edit Data!'
    }).then((result) => {
      if (result.isConfirmed) {
        document.location.href = href;
      
      }
    })
  });

  // tombol-approve
$('.tombol-approve').on('click', function (e) {

  e.preventDefault();
  const href = $(this).attr('href');
  
  Swal.fire({
      title: 'Apakah anda yakin',
      text: "Data akan diapprove",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#808080',
      confirmButtonText: 'Approve Data!'
    }).then((result) => {
      if (result.isConfirmed) {
        document.location.href = href;
      
      }
    })
  });