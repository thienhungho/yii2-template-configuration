Yii2 Template Configuration
====================
Yii2 Template Configuration for Yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist thienhungho/yii2-template-configuration "*"
```

or add

```
"thienhungho/yii2-template-configuration": "*"
```

to the require section of your `composer.json` file.

Config
------------

Add module ScriptConfiguration to your `AppConfig` file.

```php
...
'modules'          => [
    ...
    /**
     * Script Configuration
     */
     'script-configuration' => [
        'class' => 'thienhungho\TemplateConfiguration\modules\ScriptConfiguration\ScriptConfiguration',
     ],
    ...
],
...
```

### Migration

Modules
------------

[ScriptConfigurations](https://github.com/thienhungho/yii2-template-configuration/tree/master/src/modules/ScriptConfiguration)

Functions
------------

[Core](https://github.com/thienhungho/yii2-supplier-management/tree/master/src/functions/core.php)

Constant
------------

[Core](https://github.com/thienhungho/yii2-supplier-management/tree/master/src/const/core.php)

Models
------------

[Script](https://github.com/thienhungho/yii2-supplier-management/tree/master/src/models/Script.php)