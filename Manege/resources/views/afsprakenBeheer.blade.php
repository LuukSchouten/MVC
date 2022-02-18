<x-layout>
    <x-slot name="content">
        <div class="main">
            <h1>
                Afspraak maken
            </h1>
            <form action="afsprakenBeheer" method="POST">
                @csrf
                <br>
                <h1>Klant:</h1>
                <div class="inputcontainer">
                    <label for="naam">naam:</label>
                    <input type="text" name="naam" id="naam">
                </div>
                <div class="inputcontainer">
                    <label for="achternaam">achternaam:</label>
                    <input type="text" name="achternaam" id="achternaam">
                </div>
                <div class="inputcontainer">
                    <label for="tel">tel:</label>
                    <input type="text" name="tel" id="tel">
                </div>
                <h1>Paard:</h1>
                <div class="inputcontainer">
                    <label for="naam">naam:</label>
                    <input type="text" name="naam" id="naam">
                </div>
                <div class="inputcontainer">
                    <label for="ras">Ras:</label>
                    <select name="ras">
                        <?php foreach($horses as $horse){?>
                            <option value="{{$horse->id}}">{{$horse->naam}}</option>
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