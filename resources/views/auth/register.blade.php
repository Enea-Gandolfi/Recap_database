<x-layout>
      <section>
            <div class="container">
                  <div class="row">
                        <div class="col-12">
                              <h1>Registrati</h1>
                        </div>
                  </div>
            </div>
      </section>
      <section>
            <div class="container">
                  <div class="row">
                        <div class="col-12 col-md-6">
                              <form action="{{route('register')}}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                          <label for="name" class="form-label">Nome utente</label>
                                          <input type="text" class="form-control" id="name" name="name">
                                    </div>
                                    <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Email</label>
                                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                                    </div>
                                    <div class="mb-3">
                                          <label for="exampleInputPassword1" class="form-label">Password</label>
                                          <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                                    </div>
                                    <div class="mb-3">
                                          <label for="exampleInputPassword2" class="form-label">Conferma Password</label>
                                          <input type="password" class="form-control" id="exampleInputPassword2" name="password_confirmation">
                                    </div>
                                    <button type="submit" class="btn btn-dark">Registrati</button>
                              </form>
                        </div>
                  </div>
            </div>
      </section>
</x-layout>