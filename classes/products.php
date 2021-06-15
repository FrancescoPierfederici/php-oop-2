<?php
class Products
{
    protected $name;
    protected $description;
    protected $measure;



    function __construct($name, $description, $measure) {
        $this->setName($name);
        $this->setDes($description);
        $this->setMeasure($measure);
    }
    public function setName($value) {
        $this->name = $value;
    
        
    }
    public function getName() {
        return $this->name;
    }
    public function setDes($value) {
        $this->description = $value;
    
        
    }
    public function getDes() {
        return $this->description;
    }
    public function setMeasure($value) {
        $this->measure= $value;
    
        
    }
    public function getMeasure() {
        return $this->Measure;
      }
}
?>