<?php

namespace alfa6661\widgets;

use yii\bootstrap\Widget;
use yii\helpers\Html;
use yii\helpers\Json;

/**
 * @author Alfa Adhitya <alfa2159@gmail.com>
 *
 * @link http://www.lab-informatika.com/
 */
class FullCalendar extends Widget
{
    public $options = [
        'class' => 'fullcalendar',
    ];

    public $clientOptions = [
        'weekends' => true,
        'default'  => 'month',
        'editable' => false,
    ];

    public $scheduler = false;

    public function init()
    {
        parent::init();
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
    }

    public function run()
    {
        $id = $this->options['id'];
        $options = Json::encode($this->clientOptions);
        $view = $this->getView();

        echo Html::beginTag('div', $this->options);
        echo Html::endTag('div');

        FullCalendarAsset::register($view);

        if ($this->scheduler) {
            SchedulerAsset::register($view);
        }
        $view->registerJs("jQuery('#$id').fullCalendar($options);");
    }
}
