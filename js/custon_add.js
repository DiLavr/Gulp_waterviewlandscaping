// initialize scrollspy
$('body').scrollspy({

    target: '.dotted-scrollspy'
});

// initialize lightbox
$(function ()
{

    $("#mdb-lightbox-ui").load("../mdb-addons/mdb-lightbox-ui.html");
});

// $('.navbar-collapse a').click(function ()
// {

//     $(".navbar-collapse").collapse('hide');
// });

/* WOW.js init */
new WOW().init();