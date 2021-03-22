<?php
interface MyInterface
{
    const MY_CONSTANT = 1;
    function method1();
    function method2();
}

abstract class ParentClass implements MyInterface
{
    abstract public function method2() : string;
}

class Child extends ParentClass 
{
   public function method1(){
       return 'The first method from interface';
   }

   public function method2() : string {
    return 'An abstract class implements the second method';
    }
}


$child_class_object = new Child();

echo $child_class_object->method1() . '<br>';
echo $child_class_object->method2() . '<br>';
echo MyInterface::MY_CONSTANT;
?>