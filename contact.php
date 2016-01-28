<?php
include 'include.php';
include 'header.php';
?>

<!-- Main Section
================================================== -->
<section id="main">
  <div class="page-header">
    <h1>Contact Us</h1>
  </div>

  <div class="row">

    <!-- Chris Comment Test commit -->

  
 <!-- PUT CONTENT IN HERE
================================================== --> 
    <div class="span6">
      <h3>UVU Community</h3>
      <p>If you need to contact club leadership, please <a href="mailto:<?php print($club_contact_email); ?>">email us</a>.</p>
      <p>We particularly encourage you to submit any suggestions you may have for the club!</p>
      <p><ul class="contact-icons" style="text-align: center;">
            <li><a class="email" target="_blank" href="mailto:<?php print($club_contact_email); ?>"></a></li>
            <li><a class="facebook" target="_blank" href="<?php print($links_facebook_page); ?>"></a></li>
      </ul></p>
 
      <h4>Mailing List</h4>
      <p>Stay up to date on the latest events and activities by subscribing to our <a href="<?php print($links_mailing_list); ?>">mailing list</a>.</p>

  </div>

  <div class="span6">
    <h3>Outside UVU</h3>
    <p>UVU CyberSecurity Club is very interested in collaborating with organizations and individuals outside of the UVU community. If you are interested in working with the club, please look at the information below for different ways to get involved. We hope to hear from you soon!</p>
    <p><h5>- Tech Talks & Info Sessions</h5>
      Tech Talks are a great way to get UVU students interested in what your company does and get in contact with potential interns and employees. If you would like to speak at one of these sessions, please email our current vice president <a href="<?php print($officers_vicepresident_contact_link); ?>"><?php print($officers_vicepresident_name); ?></a>. We meet on <?php print($club_meetings_weekday); ?> Nights. 
    </p>

      <p><h5>- Sponsorship</h5>
      Putting this club together every year is expensive, so we really appreciate sponsors. If you'd like to support the UVU CyberSecurity Club and other club activities, even if you don't want to sponsor us financially, we'd love to chat! Please contact vice president <a href="<?php print($officers_vicepresident_contact_link); ?>"><?php print($officers_vicepresident_name); ?></a> for more information. 
    </p>
  </div>

</section>

<?php
include 'footer.php';
?>

