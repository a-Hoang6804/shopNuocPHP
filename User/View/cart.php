<style type="text/css">
  .img-cart {
    display: block;
    max-width: 50px;
    height: auto;
    margin-left: auto;
    margin-right: auto;
  }

  table tr td {
    border: 1px solid #FFFFFF;
  }

  table tr th {
    background: #eee;
  }

  .panel-shadow {
    box-shadow: rgba(0, 0, 0, 0.3) 7px 7px 7px;
  }
</style>


<body>
  <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
  <div class="container bootstrap snippets bootdey">
    <?php
    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
      ?>
      <div class="col-md-12 ms-sm-auto col-lg-9 p-1 content">
        <div class="row">
          <form action="index.php?ation=giohang&act=giohang_action">
            <div class="col-md-12">
              <div class="panel panel-info panel-shadow">
                <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Image</th>
                          <th>Product</th>
                          <th>Qty</th>
                          
                          <th>Price</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        foreach ($_SESSION['cart'] as $key => $item):
                          ?>
                          <tr>
                            <td>
                              <img style="height: 50px; width:50px;" src=".\images\<?php echo $item['hinh'] ?>"
                                class="img-fluid" alt="">
                            </td>
                            <td>
                              <?php echo $item['tenhh']; ?>
                            </td>
                            <td>
                              Số Lượng: <input type="text" name="newqty[<?php echo $key ?>]"
                                value="<?php echo $item['soluong']; ?>" />
                              <button class="btn btn-default"><i class="fa fa-pencil"></i>

                              </button>
                              <a href="index.php?action=giohang&act=giohang_xoa&id=<?php echo $key; ?>"
                                class="btn btn-primary" rel="tooltip"><i class="fa fa-trash-o"></i></a>
                            </td>
                           
                            <td>
                              <?php echo number_format($item['dongia']) ?>
                            </td>
                            <td>
                              <?php echo number_format($item['thanhtien']) ?><sup><u>đ</u></sup>
                            </td>
                          </tr>

                          <?php
                        endforeach;
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <a href="index.php?action=thanhtoan" class="btn btn-primary pull-right">Thanh Toán<span
                  class="glyphicon glyphicon-chevron-right"></span></a>
              <div>
                <p>Tổng Tiềnn</p>
                <?php
                $gh = new giohang();
                echo $gh->getSubTotal();
                ?>
              </div>
            </div>
          </form>
        </div>
      </div>
    <?php
    } else {
      echo ` <script> alert('Chua co hang') </script>`;
      echo `<meta http-equiv="refresh" content="0;url=./index.php?action=home"/>`;
    }
    ?>
  </div>
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script type="text/javascript">

  </script>
</body>