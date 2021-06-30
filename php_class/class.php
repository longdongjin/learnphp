<?php
//php类
//构造函数：在创建对象初始化时，为堆成成员变量赋初始值，在new对象的时候自动执行,实例化时可以传参
//class Site
//{
//    var $url;
//    var $title;
//
//    function __construct($par1,$par2)
//    {
//        $this->url = $par1;
//        $this->title = $par2;
//    }
//
//    function getUrl()
//    {
//        echo $this->url . PHP_EOL;
//    }
//    function getTitle()
//    {
//        echo $this->title . PHP_EOL;
//    }
//}
//
//$runoob = new Site("www.runoob.com","菜鸟教程");
//$taobao = new Site("www.taobao.com","淘宝");
//$google = new Site("www.google.com","谷歌");
//
//$runoob->getTitle();
//$taobao->getTitle();
//$google->getTitle();
//
//$runoob->getUrl();
//$taobao->getUrl();
//$google->getUrl();

//析构函数:与构造函数相反，当对象结束生命周期是，自动执行析构函数
//class MyDestructableClass
//{
//    function __construct()
//    {
//        print "构造函数。实例化对象时会自动执行";
//        $this->name = "MyDestructableClass";
//    }
//
//    function __destruct()
//    {
//        print "销毁" . $this->name . "\n";
//    }
//}
//
//$obj = new MyDestructableClass();



//继承与重写
//class  Parent1 {
//    function name(){
//        echo "this Parent class";
//    }
//}
//
//class Child extends Parent1{
//    function lastname()
//    {
//        echo "lastname is test";
//    }
//
//    //重写父类的方法
//    function name()
//    {
//        echo "继承后重写父类的name方法";
//    }
//}
//$obj = new Child();
//$obj->name();
//$obj->lastname();


//接口,使用interface关键字定义一个接口,使用implements 实现一个接口，语法：calss Template implements itemplate
//定义一个接口，反馈当前时间
//interface getDate{
//    public function getDates();
//}
//
//class Template implements getDate
//{
//    public function getDates()
//    {
//        $date = time();
//        echo $date;
//    }
//}
//
//$date = new Template();
//echo $date->getDates();


//static关键字，声明类属性或方法为 static(静态)，就可以不实例化类而直接访问。
//class Foo{
//    public static $my_static = 'foo';
//
//    public function staticValue()
//    {
//        return self::$my_static;
//    }
//
//    public static function test()
//    {
//        echo "this is static function";
//    }
//}
//
//print Foo::$my_static . "<br>";
//print Foo::test() . "<br>";
//$foo = new Foo();
//print $foo->staticValue();



//final关键字，如果父类中的方法被声明为final，则这个方法不能被重写，如果类被声明为final则不能被继承
//final function 类：final class



//调用父类构造方法PHP 不会在子类的构造方法中自动的调用父类的构造方法。
//要执行父类的构造方法，需要在子类的构造方法中调用 parent::__construct() 。
//class BaseClass{
//    function __construct()
//    {
//        print "BaseClass 类中构造方法" . "<br>";
//    }
//}
//
//class SubClass extends BaseClass
//{
//    function __construct()
//    {
//        //子类构造方法不能自动调用父类的构造方法，需要显式调用.如果子类中没有构造方法则会自动调用父类的构造方法
//        parent::__construct();
//        print "SubClass类中的构造方法"."<br>";
//    }
//}
//
//class OtherSubClass extends BaseClass{
//
//}
//
//$obj = new BaseClass();
//$obj = new SubClass();
//$obj = new OtherSubClass();


