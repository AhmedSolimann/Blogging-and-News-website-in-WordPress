<div class="wrap">
    <h2>RevenueHits Official WP Plugin</h2>

    <div>This plugin is automatically injected the ads, which you choose.</div>

    <form method="post" action="options.php">
        <?php settings_fields('revenuehits_settings'); ?>
        <?php do_settings_sections('revenuehits_settings'); ?>
        <table class="form-table">

        <tr valign="top">
            <th scope="row">Active?</th>
            <td id="front-static-pages">
                <p>
                    <label><input name="revenuehits_show" type="radio" value="1" class="revenuehits_show"  <?php if (!get_option('revenuehits_show') || get_option('revenuehits_show') == 1): ?>checked="checked"<?php endif; ?>>On</label>
                </p>
                <p>
                    <label><input name="revenuehits_show" type="radio" value="2" class="revenuehits_show" <?php if (get_option('revenuehits_show') == 2): ?>checked="checked"<?php endif; ?>>Off</label>
                </p>
            </td>
        </tr>

        <tr valign="top" class="revenue-box <?php if (get_option('revenuehits_show') == 2): ?>hide-box<?php endif; ?>">
            <th scope="row">Username</th>
            <td><input type="text" name="revenuehits_userid" value="<?php echo esc_attr( get_option('revenuehits_userid') ); ?>" /></td>
        </tr>
        <tr valign="top" class="revenue-box <?php if (get_option('revenuehits_show') == 2): ?>hide-box<?php endif; ?>">
            <th scope="row">Password</th>
            <td>
                <input type="password" name="revenuehits_password" />
                <p class="description">Please type your RevenueHits publisher account password</p>
            </td>
        </tr>

        <tr valign="top" class="revenue-box <?php if (get_option('revenuehits_show') == 2): ?>hide-box<?php endif; ?>">
            <th scope="row">Excluded pages</th>
            <td>
                <textarea id="excluded-pages" class="example" style="width: 400px;" name="revenuehits_exclude_pages" rows="1"></textarea>
                <span class="error-exclude-page description">Page is already exluded!</span>
                <p class="description">Start print name of page,on which does not display the code</p>
            </td>
        </tr>

         <tr valign="top" class="revenue-box <?php if (get_option('revenuehits_show') == 2): ?>hide-box<?php endif; ?>">
            <th scope="row">Show in</th>
            <td>
                <p><label for="revenuehits_homepage">
                <input name="revenuehits_homepage" type="checkbox" id="revenuehits_homepage" <?php if (get_option('revenuehits_homepage')): ?>checked="checked"<?php endif; ?>>
                Home page</label></p>
                <p><label for="revenuehits_categories">
                <input name="revenuehits_categories" type="checkbox" id="revenuehits_categories" <?php if (get_option('revenuehits_categories')): ?>checked="checked"<?php endif; ?>>
                Categories</label></p>
                <p><label for="revenuehits_posts">
                <input name="revenuehits_posts" type="checkbox" id="revenuehits_posts" <?php if (get_option('revenuehits_posts')): ?>checked="checked"<?php endif; ?>>
                Posts</label></p>
                <p><label for="revenuehits_other">
                <input name="revenuehits_other" type="checkbox" id="revenuehits_other" <?php if (get_option('revenuehits_other')): ?>checked="checked"<?php endif; ?>>
                Other pages</label></p>
            </td>
        </tr>

        <tr valign="top" class="revenue-box <?php if (get_option('revenuehits_show') == 2): ?>hide-box<?php endif; ?>">
            <th scope="row">Ad types</th>
            <td>
                <p><label for="position-footer">
                <input name="revenuehits_position_footer" type="checkbox" id="position-footer" <?php if (get_option('revenuehits_position_footer')): ?>checked="checked"<?php endif; ?>>
                Footer</label></p>
                <p><label for="position-pop">
                <input name="revenuehits_position_popup" type="checkbox" id="position-pop" <?php if (get_option('revenuehits_position_popup')): ?>checked="checked"<?php endif; ?>>
                Pop Under</label></p>
                <p><label for="position-dialog">
                <input name="revenuehits_position_dialog"  class="check" type="checkbox" id="position-dialog" <?php if (get_option('revenuehits_position_dialog')): ?>checked="checked"<?php endif; ?>>
                Mobile Dialog</label></p>
                <p><label for="position-notifier">
                <input name="revenuehits_position_notifier" class="check" type="checkbox" id="position-notifier" <?php if (get_option('revenuehits_position_notifier')): ?>checked="checked"<?php endif; ?>>
                Mobile Notifier</label></p>
                <p><label for="position-shadow-box">
                <input name="revenuehits_position_shadow_box" type="checkbox" id="position-shadow-box" <?php if (get_option('revenuehits_position_shadow_box')): ?>checked="checked"<?php endif; ?>>
                Shadow Box</label></p>
                <p><label for="position-interstitial">
                <input name="revenuehits_position_interstitial" type="checkbox" id="position-interstitial" <?php if (get_option('revenuehits_position_interstitial')): ?>checked="checked"<?php endif; ?>>
                Interstitial</label></p>
                <p><label for="position-topbanner">
                <input name="revenuehits_position_topbanner" type="checkbox" id="position-topbanner" <?php if (get_option('revenuehits_position_topbanner')): ?>checked="checked"<?php endif; ?>>
                Top Banner</label></p>
                <p><label for="position-float">
                <input name="revenuehits_position_float" type="checkbox" id="position-float" <?php if (get_option('revenuehits_position_float')): ?>checked="checked"<?php endif; ?>>
                Floating Banner</label></p>
            </td>
        </tr>

        </table>

        <input type="hidden" name="action" value="update" />

        <?php submit_button(); ?>
    </form>
</div>
