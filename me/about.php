<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Страница пользователя Лаура</title>
</head>

<body>
	<?php
		$name = 'Лаура';
		$age = '32';
		$mail = 'sever.lv@eksmo.ru';
		$town = 'Москва';
		$about = 'Технический редактор';		
	?>
    <h2>Страница пользователя Лаура</h2>
    <table cellpadding="10px;">
    	<tr>
        	<td><b>Имя</b></td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
        	<td><b>Возраст</b></td>
            <td><?php echo $age; ?></td>
        </tr>
        <tr>
        	<td><b>Адрес эл. почты</b></td>
            <td><?php echo $mail; ?></td>
        </tr>
        <tr>
        	<td><b>Город</b></td>
            <td><?php echo $town; ?></td>
        </tr>
        <tr>
        	<td><b>О себе</b></td>
            <td><?php echo $about; ?></td>
        </tr>
    </table>
</body>
</html>