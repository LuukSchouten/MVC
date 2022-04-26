<x-layout>
    <x-slot name="content">

        <div class="grid-container">
            <?php foreach($paard as $paard){?>
                <a href="paard/{{$paard->id}}"><div class="grid-item">{{$paard->naam}}</div>
            <?php } ?>
        </div>

    </x-slot>
</x-layout>