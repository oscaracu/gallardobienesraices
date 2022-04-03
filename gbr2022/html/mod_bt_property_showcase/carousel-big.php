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
<div class="p-3">
<div class="container pt-3">
	<div class="col-lg-10 mx-auto text-center">
    	<h1>Inmuebles recientes</h1>
    	<p class="fs-5">Tenemos una gran variedad de opciones a escoger que se pueden adaptar a sus necesidades, esto es solo una muestra de los más reciente en nuestra cartera de inmuebles.</p>
	</div>
</div>
<div class="container pb-3">
	<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 justify-content-center">
		<?php foreach ($list as $port) : ?>
			<div class="col">
		        <div class="card h-100 overflow-hidden">
	                <div style="position: relative;">
	                    <div class="bg-danger tag"><?php echo Bt_propertyHelper::statusTitle($port->status); ?></div>
    	                <div class="bg-primary price"><?php echo Bt_propertyHelper::formatPrice($port->price); ?></div>
        	            <img src="<?php echo modBtPropertyShowcaseHelper::getItemImage($params, $port); ?>" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body text-center">
	                    <a href="<?php echo JRoute::_(BT_PropertyHelperRoute::getPropertyRoute($port->id . ':' . $port->alias,$port->category_id . ':' . $port->category_alias,$port->status));?>" class="stretched-link">
    	                    <h5 class="card-title "><?php echo $port->title; ?></h5>
                        </a>
                        <p class="card-text"><?php echo $port->address; ?></p>
                     </div>
				</div><!-- Card -->
	    	</div><!-- Col -->
		<?php endforeach; ?>
	</div>
</div>
</div>