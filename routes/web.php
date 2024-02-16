<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\indentifant; // Assurez-vous que le nom du contrôleur est correct
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\PointageController;
use App\Http\Controllers\PDFController; 
use App\Http\Controllers\SpacyController; 
use App\Http\Controllers\tsttst; 
use App\Http\Controllers\Exelcontroller; 
use App\Http\Controllers\QrCodeController; 
use App\livewire\Counter;
use App\Http\Controllers\nlptst;


require __DIR__.'/auth.php';
Route::get('users/export/', [Exelcontroller::class, 'export']);

Route::middleware(['auth','isAdmin'])->group(function () {
    Route::get('allUsers/userInformation/{id}', [UserController::class, 'userinformation'])->name('user.information'); 
    Route::get('/allUsers', [UserController::class, 'allUsers'])->name('allUsers');
    Route::get('/process-qrcode/{user}', [QrCodeController::class, 'processQRCode'])->name('process-qrcode');
    Route::get('/qrchek/{user}', [QrCodeController::class, 'qrchek']);
    Route::post('/allUsers/deleteuser/{id}', [UserController::class, 'deleteuser'])->name('deleteUser'); 
    Route::get('/adm', [UserController::class, 'adm'])->name('adm');
    Route::get('/departement', [UserController::class, 'departements'])->name('departement');
    Route::get('/extract-entities', [nlptst::class, 'extractEntities']);
    Route::get('/counter',[ Counter::class]);
    Route::get('/form-table', [FormTable::class]);
    Route::post('/notifications/{id}/mark-as-read', [userController::class, 'Notification']);
});


Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/postercv', [UserController::class, 'posterCV'])->name('poste');
Route::post('/postercv', [PDFController::class,'sendposte'])->name('poste.sendposte');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');
Route::get('/about', [UserController::class, 'about'])->name('about');


// Route::post('/allUsers/userInformation/{{id}}', [UserController::class, 'userInformation'])->name('userInformation');
Route::get('/services', [UserController::class, 'services'])->name('services');
Route::get('/tst2', [UserController::class, 'tst2']);
Route::get('/welcome', [UserController::class, 'welcome']);
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/tst', [PDFController::class, 'extract']);
Route::get('/python', [ SpacyController::class, 'runSpacyScript']);

// Route::get('/tst', [UserController::class, 'sendcv'])->name('tst');

// Route::get('/dashboard', [indentifant::class, 'index'])->name('dashboard');// Utilisez 'Route::get' pour définir la route

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// Route::post('/addcv',[ tsttst::class,'tsttst']);
// middleware([\App\Http\Middleware\Pointe::class])->
// Route::get('/addcv',[ tsttst::class,'tst']);
// Route::get('/addoffre', [UserController::class, 'addoffre'])->name('addoffres');
// Route::middleware(['auth'])->group(function () {
//     Route::post('/', [PointageController::class, 'pointage']);
// });

Auth::routes([
'verify'=>true,
]);


