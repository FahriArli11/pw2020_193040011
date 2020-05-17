const tombolCari = ducument.querySelector('.tombol-cari');
const keyword = document.querySelector('.keyword');
const container = document.querySelector('.container');

// menghilangkan tombol cari
tombolCari.style.display = 'none';


// event ketika kita menuliskan keyword
keyword.addEventListener('keyup', function () {
  // ajax
  // xmlhttprequest
  // const xhr = new XMLHttpRequest();

  // xhr.onreadystatechange = function () {
  //   if (xhr.readyState == 4 && xhr.status == 200) {
  //     container.innerHTML = xhr.responseText;
  //   }
  // }

  // xhr.open('get', 'ajax/ajax_cari.php?keyword=' + keyword.value);
  // xhr.send();

  // fetch()
  fetch('ajax/ajax_cari.php?keyword=' + keyword.value)
    .then((Response) => Response.text())
    .then((Response) => (container.innerHTML = Response));
});

// Preview Image untuk Tambah dan Ubah
function previewImage() {
  const gambar = ducument.querySelector('.gambar');
  const imgPreview = document.querySelector('.img-preview');

  const oFReader = new FileReader();
  oFReader.readAsDataURL(gambar.files[0]);

  oFReader.onload = function (oFREvent) {
    imgPreview.src = oFREvent.target.result;
  };
}