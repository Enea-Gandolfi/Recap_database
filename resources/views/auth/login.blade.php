<x-layout>
      <section>
            <div class="container">
                  <div class="row">
                        <div class="col-12">
                              <h1 class="custom-tx-color">Accedi</h1>
                        </div>
                  </div>
            </div>
      </section>
      <section>
            <div class="container">
                  <div class="row">
                        <div class="col-12 col-md-6">
                              <form action="{{route('login')}}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label custom-tx-color">Email</label>
                                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                                    </div>
                                    <div class="mb-3">
                                          <label for="exampleInputPassword1" class="form-label custom-tx-color">Password</label>
                                          <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                                    </div>
                                    <div class="mb-3 form-check">
                                          <input type="checkbox" class="form-check-input custom-tx-color" id="exampleCheck1" name="remember">
                                          <label class="form-check-label" for="exampleCheck1 custom-tx-color">Remember me</label>
                                    </div>
                                    <button type="submit" class="btn btn-dark custom-tx-color">Login</button>
                              </form>
                        </div>
                  </div>
            </div>
      </section>
</x-layout>