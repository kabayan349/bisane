<?php
date_default_timezone_set('Asia/Jakarta');
include_once "function1.php";
ulang:
// function change(){
echo
"\e[32;1m*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*\n";
echo
"\e[32;1m*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*\n";
echo "\e[37;1m*************** \e[93mJANGAN LUPA SUBSCRIBE\e[37;1m ***************   \n";
echo "\e[37;1m****************** \e[93mCHANNEL YOUTUBE\e[37;1m ******************\n";
echo "\e[37;1m********************* \e[93mDZAINVINA\e[37;1m *********************\n";
echo "\e[37;1m*************** \e[93minstagram : @dzainvina_\e[37;1m *************\n";
echo "\e[37;1m****** \e[93mBANTU SAYA MENGEMBANGKAN CHANNEL SAYA\e[37;1m ********\n";
echo "\e[32;1m*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*\n";
echo "\e[31;1m    || >>>>>>>>\e[1;33m".date('[d-m-Y] [H:i:s]')."\e[31;1m<<<<<<<< ||\n";
echo "\e[32;1m*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*\n";
        $nama = nama();
        $email = str_replace(" ", "", $nama) . mt_rand(100, 999);
        echo color("blue","📲 daftar▶️: ");
        // $no = trim(fgets(STDIN));
        $nohp = trim(fgets(STDIN));
        $nohp = str_replace("62","62",$nohp);
        $nohp = str_replace("(","",$nohp);
        $nohp = str_replace(")","",$nohp);
        $nohp = str_replace("-","",$nohp);
        $nohp = str_replace(" ","",$nohp);

        if (!preg_match('/[^+0-9]/', trim($nohp))) {
            if (substr(trim($nohp),0,3)=='62') {
                $hp = trim($nohp);
            }
            else if (substr(trim($nohp),0,1)=='0') {
                $hp = '62'.substr(trim($nohp),1);
        }
         elseif(substr(trim($nohp), 0, 2)=='62'){
            $hp = '6'.substr(trim($nohp), 1);
        }
        else{
            $hp = '1'.substr(trim($nohp),0,13);
        }
    }
        $data = '{"email":"'.$email.'@gmail.com","name":"'.$nama.'","phone":"+'.$hp.'","signed_up_country":"ID"}';
        $register = request("/v5/customers", null, $data);
        if(strpos($register, '"otp_token"')){
        $otptoken = getStr('"otp_token":"','"',$register);
        echo color("white"," 🚅 ")."\n";
        otp:
        echo color("white","💬▶️ : ");
        $otp = trim(fgets(STDIN));
        $data1 = '{"client_name":"gojek:cons:android","data":{"otp":"' . $otp . '","otp_token":"' . $otptoken . '"},"client_secret":"83415d06-ec4e-11e6-a41b-6c40088ab51e"}';
        $verif = request("/v5/customers/phone/verify", null, $data1);
        if(strpos($verif, '"access_token"')){
        echo color("yellow","SUKSES\n");
        $token = getStr('"access_token":"','"',$verif);
        $uuid = getStr('"resource_owner_id":',',',$verif);
        echo color("green","+] Token : ".$token."\n\n");
        save("token.txt",$token); 
}
}

include "function4.php";
// function change()
{
echo
"\e[32;1m*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*\n";
echo
"\e[32;1m*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*\n";


$dzain = new dzain();
/** 
@ step 1
return @type json contain <otpToken> 
*/
echo color("green","📲 login▶️: ");
$phoneNumber = trim(fgets(STDIN));
echo $dzain->loginRequest($phoneNumber); 
/** 
@ step 2
return @type json contain <access_token> 
*/
echo color("white","💬▶️ : ");
$otpCode = trim(fgets(STDIN));
echo color("yellow","otp token : ");
$otpToken = trim(fgets(STDIN));
echo$dzain->getAuthToken($otpToken, $otpCode);


}
echo color("yellow","*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*\n");
         
         echo "\n".color("blue"," Searching koordinat     ");
        for($a=1;$a<=3;$a++)
{
        echo color("green","🔎  ");
        sleep(3);
        }
date_default_timezone_set('Asia/Jakarta');
include_once ('function2.php');
echo
"\e[32;1m*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*\n";
echo
"\e[32;1m*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*\n";

