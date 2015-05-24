->
  $('ul.menu li').click ->
    alert('123')

  $('ul.menu li').hover ->
    $( this ).addClass('hover')
    $( this ).removeClass('hover')