<x-layout>
    <x-slot name="content">

        <div class="main">
           <div style="padding: 1em;">Naam: {{$klant->naam}}</div>
           <div style="padding: 1em;">Achternaam: {{$klant->achternaam}}</div>
           <div style="padding: 1em;">Tel: {{$klant->tel}}</div>


            <div class="btnContainer">
                <a href="/klantAanpassen/{{$klant->id}}">
                    <button type="submit" class="submitbtn" name="updateKlant">Klant aanpassen</button>
                </a>
            </div>

            <div class="btnContainer">
            <form method="POST" action='/klant/{{ $klant->id }}'>
                @csrf
                @method('DELETE')
                    <button type="submit" class="submitbtn" name="deleteKlant">Klant verwijderen</button>
            </form>
            </div>

        </div>


    </x-slot>
</x-layout>