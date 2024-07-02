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
                                <h1 class="h4 text-gray-900 mb-4">Modifier un produit</h1>
                            </div>
                            <form action="{{ route() }}"  class="user">
                                <div class="form-group">

                                        <input type="text" class="form-control form-control-user" id="nom" name="nom"
                                            placeholder="Nom du produit">

                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="number" class="form-control form-control-user"
                                            id="volume" name="volume" placeholder="volume">
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-success dropdown-toggle" type="button"
                                            id="type" name="type" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Selectionner le type
                                        </button>
                                        <div class="dropdown-menu animated--fade-in"
                                            aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="number" class="form-control form-control-user"
                                            id="poids" name="poids" placeholder="Entre le poids">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="file" class="form-control form-control-user"
                                            id="photo" placeholder="Photo">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="number" class="form-control form-control-user"
                                            id="stock" name="stock" placeholder="Entre le stock">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control form-control-user"
                                            id="prix" name="prix" placeholder="Prix">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="vertu"
                                        placeholder="Vertu">
                                </div>
                                <a href="login.html" class="btn btn-success btn-user btn-block"> <i class="fas fa-thumbs-up"> </i>
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
