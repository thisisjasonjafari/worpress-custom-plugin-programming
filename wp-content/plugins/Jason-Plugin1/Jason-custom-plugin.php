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



class JasonnnPlugin
{

  // Public
  // can be accessed everywhere

  // Protected
  // can be accessed only within the class itself or extensions of that class

  // Private
  // can be accessed only within the class itself

  // Static


  function __construct()
  {
    add_action('init', array($this, 'custom_post_type'));
  }

  function register()
  {
    add_action('admin_enqueue_scripts', array($this, 'enqueue'));
  }

  protected function create_post_type()
  {
    add_action('init', array($this, 'custom_post_type'));
  }

  function activate()
  {
    // generate custom post type
    $this->custom_post_type();
    // flush rewrite rules
    flush_rewrite_rules();
  }

  function deactivate()
  {
    // flush rewrite rules
    flush_rewrite_rules();
  }

  function custom_post_type()
  {
    register_post_type('book', ['public' => true, 'label' => 'Books']);
  }

  function enqueue()
  {
    // enqueue all our scripts
    wp_enqueue_style('mypluginstyle', plugins_url('/assets/mystyle.css', __FILE__));
    wp_enqueue_script('mypluginscript', plugins_url('/assets/myscript.js', __FILE__));
  }

  private function print_stuff()
  {
    echo 'Test';
  }
}



class SecondClass extends JasonnnPlugin
{
  function register_post_type()
  {
    $this->create_post_type();
  }
}

if (class_exists('JasonnnPlugin')) {

  $jasonplugin = new JasonnnPlugin();
  $jasonplugin->register();
}
$secondClass = new SecondClass();
$secondClass->register_post_type();


// on activation
register_activation_hook(__FILE__, array($jasonplugin, 'activate'));


// on deactivation
register_deactivation_hook(__FILE__, array($jasonplugin, 'deactivate'));

// on uninstall
