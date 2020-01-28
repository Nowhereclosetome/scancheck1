<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V8</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css?v=4">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				
			<?php $form = ActiveForm::begin([
                    'class' => 'login100-form validate-form p-l-55 p-r-55 p-t-178',
                    'id' => 'form-signup'
				]); ?>
<span class="login100-form-title">
						Регистрация
					</span>
					<?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class' => 'input100', 'placeholder' => 'Логин'])->label(false) ?>
                    <?= $form->field($model, 'email')->textInput(['autofocus' => true, 'class' => 'input100', 'placeholder' => 'Email'])->label(false) ?>

					<?= $form->field($model, 'password')->passwordInput(['class' => 'input100', 'placeholder' => 'Пароль'])->label(false) ?>
                    <?= $form->field($model, 'password_repeat')->passwordInput(['class' => 'input100', 'placeholder' => 'Повторите пароль'])->label(false) ?>

		

					<div class="form-group">
						<div class="container-login100-form-btn">
							<?= Html::submitButton('Зарегистрировать', ['class' => 'login100-form-btn', 'name' => 'login-button']) ?>
						</div>
					</div>
					
				<?php ActiveForm::end(); ?>
				<div class="flex-col-c p-t-170 p-b-40">
					<?= Html::a('Авторизация','/login', ['class' => 'txt3', 'name' => 'login-button']) ?>
					</div>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>