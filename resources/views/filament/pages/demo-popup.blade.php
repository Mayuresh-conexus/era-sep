<x-filament::page>
    <x-filament::button color="primary" wire:click="openModal">
        Open Demo Modal
    </x-filament::button>

    <div x-data x-show="{{ $isOpen ? 'true' : 'false' }}" x-cloak
        class="fixed inset-0 z-50 flex items-center justify-center bg-black/50">
        <div class="bg-white p-6 rounded-lg w-96">
            <h2 class="text-lg font-bold mb-4">Demo Modal</h2>

            <p>This is a barebones modal to test Filament/Alpine/Livewire.</p>

            <div class="mt-4 flex justify-end">
                <x-filament::button color="secondary" wire:click="closeModal">
                    Close
                </x-filament::button>
            </div>
        </div>
    </div>
</x-filament::page>
