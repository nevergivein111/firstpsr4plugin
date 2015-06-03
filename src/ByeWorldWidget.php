<?php

namespace nexus;

use yii\base\Widget;
use yii\helpers\Html;

class ByeWorldWidget extends Widget
{
public $message;

public function init()
{
parent::init();
if ($this->message === null) {
$this->message = 'Bye World';
}
}

public function run()
{
return '<strong>'.$this->message.'</strong>';
}
}