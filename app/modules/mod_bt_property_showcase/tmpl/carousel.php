<?php
/**
 * @package 	mod_bt_property_showcase - BT Media Showcase Module
 * @version		1.0
 * @created		Aug 2014
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
<div class="owl-carousel-wrapper btp">
<div id="owl-carousel<?php echo $module->id ?>" class="owl-carousel">
<?php foreach ($list as $port) : ?>
 <div class="property">
	<a href="<?php echo JRoute::_(BT_PropertyHelperRoute::getPropertyRoute($port->id . ':' . $port->alias,$port->category_id . ':' . $port->category_alias,$port->status)); ?>">
		<div class="property-image">
			<img alt="" src="<?php echo modBtPropertyShowcaseHelper::getItemImage($params, $port); ?>">
		</div>
		<div class="overlay">
			<div class="info">
				<div class="tag price"><?php echo Bt_propertyHelper::formatPrice($port->price, $port->price_time,$port->currency); ?></div>
				<h3><?php echo $port->title; ?></h3>
				<figure><?php echo $port->address; ?></figure>
			</div>
			<?php if($params->get('show_ex', 1)){?>
			<ul class="additional-info">
				<?php
				foreach ($port->extra_fields as $ex) {
					if ($params->get('show_ex', 1) != 'featured_only' || $ex->featured) {
						?>
						<li>
							<span><?php echo JText::_($ex->name); ?>:</span><?php echo Bt_propertyHelper::extrafieldHTML($ex); ?>
						</li>
					<?php }
				}?>
			</ul>
			<?php }?>
		</div>
	</a>
</div><!-- /.property -->
	<?php endforeach; ?>
</div>
</div>
<script type="text/javascript">
(function($){
$("#owl-carousel<?php echo $module->id ?>").owlCarousel({
	items : 3, 
	itemsDesktop : [1000,3], 
	itemsDesktopSmall : [900,2], 
	itemsTablet: [600,1], 
	itemsMobile : false, 
	autoPlay:<?php echo $params->get('autoPlay','false'); ?>,
    autoHeight : <?php echo $params->get('autoHeight','true'); ?>,	    
    navigation: <?php echo $params->get('navigation','false'); ?>,
    pagination: <?php echo $params->get('pagination','false'); ?>,
    stopOnHover: <?php echo $params->get('stopOnHover','true'); ?>,
    scrollPerPage: <?php echo $params->get('scrollPerPage','false'); ?>,
    slideSpeed: <?php echo $params->get('slideSpeed',200); ?>,
    rewindSpeed: <?php echo $params->get('rewindSpeed',1000); ?>,
    transitionStyle : '<?php echo $params->get('transitionStyle','fade'); ?>'
});
})(typeof (BTP.fn.owlCarousel) == 'function'?BTP:jQuery);
</script>