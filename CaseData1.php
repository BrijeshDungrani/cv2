<?php
if(!isset($_SESSION)) 
{ 
session_start();
if(!isset($_SESSION["uname"])&&!isset($_SESSION["password"]))
{
  header("location: logout.php");
 die();
}
}
  
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Daily's cases</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
            crossorigin="anonymous" />
        <link rel="stylesheet" href="style.css"  type="text/css" />
        <link rel="stylesheet" href="reset.css"  type="text/css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
            crossorigin="anonymous"></script>
    </head>
    <body>

    <?php include('header.php'); ?>
                    
    <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-6">
            <!-- Default form contact -->
            <form class="text-center border border-light p-5" action="caseData.php" method="post">

                <p class="h4 mb-4">Regional Covid Cases</p>
                
                
                <input type="number" name="TodTotCon" class="form-control mb-4" placeholder="Today's Total Cases">
                <input type="number" name="TodTotRec" class="form-control mb-4" placeholder="Today's Total Recovery">
                <input type="number" name="TodTotDea" class="form-control mb-4" placeholder="Today's Total Death">


            

                <!-- Send button -->
                <button class="btn btn-info btn-block" type="submit">Submit</button>

            </form>
            <!-- Default form contact -->
        </div>
        <div class="col-md-3">

        </div>
    </div>
</body>

</html>