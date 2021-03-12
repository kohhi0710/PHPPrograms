<?php

//---------------------------------------------------------------------------
//PHP�̊�b�̊�b�̊�b
//https://qiita.com/konojunya/items/492e8114e6bd55344731
//---------------------------------------------------------------------------

//�ϐ���"Hello!"������
$msg = "Hello!";
echo $msg;

//�萔�@define�L�[���[�h
//$�L�[���[�h�͎g��Ȃ�
//�萔���͑S�đ啶���ɂ���̂��f�t�@�N�g�X�^���_�[�h
define("PI",3.14926535);
echo PI;

//�萔�̒l�͓��R�ύX�s��
//PI = 3;

var_dump(__LINE__); //���̍s��
var_dump(__FILE__); //���̃t�@�C���܂ł̃p�X
var_dump(__DIR__); //���̃f�B���N�g���̃p�X

//������
$name = "doti";
echo "My name is $name";
echo "My name is ${$name}";
echo "My name is {$name}";

//������̘A��
//�h�b�g�u.�v��ł����ނ��Ƃŕ������A���ł���
$name = "JIG";
echo 'Myname is '.$name;

//�z��
$colors = array("red","blue","yellow");
$colors = ["red","blue","yellow"];
echo $colors[0]; //red

//�A���z��
$members = [
    "doti" => "SuperDoti",
    "JIG" => "JIG and SHOKO"
    ];
echo $members["doti"]; //SuperDoti

//�֐�
function hello(){
    echo "Hello!";
}
hello(); //Hello!

//�߂�l�̂���֐�
function hello_return($name)
{
    return "Hello! ${name}";
}
hello_return("Doti"); //Hello! Doti

//�N���X
class User
{
    //�v���p�e�B
    public $name;

    //�R���X�g���N�^
    public function __construct($name)
    {
        $this->name = $name;
    }

    //���\�b�h
    public function sayName()
    {
        echo "Hello $this->name !";
    }
}

//�C���X�^���X�쐬
$Doti = new User("Doti");
//�N���X�C���X�^���X�ɃA�N�Z�X
echo $Doti -> $name;
$Doti->sayName();

//�N���X�̌p��
class User2
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function sayHi()
    {
        echo "Hello $this->name !";
    }
 }

//�p��������Ƃ���extends�L�[���[�h���g�p����
class specialUser2 extends User2
{
    public function saySpecialHi()
    {
        echo "I am Special $this->name";
    }
}

//�p�������N���X�̃C���X�^���X�쐬
$JIG = new SpecialUser2("JIG");
echo $JIG->$name;

//�I�[�o�[���C�h
class specialUser3 extends User2
{
    //User2�N���X��sayHi���\�b�h�Ɠ����̃��\�b�h������
    public function sayHi()
    {
        echo "I am Special $this->name";
    }
}

$SHAKO = new specialUser3("SHAKO");

$JIG = User2("JIG"); //�e�N���X
$SHAKO = SpecialUser3("SHAKO"); //�q�N���X

//�I�[�o�[���C�h�ɂ���āA�q�N���X�Ɍp������Ă��郁�\�b�h�̒��g���㏑�������
$JIG->sayHi(); //Hello JIG
$SHAKO->sayHi(); //I am Special SHAKO

//�p���s�ɂ���
class User_NoExtends
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    final public function sayHi()
    {
        echo "Hello $this->name !";
    }
}

class SpecialUser_NoExtends extends User_NoExtends
{
    //�e�N���X��final�L�[���[�h���ݒ肳��Ă���̂ŃR���p�C������ƃG���[�ɂȂ�
    public function sayHi()
    {
        echo "I am Special $this->name";
    }
}

//�A�N�Z�X��
class User_Access_public
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function sayHi()
    {
        echo "Hello $this->name !";
    }
}

//���̃N���X�̃C���X�^���X�́A�e�N���X��$name��public�Ȃ̂ŃA�N�Z�X�ł���
class SpecialUser extends User_Access_public
{
    public function sayHi()
    {
        echo "I am Special $this->name";
    }
}

class User_Access_private
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function sayHi()
    {
        echo "Hello $this->name !";
    }
}

//$name��private�ŃA�N�Z�X�ł��Ȃ��̂ŃG���[
//SpecialUser�����̓A�N�Z�X����������=�p���N���X�����͋��������Ƃ���
//�uprotected�v���g��
/*class SpecialUser extends User_Access_private
{
    public function sayHi()
    {
        echo "I am Special $this->name";
    }
}*/

//static�ɂ���
class User_Static
{
    public $name;
    public static $count = 0;
    public function __construct($name)
    {
        //�N���X���Ăяo����邽�тɃJ�E���g+1����
        $this->name = $name;
        self::$count++;
    }
    public static function getMes()
    {
        echo "Hello from static!";
    }
}

//static���������\�b�h��v���p�e�B��
//�u���̃N���X��::���\�b�h�Ȃǁv�ŃA�N�Z�X�ł���
//User_Static�N���X�̒��Ŏ������g���Q�Ƃ������ꍇ�A
//self�L�[���[�h���g����self::$count�̂悤�ɂ���
User_Static::getMes();
$MARINA = new User("MARINA");
echo User::$count; //1

//���ۃN���X
//abstract�������N���X�̓C���X�^���X���ł��Ȃ�
abstract class BaseUser
{
    public $name;
    abstract public function sayHi();
}
//���\�b�h�̎������́A�p�������g���N���X�ɏ���
//�A�N�Z�X���Ȃǂ����ۃN���X�ɍ��킹��K�v������
class User_abstract extends BaseUser
{
    //�e�N���X�̃��\�b�h���I�[�o�[���C�h���Ē��g���L�q
    public function sayHi()
    {
        echo "Hello!";
    }
}

//interface
//�N���X��苷�`�ȁA�ׂ������i�����̃C���[�W
interface sayHi
{
    public function sayHi(); //interface�͐��public
}
interface sayHello
{
    public function sayHello();
}

//implement�L�[���[�h��interface���p��
//�N���X�̒��Ŏ����������`����
//�����i(interface)���W�߂Ď�(�N���X)�����C���[�W
class User_Interface implements sayHi,sayHello
{
    public function sayHi()
    {
        echo "Hi!";
    }

    public function sayHello()
    {
        echo "Hello!";
    }
}

//�O���t�@�C���̓ǂݍ���
//require�L�[���[�h�Ńt�@�C����ǂݍ��ށB�G���[���o��Ɨ�O���X���[
//�����f�B���N�g���Ɏw��̃t�@�C����������ꍇ�́A�����D�悵�Ď�荞��
require "functions.php";
//require_once�L�[���[�h��require�Ƃقڈꏏ
//�t�@�C�������ł�require�œǂݍ��܂�Ă���ꍇ�͍ēǂݍ��݂����Ȃ�
require_once "functions.php";
//include��require�Ɠ��������A�G���[���o�Ă��v���O�����𑱍s����
include "functions.php";
include_once "functions.php";

//�O���t�@�C���̃��\�b�h���g��
hello(); //Hello!

//���O���(functions.php���Q��)
use Test\functions as func;
//�֐��̍ŏ��ɁAuse�Ŏw�肵������������
func\hello(); //Hello!

//��O����
function division($num1,$num2)
{
    try
    {
        if($b === 0)
        {
            throw new Exception("can not use 0");
        }
        return $num1 / $num2;
    }
    catch(Exception $e)
    {
        return $e->getMessage();
    }
}

echo division(4,2); //2
?>