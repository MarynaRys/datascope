<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<div class="row footer">
    <div class="col-sm-1"></div>
    <div class=" recent col-sm-2 col-xs-2">
        <h3>Recent Projects</h3>
		<?php $args = array(
			'category_name' => 'our_cases',
			'post_type'     => 'post',
			'post_status'   => 'publish',
			'numberposts'   => 3
		);
		$my_posts   = get_posts( $args );
		$exclude_id = 0;
		if ( $my_posts ) :
			foreach ( $my_posts as $post ):
				?>
                <a class="hidden-xs" href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a>
				<?php
			endforeach;
		endif;
		?>
    </div>
    <div class="product col-sm-2 col-xs-2">
        <h3>Products</h3>
	    <?php $args = array(
		    'category_name' => 'our_products',
		    'post_type'     => 'post',
		    'post_status'   => 'publish',
		    'numberposts'   => 4
	    );
	    $my_posts   = get_posts( $args );
	    $exclude_id = 0;
	    if ( $my_posts ) :
		    foreach ( $my_posts as $post ):
			    ?>
                <a class="hidden-xs" href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a>
			    <?php
		    endforeach;
	    endif;
	    ?>
    </div>
    <div class="col-sm-2 col-xs-2 hidden-xs">
        <h3>Contact Us</h3>
        <a href="tel:0845 450 7387">0845 450 7387</a>
        <a href="mailto:info@DataScopeplc.com">info@DataScopeplc.com</a>
        <a href="mailto:sales@DataScopeplc.com">sales@DataScopeplc.com</a>
        <a href="mailto:helpdesk@DataScopeplc.com">helpdesk@DataScopeplc.com</a>
    </div>
    <div class="about col-sm-2 col-xs-2">
        <h3>About Us</h3>
	    <?php $args = array(
		    'category_name' => 'who_we_are',
		    'post_type'     => 'post',
		    'post_status'   => 'publish',
		    'numberposts'   => 2
	    );
	    $my_posts   = get_posts( $args );
	    $exclude_id = 0;
	    if ( $my_posts ) :
		    foreach ( $my_posts as $post ):
			    ?>
                <a class="hidden-xs" href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a>
			    <?php
		    endforeach;
	    endif;
	    ?>
    </div>
    <div class="col-sm-3 col-xs-5 footerSign">
        <a href="#">Sign In</a>
        <a href="#">Contact us</a>
        <p class="hidden-xs">Property of DataScope © 2017</p>
        <p class="hidden-xs">Website by <a href="http://lif.org.ua" target="_blank">LIF</a></p>
    </div>
    <div class="col-xs-4 visible-xs hidden-sm hidden-md hidden-lg">
        <a href="tel:0845 450 7387">0845 450 7387</a>
        <a href="mailto:info@DataScopeplc.com">info@DataScopeplc.com</a>
    </div>
    <div class="col-xs-4 visible-xs hidden-sm hidden-md hidden-lg">
        <a href="mailto:sales@DataScopeplc.com">sales@DataScopeplc.com</a>
        <a href="mailto:helpdesk@DataScopeplc.com">helpdesk@DataScopeplc.com</a>
    </div>
    <div class="col-xs-4 visible-xs hidden-sm hidden-md hidden-lg"></div>
    <div class="col-xs-9 visible-xs hidden-sm hidden-md hidden-lg property ">
        <p>Property of DataScope © 2017</p>
    </div>
    <div class="col-xs-3 visible-xs hidden-sm hidden-md hidden-lg website">
        <p>Website by <a href="http://lif.org.ua" target="_blank">LIF</a></p>
    </div>
