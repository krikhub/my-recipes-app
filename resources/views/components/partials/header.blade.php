<x-layouts.max-width>
    <div class="py-10 flex items-center justify-between gap-6 flex-nowrap">

        {{-- Heading: bleibt in natürlicher Größe --}}
        <x-typography.heading style="lg" as="h2" class="shrink-0">
            Recpberry
        </x-typography.heading>

        {{-- Suchfeld: darf mittig wachsen --}}
        <x-utils.search-bar class="flex-1 max-w-md mx-6" />

        {{-- Navigation: bleibt rechts, ohne Umbruch --}}
        <nav class="shrink-0">
            <ul class="flex gap-6">
                <li>
                    <x-typography.paragraph style="lg" as="a" source="http://127.0.0.1:8000/">
                    <a source="">
                        Rezepte
                    </a>
                    </x-typography.paragraph>   
                </li>
                <li>
                    <x-typography.paragraph style="lg" as="a" source="http://127.0.0.1:8000/">
                        +
                    </x-typography.paragraph>   
                </li>
            </ul>
        </nav>

    </div>
</x-layouts.max-width>
