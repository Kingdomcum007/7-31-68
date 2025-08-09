<?php 
$pro_id = $_GET['pro_id'];
require '../connect.php';
$sql = "SELECT * FROM product WHERE pro_id='$pro_id'";
$result = $con->query($sql);
$row = mysqli_fetch_array($result);
if(isset($_POST['submit'])) {
    $pro_name = $_POST['pro_name'];
    $pro_price = $_POST['pro_price'];
    $pro_amount = $_POST['pro_amount'];
    $pro_status = $_POST['pro_status'];
    $sql2 = "UPDATE product SET pro_name='$pro_name', pro_price='$pro_price', pro_amount='$pro_amount', pro_status='$pro_status'
    WHERE pro_id='$pro_id'";
    $result2 = $con->query($sql2);
    if(!$result2) {
        echo "<script>alert('Error updating user');history.back()</script>";
    } else {
        echo "<script>window.location.href='index.php?page=product';</script>";
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
        <h3 class="mb-0">edit_product Form</h3>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-end">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">edit_product Form</li>
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
            <div class="card-title">edit product</div>
          </div>
          <!--end::Header-->
          <!--begin::Form-->
          <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <!--begin::Body-->
            <div class="card-body">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Product Name</label>
                <input type="text" name="pro_name" class="form-control" id="exampleInputEmail1"
                    value=<?php echo $row['pro_name']?> />
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Price</label>
                <input type="text" name="pro_price" class="form-control" id="exampleInputPassword1"
                    value=<?php echo $row['pro_price']?> />
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Amount</label>
                <input type="text" name="pro_amount" class="form-control" id="exampleInputPassword1"
                    value=<?php echo $row['pro_amount']?> />
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Status</label>
                <input type="text" name="pro_status" class="form-control" id="exampleInputPassword1"
                    value=<?php echo $row['pro_status']?> />
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