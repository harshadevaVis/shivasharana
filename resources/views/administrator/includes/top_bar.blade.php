<nav class="navbar adminNav navbar-expand-lg navbar-light text-white">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="{{route('adminPaymentsView')}}"><img src="{{\Illuminate\Support\Facades\URL::asset('my_assets/img/logo.png')}}"> </a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link  text-white" href="{{route('adminPaymentsView')}}">Payments </a>
            </li>
        </ul>
        <form id="logOutForm" action="{{route('logout')}}" method="POST">
            {{csrf_field()}}
            <button class="btn" onclick="$('#logOutForm').submit();">Logout</button>
        </form>
    </div>
</nav>