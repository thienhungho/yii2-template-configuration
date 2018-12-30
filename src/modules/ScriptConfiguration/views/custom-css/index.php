<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

$this->title = t('app', 'Template Configuration') . ' - ' . t('app', 'Custom CSS');
$this->params['breadcrumbs'][] = ['label' => t('app', 'Template Configuration'), 'url' => ['/template-configuration']];
$this->params['breadcrumbs'][] = t('app', 'Custom CSS');

$settings = Yii::$app->settings;

if (empty($model->code)) {
    $model->code = $settings->get('template_configuration', 'custom_css_code', '');
}

?>

<?php $form = ActiveForm::begin(['id' => 'google-analytics-form']); ?>

<?=
$form->field($model, 'code')->widget(
    'trntv\aceeditor\AceEditor',
    [
        'mode' => 'css',
        'theme' => 'monokai',
        'readOnly' => 'false',
    ]
)
?>

    <div class="form-group">
        <?= Html::submitButton(t('app', 'Save'), ['class' => 'btn green', 'name' => 'save-button']) ?>
    </div>

<?php ActiveForm::end(); ?>