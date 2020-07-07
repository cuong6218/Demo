<?php
//   $a = 5;
//   $b = 10;
// function increase()
// {
//     global $a;
//     global $b;
//     $a += ++$a + $b--;
//     // return $a;
// }
// increase();
// echo $a; //21
// echo "<br/>";
// echo $b;//9
// $x = 3;
// $y = 4;
// $x += ++$x + $y--;
// echo $x."<br/>";
// echo $y;

//--------------------------------------------
// class Name{
//     public $name;
//     function __construct($name)
//     {
//         $this->name = $name;
//     }
//     function __toString()
//     {
//         return 'Name1 to string '.$this->name."<br/>";
//     }
// }
// $trung = new Name('Trung');
// $cuc = $trung;
// $cuc->name = 'Cuc';

// $cuc = null;
// echo $trung->__toString();
// echo $trung;
// echo $cuc;
//-------------------------------------------
// class Base{
//     public static function show(){
//         echo "Base::show() called.";
//     }
// }
// class Divine extends Base{
//     public static function show(){
//         echo "Divine::show() called.";
//     }
// }
// Divine::show();
// $divine = new Divine();
// $divine->show();
//--------------------------------------------------------
// class Base1{
//     const BASE = 300;
//     function incre($fator){
//         self::BASE*$fator;
//     }
// }
// class Div extends Base1{
//     function incre($fator){

//        return  self::BASE*$fator;
//     }
// }
// $base1 = new Div();
// echo $base1->incre(3);
//-------------------------------------------------------
// $x = 5;
// $y = 10;
// function add(){
//     // global $x, $y;
//     // $x = $x + $y;
//     $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
// }
// add();
// echo $x;
// echo "<br/>";
// echo $y;
// echo $z;
//------------------------------------------------
// class Age{
//     public $name;
//     function __construct($name)
//     {
//         $this->name = $name;
//     }
//     function show(){
        
//         return "Hello $this->name";
//     }
// }
// $age1 = new Age('Hi');
// echo $age1->show();