<?php $page_name = 'contact-page' ?>
<?php $contact_page = 'active' ?>
<?php include 'assets/header.php' ?>


<div class="content-warpper clearfix">

  <!-- Page Banner
  ===================================-->
  <div class="page-panner">
    <div class="d-layer"></div>
    <div class="text">
      <h1>تواصل معنا</h1>
    </div>
  </div>


  <!-- Contact Form
  ===================================-->
  <div class="col-sm-7 col-xs-12 contact-form">
    <form>
      <div class="input-group">
        <label>الأسم بالكامل:</label>
        <input type="text" name="name" value="" class="form-control" placeholder="أسمك بالكامل">
      </div>
      <div class="input-group">
        <label>بريدك الألكتروني</label>
        <input type="email" name="email" value="" class="form-control" placeholder="بريدك الألكتروني">
      </div>
      <div class="input-group">
        <label>عنوان الموضوع</label>
        <input type="text" name="subject" value="" class="form-control" placeholder="عنوان الموضوع">
      </div>
      <div class="input-group">
        <label>الموضوع بالتفصيل</label>
        <textarea rows="8" placeholder="الموضوع بالتفصيل" class="form-control"></textarea>
      </div>
      <br>
      <button type="submit" class="btn btn-info"><i class="icon ion-ios-paperplane-outline"></i> &nbsp;إرسال</button>
    </form>
  </div><!--/contact-form-->

  <!-- Info
  ===================================-->
  <div class="col-sm-5 col-xs-12 contact-info">
    <h4>عن عائلة زيد</h4>
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
