<?php

namespace Altum\Plugin;

use Altum\Plugin;

class ImageOptimizer {
    public static $plugin_id = 'image-optimizer';

    public static function optimize($file_path, $future_file_name) {
        $optimizer = new \ArtisansWeb\Optimizer();
        $optimizer->root_dir = \Altum\Plugin::get(self::$plugin_id)->path;
        $optimizer->optimize($file_path, '', $future_file_name);
    }

    public static function install() {

        /* Run the installation process of the plugin */
        $queries = [];

        foreach($queries as $query) {
            database()->query($query);
        }

        return Plugin::save_status(self::$plugin_id, 'active');

    }

    public static function uninstall() {

        /* Run the installation process of the plugin */
        $queries = [];

        foreach($queries as $query) {
            database()->query($query);
        }

        return Plugin::save_status(self::$plugin_id, 'uninstalled');

    }

    public static function activate() {
        return Plugin::save_status(self::$plugin_id, 'active');
    }

    public static function disable() {
        return Plugin::save_status(self::$plugin_id, 'installed');
    }

}
