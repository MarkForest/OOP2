<?php
namespace app\costyan;
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
class Rectangle extends Point
{
    protected $width;
    protected $height;

    public function __construct($x, $y, $width, $height)
    {
        parent::__construct($x, $y);
        $this->height = $height;
        $this->width = $width;
    }
    function Area()
    {
        return $this->width * $this->height;
    }

    function Perimeter()
    {
        return ($this->width + $this->height) * 2;
    }
    function Show()
    {
        parent::Show();
    }
}
?>