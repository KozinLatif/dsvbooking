$(document).ready(function() {
  
    $("#nav-button").click(function() {
        if ($("#nav").css("display") === "none") {
          $("#nav").css("display", "flex");
          document.getElementById("nav-button").innerHTML = "Göm menu";
        } else {
          $("#nav").css("display", "none");
          document.getElementById("nav-button").innerHTML = "Visa menu";
        }
      });
  
});