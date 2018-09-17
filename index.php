<?php
    require 'functions.php'
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset = "utf-8">
        <title></title>
        <link rel="stylesheet" href="stylee.css">
        <script type="text/javascript" src ="scripts/slide.js"></script>
    </head>
    <body>
        <p class="manifeste" onclick="issou()">Manifeste</p>
        <div class="page_sizer" id="page_sizer">
            <div class="contact_text" id="contactText">Susam fuga. Nam volore, est exces trumqui tecus. Quibusaest id qui deliqui te posae. Itatur, cus alit que con eate perum, que nos seque pre sit aribus audae evender emquiat aut unte el eum im idi nobist qui atur,
o ci aspellabore num sinum nos quidus, tquaeped ut quo omnisi iunti dipsunt Ectibusdaeped quia nos porposs edioreium nonsendem enti nihilit iaeperi tiissint quis sunt ulparci dit restotae.</div>
            <div class="main_logo_container" id="mainWrapper">
					<div class="click_info" id="info1">
							<button onclick="handleCloseInfo('1')" ></button>
							<ul>
								<li>Narsico Rodriguez<br /><em>Campagne</em></li>
								<li>Dom Perignon<br /><em>Brand Content</em></li>
								<li>Perrier Jouet<br /><em>Campagne digitale</em></li>
								<li>Nom du projet<br /><em>Films</em></li>
								<li>Narsico Rodriguez<br /><em>Campagne</em></li>
								<li>M.A.C<br /><em>Campagne Print</em></li>
							</ul>
						</div>
                        <img src="./assets/white_logo.svg" class="white_logo" id="whiteLogo"/>
                        <div class="black_logo_inactive" id="blackLogo"> </div>
                        <div class="black_background_contact"  id="blackContactBackground" style="transform: scaleY(0);"> </div>
                        <div class="slider_container" id="slider" style="left: 1300px;">
                    
                    <?php foreach (get_project() as $div => $project) {
                        echo '<div id="img_container'.($div+1).'" class="img_container">';
                        foreach (get_files_path($project) as $key => $value) {
                                if ($key == 0) {
                                    if (pathinfo($value, PATHINFO_EXTENSION) === 'mp4' || pathinfo($value, PATHINFO_EXTENSION) === 'flv' || pathinfo($value, PATHINFO_EXTENSION) === 'mov')
                                        echo '<div id="img'.($div+1).'" class="img img'.($div+1).'" style="overflow: hidden; width:970px; margin-top:30px;">
                                            <video controls  poster="'.preg_replace("/.mp4|.flv|.mov/", "-thumbnail.png", $value).'" style="width: 970px;">
                                                <source src="'.$value.'" type="video/'.pathinfo($value, PATHINFO_EXTENSION).'">
                                                    Your browser does not support the video tag or the file format of this video.
                                                </video>
                                            </div><br />';
                                    else
                                        echo '<img src="'.$value .'" id="img'.($div+1).'" class="img img'.($div+1).'"/> <br />';
                                } else if ($key == count(get_files_path($project))) {
                                    break;
                                } else {
                                    if (pathinfo($value, PATHINFO_EXTENSION) === 'mp4' || pathinfo($value, PATHINFO_EXTENSION) === 'flv' || pathinfo($value, PATHINFO_EXTENSION) === 'mov')
                                    echo '<div id="img'.($div+1).'-'.$key.'" class="img img'.($div+1).' secondaryImg" style="overflow: hidden; width:970px; margin-top:30px;">
                                        <video controls  poster="'.preg_replace("/.mp4|.flv|.mov/", "-thumbnail.png", $value).'" style="width: 970px;">
                                            <source src="'.$value.'" type="video/'.pathinfo($value, PATHINFO_EXTENSION).'">
                                                Your browser does not support the video tag or the file format of this video.
                                            </video>
                                        </div><br />';
                                    else if (pathinfo($value, PATHINFO_EXTENSION) === 'txt') {
                                        echo '<div class="img img'.($div+1).' secondaryImg projectDiv" id="img'.($div+1).'-'.$key.'">
                                        <ul>
                                            '.get_text($project).'
                                        </ul>
                                        </div>';
                                    }
                                    else
                                        echo '<img src="'.$value .'" id="img'.($div+1).'-'.$key.'" class="img img'.($div+1).' secondaryImg"/> <br />';
                                }
                            }
                            echo '</div>';
                    }?>
                </div>
            </div>
            <div class="project_infos"><span id="projectInfos">Projet</span></div>
            <div class="contact_link" onclick="DoubleIssou()">Contact</div>
            <div class="bottom_contact_text" id="bottomContactText">
                <ul>
                    <li>Nicolas Tzipine</li>
                    <li class="contact-tel">00 00 00 00 00</li>
                    <li class="contact-mail">nicolastzipine.cowboysfilm.com</li>
                    <li class="contact-address">0, rue Emile Allez<br />00000 Paris</li>
                </ul>
                <ul>
                    <li>Nicolas Tzipine</li>
                    <li class="contact-tel">00 00 00 00 00</li>
                    <li class="contact-mail">nicolastzipine.cowboysfilm.com</li>
                    <li class="contact-address">0, rue Emile Allez<br />00000 Paris</li>
                </ul>
            </div>
        </div>
                </div>
    </body>
    <script>
        const widthResize = window.innerWidth / 1200;
        const heightResize = window.innerHeight / 800;
        const sizer = document.getElementById('page_sizer')

        sizer.style.transform = `scale(${widthResize < heightResize ? widthResize : heightResize})`;
        if (widthResize > heightResize) {
            sizer.style.marginLeft=`${(widthResize - heightResize) * 630}px`
        } else sizer.style.marginLeft=`0px`;

        if(window.attachEvent) {
            window.attachEvent('onresize', function() {
                const widthResize = window.innerWidth / 1200;
                const heightResize = window.innerHeight / 800;
                sizer.style.transform = `scale(${widthResize < heightResize ? widthResize : heightResize})`;
                if (widthResize > heightResize) {
                    sizer.style.marginLeft=`${(widthResize - heightResize) * 630}px`
                } else sizer.style.marginLeft=`0px`;
            });
        }
        else if(window.addEventListener) {
            window.addEventListener('resize', function() {
                const widthResize = window.innerWidth / 1200;
                const heightResize = window.innerHeight / 800;
                sizer.style.transform = `scale(${widthResize < heightResize ? widthResize : heightResize})`;
                if (widthResize > heightResize) {
                    sizer.style.marginLeft=`${(widthResize - heightResize) * 630}px`
                } else sizer.style.marginLeft=`0px`;
            }, true);
        }
    </script>
    <script type="text/javascript" src="scripts/imgHorizontalSlider.js"> </script>
    <script type="text/javascript" src="scripts/imgVerticalSlider.js"> </script>
    <script type="text/javascript" src="scripts/onClickDescriptive.js"> </script>
    <script type="text/javascript" src="scripts/contactAnimation.js"> </script>
    <script type="text/javascript" src="scripts/additionalInfos.js"> </script>
    <script type="text/javascript" src="scripts/contactAnimationVerticalSlide.js"> </script>
</html>
