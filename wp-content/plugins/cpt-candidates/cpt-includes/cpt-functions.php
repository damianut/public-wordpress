<?php
/**
 * FUNCTIONS OF CPT CANDIDATES
 */

/**
 * Register CPT
 */
add_action('init', 'cpt_candidate');

// The function to register CPT.
function cpt_candidate() {
  $labels = array(
      'name'               => __('Candidates'),
      'singular_name'      => __('Candidate'),
      'add_new'            => __('Add New Candidate'),
      'add_new_item'       => __('Add New Candidate'),
      'edit_item'          => __('Edit Candidate'),
      'new_item'           => __('New Candidate'),
      'all_items'          => __('All Candidates'),
      'view_item'          => __('View Candidate'),
      'search_items'       => __('Search Candidate'),
      'featured_image'     => 'Photo',
      'set_featured_image' => 'Add Photo'
  );
  $args = array(
      'labels'            => $labels,
      'description'       => 'Holds our candidate specific data',
      'public'            => true,
      'menu_position'     => 4,
      'supports'          => array('title', 'editor', 'custom-fields'),
      'has_archive'       => true,
      'query_var'         => true,
  );
  register_post_type('candidate', $args);
}

/**
 * Display Candidate CPT on Home Page and
 * Exclude Other Post Types from Displaying.
 */
add_action('pre_get_posts', 'show_candidates_only');

function show_candidates_only($query)
{
  if (!is_admin() && $query->is_home() && $query->is_main_query()) {
    $query->set('post_type', 'candidate');
  }
}
/******************************************************************************/