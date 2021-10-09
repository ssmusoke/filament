<div class="max-w-2xl mx-auto">

    <h2 class="my-4">
        @if(empty($link))
            Add Link
            @else
            Update Link - {{ $link->title }}
        @endif
    </h2>
    {{ $this->form }}
    <div class="flex justify-between">
        <a href="{{ route('links') }}" class="text-white text-lg bg-red-200 rounded-xl p-2 my-4">Cancel</a>
        <button wire:click="create" class="text-white text-lg bg-indigo-500 rounded-xl p-2 my-4">Submit</button>
    </div>

</div>
