<?php 
function menu(){?>
	<ul id="head">
	<li><a href="index.php" title="Главная страница">Главная</a></li>
	<li><a href="stud.php" title="Расписание. Рейтинг. Гранты. Аспирантура.">Студентам</a></li>
	<li><a href="abit.php" title="Описание специальности. Вступительные испытания">Абитуриентам</a></li>
	<!--li><a href="news.php"title="Новости">Новости</a></li-->
	<li><a href="sost.php" title="Наши преподаватели">Преподавательский состав</a></li>
	<li><a href="dis.php" title="Изучаемые дисциплины">Дисциплины</a></li>
	<li><a href="nayka.php" title="Научная деятельность">Научная деятельность</a></li>
	<li><a href="history.php" title="История кафедры">История кафедры</a></li>
	<li><a href="sotr.php" title="С кем сотрудничаем">Сотрудничество</a></li>
	
	<li><a href="kontakt.php" title="Адрес и контактные телефоны">Контакты</a></li>		
	<li><a href="res.php" title="Полезные ресурсы">Полезные ресурсы</a></li>	
	<li><a href="http://kafedra.forum2x2.ru/login" title="Форум кафедры ПМ"  target="_blank">Форум кафедры ПМ</a></li>
</ul>
<?}

function hat(){?>
	<table id="hd"> 
		<tr>
			<td>
				<a href="index.php" title="Перейти на главную страницу">
					<img src="img/logo.png"  alt="Логотип института" >
				</a>
				<a name="here"></a>
			</td>                        
			<td align="right">
				<a href="index.php" title="Перейти на главную страницу">
					МГТУ ГА - Кафедра прикладной математики
				</a>
			
			</td>	
			<!--td>
				<img src="img/logok.jpg"  alt="Логотип института" >
				
			</td-->
		</tr>
	</table>			
<?}

function kont(){?>
	<table> 
		<tr>
			<td>
			<h3>Контакты</h3>
			<p><b>Заведующий кафедрой </b><br>
			<i>Кузнецов Валерий Леонидович<br></i>
			</p>
			<p>(499)-458-84-16</p>
			<p>v.kuznetsov@mstuca.aero</p>
			</td>
		</tr>
		<tr>
			<td>
			<p><b>Методист кафедры</b></p>
			<p><i>Наделяева Людмила Михайловна </i>
			</p>
			<p>(499)-458-84-16 
			</p>
			</td>
		</tr>
		
	</table>

<?}

function floorr(){?>
	<p><b><i>Штудируйте все, потом увидите: нет ничего лишнего</i></b>
			<br>&copy;Каноник Хью</p>
	
	<p id="address">
		<h4>Адрес</h4>
		Московский Государственный Технический Университет Гражданской Авиации
		<br>Кафедра Прикладной Математики
		<br>Москва, улица Пулковская 6, корпус 5, этаж 3
	</p>
<?}				
?>