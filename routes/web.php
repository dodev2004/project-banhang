<?php

use App\Http\Controllers\ajax\GetLocaitonAjax;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashBoardController;
use App\Http\Controllers\backend\AuthController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\Backend\UserCatelogueController;
use App\Http\Controllers\PostCatelogueController;
use App\Http\Controllers\backend\PostController;
use App\Http\Controllers\backend\AttributeController;
use App\Http\Controllers\backend\AttributeValueController;
use App\Http\Controllers\backend\ProductCatelogueController;
use App\Http\Controllers\ajax\ChangeStatusAjax;

Route::prefix("admin")->group(function(){
    Route::get("/login",[AuthController::class,"login"])->name("admin.login");
    Route::post("/login/auth",[AuthController::class,"auth"])->name("admin.login.auth");
    Route::get("/logout",[AuthController::class,"logout"])->name("admin.logout");
    Route::get("/register",[AuthController::class,"register"])->name("admin.register")->middleware("guest");
    Route::post("/register/send",[AuthController::class,"registerToken"])->name("admin.register.token");
    Route::get("/reset-acount",[AuthController::class,"forgetPassword"])->name("admin.forgetPassword")->middleware("guest") ; 
    Route::post("/confirm-email",[AuthController::class,"confirmEmail"])->name("admin.confirmPassword");  
    Route::get('password/reset/{token}', [AuthController::class, 'showResetForm'])->name('password.reset');
    Route::post("/reset-password",[AuthController::class,"resetPassword"])->name('password.update');
});
Route::get("/",function(){
    return redirect()->route("admin.login");
});

Route::prefix("admin")->middleware("authLogin")->group(function(){
    Route::get("/dashboard",[DashBoardController::class,"index"])->name("admin.dashboard");
    // User
    Route::prefix('users')->group(function(){
        Route::get("list",[UserController::class,"listGroupMember"])->name("admin.users");
        Route::put("list/change_status",[UserController::class,"updateUserStatus"])->name("admin.users.user_status");
        Route::get("create",[UserController::class,"create"])->name("admin.users.create");
        Route::post("store",[UserController::class,"store"])->name("admin.users.store");
        Route::get("edit/{id}",[UserController::class,"editUser"])->name("admin.users.edit");
        Route::put("update/{id}",[UserController::class,'updateUser'])->name("admin.users.update");
        Route::delete("delete",[UserController::class,'deleteUser'])->name("admin.users.delete");
    });
    Route::prefix("user_catelogue")->group(function(){
        Route::get("list",[UserCatelogueController::class,"listGroupMember"])->name("admin.user_catelogue");
        Route::get("create",[UserCatelogueController::class,"create"])->name("admin.user_catelogue.create");
        Route::post("user_catelogueStore",[UserCatelogueController::class,"store"])->name("admin.user_catelogue.store");
        Route::get("{id}/edit",[UserCatelogueController::class,"edit"])->name("admin.user_catelogue.edit");
        Route::put("{id}/update",[UserCatelogueController::class,"UserCatelogueUpdate"])->name("admin.user_catelogue.update");
        Route::delete("/delete",[UserCatelogueController::class,"UserCatelogueDelete"])->name("admin.user_catelogue.delete");
    });
    Route::prefix("post-catelogue")->group(function(){
        Route::get("list",[PostCatelogueController::class,"index"])->name("admin.post-catelogue");
        Route::get("create",[PostCatelogueController::class,"create"])->name("admin.post-catelogue.create");
        Route::post("post-catelogueStore",[PostCatelogueController::class,"store"])->name("admin.post-catelogue.store");
        Route::get("{id}/edit",[PostCatelogueController::class,"editPostCatelogue"])->name("admin.post-catelogue.edit");
        Route::put("{id}/update",[PostCatelogueController::class,"PostCatelogueUpdate"])->name("admin.post-catelogue.update");
        Route::delete("/delete",[PostCatelogueController::class,"PostCatelogueDelete"])->name("admin.post-catelogue.delete");
    });
    Route::prefix("post")->group(function(){
        Route::get("list",[PostController::class,"index"])->name("admin.post");
        Route::get("create",[PostController::class,"create"])->name("admin.post.create");
        Route::post("postStore",[PostController::class,"store"])->name("admin.post.store");
        Route::get("{id}/edit",[PostController::class,"editPost"])->name("admin.post.edit");
        Route::put("{id}/update",[PostController::class,"update"])->name("admin.post.update");
        Route::delete("/delete",[PostController::class,"destroy"])->name("admin.post.delete");
    });
    Route::prefix("product")->group(function(){
        Route::get("list",[PostController::class,"index"])->name("admin.product");
        Route::get("create",[PostController::class,"create"])->name("admin.product.create");
        Route::post("postStore",[PostController::class,"store"])->name("admin.product.store");
        Route::get("{id}/edit",[PostController::class,"editPost"])->name("admin.product.edit");
        Route::put("{id}/update",[PostController::class,"update"])->name("admin.product.update");
        Route::delete("/delete",[PostController::class,"destroy"])->name("admin.product.delete");
    });
    Route::prefix("product-catelogue")->group(function(){
        Route::get("list",[ProductCatelogueController::class,"index"])->name("admin.product_catelogue");
        Route::get("create",[ProductCatelogueController::class,"create"])->name("admin.product_catelogue.create");
        Route::post("postStore",[ProductCatelogueController::class,"store"])->name("admin.product_catelogue.store");
        Route::get("{id}/edit",[ProductCatelogueController::class,"edit"])->name("admin.product_catelogue.edit");
        Route::put("{id}/update",[ProductCatelogueController::class,"update"])->name("admin.product_catelogue.update");
        Route::delete("/delete",[ProductCatelogueController::class,"destroy"])->name("admin.product_catelogue.delete");
    });
    Route::prefix("variant-catelogue")->group(function(){
        Route::get("list",[AttributeController::class,"index"])->name("admin.variant_catelogue");
        Route::get("create",[AttributeController::class,"create"])->name("admin.variant_catelogue.create");
        Route::post("postStore",[AttributeController::class,"store"])->name("admin.variant_catelogue.store");
        Route::get("{id}/edit",[AttributeController::class,"edit"])->name("admin.variant_catelogue.edit");
        Route::put("{id}/update",[AttributeController::class,"update"])->name("admin.variant_catelogue.update");
        Route::delete("/delete",[AttributeController::class,"destroy"])->name("admin.variant_catelogue..delete");
    });
    Route::prefix("variant")->group(function(){
        Route::get("list",[AttributeValueController::class,"index"])->name("admin.variant");
        Route::get("create",[AttributeValueController::class,"create"])->name("admin.variant.create");
        Route::post("postStore",[AttributeValueController::class,"store"])->name("admin.variant.store");
        Route::get("{id}/edit",[AttributeValueController::class,"edit"])->name("admin.variant.edit");
        Route::put("{id}/update",[AttributeValueController::class,"update"])->name("admin.variant.update");
        Route::delete("/delete",[AttributeValueController::class,"destroy"])->name("admin.variant.delete");
    });
    
});
// Ajax
Route::get("ajax/getLocaion/index",[GetLocaitonAjax::class,"index"])->name("ajax.getLocation");
Route::put("ajax/change_status",[ChangeStatusAjax::class,"change_status"])->name("ajax.changeStatus");