</div>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="/wp-content/themes/datascope/dist/js/bootstrap.min.js"></script>
<script src="/wp-content/themes/datascope/dist/js/jquery.matchHeight.js" type="text/javascript"></script>
<script src="/wp-content/themes/datascope/slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    $(document).ready(function () {
    
        $('.rowtable .colTable').matchHeight({
            byRow: true,
            property: 'height',
            target: null,
            remove: false
        });

        $('.rowtable2 .textonpic').matchHeight({
            byRow: true,
            property: 'height',
            target: null,
            remove: false
        });
        $('.british .rowtable .textonpic').matchHeight({
            byRow: true,
            property: 'height',
            target: null,
            remove: false
        });
        $('.header_col_num .col-sm-2').matchHeight({
            byRow: true,
            property: 'height',
            target: null,
            remove: false
        });
        $('.why_num .col-sm-2').matchHeight({
            byRow: true,
            property: 'height',
            target: null,
            remove: false
        });
        $('.row .col-sm-2').matchHeight({
                byRow: true,
                property: 'height',
                target: null,
                remove: false
            });
        $('.NumList li').click(function(){
            $('.NumList li.active').removeClass('active');
            $(this).addClass('active');
        });
        $('.slick').slick({
            prevArrow: '',
            nextArrow: '',
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                    
                },
                {
                    breakpoint: 451,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }

                }
            ]
        });
        $('.slick2').slick({
            prevArrow: '',
            nextArrow: '',
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 451,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }

                }
            ]
        });
        $('.slick3').slick({
            prevArrow: '',
            nextArrow: '',
            slidesToShow: 1,
            slidesToScroll: 0,
            infinite: false,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 451,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }

                }
            ]
        });
        $('.slick4').slick({
            prevArrow: '',
            nextArrow: '',
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: false,
            responsive: [
                {
                    breakpoint: 451,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }

                }
            ]
        });
        $('.logoPadding ul.pinktab li').click(function(){
            $('.logoPadding ul.pinktab li.active').removeClass('active');
            $(this).addClass('active');
            $('.slick4').slick('slickGoTo',$('.logoPadding ul.pinktab li').index($(this)));
        });
        if ($(window).width() > 768){
            $('.rowheight .firstlevel').matchHeight({
                byRow: true,
                property: 'height',
                target: null,
                remove: false
            });
            $('.rowheight .secondlevel').matchHeight({
                byRow: true,
                property: 'height',
                target: null,
                remove: false
            });
        } else {
            $('.row .col-xs-6').matchHeight({
                byRow: true,
                property: 'height',
                target: null,
                remove: false
            });
            $('.rowtable .colTable').matchHeight({
                byRow: true,
                property: 'height',
                target: null,
                remove: false
            });
            $('.slick .slick-slide').matchHeight({
                byRow: true,
                property: 'height',
                target: null,
                remove: false
            });
        }

        $('.navbar-toggle').click(function(){
            if ($('.topheigh').hasClass('active')) {
                $('.topheigh').removeClass('active');
            } else {
                $('.topheigh').addClass('active');
            }
        });
    });
    $(window).load(function(){
        if ($(window).width() > 768){
            $('.rowheight .firstlevel').matchHeight({
                byRow: true,
                property: 'height',
                target: null,
                remove: false
            });
            $('.rowheight .secondlevel').matchHeight({
                byRow: true,
                property: 'height',
                target: null,
                remove: false
            });
        } else {
            $('.row .col-xs-6').matchHeight({
                byRow: true,
                property: 'height',
                target: null,
                remove: false
            });
            $('.rowtable .colTable').matchHeight({
                byRow: true,
                property: 'height',
                target: null,
                remove: false
            });
            $('.slick .slick-slide').matchHeight({
                byRow: true,
                property: 'height',
                target: null,
                remove: false
            });
        }
    });
    $(window).resize(function(e){
        $('.row .col-sm-2').matchHeight({
                byRow: true,
                property: 'height',
                target: null,
                remove: false
            });
        if ($(window).width() > 768){
            $('.rowheight .firstlevel').matchHeight({
                byRow: true,
                property: 'height',
                target: null,
                remove: false
            });
            $('.rowheight .secondlevel').matchHeight({
                byRow: true,
                property: 'height',
                target: null,
                remove: false
            });
        } else {
            $('.row .col-xs-6').matchHeight({
                byRow: true,
                property: 'height',
                target: null,
                remove: false
            });
        }
    });
</script>
<?php wp_footer(); ?>
</body>
</html>