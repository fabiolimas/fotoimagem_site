<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Lojas Imagem — Revelação, Álbuns, Fotopresentes e Molduraria</title>
  <meta name="description" content="Lojas Imagem: revelação fotográfica, álbuns personalizados, fotopresentes, molduraria e atendimento profissional. 6 lojas em PE e BA." />
<link rel="icon" href="{{asset('assets/img/icon.png')}}" type="image/png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/css/style1.css') }}">
</head>
<body>
  @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <div class="d-flex align-items-center ">
            <i class="ti ti-circle-check-filled me-2"></i>
            <span>{{ session('success') }} </span>
        </div>
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <div class="d-flex align-items-center ">
            <i class="ti ti-alert-triangle-filled me-2"></i>
            <span>Erro ao enviar mensgem! </span>
        </div>
    </div>
@endif
<!-- HEADER -->
<header id="site-header" class="scrolled">
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="#inicio">
        <img src="{{asset('assets/img/logo.png')}}" class="w-50">
      </a>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
        <i class="bi bi-list fs-3"></i>
      </button>
      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item"><a class="nav-link" href="#inicio">Início</a></li>
          <li class="nav-item"><a class="nav-link" href="#servicos">Serviços</a></li>
          <li class="nav-item"><a class="nav-link" href="#albuns">Álbuns</a></li>
          <li class="nav-item"><a class="nav-link" href="#fotopresentes">Fotopresentes</a></li>
          <li class="nav-item"><a class="nav-link" href="#profissional">Profissional</a></li>
          <li class="nav-item"><a class="nav-link" href="#lojas">Lojas</a></li>
          <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
        </ul>
        <a href="https://easyphoto.lojasimagem.com.br" class="btn btn-brand d-none d-md-inline-flex align-items-center gap-2" target="_blank">
          <i class="bi bi-bag"></i> Revele Agora
        </a>
      </div>
    </div>
  </nav>
</header>

<!-- HERO -->
<section id="inicio" class="hero">
  <img src="{{asset('assets/img/family.jpg')}}" alt="Família guardando memórias com fotos reveladas" class="bg" />
  <div class="overlay"></div>
  <div class="container position-relative">
    <div class="py-5" style="max-width:780px">
      <div class="eyebrow mb-4"><span class="bar"></span>Desde 1988 · 6 lojas na região</div>
      <h1>Guarde o que<br>o tempo <em class="brand">não apaga.</em></h1>
      <p class="lead mt-4">
        Revelação fotográfica, álbuns personalizados, fotopresentes e molduraria.
        Eternizamos suas memórias com a qualidade de quem entende de fotografia há mais de 36 anos.
      </p>
      <div class="d-flex flex-wrap gap-3 mt-4">
        <a href="https://easyphoto.lojasimagem.com.br" class="btn btn-brand" target="_blank">Quero revelar <i class="bi bi-arrow-right ms-2"></i></a>
        <a href="#lojas" class="btn btn-outline-light-square">Encontrar uma loja</a>
      </div>
      <div class="d-flex flex-wrap align-items-center gap-4 mt-5 text-white-50">
        <div class="d-flex align-items-center gap-2">
          <span class="text-brand"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></span>
          <span class="small">Milhares de clientes satisfeitos</span>
        </div>
        <span class="d-none d-sm-inline" style="height:24px;width:1px;background:rgba(255,255,255,.3)"></span>
        <span class="small">Entrega para todo o Brasil</span>
      </div>
    </div>
  </div>
</section>

