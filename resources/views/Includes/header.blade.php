<nav class="navbar navbar-expand-lg  p-3 bg-info">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
        <li>
            
        </li>
      </ul>
    </div>
  </div>
</nav>

<a class="btn bg-info-subtle fixed-left" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" style="border-radius: 0;">
  <-----Click
</a>
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <!-- <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5> -->
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body bg-info">
    <div>
      <h2>Dashboard</h2>
    </div>
    <ul style="list-style-type: none;" class="mt-5">
        <li class="p-3 mt-4" style="border-bottom: 2px solid grey;font-size:25px;font-weight:600"><a href="{{route('candidate-add')}}" class="mt-5 text-dark" style="text-decoration: none;" >Home</a></li>
        <li class="p-3 mt-4" style="border-bottom: 2px solid grey;font-size:25px;font-weight:600"><a href="{{route('candidate-details-show')}}" class="mt-5 text-dark " style="text-decoration: none;">Candidates</a></li>
        <li class="p-3 mt-4" style="border-bottom: 2px solid grey;font-size:25px;font-weight:600"><a href="Register" class="mt-5 text-dark" style="text-decoration: none;">Register</a></li>
        <li class="p-3 mt-4" style="border-bottom: 2px solid grey;font-size:25px;font-weight:600"><a href="Login" class="text-dark"  style="text-decoration: none;">Login</a></li>
    </ul>
    
  </div>
</div>