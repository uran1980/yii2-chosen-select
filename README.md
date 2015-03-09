# Yii2 Chosen Select

An Yii2 chosen select extension based on [Chosen](http://harvesthq.github.io/chosen/) jQuery plugin.


## What is Chosen?
Chosen is a jQuery plugin that makes long, unwieldy select boxes much more user-friendly.


## Installation


### Composer

The preferred way to install this extension is through [Composer](http://getcomposer.org/).

Either run

```
php composer.phar require uran1980/yii2-chosen-select "dev-master"
```

or add

```
"uran1980/yii2-chosen-select": "dev-master"
```

to the require section of your ```composer.json```


## Usage

To activate this widget add this line to you view or layout:

```php
<?php echo uran1980\yii\widgets\chosen\ChosenSelect::widget(); ?>
```

or add as dependensy in you ```AssetBundle.php```:

```php

namespace frontend\assets;

class YourAppAsset extends \yii\web\AssetBundle
{
    ...
    public $depends = [
        'uran1980\yii\widgets\chosen\ChosenSelectAsset',
        ...
    ];
}
```


## Author

[Ivan Yakovlev](https://github.com/uran1980/), e-mail: [uran1980@gmail.com](mailto:uran1980@gmail.com)
