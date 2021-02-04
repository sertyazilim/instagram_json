<?php   
// Author : Hakan Sert 
class instagram_json {

public $token_al;
public $contents_data;

public function __construct($token_al) {$this->token_al = $token_al;}

public function instagram_json_token($limit=8) { /// Buraya Az Sonra İçine Tokeni Yollayacaz
@$token   			= $this->token_al;
@$fields   			= "id,caption,media_type,media_url,permalink,thumbnail_url,timestamp,username";
@$limit    			= $limit;
@$json_feed_url		= "https://graph.instagram.com/me/media?fields={$fields}&access_token={$token}&limit={$limit}";
@$json_feed 		= file_get_contents($json_feed_url);
@$contents 			= json_decode($json_feed, true, 512, JSON_BIGINT_AS_STRING);
@$contents_data     = array_filter($contents["data"]); // Data Çıktısı Al.
$active_json 		= $this-> contents_data = $contents_data;
}

} // instagram_json 

$cek =  new instagram_json('__APİ KEYİ GİRİNİZ__'); 

$cek -> instagram_json_token(1); //Limit Ayarı

$veri_foreach = $cek -> contents_data; // Verileri Çek

print_r($veri_foreach); // Başarılı 	

?>







