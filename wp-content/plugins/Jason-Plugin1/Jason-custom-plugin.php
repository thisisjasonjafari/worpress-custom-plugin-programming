<?php

/**
 * @pakege Jason-Custom-Plugin
 */

/*
Plugin Name:  jason Plugin custom 001
Plugin URI: https://github.com/thisisjasonjafari/worpress-custom-plugin-programming
Description: Plugin Description
Version: 1.0.1
Author: Jason Jafari
Author URI: http://jasonjafari.com
License: GPLv2 or later
text-Domain: Jason-plugin
*/


// if (!defined('ABSPATH')) {
//   die;
// }


// some code for security
defined('ABSPATH') or die('Hey, You cant access this file, you silly human!');

if (!function_exists('add_action')) {
  echo ('Hey, You cant access this file, you silly human!');
  die;
}


class JasonnnPlugin
{

  function __construct( )
  {
     
  }

  
}

if (class_exists('JasonnnPlugin')) {

  $jasonplugin = new JasonnnPlugin( );
}


// on activation



// on deactivation


// on uninstall