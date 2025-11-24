<?php

namespace App\Livewire\Material;

use Livewire\Component;
use Livewire\WithFileUploads;

class Upload extends Component
{
    use WithFileUploads;

    public $files = [];

    public function removeFile($index)
    {
        array_splice($this->files, $index, 1);
    }

    public function updatedFiles()
    {
        $this->validate([
            'files.*' => 'file|mimes:pdf,docx,pptx,jpg,jpeg|max:10240', // 10MB
        ]);
    }

    public function render()
    {
        return view('livewire.material.upload')->layout('components.layouts.dashboard');
    }
}
