<div class="card p-0" style="width:15rem">
    <div class="card-head justify-content-around d-flex bg-light">
        <h3>{{$mouse->number}}</h3>
        <div>
            <button class="btn fa-solid fa-cheese fa-2x" wire:click="add({{$mouse}})"></button>
            <button class="btn fa-solid fa-cat fa-2x" wire:click="reduce({{$mouse}})"></button>
        </div>
    </div>
    <img src="{{ URL('storage/img/mouse.png') }}" alt="Topo" class="card-body">
    <p class="card-footer m-0 text-center">ID: {{ $mouse->id }}</p>
</div>
