<x-layout>
    <x-slot name="content">

        <div class="main">
           <div style="padding: 1em;">Naam: {{$klant->naam}}</div>
           <div style="padding: 1em;">Achternaam: {{$klant->achternaam}}</div>
           <div style="padding: 1em;">Tel: {{$klant->tel}}</div>

            <div class="btnContainer">
                <button type="submit" class="submitbtn" name="updateKlant">Klant aanpassen</button>
            </div>
            <div class="btnContainer">
                <button type="submit" class="submitbtn" name="deleteKlant">Klant verwijderen</button>
            </div>
        </div>


    </x-slot>
</x-layout>