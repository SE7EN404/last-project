    <?php
session_start();
if( $_SESSION["Email"]!="libr")
{
   header("location:login_Form.php");
}
include_once("header.php");
?>
 <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Welcome</span></p>
                <h1 class="mb-4">Add BOOK</h1>
            </div>
            <div class="row">
                <div class="col-lg-7 mb-5">
                    <div class="contact-form">
                        <div id="success"></div>


                        <form name="sentMessage" id="contactForm" novalidate="novalidate" action="ADD_Book_contorl.php" method="post" enctype="multipart/form-data">
                        
                        
                             <div class="control-group">
                                <input type="text" class="form-control" id="name" placeholder="book Name" required="required" data-validation-required-message="Please enter Student Name" name="Name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="radio" class="form-control" id="subject" placeholder="book type" required="required" data-validation-required-message="Please enter Student Email" name="type" value=" CS" />
                                <label for="javascript">CS</label>
                                <p class="help-block text-danger">Type</p>
                            </div>
                            <div class="control-group">
                                <input type="radio" class="form-control" id="subject" placeholder="book type" required="required" data-validation-required-message="Please enter Student Email" name="type" value=" literature" />
                                <label for="javascript">literature</label>
                                <p class="help-block text-danger">Type</p>
                            </div>

                            <div class="control-group">
                                <input type="radio" class="form-control" id="subject" placeholder="book type" required="required" data-validation-required-message="Please enter Student Email" name="type" value=" Drama" />
                                <label for="javascript">Drama</label>
                                <p class="help-block text-danger">Type</p>
                            </div>



                          
                        <div class="control-group">
                           <input class="form-control" placeholder="Photo" type="file" name="IMG">                          
                        </div>


                            <div>
                                <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton"> Add </button>
                            </div>
                        </form>
                    </div>
                </div>
            
            </div>
        </div>
    </div>


<?php
include_once("footer.php");
?>

           


