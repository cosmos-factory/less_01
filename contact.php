<?php
/* в php.ini может лежать: 50M 1G 1024K 4096 */
  $size = ini_get('post_max_size'); // в нашем случяе 50M (по умолчанию)  
  $letter = $size{strlen($size-1)}; // это будет буква M
  $size = (int)$size; // не обязательное действие (приводим строку к числу)
  
  /* это схема работы, на самом деле делать надо короче. (см. внизу)
  switch($letter){
      case 'K': $size *= 1024; break;// то же самое- $ize *=$size;
      case 'M': $size *= 1024 * 1024; break; 
      case 'G': $size *= 1024 * 1024 * 1024; break; 
  } */  
  switch(strtoupper($letter)){
      case 'G': $size *= 1024; 
      case 'M': $size *= 1024; 
      case 'K': $size *= 1024; 
  }    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
	<head>
		<title>Контакты</title>
		<meta http-equiv="content-type"
			content="text/html; charset=windows-1251" />
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>

		<div id="header">
			<!-- Верхняя часть страницы -->
			<img src="logo.gif" width="187" height="29" alt="Наш логотип" class="logo" />
			<span class="slogan">приходите к нам учиться</span>
			<!-- Верхняя часть страницы -->
		</div>

		<div id="content">
			<!-- Заголовок -->
			<h1>Обратная связь</h1>
			<!-- Заголовок -->
			<!-- Область основного контента -->
			<h3>Адрес</h3>
			<p>123456 Москва, Малый Американский переулок 21</p>
			<h3>Задайте вопрос</h3>
			<form action='' method='post'>
				<label>Тема письма: </label><br />
				<input name='subject' type='text' size="50"/><br />
				<label>Содержание: </label><br />
				<textarea name='body' cols="50" rows="10"></textarea><br /><br />
				<input type='submit' value='Отправить' />
			</form>	
			<p>Максимальный размер сообщения: <?=$size ?> байт</p><!-- здесь можно- <?php echo $size ?> -->  
			<!-- Область основного контента -->
		</div>
		<div id="nav">
			<h2>Навигация по сайту</h2>
			<!-- Меню -->
			<ul>
				<li><a href='index.php'>Домой</a></li>
				<li><a href='about.php'>О нас</a></li>
				<li><a href='contact.php'>Контакты</a></li>
				<li><a href='table.php'>Таблица умножения</a></li>
				<li><a href='calc.php'>Калькулятор</a></li>
			</ul>
			<!-- Меню -->
		</div>
		<div id="footer">
			<!-- Нижняя часть страницы -->
			&copy; Супер Мега Веб-мастер, 2000 - 2012
			<!-- Нижняя часть страницы -->
		</div>
	</body>
</html>