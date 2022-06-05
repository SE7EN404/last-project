<?php
session_start();
if( $_SESSION["Email"]!="Admin")
{
   header("location:login_Form.php");
}
include_once("header.php");
?>
 <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Welcome</span></p>
                <h1 class="mb-4">Add Student</h1>
            </div>
            <div class="row">
                <div class="col-lg-7 mb-5">
                    <div class="contact-form">
                        <div id="success"></div>


                        <form name="sentMessage" id="contactForm" novalidate="novalidate" action="ADD_student_contorl.php" method="post" >
                            
                        
                             <div class="control-group">
                                <input type="text" class="form-control" id="name" placeholder="Student Name" required="required" data-validation-required-message="Please enter Student Name" name="Name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" id="subject" placeholder="Student Email" required="required" data-validation-required-message="Please enter Student Email" name="Email" />
                                <p class="help-block text-danger"></p>
                            </div>

                            <div class="control-group">
                                <input type="text" class="form-control" id="subject" placeholder="Student password" required="required" data-validation-required-message="Please enter Student Password"  name="Password"/>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="subject" placeholder="Student religion" required="required" data-validation-required-message="Please enter Student religion" name="Religion" />
                                <p class="help-block text-danger"></p>
                            </div>

                            <div class="control-group">
                                <input type="text" class="form-control" id="subject" placeholder="Student CLASS Name" required="required" data-validation-required-message="Please enter Student className"name="ClassName" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="subject" placeholder="Student Level" required="required" data-validation-required-message="Please enter Student Level"name="Level" />
                                <p class="help-block text-danger"></p>
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