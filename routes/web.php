<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Sample;
use App\Http\Livewire\Customer;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Pet;
use App\Http\Livewire\FrontHome;
use App\Http\Livewire\AdoptYourPet;
use App\Http\Livewire\BookYourPet;
use App\Http\Livewire\CustomerRegister;
use App\Http\Livewire\CustomerLogin;
use App\Http\Livewire\ContactUs;
use App\Http\Livewire\CustomerComponent;
use App\Http\Livewire\ContactUsComponent;
use App\Http\Livewire\Users;
use App\Http\Livewire\PetBookings;
use App\Http\Livewire\AboutUs;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//front routes
Route::get('/', FrontHome::class)->name('home');
Route::get('/adopt-your-pet', AdoptYourPet::class)->name('adopt-your-pet');
Route::get('/customer-register', CustomerRegister::class)->name('customer-register');
Route::get('/flogin', CustomerLogin::class)->name('flogin');
Route::get('/contact-us', ContactUs::class)->name('contact-us');
Route::get('/about-us', AboutUs::class)->name('about-us');
Route::get('/bookyourpet/{id}', BookYourPet::class)->name('bookyourpet');

Route::get('/admin', function () {
    return view('auth.login');
})->name('login');


//controller routes
Route::post('/login', [LoginController::class, 'login']);
Route::post('/customer-login', [LoginController::class, 'customerLogin']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/customer-logout', [LoginController::class, 'customerLogout'])->name('customer-logout');
Route::post('/customer-register', [CustomerController::class, 'customerRegister']);
Route::post('/customer-contact', [CustomerController::class, 'customerContact']);
Route::get('/book-your-pet', [CustomerController::class, 'bookYourpet'])->name('book-your-pet');



//admin routes
Route::group(['middleware'=>['auth']],function(){
Route::get('/sample', Sample::class)->name('sample');
Route::get('/customer', Customer::class)->name('customer');
Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/pet', Pet::class)->name('pet');
Route::get('/customers', CustomerComponent::class)->name('customers');
Route::get('/contactus', ContactUsComponent::class)->name('contactus');
Route::get('/user', Users::class)->name('user');
Route::get('/petbookings', PetBookings::class)->name('petbookings');
});
