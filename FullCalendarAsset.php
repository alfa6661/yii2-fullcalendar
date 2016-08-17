<?php

namespace alfa6661\widgets;

use Yii;
use yii\web\AssetBundle;

/**
 * @author Alfa Adhitya <alfa2159@gmail.com>
 *
 * @link http://www.lab-informatika.com/
 */
class FullCalendarAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@bower/fullcalendar/dist';
    /**
     * calendar language.
     *
     * @var string ISO2 code for the wished display language
     */
    public $language = null;

    /**
     * {@inheritdoc}
     */
    public $css = [
        'fullcalendar.min.css',
    ];

    /**
     * {@inheritdoc}
     */
    public $js = [
        'fullcalendar.js',
        'lang-all.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        'yii\web\YiiAsset',
        'alfa6661\widgets\MomentAsset',
    ];

    /**
     * {@inheritdoc}
     */
    public function registerAssetFiles($view)
    {
        $language = $this->language ? $this->language : Yii::$app->language;
        if (strtoupper($language) != 'EN-US') {
            $this->js[] = "lang/{$language}.js";
        }
        parent::registerAssetFiles($view);
    }
}
