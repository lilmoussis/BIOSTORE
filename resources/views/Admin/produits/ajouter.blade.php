@extends('Admin.Layout.layout')
@section('content')

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image">
                        <img style="height:500px"  src="{{ asset('img/logo.png') }}" alt="">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Ajouter un produit</h1>
                            </div>
                            <form action="{{route('produit.store')}}" method="POST" enctype="multipart/form-data" class="user">
                                @csrf
                                <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="nom" name="nom"
                                            placeholder="Nom du produit">
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="number" class="form-control form-control-user"
                                            id="volume" name="volume" placeholder="volume">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <select class="form-control dropdown-toggle" id="type" name="type">
                                            <option value="">Selectionner un type de produit</option>
                                            <option value="Poudre">Poudre</option>
                                            <option value="Naturel">Naturel</option>
                                          </select>
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
                                <button type="submit" class="btn btn-success btn-user btn-block"><i class="fas fa-thumbs-up"> </i>
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
