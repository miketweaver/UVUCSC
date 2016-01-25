var clndr = {};

$( function() {

  var events = [
    { date: '2016-01-26 18:00', title: 'Opening Social', location: 'CS 615B - Utah Valley University' },
    { date: '2016-03-10 09:00', title: 'BSidesSLC - Day 1', location: 'Salt Palace' },
    { date: '2016-03-11 09:00', title: 'BSidesSLC - Day 2', location: 'Salt Palace' }
  ];

  clndr = $('#full-clndr').clndr({
    template: $('#full-clndr-template').html(),
    events: events,
    forceSixRows: true
  });

  $('#mini-clndr').clndr({
    template: $('#mini-clndr-template').html(),
    events: events,
    clickEvents: {
      click: function(target) {
        if(target.events.length) {
          var daysContainer = $('#mini-clndr').find('.days-container');
          daysContainer.toggleClass('show-events', true);
          $('#mini-clndr').find('.x-button').click( function() {
            daysContainer.toggleClass('show-events', false);
          });
        }
      }
    },
    adjacentDaysChangeMonth: true,
    forceSixRows: true
  });

});