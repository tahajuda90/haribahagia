<!DOCTYPE html>
<html lang="en">
    <head>
        <title>HariBahagiaKu.com</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="<?= base_url() ?>assets/undangan/glint/logo_haribahagia.png"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/landing/vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/landing/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/landing/vendor/animate/animate.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/landing/vendor/select2/select2.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/landing/css/util.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/landing/css/main.css">
        <!--===============================================================================================-->
    </head>
    <body>
        
        <div class="simpleslide100">
            <div class="simpleslide100-item bg-img1" style="background-image: url('<?= base_url() ?>assets/image/backgroundcome.jpg');"></div>
        </div>
        
        
        <div class="flex-col-c-sb size1 overlay1">
            <!--  -->
            <div class="w-full flex-w flex-sb-m p-l-80 p-r-80 p-t-22 p-lr-15-sm">
                <div class="wrappic1 m-r-30 m-t-10 m-b-10">
                    <a href="<?= base_url()?>Acara/?dest=demo"><img src="<?= base_url() ?>assets/image/logodpn.png" alt="LOGO"></a>
                </div>
            </div>
            
            <!--  -->
            <div class="flex-col-c-m p-l-15 p-r-15 p-t-50 p-b-120">
                <h3 class="l1-txt1 txt-center p-b-40 respon1">
                    Coming Soon
                </h3>

                <div id="time" class="flex-w flex-c-m cd100">
                    <div class="flex-col-c wsize1 m-b-30">
                        <span class="l1-txt2 p-b-9 days">35</span>
                        <span class="s1-txt1 where1 p-l-35">Days</span>
                    </div>

                    <div class="flex-col-c wsize1 m-b-30">
                        <span class="l1-txt2 p-b-9 hours">17</span>
                        <span class="s1-txt1 where1 p-l-35">Hours</span>
                    </div>

                    <div class="flex-col-c wsize1 m-b-30">
                        <span class="l1-txt2 p-b-9 minutes">50</span>
                        <span class="s1-txt1 where1 p-l-35">Minutes</span>
                    </div>

                    <div class="flex-col-c wsize1 m-b-30">
                        <span class="l1-txt2 p-b-9 seconds">39</span>
                        <span class="s1-txt1 where1 p-l-35">Seconds</span>
                    </div>
                </div>
            </div>
        </div>
        
        
        <script src="<?= base_url() ?>assets/undangan/glint/js/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="<?= base_url() ?>assets/landing/vendor/bootstrap/js/popper.js"></script>
        <script src="<?= base_url() ?>assets/landing/vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="<?= base_url() ?>assets/landing/vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="<?= base_url() ?>assets/undangan/countdown/jquery.countdown.js"></script>
        <!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/landing/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
        <script>
            $('#time').countdown('<?php 
                          echo date('Y/m/d', strtotime('+1 years'));
                      ?>',function(event){
                var $this = $(this).html(event.strftime(
                '<div class="flex-col-c wsize1 m-b-30"><span class="l1-txt2 p-b-9 days">%D</span><span class="s1-txt1 where1 p-l-35">Days</span></div>'+
                '<div class="flex-col-c wsize1 m-b-30"><span class="l1-txt2 p-b-9 days">%H</span><span class="s1-txt1 where1 p-l-35">Hours</span></div>'+
                '<div class="flex-col-c wsize1 m-b-30"><span class="l1-txt2 p-b-9 days">%M</span><span class="s1-txt1 where1 p-l-35">Minutes</span></div>'+
                '<div class="flex-col-c wsize1 m-b-30"><span class="l1-txt2 p-b-9 days">%S</span><span class="s1-txt1 where1 p-l-35">Seconds</span></div>'
                ));
            });
        </script>
<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/landing/js/main.js"></script>
    </body>
</html>