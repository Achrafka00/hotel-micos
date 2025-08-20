<?php

use Illuminate\Support\Facades\Route;
 
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EnvoiMail;
use App\Http\Controllers\homeController;


Route::get('/sendMail',[EnvoiMail::class,'sendMail']);


Route::get('/', [AdminController::class,'home']);



route::get('/dashboard',[AdminController::class,'index']);
    
 

route::get('/home',[AdminController::class,'index'])->name('home');


route::get('/create_room',[AdminController::class,'create_room'])->middleware('auth');


route::post('/add_room',[AdminController::class,'add_room']);


route::get('/view_room',[AdminController::class,'view_room'])->name('view_room')->middleware('auth');


route::get('/room_delete/{id}',[AdminController::class,'room_delete']);


route::get('/room_update/{id}',[AdminController::class,'room_update']);


route::post('/edit_room/{id}',[AdminController::class,'edit_room']);


route::get('/room_details/{id}',[homeController::class,'room_details']);


route::post('/add_booking/{id}',[homeController::class,'add_booking']);


route::get('/bookings',[AdminController::class,'bookings'])->middleware('auth');



route::get('/delete_booking/{id}',[AdminController::class,'delete_booking'])->middleware('auth');



route::get('/aprove_book/{id}',[AdminController::class,'aprove_book'])->middleware('auth');


 
route::get('/rejected_book/{id}',[AdminController::class,'rejected_book']);



route::get('/view_gallary',[AdminController::class,'view_gallary'])->middleware('auth');


route::post('/upload_gallary',[AdminController::class,'upload_gallary']);



route::get('/delete_gallary/{id}',[AdminController::class,'delete_gallary']);



route::get('/our_rooms',[homeController::class,'our_rooms']);


route::get('/hotel_gallary',[homeController::class,'hotel_gallary']);


route::post('/contact',[homeController::class,'contact']);



route::get('/contact_us',[homeController::class,'contact_us']);



route::get('/all_messages',[AdminController::class,'all_messages'])->middleware('auth');



route::get('/send_mail/{id}',[AdminController::class,'send_mail'])->middleware('auth');



route::post('/mail/{id}',[AdminController::class,'mail']);



route::get('/see_more',[AdminController::class,'see_more']);




