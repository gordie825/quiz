<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/hover/hover.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/pagination.css" rel="stylesheet" type="text/css">

  <!-- Responsive css -->
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <title>INFORMATION TECHNOLOGY QUIZ</title>

    <style>
#header{
    /* The image used */
      background-image: url("images/pexels-photo-51415.jpeg");
      height: 100vh;
      width: 100%;
  }

  body{
    background-image: url("images/wide.jpg");
  }
</style>
</head>
<body>
 <!-- start section header -->
 <div id="header" class="home">

<div class="container">
  <div class="header-content">
    <h1>PART TWO OF  <span class="typed"></span></h1>
    <p> INFORMATION TECHNOLOGY QUIZ</p>

    <ul class="list-unstyled list-social">
      <li><a href="https://www.facebook.com/sibabalo.cokile?ref=bookmarks"><i class="ion-social-facebook"></i></a></li>
      <li><a href="https://twitter.com/Gordie_DMF"><i class="ion-social-twitter"></i></a></li>
      <li><a href="https://www.instagram.com/gordie_dmf/?hl=en"><i class="ion-social-instagram"></i></a></li>
      <li><a href="gordie825@gmail.com"><i class="ion-social-googleplus"></i></a></li>
      
    </ul>
  </div>
</div>
</div>
<!-- End section header -->




<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/typed/typed.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/magnific-popup/magnific-popup.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>

<!-- Contact Form JavaScript File -->
<script src="contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="js/main.js"></script>

<?php 

$Questions = array(

    6 => array(
        'Question' => '6. Which one is the first high level programming language',
        'Answers' => array(
            'A' => 'C',
            'B' => 'COBOL',
            'C' => 'FORTAN',
            'D' => 'C++'
        ),
        'CorrectAnswer' => 'C'
    ),
    
    7 => array(
        'Question' => '7. Which one is the first word processor application',
        'Answers' => array(
            'A' => 'MS WORD',
            'B' => 'APPLE i WORK',
            'C' => 'SUN STAROFFICE',
            'D' => 'WORDSTAR'
        ),
        'CorrectAnswer' => 'D'
    ),
    
    8 => array(
        'Question' => '8. Which one is the current fastest Supercomputer in India',
        'Answers' => array(
            'A' => 'AADITYA',
            'B' => 'SAGA-220',
            'C' => 'SAHASRAT',
            'D' => 'HP APOLLO 6000'
        ),
        'CorrectAnswer' => 'C'
    ),
    
    9 => array(
        'Question' => '9. India"s first Super Computer PARAM 8000 was installed in',
        'Answers' => array(
            'A' => '1988',
            'B' => '1991',
            'C' => '1995',
            'D' => '1982'
        ),
        'CorrectAnswer' => 'B'
    ),
    
    10 => array(
        'Question' => '10. Who developed Java Programming Language',
        'Answers' => array(
            'A' => 'James Gosling',
            'B' => 'Douglas Engelbhart',
            'C' => 'Edmund M. Clarke',
            'D' => 'James D. Foley'
        ),
        'CorrectAnswer' => 'A'
    ),
    
    
    );
if (isset($_POST['answers'])){
    $Answers = $_POST['answers']; // Get submitted answers.

    // Now this is fun, automated question checking! ;)

    foreach ($Questions as $QuestionNo => $Value){
        // Echo the question
        echo $Value[Question];

        if ($Answers[$QuestionNo] != $Value['CorrectAnswer']){
             echo '<h3>You answered: <span style="color: red;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span><br></h3>' ; // Replace style with a class
             echo '<h3>Correct answer: <span style="color: green;">'.$Value['Answers'][$Value['CorrectAnswer']].'</span></h3>' ;
        } else {
            echo '<h3>Correct answer: <span style="color: green;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span><br></h3>' ; // Replace style with a class
            echo '<h3>You are correct: <span style="color: green;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span></h3>' ; $counter++;

        }

        echo '<br /><hr>'; 
                                if ($counter=="") 
                                { 
                                $counter='0';
                                $results = "Your score: $counter/20"; 
                                }
                                else 
                                { 
                                $results = "Your score: $counter/20"; 
                                }
            }                           echo $results;
} else {  
?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="quiz">
    <?php foreach ($Questions as $QuestionNo => $Value){ ?>

        <h3><?php echo $Value['Question']; ?></h3>
        <?php 
            foreach ($Value['Answers'] as $Letter => $Answer){ 
            $Label = 'question-'.$QuestionNo.'-answers-'.$Letter;
            echo '<br /><hr>'; 
        ?>
        <div>
            <input type="radio" name="answers[<?php echo $QuestionNo; ?>]" id="<?php echo $Label; ?>" value="<?php echo $Letter; ?>" />
            <label for="<?php echo $Label; ?>"><?php echo $Letter; ?>) <?php echo $Answer; ?> </label>
            
        </div>
        <?php } ?>

    <?php } ?>
    
    </form>
<?php 
}
?>
<div class="next">
    <div class="container">
        
            <div class="pagination">

<a href="quiz.php"  id="one">1</a>
<a href="second.php" class="active2"  id="two">2</a>
<a href="third.php"  id="three">3</a>
<a href="fourth.php" id="four">4</a>

<a href="#"><i class="fa fa-angle-right" id="right"></i></a>
</div>
            </div>
        </div>
    </div>
</div>
</body>
</html>