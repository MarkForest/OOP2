<?php
namespace app\costyan;
abstract class Point
{
   protected $x;
   protected $y;
   public function __construct(float $x, float $y)
   {
       $this->x = $x;
       $this->y = $y;
   }
   function Show() : void
   {
       echo "<h1>$this->x, $this->y</h1>";
   }
   abstract function Area() : float;
   abstract function Perimeter() : float;
}
class Rectangle extends Point
{
    protected $width;
    protected $height;

    public function __construct(float $x, float $y, float $width, float $height)
    {
        parent::__construct($x, $y);
        $this->height = $height;
        $this->width = $width;
    }
    function Area() : float
    {
        return $this->width * $this->height;
    }

    function Perimeter() : float
    {
        return ($this->width + $this->height) * 2;
    }
    function Show() : void
    {
        parent::Show();
    }
}
