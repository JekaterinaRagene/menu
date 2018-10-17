
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Savaitės meniu</h1>
      <p class="lead">Kainos nurodytos eurais (€). Galite atsiskaityti tiek grynais pinigais, pavedimu, tiek kredito kortelėmis. Populiariausios iš jų – Visa, MasterCARD.</p>
</div>
@foreach (App\Categories::all() as $category)
<div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">
               <p>
                   {{ $category->name }}                  
                </p>
            </h4>
          </div>            
            <a type="submit" href='/menu/public/categories/{{ $category->id }}'
               class="btn btn-lg btn-block btn-outline-primary">Daugiau</a> 
        </div>
      </div>
</div>
@endforeach

