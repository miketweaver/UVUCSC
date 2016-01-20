var clndr = {};

$( function() {

  var events = [
    { date: '2016-01-27', title: 'Opening Social', location: 'Location to be Announced' }
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