<?php

namespace App\Livewire\Department;

use App\Models\Department;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';
    protected $listeners = ['deleteConfirmed'];
    public $deleteId = null;

    public function render()
    {
        return view('livewire.department.index', [
            'departments' => Department::orderBy('updated_at', 'DESC')->paginate(5)
        ])->layout('layouts.app');
    }

    public function confirmDelete($id)
    {
        try {
            $this->deleteId = $id;

            $this->dispatch('confirm-delete');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function deleteConfirmed()
    {
        try {
            Department::findOrFail($this->deleteId)->delete();

            $this->dispatch('dispatch-notification');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
