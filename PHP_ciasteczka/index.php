<?php
/*	opis:
	setcookie( 					//definicja tablicy z ciasteczkami - manual: https://www.php.net/manual/en/function.setcookie.php
		string $cookie_name,	//nazwa ciateczek
		string $value = "",		//wartość pobierana przez tablicę zmiennych tworzących ciasteczka
		int $expires = 0,		//czas wygaśnięcia ciasteczek w sekundach, dla '0' wygasa po zamknięciu przeglądarki
		string $path = "",		//scieżka na serwerze dostepu do pliku 
		string $domain = "",	//domena w której obowiązują ciasteczka
		bool $secure = false,	//nie wymagane bezpieczne połączenie
		bool $httponly = false	//czy plik cookie dostępny tylko za pomocą http
	): bool*/
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset=utf-8" />
		<title> Ciasteczka </title>
		<link rel="stylesheet" href="style.css" type="text/css">
	</head>
	<body>
		<?php
			$cookie_name = 'Kris';
			//setcookie('imie', $cookie_name, time() + 1);//60*60
			if(isset($_COOKIE['imie'])){
				echo("<p>Miło mi że "  . $_COOKIE['imie'] . " znów mnie odwiedziłeś.</p>");
			}else{
				echo("<p>Musisz zaakceptować regulamin</p>");
				setcookie('imie', $cookie_name, time() + 1);//60*60
			}
		?>
	</body>	
</html>
