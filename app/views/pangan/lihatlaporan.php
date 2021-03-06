<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Doc 1</title>

  <!-- Load css-->
  <link rel="stylesheet" href="<?= BASEURL ?>/css/normalize.min.css">

  <!-- Load paper.css -->
  <link rel="stylesheet" href="<?= BASEURL ?>/css/paper.css">
  <link rel="shortcut icon" type="image/x-icon" href="<?= BASEURL; ?>/img/panganku.ico">


  <!-- atur page: A5, A4 or A3 -->
  <style type="text/css" media="print">
    @page 
    {
        size: auto;   /* auto is the initial value */
        margin: 0mm;  /* this affects the margin in the printer settings */
    }
</style>
  <style>
  .center {
    margin-right: auto;
    margin-left: auto;
    text-align: center;
  }
  h1 {
    font-size: 16px;
  }
  * {
    font-family: Calibri;
    font-size: 14px;
     -webkit-print-color-adjust:exact;
  }
  .table {
    border: solid 1px #DDEEEE;
    border-collapse: collapse;
    border-spacing: 0;
    font: normal 13px Arial, sans-serif;
    width: 100%;
}
.table thead th {
    background-color: #DDEFEF;
    border: solid 1px #DDEEEE;
    color: #336B6B;
    padding: 10px;
    text-align: left;
    text-shadow: 1px 1px 1px #fff;
}
.table tbody td {
    border: solid 1px #DDEEEE;
    color: #333;
    padding: 10px;
    text-shadow: 1px 1px 1px #fff;
}
</style>
</head>

<!-- Set kertas -->
<body class="A4 potrait">

  <!-- Atur layout -->
  <section class="sheet padding-15mm">
      <h1 class="center" style="text-decoration: underline;margin-top: 20px;"><?= $data['title'] ?></h1>
      <table class="table">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Komoditas</th>
                      <th>Kategori</th>
                      <th>Harga</th>                      
                      <th>Kota</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $no=1; ?> 
                    <?php foreach ($data['pangan'] as $row) :?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $row['komoditas'];?></td>
                      <td><div class="badge badge-warning"><?= $row['nama_kategori'];?></div></td>
                      <td><?= $row['harga'];?></td>
                      <td><div class=""><?= $row['nama_kota'];?></div></td>                      
                    </tr>
                    <?php $no++; endforeach; ?>
                  </tbody>
                </table>
  </section>
<script type="text/javascript">
//  window.print();
  //   window.onafterprint = window.close;
</script>
</body>

</html>