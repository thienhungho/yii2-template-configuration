<?php

namespace thienhungho\TemplateConfiguration\modules\ScriptConfiguration;

use common\modules\uploads\Uploads;
use Yii;
use yii\base\Model;
use yii\helpers\FileHelper;
use yii\imagine\Image;
use yii\web\UploadedFile;

/**
 * Login form
 */
class CustomCSSForm extends Model
{
    public $code;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [
                [
                    'code',
                ],
                'required',
            ],
            [
                [
                    'code',
                ],
                'string',
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'code' => Yii::t('app', 'Code'),
        ];
    }

    /**
     * Logs in a user using the provided username and password.
     *
     * @return bool whether the user is logged in successfully
     */
    public function config()
    {
        if ($this->validate()) {
            $this->configCustomCSS();

            return true;
        }

        return false;
    }

    /**
     * Config Primary Language Function
     */
    private function configCustomCSS()
    {
        $settings = Yii::$app->settings;
        $settings->set('template_configuration', 'custom_css_code', $this->code);
    }

}
