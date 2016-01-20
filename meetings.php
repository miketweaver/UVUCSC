<?php
include 'include.php';
include 'header.php';
?>

<!-- Page Header
================================================== -->
<section id="main">
  <div class="page-header">
    <h1>Meetings</h1>
  </div>

 <!-- PUT CONTENT IN HERE
================================================== -->

  <div class="row">
    <div class="span5">
<h3>Club Meetings</h3>
  <p>Our club hosts a variety of events for our CyberSecurity enthusiasts. Subscribe to our <a href="<?php print($links_mailing_list); ?>" target="_blank"> mailing list</a> to get notified of upcoming events. You should also like the <a href="<?php print($links_facebook_page); ?>" target="_blank">UVU CyberSecurity Facebook Page</a>, 
to which many club and department events are posted. There is also a general <a href="<?php print($links_facebook_page); ?>" target="_blank">UVU CyberSecurity group</a> you can join on facebook if you so desire. For events related to career development, visit the <a href="career">career page</a>.</p>
  <div class="row">
    <div class="span5">
      <h3>Industry Speakers</h3>
      <p>One of our goals is to get our members hired it the field of CyberSecurity. To accomplish that, we will periodically bring in professionals connected to the CyberSecurity circles in Utah. We hope to help you build a network of people who can help you land a job in the field. Be sure to join the our club <a href="<?php print($links_mailing_list); ?>"> mailing list</a> for announcements regarding these events.</p>
    </div>

    <div class="span5">
      <h3>CTF Team Events</h3>
      <p>UVU CyberSecurity has an open Capture the Flag Team for anyone who wants to participate. Our teams will be having weekly meetings, in addition to the club meetings, to prepare ourselves to compete in national competitions throughout the world.</p>
      <p>It's simple: If you really want to dig deep into the world of hacking as a sport, this is where you want to be. Every year we'll be attending <a href="https://www.saintcon.org/" target="_blank">SAINTCON</a> to compete statewide CTF.</p>
      <p>For details, check out our <a href="ctfteam">CTF Team</a>.</p>   
    </div>

    <div class="span12">
      <h3>DefCon</h3>
      <p>Every year we go to <a href="https://www.defcon.org/" target="_blank">Defcon</a> as a club. DefCon usually takes place in the month of August. This is the highlight of the year for our club. In order to cut down on costs, our club will host a Fundraiser and split the funds between those who helped. We'll also help coordinate rides, hotels, anything you can think of to help everyone attend.</p> 
      <p>Don't miss this! For more info, talk to one of our <a href="officers">officers</a>.</p>
    </div>    

    <div class="span12">
      <h3>Ideas?</h3>
      <p>If you have any ideas for fun or useful events that we might be able to host, by all means send your suggestions to our vice president <a href="<?php print($officers_vicepresident_contact_link); ?>"><?php print($officers_vicepresident_name); ?></a> or any one of our <a href="officers">officers</a>!</p>
    </div>
  </div>
</div>
<div class="span7">

   <div class="inner">

        <div id="full-clndr" class="clearfix">
          <script type="text/template" id="full-clndr-template">
            <div class="clndr-controls">
              <div class="clndr-previous-button">&lt;</div>
              <div class="clndr-next-button">&gt;</div>
              <div class="current-month"><%= month %> <%= year %></div>

            </div>
            <div class="clndr-grid">
              <div class="days-of-the-week clearfix">
                <% _.each(daysOfTheWeek, function(day) { %>
                  <div class="header-day"><%= day %></div>
                <% }); %>
              </div>
              <div class="days">
                <% _.each(days, function(day) { %>
                  <div class="<%= day.classes %>" id="<%= day.id %>"><span class="day-number"><%= day.day %></span></div>
                <% }); %>
              </div>
            </div>
            <div class="event-listing">
              <div class="event-listing-title">EVENTS THIS MONTH</div>
              <% _.each(eventsThisMonth, function(event) { %>
                  <div class="event-item">
                    <div class="event-item-date"><%= moment(event.date).format('ddd Do, hA') %></div>
                    <div class="event-item-name"><%= event.title %></div>
                    <div class="event-item-location"><%= event.location %></div>
                  </div>
                <% }); %>
            </div>
          </script>
        </div>

      </div>

  </div></div>
</section>

<?php
include 'footer.php';
?>

