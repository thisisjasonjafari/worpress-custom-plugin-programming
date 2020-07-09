
<?php

/**
 * @pakege Jason-Custom-Plugin
 *
 **/

class JasonPluginDeactivate
{
  public static function deactivate()
  {
    // flush rewrite rules
    flush_rewrite_rules();
  }
}
