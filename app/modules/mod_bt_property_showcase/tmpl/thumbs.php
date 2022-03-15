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
foreach($list as $port){
$link = JRoute::_(BT_PropertyHelperRoute::getPropertyRoute($port->id . ':' . $port->alias,$port->category_id . ':' . $port->category_alias,$port->status));
$thumb = Bt_propertyHelper::getPathImage($port->id, 'thumb', $port->image, $port->catid);
?>
<div class="property-thumbnail">
	<a href="<?php echo $link?>">
		<img src="<?php echo $thumb?>">
	</a>
</div>
<?php
}


