<?php  include(VIEWS.'inc'.DS.'header.php'); ?>

<style>
    .bg-custom {
        background-color: #EEE; /* Custom background color */
    }
</style>

<div class="container rounded bg-custom d-flex justify-content-between my-5 py-4 align-items-center">
    <h1 class="p-2 flex-grow-1 font-weight-bold">List of all products</h1>
    <a class="p-2 btn btn-primary" href="<?php url("products/add")?>">Add New Product</a>
</div>


<div class=""> <!-- container -->
    <div class="row">

        <div class="col-10 mx-auto p-4 border rounded mb-5">

            <?php if(isset($success)): ?>
                <h3 class="alert alert-success text-center"><?php  echo $success; ?></h3>
            <?php endif; ?>
            <?php if(isset($error)): ?>
                <h3 class="alert alert-danger text-center"><?php  echo $error; ?></h3>
            <?php endif; ?>
            <table class="table table-striped table-hover table-bordered">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Description</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $i=1; ?>
                    <?php foreach($products as $row):  ?>
                        <tr>
                            <td> <?php echo $i; $i++; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['price']; ?> <b class="float-right"> $ </b></td>
                            <td class="text-center"><?php echo $row['description']; ?></td>
                            <td><?php echo $row['qty']; ?></td>
                            <td>
                                <a href="<?php url('products/edit/'.$row['id']) ?>" class="btn btn-primary" >Edit</a>
                            </td>
                            <td>
                                <a href="<?php url('products/delete/'.$row['id']) ?>"  class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php  endforeach; ?>
                </tbody>
            </table>


        </div>


    </div>
</div>



<?php  include(VIEWS.'inc'.DS.'footer.php'); ?>