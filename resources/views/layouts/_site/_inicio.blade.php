@section('content')
<!-- Texto -->
<br>
<div class="content-site">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10" id="text-ti">
                <nav id="navbarVertical" class="navbar navbar-light bg-ligtt">
                    <nav class="nav nav-pills flex-column">
                        <div class="col-12">
                            <div data-spy="scroll" data-target="#navbarVertical" data-offset="0">
                                
                                <h2 class="text-center"> {{ $pagina->titulo}} </h2>
                                <blockquote class="blockquote text-center "> {{ $pagina->descricao}}</blockquote>
                                <br>
                            </div>
                        </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">


                <div class="col-12">
                    <div data-spy="scroll" data-target="#navbarVertical" data-offset="0" class="scrollspySite text-justify" style="color:black;">
                    {!! nl2br ($pagina->texto) !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection