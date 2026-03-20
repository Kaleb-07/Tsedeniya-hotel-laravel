<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

Route::get('/', [AdminController::class , 'home']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
            return view('dashboard');
        }
        )->name('dashboard');
    });

Route::get('/home', [AdminController::class , 'index'])->name('home');

Route::get('/create_room', [AdminController::class , 'create_room'])->name('create_room');
Route::post('/add_room', [AdminController::class , 'add_room'])->name('add_room');
Route::get('/view_room', [AdminController::class , 'view_room'])->name('view_room');
Route::get('/delete_room/{id}', [AdminController::class , 'delete_room'])->name('delete_room');
Route::get('/update_room/{id}', [AdminController::class , 'update_room'])->name('update_room');
Route::post('/edit_room/{id}', [AdminController::class , 'edit_room'])->name('edit_room');

Route::get('/room_details/{id}', [HomeController::class , 'room_details'])->name('room_details');
Route::post('/add_booking/{id}', [HomeController::class , 'add_booking'])->name('add_booking');

Route::get('/view_booking', [AdminController::class , 'view_booking'])->name('view_booking');
Route::get('/delete_booking/{id}', [AdminController::class , 'delete_booking'])->name('delete_booking');
Route::get('/approve_book/{id}', [AdminController::class , 'approve_book'])->name('approve_book');
Route::get('/reject_book/{id}', [AdminController::class , 'reject_book'])->name('reject_book');

Route::get('/view_gallary', [AdminController::class , 'view_gallary'])->name('view_gallary');
Route::post('/upload_gallary', [AdminController::class , 'upload_gallary'])->name('upload_gallary');
Route::get('/delete_gallary/{id}', [AdminController::class , 'delete_gallary'])->name('delete_gallary');

Route::post('/contact', [HomeController::class , 'add_contact']);

Route::get('/all_message', [AdminController::class , 'all_message'])->name('all_message');
Route::get('/send_email/{id}', [AdminController::class , 'send_mail'])->name('send_mail');
Route::post('/mail', [AdminController::class , 'mail'])->name('mail');

Route::get('/our_rooms', [HomeController::class , 'our_rooms'])->name('our_rooms');
Route::get('/gallary', [HomeController::class , 'hotel_gallary'])->name('gallary');
Route::get('/contact', [HomeController::class , 'hotel_contact'])->name('contact');