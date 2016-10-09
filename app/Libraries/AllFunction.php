<?php
class AllFunction
{
    public static function hello_world()
    {
        return 'Hello World';
    }

    public static function sendSMS($destination, $content){
        $url ="http://www.mysmsfactory.com/index.php?";
        $fieldstring = NULL;
        $fields = array (
            'sender' => 'MLF',
            'option' => 'com_spc',
            'comm' => 'spc_api',
            'recipient' => ''.$destination.'',
            'message' => ''.$content.'',
            'username' => env('SMS_USERNAME'),
            'password' => env('SMS_PASSWORD')
        );
         $fieldstring =	http_build_query($fields);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fieldstring);
        return curl_exec($ch);

    }

    public static function  Sms($destination, $content){
        file_get_contents('http://www.mysmsfactory.com/index.php?option=com_spc&comm=spc_api&username=mlf&%20password=2020&sender=MLF&recipient='.$destination.'&message='.$content.'');
    }

    public static function crypto_rand_secure($min, $max)
    {
        $range = $max - $min;
        if ($range < 1) return $min; // not so random...
        $log = ceil(log($range, 2));
        $bytes = (int) ($log / 8) + 1; // length in bytes
        $bits = (int) $log + 1; // length in bits
        $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
        do {
            $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
            $rnd = $rnd & $filter; // discard irrelevant bits
        } while ($rnd >= $range);
        return $min + $rnd;
    }

    public  static function getToken($length, $id)
    {
        $token = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
        $codeAlphabet.= "0123456789";
        $max = strlen($codeAlphabet); // edited

        for ($i=0; $i < $length; $i++) {
            $token .= $codeAlphabet[AllFunction::crypto_rand_secure(0, $max)];
        }

        return $id.$token;
    }

    public  static function Level($level, $sex=''){
        if ($level <= 3){
            echo 'New Bay Of The House';
        }
       elseif ($level <= 9){
           echo '2nd Sibling';
       }else if($level <= 9){
           echo '1st Sibling';
       }else if($level <= 21){
           echo 'New Bay Of The House';
       }else if($level <= 81){
           echo $sex='m' ? 'Cousin of The Family' : 'Neice of The Family';

       }else if($level <= 243){
           echo $sex='m' ? 'Uncle of The Family' : 'Aunt of The Family';
       }else if($level <= 729){
           echo $sex='m' ? 'Father of The Family' : 'Mother of The Family';
       }else if($level <= 2187){
           echo $sex='m' ? 'GrandFather of The Family' : 'GrandMother of The Family';
       } else{
           echo 'Out Of The System';
       }
    }

}
