<x-layout>
    <x-slot name="content">
        <div class="main">
            <form action="klantenBeheer" method="POST">
                @csrf
                <div class="inputcontainer">
                    <label for="naam">Naam:</label>
                    <input type="text" id="naam" class="inputfields" required>
                </div>
                <br>
                <div class="inputcontainer">
                    <label for="achternaam">Achternaam:</label>
                    <input type="text" id="achternaam" class="inputfields" required>
                </div>
                <br>
                <div class="inputcontainer">
                    <label for="tel">Telefoon nummer:</label>
                    <input type="tel" id="tel" class="inputfields"
                            pattern="(^\+[0-9]{2}|^\+[0-9]{2}\(0\)|^\(\+[0-9]{2}\)\(0\)|^00[0-9]{2}|^0)([0-9]{9}$|[0-9\-\s]{10}$)"
                            required>
                </div>
                <div class="inputcontainer">
                    <input class="submitbtn" type="submit" value="Submit">
                </div>
            </form>
        </div>
    </x-slot>
</x-layout>