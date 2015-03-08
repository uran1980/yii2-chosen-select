<?php

namespace uran1980\yii\widgets\chosen;

/**
 * @see https://github.com/harvesthq/chosen
 * @see http://harvesthq.github.io/chosen/
 */
class ChosenSelectAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@uran1980/yii/widgets/chosen/assets';
    public $css = [
        'chosen_v1.4.0/chosen.min.css',
    ];
    public $js = [
        'chosen_v1.4.0/chosen.jquery.min.js',
        'app-chosen-select.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
