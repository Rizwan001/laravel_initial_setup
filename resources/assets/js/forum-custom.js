$(document).ready(function(){
    $('#search').on("click",(function(e){
    $(".form-group").addClass("sb-search-open");
      e.stopPropagation()
    }));
     $(document).on("click", function(e) {
      if ($(e.target).is("#search") === false && $(".form-control").val().length == 0) {
        $(".form-group").removeClass("sb-search-open");
      }
    });
      $(".form-control-submit").click(function(e){
        $(".form-control").each(function(){
          if($(".form-control").val().length == 0){
            e.preventDefault();
            $(this).css('border', '2px solid red');
          }
      })
    })
  })




  window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

