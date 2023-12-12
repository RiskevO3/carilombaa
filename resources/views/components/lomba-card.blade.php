@props(['lomba'])
<div class="overflow-hidden rounded-md bg-white shadow">
    <div class="relative">
        <img src="{{ $lomba->getImage() }}" alt="" srcset=""
        class="object-cover object-center" loading="lazy" 
        />
        <div class="absolute right-3 top-3 p-[10px] bg-red-800 border border-red-800 rounded shadow">
            <p class="text-white font-medium text-sm leading-tight">{{ $lomba->category->first()->name }}</p>
        </div>
    </div>
    <div class="mx-[24px]">
        <div class="my-2">
            <h1 class="text-lg font-semibold text-stone-900">
                {{ $lomba->title }}
            </h1>
            <p class="text-gray-500 text-sm font-normal">
                {{ $lomba->start_date->format('j F') }} - {{ $lomba->end_date->format('j F') }}
            </p>
        </div>
        <div class="mb-2">
            <p class="text-neutral-600">
                {{ Str::words($lomba->short_description, 11, ' ...') }}
            </p>
        </div>
        <div class="mb-4 mx-auto">
            <a
                href="{{ route('detail_lomba', ['uuid' => $lomba->id]) }}"
                wire:navigate
                class="block w-full bg-transparent text-amber-500 text-base text-center rounded-md font-semibold font-inter border border-amber-500 py-2 px-1 hover:bg-amber-500 hover:text-white hover:scale-95 transition ease-in relative"
                >
                Selengkapnya
        </a>
        </div>
    </div>
</div>