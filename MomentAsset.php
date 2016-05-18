<?php
namespace alfa6661\widgets;

use yii\web\AssetBundle;

/**
 * @author Alfa Adhitya <alfa2159@gmail.com>
 * @link http://www.lab-informatika.com/
 */
class MomentAsset extends AssetBundle
{
    
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/moment';

    /**
     * @inheritdoc
     */
    public $js = [
        'moment.js'
    ];
}