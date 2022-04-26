<x-layout>
    <x-slot name="content">
        <div class="main">
            <h1>
                Paard aanpassen
            </h1>
            <form action="{{$paard->id}}" method="POST">
                @csrf
                <div class="inputcontainer">
                    <label for="naam">naam:</label>
                    <input type="text" value="{{$paard->naam}}" name="naam" required>
                </div>
                <div class="inputcontainer">
                    <label for="schofthoogte">Schofthoogte (meters):</label>
                    <input type="text" value="{{$paard->schofthoogte}}" name="achternaam" required>
                </div>
                <div class="inputcontainer">
                    <label for="gebruik">Gebruik:</label>
                    <input type="text" value="{{$paard->gebruik}}" name="tel" required>
                </div>
                <div class="inputcontainer">
                    <label for="lvh">Land van herkomst:</label>
                    <input type="text" value="{{$paard->lvh}}" name="tel" required>
                </div>
                <div class="inputcontainer">
                    <input class="submitbtn" type="submit" value="Submit">
                </div>
            </form>

        </div> 
    </x-slot>
</x-layout>