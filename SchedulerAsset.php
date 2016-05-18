<?php
namespace alfa6661\widgets;

use Yii;
use yii\web\AssetBundle;

/**
 * @author Alfa Adhitya <alfa2159@gmail.com>
 * @link http://www.lab-informatika.com/
 */
class SchedulerAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/fullcalendar-scheduler/dist';
    
    /**
     * @inheritdoc
     */
    public $css = [
        'scheduler.min.css',
    ];
    
    /**
     * @inheritdoc
     */
    public $js = [
        'scheduler.js'
    ];
    
    /**
     * @inheritdoc
     */
    public $depends = [
        'alfa6661\widgets\FullCalendarAsset'
    ];
}