<!--Footer-->
<div class="container-fluid mt-5 wow fadeIn" style="background-color: #1e1f29;">
  <div class="row">
    <div class="col-md-3">
      <h4 class="text-white mt-5">Tentang Kami</h4>
      <p class="text-white mt-4 footer-left-1"><i class="fa fa-map-marker" style="color: white; padding-right: 10px;"></i>Karangan, Trenggalek</p>
      <p class="text-white footer-left-1"><i class="fa fa-phone" style="color: white; padding-right: 10px;"></i>085235149501</p>
      <p class="text-white footer-left-1"><i class="fa fa-envelope" style="color: white; padding-right: 10px;"></i>bukupintar@gmail.com</p>
    </div>
    <div class="col-md-3">
      <h4 class="text-white mt-5">Informasi</h4>
      <p class="text-white mt-4 footer-left"><a href="#">Home</a></p>
      <p class="text-white footer-left"><a href="#">Tentang Kami</a></p>
      <p class="text-white footer-left"><a href="#">Kategori</a></p>
      <p class="text-white footer-left"><a href="#">Login</a></p>
    </div>
    <div class="col-md-3">
      <h4 class="text-white mt-5">Detail</h4>
      <p class="text-white footer-left">Buku Pintar adalah sebuah toko online yang menjualkan sebuah buku yang memilki kualitas baik..</p>
    </div>
    <div class="col-md-3">
      <h4 class="text-white mb-3 mt-5">Ikuti Kami</h4>
      <a href="#"><i class="fab fa-facebook-square" style="border: 1px solid white; padding: 10px; background-color: white; border-radius: 5px; color: #007bff;"></i></a>&nbsp;
      <a href="#"><i class="fab fa-instagram" style="border: 1px solid white; padding: 10px; background-color: white; border-radius: 5px; color: #007bff;"></i></a>&nbsp;
      <a href="#"><i class="fab fa-twitter" style="border: 1px solid white; padding: 10px; background-color: white; border-radius: 5px; color: #007bff;"></i></a>

      <i class="fab fa-instagram"></i>
    </div>
  </div>

  <!--Copyright-->
  <div class="justify-content-center text-center text-white pb-3 mt-3">
    © <?= date('Y'); ?> Copyright By: Rega Aji <i class="fas fa-heart" style="color: #cf1f3c;"></i>
  </div>
  <!--/.Copyright-->
</div>
</div>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="<?= base_url(); ?>/assets/js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?= base_url(); ?>/assets/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?= base_url(); ?>/assets/js/bootstrap.min.js"></script>
  <!-- DataTable -->
  <script src="<?= base_url(); ?>/assets/DataTables/datatables.min.js"></script>

  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?= base_url(); ?>/assets/js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>

  <script>
    $("#number").bind('keyup change click', function(){
      if($.trim($(this).val()) != ""){
        if($(this).val().match(/^\d+$/)){

        } else {
          alert('Harus Angka');
           $(this).val( $(this).val().replace(/[^0-9]+/gi, "") );
        }

        var value = $(this).val();

        if ((value !== '') && (value.indexOf('.') === -1)) {

          $(this).val(Math.max(Math.min(value, angka), 0));
        }
      }
    });
  </script>

  <script>
    $("#id_kurir").on("change", function(){

  // ambil nilai
  var kurir = $("#id_kurir option:selected").attr("kurir");
  
  // pindahkan nilai ke input
  $("#antar-kurir").html(kurir);
  
 
});
  </script>

  <script>
    $(function () {
    $('#tabel1').DataTable()
    $('#tabel2').DataTable()
    $('#tabel3').DataTable({
      'paging': true,
      'lengthChange': true,
      'searching': true,
      'ordering': false,
      'info': false,
      'autoWidth': false
  })
})
</script>

<script>
var map = L.map('map').setView([-8.13593475, 111.64019830], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

var firefoxIcon = L.icon({
        iconUrl: '<?= base_url(); ?>assets/img/icon.png',
        iconSize: [38, 50], // size of the icon
        });

L.marker([-8.13593475, 111.64019830], {icon: firefoxIcon}).addTo(map);

</script>

</body>

</html>