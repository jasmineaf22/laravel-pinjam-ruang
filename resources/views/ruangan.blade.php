@extends('layout.layout')

@section('content')

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <!-- /.card-header -->
              <div class="card-body">
                {{-- konten --}}
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('img/contoh.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
              </div>
          </div>
        </div>
    </div>
</div>
</section>

@endsection