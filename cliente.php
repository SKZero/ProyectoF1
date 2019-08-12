<?php
class Producto{
    private $descripcion='';
    private $cantidad=0;
    public function setDescripcion($descripcion){
        $this -> $descripcion = $descripcion;  
    }
    public function getDescripcion(){
         return $this -> $descripcion;  
    }
    public function setCantidad($cantidad){
        $this -> $cantidad = $cantidad; 
    }
    public function getcantidad(){
        return $this -> $cantidad; 
    }
    public function DeterminePrecio(){
        if ($this -> $descripcion ='doloneurotropas' )
        return 80;
        elseif ($this -> $descripcion ='vital forte' )
        return 50;
        elseif ($this -> $descripcion ='jarabe para la tos' )
        return 30;
        else
        return 0;
   }
   public function CalculoSubtotal (){
       return $this -> DeterminePrecio * $this -> $cantidad;
   }
   public function CalculoIva (){
       return $this -> CalculoSubtotal ()* 0.12;
   }
   public function CalculoconIva (){
       return $this -> CalculoSubtotal() - $this -> CalculoIva;
   }
}
?>