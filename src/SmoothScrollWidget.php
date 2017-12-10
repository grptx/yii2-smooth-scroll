<?php
/**
 * Created by PhpStorm.
 * User: gx
 * Date: 10/12/17
 * Time: 15.08
 */

namespace grptx\smoothscroll;


use yii\base\Widget;
use yii\helpers\Json;
use yii\web\View;

class SmoothScrollWidget extends Widget
{
    public $options = [];
    public $selector;
    public $name = 'scroll';

    public function init()
    {
        parent::init();
        if(is_null($this->selector)) {
            $this->selector = 'a[href*="#"]';
        }
    }

    public function run()
    {
        parent::run();
        /** @var View $view */
        $view = $this->view;
        SmoothScrollAsset::register($view);

        $name = $this->name;
        $selector = $this->selector;
        $options = Json::encode($this->options);
        $view->registerJs("var {$name} = new SmoothScroll('{$selector}',{$options});",View::POS_END);
    }

}