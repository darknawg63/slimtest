<?php
class Employees
{

    public static function show($emp_no)
    {
        $employee = Employee::find($emp_no);
        return $employee;
    }
}