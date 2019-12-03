<?php
/**
 * Created by PhpStorm.
 * User: 2233
 * Date: 2019/1/25
 * Time: 15:57
 */
//封装验证码类
//  验证码个数 $number
//  验证码类型 $codeType
//  验证码图形宽度 $width
//  验证码图形高度 $height
//  验证码 $code
//  图形资源 $image
namespace framework;
$code = new Code();
$code->outImage();
class Code
{
    protected $number;          //  验证码个数
    protected $codeType;        //  验证码类型
    protected $width;           //  验证码图形宽度
    protected $height;          //  验证码图形高度
    protected $code;            //  验证码
    protected $image;           //  图形资源

    public function __construct($number = 4 , $codeType = 2 ,$width = 100 ,$height = 50) //设置默认值
    {
        //初始化成员属性
        $this->number = $number;
        $this->codeType = $codeType;
        $this->width = $width;
        $this->height = $height;
        $this->code = $this->createCode();           //生成验证码函数字符串
    }

    public function __get($name)  //外部获得验证码字符串
    {
        if ($name == 'code'){
            return $this->code;
        }
        return false;
    }

    protected function createCode()                 //根据类型生成不同类型的验证码
    {

        switch ($this->codeType) {
            case 0 :                                //纯数字
                $code = $this->getNumberCode();     //把纯数字验证码放进函数中
                break;
            case 1 :                                //纯字母
                $code = $this->getCharCode();
                break;
            case 2 :                                //数字和字母混合
                $code = $this->getNumCharCode();
                break;
            default :
                die('不支持这种类型的验证码');
        }
         return $code;                              //返回生成的验证码字符串
    }

    protected function getNumberCode()                          //生成纯数字字符串
    {
        $str = join('',range(0,9));                             //生成一个0-9的数组
        return substr(str_shuffle($str),0 ,$this->number);      // 把数组打乱提取从0开始到  $number位的字符
    }

    protected function getCharCode()                            //生成纯字母字符串
    {
        $str = join('',range('a','z'));                         //生成一个a-z的数组
        $str = $str.strtoupper($str);                           //把数组内的字母变成大小然后拼接起来
        return substr(str_shuffle($str),0 ,$this->number);      // 把数组打乱提取从0开始到  $number位的字符
    }

    protected function getNumCharCode()                 //字母数组混合字符串
    {
        $numstr = join('',range(0,9));                  //生成一个0-9的数组
        $str = join('',range('a','z'));                 //生成一个a-z的数组
        $str = $numstr.$str.strtoupper($str);           //把数组内的字母变成大小然后拼接起来
        return substr(str_shuffle($str),0 ,$this->number);
    }

    public function outImage()      // 生成验证码图形
    {
        $this->createImage();       //生成画布
        $this->fillBack();          //填充背景色
        $this->drawChar();          //将验证码写入画布中
        $this->drawDisturb();       //干扰元素
        $this->show();              //显示验证码
       $this->saveCode();           //将生成的验证码放进服务器
    }

    protected function saveCode(){
        session_start();
        $_SESSION['code'] = $this->code;
    }

    protected function createImage()                                        //画布函数
    {
        $this->image = imagecreatetruecolor($this->width ,$this->height);   //生成画布
    }

    protected function fillBack()       //填充背景色
    {
        imagefill($this->image , 0 , 0 ,$this->lightColor());
    }

    protected function lightColor()     //浅色
    {
        return imagecolorallocate($this->image ,mt_rand(130 , 255),mt_rand(130 , 255),mt_rand(130 , 255));
    }

    protected function darkColor()      //深色
    {
        return imagecolorallocate($this->image ,mt_rand(0 , 120),mt_rand(0 , 120),mt_rand(0 , 120));
    }

    protected function drawChar()                                                            //将验证码写入画布中
    {
        $width = ceil($this->width / $this->number);                                        //每个验证码x轴位置的极限值
        for ($i = 0; $i < $this->number; $i++){
            $x = mt_rand($i * $width + 5 ,($i+1)* $width - 10 );
            $y = mt_rand(0 , $this->height-15);
            imagechar($this->image , 5 , $x , $y ,$this->code[$i] , $this->darkColor());    //将验证码字符串写入画布中
        }
    }

    protected function drawDisturb()                                    //干扰元素
    {
        for($i = 0;$i < 50;$i++){
            $x = mt_rand(0,$this->width);
            $y = mt_rand(0,$this->height);
            imagesetpixel($this->image , $x ,$y ,$this->lightColor());  //将干扰元素写入画布中
        }
    }

    protected function show()                   //显示验证码
    {
        header('Content-Type:image/png');       //图像类型
        imagepng($this->image);                 //显示图像
        imagedestroy($this->image);             //销毁图像资源
    }

   // public function __destruct()
   // {
   //     imagedestroy($this->image);      //销毁图像资源
   // }
}