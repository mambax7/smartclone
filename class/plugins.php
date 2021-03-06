<?php

class SmartclonePlugins
{
    public $pluginPatterns = false;

    public function getPlugin($dirname)
    {
        $pluginName = SMARTCLONE_ROOT_PATH . 'plugins/' . $dirname . '.php';
        if (file_exists($pluginName)) {
            require_once $pluginName;
            $this->pluginPatterns = $pluginPatterns;

            return true;
        } else {
            return false;
        }
    }

    public function getPluginsArray()
    {
        require_once XOOPS_ROOT_PATH . '/class/xoopslists.php';
        $aFiles = XoopsLists::getFileListAsArray(SMARTCLONE_ROOT_PATH . 'plugins/');
        $ret    = [];
        foreach ($aFiles as $file) {
            if ('.php' == substr($file, strlen($file) - 4, 4)) {
                $pluginName                = str_replace('.php', '', $file);
                $module_xoops_version_file = XOOPS_ROOT_PATH . "/modules/$pluginName/xoops_version.php";
                if (file_exists($module_xoops_version_file)) {
                    $ret[$pluginName] = $pluginName;
                }
            }
        }

        return $ret;
    }
}
