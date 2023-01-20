<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MyNews</title>
    </head>
    <body>
        <h1>Myニュース作成画面</h1>
    </body>
</html>

//問題1　Viewは何をするところでしょうか。簡潔に説明してみてください
//Controllerの指示によってアクセスしてきたユーザーのブラウザに表示するデータを生成するところ




//問題2  プログラマーがHTMLを書かずにPHPなどのプログラミング言語やフレームワークを使う必要があるのはどういった理由でしょうか
//ゼロから作らないので、工程を短縮できる




//問題3  【応用】 前々章でAdmin/ProfileControllerのadd Action, edit Action に下記のように記述しました

  public function add()
  {
      return view('admin.profile.create');
  }
  public function edit()
  {
      return view('admin.profile.edit');
  }
この場合、add Action と edit Action を描画するには、それぞれどこのディレクトリに何というBladeファイルを設置すれば良いでしょうか。
//resources/views/admin/create.blade.php 
  resources/views/admin/edit.blade.php






//問題4. 【応用】3. の答えを実際に作成してみましょう。また、作成したBladeファイルにhtmlで記述して装飾してみましょう
//<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MyNews</title>
    </head>
    <body>
        <h1>プロフィールの作成</h1>
    </body>
</html> 

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MyNews</title>
    </head>
    <body>
        <h1>プロフィールの編集</h1>
    </body>
</html>






※4につきましては、作成したソースコードをGitHubにプッシュしたうえ、
　該当リポジトリのURLを課題一覧機能より提出してください