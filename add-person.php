<?php $page_name = 'add-person-page' ?>
<?php $add_person_page = 'active' ?>
<?php include 'assets/header.php' ?>


<div class="content-warpper clearfix">

  <!-- Page Banner
  ===================================-->
  <div class="page-panner">
    <div class="d-layer"></div>
    <div class="text">
      <h1>أضف الي العائلة</h1>
    </div>
  </div>


  <!-- Contact Form
  ===================================-->
  <div class="col-sm-7 col-xs-12 contact-form">
    <form>
      <div class="input-group">
        <label>أسم الفرد بالكامل</label>
        <input type="text" class="form-control" placeholder="الأسم بالكامل">
      </div>
      <div class="input-group">
        <label>العنوان بالكامل</label>
        <input type="text" class="form-control" placeholder="العنوان">
      </div>
      <div class="input-group">
        <label>رقم الهاتف</label>
        <input type="text" class="form-control" placeholder="رقم الهاتف مع مفتاح البلد">
      </div>
      <div class="input-group">
        <label>صورة للفرد إن وجد</label>
        <input type="file">
      </div>
      <br>
      <button type="submit" class="btn btn-info"><i class="icon ion-ios-paperplane-outline"></i> &nbsp;إرسال</button>
    </form>
  </div><!--/contact-form-->

  <!-- Info
  ===================================-->
  <div class="col-sm-5 col-xs-12 contact-info">
    <h4>تفاصيل الإضافة</h4>
    <p>
      منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني.
    </p>
    <hr>
    <h4>للتواصل</h4>
    <span>رقم الهاتف: <span>01000000000</span></span>
    <span>العنوان: <span>11 - Some street - Cairo - Egypt</span></span>
    <span>البريد الإلكتروني: <span>example@example.com</span></span>
  </div>


</div><!--/content-warpper-->


<?php include'assets/footer.php' ?>



<script type="text/javascript">
$('.add-person').slideUp();
$('#addPerson').click(function(){
  if($(this).is(':checked') ) {
    $('.add-person').slideDown();
  } else {
    $('.add-person').slideUp();
  }
});
</script>
