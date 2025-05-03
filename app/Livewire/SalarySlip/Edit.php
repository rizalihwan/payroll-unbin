<?php

namespace App\Livewire\SalarySlip;

use App\Models\SalarySlip;
use Livewire\Component;

class Edit extends Component
{
    public $salarySlipId;
    public $employee_id;
    public $salary_month;
    public $earnings;
    public $deductions;
    public $net_salary;
    public $status;
    public $employee;

    public function render()
    {
        return view('livewire.salary-slip.edit')->layout('layouts.app');
    }

    public function mount($id)
    {
        try {
            $salarySlip = SalarySlip::find($id);

            if ($salarySlip) {
                $this->employee = $salarySlip->employee->FullName;
                $this->salarySlipId = $salarySlip->id;
                $this->employee_id = $salarySlip->employee_id;
                $this->salary_month = $salarySlip->salary_month;
                $this->earnings = $salarySlip->earnings;
                $this->deductions = $salarySlip->deductions;
                $this->net_salary = $salarySlip->net_salary;
                $this->status = $salarySlip->status;
            } else {
                return back();
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function update()
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
            SalarySlip::find($this->salarySlipId)->update([
                'employee_id' => $this->employee_id,
                'salary_month' => $this->salary_month,
                'earnings' => $this->earnings,
                'deductions' => $this->deductions,
                'net_salary' => $this->net_salary,
                'status' => $this->status
            ]);

            $this->dispatch('dispatch-notification');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
