<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $Blockquote = new Class extends Enhancers { function  __construct() {  function Blockquote( 

              array|string|callable  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('blockquote', $value, $attr, $id, $class);
               
          }

      }

   };
     
