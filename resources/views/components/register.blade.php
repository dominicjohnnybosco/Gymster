<section class="h-100 h-custom" style="background-image: url('assets/img/carousel-1.jpg')">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-8 col-xl-6">
          <div class="card rounded-3"style="opacity: 0.7;">
            <div class="card-body p-4 p-md-5" >
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2 text-center text-dark">Registration Info</h3>

              <form method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label>User Name</label>
                    <input type="text" class="form-control" placeholder="User Name Here">
                  </div>
                <div class="form-group mb-3">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group mb-3">
                    <label>Date of Birth</label>
                    <input type="date" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label>Current Weight</label>
                    <input type="number" class="form-control" placeholder="10kg">
                </div>
                <div class="col-md-6 mb-4">
                    <label>Gender</label>
                    <select class="select">
                      <option value="1" disabled>Gender</option>
                      <option value="2">Female</option>
                      <option value="3">Male</option>
                      <option value="4">Other</option>
                    </select>
  
                  </div>
                <div class="form-group mb-3">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group mb-3">
                  <label for="exampleInputPassword1">Confirm Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
                </div>
                <div class="form-check mb-3">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

