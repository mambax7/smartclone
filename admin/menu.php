<?php

/**
 *
 * Module: SmartClone
 * Author: The SmartFactory <www.smartfactory.ca>
 * Licence: GNU
 */

$moduleDirName = basename(dirname(__DIR__));

if (false !== ($moduleHelper = Xmf\Module\Helper::getHelper($moduleDirName))) {
} else {
    $moduleHelper = Xmf\Module\Helper::getHelper('system');
}
$adminObject = \Xmf\Module\Admin::getInstance();

$pathIcon32 = \Xmf\Module\Admin::menuIconPath('');
//$pathModIcon32 = $moduleHelper->getModule()->getInfo('modicons32');

$moduleHelper->loadLanguage('modinfo');

$adminObject            = array();
$i                      = 0;
$adminmenu[$i]['title'] = _AM_MODULEADMIN_HOME;
$adminmenu[$i]['link']  = 'admin/index.php';
$adminmenu[$i]['icon']  = $pathIcon32 . '/home.png';
++$i;
$adminmenu[$i]['title'] = _MI_SCLONE_ADMENU1;
$adminmenu[$i]['link']  = 'admin/main.php';
$adminmenu[$i]['icon']  = $pathIcon32 . '/manage.png';

++$i;
$adminmenu[$i]['title'] = _AM_MODULEADMIN_ABOUT;
$adminmenu[$i]['link']  = 'admin/about.php';
$adminmenu[$i]['icon']  = $pathIcon32 . '/about.png';
//++$i;
//$adminmenu[$i]['title'] = _AM_MODULEADMIN_ABOUT;
//$adminmenu[$i]['link'] =  "admin/about2.php";
//$adminmenu[$i]["icon"]  = $pathIcon32 . '/about.png';

//-----------------------------
//++$i;
//$adminmenu[$i]['title'] = _MI_SCLONE_CLONE_A_MODULE;
//$adminmenu[$i]['link'] = "admin/index.php";
//
//if (isset($xoopsModule) && $xoopsModule->getVar('dirname') == 'smartclone') {
//    ++$i;
//    $headermenu[$i]['title'] = _PREFERENCES;
//    $headermenu[$i]['link'] = '../../system/admin.php?fct=preferences&amp;op=showmod&amp;mod=' . $xoopsModule->getVar('mid');
//    ++$i;
//    $headermenu[$i]['title'] = _CO_SOBJECT_UPDATE_MODULE;
//    $headermenu[$i]['link'] = XOOPS_URL . "/modules/system/admin.php?fct=modulesadmin&op=update&module=" . $xoopsModule->getVar('dirname');
//    ++$i;
//    $headermenu[$i]['title'] = _AM_SOBJECT_ABOUT;
//    $headermenu[$i]['link'] = SMARTCLONE_URL . "admin/about2.php";
//}
//
