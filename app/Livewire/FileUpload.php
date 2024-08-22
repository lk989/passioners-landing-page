<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class FileUpload extends Component
{
    use WithFileUploads;

    public $files = [];
    public $progress = [];

    public function updatedFiles()
    {
        foreach ($this->files as $file) {
            $fileName = $file->getClientOriginalName();
            $this->progress[$fileName] = 0;

            $this->dispatch('file-upload-start', ['fileName' => $fileName]);

            // Simulate file processing
            $this->simulateFileProcessing($file, $fileName);
        }
    }

    private function simulateFileProcessing($file, $fileName)
    {
        $file->storeAs('uploads', $fileName);

        for ($i = 0; $i <= 100; $i++) {
            // sleep(1); // Simulate time passing
            $this->dispatch('file-upload-progress', ['fileName' => $fileName, 'progress' => $i]);
        }

        // Finalize upload
        $this->dispatch('file-upload-complete', ['fileName' => $fileName]);
    }
    
    public function render()
    {
        return view('livewire.file-upload');
    }
}