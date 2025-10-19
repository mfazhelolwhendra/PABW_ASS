@extends('layout.app')

@section('title', 'Dashboard UMKM')
@section('content')
@section('user_role', 'UMKM')
<div class="container-fluid">
 

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div c  lass="card-body text-center">
                    <i class="bi bi-kanban display-5 text-primary"></i>
                    <h5 class="mt-3">Total Proyek</h5>
                    <h3>4</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="bi bi-chat-dots display-5 text-success"></i>
                    <h5 class="mt-3">Pesan Masuk</h5>
                    <h3>12</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="bi bi-person display-5 text-warning"></i>
                    <h5 class="mt-3">Developer Aktif</h5>
                    <h3>5</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

