<?php
use yii\bootstrap\Modal;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Пользователи</title>
</head>
<body>
<div class="admin-page">
    <div class="exit">
      <a href="/site/logout" class="btn">Выход</a>
    </div>
    <div class="main-block">
      <div class="aside-block">
        <a class="btn" href="/admin">Настройка</a>
        <a class="btn" href="/users">Пользователи</a>
      </div>
      <div class="right-block">
      <div class="table-wrapper">
      <table class="table">
      <?php foreach ($models as $model): ?>
              <tr>
              <td><?= $model->username ?></td>
              <td><?= $model->email ?></td>
              <td><?= $model->role ?></td>
              <td>
              <?php
    Modal::begin([
        'header' => '<h2> Изменение статуса пользователя </h2>',
        'toggleButton' => [
            'label' => 'Изменить',
            'tag' => 'button',
            'class' => 'btn btn-success',
        ],
    ]);
?>
    <?php $form = ActiveForm::begin(['id' => 'contact-form', 'method'=>'post']); ?>
    <?= $form->field($model, 'id')->hiddenInput()->label(false)?>
    <?= $form->field($model, 'role')->dropDownList([
    'manager' => 'Менеджер',
    'admin' => 'Администратор',
])->label(false); ?>
   
 
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
    </div>
 
    <?php ActiveForm::end(); ?>
 
<?php Modal::end(); ?>
              </td>
            </tr>
            <?php endforeach; ?>
      </table>
      </div>
      </div>
</body>
</html>