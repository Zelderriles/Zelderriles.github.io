<?php

if(!class_exists('Config')) {
		class Config {	
		const DB_HOST = '195.18.27.241'; //host mysql
		const DB_USER = 'gs36409'; //user mysql
		const DB_PASS = 'ECuzBURine'; //pass mysql
		const DB_NAME = 'gs36409'; //dbname mysql
	}
}

$config = array(

	'nameproject' => 'Arizona', //название проекта
	'url_group_vk' => 'https://vk.com/arp_malina', // ссылка на сообщество ВК
	'admin_name' => 'Andrey_Petrov', //имя для доступа в панель управления ( /panel )
	
	'url_site' => 'https://user7140.royal-hosting.ru/index.php', //ссылка на ваш домен - в письмах используется
	'email_name' => 'arzmalina@gmail.com', //название почты для отправки писем
	
	'donat_x' => '3', //множитель для доната
	'donat_specials' => '1', //показывать специальное предложение в донате ( 1-вкл | 0-выкл )
	'donat_sale' => '15', //скидка на товары, если 0 то скидки нет. ( от 1 до 100 ) процентов. пример: цена товара 100 руб (скидка 25) = итог цена 75руб

	'smtp_enable' => '1', //1 - вкл | 0 - выкл ( если выключен то будет работать функция mail() )
	'smtp' => 'smtp.gmail.com', //smtp сервер почты ( smtp.yandex.ru || smtp.mail.ru || smtp.gmail.com || smtp.rambler.ru || serverXXX.hosting.reg.ru || smtp.beget.com ) - больше тут: https://clck.ru/eSZt9
	'smtp_port' => '587', //порт smtp сервера ( 25 || 465 || 587 )
	'smtp_secure' => 'TLS', //SSL или TLS
	'smtp_debug' => '0', // debugging: 0 = dont error, 1 = errors and messages, 2 = messages only
	'smtp_username' => 'andrey2009.zaitsev', //логин почты, зачастую это почтовый адрес
	'smtp_password' => 'zaitsev2020' //пароль. если yandex то нужен пароль приложения!

);

?>