    </div> <!-- /.container -->

	<footer>
    	<div class="satu">
    		<div class="container">
    			<div class="col-md-2">
    				<ul>
    					<li> <a href="<?php echo get_site_url(); ?>/menu/jelajahi-profil-buku-sekolah"> Profil </a> </li>
    					<li> <a href="<?php echo get_site_url(); ?>/menu/pendaftaran"> Penerimaan </a> </li>
    					<li> <a href="<?php echo get_site_url(); ?>/menu/kurikulum"> Akademik </a> </li>
    					<li> <a href="<?php echo get_site_url(); ?>/menu/potret-dari-lulusan"> Alumni </a> </li>
    					<li> <a href=""> Sedekah </a> </li>
    				</ul>
    			</div>
    			<div class="col-md-2">
    				<ul>
    					<li> <a href="<?php echo get_site_url(); ?>/menu/kalender-akademik"> Kehidupan Siswa </a> </li>
    					<li> <a href="<?php echo get_site_url(); ?>/berita"> Berita </a> </li>
    					<li> <a href=""> Karir </a> </li>
    					<li> <a href=""> Forum Orang Tua </a> </li>
    				</ul>
    			</div>
    			<div class="col-md-4 hijau">
    				<center>
	    				<img src="<?php echo get_site_url(); ?>/logo.png" />
	    				<span class="miring">"terakreditasi A"</span>
    				</center>
    			</div>
    			<div class="col-md-4">
    				<span class="top">SISTEM INFORMASI AKADEMIK</span>
    				<form class="form-horizontal" role="form" action="<?php echo get_site_url(); ?>/adminweb" method="post">
    					<div class="form-group">
    						<div class="col-md-12">
    							<input type="text" name="log" placeholder="Username" class="form-control" />
    						</div>
    					</div>
    					<div class="form-group">
    						<div class="col-md-12">
    							<input type="password" name="pwd" placeholder="Password" class="form-control" />
    						</div>
    					</div>
    					<div class="form-group">
    						<div class="col-md-12">
    							<button class="btn btn-primary">Login</button>
    						</div>
    					</div>
    				</form>
    			</div>
    		</div>
    	</div>
    	<div class="dua">
    		<div class="container">
    			<div class="col-md-4">
    				<span class="tebal">SMA PASUNDAN 3 BANDUNG</span>
    				<span> <div class="dicon1"></div> Jalan Kebon Jati No.31 Kecamatan Andir Kota Bandung Kode Pos 40181</span>
    				<span> <div class="dicon2"></div> (022) 423 8679</span>
    				<span> <div class="dicon3"></div> info@smapasundan3bandung.sch.id</span>
    			</div>
    			<div class="col-md-4 hijau khusus">
    				<center>
	    				<span>SEKOLAH MENENGAH ATAS</span>
	    				<span>PASUNDAN 3</span>
	    				<span>BANDUNG</span>
    				</center>
    			</div>
    			<div class="col-md-4">
    				<span>&copy; 2016 SMA Pasundan 3 Bandung</span>
    				<span>All Rights Reserved</span>
    				<span>Maintained by Salam IT Solution</span>
    			</div>
    		</div>
    	</div>
    	<div class="tiga"></div>
    </footer>

    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.slides.min.js"></script>


    <script type="text/javascript">
        (function($) {
            var co = $('.slideshow').find('li').length;
            var st = 0;

            var slideshow = function(){
                if(st<co-1)
                    st++;
                else
                    st = 0;
                $('.slideshow').find('li').slideUp('slow', function(){
                    $('.slideshow').find('li').eq(st).slideDown('slow');
                });
                setTimeout(slideshow, 3000);
            }

            slideshow();

            // var hs = $('.head-slider').find('li').length;
            // var ht = 0;

            // var headslide = function(){
            //  if(ht<hs-1)
            //      ht++;
            //  else
            //      ht = 0;
            //  $('.head-slider').find('li').slideUp('slow', function(){
            //      $('.head-slider').find('li').eq(st).slideDown('slow');
            //  });
            //  setTimeout(headslide, 7000);
            // }
            var hi = $(window).height();
            var wi = $(window).width();

            he = wi>hi ? hi:wi;

            // console.log(wi, hi, he);

            // $('header').css('height', he + 'px');
            he -= 45;
            $('header').find('.slider-pane').css('height', he + 'px');
            he -= 45;
            $('header').find('.slider-pane').find('.sliderlabel').css('top', he + 'px');
            // console.log(hi, wi);
            if(hi>wi){
                // $('header').find('.sliderlabel').css('font-size', '10pt');
                // $('header').find('.sliderlabel').css('padding-top', '5px');
            }
            $('.slidesjs-previous, .slidesjs-next').css('top', (he/2) + 'px');

            // headslide();
            $('.head-slider').slidesjs({
                play: {
                    auto: true,
                    interval: 7000,
                    effect: 'slide'
                },
                effect: {
                    slide: {
                        speed: 3000
                    }
                },
                height:1265, 
                width:687,
                navigation: {
                    active: false
                },
                pagination: {
                    active: false
                }
            });


        })(jQuery);
    </script>

<?php wp_footer(); ?> 
  </body>
</html>
