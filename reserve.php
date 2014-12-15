<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nimba product : Reservation Form</title>

   

   <?php include('include/header.inc.php'); ?>  

   
                <div class="col-sm-9">
                    
                <section id="contact">

                        
                    <h2 class="page-title">Reservation Form</h2>
                    <p class"text-muted">Please fill out the form below to reserve your Nimba today!</p>
                    
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your name *" id="name" required data-validation-required-message="Please enter your name">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter a valid e-mail address">
                                    <p class="help-block text-danger"></p>
                                </div>                
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Your phone number is required">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your City" id="city">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>

                            <div class="clearfix"></div>

                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Reserve</button>
                            </div>
                        </div> <!-- /.row -->
                    </form>
                                
                        
                </section>



                </div> <!-- /.col -->
            </div> <!-- /.row -->            
        </main>
        
        <?php include('include/footer.inc.php'); ?> 