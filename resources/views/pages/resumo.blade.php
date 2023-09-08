<style>
    div#social-links {
        text-align: center;
    }

    div#social-links ul li {
        display: inline-block;
    }

    div#social-links ul li a {
        padding: 10px;
        border: 1px solid #ccc;
        margin: 1px;
        color: #222;
        background-color: #ccc;
    }
</style>
<title>{{ $projeto->titulo }} - </title>
<section class="mt-5 mt-lg-0 bg-soft d-flex align-items-center">
    <div class="container">
        <p class="text-center"><a href="{{ route('dashboard') }}" class="text-gray-700"><img
                    src="/assets/img/logo-Profreelas.png" class="rounded" style="max-width: 250px;"></a></p>
        <div class="row justify-content-center form-bg-image" data-background-lg="/assets/img/illustrations/signin.svg">
            <div class="col-12 d-flex align-items-center justify-content-center">
                <div class="bg-white shadow border-0 rounded p-4 p-lg-5 w-100 fmxw-1000">
                    <div class="text-center text-md-center mb-4 mt-md-0">
                        <h2 class="mb-0 h3">Informações do Cliente</h1>
                    </div>
                    <div class="text-center text-md-center mt-md-0">
                        <div class="avatar avatar-lg mx-auto mb-3"><img class="rounded-circle" alt="Image placeholder"
                                src="../../assets/img/icons/placeholder-user.png"></div>
                        <h1 class="h3"><svg class="icon icon-md me-2" fill="none" stroke="currentColor"
                                stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z">
                                </path>
                            </svg> {{ $projeto->autor['nome'] }}**** {{ $projeto->autor['sobrenome'] }}****
                        </h1>
                        <h5 class="text-gray"><svg class="icon icon-xs me-2" fill="none" stroke="currentColor"
                                stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z">
                                </path>
                            </svg>

                            @php
                                $email = explode('@', $projeto->autor['email']);
                                $domain = explode('.', $email[1]);
                                $maskedEmail = substr($email[0], 0, 1) . str_repeat('*', strlen($email[0]) - 1);
                                $maskedDomain = substr($domain[0], 0, 1) . str_repeat('*', strlen($domain[0]) - 1);
                                $maskedEmailDomain = $maskedEmail . '@' . $maskedDomain . '.' . $domain[1];
                            @endphp

                            {{ substr($projeto->autor['phone'], 0, 8) }}****</h5>
                       
                        <p class="text-gray"><svg class="icon icon-xs me-2" fill="none" stroke="currentColor"
                                stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75">
                                </path>
                            </svg>{{ $maskedEmailDomain }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center form-bg-image mt-4"
            data-background-lg="/assets/img/illustrations/signin.svg">
            <div class="col-12 d-flex">
                <div class="bg-white shadow border-0 rounded p-4 p-lg-5 w-100 fmxw-1000">
                    <div class="mb-4 mt-md-0">
                        <h2 class="mb-0 h3">Informações do Projeto</h2>
                    </div>
                    <div class="mb-4 mt-md-0">
                        <h3 class="mb-0 h4">{{ $projeto->titulo }}</h3>
                    </div>
                    <div>{!! html_entity_decode($projeto->descricao) !!}</div>
                    <div class="table-wrapper table-responsive mt-5">
                        <table class="table table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th scope="col">Investimento</th>
                                    <th scope="col">Nível de experiência</th>
                                    <th scope="col">Prazo de início</th>
                                    <th scope="col">Categoria</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">R${{ $projeto->investimento_inicio }}
                                        {{ $projeto->investimento_fim > 0 ? '- R$' . $projeto->investimento_fim : '' }}
                                    </th>
                                    <th>{{ $projeto->nivel_experiencia }}</th>
                                    <th>{{ $projeto->prazo }}</th>
                                    <th>Desenvolvimento e TI</th>
                                    <th>
                                        <h5>
                                            @if($projeto->status == 'Aberto')
                                            <span class="badge rounded-pill bg-success">{{ $projeto->status }}</span>
                                            @else
                                            <span class="badge rounded-pill bg-danger">{{ $projeto->status }}</span>
                                            @endif

                                        </h5>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <table class="table table-striped table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">Habilidades necessarias</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Programação, Otimização</th>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12 col-xl-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                {{ $error }}
                            @endforeach
                    </div>
                @endif
            </div>

        </div>

        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif

        @if (Session::has('error'))
            <div class="alert alert-danger">
                {{ Session::get('error') }}
            </div>
        @endif

        <div class="row justify-content-center form-bg-image mt-2"
            data-background-lg="/assets/img/illustrations/signin.svg">
            <div class="col-12 d-flex">
                <div class="bg-white shadow border-0 rounded p-4 p-lg-5 w-100 fmxw-1000">
                    <div class="mb-4 mt-md-0">
                        <h2 class="mb-0 h3">Enviar uma Proposta</h2>
                    </div>
                    @guest
                        <div class="card-body text-center">
                            <h2 class="display-3 mb-3">Faça o Login</h2>
                            <p>Para enviar uma proposta é necessário fazer login ou criar uma conta no Pro Frellas</p>
                            <a class="btn btn-sm btn-outline-gray-800 me-2" href="/register">Criar uma conta</a> <a
                                class="btn btn-sm btn-secondary" href="/login?redirect={{ url()->full() }}">Fazer login</a>
                        </div>
                    @endguest
                    @auth
                        @if ($projeto->status == 'Fechado')
                            <div class="alert alert-danger" role="alert">
                          Não é mais possivel enviar proposta, o projeto já foi fehado e está em andamento.
                        </div>
                        @elseif (auth()->user()->profile != 'cliente')
                        <form action="{{ route('enviar-proposta') }}" method="POST">
                                @csrf
                                <!-- Form -->
                                <input type="hidden" id="projetoId" name="projetoId" value="{{ $projeto->id }}">
                                <div class="form-group mb-4">
                                    <div>
                                        <textarea class="form-control" name="proposta" placeholder="Escreva sua proposta aqui..." id="textarea" rows="12">{{ old('descricao') }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">
                                            R$
                                        </span>
                                        <input class="dinheiro" name="valor" value="{{ old('valor') ? old('valor') : '' }}"
                                            type="text" class="form-control" placeholder="" aria-label="">
                                    </div>
                                </div>
                                <!-- End of Form -->
                                <div class="d-grid mt-3">
                                    <button type="submit" class="btn btn-success">Enviar Proposta</button>
                                </div>
                            </form>
                        @else
                            <div class="card-body text-center">
                                <h2 class="display-3 mb-3">Faça o Login</h2>
                                <p>Para enviar uma proposta é necessário fazer login ou criar uma conta no Pro Frellas</p>
                                <a class="btn btn-sm btn-outline-gray-800 me-2" href="/register">Criar uma conta</a> <a
                                    class="btn btn-sm btn-secondary" href="/login?redirect={{ url()->full() }}">Fazer
                                    login</a>
                            </div>
                        @endif
                    @endauth
                </div>
            </div>
        </div>

        <div class="d-flex align-items-center justify-content-center mb-4 mt-4">
            Compartilhe esse projeto:

            {!! html_entity_decode(
                ShareButtons::page(url()->current(), '', [
                    'title' => 'Page title',
                    'rel' => 'nofollow noopener noreferrer',
                ])->facebook()->linkedin()->whatsapp()->mailto()->render(),
            ) !!}
        </div>
    </div>

</section>
