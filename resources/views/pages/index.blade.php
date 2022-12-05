@extends('layouts.app')


@section('content')

<br>
        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark d-flex">
            <div class="col-md-6 px-0">
              <h1 class="display-4 font-italic">CSE Archiving system</h1>
              <p class="lead my-3">Do you prefer reading the books, Do you want to gain the reference to make your own final year prouject as a cse students ?<br>
                Here you can find the answer of ypur question.
              </p>
              <h3 class="lead mb-0"><a href="/projects" class="text-white font-weight-bold">Lets go now </a></h3>
            </div>
            <div class="col-md-6 px-0">
                <img src="/images/6.jpg" alt="">
              </div>
          </div>

          <br>

          <h2>Recent Projects</h2>

          <div class="row mb-2">
            <div class="col-md-6">
              <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                  <h3 class="mb-0">
                    <a class="text-dark" href="#"style="text-decoration: none;">Bus reservation system</a>
                  </h3>
                  <div class="mb-1 text-muted">05 Dec 2022</div>
                  <p class="card-text mb-auto">This is there to help the different people from different areas to keep the place in the bus without going to the bus station and when the time to go.</p>
                  <a href="#">Continue reading</a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                  <h3 class="mb-0">
                    <a class="text-dark" href="#"style="text-decoration: none;">library management</a>
                  </h3>
                  <div class="mb-1 text-muted">05 Dec 2022</div>
                  <p class="card-text mb-auto">This is the abstract of the library management project which is designed for the purpose of managing the library in the easy and easiest way.</p>
                  <a href="#">Continue reading</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-md-6">
              <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                  <h3 class="mb-0">
                    <a class="text-dark" href="#"style="text-decoration: none;">Sell App</a>
                  </h3>
                  <div class="mb-1 text-muted">28 Nov 2022</div>
                  <p class="card-text mb-auto">This project has developed in the react native and its purpose is to support the people who are using it to buy and sell their product online. .</p>
                  <a href="#">Continue reading</a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                  <h3 class="mb-0">
                    <a class="text-dark" href="#"style="text-decoration: none;">Hostel Management</a>
                  </h3>
                  <div class="mb-1 text-muted">21 Nov 2022</div>
                  <p class="card-text mb-auto">This is the web based project that is developed for the purpose of the managing the students hostel in the easy way.</p>
                  <a href="#">Continue reading</a>
                </div>
              </div>
            </div>

          <a href="/projects">more</a>
          </div>
          <a href="">Back to top</a>
        </div>

@endsection
