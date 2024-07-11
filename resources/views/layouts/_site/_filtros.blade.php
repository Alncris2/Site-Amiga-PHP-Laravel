<section class="search-sec">
    <div class="container">
        <form action="{{ route('site.busca') }}">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <input type="text" class="form-control" name="titulo" placeholder="Enter Search">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <select name="tipo_id" class="form-control">
                                <option value="todos">Todos os tipos</option>
                                @foreach($tipos as $tipo)
                                <option value="{{$tipo->id}}">{{$tipo->titulo}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <button type="button" class="btn btn-danger wrn-btn">Pesquisar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>