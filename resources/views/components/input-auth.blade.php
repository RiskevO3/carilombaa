@props(['type'=>'text','placeholder'=>'some content..','error'=>false])
<div {{ $attributes->merge(['class'=>'w-full']) }}>
    <input type="{{ $type  }}"
    class='w-full border border-gray-500 placeholder-gray-500 text-gray-500 text-sm p-2 rounded-md shadow'
    placeholder="{{ $placeholder }}"
    {{ $attributes->whereStartsWith('wire:model') }}
    />
    @if('error')
    <p class="text-sm text-red-600 block w-full">{{ $error }}</p>
    @endif
</div>