// ambil elemen2 yang dibutuhkan
let keyword = document.getElementById("keyword");
let searchButton = document.getElementById("searchButton");
let container = document.getElementById("container");

// ajax action / event
// tambahkan event ketika keyword ditulis
keyword.addEventListener("keyup", function () {
  // buat object ajax
  let xhr = new XMLHttpRequest();

  // cek kesiapan ajax
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      //   console.log(xhr.responseText); //reponseText = ambil dari file ajax
      container.innerHTML = xhr.responseText;
    }
  };

  //   eksekusi ajax
  xhr.open("GET", "ajax/mahasiswa.php?keyword=" + keyword.value, true);
  //   jalankan ajax
  xhr.send();
}); //keypress saat diketik || keyup saat dilepas keyboardnya
