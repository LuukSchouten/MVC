<x-layout>
    <x-slot name="content">
        <div class="main">
            <h1 style="text-align: center;">
                Paarden toevoegen
            </h1>
            <form action="paardenBeheer" method="POST">
                @csrf
                <div class="inputcontainer">
                    <label for="naam">Naam:</label>
                    <input type="text" id="naam" name="naam" class="inputfields" required>
                </div>
                <div class="inputcontainer">
                    <label for="schofthoogte">Schofthoogte (meters):</label>
                    <input type="number" id="schofthoogte" step=".01" name="schofthoogte" class="inputfields" required>
                </div>
                <div class="inputcontainer">
                    <label for="gebruik">Gebruik:</label>
                    <input type="text" id="gebruik" name="gebruik" class="inputfields" required>
                </div>
                <div class="inputcontainer">
                    <label for="lvh">Land van herkomst:</label>
                    <input type="text" id="lvh" name="lvh" class="inputfields" required>
                </div>
                <div class="inputcontainer">
                    <input class="submitbtn" type="submit" value="Submit">
                </div>
        </div>
    </x-slot>
</x-layout>