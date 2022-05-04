<x-layout>
    <x-slot name="content">

        <div class="main">
           <div style="padding: 1em;">Naam: {{$afspraak->klanten->naam}}</div>
           <div style="padding: 1em;">Paard: {{$afspraak->paarden->naam}}</div>
           <div style="padding: 1em;">datum: {{$afspraak->datum}}</div>


            <div class="btnContainer">
                <a href="/afspraakAanpassen/{{$afspraak->id}}">
                    <button type="submit" class="submitbtn" name="updateKlant">Afspraak aanpassen</button>
                </a>
            </div>

            <div class="btnContainer">
            <form method="POST" action='/afspraak/{{$afspraak->id}}'>
                @csrf
                @method('DELETE')
                    <button type="submit" class="submitbtn" name="deleteKlant">Afspraak verwijderen</button>
            </form>
            </div>

        </div>


    </x-slot>
</x-layout>