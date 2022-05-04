<x-layout>
    <x-slot name="content">
        <div class="main">
            <h1>
                Afspraak aanpassen
            </h1>
            <form action="{{$afspraak->id}}" method="POST">
                @csrf
                <h1>Klant:</h1>
                <div class="inputcontainer">
                    <label for="klant_id">Klant:</label>	
                    <select name="klant_id">
                        @foreach($klant as $klant)
                            <option value="{{$klant->id}}"> {{$klant->naam}}</option>
                        @endforeach
                    </select>
                </div>
                <br>

                <h1>Paard:</h1>
                <div class="inputcontainer">
                    <label for="paard_id">Naam:</label>
                    <select name="paard_id">
                        <?php foreach($paard as $paard){?>
                            <option value="{{$paard->id}}">{{$paard->naam}}</option>
                        <?php } ?>
                    </select>
                </div>
                <div class="inputcontainer">
                    <label for="dateTime">Datum en tijd:</label>
                    <input type="datetime-local" 
                           name="datum"
                           class="today" required>
                </div>
                <div class="inputcontainer">
                    <input class="submitbtn" type="submit" value="Submit">
                </div>
            </form>

        </div> 
    </x-slot>
</x-layout>