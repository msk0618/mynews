<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

//問題1 URLとControllerやActionをひも付ける機能を何といいますか？

// Routing


//問題2 あなたが考える、group化をすることのメリットを考えてみてください

//まとめるとスッキリして見える


//問題3 「http://XXXXXX.jp/XXX というアクセスが来たときに、 AAAControllerのbbbというAction に渡すRoutingの設定」を書いてみてください

Route::controller(AAAController::class)->group(function() {
    Route::get('admin/news/create', 'bbb');
});

//問題4 【応用】 前章でAdmin/ProfileControllerを作成し、add Action, edit Actionを追加しました。web.phpを編集して、admin/profile/create にアクセスしたら 
//ProfileController の add Action に、admin/profile/edit にアクセスしたら ProfileController の edit Action に割り当てるように設定してください


Route::controller(ProfileController::class)->group(function() {
    Route::get('admin/profile/create', 'add');
});

Route::controller(ProfileController::class)->group(function() {
    Route::get('admin/profile/edit', 'edit');
});


//※3、4につきましては作成したソースコードをGitHubにプッシュしたうえ、該当リポジトリのURLを課題一覧機能より提出してください。

