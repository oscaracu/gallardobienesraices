<!-- Slider -->
<div id="slider" class="loading btp">
	<div id="loading-icon"><i class="fa fa-cog fa-spin"></i></div>
	<div class="owl-carousel homepage-slider carousel-full-width">
		<?php foreach ($list as $port) : ?>
		    <div class="slide">
		        <div class="container">
                    <div class="overlay">
                        <div class="info">
                            <div class="tag price"><?php echo Bt_propertyHelper::formatPrice($port->price); ?></div>
                            <h3><?php echo $port->title; ?></h3>
                            <figure><?php echo $port->address; ?></figure>
                        </div>
                        <hr>
                        <a href="<?php echo JRoute::_(BT_PropertyHelperRoute::getPropertyRoute($port->id . ':' . $port->alias,$port->category_id . ':' . $port->category_alias,$port->status)); ?>" class="link-arrow">
                        <?php echo JText::_('MOD_BT_PROPERTY_SHOWCASE_READ_MORE');?>
                        </a>
                    </div>
			    </div>
			    <img alt="" src="<?php echo Bt_propertyHelper::getPathImage($port->id, 'original', $port->image, $port->catid);?>">
		    </div>
		<?php endforeach; ?>
	</div>
</div>
<!-- end Slider -->
<script type="text/javascript">
(function ($){
$(".homepage-slider").owlCarousel({
    autoPlay:<?php echo $params->get('autoPlay','false'); ?>,
    autoHeight : <?php echo $params->get('autoHeight','true'); ?>,	    
    navigation: <?php echo $params->get('navigation','false'); ?>,
    pagination: <?php echo $params->get('pagination','false'); ?>,
    stopOnHover: <?php echo $params->get('stopOnHover','true'); ?>,
    scrollPerPage: <?php echo $params->get('scrollPerPage','false'); ?>,
    slideSpeed: <?php echo $params->get('slideSpeed',200); ?>,
    rewindSpeed: <?php echo $params->get('rewindSpeed',1000); ?>,
    transitionStyle : '<?php echo $params->get('transitionStyle','fade'); ?>',
    mouseDrag: false,
    singleItem: true,
    responsiveBaseWidth: ".slide",
    navigationText: ["",""],
    afterInit: sliderLoaded,
    afterAction: animateDescription,
    startDragging: animateDescription
});
function sliderLoaded(){
	$('#slider').removeClass('loading');
    document.getElementById("loading-icon").remove();
}
function animateDescription(){
    var $des = $(".slide .overlay .info");
    $des.addClass('animate-description-out');
    $des.removeClass('animate-description-in');
    setTimeout(function() {
        $des.addClass('animate-description-in');
    }, 400);
}
})(typeof (BTP.fn.owlCarousel) == 'function'?BTP:jQuery);
</script>