<?php $page_name    = 'gallary-page' ?>
<?php $single_gallary_page = 'active' ?>
<?php include 'assets/header.php' ?>

<div class="content-warpper clearfix">

  <!-- Page Banner
  ===================================-->
  <div class="page-panner">
    <div class="d-layer"></div>
    <div class="text">
      <h1>أخبار العائلة</h1>
      <h3>تعرف علي آخر أخبار العائلة</h3>
    </div>
  </div>

  <!-- Main News
  ===================================-->
  <div class="main-news clearfix">

    <?php for ($i=0; $i < 10; $i++) { ?>
    <div class="news-row clearfix">
      <div class="image">
        <a href="single-news.php">
          <img src="assets/img/thumps/1.jpg" alt="Zaid" />
        </a>
      </div>
      <div class="content">
        <a href="single-news.php">
          <h3>عنوان الخبر</h3>
        </a>
        <p>
          نذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني.
        </p>
        <a href="single-news.php" class="btn btn-info">المزيد من التفاصيل</a>
      </div>
    </div><!--/news-row-->
    <?php } ?>

  </div><!--/main-news-->


</div><!--/content-warpper-->


<?php include'assets/footer.php' ?>
