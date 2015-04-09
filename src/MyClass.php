<?php
class MyClass
{
    public static function message()
    {   
        $container = ['Hi, I am from the message function of class MyClass'];
        return $container;
    }

    public static function getEmployee()
    {
        $employee = Employee::find(10001);
        return $employee;
    }
}