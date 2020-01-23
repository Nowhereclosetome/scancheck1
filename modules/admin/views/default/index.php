<?php
use yii\bootstrap\Modal;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/select.css">
  <link rel="stylesheet" href="css/index.css?v=2">
  <title>Панель администратора</title>
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
        <?php
    Modal::begin([
        'header' => '<h2>Добавить документ</h2>',
        'toggleButton' => [
            'label' => 'Добавить документ',
            'tag' => 'button',
            'class' => 'btn',
        ],
    ]);
?>
 <?php $form = ActiveForm::begin(['id' => 'contact-form', 'method'=>'post']); ?>
 
 <?= $form->field($newmodel, 'document')->textInput() ?>
 <?= $form->field($newmodel, 'mark_words')->textInput() ?>
 <?= $form->field($newmodel, 'mark_fields')->textInput() ?>
 <?= $form->field($newmodel, 'organization_type')->dropDownList([
        'placeholder'=>'Выберите версию парсера',
      'ООО' => 'Для ООО',
      'ИП' => 'Для ИП',
      'АО'=>'Для АО',
      'ПАО'=>'Для ПАО'
    ])->label(false); ?>

 <div class="form-group">
     <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
 </div>

 <?php ActiveForm::end(); ?>

<?php
Modal::end();
?>
      </div>
      <div class="right-block">
        <div class="top-panel">
          <a href="#" class="ooo">Для ООО</a>
          <a href="#" class="ip">Для ИП</a>
          <a href="#" class="ao">Для АО</a>
          <a href="#" class="pao">Для ПАО</a>
        </div>

        <div class="table-wrapper ooo-table">
          <table class="table">
            <tr>
              <th>Наименование</th>
              <th>Слова маркеры для верификации шаблона</th>
              <th>Поля маркеры для верификации шаблона</th>
              <th>Действия</th>
            </tr>
            <?php foreach ($models as $model): ?>
              <tr>
              <td><?= $model->document ?></td>
              <td><?= $model->mark_words ?></td>
              <td><?= $model->mark_fields ?></td>
              <td>
              <?php
    Modal::begin([
        'header' => '<h2>'.$model->document.'</h2>',
        'toggleButton' => [
            'label' => 'Изменить',
            'tag' => 'button',
            'class' => 'btn btn-success',
        ],
    ]);
?>
    <?php $form = ActiveForm::begin(['id' => 'contact-form', 'method'=>'post']); ?>
 
    <?= $form->field($model, 'mark_words')->textInput() ?>
    <?= $form->field($model, 'mark_fields')->textInput() ?>
    <?= $form->field($model, 'id')->hiddenInput()->label(false) ?>

 
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

        <div class="table-wrapper pao-table">
          <table class="table">
            <tr>
              <th>Наименование</th>
              <th>Слова маркеры для верификации шаблона</th>
              <th>Поля маркеры для верификации шаблона</th>
              <th>Действия</th>
            </tr>
            <?php foreach ($pao_models as $model): ?>
              <tr>
              <td><?= $model->document ?></td>
              <td><?= $model->mark_words ?></td>
              <td><?= $model->mark_fields ?></td>
              <td>
              <?php
    Modal::begin([
        'header' => '<h2>'.$model->document.'</h2>',
        'toggleButton' => [
            'label' => 'Изменить',
            'tag' => 'button',
            'class' => 'btn btn-success',
        ],
    ]);
?>
    <?php $form = ActiveForm::begin(['id' => 'contact-form', 'method'=>'post']); ?>

    <?= $form->field($model, 'mark_words')->textInput() ?>
    <?= $form->field($model, 'mark_fields')->textInput() ?>
    <?= $form->field($model, 'id')->hiddenInput()->label(false) ?>

 
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

        <div class="table-wrapper ip-table">
          <table class="table">
            <tr>
              <th>Наименование</th>
              <th>Слова маркеры для верификации шаблона</th>
              <th>Поля маркеры для верификации шаблона</th>
              <th>Действия</th>
            </tr>
            <?php foreach ($ip_models as $model): ?>
              <tr>
              <td><?= $model->document ?></td>
              <td><?= $model->mark_words ?></td>
              <td><?= $model->mark_fields ?></td>
              <td>
              <?php
    Modal::begin([
        'header' => '<h2>'.$model->document.'</h2>',
        'toggleButton' => [
            'label' => 'Изменить',
            'tag' => 'button',
            'class' => 'btn btn-success',
        ],
    ]);
?>
    <?php $form = ActiveForm::begin(['id' => 'contact-form', 'method'=>'post']); ?>
 
    <?= $form->field($model, 'mark_words')->textInput() ?>
    <?= $form->field($model, 'mark_fields')->textInput() ?>
    <?= $form->field($model, 'id')->hiddenInput()->label(false) ?>

 
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

        <div class="table-wrapper ao-table">

          <table class="table">
            <tr>
              <th>Наименование</th>
              <th>Слова маркеры для верификации шаблона</th>
              <th>Поля маркеры для верификации шаблона</th>
              <th>Действия</th>
            </tr>
            <?php foreach ($ao_models as $model): ?>
              <tr>
              <td><?= $model->document ?></td>
              <td><?= $model->mark_words ?></td>
              <td><?= $model->mark_fields ?></td>
              <td>
              <?php
    Modal::begin([
        'header' => '<h2>'.$model->document.'</h2>',
        'toggleButton' => [
            'label' => 'Изменить',
            'tag' => 'button',
            'class' => 'btn btn-success',
        ],
    ]);
?>
    <?php $form = ActiveForm::begin(['id' => 'contact-form', 'method'=>'post']); ?>
 
    <?= $form->field($model, 'mark_words')->textInput() ?>
    <?= $form->field($model, 'mark_fields')->textInput() ?>
    <?= $form->field($model, 'id')->hiddenInput()->label(false) ?>

 
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
    </div>
  </div>
  </div>
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
  <script src="js/select.js"></script>
  <script src="js/main.js"></script>

  <script>
      $(".ooo-table").show();
          $(".pao-table").hide();
          $(".ip-table").hide();
          $(".ao-table").hide();
      $(".ooo").on('click', function(e){
          e.preventDefault();
          $(".ooo-table").show();
          $(".pao-table").hide();
          $(".ip-table").hide();
          $(".ao-table").hide();
      });
      $(".ip").on('click', function(e){
          e.preventDefault();
          $(".ooo-table").hide();
          $(".pao-table").hide();
          $(".ip-table").show();
          $(".ao-table").hide();
      });
      $(".ao").on('click', function(e){
          e.preventDefault();
          $(".ooo-table").hide();
          $(".pao-table").hide();
          $(".ip-table").hide();
          $(".ao-table").show();
      });
      $(".pao").on('click', function(e){
          e.preventDefault();
          $(".ooo-table").hide();
          $(".pao-table").show();
          $(".ip-table").hide();
          $(".ao-table").hide();
      });
  </script>
</body>

</html>