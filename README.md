# yii2-smooth-scroll

[![Latest Stable Version](https://poser.pugx.org/grptx/yii2-smooth-scroll/v/stable)](https://packagist.org/packages/grptx/yii2-smooth-scroll)
[![Total Downloads](https://poser.pugx.org/grptx/yii2-smooth-scroll/downloads)](https://packagist.org/packages/grptx/yii2-smooth-scroll)
[![Latest Unstable Version](https://poser.pugx.org/grptx/yii2-smooth-scroll/v/unstable)](https://packagist.org/packages/grptx/yii2-smooth-scroll)
[![License](https://poser.pugx.org/grptx/yii2-smooth-scroll/license)](https://packagist.org/packages/grptx/yii2-smooth-scroll)
[![composer.lock](https://poser.pugx.org/grptx/yii2-smooth-scroll/composerlock)](https://packagist.org/packages/grptx/yii2-smooth-scroll)

Smooth Scroll component for Yii2 based on [Smooth Scroll](https://github.com/cferdinandi/smooth-scroll) library

## Install 
Preferred way to install is through [Composer](https://getcomposer.org): 
```shell
php composer.phar require grptx/yii2-smooth-scroll:^1
```
Or, you may add

```php
"grptx/yii2-smooth-scroll": "^1"
```

to the require section of your `composer.json` file and execute `php composer.phar update`.

## Usage
To add the smooth scroll capability to a page add in the view:

```php
use grptx\smoothscroll\SmoothScrollWidget;

SmoothScrollWidget::widget();
```

## Options

Availables options for the widget are:

* selector (default _a[href*="#"]_)
* name (the javascript var name of scroll, default _scroll_) 
* options (array of options defined by the library cfr: https://github.com/cferdinandi/smooth-scroll#global-settings)

## Example

```php
SmoothScrollWidget::widget([
    'selector' => 'a[href*="#"]',
    'name' => 'myScroll',
    'options' => [
        'header' => ...
        'speed' => ...
        // etc ..
    ],
]);
```