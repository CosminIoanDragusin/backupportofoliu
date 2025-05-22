<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofoliu Drăgușin Cosmin</title>
    <link rel="icon" type="image/x-icon" href="images/briefcase.png">
    <link rel="stylesheet" href="style.css">
    <!-- Remix Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css">
    <!-- Swipper Slider-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css">
</head>

<body>
    <?php include("header.html"); ?>
    <section class="about" id="about">
        <div class="about_top">
            <div class="about_image">
                <img src="images/IMG_2447_crop.jpg" alt="My profile photo">
                <img src="images/IMG_2464.jpg" alt="My profile photo 2" class="about_small">
            </div>
            <div class="about_content">
                <h1>Despre Mine</h1>
                <p>
                    Am absolvit recent facultatea și sunt în căutarea unui loc de muncă în IT.
                    Am lucrat cu C++, C#, Java, JavaFX și tehnologii web. Am și experiență în testare cu Selenium și testare manuală.
                    Îmi doresc să îmi dezvolt cariera într-un mediu profesionist și colaborativ.
                </p>
                <button class="skill_btn">Arata Abilitatile</button>
            </div>
        </div>
        <div class="about_bottom">
            <div class="skill_box">
                <h2>C# / .NET</h2>
                <div class="percent"></div>
            </div>
            <div class="skill_box">
                <h2>Java & JavaFX</h2>
                <div class="percent"></div>
            </div>
            <div class="skill_box">
                <h2>HTML / CSS / JS / PHP</h2>
                <div class="percent"></div>
            </div>
            <div class="skill_box">
                <h2>C++ / OOP</h2>
                <div class="percent"></div>
            </div>
            <div class="skill_box">
                <h2>Testing (Manual & Selenium)</h2>
                <div class="percent"></div>
            </div>
            <div class="skill_box">
                <h2>SQL</h2>
                <div class="percent"></div>
            </div>
        </div>
    </section>
    <section class="services" id="services">
        <div class="headings">
            <h1>My Services</h1>
        </div>
        <div class="services_cards">
            <div class="services_card">
                <i class="ri-macbook-line"></i>
                <div class="service_card_det">
                    <h2>Website Development</h2>
                    <p>Construiesc site-uri responsive folosind HTML, CSS, PHP și JavaScript,
                        cu accent pe design curat și funcțional.</p>
                </div>
            </div>
            <div class="services_card">
                <i class="ri-send-plane-line"></i>
                <div class="service_card_det">
                    <h2> Manual Testing & Automated Testing</h2>
                    <p>Pot crea scripturi simple de automatizare (ex: testare automată cu Selenium)
                        sau pot testa manual aplicații web.</p>
                </div>
            </div>
            <div class="services_card">
                <i class="ri-line-chart-line"></i>
                <div class="service_card_det">
                    <h2>Data & Logs Analysis</h2>
                    <p>Analizez date simple și log-uri folosind SQL sau tool-uri de testare, oferind sugestii
                        pentru îmbunătățirea aplicației.</p>
                </div>
            </div>
            <div class="services_card">
                <i class="ri-shape-line"></i>
                <div class="service_card_det">
                    <h2>Desktop App Development</h2>
                    <p>Dezvolt aplicații desktop cu C# (.NET) și JavaFX, utile pentru diverse taskuri sau
                        interfețe cu baze de date.!</p>
                </div>
            </div>
            <div class="services_card">
                <i class="ri-hard-drive-3-line"></i>
                <div class="service_card_det">
                    <h2>Backup & Security</h2>
                    <p>Ofer suport pentru backup de date și protecție simplă a aplicațiilor (gestionare utilizatori,
                        validare input).</p>

                </div>
            </div>
            <div class="services_card">
                <i class="ri-chat-3-line"></i>
                <div class="service_card_det">
                    <h2>Learning & Growing in IT</h2>
                    <p>Îmi dezvolt abilitățile în domeniul IT prin practică, studiu individual și
                        participare la proiecte variate.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="hireMe">
        <h1>Sunt valabil pentru angajare</h1>
        <a href="https://drive.google.com/drive/folders/1iWqxDRYFNqi_syS4PUuJeTm_2Uj3xOUM?dmr=1&ec=wgc-drive-globalnav-goto" target="_blank"><button>Hire Me</button></a>

    </section>

    <section class="section-container">
        <h2 class="section-title">Certifications:</h2>
        <div class="card-container">
            <div class="card">
                <h3>Diploma de Licenta Tehnologia Informatiei</h3>
                <p>Facultatea de Inginerie Sibiu</p>
            </div>
            <div class="card">
                <h3>Diploma de Bacalaureat</h3>
                <p>Colegiul National Lucian Blaga, Sebes</p>
            </div>
        </div>
    </section>

    <section class="portfolios" id="portfolio">
        <div class="headings">
            <h1>Portofoliu</h1>
            <h2>Proiecte realizate de mine:</h2>
        </div>
        <div class="category">
            <button data-filter="all">all projects</button>
            <button data-filter=".category-a">Java</button>
            <button data-filter=".category-b">C#</button>
            <button data-filter=".category-c">C++ and OOP</button>
            <button data-filter=".category-d">WEB</button>
            <button data-filter=".category-e">R-Studio and Mathlab</button>
        </div>
        <div class="portfolios_images">
            <div class="portfolio_img portfolio1 mix category-a ">
                <a href="https://github.com/CosminIoanDragusin/Licenta-Facultate" target="_blank">
                    <img src="images/licenta_java _fx_image.PNG" alt="o image de portofoliu">
                </a>
            </div>
            <div class="portfolio_img portfolio2 mix category-b ">
                <a href="https://github.com/CosminIoanDragusin/C-StudentApplication" target="_blank">
                    <img src="images/c_application.PNG" alt="o image de portofoliu">
                </a>
            </div>
            <div class="portfolio_img portfolio3 mix category-d">
                <a href="https://github.com/CosminIoanDragusin/Licenta_IN_WEB" target="_blank">
                    <img src="images/school-web-image.PNG" alt="o image de portofoliu">
                </a>
            </div>
            <div class="portfolio_img portfolio4 mix category-c">
                <a href="https://github.com/CosminIoanDragusin/Polymorfism2/tree/main" target="_blank">
                    <img src="images/polymorphism_image.png" alt="o image de portofoliu">
                </a>
            </div>
            <div class="portfolio_img portfolio4 mix category-c ">
                <a href="https://github.com/CosminIoanDragusin/Repetare_partial_final/tree/main" target="_blank">
                    <img src="images/repetare_image.PNG" alt="o image de portofoliu">
                </a>
            </div>
            <div class="portfolio_img portfolio4 mix category-c">
                <a href="https://github.com/CosminIoanDragusin/Stream_Lab_final_OOP/blob/main/Stream_lab_final_OOP/Stream_lab_final_OOP.cpp" target="_blank">
                    <img src="images/stream_oop_image.PNG" alt="o image de portofoliu">
                </a>
            </div>
            <div class="portfolio_img portfolio5 mix category-e">
                <a href="https://github.com/CosminIoanDragusin/Mathlab_facultate" target="_blank">
                    <img src="images/MATLAB-Symbol.jpg" alt="o image de portofoliu">
                </a>
            </div>
            <div class="portfolio_img portfolio6 mix category-e">
                <a href="https://github.com/CosminIoanDragusin/Rstudio_lab_facultate" target="_blank">
                    <img src="images/rstudio_image.jpg" alt="o image de portofoliu">
                </a>
            </div>
            <div class="portfolio_img portfolio7 mix category-a">
                <a href="https://github.com/CosminIoanDragusin/Sah-OOP" target="_blank">
                    <img src="images/sah_oop_java.PNG" alt="o image de portofoliu">
                </a>
            </div>
            <div class="portfolio_img portfolio1 mix category-a">
                <a href="https://github.com/CosminIoanDragusin/studentApplication" target="_blank">
                    <img src="images/projectjavafx.PNG" alt="o image de portofoliu">
                </a>
            </div>
        </div>
    </section>

    <section class="section_interest" id="interest">
        <h2>Interese</h2>
        <span>Domenii care mă atrag și vreau să le explorez</span>

        <div class="swiper interestSwiper">
            <div class="swiper-wrapper">

                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="blog_slide">
                        <div class="blog_img">
                            <img src="images/web.jpg" alt="Web Development">
                            <div class="blog_hide_content">
                                <p>Descopăr și învăț constant</p>
                            </div>
                        </div>
                        <div class="blog_content">
                            <h2>Web Development</h2>
                            <p>Îmi place să creez site-uri clare și responsive, folosind HTML, CSS, JavaScript și GitHub.</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="blog_slide">
                        <div class="blog_img">
                            <img src="images/software_development.jpg" alt="Software Development">
                            <div class="blog_hide_content">
                                <p>Îmi place să explorez acest domeniu</p>
                            </div>
                        </div>
                        <div class="blog_content">
                            <h2>Software Development</h2>
                            <p>Sunt interesat de dezvoltarea aplicațiilor desktop și web, cu accent pe funcționalitate și structură curată.</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="blog_slide">
                        <div class="blog_img">
                            <img src="images/artificial.jpg" alt="Artificial Intelligence">
                            <div class="blog_hide_content">
                                <p>Explorare continuă în IT</p>
                            </div>
                        </div>
                        <div class="blog_content">
                            <h2>Artificial Intelligence</h2>
                            <p>Sunt curios cum funcționează rețelele neurale, învățarea automată și aplicațiile practice ale AI.</p>
                        </div>
                    </div>
                </div>
                <!-- Slide 4 -->
                <div class="swiper-slide">
                    <div class="blog_slide">
                        <div class="blog_img">
                            <img src="images/history.jpg" alt="Istorie">
                            <div class="blog_hide_content">
                                <p>Curiozitate tehnologică</p>
                            </div>
                        </div>
                        <div class="blog_content">
                            <h2>Istorie</h2>
                            <p>Sunt interesat de istoria secolului XX</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contact" id="contact">
        <div class="headings">
            <h1>Datele mele de contact</h1>
        </div>

        <div class="address_det">
            <div class="address_box">
                <i class="ri-phone-fill"></i>
                <h2>Număr de telefon</h2>
                <p>0753595330</p>
            </div>
            <div class="address_box">
                <i class="ri-mail-line"></i>
                <h2>Email</h2>
                <p>ioan.dragusin.cosmin@gmail.com</p>
            </div>
            <div class="address_box">
                <i class="ri-home-2-line"></i>
                <h2>Adresa</h2>
                <p>Sebeș</p>
            </div>
        </div>
    </section>

    <!-- Mixitup Filters JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js"></script>
    <!-- Typed JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.1.0/typed.umd.js"></script>
    <!-- Swipper Slider JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
    <?php include("footer.html"); ?>
</body>

</html>
