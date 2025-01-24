@extends('main')

@section('content')

<div class="header">
    Dentro do topo do meu site
</div>
<div class="content-center ">
    <div class="row">
        <div class="col-6" style="background-color: blue;">
            Dentro do col 1/2
        </div>
        <div class="col-6" style="background-color: red;">
            Dentro do col 2/2
        </div>
    </div>

</div>
<div class="footer">
    Dentro do rodapé
</div>
<!-- 
<main class="form-signin w-100 m-auto">
    <form>
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <div class="form-check text-start my-3">
            <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Remember me
            </label>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2024</p>
    </form>
</main> -->
@endsection