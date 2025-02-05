<?php

/**
 * @file
 * template.php
 */

/**
 * Removing Empty div.panel-separator
 * http://drupal.stackexchange.com/questions/23652/how-to-remove-panel-separator-css-in-mini-panels
 */
function jimbirch_panels_default_style_render_region($vars) {
    $output = '';
    $output .= implode('', $vars['panes']);
    return $output;
}

/**
 * Removing H2 Invisibles from Tab Menus
 */
function jimbirch_menu_local_tasks(&$variables) {
  $output = '';

  if (!empty($variables['primary'])) {
    $variables['primary']['#prefix'] = '';
    $variables['primary']['#prefix'] = '<ul class="nav nav-tabs">';
    $variables['primary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['primary']);
  }

  if (!empty($variables['secondary'])) {
    $variables['primary']['#prefix'] = '';
    $variables['secondary']['#prefix'] = '<ul class="nav nav-pills">';
    $variables['secondary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['secondary']);
  }

  return $output;
}