<x-layout>
    <x-slot name="content">
        <div class="main">
            <h1>
                Klant toevoegen
            </h1>
            <form action="klantToevoegen" method="POST">
                @csrf
                <div class="inputcontainer">
                    <label for="naam">naam:</label>
                    <input type="text" name="naam" id="naam" required>
                </div>
                <div class="inputcontainer">
                    <label for="achternaam">achternaam:</label>
                    <input type="text" name="achternaam" id="achternaam" required>
                </div>
                <div class="inputcontainer">
                    <label for="tel">tel:</label>
                    <input type="text" name="tel" id="tel" pattern="(^\+[0-9]{2}|^\+[0-9]{2}\(0\)|^\(\+[0-9]{2}\)\(0\)|^00[0-9]{2}|^0)([0-9]{9}$|[0-9\-\s]{10}$)" required>
                </div>
                <div class="inputcontainer">
                    <input class="submitbtn" type="submit" value="Submit">
                </div>
            </form>

        </div> 
    </x-slot>
</x-layout>