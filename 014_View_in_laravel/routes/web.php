<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


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

Route::get('/', function () {
    return view('welcome');
});



############## Practice Start #########

//### system 1
Route::get('about',function(){
    return view('aboutme',['name'=>'Amjad','roll'=>101]);
});


// //### system 1 alternative
// Route::get('about',function(){
//     return view('aboutme')->with(['name'=>'Amjad','roll'=>101]);  //data send use ->with([])
// });


// //### system 1 alternative
// Route::view('about','aboutme',['name'=>'Amjad','roll'=>101]);//This is short form





// routes parameter 
Route::get('single/{id}',function($id){ return view('single',['keyid'=>$id]); }); // single parameter pass

Route::get('multiple/{id}/comment/{com_id}',function($id,$com_id){ return view('multiple',['keyid'=>$id,'keycom_id'=>$com_id]);}); // multiple paramer pass

Route::get('optional/{id?}',function($id="default_Value"){ return view('optional',['keyid'=>$id]);;}); // '?' optional parameter er value na dileo route kaj kore

// routes parameter with regular Expression
Route::get('SingleRregularExpresstion/{name}',function($name){ return view('SingleRregularExpresstion',['keyid'=>$name]);})->where('name',"[A-Za-z]+"); // Single regular Expression with "where" method //for only number "[0-9]+"
Route::get('MultipleRegularExpresstion/{id}/{name}',function($id,$name){ return view('MultipleRegularExpresstion',['keyid'=>$id,'keyname'=>$name]);})->where(["id"=>"[0-9]+","name"=>"[A-Za-z]+"]); // Multiple regular Expression with "where" method // use '[]' array

// routes parameter with Helper Method
Route::get('helperMethod/{para1}/{para2}',function($para1,$para2){ return view('helperMethod',['keyid'=>$para1,'keyname'=>$para2]);})->whereNumber('para1')->whereAlpha('para2'); // 

// routes parameter Uuid
Route::get('Uuid/{para1}',function($para1){ return view('single',['keyid'=>$para1]);})->whereUuid('para1'); //Uuid = FFFFFFFF-FFFF-FFFF-FFFF-FFFFFFFFFFFF

// Route redirect
Route::view('Login','login');
Route::view('Register','register');
Route::redirect('Login','Register'); // route redirect    'Login'  To  'Register' default 302

Route::redirect('redirect','xyz',301); // route redirect    'redirect'  To  'xyz' permanent
Route::permanentRedirect('redirect','ABC'); // route redirect    'redirect'  To  'ABC' permanent

// route fallback should be the last rout
Route::fallback(function(){         // if your rearch wrong route then you show fallback route
    return view('default');
});

// Route Method
//single route method
Route::get('uri',function(){});
Route::post('uri',function(){});
Route::put('uri',function(){});
Route::patch('uri',function(){});
Route::delete('uri',function(){});
// Route::option('uri',function(){});

// Multiple route method
Route::match(['get','post'],'uri',function(){});
Route::any('uri',function(){});








// ####################
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
