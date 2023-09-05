<title>Novo projeto</title>
<form action="{{ route('salvar-projeto') }}" method="POST">
    @csrf
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
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Novo projeto</li>
                </ol>
            </nav>
            <h2 class="h4">Novo projeto</h2>
            <p class="mb-0">Publique um novo projeto para todos os freelancers</p>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a onclick="salvar()" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
                <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" stroke-width="1.5"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z">
                    </path>
                </svg>
                Salvar e publicar
            </a>
            <!--<div class="btn-group ms-2 ms-lg-3">
                <button type="button" class="btn btn-sm btn-outline-gray-600">Compartilhar</button>
                <button type="button" class="btn btn-sm btn-outline-gray-600">Exportar</button>
            </div>-->
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-xl-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

    </div>
    <div class="row">
        <div class="col-12 col-xl-8">
            <div class="card card-body border-0 shadow mb-4">
                <div class="mt-3">
                    <div class="alert alert-warning d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2 text-danger" width="32" height="32" fill="none"
                            stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z">
                            </path>
                        </svg>
                        <div class="text-danger">
                            SOB PENA DE MULTA E/OU BLOQUEIO DEFINITIVO.<br>
                            É extremanente proibido o envio de qualquer tipo de contato.
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-sm-12">
                    <div class="mb-4">
                        <label for="title">Titulo do projeto</label>
                        <input type="text" value="{{ old('titulo') }}" class="form-control" name="titulo"
                            id="title" aria-describedby="titleHelp">
                        <small id="titleHelp" class="form-text text-muted">Exemplo: Criação de um site</small>
                    </div>

                </div>

                <div class="col-lg-12 col-sm-12">
                    <div class="mb-4">
                        <div class="my-4">
                            <label for="textarea">Descrição do projeto</label>
                            <textarea class="form-control" name="descricao" placeholder="Escreva aqui..." id="textarea" rows="12">{{ old('descricao') }}</textarea>
                            <small id="titleHelp" class="form-text text-muted">Descreva o trabalho a ser feito</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-sm-12">
                    <div class="mb-4">
                        <div class="my-4">
                            <label for="formFile" class="form-label">Anexar um arquivo</label>
                            <input name="arquivo" class="form-control" type="file" id="formFile">
                            <small id="titleHelp" class="form-text text-muted">Insira um arquivo</small>
                        </div>
                    </div>
                </div>

                <div class="mt-3">
                    <div class="alert alert-warning d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2 text-danger" width="32" height="32" fill="none"
                            stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z">
                            </path>
                        </svg>
                        <div class="text-danger">
                            SOB PENA DE MULTA E/OU BLOQUEIO DEFINITIVO.<br>
                            É extremanente proibido o envio de qualquer tipo de contato.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-4">
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="card card-body border-0 shadow mb-4">

                        <div class="mb-4">
                            <label class="my-1 me-2" for="category">Categoria</label>
                            <select name="categoria" class="form-select" id="category"
                                aria-label="Default select example">
                                <option value="" selected>Selecione uma categoria</option>
                                <option value="1" {{ old('categoria') == 1 ? 'selected' : '' }}>Desenvolvimento e
                                    TI</option>
                                <option value="2" {{ old('categoria') == 2 ? 'selected' : '' }}>Marketing digital
                                </option>
                                <option value="3" {{ old('categoria') == 3 ? 'selected' : '' }}>Redação e tradução
                                </option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="title">Quanto pretende investir?</label>
                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">
                                            R$
                                        </span>
                                        <input name="investimentoInicio"
                                            value="{{ old('investimentoInicio') ? old('investimentoInicio') : '0' }}"
                                            type="text" class="form-control" placeholder="" aria-label="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">
                                            R$
                                        </span>
                                        <input name="investimentoFim"
                                            value="{{ old('investimentoFim') ? old('investimentoFim') : '0' }}"
                                            type="text" class="form-control" placeholder="" aria-label="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-sm-12">
                            <div class="mb-4">
                                <label class="my-1 me-2" for="category">Quais habilidades são desejadas?</label>
                                <select name="habilidades" class="form-select" id="category" multiple
                                    aria-label="Default select example">
                                    <option value="1">Programação</option>
                                    <option value="2">Gestão de projetos</option>
                                    <option value="3">Bom raciocínio lógico</option>
                                    <option value="4">Conhecimento em inglês</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="my-1 me-2" for="nivelExperiencia">Qual nivel de experiencia
                                desejado?</label>
                            <fieldset>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="nivelExperiencia"
                                        id="exampleRadios1" value="Iniciante"
                                        {{ old('nivelExperiencia') == 'Iniciante' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Iniciante
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="nivelExperiencia"
                                        id="exampleRadios2" value="Intermediario"
                                        {{ old('nivelExperiencia') == 'Intermediario' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="exampleRadios2">
                                        Intermediario
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="nivelExperiencia"
                                        id="exampleRadios2" value="Especialista"
                                        {{ old('nivelExperiencia') == 'Especialista' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="exampleRadios2">
                                        Especialista
                                    </label>
                                </div>
                            </fieldset>
                        </div>

                        <div class="col-lg-12 col-sm-12">
                            <div class="mb-4">
                                <label class="my-1 me-2" for="prazo">Qual prazo para iniciar o projeto?</label>
                                <select name="prazo" class="form-select" id="prazo"
                                    aria-label="Default select example">
                                    <option value="Imediato" {{ old('prazo') == 'Imediato' ? 'selected' : '' }}>
                                        Imediato</option>
                                    <option value="1 a 3 dias" {{ old('prazo') == '1 a 3 dias' ? 'selected' : '' }}>1
                                        a 3 dias</option>
                                    <option value="4 a 7 dias" {{ old('prazo') == '4 a 7 dias' ? 'selected' : '' }}>4
                                        a 7 dias</option>
                                    <option value="8 dias ou mais"
                                        {{ old('prazo') == '8 dias ou mais' ? 'selected' : '' }}>8 dias ou mais
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <button id="btnSalvar" type="submit" class="btn btn-gray-800 mt-2 animate-up-2"><svg
                                class="icon icon-xs me-2" fill="none" stroke="currentColor" stroke-width="1.5"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z">
                                </path>
                            </svg>
                            Salvar e publicar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