<!-- SERVICES -->
<section id="servicos">
  <div class="container">
    <div class="mb-5" style="max-width:640px">
      <div class="eyebrow mb-3"><i class="bi bi-stars me-2"></i>Nossos serviços</div>
      <h2 class="display-4 fw-bold">Tudo o que você precisa <br><em class="brand">em fotografia.</em></h2>
    </div>
    <div class="row g-4">
      <div class="col-lg-4 col-md-6">
        <article class="service-card featured h-100">
          <div class="img-wrap">
            <img src="{{asset('assets/img/revelacao.jpg')}}" alt="Revelação fotográfica" loading="lazy" />
            <div class="grad"></div>
            <span class="tag">Mais pedido</span>
            <div class="content">
              <div class="d-flex align-items-center gap-2 mb-2"><i class="bi bi-image text-brand"></i><h3 class="h4 m-0 text-white">Revelação</h3></div>
              <p class="small mb-0 text-white-50">Suas fotos reveladas com a melhor qualidade do mercado, em diversos tamanhos e acabamentos.</p>
            </div>
          </div>
        </article>
      </div>
      <div class="col-lg-8">
        <div class="row g-4">
          <div class="col-md-6">
            <article class="service-card h-100">
              <div class="img-wrap">
                <img src="{{asset('assets/img/album.jpg')}}" alt="Fotoálbum" loading="lazy" />
                <div class="grad"></div>
                <div class="content">
                  <div class="d-flex align-items-center gap-2 mb-2"><i class="bi bi-book text-brand"></i><h3 class="h5 m-0 text-white">Fotoálbum</h3></div>
                  <p class="small mb-0 text-white-50">Eternize seus melhores momentos em álbuns personalizados — Gold, Plus e Encarte.</p>
                </div>
              </div>
            </article>
          </div>
          <div class="col-md-6">
            <article class="service-card h-100">
              <div class="img-wrap">
                <img src="{{asset('assets/img/fotopresente.jpg')}}" alt="Fotopresentes" loading="lazy" />
                <div class="grad"></div>
                <div class="content">
                  <div class="d-flex align-items-center gap-2 mb-2"><i class="bi bi-gift text-brand"></i><h3 class="h5 m-0 text-white">Fotopresentes</h3></div>
                  <p class="small mb-0 text-white-50">Canecas, camisetas, quadros e muito mais, totalmente personalizados.</p>
                </div>
              </div>
            </article>
          </div>
          <div class="col-md-6">
            <article class="service-card h-100">
              <div class="img-wrap">
                <img src="{{asset('assets/img/moldura.jpg')}}" alt="Molduraria" loading="lazy" />
                <div class="grad"></div>
                <div class="content">
                  <div class="d-flex align-items-center gap-2 mb-2"><i class="bi bi-easel text-brand"></i><h3 class="h5 m-0 text-white">Molduraria</h3></div>
                  <p class="small mb-0 text-white-50">Sua foto e moldura no mesmo lugar. Decore sua casa com mais cor e histórias.</p>
                </div>
              </div>
            </article>
          </div>
          <div class="col-md-6">
            <article class="service-card h-100">
              <div class="img-wrap">
                <img src="{{asset('assets/img/profissional.jpg')}}" alt="Profissional" loading="lazy" />
                <div class="grad"></div>
                <div class="content">
                  <div class="d-flex align-items-center gap-2 mb-2"><i class="bi bi-camera text-brand"></i><h3 class="h5 m-0 text-white">Profissional</h3></div>
                  <p class="small mb-0 text-white-50">Soluções completas para fotógrafos profissionais. Praticidade e qualidade.</p>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
      <div class="col-12">
        <div class="cta-card row align-items-center g-4">
          <div class="col-md-8">
            <div class="eyebrow mb-3"><span class="bar"></span>Solicite</div>
            <h3 class="h2 fw-bold m-0">Não encontrou o que procura?</h3>
            <p class="text-white-50 mb-0 mt-2">Fale com nossa equipe e monte um orçamento personalizado para você.</p>
          </div>
          <div class="col-md-4 text-md-end">
            <a href="#contato" class="btn btn-brand">Pedir orçamento</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ALBUNS -->
