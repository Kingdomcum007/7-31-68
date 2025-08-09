<?php 
require '../connect.php';
if(isset($_POST['submit'])) {
    $pro_name = $_POST['pro_name'];
    $pro_price = $_POST['pro_price'];
    $pro_amount = $_POST['pro_amount'];
    $pro_status = $_POST['pro_status'];
    if(empty($pro_name) || empty($pro_price) || empty($pro_amount) || empty($pro_status)) {
        echo "<script>alert('Please fill in all fields');history.back()</script>";
    }else{
        $old_data = $con->query("SELECT * FROM product Where pro_id = ''");
        $old_num = mysqli_fetch_array($old_data);
        if($old_num == 1) {
            echo "<script>alert('Username already exists');history.back()</script>";
        }else{
            $sql = "INSERT INTO product VALUES ('', '$pro_name', '$pro_price', '$pro_amount', '$pro_status')";
            $result = $con->query($sql);
        }if(!$result) {
            echo "<script>alert('Error adding user');history.back</script>";
        }else {
            echo "<script>window.location.href='index.php?page=product';</script>";
        }
    }
  }
    
?>
<!--begin::App Content Header-->
<div class="app-content-header">
  <!--begin::Container-->
  <div class="container-fluid">
    <!--begin::Row-->
    <div class="row">
      <div class="col-sm-6">
        <h3 class="mb-0">add_product Form</h3>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-end">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">add_product Form</li>
        </ol>
      </div>
    </div>
    <!--end::Row-->
  </div>
  <!--end::Container-->
</div>
<!--end::App Content Header-->
<!--begin::App Content-->
<div class="app-content">
  <!--begin::Container-->
  <div class="container-fluid">
    <!--begin::Row-->
    <div class="row g-4">
      <!--begin::Col-->
      <div class="col-md-12">
        <!--begin::Quick Example-->
        <div class="card card-primary card-outline mb-4">
          <!--begin::Header-->
          <div class="card-header">
            <div class="card-title">add new product</div>
          </div>
          <!--end::Header-->
          <!--begin::Form-->
          <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <!--begin::Body-->
            <div class="card-body">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Product Name</label>
                <input type="text" name="pro_name" class="form-control" id="exampleInputEmail1" />
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Price</label>
                <input type="text" name="pro_price" class="form-control" id="exampleInputPassword1" />
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Amount</label>
                <input type="text" name="pro_amount" class="form-control" id="exampleInputPassword1" />
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Status</label>
                <input type="text" name="pro_status" class="form-control" id="exampleInputPassword1" />
              </div>
            </div>
            <!--end::Body-->
            <!--begin::Footer-->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
            <!--end::Footer-->
          </form>
          <!--end::Form-->
        </div>
        <!--end::Quick Example-->
      </div>
      <!--end::Col-->
    </div>
    <!--end::Row-->
  </div>
  <!--end::Container-->
</div>
<!--end::App Content-->