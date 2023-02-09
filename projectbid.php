<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
    include_once 'header.php';
    require 'include/dbh.inc.php';
    // $connection= msqli_connect('localhost', 'root','','submittedbids');
    $msg="";

    if(isset($_POST['submit'])){
        $org_name = $_POST['org_name'];
        $org_rep = $_POST['org_rep'];
        $rep_email = $_POST['rep_email'];
        $serv_drd = $_POST['serv_drd'];
        //$drphoto=$_FILES['file']['name'];
        $doc= $_FILES['file']['name'];
        //image Upload
    
       move_uploaded_file($_FILES['file']['tmp_name'],"uploads/".$_FILES['file']['name']); 
        $res=false;
        $insert_query="INSERT INTO `bids`(`bid_id`, `org_name`,`org_rep`,`rep_email`, `serv_drd`,`doc`) 
        VALUES ('','$org_name','$org_rep','$rep_email','$serv_drd','$doc')";
      $res= mysqli_query($conn,$insert_query);

        if($res==true){
            $msg= "<script type='text/javascript'>alert('BID  SUCCESSFULLY SUBMITTED!!')</script>";
        }
        else{
            die('unsuccessful' .mysqli_error($connection));
        }
       
    }
    
        
       
   

?> 

<!--Subheader area - only for certain pages -->
            <div id="Subheader">
                <div class="container">
                    <div class="column one">
                        <h1 class="title">PROJECT BIDDING</h1>
                    </div>
                </div>
            </div>
        </div>
<?php echo $msg ?>
            <main>
                <div class="myforms">
                    <div class="column one"><h3 class="title">Submit your bid here</h></div>
                    <section class="main_bid">

                        <div class="clearfix" style="padding: 40px 40% 40px; background : linear-gradient(rgba(0, 0, 0, 0.70),
        rgba(0, 0, 0, 0.70)), url(img/construction-1.webp);">
                        

                        <form class="forms" method="post" enctype="multipart/form-data">
                            <input type="text" name="org_name" placeholder="Name of organization" required>
                            <input type="text" name="org_rep" placeholder="Organization's representative" required>
                            <input type="email" name="rep_email" placeholder="Representative's email" required>

                            <select name="serv_drd" id="servis" required>
                                <option value="">-Select desired service-</option>
                                <option value="Turnkey project">Turnkey project</option>
                                <option value="New construction">New construction</option>
                                <option value="Interior fit-outs">Interior fit-outs</option>
                                <option value="Remodels and rennovations">Remodels and rennovations</option>
                                <option value="Take over projects">Take over projects</option>
                                <option value="Site improvements">Site improvements</option>
                            </select>

                            <input type="file" name="file" class="form-control" accept="." title="Upload relevant document" required/>
                            <button type="submit" name="submit">SUBMIT BID</button>
                        </form>

                    </div>

                      <footer id="Footer" class="clearfix">
            <!-- Footer copyright-->
            <div class="footer_copy">
                <div class="container">
                    <div class="column one">
                        <!--<div class="copyright">
                            &copy; 2017 BeConstructor - BeTheme. Muffin group - HTML by <a target="_blank" rel="nofollow" href="http://bit.ly/1M6lijQ">BeantownThemes</a>
                        </div>-->
                        <!--Social info area-->
                        
                    </div>
                </div>
            </div>
        </footer>   
                        
                    </section>
                </div>


            </main>

<?php

    include_once 'footer.php';

?>