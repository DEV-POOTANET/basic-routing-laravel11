<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('profile.myprofile');
});

Route::get('/welcome2', function () {
    return view('welcome2');
});
Route::redirect('/welcome','/welcome2');

Route::get('/email/{email?}',function($email= 'Unknown@'){
    return 'Email : ' .$email;
});

Route::get('/product/{id?}',function($id){
    return 'Product ID : ' .$id;
}) ->where('id','[0-9]+');

Route::get('/product/{id?}/{name}',function($id,$name){
    return 'Product ID : ' .$id.'<br>Product Name:'.$name;
}) ->where([
    'id','[0-9]+'.
    'name','[A-Z, a-z]+'
]);


Route::get('/user/{idcard}/{email}', function($idcard,$email){
    return 'ID Card :'.$idcard.'<br>Email : '.$email;
}) ->where([
    'idcard' => '[0-9]{13}+' ,
    'email' => '[A-Z, a-z, 0-9]+.[@]+.[A-Z, a-z]+\.[c][o][m]'
]);

Route::get('/profile/{name}/{position}',function($name,$position){
    return view('profile.myprofile',
    [
        'name' => $name,
        'position' => $position
    ]);
});

Route::get('/profile/{ID}/{Fullname}/{University}/{Major}/{FavoriteColor}/{FavoriteHobby}',
function($ID,$Fullname,$University,$Major,$FavoriteColor,$FavoriteHobby){
    return view('profile.myprofile1',
    [
        'ID' => $ID,
        'Fullname' => $Fullname,
        'University' => $University,
        'Major'=> $Major,
        'FavoriteColor' =>$FavoriteColor,
        'FavoriteHobby' =>$FavoriteHobby
    ]);
});
// Route::get('/user/{id}', function($id){
//     return 'ID Card :'.$id ;
// }) ->where(['id' => '[0-9]+']);
