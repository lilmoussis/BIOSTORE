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
                                <h1 class="h4 text-gray-900 mb-4">Ajouter une livraison</h1>
                            </div>
                            <form class="user">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="hidden" class="form-control form-control-user" id="code" name="code"
                                        value="">
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <button class="btn btn-success dropdown-toggle" type="button"
                                            id="type" name="type" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Selectionner le distributeur
                                        </button>
                                        <div class="dropdown-menu animated--fade-in"
                                            aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <button class="btn btn-success dropdown-toggle" type="button"
                                            id="type" name="type" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Selectionner le code de la commande
                                        </button>
                                        <div class="dropdown-menu animated--fade-in"
                                            aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                        </div>
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