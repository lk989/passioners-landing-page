<div>
    <x-input-group :required="true">
        <x-slot name="label">{{$label}}</x-slot>
        <x-slot name="input">
            <x-file-input :id="$id" wire:model="files" multiple />
        </x-slot>
        @if($details)
            <x-slot name="details">
                {!!$details!!}
            </x-slot>
        @endif
        <x-slot name="files">
            <div class="row mt-3">
                @foreach($files as $file)
                    <div class="col-lg-2 col-6 mb-3 px-2" wire:key="{{ $file->getClientOriginalName() }}">
                        <div class="card">
                            <div class="card-body">
                                <button type="button" class="btn-close" aria-label="Close" wire:click="removeFile('{{ $file->getClientOriginalName() }}')"></button>
                                <img src="{{ $file->temporaryUrl() }}" alt="{{ $file->getClientOriginalName() }}" class="img-fluid p-3">
                                <p class="mt-2">{{ $file->getClientOriginalName() }}</p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: {{ $progress[$file->getClientOriginalName()] ?? 0 }}%;" aria-valuenow="{{ $progress[$file->getClientOriginalName()] ?? 0 }}" aria-valuemin="0" aria-valuemax="100">
                                        {{ $progress[$file->getClientOriginalName()] ?? 0 }}%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </x-slot>
    </x-input-group>
</div>

<script>
    document.addEventListener('livewire:initialized', function () {
        Livewire.on('sleep', () => {
            return new Promise(resolve => setTimeout(resolve, 1000));
        });
    });
</script>