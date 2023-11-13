<x-index>
    <div class="container p-5">
        <div class="row">
            @foreach ($mice as $mouse)
                <livewire-mouse :mouse="$mouse" />
            @endforeach
        </div>
    </div>
</x-index>
