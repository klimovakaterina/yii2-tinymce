<?php

namespace klimovakaterina\EditorWidget;

use yii\web\AssetBundle;

class EditorWidgetAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/assets';

    public $js = [
        'js/tinymce.min.js',
        'tinymce_include.js'
    ];



}