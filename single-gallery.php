<?php $page_name    = 'gallary-page' ?>
<?php $single_gallary_page = 'active' ?>
<?php include 'assets/header.php' ?>

<div class="content-warpper clearfix">

  <!-- Page Banner
  ===================================-->
  <div class="page-panner">
    <div class="d-layer"></div>
    <div class="text">
      <h1>معرض الصور</h1>
      <h3>أسم الألبوم</h3>
    </div>
  </div>

  <!-- Single Gallary
  ===================================-->
  <div class="gallary clearfix">
    <?php for ($i=0; $i < 9; $i++) { ?>
    <a href="http://lorempixel.com/500/50<?php echo $i ?>/nature" data-lightbox="image-1" data-title="بعض التفاصيل عن هذه الصورة">
      <div class="one-gallary-image">
        <img src="http://lorempixel.com/200/20<?php echo $i ?>/nature" alt="Placeholder">
        <h5>أسم الصورة</h5>
        <span class="date">11/2/1988</span>
      </div>
    </a>
    <?php } ?>

    <span class="next-page"><i class="icon ion-ios-arrow-thin-right fa-lg"></i> &nbsp;&nbsp;  الألبوم التالي</span>
    <span class="prev-page">السابق التالي &nbsp;&nbsp;<i class="icon ion-ios-arrow-thin-left fa-lg"></i></span>
  </div>
  <!-- Next button -->
</div><!--/content-warpper-->


<?php include'assets/footer.php' ?>
