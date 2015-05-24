#require './menu/menu'
#require './contrastVersion/contrastVersion'
#  require './menu/trackEditor'

$->
  $('ul.menu li').hover ->
    $( this ).addClass('hover')
    $( this ).removeClass('hover')