<?php
/**
 * FUNCTIONS OF TEST PLUGIN
 */

 
/**
 * Add My New Menu to the Admin Control Panel.
 */

// Hook the 'admin_menu' action hook, run the function named 'tepl_Add_My_Admin_Link()'
add_action('admin_menu', 'tepl_Add_My_Admin_Link');

//A New Top Level Menu to the Admin Control Panel.
function tepl_Add_My_Admin_Link()
{
  add_menu_page(
      'My First Page', // Title of the page
      'My First Plugin', // Text to show on the menu link
      'manage_options', // Capability requirement to see the link
      'test-plugin/tepl-includes/tepl-first-acp-page.php' // The 'slug' - file to display when clicking the link
  );
}