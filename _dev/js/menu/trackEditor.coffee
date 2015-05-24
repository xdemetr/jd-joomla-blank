trackEditor = do ->
  $trackEditor = $('.track-editor')
  $trackSource = $trackEditor.find('audio')

  return unless $trackSource.length

  ((Peaks) ->
    peaksInstance = Peaks.init
      container: $trackEditor.find('.track-editor-waveform')[0]
      mediaElement: $trackSource[0]
      dataUri: 'data/custom/upload-goodok/sample.json'
      keyboard: false
      height: 100
      overviewWaveformColor: 'rgb(140, 140, 140)'
      segments: [
        startTime: 2
        endTime: 7
        editable: true
        label: 'Your'
        color: '#4f4f4f'
      ]
  ) peaks.js

  $trackEditor.find('.play-button').click ->
    $trackSource[0].play()
    $trackEditor.toggleClass('playing')

  $trackEditor.find('.pause-button').click ->
    $trackSource[0].pause()
    $trackEditor.toggleClass('playing')