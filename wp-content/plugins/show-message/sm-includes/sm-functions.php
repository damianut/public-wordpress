<?php
/**
 * FUNCTIONS OF SHOW MESSAGE PLUGIN
 */

/**
 * Add New Menu To Admin Control Panel
 */
add_action('admin_menu', 'add_Plugin_Link');

function add_Plugin_Link()
{
  add_menu_page(
      'Show Message Page',
      'Show Message Plugin',
      'manage_options',
      'show-message/sm-includes/sm-template-main.php'
  );   
}