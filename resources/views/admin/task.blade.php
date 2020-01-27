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
      <section>

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
               <!-- <div class="card-header">Task</div>-->

               <div class="card card-list">
        <div class="card-header white d-flex justify-content-between align-items-center py-3">
          <p class="h5-responsive font-weight-bold mb-0"><i class="fas fa-clipboard-list pr-2"></i>Task List</p>
          <nav aria-label="Page navigation example">
            <ul class="pagination pg-blue mb-0">
              <li class="page-item">
                <a class="border page-link" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item"><a class="border page-link">1</a></li>
              <li class="page-item"><a class="border page-link">2</a></li>
              <li class="page-item"><a class="border page-link">3</a></li>
              <li class="page-item">
                <a class="border page-link" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container my-5">

  
<!-- Section: Block Content -->
<section>

  <style>
    .card-list li.page-item {
      height: 36px;
    }
    .card-list .form-check-input[type="checkbox"] + label:before, .form-check-input[type="checkbox"]:not(.filled-in) + label:after, label.btn input[type="checkbox"] + label:before, label.btn input[type="checkbox"]:not(.filled-in) + label:after {
      margin-top: 0;
    }
    .card-list .form-check-input[type="checkbox"] + label, label.btn input[type="checkbox"] + label {
      height: 15px;
    }
    .card-list .form-check {
      height: 0;
    }
    .card-list .badge {
      height: 18px;
      margin-top: 3px;
    }
  </style>
  
 
        <div class="card card-list">
        
        <div class="card-body">
          <ul class="list-unstyled mb-0">
            <li class="d-flex justify-content-between align-items-center py-2 border-bottom">
              <div class="d-inline-flex">
                <div class="form-check pl-0">
                  <input type="checkbox" class="form-check-input" id="materialChecked2">
                  <label class="form-check-label" for="materialChecked2"></label>
                </div>
                <p class="mb-0"><span class="text">Design a nice theme</span></p>
                <span class="badge badge-danger ml-3"><i class="fa fa-clock pr-1"></i>2 mins</span>
              </div>
              <div class="tools">
                <a><i class="fa fa-edit"></i></a>
                <a><i class="fa fa-trash-alt"></i></a>
              </div>
            </li>
            <li class="d-flex justify-content-between align-items-center py-2 border-bottom">
              <div class="d-inline-flex">
                <div class="form-check pl-0">
                  <input type="checkbox" class="form-check-input" id="materialChecked3">
                  <label class="form-check-label" for="materialChecked3"></label>
                </div>
                <p class="mb-0"><span class="text">Make the theme responsive</span></p>
                <span class="badge badge-info ml-3"><i class="fa fa-clock pr-1"></i>4 hours</span>
              </div>
              <div class="tools">
                <a><i class="fa fa-edit"></i></a>
                <a><i class="fa fa-trash-alt"></i></a>
              </div>
            </li>
            <li class="d-flex justify-content-between align-items-center py-2 border-bottom">
              <div class="d-inline-flex">
                <div class="form-check pl-0">
                  <input type="checkbox" class="form-check-input" id="materialChecked4">
                  <label class="form-check-label" for="materialChecked4"></label>
                </div>
                <p class="mb-0"><span class="text">Let theme shine like a star</span></p>
                <span class="badge badge-warning ml-3"><i class="fa fa-clock pr-1"></i>1 day</span>
              </div>
              <div class="tools">
                <a><i class="fa fa-edit"></i></a>
                <a><i class="fa fa-trash-alt"></i></a>
              </div>
            </li>
            <li class="d-flex justify-content-between align-items-center py-2 border-bottom">
              <div class="d-inline-flex">
                <div class="form-check pl-0">
                  <input type="checkbox" class="form-check-input" id="materialChecked5">
                  <label class="form-check-label" for="materialChecked5"></label>
                </div>
                <p class="mb-0"><span class="text">Let theme shine like a star</span></p>
                <span class="badge badge-success ml-3"><i class="fa fa-clock pr-1"></i>1 week</span>
              </div>
              <div class="tools">
                <a><i class="fa fa-edit"></i></a>
                <a><i class="fa fa-trash-alt"></i></a>
              </div>
            </li>
            <li class="d-flex justify-content-between align-items-center py-2 border-bottom">
              <div class="d-inline-flex">
                <div class="form-check pl-0">
                  <input type="checkbox" class="form-check-input" id="materialChecked6">
                  <label class="form-check-label" for="materialChecked6"></label>
                </div>
                <p class="mb-0"><span class="text">Check your messages and notifications</span></p>
                <span class="badge badge-primary ml-3"><i class="fa fa-clock pr-1"></i>1 week</span>
              </div>
              <div class="tools">
                <a><i class="fa fa-edit"></i></a>
                <a><i class="fa fa-trash-alt"></i></a>
              </div>
            </li>
            <li class="d-flex justify-content-between align-items-center pt-2 pb-1">
              <div class="d-inline-flex">
                <div class="form-check pl-0">
                  <input type="checkbox" class="form-check-input" id="materialChecked7">
                  <label class="form-check-label" for="materialChecked7"></label>
                </div>
                <p class="mb-0"><span class="text">Let theme shine like a star</span></p>
                <span class="badge badge-light ml-3"><i class="fa fa-clock pr-1"></i>1 month</span>
              </div>
              <div class="tools">
                <a><i class="fa fa-edit"></i></a>
                <a><i class="fa fa-trash-alt"></i></a>
              </div>
            </li>
          </ul>
        </div>
        <div class="card-footer white py-3">
          <div class="text-right">
            <button class="btn btn-primary btn-md px-3 my-0 mr-0">Add item<i class="fas fa-plus pl-2"></i></button>
          </div>
        </div>
      </div>
    

</section>
<!-- Section: Block Content -->


</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
