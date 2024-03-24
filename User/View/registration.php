<!--  -->
<div class="container">
  <div class="row">
    <div class="col-md-12 ms-sm-auto col-lg-9 p-1">
      <section class="services-section section-padding" id="section_3">
        <legend><a href="http://hocwebgiare.com/"><i class="glyphicon glyphicon-globe" style="padding: 150px;"></i></a> Đăng ký thành viên!
        </legend>
        <form action="index.php?action=dangky&act=dangky_action" method="post" class="form" role="form">
          <div class="row">
            <div class="col-xs-4 col-md-4"> <label for="email">Tên Khách Hàng:</label>
            </div>
            <div class="col-xs-8 col-md-8"><input class="form-control" name="txttenkh" placeholder="Tên khách hàng"
                required="" autofocus="" type="text"> </div>
            <div class="col-xs-4 col-md-4"> <label for="email">Địa chỉ:</label>
            </div>
            <div class="col-xs-8 col-md-8"><input class="form-control" name="txtdiachi" placeholder="Địa chỉ khách hàng"
                required="" autofocus="" type="text"> </div>
            <div class="col-xs-4 col-md-4"> <label for="email">Số Điện Thoại:</label>
            </div>
            <div class="col-xs-8 col-md-8"><input class="form-control" name="txtsodt"
                placeholder="Số điện thoại khách hàng" required="" autofocus="" type="text"> </div>
            <div class="col-xs-4 col-md-4"><label for="email">Tên Đăng Nhập:</label>
            </div>
            <div class="col-xs-8 col-md-8"><input class="form-control" name="txtusername" placeholder="Tên đăng nhập"
                required="" type="text">
            </div>
          </div><label for="email">Email:</label> <input class="form-control" name="txtemail" placeholder="Email"
            type="email">
          <input class="form-control" name="txtpass" placeholder="Mật khẩu" type="password">
          <input class="form-control" name="retypepassword" placeholder="Nhập lại mật khẩu" type="password">


          <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit"> Đăng ký</button>
        </form>
      </section>
    </div>
  </div>
</div>