<?php
/**
 * Class Widget
 * @author Tsibikov Vitaliy <tsibikov_vit@mail.ru> <tsibikov.com>
 * Create date: 25.02.2015 17:07
 */

namespace vitalik74\wysihtml5;

use vitalik74\wysihtml5\assets\Asset;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\InputWidget;

class Widget extends InputWidget
{
    public function init()
    {
        
    }


    /**
     * @inheritdoc
     */
    public function run()
    {
        $this->registerClientScript();

        if ($this->hasModel()) {
            return Html::activeTextarea($this->model, $this->attribute, $this->options);
        } else {
            return Html::textarea($this->name, $this->value, $this->options);
        }

    }
    /**
     * Register widget asset.
     */
    public function registerClientScript()
    {
        $view = $this->getView();
        //$selector = Json::encode($this->selector);
        $asset = Asset::register($view);

        //$view->registerJs("jQuery($selector).redactor($settings);");
        $view->registerJs("$('#" . $this->options['id'] . "').wysihtml5();");
        //Setting Deafult text for editor
      if(!empty($this->options['value'])){
        $view->registerJs("$('#" . $this->options['id'] . "').data('wysihtml5').editor.setValue('" . $this->options['value'] . "');");
       }
    }
} 
