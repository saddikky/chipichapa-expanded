<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    function show(){
        $employee = Employee::get();
        return view('employee.show', compact('employee'));
    }

    function list(){
        $employee = Employee::get();
        return view('employee.list', compact('employee'));
    }

    function add(){
        return view('employee.add');
    }

    function submit(Request $request){
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->age = $request->age;
        $employee->address = $request->address;
        $employee->phone = $request->phone;
        $employee->division = $request->division;
        $employee->salary = $request->salary;
        $employee->save();

        return redirect()->route('employee.show');
    }

    function edit($id){
        $employee = Employee::find($id);
        return view('employee.edit', compact('employee'));

    }

    function update(Request $request, $id) {
        $employee = Employee::find($id);
        $employee->name = $request->name;
        $employee->age = $request->age;
        $employee->address = $request->address;
        $employee->phone = $request->phone;
        $employee->division = $request->division;
        $employee->salary = $request->salary;
        $employee->update();
        return redirect()->route('employee.show');
    }

    function delete($id) {
        $employee = Employee::find($id);
        $employee ->delete();
        return redirect()->route('employee.show');
    }
}
