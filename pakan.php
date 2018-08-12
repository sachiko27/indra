<?php
// My FB : Manggala Febri Valentino
function pakan($uid, $usertoken, $jumlah, $wait){
    $x = 0; 
    while($x < $jumlah) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"http://h5server.jollychic.com/active/sheepFeed/feed.do?callback=topicCallback1533793176459&appTypeId=0&lang=12&countryCode=ID&appVersion=7.1.1&currency=IDR&terminalType=1&timestamp=1533792012760&cookieId=c81dbd56-5ecf-49ed-9e0e-ef67ad30c1e4&userId=42609779&userToken=%2FVpyn9%2BG88b0pegyf7aUcgQQ&_=1533793108210");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_REFERER, 'https://h5server.jollychic.com/');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        $server_output = curl_exec ($ch);
        curl_close ($ch);
		echo $server_output."\n";
        sleep($wait);
        $x++;
        flush();
    }
}
print "AWTO MANGANI WEDUS\n\n";
echo "Jumlah Pakan lu\nInput : ";
$jumlah = trim(fgets(STDIN));
echo "User ID?\nInput : ";
$uid = trim(fgets(STDIN));
echo "User Token?\nInput : ";
$usertoken = trim(fgets(STDIN));
echo "Jeda? 0-9999999999 (ex:0)\nInput : ";
$jeda = trim(fgets(STDIN));
$execute = pakan($uid, $usertoken, $jumlah, $jeda);
print $execute;
print "WEDUSMU WAREG\n";
?>
