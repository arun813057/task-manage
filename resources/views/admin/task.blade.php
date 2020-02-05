@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-4">
    <!--<div class="card-header"><h3>Welcome {{ Auth::user()->name }}</h3></div>
    <div class="card-header">{{ Auth::user()->name }}</div>
    <div class="card-header">Dashboard-3</div>-->
<div class="container ">
  <div class="row">
    <div class="col-md-12 col-lg-12 mx-auto">


      <!-- Section: Block Content -->
      <section class="sidebar">

        <div class="list-group list-group-flush z-depth-1 rounded">
          <div class="list-group-item active d-flex justify-content-start align-items-center py-3">
            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg" class="rounded-circle z-depth-0" width="50" alt="avatar image">
            <div class="d-flex flex-column pl-3">
              <p class="font-weight-normal mb-0">{{ Auth::user()->name }}</p>
              <p class="small mb-0">{{ Auth::user()->email }}</p>
            </div>
          </div>
          <a href="{{ route('login') }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Dashboard</a>
          <a href="#!" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Projects
            <span class="badge badge-info badge-pill">26</span>
          </a>
          <a href="{{ route('admin.task') }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center active">Tasks
            <span class="badge badge-warning badge-pill">5</span>
          </a>
          <a href="#!" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Completed projects
            <span class="badge badge-success badge-pill">10</span>
          </a>
          <a href="#!" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Followers
            <span class="badge badge-danger badge-pill">728</span>
          </a>
        </div>

      </section>
      <!-- Section: Block Content -->


    </div>
  </div>
</div>
    </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Task <a href="/task" class="btn btn-primary float-right">Add new Task</a></div>
                
                <div class="card-body">
                
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   
                    


                    You are logged in! admin {{ Auth::user()->name }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
