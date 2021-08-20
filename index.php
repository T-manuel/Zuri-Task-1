<?php
$telephone = getenv("phone");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "index.css">
    <title> My Resumé </title>

</head>

<body>

    <main id = mainDiv>

        <div class = "nameDiv">
            <hr class = "hr"/>
            <div class = "maincontainer">
                <div class = "name">
                    <h5 id = "surname"> Okewole </h5>
                    <h2 id = "firstName"> Emmanuel </h2>
                </div>

                <div class = "imgcontainer">
                    <img src ="image/IMG_20210226_125431.jpg" alt="manu" class = "manu">
                </div>
            </div>
            <hr class = "hr secondhr"/>
        </div>

        <!-- contact and profile -->
        <div class="candp">

            <div class="container Contact">
                <h3 class = "head contact"> Contact </h3>
                <hr class = "thirdhr"/>
                <ul>
                    <li>
                        <img src = "svg/slack-24.svg" alt = "slack" class = "icon"/> 
                        <span  class = "contactLinks"> T_manuel </span>
                    </li>

                    <li>
                        <img src = "svg/mail.svg" alt = "gmail" class = "icon"/> 
                        <a href = "mailto:etolakunle@gmail.com" class = "contactLinks"> etolakunle@gmail.com  </a>
                    </li>

                    <li>
                        <img src = "svg/telephone.svg" alt = "telephone" class = "icon"/>
                        <a href = "tel:<?php $telephone ?>" class = "contactLinks"> click-to-call </a>
                    </li>
                </ul>
            </div>
            
            <div class="container Profile">
                <h3 class = "head profile"> Profile </h3>
                <hr class = "thirdhr"/>
                <h6 class = "profileTexts"> 
                    I am a frontend Developer, with experience in HTML, CSS, JavaScript,
                    I intern at <a href = "https://internship.zuri.team/" target = "_blank"> Zuri </a> x HNGi8.
                    <br />
                    I am passionte about learning and I am huhgly motivated to work and solve problems.
                </h6>
            </div>

        </div>
    </main> 

    <main id = "secondMain">
        <!-- skills and hobbies -->
        <div class="sandh">
            <div class="skillsDiv">
                <h3 class = "head Skill"> Skills </h3>
                <hr class = "thirdhr"/>
                <div class="skills one">  
                    <progress class = "ProgressBar" value = "90" max = "100"> </progress>
                    <h6 class="skill-item"> HTML </h6> 
                </div>
                <div class="skills two">  
                    <progress class = "ProgressBar" value = "90" max = "100"> </progress>
                    <h6 class="skill-item"> CSS </h6> 
                </div>
                <div class="skills three">
                    <progress class = "ProgressBar" value = "70" max = "100"> </progress>
                    <h6 class="skill-item"> Javascript </h6> 
                </div>
                <div class="skills four">
                    <progress class = "ProgressBar" value = "80" max = "100"> </progress>
                    <h6 class="skill-item"> Problem Solving </h6> 
                </div>
                <div class="skills five">
                    <progress class = "ProgressBar" value ="60" 50 max = "100"> </progress>
                    <h6 class="skill-item"> Figma </h6> 
                </div>
                <div class="skills six">
                    <progress class = "ProgressBar" value ="90" 50 max = "100"> </progress>
                    <h6 class="skill-item"> Teamwork </h6> 
                </div>
            </div>

            <!-- HOBBIES -->
            <div class = HobbyContainer>
                <h3 class = "head Hobbies"> Hobbies </h3>
                <hr class = "thirdhr"/>
                <ul>
                    <li> reading</li>
                    <li> playing football</li>
                    <li> learning </li>
                    <li> listening to music </li>
                </ul>
            </div>
        </div>

    </main>
    
    <section class = "internShipCoy">
        <a href = "https://internship.zuri.team/" target = "_blank"> 
            <img src = "svg/zuri.svg" alt = "zuri logo" class = "zuri" > 
        </a>  
         
        <a href = "https://internship.zuri.team/" target = "_blank">
            <img src = "image/hng.png" alt = "hng logo" class = "hng" >  
        </a>
    </section>

    <footer>
        <h6 id = "footerText"> </h6>
    </footer>

    <script src = "index.js"> </script> 
</body>
</html>