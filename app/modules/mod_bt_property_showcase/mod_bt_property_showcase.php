<?php
/**
 * @package 	mod_bt_property_showcase - BT Property Showcase Module
 * @version		1.0.0
 * @created		Jun 2014
 * @author		BowThemes
 * @email		support@bowthems.com
 * @website		http://bowthemes.com
 * @support		Forum - http://bowthemes.com/forum/
 * @copyright	Copyright (C) 2014 Bowthemes. All rights reserved.
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

// Include the latest functions only once
JFactory::getLanguage()->load('com_bt_property',JPATH_SITE,JFactory::getLanguage()->getTag(),true);
JLoader::register('modBtPropertyShowcaseHelper', dirname(__FILE__).'/helper/helper.php');
modBtPropertyShowcaseHelper::addModuleScript($params);
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
$list = modBtPropertyShowcaseHelper::getItems($params);
$layout = $params->get('layout');
require JModuleHelper::getLayoutPath('mod_bt_property_showcase',$layout);
