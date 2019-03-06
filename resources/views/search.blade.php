@extends('layouts/app')

@section('content')
    <div class="container mt-4">
        <h1>Sök bland alla artiklar här</h1>
        

        <div class="container">
            <div class="row">
                <div class="col-10">
                <div class="md-form active-pink active-pink-2 mb-3 mt-0">
                    <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                    
                </div>
                </div>
                <div class="col-2">
                    <button type="button" class="btn btn-dark" >GO!</button>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                <form role = "form">
                    <div class = "form-group" >
                        <label for = "name">Område:</label>
                        <!-- <select multiple class = "form-control">
                        <option value="1">Hela Sverige</option>
                        <option value="2">Norrbotten</option>
                        <option value="3">Västerbotten</option>
                        <option value="4">Jämtland</option>
                        <option value="5">Västernorrland</option>
                        <option value="6">Gävleborg</option>
                        <option value="7">Dalarna</option>
                        <option value="8">Värmland</option>
                        <option value="9">Västmanland</option>
                        <option value="10">Stockholm</option>
                        <option value="11">Södermanland</option>
                        <option value="12">Skaraborg</option>
                        <option value="13">Östergötland</option>
                        <option value="14">Älvsborg</option>
                        <option value="15">Gotland</option>
                        <option value="16">Halland</option>
                        <option value="17">Kronoberg</option>
                        <option value="18">Blekinge</option>
                        <option value="19">Skåne</option>
                        </select> -->
                        <ol>
		                    @foreach($locations as $location)
		                    	<li>{{ $location->name }}</li>
		                    @endforeach
		                </ol>
                    </div>
                </form>
                </div>
                <div class="col-sm">
                <form role = "form">
                    <div class = "form-group" >
                        <label for = "name">Kategori:</label>
                        <select multiple class = "form-control">
                        <optgroup value="1" label="Elektronik">
                        <option value="2">Kamerautrustning</option>
                        <option value="3">Datorutrustning</option>
                        <option value="4">Ljudutrustning</option>
                        <option value="0"></option>
                        <optgroup value="5" label="Fritid & Hobby">
                        <option value="6">Träningsmaskiner</option>
                        <option value="7">Tävlings cyklar</option>
                        <option value="8">Sport & fritids utrustning</option>
                        <option value="9">Motortävlings utrustning</option>
                        <option value="10">Musikutrustning</option>
                        <option value="0"></option>
                        <optgroup value="11" label="Fordon">
                        <option value="12">Bilar</option>
                        <option value="13">Motorcyklar</option>
                        <option value="14">Båtar</option>
                        <option value="15">Cyklar</option>
                        </select>
                    </div>
                </form>
                </div>
                <div class="col-sm">
                <form role = "form">
                    <div class = "form-group" >
                        <label for = "name">Sortering:</label>
                        <select multiple class = "form-control">
                        <option value="1">Senaste först</option>
                        <option value="2">Billigaste först</option>
                        <option value="3">Dyraste först</option>
                    </div>
                </form>  
                </div>
            </div>
        </div>
    
    </div>
@endsection

<style>
select.form-control[multiple] {
    height: 50vh;
    width: 25vw;
    background-color: #42b3f4;
}

body > div > form > div > select > option:hover {
    background-color: white;
}

body > div > div > div > div.container > div > div:nth-child(3) > form{
    height: 50vh;
}

</style>