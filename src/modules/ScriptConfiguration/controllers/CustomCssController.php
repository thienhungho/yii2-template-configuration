<?php

namespace thienhungho\TemplateConfiguration\modules\ScriptConfiguration\controllers;

use thienhungho\TemplateConfiguration\modules\ScriptConfiguration\CustomCSSForm;
use yii\helpers\Url;
use yii\web\Controller;

/**
 * Default controller for the `SiteConfiguration` module
 */
class CustomCssController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $model = new CustomCSSForm();
        if ($model->load(request()->post())) {
            if ($model->config()) {
                set_flash('success_change_configuration', $array = [
                    'type'     => 'success',
                    'duration' => 3000,
                    'icon'     => 'glyphicon glyphicon-ok-sign',
                    'title'    => t('app', 'Congratulations!'),
                    'message'  => t('app','Your setups has been saved'),
                ]);
                return $this->redirect(Url::to(['index']));
            } else {
                set_flash('error_change_configuration', $array = [
                    'type'     => 'danger',
                    'duration' => 3000,
                    'icon'     => 'glyphicon glyphicon-remove-sign',
                    'title'    => t('app', 'An error has occurred!'),
                    'message'  => t('app','Your setups has not been saved'),
                ]);
                return $this->render('index', ['model' => $model]);
            }
        } else {
            return $this->render('index', ['model' => $model]);
        }
    }
}
