import $ from "jquery";
import "popper.js";
import "bootstrap";
// Can import modules as needed
// ex. import 'bootstrap/js/dist/dropdown';
import "./sass/style.scss";

("use strict");

(function ($) {
  $(function () {
    console.log("Document Ready");

    var top = $("#navbar").offset().top;
    $(window).on("scroll", function (event) {
      var y = $(window).scrollTop();
      console.log(y,top + 50, y >= top);
      if (y >= top + 50) {
        $("#navbar").addClass("fixed-top");
      } else {
        $("#navbar").removeClass("fixed-top");
      }
    });
  });
})(jQuery);
