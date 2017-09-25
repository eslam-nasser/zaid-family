<?php $page_name  = 'map-page' ?>
<?php $map_page   = 'active' ?>
<?php include 'assets/header.php' ?>

<div class="content-warpper clearfix">

  <!-- Page Banner
  ===================================-->
  <div class="page-panner">
    <div class="d-layer"></div>
    <div class="text">
      <h1>خريطة أماكن تواجد العائلة</h1>
    </div>
  </div>



  <!-- Map
  ===================================-->
  <div id="map" style="width: 100%; height: 500px"></div>

  <div class="clearfix"></div>

  <!-- Locations
  ===================================-->
  <div class="locations clearfix">
    <div class="one-location">
      <div class="flag">
        <img src="assets/img/flags/egypt.svg" alt="Egypt" />
      </div>
      <h3>مصر</h3>
      <span class="people-numb">تعددات العائلة: 200,000</span>
    </div>
    <!--/-->
    <div class="one-location">
      <div class="flag">
        <img src="assets/img/flags/Flag_of_Bahrain.svg" alt="Egypt" />
      </div>
      <h3>البحرين</h3>
      <span class="people-numb">تعددات العائلة: 120,000</span>
    </div>
    <!--/-->
    <div class="one-location">
      <div class="flag">
        <img src="assets/img/flags/Flag_of_Sudan.svg" alt="Egypt" />
      </div>
      <h3>السودان</h3>
      <span class="people-numb">تعددات العائلة: 100,000</span>
    </div>
    <!--/-->
    <div class="one-location">
      <div class="flag">
        <img src="assets/img/flags/Flag_of_the_United_Arab_Emirates.svg" alt="Egypt" />
      </div>
      <h3>الأمارات</h3>
      <span class="people-numb">تعددات العائلة: 120,000</span>
    </div>
    <!--/-->
    <div class="one-location">
      <div class="flag">
        <img src="assets/img/flags/saudi.svg" alt="Egypt" />
      </div>
      <h3>المملكة السعودية</h3>
      <span class="people-numb">تعددات العائلة: 120,000</span>
    </div>
    <!--/-->
    <div class="one-location">
      <div class="flag">
        <img src="assets/img/flags/Flag_of_Algeria.svg" alt="Egypt" />
      </div>
      <h3>الجزائر</h3>
      <span class="people-numb">تعددات العائلة: 120,000</span>
    </div>
    <!--/-->
    <div class="one-location div-test">

    </div>
  </div>

<!-- Map -->
<link rel="stylesheet" type="text/css" href="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.css">
<script src="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.js"></script>
<script type="text/javascript">
  var map = L.map('map', {
    center: [29.608065, 31.025592],
    zoom: 4
  });
  L.marker([29.608065, 31.025592]).addTo(map).bindPopup('<h4>Egypt,</h4>200,000 Population').openPopup();
  L.marker([24.504544, 43.532897]).addTo(map).bindPopup('Some Text for test the popup message');
  L.marker([18.965332, 31.165434]).addTo(map).bindPopup('Some Text for test the popup message');
  L.marker([23.596513, 54.533103]).addTo(map).bindPopup('Some Text for test the popup message');
  var tiles = new L.tileLayer('http://{s}.tile.stamen.com/watercolor/{z}/{x}/{y}.png').addTo(map);
</script>
</div><!--/content-warpper-->

<?php include'assets/footer.php' ?>
