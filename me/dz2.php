<?php 
print_r ($_REQUEST);
?>

<form method="post">
   Переменная пользователя:  <input type="text" name="uservar" />
    <input type="submit" name="submit" value="Отправить" />
</form>

<?php
$uservar=$_REQUEST ['uservar'];
$_1=1;
$_2=1;
while (true){
	if ($_1>$uservar) {
		echo "Задуманное число НЕ входит в числовой ряд"	;  
		break;
	}
	else{
		if ($_1 == $uservar) {
			echo "задуманное число входит в числовой ряд";  
			break;
		}
		else {
			$_3=$_1;
			$_1=$_1+$_2;
			$_2=$_3;
			echo '$_1='.$_1 .'<br>'. '$_2='.$_2 . '<br>' . '$_3='. $_3;
		}
	}
}

?> 