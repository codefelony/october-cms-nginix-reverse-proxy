<?php namespace ToanNguyenNgoc\Https;

use System\Classes\PluginBase;

/**
 * https Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'https',
            'description' => 'Fix the schema prefix when browsing OctoberCMS in https over nginx reversed proxy',
            'author'      => 'CodeFelony',
            'icon'        => 'icon-leaf'
        ];
    }

}
