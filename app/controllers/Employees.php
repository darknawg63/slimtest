<?php
class Employees
{
    public static function message()
    {   
        $container = ['Hi, I am from the message function of class MyClass'];
        return $container;
    }

    public static function getEmployee($emp_no)
    {
        $employee = Employee::find($emp_no);
        return $employee;
    }
}