<?php $page_name    = 'gallary-page' ?>
<?php $gallary_page = 'active' ?>
<?php include 'assets/header.php' ?>

<div class="content-warpper clearfix">

  <!-- Page Banner
  ===================================-->
  <div class="page-panner">
    <div class="d-layer"></div>
    <div class="text">
      <h1>معرض الصور</h1>
      <h3>ألبومات العائلة علي مر السنين</h3>
    </div>
  </div>

  <!-- Gallery
  ===================================-->
  <div class="gallary clearfix">

    <?php for ($i=0; $i < 6; $i++) { ?>
    <a href="single-gallery.php">
      <div class="one-gallary clearfix">
        <img src="http://lorempixel.com/200/20<?php echo $i ?>/nature" alt="Placeholder">
        <img src="http://lorempixel.com/200/20<?php echo $i ?>/nature" alt="Placeholder">
        <img src="http://lorempixel.com/200/20<?php echo $i ?>/nature" alt="Placeholder">
        <h3>أسم ألبوم</h3>
        <span class="date">11/2/1988</span>
      </div>
    </a>
    <?php } ?>

  </div>


</div><!--/content-warpper-->


<?php include'assets/footer.php' ?>
