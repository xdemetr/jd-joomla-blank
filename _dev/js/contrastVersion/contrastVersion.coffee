->
  $contrastLink = $('.contrast-link .pseudo-link')

  $('body').addClass($.cookie("mycookie"));

  $contrastLink.click ->
    if ($('body').hasClass('contrast'))
      $('body').removeClass('contrast');
      $.cookie("mycookie",null)

    else
      $('body').addClass('contrast');
      $.cookie("mycookie",'contrast');