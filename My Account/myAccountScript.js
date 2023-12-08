
$(document).ready(function()
{
  $(".modalTopup").click(function(){
  $('#modalMaker').dialog(
  {
    title:"Auto close Window",
    height:100,
    width:20,
    // align:'center',

    open:function()
    {
      setTimeout(function()
      {
        $("#modalMaker").dialog("close");
  },50000);
}
  }); });
});

  $(window).on('load',function(){
        $('modalTopup').modal('show');
    });



$(document).ready(function(){
  $(".addNew0").click(function(){
    $("#clickableForm0").slideToggle("slow");
  });
});
$(document).ready(function(){
  $(".addNew1").click(function(){
    $("#clickableForm1").slideToggle("slow");
  });
});
$(document).ready(function(){
  $(".addNew2").click(function(){
    $("#clickableForm2").slideToggle("slow");
  });
});
$(document).ready(function(){
  $(".addNew3").click(function(){
    $("#clickableForm3").slideToggle("slow");
  });
});
$(document).ready(function(){
  $(".addNew4").click(function(){
    $("#clickableForm4").slideToggle("slow");
  });
});
$(document).ready(function(){
  $(".addNew5").click(function(){
    $("#clickableForm5").slideToggle("slow");
  });
});
$(document).ready(function(){
  $(".addNew6").click(function(){
    $("#clickableForm6").slideToggle("slow");
  });
});

// for profile picture

function mouseOver() {
    document.querySelector('.in').style.display = "block";
    document.querySelector('.up').style.display = "block";
  }
  function mouseOut() {
    document.querySelector('.in').style.display = "none";
    document.querySelector('.up').style.display = "none";
  }

// end of profile picture