<section id="albuns" class="bg-soft">
  <div class="container">
    <div class="row g-5 align-items-center">
      <div class="col-lg-6">
        <div class="position-relative">
          <img src="{{asset('assets/img/album.jpg')}}" alt="Álbum fotográfico premium" class="w-100 ratio-4x5 img-cover shadow-image" />
          <div class="float-badge d-none d-md-block">
            <div style="font-family:'Playfair Display',serif;font-size:2.5rem;font-weight:700;line-height:1">3</div>
            <div class="text-uppercase small mt-2" style="letter-spacing:.18em;font-size:.7rem">linhas exclusivas para cada momento</div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="eyebrow mb-3"><i class="bi bi-book me-2"></i>Fotoálbum</div>
        <h2 class="display-5 fw-bold mb-3">Suas memórias em <em class="brand">um álbum único.</em></h2>
        <p class="text-secondary fs-5 mb-4">Aniversários, casamentos, formaturas, o primeiro ano do bebê ou aquela viagem dos sonhos. Eternizamos seus melhores momentos com altíssima qualidade.</p>

        <div class="tier highlight mb-3">
          <div class="d-flex justify-content-between align-items-start mb-2">
            <h3 class="h4 mb-0">Álbum Gold</h3>
            <span class="badge bg-brand rounded-0 text-uppercase" style="letter-spacing:.16em;font-size:.65rem">Destaque</span>
          </div>
          <p class="small text-white-50 mb-3">Páginas rígidas com Hot-Melt, adesivo termoplástico que evita que o álbum empene com o clima.</p>
          <div><span class="feature"><i class="bi bi-check2 text-brand"></i> Hot-Melt</span><span class="feature"><i class="bi bi-check2 text-brand"></i> Resistente ao clima</span><span class="feature"><i class="bi bi-check2 text-brand"></i> Acabamento premium</span></div>
        </div>

        <div class="tier mb-3">
          <h3 class="h4 mb-2">Álbum Plus</h3>
          <p class="small text-secondary mb-3">Fácil de manusear, voltado ao público amador. Mesma apresentação da linha Gold.</p>
          <div><span class="feature"><i class="bi bi-check2 text-brand"></i> Manuseio prático</span><span class="feature"><i class="bi bi-check2 text-brand"></i> Ideal para viagens</span><span class="feature"><i class="bi bi-check2 text-brand"></i> Custo-benefício</span></div>
        </div>

        <div class="tier">
          <h3 class="h4 mb-2">Álbum Encarte</h3>
          <p class="small text-secondary mb-3">Capa dura para fotos no tamanho 20x25cm com capacidade de até 100 fotos.</p>
          <div><span class="feature"><i class="bi bi-check2 text-brand"></i> Capa dura</span><span class="feature"><i class="bi bi-check2 text-brand"></i> Até 100 fotos</span><span class="feature"><i class="bi bi-check2 text-brand"></i> Fotos 20x25cm</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FOTOPRESENTES -->
<section id="fotopresentes">
  <div class="container">
    <div class="row g-5 align-items-center">
      <div class="col-lg-6 order-lg-2">
        <img src="{{asset('assets/img/fotopresente.jpg')}}" alt="Fotopresentes personalizados" class="w-100 ratio-4x3 img-cover shadow-image" />
      </div>
      <div class="col-lg-6">
        <div class="eyebrow mb-3"><i class="bi bi-gift me-2"></i>Fotopresentes</div>
        <h2 class="display-5 fw-bold mb-3">Um presente <em class="brand">personalizado</em> por você.</h2>
        <p class="text-secondary fs-5 mb-4">Surpreenda alguém especial com um presente único. Imprimimos suas fotos favoritas em produtos exclusivos, prontos para emocionar.</p>
        <div class="row g-3 mb-4">
          <div class="col-6"><div class="fp-tile"><i class="bi bi-cup-hot text-brand fs-4"></i><span class="fw-medium">Canecas</span></div></div>
          <div class="col-6"><div class="fp-tile"><i class="bi bi-tshirt text-brand fs-4"></i><span class="fw-medium">Camisetas</span></div></div>
          <div class="col-6"><div class="fp-tile"><i class="bi bi-puzzle text-brand fs-4"></i><span class="fw-medium">Quebra-cabeças</span></div></div>
          <div class="col-6"><div class="fp-tile"><i class="bi bi-key text-brand fs-4"></i><span class="fw-medium">Chaveiros</span></div></div>
        </div>
        <a href="#contato" class="btn btn-brand">Criar meu presente</a>
      </div>
    </div>
  </div>
