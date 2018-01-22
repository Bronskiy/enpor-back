<?php

use trntv\filekit\widget\Upload;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\base\MultiModel */
/* @var $form yii\widgets\ActiveForm */

$this->title = Yii::t('frontend', 'Settings')
?>

<div class="box">
    <div class="box-inner">
        <?php $form = ActiveForm::begin(); ?>
        <div class="box-title">
            <h2><?php echo Yii::t('frontend', 'Profile settings') ?></h2>
        </div>

        <div class="row">
            <div class="col">
                <?php echo $form->field($model->getModel('profile'), 'firstname')->textInput(['maxlength' => 255]) ?>
            </div>
            <div class="col">
                <?php echo $form->field($model->getModel('profile'), 'middlename')->textInput(['maxlength' => 255]) ?>
            </div>
            <div class="col">
                <?php echo $form->field($model->getModel('profile'), 'lastname')->textInput(['maxlength' => 255]) ?>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <?php echo $form->field($model->getModel('account'), 'username') ?>
            </div>
            <div class="col">
                <?php echo $form->field($model->getModel('account'), 'email') ?>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <?php echo $form->field($model->getModel('profile'), 'locale')->dropDownlist(Yii::$app->params['availableLocales']) ?>
            </div>
            <div class="col">
                <?php echo $form->field($model->getModel('profile'), 'gender')->dropDownlist([
                    \common\models\UserProfile::GENDER_FEMALE => Yii::t('frontend', 'Female'),
                    \common\models\UserProfile::GENDER_MALE => Yii::t('frontend', 'Male')
                ], ['prompt' => '']) ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo Html::submitButton(Yii::t('frontend', 'Update'), ['class' => 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>

<div class="box">
    <div class="box-inner">
        <?php $form = ActiveForm::begin(); ?>
        <div class="box-title">
            <h2><?php echo Yii::t('frontend', 'Change Password') ?></h2>
        </div>

        <div class="row">
            <div class="col">
                <?php echo $form->field($model->getModel('account'), 'password')->passwordInput() ?>
            </div>
            <div class="col">
                <?php echo $form->field($model->getModel('account'), 'password_confirm')->passwordInput() ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo Html::submitButton(Yii::t('frontend', 'Change'), ['class' => 'btn btn-primary']) ?>
        </div>
        <?php ActiveForm::end(); ?>

    </div>
</div>

