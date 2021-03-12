<?php

//---------------------------------------------------------------------------
//PHPの基礎の基礎の基礎
//https://qiita.com/konojunya/items/492e8114e6bd55344731
//---------------------------------------------------------------------------

//変数に"Hello!"を入れる
$msg = "Hello!";
echo $msg;

//定数　defineキーワード
//$キーワードは使わない
//定数名は全て大文字にするのがデファクトスタンダード
define("PI",3.14926535);
echo PI;

//定数の値は当然変更不可
//PI = 3;

var_dump(__LINE__); //今の行数
var_dump(__FILE__); //そのファイルまでのパス
var_dump(__DIR__); //そのディレクトリのパス

//文字列
$name = "doti";
echo "My name is $name";
echo "My name is ${$name}";
echo "My name is {$name}";

//文字列の連結
//ドット「.」を打ち込むことで文字列を連結できる
$name = "JIG";
echo 'Myname is '.$name;

//配列
$colors = array("red","blue","yellow");
$colors = ["red","blue","yellow"];
echo $colors[0]; //red

//連装配列
$members = [
    "doti" => "SuperDoti",
    "JIG" => "JIG and SHOKO"
    ];
echo $members["doti"]; //SuperDoti

//関数
function hello(){
    echo "Hello!";
}
hello(); //Hello!

//戻り値のある関数
function hello_return($name)
{
    return "Hello! ${name}";
}
hello_return("Doti"); //Hello! Doti

//クラス
class User
{
    //プロパティ
    public $name;

    //コンストラクタ
    public function __construct($name)
    {
        $this->name = $name;
    }

    //メソッド
    public function sayName()
    {
        echo "Hello $this->name !";
    }
}

//インスタンス作成
$Doti = new User("Doti");
//クラスインスタンスにアクセス
echo $Doti -> $name;
$Doti->sayName();

//クラスの継承
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

//継承させるときはextendsキーワードを使用する
class specialUser2 extends User2
{
    public function saySpecialHi()
    {
        echo "I am Special $this->name";
    }
}

//継承したクラスのインスタンス作成
$JIG = new SpecialUser2("JIG");
echo $JIG->$name;

//オーバーライド
class specialUser3 extends User2
{
    //User2クラスのsayHiメソッドと同名のメソッドを実装
    public function sayHi()
    {
        echo "I am Special $this->name";
    }
}

$SHAKO = new specialUser3("SHAKO");

$JIG = User2("JIG"); //親クラス
$SHAKO = SpecialUser3("SHAKO"); //子クラス

//オーバーライドによって、子クラスに継承されているメソッドの中身が上書きされる
$JIG->sayHi(); //Hello JIG
$SHAKO->sayHi(); //I am Special SHAKO

//継承不可にする
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
    //親クラスでfinalキーワードが設定されているのでコンパイルするとエラーになる
    public function sayHi()
    {
        echo "I am Special $this->name";
    }
}

//アクセス権
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

//このクラスのインスタンスは、親クラスの$nameがpublicなのでアクセスできる
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

//$nameがprivateでアクセスできないのでエラー
//SpecialUserだけはアクセスを許可したい=継承クラスだけは許可したいときは
//「protected」を使う
/*class SpecialUser extends User_Access_private
{
    public function sayHi()
    {
        echo "I am Special $this->name";
    }
}*/

//staticについて
class User_Static
{
    public $name;
    public static $count = 0;
    public function __construct($name)
    {
        //クラスが呼び出されるたびにカウント+1する
        $this->name = $name;
        self::$count++;
    }
    public static function getMes()
    {
        echo "Hello from static!";
    }
}

//staticをつけたメソッドやプロパティは
//「そのクラス名::メソッドなど」でアクセスできる
//User_Staticクラスの中で自分自身を参照したい場合、
//selfキーワードを使ってself::$countのようにする
User_Static::getMes();
$MARINA = new User("MARINA");
echo User::$count; //1

//抽象クラス
//abstractをつけたクラスはインスタンス化できない
abstract class BaseUser
{
    public $name;
    abstract public function sayHi();
}
//メソッドの実装等は、継承した拡張クラスに書く
//アクセス権なども抽象クラスに合わせる必要がある
class User_abstract extends BaseUser
{
    //親クラスのメソッドをオーバーライドして中身を記述
    public function sayHi()
    {
        echo "Hello!";
    }
}

//interface
//クラスより狭義な、細かい部品たちのイメージ
interface sayHi
{
    public function sayHi(); //interfaceは絶対public
}
interface sayHello
{
    public function sayHello();
}

//implementキーワードでinterfaceを継承
//クラスの中で実装部分を定義する
//→部品(interface)を集めて車(クラス)を作るイメージ
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

//外部ファイルの読み込み
//requireキーワードでファイルを読み込む。エラーが出ると例外をスロー
//同じディレクトリに指定のファイル名がある場合は、それを優先して取り込む
require "functions.php";
//require_onceキーワードはrequireとほぼ一緒
//ファイルがすでにrequireで読み込まれている場合は再読み込みをしない
require_once "functions.php";
//includeはrequireと同じだが、エラーが出てもプログラムを続行する
include "functions.php";
include_once "functions.php";

//外部ファイルのメソッドを使う
hello(); //Hello!

//名前空間(functions.phpを参照)
use Test\functions as func;
//関数の最初に、useで指定した文字をつける
func\hello(); //Hello!

//例外処理
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