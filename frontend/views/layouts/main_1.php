<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

//AppAsset::register($this);
$asset = frontend\assets\AppAsset::register($this);
$baseUrl = $asset->baseUrl;
$model = new common\models\LoginForm();
$aksi = '';
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    <body>
        <?php $this->beginBody() ?>

        <!-- wpf loader Two -->
<!--        <div id="wpf-loader-two">          
            <div class="wpf-loader-two-inner">
                <span>Loading</span>
            </div>
        </div> -->
        <!-- / wpf loader Two -->       
        <!-- SCROLL TOP BUTTON -->
        <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
        <!-- END SCROLL TOP BUTTON -->

        <?= $this->render('header.php') ?>  
        <?= $this->render('menu.php') ?> 
        <?= $content ?>
        <?= $this->render('footer.php') ?> 

        <!-- Login Modal -->  
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">                      
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4>Login or Register</h4>
                        <form class="aa-login-form" action="">
                            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                            <?= $form->field($model, 'username')->textInput(array('placeholder' => 'Username*')) ?>
                            <?= $form->field($model, 'password')->passwordInput(array('placeholder' => 'password*')) ?>
                            <?php echo Html::a(
                                    'Login',
                                    ['/site/login'],
                                    ['data-method' => 'post', 'class' => 'aa-browse-btn']
                                );?>
                            <?= $form->field($model, 'rememberMe')->checkbox() ?>
                            <div class="aa-register-now">
                               If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                               <br>
                              
                               Don't have an account?
                                   <?php echo Html::a(
                                    ' Register now!',
                                    ['/site/signup'],
                                    ['class' => 'hidden-xs']
                                );?>
                            </div>

                            <?php ActiveForm::end(); ?>

                        </form>
                    </div>                        
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>    
        
        <div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">                      
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4>Register</h4>
                        <form class="aa-login-form" action="">
                            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                            

                            <?php ActiveForm::end(); ?>

                        </form>
                    </div>                        
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>    

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
