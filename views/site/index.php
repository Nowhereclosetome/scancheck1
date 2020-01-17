<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/index.css">
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
        <tr>
          <td>Общество с ограниченной ответственностью "Тандем"</td>
          <td>77399924482</td>
          <td>Для ООО</td>
          <td class="status-error">Ошибка</td>
          <td>
            <div class="btn modal-open"  id="show-btn">Посмотреть</div>
          </td>
        </tr>
        <tr>
          <td>Общество с ограниченной ответственностью "Арбуз"</td>
          <td>77399924484</td>
          <td>Для ООО</td>
          <td class="status-success">Верно</td>
          <td>
            <div class="btn modal-open" id="show-btn">Посмотреть</div>
          </td>
        </tr>
      </table>
    </div>

    <div class="btn-wrapper">
      <div class="btn modal-open" id="check-btn">Новая проверка</div>
    </div>

    <div class="modal-fade" id="modal-show">
      <div class="modal modal-show">
        <div class="modal-title">Отчет о проверке</div>
        <div class="table-wrapper">
          <table class="table">
            <tr>
              <th>Наименование документа</th>
              <th>Проверка наличия документа</th>
              <th>Проверка текста документа фильтром</th>
              <th>Отчёт</th>
            </tr>
            <tr>
              <td>Устав</td>
              <td class="status-error">Найдено</td>
              <td class="status-error">Ошибка</td>
              <td>
                <div class="btn modal-open" id="show-btn-2">Посмотреть</div>
              </td>
            </tr>
            <tr>
              <td>Устав</td>
              <td class="status-error">Найдено</td>
              <td class="status-error">Ошибка</td>
              <td>
                <div class="btn modal-open" id="show-btn-2">Посмотреть</div>
              </td>
            </tr>
            <tr>
              <td>Устав</td>
              <td class="status-error">Найдено</td>
              <td class="status-error">Ошибка</td>
              <td>
                <div class="btn modal-open" id="show-btn-2">Посмотреть</div>
              </td>
            </tr>
            <tr>
              <td>Устав</td>
              <td class="status-error">Найдено</td>
              <td class="status-error">Ошибка</td>
              <td>
                <div class="btn modal-open" id="show-btn-2">Посмотреть</div>
              </td>
            </tr>
            <tr>
              <td>Устав</td>
              <td class="status-error">Найдено</td>
              <td class="status-error">Ошибка</td>
              <td>
                <div class="btn modal-open" id="show-btn-2">Посмотреть</div>
              </td>
            </tr>
          </table>
        </div>
        <a class="close-btn btn">Закрыть</a>
      </div>
    </div>

    <div class="modal-fade" id="modal-check">
      <div class="modal">
        <div class="modal-title">Новая проверка</div>
        <div class="form">
          <input class="input" type="text" placeholder="Введите ИНН организации">
          <input class="input" type="text" placeholder="Введите полное наименование организации">
          <input class="input" type="text" placeholder="Введите сокращенное наименование организации">
          <input class="input" type="text" placeholder="Введите ФИО руководителя организации">
          <input class="input" type="text" placeholder="Введите юр. адрес организации">
          
          <!-- select -->

          <label id="img_category_label" class="field" for="img_category" data-value="">
            <span>Версия парсера</span>
            <div id="img_category" class="psuedo_select" name="img_category">
              <span class="selected"></span>
              <ul id="img_category_options" class="options">
                <li class="option" data-value=" opt_1">Для ООО</li>
                <li class="option" data-value=" opt_2">Для ИП</li>
                <li class="option" data-value=" opt_3">Для АО</li>
                <li class="option" data-value=" opt_4">Для ПАО</li>
              </ul>
            </div>
          </label>

          <!-- select -->
 
          <div class="example-2">
            <div class="form-group">
              <input type="file" name="file" id="file" class="input-file">
              <label for="file" class="btn btn-tertiary js-labelFile">
                <i class="icon fa fa-check"></i>
                <span class="js-fileName">Загрузить файл</span>
              </label>
            </div>
          </div>
        </div>
        <div class="bottom-btn-block">
          <div class="bottom-btn">Проверить</div>
          <a class="modal-close bottom-btn">Отменить</div>
        </div>
      </div>
    </div>
  </div>

  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/select.js"></script>
</body>

</html>