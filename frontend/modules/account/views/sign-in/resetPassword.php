<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \frontend\modules\user\models\ResetPasswordForm */

$this->title = Yii::t('frontend', 'Reset password');
$this->params['breadcrumbs'][] = $this->title;
?>

<?php $form = ActiveForm::begin(['id' => 'reset-password-form',
    'options' => [
        'class' => 'form-horizontal form-material'
    ],
    'fieldConfig' => [
        'template' => "<div class=\"col-xs-12\">{label}\n{input}\n{hint}\n{error}</div>",
    ],
]); ?>

<h3 class="box-title m-b-20"><?php echo Html::encode($this->title) ?></h3>

    <?php echo $form->field($model, 'password')->passwordInput(['placeholder' => 'Password'])->label('false') ?>
    <div class="form-group text-center m-t-20">
        <div class="col-xs-12">
            <?php echo Html::submitButton(Yii::t('frontend', 'Save'), ['class' => 'btn btn-success btn-lg btn-block text-uppercase waves-effect waves-light', 'name' => 'reset-button']) ?>
        </div>
    </div>

<?php ActiveForm::end(); ?>