</section>

<!-- PROFISSIONAL -->
<section id="profissional" class="pro-section">
  <div class="bgimg"><img src="{{asset('assets/img/profissional.jpg')}}" alt="" loading="lazy" /></div>
  <div class="container position-relative">
    <div style="max-width:820px">
      <div class="eyebrow mb-3"><i class="bi bi-camera me-2"></i>Para fotógrafos</div>
      <h2 class="display-4 fw-bold mb-3">Soluções profissionais <br><em class="brand">sem complicação.</em></h2>
      <p class="text-white-50 fs-5 mb-5" style="max-width:640px">
        Se você busca praticidade, segurança e qualidade no envio e revelação das suas fotos profissionais, nós somos a empresa perfeita para você. Descomplique seus pedidos com a excelência da Lojas Imagem.
      </p>
      <div class="row g-4 mb-5">
        <div class="col-sm-4">
          <i class="bi bi-truck text-brand fs-2 d-block mb-3"></i>
          <h3 class="h5">Envio facilitado</h3>
          <p class="text-white-50 small">Sistema próprio para envio rápido e seguro.</p>
        </div>
        <div class="col-sm-4">
          <i class="bi bi-shield-check text-brand fs-2 d-block mb-3"></i>
          <h3 class="h5">Qualidade garantida</h3>
          <p class="text-white-50 small">Padrão profissional em cada revelação.</p>
        </div>
        <div class="col-sm-4">
          <i class="bi bi-award text-brand fs-2 d-block mb-3"></i>
          <h3 class="h5">Experiência</h3>
          <p class="text-white-50 small">Mais de 36 anos atendendo profissionais.</p>
        </div>
      </div>
      <a href="#contato" class="btn btn-brand">Falar com a equipe profissional</a>
    </div>
  </div>
</section>

