<x-layout>
    <x-slot name="content">

        <div class="grid-container">
            <?php foreach($afspraak as $afspraak){?>
                <a href="afspraak/{{$afspraak->id}}"><div class="grid-item">{{$afspraak->datum}}</div>
            <?php } ?>
        </div>

    </x-slot>
</x-layout>