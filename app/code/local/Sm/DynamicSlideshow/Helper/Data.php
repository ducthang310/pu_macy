<?php
/*------------------------------------------------------------------------
 # SM Dynamic Slideshow - Version 1.0.0
 # Copyright (c) 2013 YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

class Sm_DynamicSlideshow_Helper_Data extends Mage_Core_Helper_Abstract {
	public function __construct(){
		$this->defaults = array(
			/* General setting */
			'isenabled'		=> '1',
			'title' 		=> 'SM Dynamic Slideshow',
			/* product query */
			'button_style'  => 'round',
			'pause'         => '1',
			'interval'      => '3000',
			'slider1'		=> '<li data-transition="fade" data-slotamount="10" data-thumb="images/thumbs/thumb1.jpg">
								<img src="images/slides/thumb1.jpg" />
                                <div class="caption lft" data-x="0" data-y="10" data-speed="900" data-start="900" data-easing="easeOutExpo"><img src="images/slides/glare.png" /></div>
                                <div class="caption lfl" data-x="0" data-y="10" data-speed="900" data-start="1300" data-easing="easeOutBack"><img src="images/slides/dude2.png" /></div>
								<div class="caption lft big_white" data-x="400" data-y="100" data-speed="400" data-start="1700" data-easing="easeOutExpo">Kickstart Your Website</div>
								<div class="caption lft big_orange" data-x="400" data-y="137" data-speed="400" data-start="1900" data-easing="easeOutExpo"><span style="font-weight:normal;">With</span><em> Slider Revolution</em></div>
								<div class="caption lfr medium_grey" data-x="510" data-y="210" data-speed="300" data-start="2500" data-easing="easeOutExpo">Unlimited Transitions</div>
                                <div class="caption sfl" data-x="510" data-y="250" data-speed="300" data-start="2600" data-easing="easeOutExpo"><img src="images/thumbs/check.png" /></div>
                                <div class="caption lfr small_text" data-x="560" data-y="248" data-speed="300" data-start="2600" data-easing="easeOutExpo">Sliding, Fading, Slots, Box Transitions<br />
								<span style="color: #ffe400;">SLIDER REVOLUTION</span> has it all!</div>
								<div class="caption sfl" data-x="510" data-y="300" data-speed="300" data-start="2900" data-easing="easeOutExpo"><img src="images/thumbs/check.png" /></div>
                                <div class="caption lfr small_text" data-x="560" data-y="307" data-speed="300" data-start="2900" data-easing="easeOutExpo">Responsive & Mobile Optimized</div>
                                <div class="caption sfl" data-x="510" data-y="350" data-speed="300" data-start="3200" data-easing="easeOutExpo"><img src="images/thumbs/check.png" /></div>
                                <div class="caption lfr small_text" data-x="560" data-y="348" data-speed="300" data-start="3200" data-easing="easeOutExpo">Customizable Navigation<br />Arrows, Bullets, Thumbs</div>
								</li>',
			'slider2'		=> '<li data-transition="slideup" data-slotamount="7" data-thumb="images/thumbs/thumb2.jpg">
								<img src="images/slides/thumb2.jpg" />
                                <div class="caption sfb" data-x="0" data-y="10" data-speed="900" data-start="900" data-easing="easeOutSine"><img src="images/slides/glare2.png" /></div>
                                <div class="caption lft" data-x="250" data-y="50" data-speed="900" data-start="1700" data-easing="easeOutBack"><img src="images/slides/strawberries.png" /></div>
                                <div class="caption lfb big_white" data-x="120" data-y="330" data-speed="600" data-start="1800" data-easing="easeOutExpo">Strawberries are like a glimpse of summer.</div>
								</li>',
			'slider3'		=> '<li data-transition="slideright" data-slotamount="6" data-thumb="images/thumbs/thumb3.jpg">
								<img src="images/slides/thumb3.jpg" />
                                <div class="caption sfb" data-x="0" data-y="50" data-speed="900" data-start="900" data-easing="easeOutSine"><img src="images/slides/space.jpg" /></div>
                                <div class="caption lft boxshadow" data-x="200" data-y="80" data-speed="900" data-start="1300" data-easing="easeOutExpo"><iframe src="http://player.vimeo.com/video/32001208?title=0&amp;byline=0&amp;portrait=0" width="460" height="259"></iframe></div>
                                <div class="caption lfb small_text" data-x="335" data-y="358" data-speed="300" data-start="1600" data-easing="easeOutExpo">Just an awesome Vimeo Video</div>
								</li>',
			'slider4'		=> '<li data-transition="slideup" data-slotamount="15" data-thumb="images/thumbs/thumb4.jpg">
								<img src="images/slides/wideimage.jpg" />
                                <div class="caption lfl" data-x="100" data-y="80" data-speed="300" data-start="900" data-easing="easeOutExpo"><img src="images/slides/badge.png" /></div>
                                <div class="caption lfr very_big_white" data-x="500" data-y="100" data-speed="300" data-start="1200" data-easing="easeOutExpo">GET THE</div>
                                <div class="caption lfr very_big_white" data-x="500" data-y="160" data-speed="300" data-start="1300" data-easing="easeOutExpo">PARTY</div>
                                <div class="caption lfr very_big_white" data-x="500" data-y="220" data-speed="300" data-start="1400" data-easing="easeOutExpo">STARTED</div>
                                <div class="caption lfb big_white" data-x="500" data-y="300" data-speed="300" data-start="1500" data-easing="easeOutExpo"><a href="#">SIGN UP HERE</a></div>
								</li>',
			'slider5'		=> '<li data-transition="slideleft" data-slotamount="15" data-thumb="images/thumbs/thumb5.jpg">
								<img src="images/slides/wideimage2.jpg" />
                                <div class="caption lft very_large_text" data-x="50" data-y="160" data-speed="300" data-start="1200" data-easing="easeOutExpo">BUTTON STYLES INCLUDED!</div>
                                <div class="caption sfb" data-x="50" data-y="250" data-speed="1000" data-start="1500" data-easing="easeOutBack"><a href="#" target="_blank" class="button red small">Red Button</a></div>
                                <div class="caption sfb" data-x="170" data-y="250" data-speed="1000" data-start="1600" data-easing="easeOutBack"><a href="#" target="_blank" class="button orange small">Orange Button</a></div>
                                <div class="caption sfb" data-x="315" data-y="250" data-speed="1000" data-start="1700" data-easing="easeOutBack"><a href="#" target="_blank" class="button green small">Green Button</a></div>
                                <div class="caption sfb" data-x="450" data-y="250" data-speed="1000" data-start="1800" data-easing="easeOutBack"><a href="#" target="_blank" class="button blue small">Blue Button</a></div>
                                <div class="caption sfb" data-x="570" data-y="250" data-speed="1000" data-start="1900" data-easing="easeOutBack"><a href="#" target="_blank" class="button lightgrey small">Light Button</a></div>
                                <div class="caption sfb" data-x="700" data-y="250" data-speed="1000" data-start="2000" data-easing="easeOutBack"><a href="#" target="_blank" class="button darkgrey small">Dark Button</a></div>
								</li>',
			'slider6'		=> '',
			'slider7'		=> '',
			'slider8'		=> '',
			'slider9'		=> '',
			'slider10'		=> '',
			/*advanced*/
			'include_jquery'	=> '1',
			'pretext'			=> '',
			'posttext'			=> ''
		);
	}

	function get($attributes=array())
	{
		$data = $this->defaults;
		$general 					= Mage::getStoreConfig("dynamicslideshow_cfg/general");
		$product_selection 			= Mage::getStoreConfig("dynamicslideshow_cfg/product_selection");
		$module_setting 			= Mage::getStoreConfig("dynamicslideshow_cfg/module_setting");
		$advanced 					= Mage::getStoreConfig("dynamicslideshow_cfg/advanced");
		if (!is_array($attributes)) {
			$attributes = array($attributes);
		}
		if (is_array($general))					$data = array_merge($data, $general);
		if (is_array($product_selection)) 		$data = array_merge($data, $product_selection);
		if (is_array($module_setting)) 		    $data = array_merge($data, $module_setting);
		if (is_array($advanced)) 				$data = array_merge($data, $advanced);

		return array_merge($data, $attributes);;
	}
}
?>