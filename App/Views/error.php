<?php  include(VIEWS.'inc'.DS.'header.php'); ?>


<div class="mt-5 container-fluid error-container d-flex justify-content-center align-items-center">
    <div class="jumbotron text-center error-jumbotron">
        <h1 class="display-4 mt-4 font-weight-bold">Oops! Something went wrong :(</h1>
        <br>
        <img src="<?php echo SITE_NAME.'assets/images/error-image.png'; ?>" class="img-fluid error-image" alt="Error Image" style="max-width: 300px;">
        <p class="lead mb-4">We're sorry, but the requested page wasn't found.</p>
        <a class="mt-2 btn btn-primary btn-lg" href="<?php echo url(); ?>" role="button">Back To Home</a>
    </div>
</div>


<?php  include(VIEWS.'inc'.DS.'footer.php'); ?>