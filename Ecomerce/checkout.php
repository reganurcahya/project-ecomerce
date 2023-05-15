<?php

	include_once "header.php"

?>
    <!-- Page Add Section Begin -->
    <section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>Checkout<span>.</span></h2>
                    </div>
                </div>
                <div class="col-lg-8">
                    <img src="img/add.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <!-- Cart Total Page Begin -->
<section class="cart-total-page spad">
 <div class="container">
   <form method="POST" action="./login//sb-admin//customer//proses_customer.php">
  <div class="col-lg-9">
   <div class="row">
       <div class="col-lg-2">
          <p class="in-name">nama</p>
       </div>        
        <input id="name" name="name" type="text" class="form-control" 
        value="<?php if(isset($row['name'])) echo $row['name']; ?>">
   </div>
  </div>
  <div class="col-lg-9">
   <div class="row">
       <div class="col-lg-2">
          <p class="in-name">jenis kelamin</p>
        </div>        
        <input id="gender" name="gender" 
        value="<?php if(isset($row['gender'])) echo $row['gender']; ?>" type="text" class="form-control">
      </div>
    </div>
  <div class="col-lg-9">
   <div class="row">
       <div class="col-lg-2">
          <p class="in-name">no telepon</p>
        </div>        
        <input id="phone" name="phone" value="<?php if(isset($row['phone'])) echo $row['phone']; ?>"
        type="text" class="form-control">
      </div>
    </div>
  <div class="col-lg-9">
   <div class="row">
       <div class="col-lg-2">
          <p class="in-name">email</p>
        </div>        
        <input id="email" name="email" value="<?php if(isset($row['email'])) echo $row['email']; ?>" type="text" class="form-control">
      </div>
    </div>
  <div class="col-lg-9">
   <div class="row">
       <div class="col-lg-2">
          <p class="in-name">alamat</p>
        </div>        
        <input id="address" name="address" value="<?php if(isset($row['address'])) echo $row['address']; ?>" type="text" class="form-control">
      </div>
  </div>
  <div class="col-lg-9">
   <div class="row">
       <div class="col-lg-2">
          <p class="in-name">id card</p>
        </div>  
        <input id="card_id" name="card_id" value="<?php if(isset($row['card_id'])) echo $row['card_id']; ?>" type="text" class="form-control">
      </div>
    </div>
    <?php
        $button = (empty($_id)) ? "Simpan":"Update"; 
    ?>
      <input type="submit" name="proses" type="submit" 
      class="btn btn-primary" value="<?=$button?>"/>
      <input type="hidden" name="id" value="<?=$_id?>"/>
    </div>
  </div>
</form>
        </div>
    </section>
    <!-- Cart Total Page End -->

<?php

include_once "footer.php"

?>