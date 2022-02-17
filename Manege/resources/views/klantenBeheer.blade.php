<x-layout>
    <x-slot name="content">
        <div class="main">
            <form action="klantenBeheer" method="POST">
                @csrf
                <div class="inputcontainer">
                    <label for="naam">Naam:</label>
                    <input type="text" id="naam" name="naam" class="inputfields" required>
                </div>
                <br>
                <div class="inputcontainer">
                    <label for="achternaam">Achternaam:</label>
                    <input type="text" id="achternaam" name="achternaam" class="inputfields" required>
                </div>
                <br>
                <div class="inputcontainer">
                    <label for="tel">Telefoon nummer:</label>
                    <input type="tel" id="tel" class="inputfields" name="tel"
                            pattern="(^\+[0-9]{2}|^\+[0-9]{2}\(0\)|^\(\+[0-9]{2}\)\(0\)|^00[0-9]{2}|^0)([0-9]{9}$|[0-9\-\s]{10}$)"
                            required>
                </div>
                <br>
                <div class="inputcontainer">
                    <label for="paard">Paard/pony:</label>
                    <select name='paard_id'>
                        <option value="1">Dartmoor</option>
                        <option value="2">test</option>
                        <option value="3">test</option>
                    </select>
                </div>
                <br>
                <div class="inputcontainer">
                    <input class="submitbtn" type="submit" value="Submit">
                </div>
            </form>
        </div>
    </x-slot>
</x-layout>