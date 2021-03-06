<?php
/**
 * Run admin process.
 * 
 * @file \admin\index.php
 *
 * This file is the administration (backend) 
 * access point of the blogs plateform.
 *
 * If you move admin access point (this file),
 * require path below must composer vendor/autoload.php file path.
 *
 * @copyright Olivier Meunier & Association Dotclear
 * @copyright GPL-2.0-only
 */
require implode(DIRECTORY_SEPARATOR, [__DIR__, '..', 'vendor', 'autoload.php']);

Dotclear\App::run('admin');
