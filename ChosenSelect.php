<?php

namespace uran1980\yii\widgets\chosen;

class ChosenSelect extends \yii\base\Widget
{
    /**
     * @inheritdoc
     */
    public function run()
    {
        $view = $this->getView();
        ChosenSelectAsset::register($view);
    }
}
