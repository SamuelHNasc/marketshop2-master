<x-layout_base>

    <x-menu></x-menu>

    <div class="carousel w-full">
        <div id="slide1" class="carousel-item relative w-full">
          <img src="https://http2.mlstatic.com/D_NQ_859602-MLA75368444934_042024-OO.webp" class="w-full" />
          <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#slide3" class="btn btn-circle">❮</a>
            <a href="#slide2" class="btn btn-circle">❯</a>
          </div>
        </div>
        <div id="slide2" class="carousel-item relative w-full">
          <img src="https://http2.mlstatic.com/D_NQ_755668-MLA75432560149_032024-OO.webp" class="w-full" />
          <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#slide1" class="btn btn-circle">❮</a>
            <a href="#slide3" class="btn btn-circle">❯</a>
          </div>
        </div>
        <div id="slide3" class="carousel-item relative w-full">
          <img src="https://http2.mlstatic.com/D_NQ_806000-MLA75393863908_042024-OO.webp" class="w-full" />
          <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#slide2" class="btn btn-circle">❮</a>
            <a href="#slide1" class="btn btn-circle">❯</a>
          </div>
        </div>
      </div>

    <div class="bg-white rounded-md shadow-md m-6 p-6">
        <div class="font-bold text-lg">
            Ofertas do dia
        </div>

        <div class="grid grid-cols-4 gap-3">

            @foreach ($listaProdutos as $produto)

            <div class="card bg-base-100 shadow-xl">
                    <figure><img class="aspect-square w-full object-cover" src="{{$produto->foto}}" alt="Shoes" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">{{$produto->nome}}</h2>
                        <p>{{$produto->descricao}}</p>
                        <div class="card-actions justify-between">
                          <div class="bg-red-500 pl-2 pr-2 pb-1 pt-1 text-white border rounded-full font-bold text-m">£ {{number_format($produto->valor,2, ',', '.')}}</div>
                            <button class="btn btn-primary">Comprar</button>
                        </div>
                    </div>
                </div>

            @endforeach

            {{-- for (variavel = inicio; até onde; de quanto aumenta) --}}

        </div>

    </div>

</x-layout_base>
