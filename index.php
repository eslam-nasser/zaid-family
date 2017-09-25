<?php $page_name = 'index' ?>
<?php $home_page = 'active' ?>
<?php include 'assets/header.php' ?>

<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/ui-darkness/jquery-ui.css">

<!-- Big Ass Image Section
===================================-->
<div id="hero" data-type="background" data-speed="5">
  <div class="d-layer"></div>
  <div class="row">
    <div class="container">
      <div class="content">
        <div class="texts">
          <img src="assets/img/family-logo.png" alt="" />
          <h3>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ .</h3>
        </div>
        <div class="buttons">
          <a href="tree.php" class="btn btn-primary btn-hero">
            <i class="icon ion-network fa-lg"></i>
            &nbsp;
            شجرة العائلة
          </a>
          <a href="add-person.php" class="btn btn-primary btn-hero">
            <i class="icon ion-ios-personadd-outline fa-lg"></i>
            &nbsp;
            أضف للعائلة
          </a>
        </div>
      </div><!--/.content-->
      <div class="startScroll">
        <div class="icon-scroll"></div>
      </div>
    </div><!--continer-->
  </div><!--row-->
</div><!--/#section1-->
<div class="clearfix"></div>

<!-- News Feed
===================================-->
<div class="news-feed">
  <ul id="js-news" class="js-hidden">
    <?php for ($i=0; $i < 10; $i++) { ?>
      <li class="news-item">
        <a href="main-news.php">
          هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ .
        </a>
      </li>
    <?php } ?>
  </ul>
</div>


<!-- Content Warpper
===================================-->
<div class="content-warpper">
  <!-- Services
  ===================================-->
  <div id="services">
    <h1 class="heading">عائلة <span class="zaid">زيد </span></h1>
    <div class="col-xs-4 one-serv">
      <i class="icon ion-ios-people-outline"></i>
      <h4>أسكشف عائلة <span class="zaid" style="font-size: 2em">زيد </span></h4>
      <h5>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ .</h5>
    </div><!--/one-serv-->
    <div class="col-xs-4 one-serv">
      <i class="icon ion-ios-personadd-outline"></i>
      <h4>أضف الي العائلة</h4>
      <h5>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ .</h5>
    </div><!--/one-serv-->
    <div class="col-xs-4 one-serv">
      <i class="icon ion-paper-airplane"></i>
      <h4>تواصل معنا</h4>
      <h5>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ .</h5>
    </div><!--/one-serv-->
  </div><!--#services-->

  <div class="clearfix"></div>

  <!-- Locations
  ===================================-->
  <div id="locations">
    <h1 class="heading">أماكن تواجد العائلة</h1>
    <div class="one-location">
      <div class="col-xs-4">
        <img src="assets/img/thumps/2.jpg" alt="" />
      </div>
      <div class="col-xs-8">
        <h4>جمهوية مصر العربية</h4>
        <p>
          هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى
        </p>
        <a href="#" class="btn-location">مزيد من التفاصيل</a>
      </div>
    </div><!--/one-location-->
    <hr class="hr-location">
    <div class="one-location">
      <div class="col-xs-8">
        <h4>فرنسا</h4>
        <p>
          هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى
        </p>
        <a href="#" class="btn-location">مزيد من التفاصيل</a>
      </div>
      <div class="col-xs-4">
        <img src="assets/img/thumps/1.jpg" alt="" />
      </div>
    </div><!--/one-location-->
    <hr class="hr-location">
    <div class="one-location">
      <div class="col-xs-4">
        <img src="assets/img/thumps/3.jpg" alt="" />
      </div>
      <div class="col-xs-8">
        <h4>المملكة المتحدة (UK)</h4>
        <p>
          هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى
        </p>
        <a href="#" class="btn-location">مزيد من التفاصيل</a>
      </div>
    </div><!--/one-location-->
  </div><!--#Locations-->

  <div class="clearfix"></div>

  <!-- Call To Action
  ===================================-->
  <div id="cta">
    <div class="d-layer"></div>
    <div class="content">
      <h2>عائلة <span class="zaid">زيد </span></h2>
      <p class="lead">
        هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى
      </p>
    </div><!--content-->
    <div class="buttons">
      <a href="#" class="btn-cta">شجرة العائلة</a>
    </div><!--/buttons-->
  </div><!--#cta-->


</div><!--/content-warpper-->

<!-- Basic jQuery Library -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
<!-- LightBox -->
<script src="assets/js/jquery.ticker.js"></script>
<script type="text/javascript">
$('#js-news').ticker({
    speed: 0.10,
    htmlFeed: true,
    fadeInSpeed: 2000,
    direction: 'rtl',
    displayType: 'fade',
    titleText: 'آخر الأخبار'
});
</script>


<?php include'assets/footer.php' ?>