<!-- STORES -->
<section id="lojas" class="bg-soft">
  <div class="container">
    <div class="row g-4 align-items-end mb-5">
      <div class="col-lg-8">
        <div class="eyebrow mb-3"><i class="bi bi-geo-alt me-2"></i>Nossas lojas</div>
        <h2 class="display-4 fw-bold m-0">6 unidades <em class="brand">para te atender.</em></h2>
      </div>
      <div class="col-lg-4">
        <p class="text-secondary fs-5 m-0">Estamos presentes em Pernambuco e na Bahia, prontos para receber você com a melhor qualidade em fotografia.</p>
      </div>
    </div>

    <div class="store-banner">
      <img src="{{asset('assets/img/storefront.jpg')}}" alt="Fachada de loja Lojas Imagem" />
      <div class="ov">
        <div class="container">
          <p class="text-white" style="font-family:'Playfair Display',serif;font-size:clamp(1.5rem,3vw,2.4rem);font-weight:700;max-width:520px">
            Há mais de 36 anos eternizando memórias na nossa região.
          </p>
        </div>
      </div>
    </div>

    <div class="row g-4">
      <!-- store cards -->
      <!-- 6 lojas -->
      <!-- generated -->
      <template id="store-tpl"></template>
      <div class="col-md-6 col-lg-4"><article class="store-card"><div class="d-flex align-items-center gap-3 mb-4"><span class="store-icon"><i class="bi bi-geo-alt"></i></span><h3 class="h4 m-0">Petrolina</h3></div><p class="small text-secondary mb-3"><i class="bi bi-pin-map me-2 text-brand"></i>Av. Guararapes, 1783 — Centro, Petrolina/PE</p><p class="small text-secondary mb-3"><i class="bi bi-telephone me-2 text-brand"></i>(87) 3866-2121</p><p class="small text-secondary mb-3"><i class="bi bi-clock me-2 text-brand"></i>Seg a sex: 8h–18h · Sáb: 8h–13h</p><a href="https://wa.me/558738662121" target="_blank" class="btn btn-outline-dark-square w-100"><i class="bi bi-whatsapp me-2"></i>WhatsApp</a></article></div>
      <div class="col-md-6 col-lg-4"><article class="store-card"><div class="d-flex align-items-center gap-3 mb-4"><span class="store-icon"><i class="bi bi-geo-alt"></i></span><h3 class="h4 m-0">River Shopping</h3></div><p class="small text-secondary mb-3"><i class="bi bi-pin-map me-2 text-brand"></i>Monsenhor Ângelo Sampaio, 100 — Centro, Petrolina/PE</p><p class="small text-secondary mb-3"><i class="bi bi-telephone me-2 text-brand"></i>(87) 3861-4355</p><p class="small text-secondary mb-3"><i class="bi bi-clock me-2 text-brand"></i>Seg a sáb: 9h–22h · Dom: 14h–20h</p><a href="https://wa.me/5574988114651" target="_blank" class="btn btn-outline-dark-square w-100"><i class="bi bi-whatsapp me-2"></i>WhatsApp</a></article></div>
      <div class="col-md-6 col-lg-4"><article class="store-card"><div class="d-flex align-items-center gap-3 mb-4"><span class="store-icon"><i class="bi bi-geo-alt"></i></span><h3 class="h4 m-0">Jacobina</h3></div><p class="small text-secondary mb-3"><i class="bi bi-pin-map me-2 text-brand"></i>Av. Orlando Oliveira Pires, 206 — Centro, Jacobina/BA</p><p class="small text-secondary mb-3"><i class="bi bi-telephone me-2 text-brand"></i>(74) 3621-3085</p><p class="small text-secondary mb-3"><i class="bi bi-clock me-2 text-brand"></i>Seg a sex: 8h–18h · Sáb: 8h–13h</p><a href="https://wa.me/557436213085" target="_blank" class="btn btn-outline-dark-square w-100"><i class="bi bi-whatsapp me-2"></i>WhatsApp</a></article></div>
      <div class="col-md-6 col-lg-4"><article class="store-card"><div class="d-flex align-items-center gap-3 mb-4"><span class="store-icon"><i class="bi bi-geo-alt"></i></span><h3 class="h4 m-0">Juazeiro</h3></div><p class="small text-secondary mb-3"><i class="bi bi-pin-map me-2 text-brand"></i>Rua Américo Alves, 14 — Centro, Juazeiro/BA</p><p class="small text-secondary mb-3"><i class="bi bi-telephone me-2 text-brand"></i>(74) 3612-7373</p><p class="small text-secondary mb-3"><i class="bi bi-clock me-2 text-brand"></i>Seg a sex: 8h–18h</p><a href="https://wa.me/5574988020153" target="_blank" class="btn btn-outline-dark-square w-100"><i class="bi bi-whatsapp me-2"></i>WhatsApp</a></article></div>
      <div class="col-md-6 col-lg-4"><article class="store-card"><div class="d-flex align-items-center gap-3 mb-4"><span class="store-icon"><i class="bi bi-geo-alt"></i></span><h3 class="h4 m-0">Senhor do Bonfim</h3></div><p class="small text-secondary mb-3"><i class="bi bi-pin-map me-2 text-brand"></i>Praça Rui Barbosa, 08 — Centro, Sr. do Bonfim/BA</p><p class="small text-secondary mb-3"><i class="bi bi-telephone me-2 text-brand"></i>(74) 3541-3685</p><p class="small text-secondary mb-3"><i class="bi bi-clock me-2 text-brand"></i>Seg a sex: 8h–18h · Sáb: 8h–13h</p><a href="https://wa.me/5574988020154" target="_blank" class="btn btn-outline-dark-square w-100"><i class="bi bi-whatsapp me-2"></i>WhatsApp</a></article></div>
      <div class="col-md-6 col-lg-4"><article class="store-card"><div class="d-flex align-items-center gap-3 mb-4"><span class="store-icon"><i class="bi bi-geo-alt"></i></span><h3 class="h4 m-0">Capim Grosso</h3></div><p class="small text-secondary mb-3"><i class="bi bi-pin-map me-2 text-brand"></i>Av. ACM, 01 — Centro, Capim Grosso/BA</p><p class="small text-secondary mb-3"><i class="bi bi-telephone me-2 text-brand"></i>(74) 3651-1255</p><p class="small text-secondary mb-3"><i class="bi bi-clock me-2 text-brand"></i>Seg a sex: 8h–18h</p><a href="https://wa.me/5574988126254" target="_blank" class="btn btn-outline-dark-square w-100"><i class="bi bi-whatsapp me-2"></i>WhatsApp</a></article></div>
    </div>
  </div>
