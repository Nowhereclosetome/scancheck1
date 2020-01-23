<?php 
use yii\bootstrap\Modal;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

?>


<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/index.css?v=2">
  <link rel="stylesheet" href="css/select.css">
  <title>Панель менеджера</title>
</head>

<body>
<a href="site/logout">Выйти</a>
  <div class="manage-page">
    <h1 class="page-title">
      Междокументальная проверка скан копий документов организации
    </h1>
    <div class="table-wrapper">
      <table class="table">
        <tr>
          <th>Полное наименование организации</th>
          <th>ИНН организации</th>
          <th>Версия парсера</th>
          <th>Статус</th>
          <th>Отчёт</th>
        </tr>
        <?php foreach($table_data as $field): ?>
          <tr>
          <td><?= $field->organization_name ?></td>
          <td><?= $field->INN ?></td>
          <td><?= $field->parser_version ?></td>
          <td class="status-error"><?= $field->status ?></td>
          <td>
            <div class="btn modal-open"  id="show-btn">Посмотреть</div> 
          </td>
        </tr>
        <?php endforeach;?>
      </table>
    </div>

    <div class="btn-wrapper">
<?php
    Modal::begin([
      'header' => '<h2>Новая проверка</h2>',
      'toggleButton' => [
          'label' => 'Новая проверка',
          'tag' => 'button',
          'class' => 'btn btn-success',
      ],
  ]);
?>
      <?php $form = ActiveForm::begin(['id' => 'contact-form', 'method'=>'post']); ?>
      <?= $form->field($model, 'INN')->textInput(['placeholder'=>'Введите ИНН организации'])->label(false); ?>
      <?= $form->field($model, 'organization_name')->textInput(['placeholder'=>'Введите полное наименование организации'])->label(false); ?>
      <?= $form->field($model, 'organization_name_short')->textInput(['placeholder'=>'Введите сокращенное наименование организации'])->label(false); ?>
      <?= $form->field($model, 'director_fullname')->textInput(['placeholder'=>'Введите ФИО руководителя организации'])->label(false); ?>
      <?= $form->field($model, 'address')->textInput(['placeholder'=>'Введите юр. адрес организации'])->label(false); ?>
      <?= $form->field($model, 'parser_version')->dropDownList([
        'placeholder'=>'Выберите версию парсера',
      'Для ООО' => 'Для ООО',
      'Для ИП' => 'Для ИП',
      'Для АО'=>'Для АО',
      'Для ПАО'=>'Для ПАО'
    ])->label(false); ?>
        <?= $form->field($model, 'imageFiles[]')->fileInput(['multiple' => true]) ?>


  <div class="form-group">
      <?= Html::submitButton('Проверить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
  </div>

  <?php ActiveForm::end(); ?>

<?php Modal::end(); ?>
  </div>

  <!--  Проверка документов -->
  
        </div>
  </div>

  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/select.js"></script>
</body>

</html>