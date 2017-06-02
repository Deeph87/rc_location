$(document).ready(function () {
   $('.image_select').on('click', function () {
       image = $('.image_select option:selected').text();
       $('.image_view').attr('src', '/rc_location/img/upload/'+image);
   });



});