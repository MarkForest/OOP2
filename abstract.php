<?php
abstract class Point
{
   protected $x;
   protected $y;
   public function __construct($x, $y)
   {
       $this->x = $x;
       $this->y = $y;
   }
   function Show()
   {
       echo "<h1>$this->x, $this->y</h1>";
   }
   abstract function Area();
   abstract function Perimeter();
}
?>