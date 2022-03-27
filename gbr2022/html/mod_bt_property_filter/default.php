<?php
/**
 * @package 	mod_bt_property_filter
 * @version		1.0
 * @created		Apr 2013

 * @author		BowThemes
 * @email		support@bowthems.com
 * @website		http://bowthemes.com
 * @support		Forum - http://bowthemes.com/forum/
 * @copyright	Copyright (C) 2012 Bowthemes. All rights reserved.
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 *
 */
// no direct access
defined('_JEXEC') or die('Restricted access');
$location_levels = JComponentHelper::getParams('com_bt_property')->get('location_levels','3');
$advancedSearch = '';
if($extrafield){
foreach ($extrafield as $id => $extraoption) :
	if (isset($extraoption->checked)) {
		$advancedSearch .= '<div class="form-group">';
		switch ($extraoption->type) {
		case 'dropdown':
			$advancedSearch .= BTPropertyFilterHelper::extrafield_select($params,$extraoption->value, $id);
			break;
		case 'multiple':
			$advancedSearch .= BTPropertyFilterHelper::extrafield_multiple($params,$extraoption->value, $id);
			break;
		case 'radio':
			$advancedSearch .= BTPropertyFilterHelper::extrafield_radio($params,$extraoption->value, $id);
			break;
		case 'checkbox':
			$advancedSearch .= BTPropertyFilterHelper::extrafield_checkbox($params, $extraoption->value,$id);
			break;
		case 'select':
			$advancedSearch .= BTPropertyFilterHelper::extrafield_measure($params, $extraoption->value, $id);
			break;
		case 'texrange':
			$advancedSearch .= BTPropertyFilterHelper::extrafield_textrange($params, $extraoption->value,$id);
			break;
		case 'checkboxlist':
			$advancedSearch .= BTPropertyFilterHelper::extrafield_checkboxlist($params, $id);
			break;
		case'textbox':				
			$advancedSearch .= BTPropertyFilterHelper::extrafield_textbox($params,$extraoption->value,$id);		
			break;
		}
		$advancedSearch .= '</div>';
	}
endforeach;
}
?>
<div class="btp bt-propertyfilter<?php echo $moduleclass_sfx; ?>">
	<form role="form" id="form-map" class="form-map form-search" action="<?php echo JRoute::_(BT_PropertyHelperRoute::getCategoryRoute(0)); ?>"
		name="BTFilter" method="get">
		<input type="hidden" name="task" value="filter" />
		<input type="hidden" name="option" value="com_bt_property" />
		<input type="hidden" name="view" value="properties" />
		<?php if ($showsearchbox == 1) { ?>
		<div class="form-group">
			<?php echo BTPropertyFilterHelper::input_text($params, $keysearch); ?>
		</div>
		<?php } ?>
		<?php if ($showstatus == 1) { ?>
		<div class="form-group">
			<?php echo BTPropertyFilterHelper::itemselect($params, 'prstatus'); ?>
		</div>
		<?php } ?>

		<?php if ($showlocation == 1) { ?>
			<div class="form-group">
				<?php echo BTPropertyFilterHelper::itemselect($params, 'location_lv1'); ?>
			</div>
			<?php if($location_levels > 1 ) { ?>
			<div class="form-group">
				<?php echo BTPropertyFilterHelper::itemselect($params, 'location_lv2'); ?>
			</div>
			<?php }?>
			<?php if($location_levels > 2 ) { ?>
			<div class="form-group">
				<?php echo BTPropertyFilterHelper::itemselect($params, 'location_lv3'); ?>
			</div>
			<?php }?>
		<?php } ?>

		<?php
		if ($showcategory == 1) {
			if ($params->get('category', '')) {
				echo '<input type="hidden" name="category_select" value="' . $params->get('category') . '"/>';
			} else {
				?>

				<div class="form-group">
					<?php echo BTPropertyFilterHelper::categoryselect($params); ?>
				</div>
			<?php }
		}?>
		<?php if ($showprice) { ?>
		<div class="form-group">
			<?php echo BTPropertyFilterHelper::priceRange($params); ?>
		</div>
		<?php } ?>
		<?php if ($advancedSearch) { ?>
			<div class="form-group">
				<h4><a onclick="jQuery('#advanced-search').slideToggle();return false;" href="#"><?php echo JText::_('FILTER_ADVANCED_SEARCH');?></a></h4>
				<div style="display:none" id="advanced-search">
					<?php echo $advancedSearch ?>
				</div>
			</div>
		<?php } ?>
		<div class="filter-description">
			<?php
			echo $descr;
			?>
		</div>

		<div class="filter-button">
			<input type="hidden" name="method" value="<?php echo $method ?>" />
			<input type="submit" value="<?php echo $buttontext; ?>" class="btn btn-default" />
			<?php if ($Itemid)
				echo '<input type="hidden" name="Itemid" value="' . $Itemid . '" />';
			?>
		</div>
	</form>
</div>

