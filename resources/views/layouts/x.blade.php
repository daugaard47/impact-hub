<x-base-layout :title="$title" :admin="true">


    @php
        $currentUrl = url()->current();
        $isGame = $currentUrl == url('/x/game') || Str::startsWith($currentUrl, url('/x/game/'));
    @endphp
    {{-- The main content with `full-width`  --}}
    <x-main full-width>
        @if($isGame)
            <x-slot:sidebar drawer="main-drawer" collapsable class="bg-base-100 lg:bg-inherit">
                <x-menu>
                    <x-menu-sub  title="Levels">
                        <x-menu-item link="/x/game/levels/" icon="mdi.view-list">List</x-menu-item>
                        <x-menu-item link="/x/game/levels/create" icon="mdi.plus">Create</x-menu-item>
                    </x-menu-sub>
                    <x-menu-sub  title="Actions">
                        <x-menu-item link="/x/game/actions/" icon="mdi.view-list">List</x-menu-item>
                        <x-menu-item link="/x/game/actions/create" icon="mdi.plus">Create</x-menu-item>
                    </x-menu-sub>
                    <x-menu-sub  title="Multipliers">
                        <x-menu-item link="/x/game/multipliers/" icon="mdi.view-list">List</x-menu-item>
                        <x-menu-item link="/x/game/multipliers/create" icon="mdi.plus">Create</x-menu-item>
                    </x-menu-sub>
                    <x-menu-sub  title="Streaks">
                        <x-menu-item link="/x/game/streaks/" icon="mdi.view-list">List</x-menu-item>
                        <x-menu-item link="/x/game/streaks/create" icon="mdi.plus">Create</x-menu-item>
                    </x-menu-sub>
                    <x-menu-sub  title="Achievements">
                        <x-menu-item link="/x/game/achievements/" icon="mdi.view-list">List</x-menu-item>
                        <x-menu-item link="/x/game/achievements/create" icon="mdi.plus">Create</x-menu-item>
                    </x-menu-sub>
                    <x-menu-sub  title="Quests">
                        <x-menu-item link="/x/game/quests/" icon="mdi.view-list">List</x-menu-item>
                        <x-menu-item link="/x/game/quests/create" icon="mdi.plus">Create</x-menu-item>
                    </x-menu-sub>
                    <x-menu-sub  title="Settings">
                        <x-menu-item link="/x/game/settings/" icon="mdi.view-list">List</x-menu-item>
                        <x-menu-item link="/x/game/settings/create" icon="mdi.plus">Create</x-menu-item>
                    </x-menu-sub>
                </x-menu>
            </x-slot:sidebar>
        @endif



        {{-- The `$slot` goes here --}}
        <x-slot:content>
            {{ $slot }}
        </x-slot:content>


    </x-main>
</x-base-layout>
