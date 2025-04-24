<x-base.base>
    <div class="grid grid-cols-[auto_1fr] grid-rows-[1fr_auto]">
        <aside class="row-span-2">
            <h3>sidebar here</h3>
        </aside>
        <div class="">
            {{ $slot }}
        </div>
        <footer class="">
            <h4>footer here</h4>
        </footer>
    </div>
</x-base.base>
