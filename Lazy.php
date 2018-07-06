<?php
namespace cluwong\lazy;

use Yii;
use yii\helpers\Json;

/**
 * Wrapper class for http://jquery.eisbehr.de/lazy/
 */
class Lazy extends \yii\base\Widget
{
    public $id;
    public $class = 'lazy';
    public $selector = '.lazy';
    public $options = [];
    public $clientOptions = [];

    public function init() {
        $this->registerClientScript();
        parent::init();
    }

    public function registerClientScript() {
        $view = $this->getView();

        $options = Json::encode($this->clientOptions);
        if ($this->id)
            $this->selector = '#' . $this->id;
        $js = "$('" . $this->selector . "').lazy($options);";

        LazyAsset::register($view);
        $view->registerJs($js);
    }
}
