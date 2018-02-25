<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CaptchaController extends Controller
{

    public function CreateVerifyImage() {
        header("Content-type:image/png");
        $im=imagecreate(150,35);
        imagefill($im,0,0,imagecolorallocate($im,112,128,144));
        $verify="";
        for($i=0;$i<4;$i++)   //产生4为随机数
        {
            $verify.=rand(0,9);
        }

        imagestring($im,5,20,5,substr($verify,0,1),imagecolorallocate($im,rand(1,255),0,rand(1,255)));
        imagestring($im,5,55,7,substr($verify,1,1),imagecolorallocate($im,0,rand(1,255),rand(1,255)));
        imagestring($im,5,86,3,substr($verify,2,1),imagecolorallocate($im,rand(1,255),rand(1,255),0));
        imagestring($im,5,108,7,substr($verify,3,1),imagecolorallocate($im,rand(1,255),0,rand(1,255)));
        imagepng($im);
        imagedestroy($im);
        Cache::put('captcha_code',$verify,60);
    }

    public  function  captcha_code(){
return $this->CreateVerifyImage() ;
    }
}
