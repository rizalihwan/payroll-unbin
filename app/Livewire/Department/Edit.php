<?php

namespace App\Livewire\Department;

use Livewire\Component;
use App\Models\Department;

class Edit extends Component
{
    public $departmentId;
    public $name;

    public function render()
    {
        return view('livewire.department.edit')->layout('layouts.app');
    }

    public function mount($id)
    {
        try {
            $department = Department::find($id);

            if ($department) {
                $this->departmentId = $department->id;
                $this->name = $department->name;
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
            'name' => 'required|string|max:255|min:3|unique:departments,name,' . $this->departmentId,
        ]);

        try {
            Department::find($this->departmentId)->update([
                'name' => $this->name,
            ]);

            $this->dispatch('dispatch-notification');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
