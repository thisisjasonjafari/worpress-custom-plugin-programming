<?php

/**
 * @pakege Jason-Custom-Plugin
 *
 **/

class JasonPluginActivate
{
  public static function activate()
  {
    flush_rewrite_rules();
  }
}
