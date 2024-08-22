<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\On;

class FileUpload extends Component
{
    use WithFileUploads;

    public $label;
    public $id;
    public $details;
    public $files = [];
    public $progress = [];

    public function mount($label, $id, $details = null)
    {
        $this->label = $label;
        $this->id = $id;
        $this->details = $details;
    }
    
    public function updatedFiles()
    {
        foreach ($this->files as $file) {
            $this->progress[$file->getClientOriginalName()] = 0;
            $this->dispatch('simulate-upload', $file->getClientOriginalName());
        }
    }

    #[On('simulate-upload')]
    public function simulateFileUpload($fileName)
    {
        $this->dispatch('file-upload-start', ['fileName' => $fileName]);

        $progress = 0;
        while ($progress <= 100) {
            $this->progress[$fileName] = $progress;
            $this->dispatch('file-upload-progress', ['fileName' => $fileName, 'progress' => $progress]);
            $progress += 1;
            $this->dispatch('sleep'); 
        }

        $this->dispatch('file-upload-complete', ['fileName' => $fileName]);
    }

    public function removeFile($fileName)
    {
        $this->files = array_filter($this->files, function ($file) use ($fileName) {
            return $file->getClientOriginalName() !== $fileName;
        });
        unset($this->progress[$fileName]);
    }

    public function render()
    {
        return view('livewire.file-upload');
    }
}