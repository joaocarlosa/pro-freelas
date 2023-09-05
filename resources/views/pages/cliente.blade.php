<title>Painel do Cliente</title>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div class="d-block mb-4 mb-md-0">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item">
                    <a href="#">
                        <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="/">Painel</a></li>
            </ol>
        </nav>
        <h2 class="h4">Painel do Cliente</h2>
        <p class="mb-0">Gerencia seus projetos e veja suas propostas</p>
    </div>
    <div class="btn-toolbar mb- mb-md-0">
        <a href="{{ route('novo-projeto') }}" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
            <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z">
                </path>
            </svg>
            Publicar Projeto
        </a>
        <!--<div class="btn-group ms-2 ms-lg-3">
            <button type="button" class="btn btn-sm btn-outline-gray-600">Compartilhar</button>
            <button type="button" class="btn btn-sm btn-outline-gray-600">Exportar</button>
        </div>-->
    </div>
</div>
<div class="row">
    <div class="col-12 col-sm-6 col-xl-3 mb-3">
        <div class="card border-0 shadow">
            <div class="card-body">
                <div class="row d-block d-xl-flex align-items-center">
                    <div
                        class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                        <div class="icon-shape icon-shape-primary rounded me-4 me-sm-0">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75">
                                </path>
                            </svg>
                        </div>
                        <div class="d-sm-none">
                            <h2 class="fw-extrabold h5">Projetos Publicados</h2>
                            <h3 class="mb-1">{{ $meusProjetos->count() }}</h3>
                        </div>
                    </div>
                    <div class="col-12 col-xl-7 px-xl-0">
                        <div class="d-none d-sm-block">
                            <h2 class="h6 text-gray-400 mb-0">Projetos Publicados</h2>
                            <h3 class="fw-extrabold mb-2">{{ $meusProjetos->count() }}</h3>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-xl-3 mb-3">
        <div class="card border-0 shadow">
            <div class="card-body">
                <div class="row d-block d-xl-flex align-items-center">
                    <div
                        class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                        <div class="icon-shape icon-shape-primary rounded me-4 me-sm-0">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                        </div>
                        <div class="d-sm-none">
                            <h2 class="fw-extrabold h5">Propostas recebidas</h2>
                            <h3 class="mb-1">{{ $propostasRecebidas->count() }}</h3>
                        </div>
                    </div>
                    <div class="col-12 col-xl-7 px-xl-0">
                        <div class="d-none d-sm-block">
                            <h2 class="h6 text-gray-400 mb-0">Propostas recebidas</h2>
                            <h3 class="fw-extrabold mb-2">{{ $propostasRecebidas->count() }}</h3>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-xl-3 mb-3">
        <div class="card border-0 shadow">
            <div class="card-body">
                <div class="row d-block d-xl-flex align-items-center">
                    <div
                        class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                        <div class="icon-shape icon-shape-primary rounded me-4 me-sm-0">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="d-sm-none">
                            <h2 class="fw-extrabold h5">Projetos em andamento</h2>
                            <h3 class="mb-1">0</h3>
                        </div>
                    </div>
                    <div class="col-12 col-xl-7 px-xl-0">
                        <div class="d-none d-sm-block">
                            <h2 class="h6 text-gray-400 mb-0">Projetos em andamento</h2>
                            <h3 class="fw-extrabold mb-2">0</h3>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-xl-3 mb-3">
        <div class="card border-0 shadow">
            <div class="card-body">
                <div class="row d-block d-xl-flex align-items-center">
                    <div
                        class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                        <div class="icon-shape icon-shape-primary rounded me-4 me-sm-0">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="d-sm-none">
                            <h2 class="fw-extrabold h5">Projetos concluídos</h2>
                            <h3 class="mb-1">0</h3>
                        </div>
                    </div>
                    <div class="col-12 col-xl-7 px-xl-0">
                        <div class="d-none d-sm-block">
                            <h2 class="h6 text-gray-400 mb-0">Projetos concluídos</h2>
                            <h3 class="fw-extrabold mb-2">0</h3>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-xl-12">
        <div class="row">
            <div class="col-12 col-xxl-12 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-header border-bottom d-flex align-items-center justify-content-between">
                        <h2 class="fs-5 fw-bold mb-0">Últimas propostas recebidas</h2>
                        <!--<a href="{{ route('novo-projeto') }}"
                            class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
                            <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" stroke-width="1.5"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 15l6-6m0 0l-6-6m6 6H9a6 6 0 000 12h3"></path>
                            </svg>

                            Ver Todos
                        </a>-->
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush list my--3">
                            @foreach ($propostasRecebidas as $proposta)
                                @php
                                    $propostaAutor = \App\Models\Proposta::find($proposta->id)->autor;
                     
                                @endphp
                                <li class="list-group-item px-0">
                                    <div class="row align-items-center">
                                        <div class="col-1">
                                            <!-- Avatar -->
                                            <a href="{{ route('mostrar-perfil', $propostaAutor) }}" class="avatar rounded-circle">
                                                <img class="rounded" alt="Image placeholder"
                                                    src="/assets/img/icons/placeholder-user.png">
                                            </a>
                                        </div>
                                        <div class="col-5">
                                            <h4 class="h6 mb-0">
                                                <a href="#">{{ substr($propostaAutor->nome, 0, -2) }}****
                                                    {{ substr($propostaAutor->sobrenome, 0, -3) }}****</a>
                                            </h4>

                                            <div class="col-2 text-end">
                                            </div><span class="fw-bold text-success">R${{ number_format($proposta->valor + $proposta->aumento,2) }}</span>
                                        </div>
                                        <div class="col-2 text-end">
                                            <a href="{{ route('mostrar-perfil', $propostaAutor) }}"
                                                class="btn btn-sm btn-info d-inline-flex align-items-center">
                                                <span class="fas fa-eye me-2"></span>
                                                Ver Freelancer
                                            </a>
                                        </div>
                                        @if($proposta->status == 'Aberto')
                                        <div class="col-2 text-end">
                                            <a href="{{ route('aceitar-proposta', $proposta->id) }}"
                                                class="btn btn-sm btn-success d-inline-flex align-items-center">
                                                <span class="fas fa-eye me-2"></span>
                                                Aceitar Proposta
                                            </a>
                                        </div>
                                        @else
                                        <div class="col-2 text-end">
                                            <a href="#"
                                                class="btn-pill btn-sm btn-warning d-inline-flex align-items-center disabled">
            
                                                Proposta aceita!
                                            </a>
                                        </div>
                                        @endif
                                        
                                        <div class="col-2 text-end">
                                            <a href="#"
                                                class="btn btn-sm btn-success d-inline-flex align-items-center">
                                                <span class="fas fa-mail me-2"></span>
                                                Enviar mensagem
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
