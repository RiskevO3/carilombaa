import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';
import intersect from '@alpinejs/intersect';
import 'flowbite';
import { initFlowbite } from 'flowbite';
Alpine.plugin(intersect)
Livewire.start()
