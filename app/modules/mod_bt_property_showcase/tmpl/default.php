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
<?php foreach ($list as $port) { 
	$link = JRoute::_(BT_PropertyHelperRoute::getPropertyRoute($port->id . ':' . $port->alias,$port->category_id . ':' . $port->category_alias));
	$icon = $port->category_image ? JURI::base() . $port->category_image : '';
?>
<div class="property small btp">
	<a href="<?php echo $link; ?>">
		<div class="property-image">
			<img alt="" src="<?php echo modBtPropertyShowcaseHelper::getItemImage($params, $port); ?>">
			<!--
			<?php if ($port->ribbon) { ?>
			<figure class="ribbon">
				<?php echo $port->ribbon; ?>
			</figure>
			<?php } ?>

			<?php if ($icon && !$port->ribbon) { ?>
			<figure class="type" title="<?php echo $port->category_title; ?>">
				<img alt="<?php echo $port->category_title; ?>" src="<?php echo $icon ?>" />
			</figure>
			<?php } ?>
			-->
		</div>
	</a>
	<div class="info">
		<a href="<?php echo $link; ?>">
			<h4><?php echo $port->title; ?></h4>
		</a>
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
		<figure><?php echo $port->address; ?></figure>
		<div class="tag price"><?php echo Bt_propertyHelper::formatPrice($port->price, $port->price_time,$port->currency); ?></div>

	</div>
</div><!-- /.property -->
<?php } ?>


