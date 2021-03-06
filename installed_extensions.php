<?php

/* List of installed additional extensions. If extensions are added to the list manually
	make sure they have unique and so far never used extension_ids as a keys,
	and $next_extension_id is also updated. More about format of this file yo will find in 
	FA extension system documentation.
*/

$next_extension_id = 2; // unique id for next installed extension

$installed_extensions = array (
  0 => 
  array (
    'name' => 'English Indian COA - New.',
    'package' => 'chart_en_IN-general',
    'version' => '2.4.1-1',
    'type' => 'chart',
    'active' => false,
    'path' => 'sql',
    'sql' => 'en_IN-new.sql',
  ),
  1 => 
  array (
    'name' => 'Theme Modern',
    'package' => 'modern',
    'version' => '2.4.0-1',
    'type' => 'theme',
    'active' => false,
    'path' => 'themes/modern',
  ),
);
