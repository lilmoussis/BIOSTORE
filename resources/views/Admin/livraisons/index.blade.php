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
                        <th>Distributeurs</th>
                        <th>Date de livraison</th>
                        <th>Etat</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Donna Snider</td>
                        <td>Customer Support</td>
                        <td>New York</td>
                        <td>
                            <button class="btn btn-danger text-white">Non-livré</button>
                            <button class="btn btn-warning text-white">En cours de livraison</button>
                            <button class="btn btn-success text-white">Livré</button>
                        </td>
                        <td>
                            <a href="" type="button" class="btn btn-success"><i class="far fa-eye"></i></a>
                            <a href="{{ route('livraison.edit') }}" type="button" class="btn btn-success"><i class="fas fa-edit"></i></a>
                            <a href="" type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection