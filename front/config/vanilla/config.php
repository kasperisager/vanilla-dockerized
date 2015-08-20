<?php if (!defined('APPLICATION')) exit();

// Cache
$Configuration['Cache']['Enabled'] = TRUE;
$Configuration['Cache']['Method'] = 'memcached';

// memcached
$Configuration['memcached']['Store'] = 'cache';
