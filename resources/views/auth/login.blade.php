<x-layouts.main>
<x-navbar></x-navbar>
<x-slot:title>
	Sign In
</x-slot>

  <div class="container">
        <div class="row m-5">
    <div class="m-5"></div>
            <div class="col-md-12 col-md-offset-12 ">
                <div class="login-panel panel panel-default ">
                    <div class="panel-heading p-3 ">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="{{ route('login.store') }}">
                            @csrf
                            <fieldset>
                                <div class="form-group p-3">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group p-3">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox p-3">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>

                                <div class="checkbox p-3">
                                    <label>
                                        <button href="index.html" class="btn btn-lg btn-success btn-block p-">Login</button>
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-layouts.main>