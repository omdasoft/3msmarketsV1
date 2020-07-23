$(function() {
    //var model = $("#model");
    var y = new Date().getFullYear();

    for (var i = y; i > 1969; i--) {
    $('#manufacture_date').append('<option value="' + i + '">' + i + '</option>');
  }

});


$("#example-basic").steps({
  headerTag: "h3",
  bodyTag: "section",
  transitionEffect: "slideLeft",
  autoFocus: true
});






