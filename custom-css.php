<?php

/**
 *
 * Flextype ................
 *
 * @author .................
 * @link ....................
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flextype;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;
use Flextype\Component\{Event\Event,Registry\Registry};

//
// Shortcode: [css]your style[/css]
//
Event::addListener('onShortcodesInitialized', function () {
	
    Content::shortcode()->addHandler('css', function(ShortcodeInterface $s) {
		
		Registry::set('css', $s->getContent());

		Event::addListener('onThemeHeader', function () {
			
		   echo'<style>'.Registry::get('css').'</style>';
            
        });
		    	
    });
	
});
