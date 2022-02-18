$(document).ready(function () {
  // hilangkan tombol search
  $("#searchButton").hide();
  // event ketika keyword ditulis
  $("#keyword").on("keyup", function () {
    // munculkan loading
    $("#loader").show();
    // cara cepat
    // $("#container").load("ajax/mahasiswa.php?keyword=" + $("#keyword").val());

    // cara fleksibel
    $.get("ajax/mahasiswa.php?keyword=" + $("#keyword").val(), function (data) {
      $("#container").html(data);
      $("#loader").hide();
    });
  });
});

/* artinya 
$: jquery
$(document).ready(function):
jquery tolong ambilkan document ketika document siap silahkan jalankan function berikut



*/
