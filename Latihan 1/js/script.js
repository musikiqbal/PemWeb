const tombolCari = document.querySelector('.tombol-cari');
const keyword = document.querySelector('.keyword');
const container = document.querySelector('.container');

//menghilangkan tombol cari
tombolCari.style.display = 'none';

//Event ketika menuliskan keyword
keyword.addEventListener('keyup', function () {


  //Ajax Pake cara lama
  //XmlHttpRequest
  //const xhr = new XMLHttpRequest();

  //xhr.onreadystatechange = function () {
  // if (xhr.readyState == 4 && xhr.status == 200) {
  //  container.innerHTML = xhr.responseText;
  // }
  // };
  //xhr.open('get', 'ajax/ajax_cari.php?keyword=' + keyword.value);
  //xhr.send();

  //Ajax pake cara baru
  fetch('ajax/ajax_cari.php?keyword=' + keyword.value)
    .then((Response) => Response.text())
    .then((Response) => (container.innerHTML = Response));
});

//Preview Gambar
function previewImage() {
  const Gambar = document.querySelector('.Gambar');
  const ImagePreview = document.querySelector('.Image-Preview');

  const oFReader = new FileReader();
  oFReader.readAsDataURL(Gambar.files[0]);

  oFReader.onload = function (oFREvent) {
    ImagePreview.src = oFREvent.target.result;
  };
}
