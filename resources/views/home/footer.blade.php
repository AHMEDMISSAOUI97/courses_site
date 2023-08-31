<div class="container-fluid bg-dark text-white py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
    <div class="row pt-5">
        <div class="col-lg-3 col-md-6 mb-4">
            <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">ENTRER EN CONTACT</h5>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>23 Rue Du Départ 75014</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>07 57 81 07 91</p>
                    <p><i class="fa fa-envelope mr-2"></i>contact@prodigiforma.fr</p>
                    <div class="d-flex justify-content-start mt-4">
                        <a class="btn btn-outline-light btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-square" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Nos Formations</h5>
                    <div class="d-flex flex-column justify-content-start">
                        @foreach ($categories as $categorie)
                            <a class="text-white mb-2" href=" {{ route('courses_by_category', ['categoryId' => $categorie->id]) }} "><i class="fa fa-angle-right mr-2"></i>{{$categorie->name}}</a>
                        @endforeach               
                    </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Legales</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white mb-2" href="{{route('conditionGenrale')}}"><i class="fa fa-angle-right mr-2"></i>Conditions Générales de Vente</a>
                        <a class="text-white mb-2" href="{{route('mentionLegale')}}"><i class="fa fa-angle-right mr-2"></i>Mentions Légales</a>
                        <a class="text-white mb-2" href="{{route('politiqueConfidentialité')}}"><i class="fa fa-angle-right mr-2"></i>Politique de Confidentialité</a>                      
                        <a class="text-white mb-2" href="{{route('reglementInterieur')}}"><i class="fa fa-angle-right mr-2"></i>Réglement Intérieur</a>
                        <a class="text-white mb-2" href="{{route('cgu')}}"><i class="fa fa-angle-right mr-2"></i>CGU</a>
                    </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Garantie Qualité</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <h3 class="text-white mb-7" style="padding-left: 115px">4.89/5</h3>
                        <img class="img-rating" src="{{asset('img/rating-fotor.png')}}" alt="">
                        <h5 class="text-white mb-7" style="padding-left: 95px">Note Moyenne</h5> 
                        <h5 class="text-white mb-7" style="padding-left: 70px">Avis des Stagiaires</h5> 
                    </div>
        </div>        
    </div>
</div>

<div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
    <div class="row">
        <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
            <p class="m-0 text-white">&copy; <a href="#">ProdigiForma</a>. Tous droits réservés. développé par <a href="https://prodigiForma.fr">Pro Digital Formation</a>
            </p>
        </div>
    </div>
</div>