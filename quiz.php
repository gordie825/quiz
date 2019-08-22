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
  <!-- <link href="css/style.css" rel="stylesheet" > -->
  <link href="css/styles.css" rel="stylesheet" type="text/css">
  <!-- <link href="css/pagination.css" rel="stylesheet" type="text/css"> -->

  <!-- Responsive css -->
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <title>INFORMATION TECHNOLOGY QUIZ</title>
    
    
</head>
<body>
 <!-- start section header -->
 <div id="header" class="home">

<div class="container">
  <div class="header-content">
    <h1>WELCOME TO  <span class="typed"></span></h1>
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


<!-- Template Main Javascript File -->
<script src="js/main.js"></script>

<?php 

$Questions = array(
    1 => array(
        'Question' => '1. Who programmed the first computer game "Spacewar!" in 1962 ?',
        'Answers' => array(
            'A' => 'Steave Russell',
            'B' => 'Konard Zuse',
            'C' => 'Alan Emtage',
            'D' => 'Tim Berners-Lee'
        ),
        'CorrectAnswer' => 'A'
    ),
    2 => array(
        'Question' => '2. Who is known as the father of supercomputing?',
        'Answers' => array(
            'A' => 'David J. Brown',
            'B' => 'Gene Amdahl',
            'C' => 'Adam Dunkels',
            'D' => 'Seymour Cray'
        ),
        'CorrectAnswer' => 'D'
    ),

    3 => array(
        'Question' => '3. Who created the C programming Language ?',
        'Answers' => array(
            'A' => 'Ken Thompson',
            'B' => 'Dennis Ritchie',
            'C' => 'Robin Milner',
            'D' => 'Frieder Nake'
        ),
        'CorrectAnswer' => 'B'
    ),

    4 => array(
        'Question' => '4. When was NASSCOM (National Association of Software and Services Companies) established',
        'Answers' => array(
            'A' => '1988',
            'B' => '1997',
            'C' => '1993',
            'D' => '1882'
        ),
        'CorrectAnswer' => 'A'
    ),

    5 => array(
        'Question' => '5. Who is known as the father of internet',
        'Answers' => array(
            'A' => 'Alan Perlis',
            'B' => 'Jean E. Sammet',
            'C' => 'Vint Cerf',
            'D' => 'Steve Lawrence'
        ),
        'CorrectAnswer' => 'C'
    ),

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

    11 => array(
        'Question' => '11. Which one is volatile memory in a computer system',
        'Answers' => array(
            'A' => 'HardDisk',
            'B' => 'RAM',
            'C' => 'ROM',
            'D' => 'Optical Drive'
        ),
        'CorrectAnswer' => 'B'
    ),

    12 => array(
        'Question' => '12. One Terabyte (1 TB) is equal to ',
        'Answers' => array(
            'A' => '1028GB',
            'B' => '1012GB',
            'C' => '1000GB',
            'D' => '1024GB'
        ),
        'CorrectAnswer' => 'D'
    ),

    13 => array(
        'Question' => '13. Who first developed QWERTY keyboard used in computers and phones',
        'Answers' => array(
            'A' => 'Raphael Finkel',
            'B' => 'Wim Ebbinkhuijsen',
            'C' => 'Shafi Goldwasser',
            'D' => 'Christopher Latham Sholes'
        ),
        'CorrectAnswer' => 'D'
    ),

    14 => array(
        'Question' => '14. Which operating system is developed and used by Apple Inc',
        'Answers' => array(
            'A' => 'Windows',
            'B' => 'Android',
            'C' => 'iOS',
            'D' => 'UNIX'
        ),
        'CorrectAnswer' => 'C'
    ),

    15 => array(
        'Question' => '15. Linus Torvalds develop which operating system',
        'Answers' => array(
            'A' => 'Windows',
            'B' => 'Mac OS',
            'C' => 'UNIX',
            'D' => 'Linux'
        ),
        'CorrectAnswer' => 'D'
    ),


    16 => array(
        'Question' => '16. Which one is the first search engine in internet',
        'Answers' => array(
            'A' => 'Google',
            'B' => 'Archie',
            'C' => 'Altavista',
            'D' => 'WAIS'
        ),
        'CorrectAnswer' => 'B'
    ),
   
    17 => array(
        'Question' => '17. Number of bit used by the IPv6 address ',
        'Answers' => array(
            'A' => '32 bit',
            'B' => '64 bit',
            'C' => '128 bit',
            'D' => '256 bit'
        ),
        'CorrectAnswer' => 'C'
    ),
   
    18 => array(
        'Question' => '18. Which one is the first web browser invented in 1990',
        'Answers' => array(
            'A' => 'Internet Explorer',
            'B' => 'Mosaic',
            'C' => 'Mozilla',
            'D' => 'Nexus'
        ),
        'CorrectAnswer' => 'D'
    ),
   
    19 => array(
        'Question' => '19. Which of the following programming language is used to create programs like applets? ',
        'Answers' => array(
            'A' => 'COBOL',
            'B' => 'LANGUAGE',
            'C' => 'JAVA',
            'D' => 'BASIC'
        ),
        'CorrectAnswer' => 'C'
    ),
   
    20 => array(
        'Question' => '20. First computer virus is known as ',
        'Answers' => array(
            'A' => 'Rabbit',
            'B' => 'Creeper Virus',
            'C' => 'Elk Cloner',
            'D' => 'SCA Virus'
        ),
        'CorrectAnswer' => 'B'
    ),

);
$videoName;
if (isset($_POST['answers'])){
    $Answers = $_POST['answers']; // Get submitted answers.

    // Now this is fun, automated question checking! ;)

    foreach ($Questions as $QuestionNo => $Value){
        // Echo the question
        echo "<h2>$Value[Question]</h2>";

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
                                $results = "<h2>Your score: $counter/20</h2>"; 
                                }
                                else 
                                { 
                                $results = "<h2>Your score: $counter/20</h2>"; 
                                }
            }                           echo $results;
            echo '<br /><hr>'; 
             if ($counter < 10){
                    echo "<h2>You failed &#x1F602 &#x1F602 &#x1F602</h2>";
                    echo '<br /><hr>'; 
                    echo "<video width='100%' height='240' controls>";
                    echo "<source src='images/failed.mp4'>failed.mp4 type='video/mp4'>";
                    echo "</video>";    
                    echo ""; 
                    echo "<br>"; 
                } else {
                    echo "<h2>Well Done &#128521 &#128521 &#128521</h2>";
                    echo '<br /><hr>'; 
                    echo "<video width='100%' height='240' controls>";
                    echo "<source src='images/passed.mp4'>passed.mp4 type='video/mp4'>";
                    echo "</video>";    
                    echo ""; 
                    echo "<br>"; 
                }
} else {  
?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="quiz">
    <?php foreach ($Questions as $QuestionNo => $Value){ ?>

        <h4><?php echo $Value['Question']; ?></h4>
        <?php 
            foreach ($Value['Answers'] as $Letter => $Answer){ 
            $Label = 'question-'.$QuestionNo.'-answers-'.$Letter;
            echo '<br /><hr>'; 
        ?>
        <div> 
            <h3>
                <input type="radio" name="answers[<?php echo $QuestionNo; ?>]" id="<?php echo $Label; ?>" value="<?php echo $Letter; ?>" />
            <label for="<?php echo $Label; ?>"><?php echo $Letter; ?>) <?php echo $Answer; ?> </label>
            </h3>
        </div>
        <?php } ?>

    <?php }echo '<br />';  ?>
    <input type="submit" class="button" value="Submit Quiz" />
    </form>
<?php 
}
?>

</body>
</html>