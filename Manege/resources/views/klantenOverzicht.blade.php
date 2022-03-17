<x-layout>
    <x-slot name="content">

        <div class="grid-container">
            <?php foreach($klant as $klant){?>
                <a href="klant/{{$klant->id}}"><div class="grid-item">{{$klant->naam}}</div>
            <?php } ?>
        </div>

    </x-slot>
</x-layout>