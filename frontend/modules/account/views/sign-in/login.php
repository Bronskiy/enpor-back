<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \frontend\modules\user\models\LoginForm */

$this->title = Yii::t('frontend', 'Login');
$this->params['breadcrumbs'][] = $this->title;
?>
<?php $form = ActiveForm::begin(['id' => 'login-form',
    'options' => [
            'class' => 'form-horizontal form-material'
    ],
    'fieldConfig' => [
        'template' => "<div class=\"col-xs-12\">{label}\n{input}\n{hint}\n{error}</div>",
    ],
]); ?>
    <h3 class="box-title m-b-20"><?php echo Html::encode($this->title) ?></h3>
    <?php echo $form->field($model, 'identity')->textInput(['placeholder' => 'Username or email' ])->label(false) ?>
    <?php echo $form->field($model, 'password')->passwordInput(['placeholder' => 'Password' ])->label(false) ?>
    <div class="form-group">
        <div class="col-xs-12">
                <?
                echo  $form->field($model, 'rememberMe', [
                        'template' => '{input}{beginLabel}{labelTitle}{endLabel}',
                        'labelOptions' => [
                            'class' => '',
                        ],
                        'options'=> [
                            'tag'=>'div',
                            'class'=>'checkbox checkbox-success pull-left p-t-0'
                        ]
                ])
                    ->checkbox([],false);
                ?>
            <a href="<?= yii\helpers\Url::to(['sign-in/request-password-reset']);?>" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot password?</a>
        </div>
    </div>

    <div class="form-group text-center m-t-20">
        <div class="col-xs-12">
            <?php echo Html::submitButton(Yii::t('frontend', 'Login'), ['class' => 'btn btn-success btn-lg btn-block text-uppercase waves-effect waves-light', 'name' => 'login-button']) ?>
        </div>
    </div>
    <div class="form-group m-b-0">
        <div class="col-sm-12 text-center">
            <?php echo Html::a('<b>'.Yii::t('frontend', 'Need an account? Sign up.').'</b>', ['signup'], ['class' => 'text-success m-l-5']) ?>
        </div>
    </div>

<?php ActiveForm::end(); ?>
