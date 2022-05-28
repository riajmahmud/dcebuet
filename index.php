<!DOCTYPE html>
<html><head><meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/common.css">
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<link rel="stylesheet" type="text/css" href="css/fontello.css">
<link rel="icon" href="res/favicon9.ico" sizes="64x64" type="image/png">

<style>

</style>


</head>
<body>
    <?php include 'module_header.php';?>
    <?php include 'module_navigation.php';?>
    <div class="main-container">







        


        <div class="main">
            <div class="col-1">

                <!--
                <div class="banner">
                    <img class="banner-img" src="res/banner.jpg"/> 




                </div>

            -->



            
            <div class="slideshow-box">
                <div class="slideshow-image">
                    <img class="slideshow-img" src="" id="slide_img" />
                    <div class="slideshow-dot">
                        o o o o o
                    </div>
                    <div class="slideshow-serial" id="slideshow_serial">
                    </div>
                </div>
                <div class="slideshow-caption" id="slide_cap">
                
                </div>
            </div>
            <script>
    
                var data = [
                                ["7_0939.jpg","Teachers' Appreciation Workshop 2022"],
                                ["8_1034.jpg","Teachers' Appreciation Workshop 2022"],
                                ["12_1947.jpg","Teachers' Appreciation Workshop 2022"],
                                ["6_0823.jpg","Teachers' Appreciation Workshop 2022"],
                                ["9_1433.jpg","Teachers' Appreciation Workshop 2022"],
                                ["10_1943.jpg","Teachers' Appreciation Workshop 2022"],
                                ["1.jpg","Awarding presenter by director."],
                                ["2.jpg","VC Sir attends prize giving ceremony."],
                                ["3.jpg","Certificate distribution by VC Sir."],
                                ["4.jpg","Speech by VC Sir"],
                                ["5.jpg","VC Sir is observing presentations."]
                            ];
    
                console.log(data[0][1]);
                console.log(data.length);
    
                var target = document.getElementById("slide_img");
                target.src = "res/static/" + data[0][0];
    
                var caption = document.getElementById("slide_cap");
                caption.innerHTML = data[0][1];

                var serial  = document.getElementById("slideshow_serial");
                serial.innerHTML = "1/" + data.length;
                var count = 1;
    
                function changeSlide()
                {
                    count += 1;
                    
                    if(count>data.length){count = 1;}
                    console.log(count);
                   // 
                    console.log("okay");
                    serial.innerHTML = count + "/" + data.length;
                    target.src = "res/static/" + data[count-1][0];
                    var caption = document.getElementById("slide_cap");
                    caption.innerHTML = data[count-1][1];
    
                }
    
    
                setInterval(changeSlide, 5000);
    
    
            </script>





                <div class="about">
                    <div class="section-title icon-info">About DCE</div>
                    <div class="about-txt">
                        Learning never ends and betterment of life depends on the adaptation of new discovery, knowledge and skill. The Directorate of Continuing Education (DCE) in Bangladesh University of Engineering and Technology (BUET) has been established in view of long demand for continuous professional development (CPD) of the engineers in Bangladesh to adopt with the intense global development of Science, Technology and Engineering. This directorate was introduced in early 1995. The objective of the DCE is to assist the development, upgradation and renewal of knowledge, understanding and skill development.
                    </div>
                </div>

                
                <div class="message">
                    <div class="section-title icon-mail">Message from Honorable Vice Chancellor</div>
                    
                    <div class="message-txt">
                    <img class="small-profile-img" src="res/vc_sir.jpg"/>
                        Learning never ends and betterment of life depends on the adaptation of new discovery, knowledge and skill. The Directorate of Continuing Education (DCE) in Bangladesh University of Engineering and Technology (BUET) has been established in view of long demand for continuous professional development (CPD) of the engineers in Bangladesh to adopt with the intense global development of Science, Technology and Engineering. This directorate was introduced in early 1995. The objective of the DCE is to assist the development, upgradation and renewal of knowledge, understanding and skill development. Learning never ends and betterment of life depends on the adaptation of new discovery, knowledge and skill. The Directorate of Continuing Education (DCE) in Bangladesh University of Engineering and Technology (BUET) has been established in view of long demand for continuous professional development (CPD) of the engineers in Bangladesh to adopt with the intense global development of Science, Technology and Engineering. This directorate was introduced in early 1995. The objective of the DCE is to assist the development, upgradation and renewal of knowledge, understanding and skill development.
                    <div class="clearfix"></div>
                    </div>
                </div>
            
                <?php /* include 'module_recent_news.php'; */ ?>
                <div class="mission">
                <div class="section-title icon-mail">Mission of BUET DCE</div>
                    <div class="about-txt">
                        Learning never ends and betterment of life depends on the adaptation of new discovery, knowledge and skill. The Directorate of Continuing Education (DCE) in Bangladesh University of Engineering and Technology (BUET) has been established in view of long demand for continuous professional development (CPD) of the engineers in Bangladesh to adopt with the intense global development of Science, Technology and Engineering. This directorate was introduced in early 1995. The objective of the DCE is to assist the development, upgradation and renewal of knowledge, understanding and skill development.
                    </div>
                </div>

                <div class="vision">
                <div class="section-title icon-mail">Vision of BUET DCE</div>
                    <div class="about-txt">
                        Learning never ends and betterment of life depends on the adaptation of new discovery, knowledge and skill. The Directorate of Continuing Education (DCE) in Bangladesh University of Engineering and Technology (BUET) has been established in view of long demand for continuous professional development (CPD) of the engineers in Bangladesh to adopt with the intense global development of Science, Technology and Engineering. This directorate was introduced in early 1995. The objective of the DCE is to assist the development, upgradation and renewal of knowledge, understanding and skill development.
                    </div>
                </div>



            </div>
            <div class="col-2">
                <?php include 'module_upcoming_events.php';?>

                <?php /* include 'notice_board.php';   */ ?>
            </div>
        </div>
    </div>
    <?php include 'module_footer.php';?>


</body>
</html>