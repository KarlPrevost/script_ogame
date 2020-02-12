<?php
/***
Code d'un scraper avec Curl réalisé par Insimule.com
***/
function scraper ($url) {
//permet de récupérer le contenu d'une page
// User Agent
$ua = 'Mozilla/5.0 (Windows NT 6.1; rv:22.0) Gecko/20100101 Firefox/22.0';
$ch = curl_init();
curl_setopt($ch, CURLOPT_USERAGENT, $ua);
curl_setopt($ch, CURLOPT_URL, $url );
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
// le scraper suit les redirections
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
$result = curl_exec($ch);
curl_close ( $ch );
return $result;
}
// L'URL du site à scraper
$url = 'https://s163-fr.ogame.gameforge.com/game/index.php?page=overview&relogin=1';
echo '<pre>';
echo scraper($url);
echo '</pre>';
?>