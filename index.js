$(document).ready(function() {

    var lastBreadcrumbItem = $(".breadcrumb-item:first-child");


    var newElement = $("<li class='breadcrumb-item'> </li>");


    lastBreadcrumbItem.before(newElement);
    
    $('#item').carousel();
    

    $('.span-carousel').removeClass('d-none');

});

