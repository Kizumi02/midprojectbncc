<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', ['employees' => $employees]);
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:5|max:20',
            'age' => 'required|numeric|min:21',
            'address' => 'required|min:10|max:40',
            'phone_number' => 'required|min:9|max:12|regex:/^08[0-9]+$/'
        ]);

        Employee::create([
            'name' => $validatedData['name'],
            'age' => $validatedData['age'],
            'address' => $validatedData['address'],
            'phone_number' => $validatedData['phone_number']
        ]);

        return redirect()->route('employee.index')->with('success', 'Karyawan berhasil ditambahkan!');
    }

    public function edit(Employee $employee)
    {
        return view('employees.edit', ['employee' => $employee]);
    }

    public function update(Request $request, Employee $employee)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:5|max:20',
            'age' => 'required|numeric|min:21',
            'address' => 'required|min:10|max:40',
            'phone_number' => 'required|min:9|max:12|regex:/^08[0-9]+$/'
        ]);

        $employee->name = $validatedData['name'];
        $employee->age = $validatedData['age'];
        $employee->address = $validatedData['address'];
        $employee->phone_number = $validatedData['phone_number'];
        $employee->save();

        return redirect()->route('employee.index')->with('success', 'Data karyawan berhasil diperbarui!');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employee.index')->with('success', 'Karyawan berhasil dihapus!');
    }
}
