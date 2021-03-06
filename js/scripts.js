jQuery(function($){

    $("#typed").typed({
        strings: ["Responsive Web Design", "HTML5, CSS3 y JavaScript", "Twitter Bootstrap", "ZURB Foundation", "Wordpress"],
        typeSpeed: 40,
        backDelay: 1000,
        loop: true,
        contentType: 'html', // or text
        // defaults to false for infinite loop
        loopCount: false,
    });

    $("#typedEng").typed({
        strings: ["Responsive Web Design", "HTML5, CSS3 and JavaScript", "Twitter Bootstrap", "ZURB Foundation", "WordPress"],
        typeSpeed: 40,
        backDelay: 1000,
        loop: true,
        contentType: 'html', // or text
        // defaults to false for infinite loop
        loopCount: false,
    });

     $("#video-promo").fitVids();

     $(".entry-content").fitVids();


      $('div#course-features ul li').matchHeight({
          byRow: true,
          property: 'height',
          remove: false
      });

    $('div#course-features ul li').matchHeight({
        byRow: true,
        property: 'height',
        remove: false
    });

});
