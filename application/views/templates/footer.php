<footer class="footer">
  <div class="container">
    <nav class="pull-left">
    </nav>
    <div class="copyright pull-right">
      &copy; 2016, made with <i class="material-icons">favorite</i> by Creative Tim for a better web.
    </div>
  </div>
</footer>
</div>
</body>
<!--   Core JS Files   -->
<script src="<?php echo base_url(); ?>static/assets/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>static/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>static/assets/js/material.min.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="<?php echo base_url(); ?>static/assets/js/nouislider.min.js" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="<?php echo base_url(); ?>static/assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="<?php echo base_url(); ?>static/assets/js/material-kit.js" type="text/javascript"></script>

<script type="text/javascript">

$().ready(function(){
  // the body of this function is in assets/material-kit.js
  materialKit.initSliders();
        window_width = $(window).width();

        if (window_width >= 992){
            big_image = $('.wrapper > .header');

    $(window).on('scroll', materialKitDemo.checkScrollForParallax);
  }

});
</script>
</html>
