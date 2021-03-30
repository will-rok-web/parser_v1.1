<?php
	function curl_get($url, $referer = 'http://www.google.com'){
		// инициализация, сохранение в переменную $ch
		$ch = curl_init();
		// настройка опций
		curl_setopt($ch, CURLOPT_URL, $url); //установка url адреса на который curl будет осущетвлять обращение (передается в функцию в качестве параметра)
		curl_setopt($ch, CURLOPT_HEADER, 0); // говорим о том что нас не интересуют заголовки
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36"); // указываем версию браузера (user agent)
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); //отключаем проверку ssl сертификата
		curl_setopt($ch, CURLOPT_REFERER, $referer); // устанавливаем referer, $referer=google.com значит сайт думает что мы пришли на него из поиска google
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // нужно устанавливать обязательно, для того чтобы результат выполнения (html код) выводился не на экран, а в переменную
		// выполнение запроса и вывод результата выполнения в переменную $data
		$data = curl_exec($ch);
		// закрытие curl
		curl_close($ch);
		// возврат результата выполнения функции
		return $data;
	}
?>