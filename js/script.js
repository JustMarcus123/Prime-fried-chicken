document.addEventListener("DOMContentLoaded", function () {
  var elms = document.getElementsByClassName("splide");

  for (var i = 0; i < elms.length; i++) {
    new Splide(elms[i], {
      type: "loop",
      pagination: false,
      pauseOnHover: (boolean = false),
      pauseOnFocus: (boolean = false),
    }).mount();
  }
});
