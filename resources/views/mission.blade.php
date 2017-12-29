@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card text-center" id="missionCard">
        <div class="card-header">
            <ul class="nav nav-pills card-header-pills" id="missionTablist" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="who-tab" data-toggle="tab" href="#who" role="tab" aria-controls="who" aria-selected="true">Who</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="what-tab" data-toggle="tab" href="#what" role="tab" aria-controls="what" aria-selected="false">What</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="where-tab" data-toggle="tab" href="#where" role="tab" aria-controls="where" aria-selected="false">Where</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="when-tab" data-toggle="tab" href="#when" role="tab" aria-controls="when" aria-selected="false">When</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="why-tab" data-toggle="tab" href="#why" role="tab" aria-controls="why" aria-selected="false">Why</a>
                </li>
            </ul>
        </div> 
    
        <div class="tab-content" id="missionTabContent">
            <div class="tab-pane fade show active" id="who" role="tabpanel" aria-labelledby="who-tab">
                <div class="card-body" aria-labelledby="missionCard">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="tab-pane fade" id="what" role="tabpanel" aria-labelledby="what-tab">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="tab-pane fade" id="where" role="tabpanel" aria-labelledby="where-tab">
                
            </div>
        </div>
    </div>
</div>

@endsection