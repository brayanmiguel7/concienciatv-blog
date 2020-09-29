$(window).ready(() => {

    console.log('JQuery Functions ready\'s.');

    var url = window.location;

    $('ul.navbar-nav a[href="'+ url +'"]').parent().addClass('active');

    if($('ul.navbar-nav a[href="'+ url +'"]').parent().addClass('active')){

        console.log('Funcionando.');

    }

});
