@extends('Admin.Layout.layout')
@section('content')

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Modifier distributeur</h1>
                            </div>
                            <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="nom" name="nom"
                                            placeholder="Nom">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="prenom" name="prenom"
                                            placeholder="Prenom">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="email" class="form-control form-control-user"
                                            id="email" name="email" placeholder="Entre le mail">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="file" class="form-control form-control-user" id="logo" name="logo" placeholder="Photo">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="number" class="form-control form-control-user"
                                            id="numero" name="numero" placeholder="Entre le numero de telephone">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user"
                                            id="motdepasse" name="motdepasse" placeholder="Mot de passe">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user"
                                            id="localite" name="localite" placeholder="Entre la localite">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="url" class="form-control form-control-user"
                                            id="map" name="map" placeholder="Lien de maps">
                                    </div>
                                </div>
                                <a href="login.html" class="btn btn-success btn-user btn-block"><i class="fas fa-thumbs-up"> </i>
                                    Valider
                                </a>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection