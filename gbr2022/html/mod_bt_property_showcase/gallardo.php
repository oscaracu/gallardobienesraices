<?php
/**
 * @package 	mod_bt_media_showcase - BT Media Showcase Module
 * @version		1.0
 * @created		Aug 2013
 * @author		BowThemes
 * @email		support@bowthems.com
 * @website		http://bowthemes.com
 * @support		Forum - http://bowthemes.com/forum/
 * @copyright	Copyright (C) 2012 Bowthemes. All rights reserved.
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */
// no direct access
defined('_JEXEC') or die('Restricted access');
?>
<div class="btp">
	<section id="price-drop" class="block">
		<div class="row">
            <div class="owl-carousel price-drop-carousel">
            <?php foreach ($list as $port) : ?>
				<div class="col-md-12">
					<div class="property">
						<a href="<?php echo JRoute::_(BT_PropertyHelperRoute::getPropertyRoute($port->id . ':' . $port->alias,$port->category_id . ':' . $port->category_alias,$port->status));?>">
							<div class="property-image">
								<img alt="" src="<?php echo modBtPropertyShowcaseHelper::getItemImage($params, $port); ?>">
							</div>
						</a>
					</div><!-- /.property -->
				</div>
            <?php endforeach; ?>
            </div>
		</div>
	</section>
</div>
<script type="text/javascript">
(function($) {
$(".price-drop-carousel").owlCarousel({
	items: 5,
    itemsDesktop: [1700,4],
	responsiveBaseWidth: ".price-drop-carousel",
    autoPlay:<?php echo $params->get('autoPlay','false'); ?>,
    autoHeight : <?php echo $params->get('autoHeight','true'); ?>,	    
    navigation: <?php echo $params->get('navigation','true'); ?>,
    pagination: <?php echo $params->get('pagination','false'); ?>,
    stopOnHover: <?php echo $params->get('stopOnHover','true'); ?>,
    scrollPerPage: <?php echo $params->get('scrollPerPage','false'); ?>,
    slideSpeed: <?php echo $params->get('slideSpeed',200); ?>,
    rewindSpeed: <?php echo $params->get('rewindSpeed',1000); ?>,
    startDragging : function() {
    	$('.owl-carousel .property').css('pointer-events', 'none');
	},
	beforeMove : function() {
		$('.owl-carousel .property').css('pointer-events', 'auto');
	}
});
})(typeof (BTP.fn.owlCarousel) == 'function'?BTP:jQuery);
</script>