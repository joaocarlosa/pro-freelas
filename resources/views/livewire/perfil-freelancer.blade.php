<main>
    <title></title>
    <!-- Section -->
    <section class="pt-5 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
        <div class="container">
            <p class="text-center"><a href="{{ route('dashboard') }}" class="text-gray-700"><img
                src="/assets/img/logo-Profreelas.png" class="rounded" style="max-width: 250px;"></a></p>
            <div class="col-12 col-xl-12">
                <div class="row">
                    <div class="col-12 mb-4">
                        <div class="card shadow border-0 text-center p-0">
                            <div class="profile-cover rounded-top"
                                data-background="https://wallpapercave.com/wp/wp1920747.jpg"></div>
                            <div class="card-body pb-5">
                                <img src="../assets/img/team/profile-picture-1.jpg"
                                    class="avatar-xl rounded-circle mx-auto mt-n7 mb-4" alt="Neil Portrait">
                                <h4 class="h3">{{ $usuario->nome }}**** {{ $usuario->sobrenome }}****</h4>
                                <h5 class="text-gray"><svg class="icon icon-xs me-2" fill="none" stroke="currentColor"
                                    stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z">
                                    </path>
                                </svg> {{ substr($usuario['phone'], 0, 8) }}****</h5>
                            @php
                                $email = explode('@', $usuario['email']);
                            @endphp
                            <p class="text-gray"><svg class="icon icon-xs me-2" fill="none" stroke="currentColor"
                                    stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75">
                                    </path>
                                </svg> {{ substr($email[0], 0, 3) }}****{{ '@' . $email[1] }}</p>
                                <h5 class="fw-normal">Possui {{ $usuario->tempo_xp }} anos de experiência como {{ $usuario->area_atuacao }}</h5>
                                <p class="text-gray mb-4">{{ $usuario->country }}</p>
                                <a class="btn btn-sm btn-gray-800 d-inline-flex align-items-center me-2" href="#">
                                    <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z">
                                        </path>
                                    </svg>
                                    Contratar
                                </a>
                                <a class="btn btn-sm btn-secondary" href="#">Enviar mensagem</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card card-body border-0 shadow mb-4">
                            <h2 class="h5 mb-4">Sobre min</h2>
                            <p class="d-flex align-items-left">
                                {{ $usuario->descricao }}
                            </p>
                            <h3 class="h6 mb-4">Especialidades</h3>
                            <div class="">
                                @foreach ($usuario->getEspecialidades() as $especialidade)
                                <h5 style="float: left;margin-right: 5px;"><span class="badge bg-primary">{{ $especialidade }}</span></h5>
                                @endforeach
                            </div>

                            <h3 class="h6 mb-4 mt-4">Habilidades</h3>
                            <div class="">
                                @foreach ($usuario->getHabilidades() as $habilidade)
                                <h5 style="float: left;margin-right: 5px;"><span class="badge bg-primary">{{ $habilidade }}</span></h5>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="card card-body border-0 shadow mb-4">
                            <h2 class="h5 mb-4">Avaliações</h2>
                            @guest
                        <div class="card-body text-center">
                            <h2 class="display-3 mb-3">Faça o Login</h2>
                            <p>Para envar uma avaliação é necessário fazer login ou criar uma conta no site</p>
                            <a class="btn btn-sm btn-outline-gray-800 me-2" href="/register">Criar uma conta</a> <a
                                class="btn btn-sm btn-secondary" href="/login?redirect={{ url()->full() }}">Fazer login</a>
                        </div>
                    @endguest
                    @auth
                        @if (auth()->user()->profile == 'cliente')
                        <p>Envie uma avaliação para o freelancer</p>
                            <form action="{{ route('enviar-proposta') }}" method="POST">
                                @csrf
                                <!-- Form -->
                                <input type="hidden" id="projetoId" name="projetoId" value="">
                                <div class="form-group mb-4">
                                    <div>
                                        <textarea class="form-control" name="proposta" placeholder="Escreva sua avaliação aqui..." id="textarea" rows="12">{{ old('descricao') }}</textarea>
                                    </div>
                                </div>
                                <!-- End of Form -->
                                <div class="d-grid mt-3">
                                    <button type="submit" class="btn btn-success">Enviar Avaliação</button>
                                </div>
                            </form>
                        @else

                        @endif
                    @endauth
                            <ul class="list-group list-group-flush">
                                @foreach ($avaliacoes as $avaliacao)

                                <li class="list-group-item d-flex align-items-center justify-content-between px-0 border-bottom">
                                    <div class="col-2">
                                        <div class="avatar avatar-md mx-auto mb-3"><img class="rounded-circle" alt="Image placeholder"
                                            src="../../assets/img/icons/placeholder-user.png"></div>
                                    </div>
                                    <div class="col-10">
                                        <h3 class="h6 mb-1">{{ substr($avaliacao->autor->nome, 0, -2) }}**** {{substr($avaliacao->autor->sobrenome, 0, -3)}}****</h3>
                                        <p class="small pe-4">{{ $avaliacao->comentario }}</p>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