</section>

<!-- ABOUT -->
<section id="sobre">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-5">
        <div class="eyebrow mb-3"><i class="bi bi-stars me-2"></i>Sobre nós</div>
        <h2 class="display-5 fw-bold">Referência em <em class="brand">fotografia</em> na nossa região.</h2>
      </div>
      <div class="col-lg-7">
        <p class="text-secondary fs-5 mb-3">Somos uma loja referência em estúdio fotográfico na nossa região. Visamos sempre a qualidade dos produtos, a satisfação do cliente, a inovação e a tecnologia.</p>
        <p class="text-secondary fs-5 mb-4">Procuramos pessoas que, assim como nós, reconheçam a beleza que é eternizar em fotografia os momentos incríveis da vida das pessoas.</p>
        <a href="#contato" class="btn btn-outline-dark-square">Trabalhe conosco</a>
      </div>
    </div>

    <div class="stats mt-5">
      <div><div class="v">36+</div><div class="l">Anos de história</div></div>
      <div><div class="v">6</div><div class="l">Lojas físicas</div></div>
      <div><div class="v">+1M</div><div class="l">Fotos reveladas</div></div>
      <div><div class="v">100%</div><div class="l">Compromisso com qualidade</div></div>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section id="contato" class="contact-section">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-6">
        <div class="eyebrow mb-3"><i class="bi bi-envelope me-2"></i>Fale conosco</div>
        <h2 class="display-4 fw-bold mb-3">Vamos eternizar <em class="brand">sua história?</em></h2>
        <p class="text-white-50 fs-5 mb-5">Entre em contato para tirar dúvidas, pedir orçamentos ou conhecer melhor nossos produtos e serviços. Nossa equipe responde rapidamente.</p>

        <a href="https://wa.me/557436213085" target="_blank" class="contact-tile mb-3">
          <span class="ic"><i class="bi bi-whatsapp"></i></span>
          <div><div class="text-uppercase small text-white-50" style="letter-spacing:.14em">WhatsApp</div><div class="fw-medium">(74) 3621-3085</div></div>
        </a>
        <a href="mailto:contato@lojasimagem.com.br" class="contact-tile">
          <span class="ic"><i class="bi bi-envelope"></i></span>
          <div><div class="text-uppercase small text-white-50" style="letter-spacing:.14em">E-mail</div><div class="fw-medium">contato@lojasimagem.com.br</div></div>
        </a>
      </div>
      <div class="col-lg-6">
        <form  action="{{route('send-mail')}}" method="post"  class="row g-3">
            @csrf
          <div class="col-md-6"><input class="form-control form-control-dark" name ="nome" placeholder="Nome" required></div>
          <div class="col-md-6"><input type="email" class="form-control form-control-dark" name ="email" placeholder="E-mail" required></div>
          <div class="col-12"><input class="form-control form-control-dark" name ="assunto" placeholder="Assunto"></div>
          <div class="col-12"><textarea rows="5" class="form-control form-control-dark" name ="mensagem" placeholder="Sua mensagem" required></textarea></div>
          <div class="row mt-2">
                                            <div class="col-md-2 conta">
                                                @php

                                                $v1=rand(1,9);

                                                $v2=rand(1,9);

                                                $result=$v1+$v2;

                                                @endphp
                                               {{$v1}} + {{$v2}} =
                                            </div>
                                            <input type="hidden" value="{{$v1}}" name='v1'>
                                            <input type="hidden" value="{{$v2}}" name='v2'>
                                            <div class="col-md-3 mb-2">
                                                <input type="number" name="result" class="form-control form-control-dark" required>
                                            </div>

                                        </div>
          <div class="col-12"><button type="submit" class="btn btn-brand w-100">Enviar mensagem <i class="bi bi-send ms-2"></i></button></div>
        </form>
      </div>
    </div>
  </div>
