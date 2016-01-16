<?php 
include 'include.php';
include 'header.php'; 
?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=406543892775110";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Main Section
================================================== -->
<section id="main">
    <div style="margin-bottom:10px">
        <img src="img/brand/banner.jpg">
    </div>
    <div class="span4">
    <h3>About Us</h3>
    <p>The UVU CyberSecurity Club is an organization dedicated to providing UVU students with an informational and social network of individuals interested in Security. We provide professional resources, networking opportunities, and talks by UVU faculty and industry insiders. We also foster community among computer science/information technology students by way of club-hosted security demonstrations, random outings, and social events.</p>

    <p>Our club faculty advisor is <a href="<?php print($faculty_sponsor_url); ?>" target="_blank"><?php print($faculty_sponsor_name); ?></a>.</p>

    <h3>Sounds Interesting?</h3>
    <p>First things first: sign up for our <a href="<?php print($links_mailing_list); ?>"  target="_blank">club mailing list</a>. We use it to announce club events, job opportunities, and other related happenings.</p>
    <p>While you're here, be sure to check out our bi-weekly <a href="/meetings">Meetings</a> schedule and other things we have coming up.</p>
  <p>Finally, if you have any suggestions for cool things for the club to do (whether for career development or just something fun), then please <a href="contact">contact us!</a></p>
    </div>



<div class="span3">

<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/SCMagazine" data-widget-id="687078471210676225">Tweets by @SCMagazine</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

</div>


    <div class="span4">
    <div class="fb-page" data-href="https://www.facebook.com/UVUCSC/" data-tabs="timeline" data-width="275" data-height="400" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"></div>
    </div>
</section>

<?php include 'footer.php'; ?>
