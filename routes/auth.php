<?php 

Route::get('post/create', [
    'uses' => 'CreatePostController@create',
    'as' => 'posts.create'
]);

Route::post('posts/rceate', [
    'uses' => 'CreatePostController@store',
    'as' => 'posts.store'
] );
