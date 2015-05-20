<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\modules\forum;

class Module extends \yii\base\Module
{
    public function init()
    {
        parent::init();
        \Yii::configure($this, require (__DIR__.'/config.php'));
        $this->param['foo'] = 'bar';
    }
}