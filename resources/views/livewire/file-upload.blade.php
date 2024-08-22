<div>
    <input type="file" wire:model="files" multiple>

    <div class="row mt-3">
        @foreach($files as $file)
            <div class="col-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <button type="button" class="btn-close" aria-label="Close"></button>
                        <img src="{{ $file->temporaryUrl() }}" alt="{{ $fileName = $file->getClientOriginalName() }}" class="img-fluid">
                        <p class="mt-2">{{ $fileName }}</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: {{ $progress[$fileName] ?? 0 }}%;" aria-valuenow="{{ $progress[$fileName] ?? 0 }}" aria-valuemin="0" aria-valuemax="100">
                                {{ $progress[$fileName] ?? 0 }}%
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<script>
    document.addEventListener('livewire:load', function () {
        Livewire.on('file-upload-start', ({ fileName }) => {
            // Handle start event if needed
        });

        Livewire.on('file-upload-progress', ({ fileName, progress }) => {
            const progressBar = document.querySelector(`[data-file="${fileName}"] .progress-bar`);
            if (progressBar) {
                progressBar.style.transition = 'width 0.5s ease'; // Smooth transition
                progressBar.style.width = `${progress}%`;
                progressBar.textContent = `${progress}%`;
            }
        });

        Livewire.on('file-upload-complete', ({ fileName }) => {
            const progressBar = document.querySelector(`[data-file="${fileName}"] .progress-bar`);
            if (progressBar) {
                progressBar.style.transition = 'width 0.5s ease'; // Smooth transition for completion
                progressBar.style.width = '100%';
                progressBar.textContent = '100%';
            }
        });
    });

</script>
