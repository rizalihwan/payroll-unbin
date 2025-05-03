<?php

namespace App\Livewire\SalarySlip;

use Livewire\Component;

class Create extends Component
{
    public $employee_id;
    public $salary_month;
    public $earnings;
    public $deductions;
    public $net_salary;
    public $status;

    public function render()
    {
        return view('livewire.salary-slip.create', [
            'employees' => \App\Models\Employee::get(),
        ])->layout('layouts.app');
    }

    public function store()
    {
        $this->validate([
            'employee_id' => 'required|exists:employees,id',
            'salary_month' => 'required',
            'earnings' => 'required|numeric',
            'deductions' => 'required|numeric',
            'net_salary' => 'required|numeric',
            'status' => 'required|in:0,1'
        ]);

        try {
            \App\Models\SalarySlip::create([
                'employee_id' => $this->employee_id,
                'salary_month' => $this->salary_month,
                'earnings' => $this->earnings,
                'deductions' => $this->deductions,
                'net_salary' => $this->net_salary,
                'status' => $this->status
            ]);

            $this->reset(['employee_id', 'salary_month', 'earnings', 'deductions', 'net_salary', 'status']);

            $this->dispatch('dispatch-notification');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
