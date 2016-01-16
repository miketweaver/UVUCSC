<?php
include 'include.php';
include 'header.php';
?>

<!-- Main Section
================================================== -->
<section id="main">
  <div class="page-header">
    <h1>Officers 2016</h1>
  </div>

  <!--  Carousel -->
  <!--  consult Bootstrap docs at
        http://twitter.github.com/bootstrap/javascript.html#carousel -->
  <div id="officers-carousel" class="carousel slide">

    <div class="carousel-inner">

     <!-- President -->
        <div class="item active">
          <img src="img/officers/<?php print($officers_president_image); ?>" alt="<?php print($officers_president_name); ?>" />
          <div class="carousel-caption">
            <h3>President</h3>
              <h1><a target="_blank" href="<?php print($officers_president_link); ?>"><?php print($officers_president_name); ?></a></h1>
            <p>
              <strong>Class: </strong> <?php print($officers_president_class); ?><br>
              <strong>Hometown: </strong> <?php print($officers_president_hometown); ?>
            </p>
            <ul>
                <li>
                  <strong><?php print($officers_president_question); ?></strong><br>
                  <?php print($officers_president_answer); ?>
                </li>
            </ul>
            <p><ul class="contact-icons" style="text-align: center;">
                <li><a class="<?php print($officers_president_contact); ?>" target="_blank" href="<?php print($officers_president_contact_link); ?>"></a></li>
            </ul></p>
          </div>
        </div>

     <!-- Vice President -->
        <div class="item">
          <img src="img/officers/<?php print($officers_vicepresident_image); ?>" alt="<?php print($officers_vicepresident_name); ?>" />
          <div class="carousel-caption">
            <h3>Vice-President</h3>
              <h1><a target="_blank" href="<?php print($officers_vicepresident_link); ?>"><?php print($officers_vicepresident_name); ?></a></h1>
            <p>
              <strong>Class: </strong> <?php print($officers_vicepresident_class); ?><br>
              <strong>Hometown: </strong> <?php print($officers_vicepresident_hometown); ?>
            </p>
            <ul>
                <li>
                  <strong><?php print($officers_vicepresident_question); ?></strong><br>
                  <?php print($officers_vicepresident_answer); ?>
                </li>
            </ul>
            <p><ul class="contact-icons" style="text-align: center;">
                <li><a class="<?php print($officers_vicepresident_contact); ?>" target="_blank" href="<?php print($officers_vicepresident_contact_link); ?>"></a></li>
            </ul></p>
          </div>
        </div>

         <!-- Communications -->
        <div class="item">
          <img src="img/officers/<?php print($officers_communications_image); ?>" alt="<?php print($officers_communications_name); ?>" />
          <div class="carousel-caption">
            <h3>Communications</h3>
              <h1><a target="_blank" href="<?php print($officers_communications_link); ?>"><?php print($officers_communications_name); ?></a></h1>
            <p>
              <strong>Class: </strong> <?php print($officers_communications_class); ?><br>
              <strong>Hometown: </strong> <?php print($officers_communications_hometown); ?>
            </p>
            <ul>
                <li>
                  <strong><?php print($officers_communications_question); ?></strong><br>
                  <?php print($officers_communications_answer); ?>
                </li>
            </ul>
            <p><ul class="contact-icons" style="text-align: center;">
                <li><a class="<?php print($officers_communications_contact); ?>" target="_blank" href="<?php print($officers_communications_contact_link); ?>"></a></li>
            </ul></p>
          </div>
        </div>

         <!-- Secretary -->
        <div class="item">
          <img src="img/officers/<?php print($officers_secretary_image); ?>" alt="<?php print($officers_secretary_name); ?>" />
          <div class="carousel-caption">
            <h3>Secretary</h3>
              <h1><a target="_blank" href="<?php print($officers_secretary_link); ?>"><?php print($officers_secretary_name); ?></a></h1>
            <p>
              <strong>Class: </strong> <?php print($officers_secretary_class); ?><br>
              <strong>Hometown: </strong> <?php print($officers_secretary_hometown); ?>
            </p>
            <ul>
                <li>
                  <strong><?php print($officers_secretary_question); ?></strong><br>
                  <?php print($officers_secretary_answer); ?>
                </li>
            </ul>
            <p><ul class="contact-icons" style="text-align: center;">
                <li><a class="<?php print($officers_secretary_contact); ?>" target="_blank" href="<?php print($officers_secretary_contact_link); ?>"></a></li>
            </ul></p>
          </div>
        </div>

    </div>
    <!--  next and previous controls here
          href values must reference the id for this carousel -->
      <a class="carousel-control left" href="#officers-carousel" data-slide="prev">&lsaquo;</a>
      <a class="carousel-control right" href="#officers-carousel" data-slide="next">&rsaquo;</a>
  </div><!-- .carousel -->
  <!-- end carousel -->
  <script>
    $(document).keydown(function(e) {
      var action = null;
      if (e.keyCode == 37)
        action = 'prev';
      else if (e.keyCode == 39)
        action = 'next';
      else
        return;

      $('#officers-carousel').carousel(action);
    });
  </script>

</section>

<?php
include 'footer.php';
?>

