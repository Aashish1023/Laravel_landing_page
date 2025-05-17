<?php

use App\Livewire\ShowHome;
use App\Livewire\ShowCourse;
use App\Livewire\ShowCoursePage;
use App\Livewire\ShowTeamPage;
use App\Livewire\ShowBlog;
use App\Livewire\BlogDetail;
use App\Livewire\ShowFaqPage;
use App\Livewire\ShowPage;


use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// use Livewire\Livewire;

// Livewire::component('show-home', ShowHome::class);

// Route::get('/', function () {
// 	return view('livewire.show-home');
// });

Route::get('/', ShowHome::class)->name('home');
Route::get('/courses',ShowCoursePage::class)->name('coursesPage');
Route::get('/course{id}',ShowCourse::class)->name('coursePage');

Route::get('/team',ShowTeamPage::class)->name('teamPage');

Route::get('/blog',ShowBlog::class)->name('blog');
Route::get('/blog/{id}',BlogDetail::class)->name('blogDetail');


Route::get('/article{id}',ShowCourse::class)->name('articlePage');

Route::get('/faqs',ShowFaqPage::class)->name('faqs');

Route::get('/page{id}',ShowPage::class)->name('page');

?>