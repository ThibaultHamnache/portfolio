jQuery(document).ready(function(){
	jQuery('.skillbar').each(function(){
		jQuery(this).find('.skillbar-bar').animate({
			width:jQuery(this).attr('data-percent')
		},5000); // vitesse du defilement
	});
});

$(document).ready(function() {
		$('.scroll').on('click', function() { // Au clic sur un élément
			var page = $(this).attr('href'); // Page cible
			var speed = 750; // Durée de l'animation (en ms)
			$('html, body').animate( { scrollTop: $(page).offset().top }, speed );
			return false;
		});
	});


	$(window).load(function(){
	  // Cache selectors
	  var lastId,
	  topMenu = $("#top-menu"),
	  topMenuHeight = topMenu.outerHeight()+1,
	  // All list items
	  menuItems = topMenu.find("a"),
	  // Anchors corresponding to menu items
	  scrollItems = menuItems.map(function(){
	  var item = $($(this).attr("href"));
	  if (item.length) { return item; }
	});

	// Bind click handler to menu items
	// so we can get a fancy scroll animation
	  menuItems.click(function(e){
	    var href = $(this).attr("href"),
	    offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
	    offsetTop = offsetTop + $('header ul').height();
	    $('html, body').stop().animate({
	    scrollTop: offsetTop
	    }, 300);
	    e.preventDefault();
	  });

	// Bind to scroll
	  $(window).scroll(function(){
	// Get container scroll position
	  var fromTop = $(this).scrollTop()+topMenuHeight;

	// Get id of current scroll item
	  var cur = scrollItems.map(function(){
	  if ($(this).offset().top < fromTop)
	  return this;
	});
	// Get the id of the current element
	  cur = cur[cur.length-1];
	  var id = cur && cur.length ? cur[0].id : "";

	  if (lastId !== id) {
	  lastId = id;
	// Set/remove active class
	    menuItems
	    .parent().removeClass("active")
	    .end().filter("[href=#"+id+"]").parent().addClass("active");
	  }
	    });
	    });

$(document).ready(function(){
  $("h1").delay("1000").fadeIn();
  // hide #back-top first
  $("#back-top").hide();
  // fade in #back-top
  $(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 500) {
        $('#back-top').fadeIn();
      } else {
        $('#back-top').fadeOut();
      }
    });
		// scroll body to 0px on click
    $('a#back-top').click(function () {
      $('body,html').animate({
      	scrollTop: 0
      }, 800);
      return false;
    });
  });
});

function switch_text(el,txt,delay,callback){
  setTimeout(function(){
    TweenLite.to(el,1,{text: {value:txt},onComplete:function(){
     if(callback && typeof(callback) === 'function' ){
       callback();
     }
    }});
  },delay);
}
function init(){
  switch_text('#title span','HTML',0);
  switch_text('#title span','CSS',2000);
  switch_text('#title span','PHP',4000);
  switch_text('#title span','JAVASCRIPT',6000);
  switch_text('#title span','SQL',8000);
  switch_text('#title span','IDE',10000,function(){
    // run again after 6s
    setTimeout(init,2000);
  });
}
function blink(){
 	$('#cursor').toggleClass('blink');
}
setInterval(blink,800);
init();
