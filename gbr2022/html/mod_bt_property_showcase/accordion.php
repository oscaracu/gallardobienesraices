<?php
/**
 * @package 	mod_bt_property_showcase - BT Media Showcase Module
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
JHtml::_('bootstrap.framework');
$first = 1;
?>
<div class="btp">
<div class="panel-group" id="accordion<?php echo $module->id;?>">
	<?php foreach ($list as $port) { ?>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a class="<?php echo $first? '':'collapsed';?>" data-toggle="collapse" data-parent="#accordion<?php echo $module->id;?>" href="#collapseI<?php echo $module->id.$port->id;?>"><?php echo $port->title; ?></a>
			</h4>
		</div>
		<div id="collapseI<?php echo $module->id.$port->id;?>" class="panel-collapse collapse <?php echo $first? 'in':'';?> ">
			<div class="panel-body">
				<a href="<?php echo JRoute::_(BT_PropertyHelperRoute::getPropertyRoute($port->id . ':' . $port->alias,$port->category_id . ':' . $port->category_alias,$port->status)); ?>">
				<img alt="" src="<?php echo modBtPropertyShowcaseHelper::getItemImage($params, $port); ?>">
				</a>
				<div class="description"><?php echo $port->description; ?></div>
				<div class="tag price"><?php echo Bt_propertyHelper::formatPrice($port->price); ?></div>
			</div>
		</div>
	</div>
	<?php
		if($first){	$first = 0;	}
	} ?>
</div>
</div>



