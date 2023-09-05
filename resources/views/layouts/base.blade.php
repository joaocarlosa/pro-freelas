<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @if (env('IS_DEMO'))
        <link rel="canonical" href="https://themesberg.com/product/laravel/volt-admin-dashboard-template">
        <meta name="keywords"
            content="themesberg, updivision, html dashboard, laravel, livewire, laravel livewire, alpine.js, html css dashboard laravel, Volt Laravel Admin Dashboard, livewire volt dashboard, volt admin, livewire dashboard, livewire admin, web dashboard, bootstrap 5 dashboard laravel, bootstrap 5, css3 dashboard, bootstrap 5 admin laravel, volt dashboard bootstrap 5 laravel, frontend, responsive bootstrap 5 dashboard, volt dashboard, volt laravel bootstrap 5 dashboard">
        </meta>
        <meta name="description"
            content="Volt Laravel Admin Dashboard features dozens of UI components and a Laravel backend with Livewire & Alpine.js">
        </meta>
        <meta itemprop="name" content="Volt Laravel Admin Dashboard by Themesberg & UPDIVISION">
        </meta>
        <meta itemprop="description"
            content="Volt Laravel Admin Dashboard features dozens of UI components and a Laravel backend with Livewire & Alpine.js">
        </meta>
        <meta itemprop="image"
            content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-laravel-dashboard/volt-free-laravel-dashboard.jpg">
        </meta>
        <meta name="twitter:card" content="product">
        </meta>
        <meta name="twitter:site" content="@themesberg">
        </meta>
        <meta name="twitter:title" content="Volt Laravel Admin Dashboard by Themesberg & UPDIVISION">
        </meta>
        <meta name="twitter:description"
            content="Volt Laravel Admin Dashboard features dozens of UI components and a Laravel backend with Livewire & Alpine.js">
        </meta>
        <meta name="twitter:creator" content="@themesberg">
        </meta>
        <meta name="twitter:image"
            content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-laravel-dashboard/volt-free-laravel-dashboard.jpg">
        </meta>
        <meta property="fb:app_id" content="655968634437471">
        </meta>
        <meta property="og:title" content="Volt Laravel Admin Dashboard by Themesberg & UPDIVISION">
        </meta>
        <meta property="og:type" content="article">
        </meta>
        <meta property="og:url" content="https://themesberg.com/product/laravel/volt-admin-dashboard-template/preview">
        </meta>
        <meta property="og:image"
            content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-laravel-dashboard/volt-free-laravel-dashboard.jpg">
        </meta>
        <meta property="og:description"
            content="Volt Laravel Admin Dashboard features dozens of UI components and a Laravel backend with Livewire & Alpine.js">
        </meta>
        <meta property="og:site_name" content="Themesberg">
        </meta>
    @endif

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../../assets/img/favicon/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="../../assets/img/favicon/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="../../assets/img/favicon/favicon-16x16.png" sizes="16x16" type="image/png">

    <link rel="mask-icon" href="../../assets/img/favicon/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="../../assets/img/favicon/favicon.ico">
    <meta name="msapplication-config" content="../../assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">

    <!-- Apex Charts -->
    <link type="text/css" href="/vendor/apexcharts/apexcharts.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Datepicker -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker.min.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker-bs4.min.css">

    <!-- Fontawesome -->
    <link type="text/css" href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Sweet Alert -->
    <link type="text/css" href="/vendor/sweetalert2/sweetalert2.min.css" rel="stylesheet">

    <!-- Notyf -->
    <link type="text/css" href="/vendor/notyf/notyf.min.css" rel="stylesheet">

    <!-- Volt CSS -->
    <link type="text/css" href="/css/volt.css" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="/css/app.css" rel="stylesheet">

    @livewireStyles

    @livewireScripts

    <!-- Core -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>

    <!-- Vendor JS -->
    <script src="/assets/js/on-screen.umd.min.js"></script>

    <!-- Slider -->
    <script src="/assets/js/nouislider.min.js"></script>

    <!-- Smooth scroll -->
    <script src="/assets/js/smooth-scroll.polyfills.min.js"></script>

    <!-- Apex Charts -->
    <script src="/vendor/apexcharts/apexcharts.min.js"></script>

    <!-- Charts -->
    <script src="/assets/js/chartist.min.js"></script>
    <script src="/assets/js/chartist-plugin-tooltip.min.js"></script>

    <!-- Datepicker -->
    <script src="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/js/datepicker.min.js"></script>

    <!-- Sweet Alerts 2 -->
    <script src="/assets/js/sweetalert2.all.min.js"></script>

    <!-- Moment JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

    <!-- Notyf -->
    <script src="/vendor/notyf/notyf.min.js"></script>

    <!-- Simplebar -->
    <script src="/assets/js/simplebar.min.js"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Volt JS -->
    <script src="/assets/js/volt.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="{{ asset('js/share-buttons.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

    <script>
        $(document).ready(function(){
          $('.dinheiro').mask("#.##0,00", {reverse: true});
        });


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        setInterval(verificarNotificacoes, 3000);

        const URL = "https://app.profreelas.com/verificar-notificacoes"

        function verificarNotificacoes() {
            $.ajax({
                url: "https://app.profreelas.com/verificar-notificacoes",
                dataType: "json",
                type: "Post",
                async: true,
                data: {},
                success: function(data) {

                    data.map(function(obj) {

                        if($('.notyf__message').length == 0)
                        {
                            notificar(obj.projeto.titulo, obj.projeto_id, obj.usuario_id);
                        }

                    });
                },
                complete: function(data) {

                },
                error: function(xhr, exception) {

                }
            });
        }

        function salvar() {
            document.getElementById('btnSalvar').click();
        }

        function removerNotificacao()
        {
            let data = {};
            data.projetoId = $('#hiddProjetoId').val();
            data.usuarioId = $('#hiddUsuarioId').val();
            $.ajax({
                url: "https://app.profreelas.com/remover-notificacao",
                dataType: "json",
                type: "Post",
                async: true,
                data: data,
                success: function(data) {

                    data.map(function(obj) {

                        if($('.notyf__message').length == 0)
                        {
                            notificar(obj.projeto.titulo, obj.projeto_id, obj.usuario_id);
                        }

                    });
                },
                complete: function(data) {

                },
                error: function(xhr, exception) {

                }
            });
        }

        function notificar(titulo, projetoId, usuarioId) {
            const notyf = new Notyf({
                duration: 0,
                position: {
                    x: 'right',
                    y: 'bottom',
                },
                types: [{
                    type: 'info',
                    background: '#007eab',
                    icon: {
                        className: 'fas fa-comment-dots',
                        tagName: 'span',
                        color: '#fff'
                    },
                    dismissible: true
                }]
            });
            const notification = notyf.open({
                type: 'info',
                message: '<input type="hidden" id="hiddUsuarioId" value="'+usuarioId+'"> <input type="hidden" id="hiddProjetoId" value="'+projetoId+'"> Novo projeto publicado! <br/> ' + titulo + '<br/> <small>Clique para ver o projeto</small>'
            })

            notification.on('dismiss', ({
                target,
                event
            }) => {

                removerNotificacao();

            });

            notification.on('click', ({
                target,
                event
            }) => {
                removerNotificacao();
                let projetoId = $('#hiddProjetoId').val();
                window.location.href = "https://app.profreelas.com/projeto/"+projetoId;
            });
        }
    </script>


</head>

<body>

    {{ $slot }}

</body>

</html>
