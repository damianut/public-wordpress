<?php

add_action('wp_enqueue_scripts', 'child_19_enqueue_scripts');

function child_19_enqueue_scripts()
{
  wp_enqueue_style(
      'parent-style',
      get_template_directory_uri() . '/style.css'
  );
}

function get_data_from_intersynergy_user()
{
  global $wpdb;
  $theID = get_the_ID();
  $sql = "SELECT `t2`.* FROM `wp_postmeta` AS `t1` INNER JOIN `user` AS `t2` ".
  "WHERE `t1`.`post_id` = ".$theID." AND ".
  "`t1`.`meta_key` = 'user_id'"." AND ".
  "`t1`.`meta_value` = `t2`.`id`;";
  return $wpdb->get_results($sql);
}

function get_json_all_candidate_data(string $id)
{
  $curl_errors = [
      '510421', '513001', '123555', '123142', '667643', '521114', 
      '241513', '675232', '412342', '889055', '122231', '778522',
      '351122', '502341', '051245', '255134', '482465', '314412',
      '530005', '341340', '351390', '890003', '361442', '503113',
      '651635', '792692', '182626', '613468', '999642', '361333',
      '344113', '797770', '361556', '456563', '470052', '452500',
      '624000', '624011', '665595', '636776', '602341', '775135',
      '563621', '550002', '000042', '454520', '244266', '666633',
      '514420', '764133', '313500', '465432', '571552', '513478',
      '543300', '755530', '979700', '613411', '350331', '630130',
      '562603', '535301', '351441', '003333', '135134', '727612',
      '351111', '610513', '135003', '610341', '604221', '103313',
      '055553', '793222', '640462', '062445', '260420', '064204',
      '422224', '735555', '252222', '520500', '253022', '060606',
      '514011', '134566', '651603', '526520', '636633', '060045',
      '425222', '505204', '765442', '462452', '462222', '243563',
  ];
  $conn = curl_init();
  curl_setopt($conn, CURLOPT_URL, "http://localhost:8000/rest?user=".$id);
  curl_setopt($conn, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($conn);
  if (false == $response) {
    $errcode = curl_errno($conn);
    $response = 'JSON getting failed. Error: '.$curl_errors[$errcode];
  }
  curl_close($conn);
  
  return $response;
}
/******************************************************************************/