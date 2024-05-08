<?php  include(VIEWS.'inc'.DS.'header.php'); ?>

<h1 class="text-center  mt-5 mb-2 py-3">Edit Product </h1>

    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">

            
                <?php if(isset($success)): ?>
                    <h3 class="alert alert-success text-center" id="update_success"><?php  echo $success; ?></h3>
                <?php endif; ?>
                <?php if(isset($error)): ?>
                    <h3 class="alert alert-danger text-center"><?php  echo $error; ?></h3>
                <?php endif; ?>


                <form class="p-5 border mb-5" method="POST" action="<?php url('products/update'); ?>">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" required value="<?php echo $row['name']; ?>" name="name" class="form-control" id="name" >
                        <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" required class="form-control" value="<?php echo $row['price']; ?>" name="price" id="price">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" required class="form-control" value="<?php echo $row['description']; ?>" name="description" id="description">
                    </div>

                    <div class="form-group">
                        <label for="qty">Quantity</label>
                        <input type="number" required class="form-control" value="<?php echo $row['qty']; ?>" name="qty" id="qty">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
                            
            </div>
        </div>
    </div>

    <script>
        let insertMSG =document.querySelector("#update_success");
        if (insertMSG)
        {
            setTimeout(()=>{
                insertMSG.style.display = "none";
            },3000)
        }
    </script>

<?php  include(VIEWS.'inc'.DS.'footer.php'); ?>