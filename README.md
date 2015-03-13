Yii2 bootstrap-wysihtml5-widget
================================
This Yii2 widget provide simple wysiwyg editor - `bootstrap3-wysihtml5`.  

For `bootstrap3-wysihtml5` see more https://github.com/bootstrap-wysiwyg/bootstrap3-wysiwyg. 

REQUIREMENTS
------------

The minimum requirement by this application template that your Web server supports PHP 5.4.0.


INSTALLATION
------------

### Install via Composer

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install this widget. Put in your composer.json in require case:

`
"vitalik74/yii2-bootstrap-wysihtml5-widget": "*"
`

And run command "composer update"


USAGE
-----
###Base usage like that:###

```
echo vitalik74\wysihtml5\Widget::widget([
     'options' => [
         'id' => 'test',
         'style' => 'width: 810px; height: 200px',
         'placeholder' => "Placeholder text ..."
     ],
 ]);
``` 
 
###In `ActiveForm` use like that:###
  
 ```
 <?= $form->field($model, 'body')->widget(\vitalik74\wysihtml5\Widget::className(), ['options' => [
      'id' => 'test',
      'style' => 'width: 810px; height: 200px',
      'placeholder' => "Placeholder text ..."
  ],]) ?>
```
