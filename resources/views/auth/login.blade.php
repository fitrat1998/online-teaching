<x-layouts.main>
<x-navbar></x-navbar>
<x-slot:title>
	Sign In
</x-slot>

  <div class="container">
        <div class="row  ">
    <div class="m-5 mt-5"></div>
            <div class="col-md-12 col-md-offset-12 border p-5 shadow-lg p-3 mb-5 bg-white rounded">
                <div class="login-panel panel panel-default ">
                    <div class="panel-heading p-3 ">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="{{ route('login.post') }}">
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
                                            <a href="{{ route('register') }}" style="color:#0C2B4B ;">Registration!</a>
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