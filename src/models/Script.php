<?php
/**
 * Created by PhpStorm.
 * User: hohung
 * Date: 2019-04-28
 * Time: 16:58
 */

namespace thienhungho\TemplateConfiguration\models;


class Script
{
    /**
     * @return mixed
     */
    public static function getCustomCSS() {
        $settings = Yii::$app->settings;
        return $settings->get('template_configuration', 'custom_css_code', '');
    }

    /**
     * @return mixed
     */
    public static function getCustomScript() {
        $settings = Yii::$app->settings;
        return $settings->get('template_configuration', 'custom_script_code', '');
    }
}