<?php
/**
 Plugin Name:       Fix Lastpass Password Field
 Plugin URI:        https://francismaile.com/stuff/plugins/fix-lastpass
 Description:       Fix the positioning of the LastPass form fill button in the password field.
 Version:           0.1b
 Requires at least: 5.2
 Requires PHP:      7.2
 Author:            Francis Maile
 Author URI:        https://francismaile.com/about
 License:           GPL v2 or later
 License URI:       https://www.gnu.org/licenses/gpl-2.0.html

Fix-Lastpass is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Fix-Lastpass is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Fix-Lastpass. If not, see: https://www.gnu.org/licenses/gpl-2.0.html.
*/

// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) { exit; }


// Custom CSS that moves the show password button to make space for the LastPass fill field button
// I'm doing it this way, rather than an external stylesheet, because later I will make this configurable.
function fix_lastpass_fill_button_postion() {
?>
<style type="text/css">
@media screen
  and (min-device-width: 1200px)
  and (max-device-width: 1600px)
  and (-webkit-min-device-pixel-ratio: 1) {
		body.login div#login form#loginform div.wp-pwd .button.wp-hide-pw {
			right: 1.25rem;
		}
}

/* ----------- Retina Screens ----------- */
@media screen
  and (min-device-width: 1200px)
  and (max-device-width: 1600px)
  and (-webkit-min-device-pixel-ratio: 2)
  and (min-resolution: 192dpi) {
		body.login div#login form#loginform div.wp-pwd .button.wp-hide-pw {
			right: 1.25rem;
		}
}
</style>
<?php
}

//This loads the function above on the login page
add_action( 'login_enqueue_scripts', 'fix_lastpass_fill_button_postion' );
