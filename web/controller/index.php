<?php
namespace web\controller;
use Gregwar\Captcha\CaptchaBuilder;
class Index{
    public function show(){
        echo  '123';
    }

    public function code(){
        header('Content-type: image/jpeg');
        $builder = new CaptchaBuilder;
        $builder->build();
        $builder->output();
    }
}
