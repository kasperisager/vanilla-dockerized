<?php if (!defined('APPLICATION')) exit();

// Cache
$Configuration['Cache']['Enabled'] = TRUE;
$Configuration['Cache']['Method'] = 'Memcached';

// Database
$Configuration['Database']['Name'] = 'vanilla';
$Configuration['Database']['Host'] = 'database';
$Configuration['Database']['User'] = 'vanilla';
$Configuration['Database']['Password'] = 'password';

// Memcached
$Configuration['Memcached']['Store'] = 'cache:11211';
