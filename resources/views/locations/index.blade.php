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
                        <ul>
                        <select multiple class = "form-control">
		                    @foreach($locations as $location)
                                <option><li>{{ $location->name }}</li></option>
		                    @endforeach
                        </select>
		                </ul>
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
    background-color: lightgrey;
    border: 1px solid black;
    box-shadow: 5px 5px 3px  grey;
}

body > div > form > div > select > option:hover {
    background-color: white;
}

body > div > div > div > div.container > div > div:nth-child(3) > form{
    height: 50vh;
}

body > div > div:nth-child(2) > div > div.col-2 > button{
    border: 1px solid black;
    box-shadow: 5px 5px 3px grey;
}

</style>