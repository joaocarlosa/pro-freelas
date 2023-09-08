<?php

use App\Http\Controllers\NotificacaoController;
use App\Http\Controllers\ProjetoController;
use App\Http\Controllers\PropostaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AdminController;
use App\Http\Livewire\BootstrapTables;
use App\Http\Livewire\Components\Buttons;
use App\Http\Livewire\Components\Forms;
use App\Http\Livewire\Components\Modals;
use App\Http\Livewire\Components\Notifications;
use App\Http\Livewire\Components\Typography;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Err404;
use App\Http\Livewire\Err500;
use App\Http\Livewire\ResetPassword;
use App\Http\Livewire\ForgotPassword;
use App\Http\Livewire\Lock;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\ForgotPasswordExample;
use App\Http\Livewire\Index;
use App\Http\Livewire\LoginExample;
use App\Http\Livewire\ProfileExample;
use App\Http\Livewire\RegisterExample;
use App\Http\Livewire\Transactions;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ResetPasswordExample;
use App\Http\Livewire\UpgradeToPro;
use App\Http\Livewire\Users;
use App\Http\Livewire\Projetos;
use App\Http\Livewire\Propostas;
use App\Http\Livewire\NovoProjeto;
use App\Http\Livewire\Perfil;
use App\Http\Livewire\PerfilFreelancer;
use App\Http\Livewire\ProjetoResumo;
use App\Http\Livewire\ResumoProjeto;
use App\Models\Projeto;
use Illuminate\Support\Facades\Artisan;
use Jorenvh\Share\Share;
use Jorenvh\Share\ShareFacade;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', '/login');

Route::get('/register/{tipo?}', Register::class)->name('register');

Route::get('/login', Login::class)->name('login');

Route::get('/forgot-password', ForgotPassword::class)->name('forgot-password');

Route::get('/reset-password/{id}', ResetPassword::class)->name('reset-password')->middleware('signed');

Route::get('/404', Err404::class)->name('404');
Route::get('/500', Err500::class)->name('500');
Route::get('/upgrade-to-pro', UpgradeToPro::class)->name('upgrade-to-pro');

Route::get('/projeto/{id}', ResumoProjeto::class)->name('resumo');

Route::get('/cadastro', [UsuarioController::class, 'cadastro'])->name('usuario.cadastro');
Route::get('/cadastrar', [UsuarioController::class, 'cadastrar'])->name('cadastrar-perfil');
Route::post('/update-profile', [UsuarioController::class, 'updateProfile'])->name('update-profile');

Route::get('/freelancer/{id}', PerfilFreelancer::class)->name('mostrar-perfil');

Route::middleware('auth')->group(function () {
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/admin/projetos', [AdminController::class, 'projetos'])->name('admin-projetos');
    Route::get('/profile-example', ProfileExample::class)->name('profile-example');
    Route::get('/users', Users::class)->name('users');
    Route::get('/projetos', Projetos::class)->name('projetos');
    Route::get('/propostas', Propostas::class)->name('propostas');
    Route::get('/novo-projeto', NovoProjeto::class)->name('novo-projeto');
    Route::get('/login-example', LoginExample::class)->name('login-example');
    Route::get('/register-example', RegisterExample::class)->name('register-example');
    Route::get('/forgot-password-example', ForgotPasswordExample::class)->name('forgot-password-example');
    Route::get('/reset-password-example', ResetPasswordExample::class)->name('reset-password-example');
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/transactions', Transactions::class)->name('transactions');
    Route::get('/bootstrap-tables', BootstrapTables::class)->name('bootstrap-tables');
    Route::get('/lock', Lock::class)->name('lock');
    Route::get('/buttons', Buttons::class)->name('buttons');
    Route::get('/notifications', Notifications::class)->name('notifications');
    Route::get('/forms', Forms::class)->name('forms');
    Route::get('/modals', Modals::class)->name('modals');
    Route::get('/typography', Typography::class)->name('typography');
    Route::post('/salvar-projeto', [ProjetoController::class, 'salvarProjeto'])->name('salvar-projeto');
    Route::get('/perfil', Perfil::class)->name('perfil');
    Route::post('/salvar-perfil', [UsuarioController::class, 'salvarPerfil'])->name('salvar-perfil');
    Route::post('/enviar-proposta', [PropostaController::class, 'enviarProposta'])->name('enviar-proposta');
    Route::get('/aceitar-proposta/{id}', [PropostaController::class, 'aceitarProposta'])->name('aceitar-proposta');
    Route::post('/verificar-notificacoes', [NotificacaoController::class, 'verificarNotificacoes'])->name('verificar-notificacoes');
    Route::post('/remover-notificacao', [NotificacaoController::class, 'removerNotificacao'])->name('remover-notificacao');
});

Route::get('/optimize', function() {
    Artisan::call('optimize');
});

// Clear application cache:
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return 'Application cache has been cleared';
});

//Clear route cache:
Route::get('/route-cache', function() {
	Artisan::call('route:cache');
    return 'Routes cache has been cleared';
});

//Clear config cache:
Route::get('/config-cache', function() {
 	Artisan::call('config:cache');
 	return 'Config cache has been cleared';
});

// Clear view cache:
Route::get('/view-clear', function() {
    Artisan::call('view:clear');
    return 'View cache has been cleared';
});
