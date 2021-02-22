<script src="<?php echo URL_TEMPLATE_CLIENT ?>/js/jquery.min.js"></script>
<script src="<?php echo URL_TEMPLATE_CLIENT ?>/js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?php echo URL_TEMPLATE_CLIENT ?>/js/popper.min.js"></script>
<script src="<?php echo URL_TEMPLATE_CLIENT ?>/js/bootstrap.min.js"></script>
<script src="<?php echo URL_TEMPLATE_CLIENT ?>/js/jquery.easing.1.3.js"></script>
<script src="<?php echo URL_TEMPLATE_CLIENT ?>/js/jquery.waypoints.min.js"></script>
<script src="<?php echo URL_TEMPLATE_CLIENT ?>/js/jquery.stellar.min.js"></script>
<script src="<?php echo URL_TEMPLATE_CLIENT ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo URL_TEMPLATE_CLIENT ?>/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo URL_TEMPLATE_CLIENT ?>/js/aos.js"></script>
<script src="<?php echo URL_TEMPLATE_CLIENT ?>/js/jquery.animateNumber.min.js"></script>
<script src="<?php echo URL_TEMPLATE_CLIENT ?>/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="<?php echo URL_TEMPLATE_CLIENT ?>/js/google-map.js"></script>
<script src="<?php echo URL_TEMPLATE_CLIENT ?>/js/main.js"></script>
<script type="text/javascript">
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
	'use strict';
	window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
    	form.addEventListener('submit', function(event) {
    		if (form.checkValidity() === false) {
    			event.preventDefault();
    			event.stopPropagation();
    		}
    		form.classList.add('was-validated');
    	}, false);
    });
}, false);
})();
</script>

<script type="text/javascript">
   $(document).ready(function(){
    <?php if(isset($_COOKIE['msg'])){ ?>
        toastr.info(<?php echo $_COOKIE['msg']?>, '');
       
        <?php 
    }
    if(isset($_COOKIE['err'])){
       ?>
       toastr.error(<?php echo $_COOKIE['err']?>, '');
   <?php } ?>
})
</script>