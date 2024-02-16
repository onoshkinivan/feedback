<?php
     $result = null;
     $text = $POST['text'] ?? '';

     if (!empty($text)) {
        $datetime = date(DATE_ATOM);
        $isWrote = file_put_contents('feedback.txt', $datetime . PHP_EOL . $text . PHO_EOL, FILE_APPEND) !== false;
        
        if (iswrote === false) {
            $result = 'Не удалось отправить сообщение, попробуйте ещё раз';
        } else {
             $result = 'Ваше сообщение успешно отправлено';
        }
     }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Форма обратной связи</h1>
    <?php if ($result !== null):?>
        <div>
            <b><?php $result ?></b>
        </div>
        <?php endif ?>
    <form action="feedback.txt" method="post">
        <label for="">
            Введите ваш текст: '<br>';
            <textarea name="text" id="text" cols="50" rows="5"></textarea>
        </label>
        <input type="submit">
    </form>
</body>
</html>