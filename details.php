<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Dummy module
 *
 * @package PyroCMS\Core\Modules\Dummy
 */
class Module_Dummy extends Module
{
    public $version = '1.0';

    public function info()
    {
        return array(
            'name' => array(
                'en' => 'Dummy Content'
            ),
            'description' => array(
                'en' => 'Easily generate sample content.'
            ),           
            'frontend' => false,
            'backend' => true,
            'menu' => 'data',
        );
    }

    public function install()
    {
        // We can run install operations here.

        return true;
    }

    public function uninstall()
    {
        // We can run uninstall operations here.

        return true;
    }

    public function upgrade($old_version)
    {
        // We can run upgrade operations here.

        return true;
    }
}