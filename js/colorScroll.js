$(window).scroll(function() {
  if ($("#btnAgregarGrupo").offset().top > 56) {
      $("#btnAgregarGrupo").addClass("bg-inverse");
  } else {
      $("#btnAgregarGrupo").removeClass("bg-inverse");
  }
});
