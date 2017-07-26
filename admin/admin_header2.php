<?php

/**
 *
 * Module: SmartClone
 * Author: The SmartFactory <www.smartfactory.ca>
 * Licence: GNU
 */

if (!defined('SMARTCLONE_NOCPFUNC')) {
    require_once __DIR__ . '/../../../include/cp_header.php';
}

require_once XOOPS_ROOT_PATH . '/class/xoopsformloader.php';

require_once XOOPS_ROOT_PATH . '/modules/smartclone/include/common.php';

if (!defined('SMARTCLONE_ADMIN_URL')) {
    define('SMARTCLONE_ADMIN_URL', SMARTCLONE_URL . 'admin/');
}

if (!defined('SMARTCLONE_ADMIN_ROOT_PATH')) {
    define('SMARTCLONE_ADMIN_ROOT_PATH', SMARTCLONE_ROOT_PATH . 'admin/');
}
