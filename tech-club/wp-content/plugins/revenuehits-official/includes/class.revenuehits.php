<?php

class Revenuehits {
    
    protected $version = "5";
    protected $plugin_slug = "revenuehits";
    
    public function init()
    {
        global $post;
        
        $show = false;
        $excluded = false;
        
        $excludedPages = json_decode(get_option('revenuehits_exclude_pages'), true);
        
        if ($excludedPages) {
            foreach($excludedPages as $item) {
                if(isset($post->ID) && $item['id'] == $post->ID) {
                    $excluded = true;
                }
            }
        }
        
        if((is_home() || is_front_page()) && get_option('revenuehits_homepage')) {
            $show = true;
        } elseif (is_category() && get_option('revenuehits_categories')) {
            $show = true;
        } elseif (is_single() && get_option('revenuehits_posts')) {
            $show = true;
        } elseif (!is_home() && !is_front_page() && !is_category() && !is_single() && get_option('revenuehits_other')) {
            $show = true;
        }
        
        if(get_option('revenuehits_show') != 2 && get_option('revenuehits_userid') && $show && !$excluded) {
            add_filter('wp_footer', array('Revenuehits', 'insertAd'));            
        }
    }
    
    public function insertAd()
    {
        $userId = get_option('revenuehits_userid');
        
        if(get_option('revenuehits_position_footer')) {
            if (get_option('revenuehits_script_footer') && get_option('revenuehits_script_footer') != 'Failed') {
               print get_option('revenuehits_script_footer');
            } else {                
               print '<script type="text/javascript" src="http://clkrev.com/adServe/banners?tid='."$userId-FOOTER".'&pid='.$userId.'&type=footer&size=728x90&device=ALL"></script>';
            }
        }
        
        if(get_option('revenuehits_position_popup')) {
            if(get_option('revenuehits_script_popup') && get_option('revenuehits_script_popup') != 'Failed') {
               print get_option('revenuehits_script_popup');
            } else {
               print '<script type="text/javascript" src="http://clkrev.com/adServe/banners?tid='."$userId-POPUNDER".'&pid='.$userId.'&tagid=2&type=POPUNDER&device=ALL"></script>';
            }
        }
        
        if(get_option('revenuehits_position_dialog')) {
            if (get_option('revenuehits_script_dialog') && get_option('revenuehits_script_dialog') != 'Failed') {
               print get_option('revenuehits_script_dialog');
            }  else {                
               print '<script type="text/javascript" src="http://clkrev.com/adServe/banners?tid='."$userId-MOB-DIA".'&pid='.$userId.'&type=MOBILE_DIALOG&device=ALL"></script>';
            }
        }
        
        if(get_option('revenuehits_position_notifier')) {
            if (get_option('revenuehits_script_notifier') && get_option('revenuehits_script_notifier') != 'Failed') {
               print get_option('revenuehits_script_notifier');
            } else {
               print '<script type="text/javascript" src="http://clkrev.com/adServe/banners?tid='."$userId-MOB-NOT".'&pid='.$userId.'&type=MOBILE_NOTIFIER&device=ALL"></script>';
            }
        }
        
        if(get_option('revenuehits_position_shadow_box')) {
            if (get_option('revenuehits_script_shadow_box') && get_option('revenuehits_script_shadow_box') != 'Failed') {
               print get_option('revenuehits_script_shadow_box');
            } else {
               print '<script type="text/javascript" src="http://clkrev.com/adServe/banners?tid='."$userId-SHADOWBOX".'&pid='.$userId.'&type=shadowbox&size=480x320&device=ALL"></script>';
            }
        }
        
        if(get_option('revenuehits_position_interstitial')) {
            if (get_option('revenuehits_script_interstitial') && get_option('revenuehits_script_interstitial') != 'Failed') {
               print get_option('revenuehits_script_interstitial');
            } else {
               print '<script type="text/javascript" src="http://clkrev.com/adServe/banners?pid='.$userId.'&tagid=1&type=BANNER&size=728x90&device=ALL"></script>';
            }
        }
        
        if(get_option('revenuehits_position_topbanner')) {
            if (get_option('revenuehits_script_topbanner') && get_option('revenuehits_script_topbanner') != 'Failed') {
               print get_option('revenuehits_script_topbanner');
            } else {
               print '<script type="text/javascript" src="http://clkrev.com/adServe/banners?pid='.$userId.'&type=TOP_BANNER_DEFAULT&device=ALL"></script>';
            }
        }
        
         if(get_option('revenuehits_position_float')) {
            if (get_option('revenuehits_script_float') && get_option('revenuehits_script_float') != 'Failed') {
               print get_option('revenuehits_script_float');
            } else {
               print '<script type="text/javascript" src="http://clkrev.com/adServe/banners?pid='.$userId.'&type=FLOATING_BANNER&size=130x130&device=ALL"></script>';
            }
        }
    }
}


    
    
