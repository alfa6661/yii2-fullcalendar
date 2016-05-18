Yii2 Full Calendar
==================
Yii2 Full Calendar

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist alfa6661/yii2-fullcalendar "*"
```

or add

```
"alfa6661/yii2-fullcalendar": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= alfa6661\widgets\FullCalendar::widget([
	'options' => [
		'id' => 'calendar',
	],
	'clientOptions' => [
		// the options for the underlying FullCalendar plugin
		// see: http://fullcalendar.io/docs/
	]
]) ?>```