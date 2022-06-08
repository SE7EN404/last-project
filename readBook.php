<?php
session_start();
if( $_SESSION["Email"]!="libr"&&$_SESSION["Email"]!="student")
{
   header("location:login_Form.php");
}
include_once("header.php");
?>



<div class="container-fluid pt-5 pb-3">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Our Library</span></p>
                <h1 class="mb-4">BOOKS</h1>
            </div>

            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn btn-outline-primary m-1 active"  data-filter="*">All</li>
                        <li class="btn btn-outline-primary m-1" data-filter=".first">literature </li>
                        <li class="btn btn-outline-primary m-1" data-filter=".second">CS</li>
                        <li class="btn btn-outline-primary m-1" data-filter=".third">Reading</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">
<?php
include_once("book.php");
$book=new book();
$array=[];
$array=$book->listAll();
for($i=0;$i<count($array);$i++)
{
?>
            
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="<?php echo $array[$i]->img ?>"alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/portfolio-1.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 20px;"><?php echo $array[$i]->name ?></i>
                            </a>
                        </div>
                    </div>
                </div>

<?php
}
?>
            </div>
        </div>
    </div>

<?php
include_once("footer.php");
?>

           

