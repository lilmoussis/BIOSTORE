@extends('Admin.Layout.layout')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Gestion de produits</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
            class="fas fa-plus fa-sm text-white-50"></i> Ajouter</a>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Liste de Produits</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Produit(s)</th>
                        <th>Distributeur(s)</th>
                        <th>Prix Total</th>
                        <th>Etat</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td> </td>
                        <td>
                            <button class="btn btn-danger text-white">Non-traité</button>
                            <button class="btn btn-warning text-white">En cours de traitement</button>
                            <button class="btn btn-success text-white">Traité</button>
                        </td>
                        <td>
                            <a href="" type="button" class="btn btn-success"><i class="far fa-eye"></i></a>
                            <a href="{{ route('commandes.edit') }}" type="button" class="btn btn-success"><i class="fas fa-edit"></i></a>
                            <a href="" type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection