<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserDashboardController;
use Illuminate\Support\Facades\Route;

// Registrasi dan Login
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Menjelajah dan Mencari Kelas
Route::get('courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('courses/{course:slug}', [CourseController::class, 'show'])->name('courses.show');

// Menambahkan Kelas ke Keranjang
Route::post('cart/{course}', [CartController::class, 'store'])->name('cart.store');
Route::delete('/cart/{course}', [CartController::class, 'remove'])->name('cart.remove');

// Proses Checkout
Route::get('cart', [CartController::class, 'index'])->name('cart.index');

// Route for processing the checkout
Route::post('checkout', [CartController::class, 'checkout'])->name('checkout.index');

// Route for showing the payment details
Route::get('payments/{payment}', [PaymentController::class, 'show'])->name('payments.show');
Route::post('payments/{payment}/complete', [PaymentController::class, 'complete'])->name('payments.complete');


// Mengakses Kelas
Route::get('my-courses', [UserDashboardController::class, 'myCourses'])->name('user.my-courses');
Route::get('my-courses/{course}', [UserDashboardController::class, 'viewCourse'])->name('user.view-course');
Route::get('materials/{material}', [UserDashboardController::class, 'downloadMaterial'])->name('user.download-material');

// Ulasan dan Rating
Route::post('courses/{course}/reviews', [ReviewController::class, 'store'])->name('reviews.store');

// Dashboard Pengguna
Route::get('dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');
Route::get('profile', [UserDashboardController::class, 'profile'])->name('user.profile');
Route::get('purchase-history', [UserDashboardController::class, 'purchaseHistory'])->name('user.purchase-history');
Route::get('certificates', [UserDashboardController::class, 'certificates'])->name('user.certificates');


Route::get('admin/login', [App\Http\Controllers\Admin\AuthController::class, 'showLoginForm'])->name('admin.login.form');
Route::post('admin/login', [App\Http\Controllers\Admin\AuthController::class, 'login'])->name('admin.login');

// Manage Courses
Route::get('admin/courses', [\App\Http\Controllers\Admin\CourseController::class, 'index'])->name('admin.courses.index');
Route::get('admin/courses/create', [\App\Http\Controllers\Admin\CourseController::class, 'create'])->name('admin.courses.create');
Route::post('admin/courses', [\App\Http\Controllers\Admin\CourseController::class, 'store'])->name('admin.courses.store');
Route::get('admin/courses/{course}/edit', [\App\Http\Controllers\Admin\CourseController::class, 'edit'])->name('admin.courses.edit');
Route::put('admin/courses/{course}', [\App\Http\Controllers\Admin\CourseController::class, 'update'])->name('admin.courses.update');
Route::delete('admin/courses/{course}', [\App\Http\Controllers\Admin\CourseController::class, 'destroy'])->name('admin.courses.destroy');

// Manage Categories (without using resource)
Route::get('admin/categories', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin.categories.index');
Route::get('admin/categories/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin.categories.create');
Route::post('admin/categories', [\App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('admin.categories.store');
Route::get('admin/categories/{category}/edit', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin.categories.edit');
Route::put('admin/categories/{category}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin.categories.update');
Route::delete('admin/categories/{category}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin.categories.destroy');

// Manage Users
Route::get('admin/users', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.users.index');
Route::patch('admin/users/{user}/toggle-status', [\App\Http\Controllers\Admin\UserController::class, 'toggleStatus'])->name('admin.users.toggle-status');

// Manage Transactions
Route::get('admin/transactions', [\App\Http\Controllers\Admin\TransactionController::class, 'index'])->name('admin.transactions.index');
Route::get('admin/transactions/{transaction}', [\App\Http\Controllers\Admin\TransactionController::class, 'show'])->name('admin.transactions.show');

// Manage Reviews and Ratings
Route::get('admin/reviews', [\App\Http\Controllers\Admin\ReviewController::class, 'index'])->name('admin.reviews.index');
Route::delete('admin/reviews/{review}', [\App\Http\Controllers\Admin\ReviewController::class, 'destroy'])->name('admin.reviews.destroy');

// Analytics and Reports
Route::get('admin/reports/sales', [\App\Http\Controllers\Admin\ReportController::class, 'sales'])->name('admin.reports.sales');
Route::get('admin/reports/users', [\App\Http\Controllers\Admin\ReportController::class, 'users'])->name('admin.reports.users');
Route::get('admin/reports/popular-courses', [\App\Http\Controllers\Admin\ReportController::class, 'popularCourses'])->name('admin.reports.popular-courses');

// Support
Route::get('admin/support', [\App\Http\Controllers\Admin\SupportController::class, 'index'])->name('admin.support.index');
Route::get('admin/support/faq', [\App\Http\Controllers\Admin\SupportController::class, 'faq'])->name('admin.support.faq');
Route::post('admin/support/respond', [\App\Http\Controllers\Admin\SupportController::class, 'respond'])->name('admin.support.respond');
