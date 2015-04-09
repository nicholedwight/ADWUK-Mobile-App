var highlight = false;
$(document).ready(function () {
  var onClass = "on";
  var showClass = "show";

  $("input").bind("checkval",function(){
    var label = $(this).prev("label");
    if(this.value !== ""){
      label.addClass(showClass);
    } else {
      label.removeClass(showClass);
    }
  }).on("keyup",function(){
    $(this).trigger("checkval");
  }).on("focus",function(){
    $(this).prev("label").addClass(onClass);
  }).on("blur",function(){
      $(this).prev("label").removeClass(onClass);
  }).trigger("checkval");

  $('.register').click(function() {
    $('.email-confirmation').css({
        'display': 'block'
    });
  });

  $('.cancel').click(function() {
    $('.email-confirmation').css({
        'display': 'none'
    });
  });


});

function toggleHighlight() {
  if(highlight == false) {
    highlight = true;
    highlightOn();
    console.log(highlight);
  } else {
    highlight = false;
    console.log(highlight);
  }
}

function highlightOn() {
  if(highlight == true) {
    $('p, a, h1, h2, h3, h4').each(function() {
      var $this = $(this);
      $this.html($this.text().replace(/\b(\w+)\b/g, "<span>$1</span>"));
    });

    $('div span').hover(
        function() {
            $(this).css('background-color','#ffff66');
        },
        function() {
            $(this).css('background-color','');
        }
    )
  }
}
