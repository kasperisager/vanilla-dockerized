<?php if (!defined('APPLICATION')) exit();

// Cache
$Configuration['Cache']['Enabled'] = TRUE;
$Configuration['Cache']['Method'] = 'Memcached';

// Memcached
$Configuration['Memcached']['Store'] = 'cache:11211';
