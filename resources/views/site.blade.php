  @extends('layouts.app')
  @section('content')

  <div id="area-cabecalho">
    <div id="logo">
      <img src="img/logo.jpg" alt="" id="logo">
      {{-- <h1>TEC<span class="cor-logo">+</span></h1> --}}
    </div>
    <div id="menu">
      <a href="#">Home</a>
      <a href="#">Produtos</a>
      <a href="#">Suprimentos</a>
      <a href="#">Contato</a>
      <a href="#">Empresa</a>
      <a id="whats" href="https://api.whatsapp.com/send?1=pt_BR&phone=5585988265804" target="_blank">
                       <img src="https://fpeduc.com/site/images/icone_what.png" alt="whatsapp"
                           class="whatsapp"><span>Atendimento<br>via WhatsApp</span>
     </a>
    </div>
  </div>

  <div id="area-principal">
    <div id="area-postagens">
      <div class="postagem">
        {{-- <h2>Banner</h2> --}}
        {{-- <span class="data-postagem">postado 20 marco de 2022</span> --}}
        <img src="img/banner1.png" alt="">
        <p>
        Nosso objetivo é propor o fornecimento de soluções em controle de ponto e acesso adequado as necessidades de sua empresa, agregando um valor significativo aos seus negócios através de produtos e serviços confiáveis a preços justos.
        </p>
        {{-- <a href="">Leia mais...</a> --}}
      </div>
    </div>
    <div class="area-produto">
      <div id="produto-1">
         <img src="img/produto_ponto.jpg" alt="">
            <a href="#" class="btn">Pontos Eletrônico</a>
         {{-- <button>Produtos</button> --}}
      </div>
      <div id="produto-2">
           <img src="img/produto_catraca.jpg" alt="">
              <a href="#" class="btn">Catracas</a>
      </div>
    </div>

  </div>
  <div id="rodape">
      <div id="rodape-left">
        <h3>Endereço</h3>
        <ul>
            <li>Telefones: 85 3062-1466 / 85 3062- 2265 / 85 98826-5804</li>
            <li>2021 @TEC MAIS - Todos os direitos reservados</li>
        </ul>
      </div>
      <div id="rodape-right">
         <h3>Contato</h3>
          <ul>
            <li>E-mail: Vendas: comercial@tecmais.net.br</li>
            <li> Suporte técnico: suporte@tecmais.net.br</li>
            <li>Fale conosco: faleconosco@tecmais.net.br</li>
          </ul>
      </div>
  </div>
    @endsection
