<?php
// $Id: template.php,v 1.10.2.5 2009/04/25 06:42:27 hswong3i Exp $

/**
 * Return a themed primary menu.
 */
function phptemplate_primary($items = array()) {
  $menu_options = menu_get_menus();
  $primary_links = variable_get('menu_primary_links_source', 'primary-links');
  $output = '<div id="primary-links-region">';
  $output .= '<div class="title">' . $menu_options[$primary_links] . '</div>';
  $output .= theme('links', $items, array('class' => 'primary-links'));
  $output .= '</div>';
  return $output;
}

/**
 * Return a themed mission trail.
 *
 * @return
 *   a string containing the mission output, or execute PHP code snippet if
 *   mission is enclosed with <?php ?>.
 */
function phptemplate_mission() {
  $mission = theme_get_setting('mission');
  if (preg_match('/^<\?php/', $mission)) {
    $mission = drupal_eval($mission);
  }
  else {
    $mission = filter_xss_admin($mission);
  }
  return isset($mission) ? $mission : '';
}

/**
 * Generates IE CSS links for LTR and RTL languages.
 */
function phptemplate_get_ie_styles() {
  global $language;

  $iecss = '<link type="text/css" rel="stylesheet" media="all" href="'. base_path() . path_to_theme() .'/fix-ie.css" />';
  if (defined('LANGUAGE_RTL') && $language->direction == LANGUAGE_RTL) {
    $iecss .= '<style type="text/css" media="all">@import "'. base_path() . path_to_theme() .'/fix-ie-rtl.css";</style>';
  }

  return $iecss;
}
