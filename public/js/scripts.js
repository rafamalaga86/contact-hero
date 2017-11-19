$(document).ready(function(){

  // Initialise the Mansonry Grid
  // =======================================================
  var $grid = $('.grid').masonry({
    itemSelector: '.card',
    fitWidth: true,
    gutter: 20
    // columnWidth: 50
  });

  // AJAX
  // =======================================================

  //-- Delete a contact
  $('.card').on('click', '.btn-delete', function(){
    var btn = $(this);
    var id = btn.parents('.card').attr('data-contact-id');
    jQuery.ajax({
      method: 'DELETE',
      url: '/contacts/' + id
    })
    .done(function(){
      $grid.masonry('remove', $('.card-' + id)).masonry('layout');
    })
    .fail(function(){
      btn.parent().parent().append('<div style="display: none;" class="delete-error alert alert-danger"><p>There was a problem!</p></div>');
      btn.slideUp('fast', function(){
        btn.parent().parent().find('.delete-error').slideDown('fast');
      });
      
    });
  });




  // Let's write something in the footer at random
  // =======================================================
  var jokes = [
    "<p>- What is a programmer's favourite hangout place?</p><p> - Foo Bar</p>",
    "<p>- Why do PHP programmers have to wear glasses?</p><p> - Because they don't C# (see sharp)</p>",
    "<p>Unix is user friendly. It's just very particular about who its friends are.</p>",
    "<p>How did the programmer die in the shower? He read the shampoo bottle instructions: Lather. Rinse. Repeat.</p>"
  ];

  var randJoke = jokes[Math.floor(Math.random() * jokes.length)];

  $('.footer-joke').html(randJoke);

});