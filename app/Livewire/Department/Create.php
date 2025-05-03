<?php

namespace App\Livewire\Department;

use Livewire\Component;

class Create extends Component
{
    public $name;

    public function render()
    {
        return view('livewire.department.create')->layout('layouts.app');
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|string|max:255|min:3|unique:departments,name',
        ]);

        try {
            \App\Models\Department::create([
                'name' => $this->name,
            ]);

            $this->reset('name');

            $this->dispatch('dispatch-notification');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
