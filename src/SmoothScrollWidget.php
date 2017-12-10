<?php
/**
 * Created by PhpStorm.
 * User: gx
 * Date: 10/12/17
 * Time: 15.08
 */

namespace grptx\smootscroll;


use yii\base\Widget;
use yii\web\View;

class SmoothScrollWidget extends Widget
{
    public $options = [];
    public $selector;

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

        $selector = $this->selector;
        $options = json_encode($this->options);
        $view->registerJs("var scroll = new SmoothScroll('{$selector}',{$options});",View::POS_END);
    }

}