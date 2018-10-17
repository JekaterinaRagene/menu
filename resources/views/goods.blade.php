@extends ('layouts.main') 

@section('content')
<p>
    <p>{{ $product->name }}</p> 
    <p>{{ $product->desription }}</p> 
    <p>{{ $product->price }}</p>    
</p>
<form action='/menu/public/order/{{ $product->id }}'>
    <input type="submit" value='Užsakyti' class="btn btn-lg btn-block btn-outline-primary">
</form>
@endsection

