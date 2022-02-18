<x-layout>
    <x-slot name="content">

        <div class="grid-container">
            <?php foreach($klanten as $klant){?>
                <a href="klantenBeheer/{{$klant->id}}"><div class="grid-item">{{$klant->naam}}</div>
            <?php } ?>
        </div>

    </x-slot>
</x-layout>