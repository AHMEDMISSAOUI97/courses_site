<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Catégories des formations</h5>
            <!--h1>Explore Top Subjects</h1-->
        </div>
       
        <div class="row">
            @foreach ($categories as $categorie)
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="{{ asset('storage/' .$categorie->image) }}" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href=" {{ route('courses_by_category', ['categoryId' => $categorie->id]) }} ">
                            <h4 class="text-white font-weight-medium"> {{ $categorie->name }} </h4>                        
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>