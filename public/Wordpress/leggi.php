<?php 

$server= "89.40.174.68"; 
$user= "gcodfsrx";
$password= "xAyj9t518G";
$database= "gcodfsrx_wp2";



if ((!$link = mysqli_connect($server, $user, $password, $database))) 
  die(printf("<H3>Connessione al server non possibile: [%d] %s</H3>", mysqli_connect_errno(), mysqli_connect_error())); 



$result=mysqli_query($link, "SELECT DISTINCT
pm.post_id,
(SELECT meta_value FROM wp_postmeta WHERE post_id = pm.post_id AND meta_key ='_billing_first_name' LIMIT 1 ) AS nome,
(SELECT meta_value FROM wp_postmeta WHERE post_id = pm.post_id AND meta_key ='_billing_last_name' LIMIT 1 ) AS cognome,
(SELECT meta_value FROM wp_postmeta WHERE post_id = pm.post_id AND meta_key ='_billing_address_1' LIMIT 1 ) AS Indirizzo1,
(SELECT meta_value FROM wp_postmeta WHERE post_id = pm.post_id AND meta_key ='_billing_city' LIMIT 1 ) AS Citta,
(SELECT meta_value FROM wp_postmeta WHERE post_id = pm.post_id AND meta_key ='_billing_state' LIMIT 1 ) AS Stato,
(SELECT meta_value FROM wp_postmeta WHERE post_id = pm.post_id AND meta_key ='_billing_postcode' LIMIT 1 ) AS Cap,
(SELECT meta_value FROM wp_postmeta WHERE post_id = pm.post_id AND meta_key ='_billing_country' LIMIT 1 ) AS Nazione,
(SELECT meta_value FROM wp_postmeta WHERE post_id = pm.post_id AND meta_key ='_billing_email' LIMIT 1 ) AS email,
(SELECT meta_value FROM wp_postmeta WHERE post_id = pm.post_id AND meta_key ='_billing_phone' LIMIT 1 ) AS tel,
(SELECT meta_value FROM wp_postmeta WHERE post_id = pm.post_id AND meta_key ='_billing_postcode' LIMIT 1 ) AS Cap2,
(SELECT meta_value FROM wp_postmeta WHERE post_id = pm.post_id AND meta_key ='_billing_wooccm11' LIMIT 1 ) AS codFiacale,
(SELECT meta_value FROM wp_postmeta WHERE post_id = pm.post_id AND meta_key ='_billing_wooccm12' LIMIT 1 ) AS citta2,
(SELECT meta_value FROM wp_postmeta WHERE post_id = pm.post_id AND meta_key ='_billing_wooccm13' LIMIT 1 ) AS Cap2,
(SELECT meta_value FROM wp_postmeta WHERE post_id = pm.post_id AND meta_key ='_billing_wooccm14' LIMIT 1 ) AS NumIscrizioneAlbo,
(SELECT meta_value FROM wp_postmeta WHERE post_id = pm.post_id AND meta_key ='_billing_wooccm15' LIMIT 1 ) AS ProvIscrizioneAlbo,
(SELECT meta_value FROM wp_postmeta WHERE post_id = pm.post_id AND meta_key ='_payment_method_title' LIMIT 1 ) AS MetodoDiPagamento,
(SELECT meta_value FROM wp_postmeta WHERE post_id = pm.post_id AND meta_key ='_order_total' LIMIT 1 ) AS Prezzo,
wp_woocommerce_order_items.order_item_name AS Corso,
wp_woocommerce_order_items.order_item_type
FROM
wp_postmeta AS pm
INNER JOIN wp_woocommerce_order_items ON wp_woocommerce_order_items.order_id = pm.post_id
WHERE (SELECT meta_value FROM wp_postmeta WHERE post_id = pm.post_id AND meta_key ='_billing_first_name' LIMIT 1 ) is NOT NULL
and 
order_item_type = 'line_item'
"); 

// Connessione al database di insert
	$mysqli = new mysqli('89.40.174.68', 'gcodfsrx', 'xAyj9t518G', 'gcodfsrx_mo3');
	if ($mysqli->connect_error) {
		die('Errore di connessione (' . $mysqli->connect_errno . ') '
    	. $mysqli->connect_error);
	}


// $queryTruncate ="TRUNCATE TABLE UtentiWordpress";
// if (!$mysqli->query($queryTruncate )) {
// 		die($mysqli->error);
// 	}
//  $riga1 =1;

while($row = mysqli_fetch_row($result)) { 
    $riga1 =$row[0];
    $riga2 =$row[1];
    $riga3 =$row[2];
    $riga4 =$row[3];
    $riga5 =$row[4];
    $riga6 =$row[5];
    $riga7 =$row[6];
    $riga8 =$row[7];
    $riga9 =$row[8];
    $riga10 =$row[9];
    $riga11 =$row[10];
    $riga12 =$row[11];
    $riga13 =$row[12];
    $riga14 =$row[13];
    $riga15 =$row[14];
    $riga16 =$row[15];
    $riga17 =$row[16];
    $riga18 =$row[17];
    $riga19 =$row[18];
    $riga20 =$row[19];
    
// $riga1 +=1;
//db insert



$queryInsert = "REPLACE INTO UtentiWordpress
(
  Id
 ,Nome
 ,Cognome
 ,Indirizzo1
 ,Citta
 ,Stato
 ,Cap
 ,Nazione
 ,Email
 ,Tel
 ,Cap2
 ,CodFiscale
 ,Citta2
 ,NumIscrizioneAlbo
 ,ProvIscrizioneAlbo
 ,CodiceAteco
 ,Note
 ,Importato
 ,MetodoPagamento
 ,Prezzo
 ,Corso
)
VALUES
('$riga1' ,'$riga2' ,'$riga3 ' ,'$riga4 '  ,'$riga5 ' ,'$riga6 ' ,'$riga7 ' ,'$riga8 ' ,'$riga9 '  ,'$riga10 ' ,'$riga11 ' ,'$riga12 '  ,'$riga13 '  ,'$riga14 '  ,'$riga15 '  ,'$riga16 '  ,'$riga17 '  , 'no', '$riga18 ','$riga19 ' ,'$riga20 ')"; 
	if (!$mysqli->query($queryInsert )) {
		die($mysqli->error);
    	}
} 
mysqli_free_result($result);
mysqli_close($link);

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit();
?>
<!-- 
INSERT INTO UtentiWordpress
(
  Id
 ,Nome
 ,Cognome
 ,Indirizzo1
 ,Citta
 ,Stato
 ,Cap
 ,Nazione
 ,Email
 ,Tel
 ,Cap2
 ,CodFiscale
 ,Citta2
 ,NumIscrizioneAlbo
 ,ProvIscrizioneAlbo
 ,CodiceAteco
 ,Note
 ,Importato
)
VALUES
(
  0 -- Id - INT(11) NOT NULL
 ,'' -- Nome - VARCHAR(255)
 ,'' -- Cognome - VARCHAR(255)
 ,'' -- Indirizzo1 - VARCHAR(255)
 ,'' -- Citta - VARCHAR(255)
 ,'' -- Stato - VARCHAR(255)
 ,'' -- Cap - VARCHAR(255)
 ,'' -- Nazione - VARCHAR(255)
 ,'' -- Email - VARCHAR(255)
 ,'' -- Tel - VARCHAR(255)
 ,'' -- Cap2 - VARCHAR(255)
 ,'' -- CodFiscale - VARCHAR(255)
 ,'' -- Citta2 - VARCHAR(255)
 ,'' -- NumIscrizioneAlbo - VARCHAR(255)
 ,'' -- ProvIscrizioneAlbo - VARCHAR(255)
 ,'' -- CodiceAteco - VARCHAR(255)
 ,'' -- Note - VARCHAR(255)
 ,'' -- Importato - VARCHAR(255)
); -->