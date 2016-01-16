<?php
include 'include.php';
include 'header.php';
?>

<!-- Page Header
================================================== -->
<section id="main">
  <div class="page-header">
    <h1>Events</h1>
  </div>

 <!-- PUT CONTENT IN HERE
================================================== --> 
  <div class="row">
    <div class="span6">
<h3>Club Events</h3>
  <p>Our club hosts a variety of events for our CyberSecurity enthusiasts. Subscribe to our <a href="<?php print($links_mailing_list); ?>"> mailing list</a> to get notified of upcoming events. You should also like the <a href="<?php print($links_facebook_page); ?>">UVU CyberSecurity Facebook Page</a>, 
to which many club and department events are posted. There is also a general <a href="<?php print($links_facebook_page); ?>">UVU CyberSecurity</a> group you can join on facebook if you so desire. For events related to career development, visit the <a href="career">career page</a>.</p>
  <div class="row">
    <div class="span6">
      <h3>Social Events</h3>
      <p>Throughout the year, we hold social events such as ###########################################################. We regularly host a study break or Christmas party after classes end. In the past study breaks, we have had activities such as cookie decorating contest, gift exchange, video games, trivia, prizes and swag giveaways. We also host a LAN Party at least once a semester.</p>
    </div>

    <div class="span6">
      <h3>Industry Speakers</h3>
      <p>One of our goals, as a club, is to get you hired in the field. To accomplish that we will periodically bring in people connected to the CyberSecurity circles in Utah and around the world. This will give you a chance to meet and learn from them. We hope to help you build a network of people who can help you land a job in the field. Be sure to join the our club mailing list for announcements regarding these events.</p>
    </div>

    <div class="span6">
      <h3>CTF Events</h3>
      <p>Rice CS Club hosts a yearly student-led hackathon named <a href="{{ hack_rice.link }}">HackRice</a>. During the hackathon people get together and collaboratively code in an extreme manner over the span of a day or two to build amazing projects!</p>
      <p>It's simple: Code, Eat, Sleep for the entire weekend and see what you come up with. We'll take care of the eating part.</p>
      <p>At the end of the hackathon, participants demonstrate their applications to the audience and a panel of judges for a chance to win prizes.</p>
      <p>For details, visit <a href="{{ hack_rice.link }}">hack.rice.edu</a>.</p>
    </div>

    <div class="span6">
      <h3>DefCon</h3>
      <p>Every year we go to <a href="https://www.defcon.org/">Defcon</a> as a club. Defcon usually takes place in the month of August.</p>
      <p>This is the highlight of the year for our club. In order to cut down on costs, our club will host a Fundraiser and split the funds between those who helped.</p>
      <p>We'll also help coordinate rides, hotels, anything you can think of to help everyone attend. Don't miss this!</p>
      <p>For more info, talk to on of our <a href="officers">officers</a>.</p>
    </div>    
  </div>
  <h3>Ideas?</h3>
  <p>If you have any ideas for fun or useful events that we might be able to host, by all means send your suggestions to our vice president <a href="mailto:<?php print($officers_vicepresident_contact_link); ?>"><?php print($officers_vicepresident_name); ?></a> or any one of our <a href="officers">officers</a>!</p>
</div>
<div class="span6">

   <iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showCalendars=0&amp;mode=AGENDA&amp;height=500&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=rice.edu_ke8jk8i0ef1n8o2lsbk9hhha5g%40group.calendar.google.com&amp;color=%231B887A&amp;ctz=America%2FChicago" style=" border-width:0 " width="600" height="500" frameborder="0" scrolling="no"></iframe>
   
  </div></div>
</section>

<?php
include 'footer.php';
?>

