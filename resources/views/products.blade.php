@extends ('layouts.main')

@section('content')
@foreach (App\Products::all() as $product)
<div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">
                <p>
                    {{ $product->name }}
                 <div class="input-group mb-3">                
                  <span class="input-group-text">{{ $product->price }}</span>
                  <div class="input-group-prepend">
                  <span class="input-group-text">Eur</span>
                    </div>
                </div>
           
        </div>
            <form action='/menu/public/order/{{ $product->id }}'>
                <input type="submit" value='Įdėti į krepšelį' class="btn btn-lg btn-block btn-outline-primary">
            </form>
            </div>  
</div>
</div>                   
@endforeach
@endsection

