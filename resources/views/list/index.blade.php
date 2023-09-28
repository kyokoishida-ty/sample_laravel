<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
    <title>デモアプリ一覧画面</title>
</head>
<body>
<div class="container-fluid">
  <h1>デモアプリ一覧画面</h1>

  <div class="row mt-5 mb-3">
    <div class="col text-right">
      <a href="./create" type="button" class="btn btn-primary">新規データ追加</a>
    </div>
  </div>

  <div class="row my-3">
    <div class="table-responsive-md">
      <table class="table text-nowrap" id="table">
        <thead class="thead-light">
          <tr>
            <th scope="col" style="width:10%">#</th>
            <th scope="col" style="width:10%"></th>
            <th scope="col">項目1</th>
            <th scope="col">項目2</th>
            <th scope="col">項目3</th>
            <th scope="col">項目4</th>
            <th scope="col">項目5</th>
            <th scope="col">項目6</th>
            <th scope="col">項目7</th>
            <th scope="col">項目8</th>
            <th scope="col">項目9</th>
            <th scope="col">項目10</th>
            <th scope="col">項目11</th>
            <th scope="col">項目12</th>
            <th scope="col">項目13</th>
            <th scope="col">項目14</th>
            <th scope="col">項目15</th>
            <th scope="col" style="width:10%">操作</th>
            <th scope="col" style="width:10%"></th>
          </tr>
        </thead>
  
        <tbody>
          <tr>
            <th scope="row">1</th>
            <th scope="row"><input type="checkbox"></th>
            <td><a href="./show">サンプルデータ1</a></td>
            <td>
              <select name="example">
                <option>選択肢のサンプル1</option>
                <option>選択肢のサンプル2</option>
                <option>選択肢のサンプル3</option>
              </select>
            </td>
            <td>サンプルデータ3</td>
            <td>サンプルデータ4</td>
            <td>サンプルデータ5</td>
            <td>サンプルデータ6</td>
            <td>サンプルデータ7</td>
            <td>サンプルデータ8</td>
            <td>サンプルデータ9</td>
            <td>サンプルデータ10</td>
            <td>サンプルデータ11</td>
            <td>サンプルデータ12</td>
            <td>サンプルデータ13</td>
            <td>サンプルデータ14</td>
            <td>サンプルデータ15</td>
            <td><button type="button" class="delete-quiz btn btn-secondary btn-sm">詳細</button></td>
            <td><button type="button" class="delete-quiz btn btn-danger btn-sm">削除</button></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="row mt-5 mb-3">
      <div class="col text-right">
        <a href="" type="button" class="btn btn-danger mr-3">チェックしたデータを一括削除</a>
        <a href="" type="button" class="btn btn-secondary">データ更新</a>
      </div>
  </div>
</div><!-- close tag <div class="container-fluid"> -->
</body>
</html>