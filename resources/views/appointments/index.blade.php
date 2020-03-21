@extends('layouts.panel')

@section('content')

<div class="card shadow">
    <div class="card-header border-0">
      <div class="row align-items-center">
        <div class="col">
          <h3 class="mb-0">Mis Citas</h3>
        </div>
        <div class="col text-right">
        <a href="{{route('appointments.create')}}" class="btn btn-sm btn-success" title="Crear una Nueva Cita">
              Nuevo Cita
          </a>
        </div>
      </div>
    </div>
    <div class="card-body" role="alert">
       @if(session('notification'))
    
        <div class="alert alert-success" role="alert">
          <strong>Success!</strong> {{session('notification')}}
        </div>
       @endif
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#confirmed-appointments" role="tab" aria-controls="pills-home" aria-selected="true">Mis próximas citas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pending-appointments" role="tab" aria-controls="pills-profile" aria-selected="false">Citas por confirmar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#old-appointments" role="tab" aria-controls="pills-profile" aria-selected="false">Historial de Citas </a>
          </li>
        </ul>
      
   </div>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="confirmed-appointments" role="tabpanel" aria-labelledby="pills-home-tab">
          @include('appointments.confirmed-appointments')
        </div>
        <div class="tab-pane fade" id="pending-appointments" role="tabpanel" aria-labelledby="pills-profile-tab">
          @include('appointments.pending-appointments')
        </div>
        <div class="tab-pane fade" id="old-appointments" role="tabpanel" aria-labelledby="pills-profile-tab">
          @include('appointments.old-appointments')
        </div>
    </div>
</div>
@endsection
