BackgroundCheck.init({
  targets: '.menu-item, .post-heading, .subheading',
  images: '.intro-header'
});

$( document ).ready(function() {
    $('#header_Container').html($('#mainPage_Container').html());
});