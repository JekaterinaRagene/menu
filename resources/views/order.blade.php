@extends ('layouts.main')

@section('content')
<form method='post' action='/menu/public/order_finaly'>
    <div class="form-group">
        <label for="exampleFormControlInput1">Vardas</label>
        <input type="text" name='customer_name' class='form-control'>
    </div> 
    <div class="form-group">
        <label for="exampleFormControlInput1">Telefono numeris</label>
        <input type="text" name='phone' class='form-control'>
    </div>  
    <div class="form-group">
        <label for="exampleFormControlInput1">Miestas</label>
        <input type="text" name='city' class='form-control'>
    </div>     
    <div>
        <label for="exampleFormControlInput1">Komentaras</label>
        <textarea class='form-control'></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Kiekis</label>
        <input type="number" name='amount' class='form-control'>
    </div>      
    <input type='hidden' value='{{$products_id}}' name='product_id' />
    <input type="submit" value='Order' class="btn btn-success">
</form>
@endsection
