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
                            <div id="img_container1" class="img_container">
                        <img src="./assets/DAPHINE/page1.jpg" id="img1" class="img img1" onclick="handleOpenInfo('1')"/><br />
                        <img src="./assets/DAPHINE/page1-1.jpg" id="img1-1" class="img img1 secondaryImg" onclick="handleOpenInfo('1-1')"/><br />
                        <img src="./assets/DAPHINE/page1-2.jpg" id="img1-2" class="img img1 secondaryImg" onclick="handleOpenInfo('1-2')"/><br />
                        <img src="./assets/DAPHINE/page1-3.jpg" id="img1-3" class="img img1 secondaryImg" onclick="handleOpenInfo('1-3')"/><br />
                        <img src="./assets/DAPHINE/page1-4.jpg" id="img1-4" class="img img1 secondaryImg" onclick="handleOpenInfo('1-4')"/><br />
                        <img src="./assets/DAPHINE/page1-5.jpg" id="img1-5" class="img img1 secondaryImg" onclick="handleOpenInfo('1-5')"/><br />
                        <img src="./assets/DAPHINE/page1-6.jpg" id="img1-6" class="img img1 secondaryImg" onclick="handleOpenInfo('1-6')"/><br />
                        <img src="./assets/DAPHINE/page1-7.jpg" id="img1-7" class="img img1 secondaryImg" onclick="handleOpenInfo('1-7')"/><br />
                        <div class="img img1 secondaryImg projectDiv" id="img1-8">
                            <ul>
                                <li>Nom du projet<br /><em>Campaign Daphine SS18</em></li>
								<li>Direction Artistique<br /><em>Juliette Abitbole</em></li>
								<li>Equipe<br /><em>Edouard Sanville, photograph</em><br /><em>Juliette Abitbol, photograph</em><br /><em>Anne Chevrel, set design</em><br /><em>Isabelle Guyon, make up artist</em></li>
								<li><em>03-04 Mai 2018, Paris</em></li>
							</ul>
						</div>
                    </div>
                    <div id="img_container2" class="img_container">
                        <div id="img2" class="img img2" style="overflow: hidden; width:970px; margin-top:30px;">
                            <video controls  poster="./assets/MUGLER/page2_poster.png" style="width: 970px;">
                                <source src="./assets/MUGLER/page2.mp4" type="video/mp4">
                                    Your browser does not support the video tag or the file format of this video.
                                </video>
                            </div><br />
                            <div class="img img2 secondaryImg projectDiv" id="img2-1" style="margin-top:-50px;">
									<ul>
											<li>Nom du projet<br /><em>The creation behind AURA Mugler by its perfumer-creators.</em></li>
											<li>Direction Artistique<br /><em>Jules Théret</em></li>
											<li>Equipe<br /><em>Jules Théret, réalisateur</em><br /><em>Assistant Director // Laetitia Hughes</em><br /><em>Cinematographer // Laetitia de Montalembert</em><br /><em>Focus Puller // Rémi Derlvern</em><br /><em>Key Grip // Sacha Benichou</em><br /><em>Steadicamer // Thierry Le Mer</em><br /><em>Sound Recordist // Rémi Chanaud</em><br /><em>Editor &amp; Colorist // Félix Oziel</em><br /><em>Motion Designer // Virgile Hernandez</em><br /><em>Composition, Mixing and Sound Design by Bon Enfant Production</em></li>
											<li><em>15-16 Février 2018, Paris</em></li>
										</ul>
							</div>
                        </div>
                    <div id="img_container3" class="img_container">
                        <img src="./assets/PJ_VENDANGES/page3.jpg" id="img3" class="img img3" onclick="handleOpenInfo('3')"/><br />
                        <img src="./assets/PJ_VENDANGES/page3-1.jpg"   id="img3-1" class="img img3 secondaryImg" onclick="handleOpenInfo('3-1')"/><br />
                        <img src="./assets/PJ_VENDANGES/page3-2.jpg"   id="img3-2" class="img img3 secondaryImg" onclick="handleOpenInfo('3-2')"/><br />
                        <div class="img img3 secondaryImg projectDiv" id="img3-3">
                                    <ul>
                                        <li>Nom du projet<br /><em>Campaign Perrier-Jouët Belle Époque Vendanges</em></li>
                                        <li>Direction Artistique<br /><em>Juliette Abitbole</em></li>
                                        <li>Equipe<br /><em>Edouard Sanville, photograph</em><br /><em>Julien Dauvillier, DIT</em><br /><em>Simon Sevilia, First assistant</em><br /><em>Fleur Huyghn, Stylist artist</em><br /><em>Cécilia Malka, Set design</em><br /><em>Isabelle Guyon, make up artist</em><br /><em>Camille Delattre, Hair artist</em></li>
                                        <li><em>Date, Paris</em></li>
                                    </ul>
						</div>
                    </div>
                    <div id="img_container4" class="img_container">
                        <?php
                            foreach (get_files_path(get_project()[0]) as $key => $value) {
                                if ($key == 0) {
                                    echo '<img src="' . $value .'" id="img4" class="img img4"/> <br />';
                                } else if ($key == count(get_files_path(get_project()[0])) - 1) {
                                    break;
                                } else {
                                    echo '<img src="' . $value .'" id="img4-' . $key . '" class="img img4 secondaryImg"/> <br />';
                                }
                            }
                        ?>
                        <!-- <img src="./assets/PJ_BDB_BR/page4.png" id="img4" class="img img4"/> <br />
                        <img src="./assets/PJ_BDB_BR/page4-1.png" id="img4-1" class="img img4 secondaryImg" /> <br />
                        <img src="./assets/PJ_BDB_BR/page4-2.png" id="img4-2" class="img img4 secondaryImg" /> <br />
                        <img src="./assets/PJ_BDB_BR/page4-3.png" id="img4-3" class="img img4 secondaryImg" /> <br />
                        <img src="./assets/PJ_BDB_BR/page4-4.png" id="img4-4" class="img img4 secondaryImg" /> <br />
                        <img src="./assets/PJ_BDB_BR/page4-5.png" id="img4-5" class="img img4 secondaryImg" /> <br />
                        <img src="./assets/PJ_BDB_BR/page4-6.png" id="img4-6" class="img img4 secondaryImg" /> <br />
                        <img src="./assets/PJ_BDB_BR/page4-7.png" id="img4-7" class="img img4 secondaryImg" /> <br />
                        <img src="./assets/PJ_BDB_BR/page4-8.png" id="img4-8" class="img img4 secondaryImg" /> <br />
                        <img src="./assets/PJ_BDB_BR/page4-9.png" id="img4-9" class="img img4 secondaryImg" /> <br />
                        <img src="./assets/PJ_BDB_BR/page4-10.png" id="img4-10" class="img img4 secondaryImg" /> <br />
                        <img src="./assets/PJ_BDB_BR/page4-11.png" id="img4-11" class="img img4 secondaryImg" /><br /> -->
                        <div class="img img4 secondaryImg projectDiv" id="img4-12">
							<ul>
                            <?php
                                echo get_text(get_project()[0])
                            ?>
                                <!-- <li>Nom du projet<br /><em>Campaign Perrier-Jouët Blanc de Blanc</em></li>
                                <li>Direction Artistique<br /><em>Studio Twiiks</em></li>
                                <li>Equipe<br /><em>Fedor Bitkov, photograph</em><br /><em>Julien Dauvillier, DIT</em><br /><em>Pete Hawk, First assistant</em><br /><em>Fleur Huyghn, Stylist artist</em><br /><em>Cécilia Malka, Set design</em><br /><em>Audrey Payet, make up artist</em><br /><em>Camille Delattre, Hair artist</em></li>
                                <li><em>Date, Paris</em></li> -->
                            </ul>
						</div>
                    </div>
                </div>
            </div>
            <div class="project_infos"><span id="projectInfos"></span></div>
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
                <div class="cache_manifest">
                </div>
                <div class="manifest"></div>
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
