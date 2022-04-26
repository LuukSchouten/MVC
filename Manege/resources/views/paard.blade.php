<x-layout>
    <x-slot name="content">

        <div class="main">
           <div style="padding: 1em;">Naam: {{$paard->naam}}</div>
           <div style="padding: 1em;">Schofthoogte: {{$paard->schofthoogte}}</div>
           <div style="padding: 1em;">Gebruik: {{$paard->gebruik}}</div>
           <div style="padding: 1em;">Land van herkomst: {{$paard->lvh}}</div>


            <div class="btnContainer">
                <a href="/paardAanpassen/{{$paard->id}}">
                    <button type="submit" class="submitbtn" name="updatePaard">Paard aanpassen</button>
                </a>
            </div>

            <div class="btnContainer">
            <form method="POST" action='/paard/{{ $paard->id }}'>
                @csrf
                @method('DELETE')
                    <button type="submit" class="submitbtn" name="deletePaard">Paard verwijderen</button>
            </form>
            </div>

        </div>


    </x-slot>
</x-layout>