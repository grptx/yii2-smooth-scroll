<?php
/**
 * Created by PhpStorm.
 * User: gx
 * Date: 10/12/17
 * Time: 13.22
 */

namespace grptx\smoothscroll;


use yii\web\AssetBundle;

class SmoothScrollAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/smooth-scroll.js/dist/js';

    public $js = [
        'smooth-scroll.min.js',
    ];
}