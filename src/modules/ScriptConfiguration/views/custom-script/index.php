<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

$this->title = t('app', 'Site Configuration') . ' - ' . t('app', 'Custom Script');
$this->params['breadcrumbs'][] = ['label' => t('app', 'Template Configuration'), 'url' => ['/template-configuration']];
$this->params['breadcrumbs'][] = t('app', 'Custom Script');

$settings = Yii::$app->settings;

if (empty($model->code)) {
    $model->code = $settings->get('template_configuration', 'custom_script_code', '');
}

?>

<?php $form = ActiveForm::begin(['id' => 'google-analytics-form']); ?>

<?=
$form->field($model, 'code')->widget(
    'trntv\aceeditor\AceEditor',
    [
        'mode' => 'javascript',
        'theme' => 'monokai',
        'readOnly' => 'false',
    ]
)
?>

    <div class="form-group">
        <?= Html::submitButton(t('app', 'Save'), ['class' => 'btn green', 'name' => 'save-button']) ?>
    </div>

<?php ActiveForm::end(); ?>