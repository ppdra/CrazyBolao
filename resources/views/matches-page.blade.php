<x-layouts.app>

    <div class="w-full bg-(--color-background) rounded-2xl p-4">
        <x-ui.heading level="h2" size="md">Filters</x-ui.heading>

        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-2 mt-4 ">

            <x-ui.select placeholder="Choose status..." wire:model="selectedStatus">
                <x-ui.select.option value="live" icon="check-circle">On Live</x-ui.select.option>
                <x-ui.select.option value="upcoming" icon="clock">Upcoming</x-ui.select.option>
                <x-ui.select.option value="finished" icon="x-circle">Finished</x-ui.select.option>
            </x-ui.select>

            <x-ui.select placeholder="Select by stage..."  wire:model="selectedStage">
                <x-ui.select.option value="live" icon="check-circle">On Live</x-ui.select.option>
                <x-ui.select.option value="upcoming" icon="clock">Upcoming</x-ui.select.option>
                <x-ui.select.option value="finished" icon="x-circle">Finished</x-ui.select.option>
            </x-ui.select>

            <x-ui.select placeholder="Find a country..." icon="map-pin" searchable wire:model="selectedCity">
                <x-ui.select.option value="nyc">New York City</x-ui.select.option>
                <x-ui.select.option value="london">London</x-ui.select.option>
                <x-ui.select.option value="paris">Paris</x-ui.select.option>
                <x-ui.select.option value="tokyo">Tokyo</x-ui.select.option>
                <x-ui.select.option value="sydney">Sydney</x-ui.select.option>
                <x-ui.select.option value="berlin">Berlin</x-ui.select.option>
            </x-ui.select>

        </div>
    </div>

    <div class="mt-5 grid sm:grid-cols-1 md:grid-cols-2  gap-4 place-items-center h-full">

        <livewire:match-component />
       
    </div>
</x-layouts.app>