</section>
  <a href="https://wa.me/557436213085" class="whatsapp-float" target="_blank" title="Fale conosco no WhatsApp">
  <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/whatsapp.svg" alt="WhatsApp" />
</a>
<!-- FOOTER -->
<footer>
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-4">
       <img src="{{asset('assets/img/logo.png')}}" class="w-50">
        <p class="small">Há mais de 36 anos eternizando memórias com qualidade, dedicação e o melhor da tecnologia em fotografia.</p>
        <div class="d-flex gap-2 mt-3">
          <a href="#" class="social"><i class="bi bi-facebook"></i></a>
          <a href="#" class="social"><i class="bi bi-instagram"></i></a>
          <a href="https://wa.me/557436213085" class="social"><i class="bi bi-whatsapp"></i></a>
        </div>
      </div>
      <div class="col-6 col-lg-2">
        <h6>Navegação</h6>
        <ul class="list-unstyled small d-grid gap-2">
          <li><a href="#servicos">Serviços</a></li>
          <li><a href="#albuns">Álbuns</a></li>
          <li><a href="#fotopresentes">Fotopresentes</a></li>
          <li><a href="#lojas">Lojas</a></li>
        </ul>
      </div>
      <div class="col-6 col-lg-3">
        <h6>Serviços</h6>
        <ul class="list-unstyled small d-grid gap-2">
          <li>Revelação fotográfica</li>
          <li>Álbuns personalizados</li>
          <li>Fotopresentes</li>
          <li>Molduraria</li>
          <li>Profissional</li>
        </ul>
      </div>
      <div class="col-lg-3">
        <h6>Contato</h6>
        <p class="small mb-1"><i class="bi bi-whatsapp text-brand me-2"></i>(74) 3621-3085</p>
        <p class="small mb-1"><i class="bi bi-envelope text-brand me-2"></i>contato@lojasimagem.com.br</p>
        <p class="small mb-1"><i class="bi bi-geo-alt text-brand me-2"></i>6 lojas em PE e BA</p>
      </div>
    </div>
    <hr>
    <div class="row text-center">
         <p class="small mb-1">CNPJ: 02.268.433/0001-58. Studio Imagem Ltda. Av. Orlando Oliveira Pires, 202, Centro, Jacobina/BA. CEP: 44.700-00. (74) 3621-0481</p>
    </div>
    <hr class="my-4 border-secondary">
    <div class="d-flex flex-wrap justify-content-between gap-2 small text-white-50">
      <div>© <span id="yr"></span> Lojas Imagem. Todos os direitos reservados.</div>

    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  document.getElementById('yr').textContent = new Date().getFullYear();
  const h = document.getElementById('site-header');
  const onScroll = () => h.classList.toggle('scrolled', window.scrollY > 20);
  window.addEventListener('scroll', onScroll); onScroll();
</script>
</body>
</html>