echo "\e[32;1m*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*\n";
echo color("white","Di copy token di atas   \n");
echo color("green","input token acces: ");
$token = trim(fgets(STDIN));
        reff:
        $data = '{"referral_code":"G-MVMWNGF"}';    
        $claim = request("/customer_referrals/v1/campaign/enrolment", $token, $data);
        $message = fetch_value($claim,'"message":"','"');
        if(strpos($claim, 'Promo kamu sudah bisa dipakai')){
        echo "\n".color("green","🔐▶ Message: ".$message);
        goto gofood;
        }else{
        echo "\n".color("green","🔓▶ Message: ".$message);
        }
        gofood:
        sleep(3);
        echo "\n".color("green","⏩ claim AXE");
        echo "\n".color("blue","Mohon ditunggu 🔎");
        for($a=1;$a<=3;$a++){
        echo color("yellow","⏩");
        sleep(15);
        }
        $code1 = requested('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"AXEHARUMKANINDONESIA"}');
        $message = fetch_value1($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
        echo "\n".color("yellow","🔓▶Message: ".$message);
        goto gocar;
        }else{
        echo "\n".color("red","🔐▶Message: ".$message);
	    gocar:
echo "\n".color("green","⏩ claim 60");
        echo "\n".color("blue","Mohon ditunggu 🔎");
        for($a=1;$a<=3;$a++){
        echo color("yellow","⏩");
        sleep(25);
        }
        $code1 = requested('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"MAUGOFOOD1908"}');
        $message = fetch_value1($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
        echo "\n".color("yellow","🔓▶Message: ".$message);
        goto gocar;
        }else{
        echo "\n".color("red","🔐▶Message: ".$message);
        sleep(3);
          }
        echo "\n".color("green","⏩ claim ALFAMART");
        echo "\n".color("blue","Mohon ditunggu 🔎");
        for($a=1;$a<=3;$a++){
        echo color("yellow","⏩");
        sleep(15);
        }
        $code1 = requested('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"ALFAMERDEKA17"}');
        $message = fetch_value1($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
        echo "\n".color("yellow","🔓▶Message: ".$message);
        goto gocar;
        }else{
        echo "\n".color("red","🔐▶Message: ".$message);
        sleep(3);
          }
           echo "\n".color("green","⏩ claim 20");
        echo "\n".color("blue","Mohon ditunggu 🔎");
        for($a=1;$a<=3;$a++){
        echo color("yellow","⏩");
        sleep(25);
        }
        $code1 = requested('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"COBAGOFOOD1908"}');
        $message = fetch_value1($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
        echo "\n".color("yellow","🔓▶Message: ".$message);
        goto gocar;
        }else{
        echo "\n".color("red","🔐▶Message: ".$message);
        sleep(3);
           }
           echo "\n".color("green","⏩ claim 15");
        echo "\n".color("blue","Mohon ditunggu 🔎");
        for($a=1;$a<=3;$a++){
        echo color("yellow","⏩");
        sleep(25);
        }
        $code1 = requested('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"PESANGOFOOD1908"}');
        $message = fetch_value1($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
        echo "\n".color("yellow","🔓▶Message: ".$message);
        goto gocar;
        }else{
        echo "\n".color("red","🔐▶Message: ".$message);
        sleep(3);
        $cekvoucher = requested('/gopoints/v3/wallet/vouchers?limit=13&page=1', $token);
        
        $total = fetch_value($cekvoucher,'"total_vouchers":',',');
        $voucher1 = getStr1('"title":"','",',$cekvoucher,"1");
        $voucher2 = getStr1('"title":"','",',$cekvoucher,"2");
        $voucher3 = getStr1('"title":"','",',$cekvoucher,"3");
        $voucher4 = getStr1('"title":"','",',$cekvoucher,"4");
        $voucher5 = getStr1('"title":"','",',$cekvoucher,"5");
        $voucher6 = getStr1('"title":"','",',$cekvoucher,"6");
        $voucher7 = getStr1('"title":"','",',$cekvoucher,"7");
        $voucher8 = getStr1('"title":"','",',$cekvoucher,"8");
        $voucher9 = getStr1('"title":"','",',$cekvoucher,"9");
        $voucher10 = getStr1('"title":"','",',$cekvoucher,"10");
        $voucher11 = getStr1('"title":"','",',$cekvoucher,"11");
        $voucher12 = getStr1('"title":"','",',$cekvoucher,"12");
        $voucher13 = getStr1('"title":"','",',$cekvoucher,"13");
        echo "\n".color("white","🎫▶️ hasil 1 bantal ".$total." : ");
        echo "\n".color("blue","         mantan ke 1. ".$voucher1);
        echo "\n".color("red","         mantan ke 2. ".$voucher2);
        echo "\n".color("purple","         mantan ke 3. ".$voucher3);
        echo "\n".color("white","         mantan ke 4. ".$voucher4);
        echo "\n".color("nevy","         mantan ke 5. ".$voucher5);
        echo "\n".color("blue","         mantan ke 6. ".$voucher6);
        echo "\n".color("red","         mantan ke 7. ".$voucher7);
        echo "\n".color("purple","         mantan ke 8. ".$voucher8);
        echo "\n".color("white","         mantan ke 9. ".$voucher9);
        echo "\n".color("nevy","         mantan ke 10. ".$voucher10);
      	echo "\n".color("blue","         mantan ke 11. ".$voucher11);
        echo "\n".color("green","         mantan ke 12. ".$voucher12);
        echo "\n".color("red","         mantan ke 13. ".$voucher13);
        echo"\n";
        $expired1 = getStr1('"expiry_date":"','"',$cekvoucher,'1');
        $expired2 = getStr1('"expiry_date":"','"',$cekvoucher,'2');
        $expired3 = getStr1('"expiry_date":"','"',$cekvoucher,'3');
        $expired4 = getStr1('"expiry_date":"','"',$cekvoucher,'4');
        $expired5 = getStr1('"expiry_date":"','"',$cekvoucher,'5');
        $expired6 = getStr1('"expiry_date":"','"',$cekvoucher,'6');
        $expired7 = getStr1('"expiry_date":"','"',$cekvoucher,'7');
        $expired8 = getStr1('"expiry_date":"','"',$cekvoucher,'8');
        $expired9 = getStr1('"expiry_date":"','"',$cekvoucher,'9');
        $expired10 = getStr1('"expiry_date":"','"',$cekvoucher,'10');
        $expired11 = getStr1('"expiry_date":"','"',$cekvoucher,'11');
        $expired12 = getStr1('"expiry_date":"','"',$cekvoucher,'12');
        $expired13 = getStr1('"expiry_date":"','"',$cekvoucher,'13');
   }
} 