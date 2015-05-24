menu = do ->
  $('.faq-list dt').click ->
    $self    = $(this)
    $sibling = $self.next('dd')
    $self.toggleClass('opened')

    $sibling.slideToggle(100, -> $self.trigger 'mainContentHeightChange')