<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Ajouter une description pour les moteurs de recherche -->
    <meta name="description" content="Portofolio de Thibault COUANON">
    <meta name="keywords" content="COUANON, COUANON Thibault, developpeur full-stack, HTML/CSS, JavaScript, PHP, Java, Python, SQL">
    <meta name="author" content="Thibault COUANON">
    <!-- Ajouter une description OpenGraph -->
    <meta name="title" property="og:title" content="Thibault COUANON">
    <meta name="type" property="og:type" content="COUANON, COUANON Thibault, developpeur full-stack, HTML/CSS, JavaScript, PHP, Java, Python, SQL">
    <meta name="image" property="og:image" content="./img/favicon/favicon2.png">
    <meta name="url" property="og:url" content="https://www.couanon-thibault.com">
    <meta name="description" property="og:description" content="Portoflio de Thibault COUANON">
    <meta name="local" property="og:local" content="France">

    <link rel="stylesheet" href="css/style.css" />
    <link rel="icon" type="image/svg+xml" href="./img/favicon/favicon.svg" />
    <link rel="icon" type="image/png" href="./img/favicon/favicon.png" />
    <title>C.Thibault</title>
  </head>
  <body class="min-h-screen bg-main-color">
    <header
      class="sticky top-0 z-20 mb-8 bg-main-color text-main-green shadow-md"
    >
      <section class="mx-auto flex max-w-5xl items-center justify-between p-4">
        <a id="titi_home_icon" class="ml-2 h-6" href="#home"
          ><img class="h-full" src="./img/favicon/favicon2.png" alt=""
        /></a>
        <div>
          <button
            id="hamburger_button"
            class="relative h-8 w-8 cursor-pointer border-main-green text-4xl sm:hidden"
          >
            <div
              class="absolute top-4 -mt-0.5 h-1 w-8 rounded bg-main-green transition-all duration-500 before:absolute before:h-1 before:w-8 before:-translate-x-4 before:-translate-y-3 before:rounded before:bg-main-green before:transition-all before:duration-500 before:content-[''] after:absolute after:h-1 after:w-8 after:-translate-x-4 after:translate-y-3 after:rounded after:bg-main-green after:transition-all after:duration-500 after:content-['']"
            ></div>
            <!-- &#9776; -->
          </button>
          <nav
            class="hidden space-x-8 text-xl uppercase sm:flex sm:justify-center"
            aria-label="main"
          >
            <div>
              <a
                href="#mon_parcours"
                class="after:block after:h-0.5 after:w-0 after:bg-main-green after:transition-all after:duration-700 after:hover:w-full"
                >About me</a
              >
            </div>
            <div>
              <a
                href="#mes_projets"
                class="after:block after:h-0.5 after:w-0 after:bg-main-green after:transition-all after:duration-700 after:hover:w-full"
                >My work</a
              >
            </div>
            <div>
              <a
                href="#contact"
                class="after:block after:h-0.5 after:w-0 after:bg-main-green after:transition-all after:duration-700 after:hover:w-full"
                >Contact</a
              >
            </div>
          </nav>
        </div>
      </section>
      <section
        id="mobile_menu"
        class="absolute top-12 hidden w-full origin-top animate-open-menu flex-col bg-main-color/95 text-5xl"
      >
        <nav
          class="section-mobile-menu flex flex-col items-center justify-center py-8 uppercase"
          aria-label="mobile"
        >
          <a href="#mon_parcours" class="w-full py-6 text-center">About me</a>
          <a href="#mes_projets" class="w-full py-6 text-center">My work</a>
          <a href="#contact" class="w-full py-6 text-center">Contact</a>
          <div class="absolute bottom-4 flex justify-around">
            <a
              href="https://fr.linkedin.com/in/thibaultcouanon"
              target="_blank"
              class="w-1/4"
            >
              <img src="./img/linkedin_logo.svg" alt="my_linkedin" />
            </a>
            <a href="https://github.com/TitiBond" target="_blank" class="w-1/4">
              <img src="./img/github_logo.svg" alt="my_github" />
            </a>
          </div>
        </nav>
      </section>
    </header>
    <div class="mx-auto max-w-5xl">
      <section
        id="home"
        class="flex scroll-mt-24 flex-col items-start justify-center gap-4 px-6 text-white"
      >
        <p class="tracking-widest text-main-green">Salut ! Moi c'est</p>
        <div class="flex flex-col font-bold sm:flex-row sm:gap-10">
          <span class="text-5xl -tracking-7">
            <span class="span_me">T</span>
            <span class="span_me">h</span>
            <span class="span_me">i</span>
            <span class="span_me">b</span>
            <span class="span_me">a</span>
            <span class="span_me">u</span>
            <span class="span_me">l</span>
            <span class="span_me">t</span>
          </span>
          <span class="text-5xl -tracking-7">
            <span class="span_me">C</span>
            <span class="span_me">o</span>
            <span class="span_me">u</span>
            <span class="span_me">a</span>
            <span class="span_me">n</span>
            <span class="span_me">o</span>
            <span class="span_me">n</span>
          </span>
        </div>
        <div class="flex flex-wrap gap-x-4 text-lg -tracking-6">
          <span>
            <span class="span_dev">W</span>
            <span class="span_dev">e</span>
            <span class="span_dev">b</span>
          </span>
          <span>
            <span class="span_dev">D</span>
            <span class="span_dev">e</span>
            <span class="span_dev">v</span>
            <span class="span_dev">e</span>
            <span class="span_dev">l</span>
            <span class="span_dev">o</span>
            <span class="span_dev">p</span>
            <span class="span_dev">p</span>
            <span class="span_dev">e</span>
            <span class="span_dev">r</span>
          </span>
          <span>
            <span class="span_dev">F</span>
            <span class="span_dev">u</span>
            <span class="span_dev">l</span>
            <span class="span_dev">l</span>
            <span class="span_dev">s</span>
            <span class="span_dev">t</span>
            <span class="span_dev">a</span>
            <span class="span_dev">c</span>
            <span class="span_dev">k</span>
          </span>
          <span>
            <span class="span_dev">e</span>
            <span class="span_dev">n</span>
          </span>
          <span>
            <span class="span_dev">R</span>
            <span class="span_dev">e</span>
            <span class="span_dev">c</span>
            <span class="span_dev">o</span>
            <span class="span_dev">n</span>
            <span class="span_dev">v</span>
            <span class="span_dev">e</span>
            <span class="span_dev">r</span>
            <span class="span_dev">s</span>
            <span class="span_dev">i</span>
            <span class="span_dev">o</span>
            <span class="span_dev">n</span>
          </span>
        </div>
        <p class="mt-8">
          Dans le cadre de ma reconversion, je poursuis mes ??tudes en licence
          "Developpeur Web Mobile". Je suis donc ?? la recherche d'un contrat de
          professionnalisation d'une dur??e de 1 an.
        </p>
      </section>
    </div>
    <div class="my-16 bg-grey-color py-16">
      <section
        class="mx-auto flex max-w-5xl flex-col items-center px-6 md:flex-row md:justify-around"
      >
        <img
          class="mb-8 w-1/2 rounded-tl-3xl rounded-br-3xl rounded-tr-[25%] rounded-bl-[25%] grayscale transition-all duration-1000 ease-linear hover:grayscale-0 sm:w-1/3 md:mb-0 md:mt-6"
          src="./img/me.jpg"
          alt="picture_of_me"
        />
        <div class="md:px-10 md:text-justify md:w-2/3">
          <h2
            class="my-4 text-center text-2xl font-bold uppercase text-main-green"
          >
            mieux vaut tard que jamais !
          </h2>
          <p>
            J'ai toujours ??t?? attir?? par l'informatique, le multim??dia, la
            technologie... Quand j'??tais plus jeune, je me souviens encore
            passer des heures devant mon ??cran afin de modder,voire parfois
            d??buguer des jeux pour leur ajouter du contenu. Je prenais du
            plaisir ?? ??a. <br />
            Il y avait un truc... Ce petit truc de logique qui rend presque
            accro. <br />
            Pourtant mes choix ne m'ont pas orient?? sur ce chemin l??. <br />
            Je suis cependant persuad?? que nous aspirons tous ?? faire un travail
            qui nous correspond, qui nous plait. <br />
            C'est pour cela qu'?? 35 ans, j'ai d??cid?? de me reconvertir, et de
            retrouver ce plaisir.
          </p>
        </div>
      </section>
    </div>

    <div class="mx-auto max-w-5xl">
      <section id="mon_parcours" class="flex scroll-mt-20 flex-col px-4">
        <h2
          class="mb-16 text-center text-2xl font-bold uppercase text-main-green"
        >
          mon parcours
        </h2>

        <div
          id="slider_container"
          class="relative mx-auto flex w-full max-w-3xl snap-x snap-mandatory items-center gap-4 overflow-x-scroll scroll-smooth rounded sm:h-[400px]"
        >
          <div
            id="slide1"
            class="slide relative flex h-full w-full shrink-0 basis-full snap-center items-center justify-center"
          >
            <img
              class="absolute hidden h-full w-full rounded object-cover sm:block"
              src="./img/slider/slide1.jpg"
              alt=""
            />
            <div
              class="z-10 flex h-fit w-fit flex-col gap-4 rounded bg-main-green/60 sm:mx-16 sm:bg-main-green/70"
            >
              <h2
                class="mx-auto mt-4 text-center text-xl font-bold uppercase text-white"
              >
                atypique
              </h2>
              <p class="m-2 mb-4 text-center">
                C'est comme cela que je qualifierais mon parcours. <br /><br />
                Je pense toujours aujourd'hui que le sch??ma scolaire n'est pas
                adapt?? ?? tout le monde. <br /><br />
                C'??tait le cas pour moi :) <br /><br />
                Apr??s l'obtention de mon BAC STL Physique, je d??cide d'arreter
                les ??tudes.
              </p>
            </div>
          </div>

          <div
            id="slide2"
            class="slide relative flex h-full w-full shrink-0 basis-full snap-center items-center justify-center"
          >
            <img
              class="absolute hidden h-full w-full rounded object-cover sm:block"
              src="./img/slider/slide2.jpg"
              alt=""
            />
            <div
              class="z-10 flex h-fit w-fit flex-col gap-4 rounded bg-main-green/60 sm:mx-16 sm:bg-main-green/70"
            >
              <h2
                class="mx-auto mt-4 text-center text-xl font-bold uppercase text-white"
              >
                technicien informatique
              </h2>
              <p class="m-2 mb-4 text-center">
                Ma premi??re exp??rience fut une start-up : "Splitted Desktop
                System". <br /><br />
                J'ai commenc?? par faire de la maintenance Hardware et Software
                sur leur marque d'ordinateur. <br /><br />
                Mais ma curiosit?? m'a vite permis de toucher ?? tout : <br />
                Du web, en passant par de l'??lectronique, jusqu'?? la logistique
                !
              </p>
            </div>
          </div>

          <div
            id="slide3"
            class="slide relative flex h-full w-full shrink-0 basis-full snap-center items-center justify-center"
          >
            <img
              class="absolute hidden h-full w-full rounded object-cover sm:block"
              src="./img/slider/slide3.jpg"
              alt=""
            />
            <div
              class="z-10 flex h-fit w-fit flex-col gap-4 rounded bg-main-green/60 sm:mx-16 sm:bg-main-green/70"
            >
              <h2
                class="mx-auto mt-4 text-center text-xl font-bold uppercase text-white"
              >
                changement de direction
              </h2>
              <p class="m-2 mb-4 text-center">
                On ne sait jamais de quoi sera fait notre chemin. <br /><br />
                Suite ?? des probl??mes de tr??sorerie, je quitte l'entreprise et
                d??cide d'essayer autre chose.<br /><br />
                Je passe un dipl??me d'auxiliaire ambulancier.
              </p>
            </div>
          </div>

          <div
            id="slide4"
            class="slide relative flex h-full w-full shrink-0 basis-full snap-center items-center justify-center"
          >
            <img
              class="absolute hidden h-full w-full rounded object-cover sm:block"
              src="./img/slider/slide4.jpg"
              alt=""
            />
            <div
              class="z-10 flex h-fit w-fit flex-col gap-4 rounded bg-main-green/60 sm:mx-16 sm:bg-main-green/70"
            >
              <h2
                class="mx-auto mt-4 text-center text-xl font-bold uppercase text-white"
              >
                une experience de vie
              </h2>
              <p class="m-2 mb-4 text-center">
                Je deviens chauffeur pour personnes en situation de handicap.
                <br /><br />
                Tres belle exp??rience qui m'a apport?? beaucoup sur le plan
                humain !
              </p>
            </div>
          </div>

          <div
            id="slide5"
            class="slide relative flex h-full w-full shrink-0 basis-full snap-center items-center justify-center"
          >
            <img
              class="absolute hidden h-full w-full rounded object-cover sm:block"
              src="./img/slider/slide5.jpg"
              alt=""
            />
            <div
              class="z-10 flex h-fit w-fit flex-col gap-4 rounded bg-main-green/60 sm:mx-16 sm:bg-main-green/70"
            >
              <h2
                class="mx-auto mt-4 text-center text-xl font-bold uppercase text-white"
              >
                je monte, je valide !
              </h2>
              <p class="m-2 mb-4 text-center">
                En 2016, je passe mon permis Transport en commun. <br /><br />
                Je passe 5 ann??es en tant que conducteur-receveur. <br /><br />
                Tourisme, transport scolaire, entreprise priv??e, ligne
                r??guli??re. <br /><br />
                Terminus, tout le monde descend...
              </p>
            </div>
          </div>

          <div
            id="slide6"
            class="slide relative flex h-full w-full shrink-0 basis-full snap-center items-center justify-center"
          >
            <img
              class="absolute hidden h-full w-full rounded object-cover sm:block"
              src="./img/slider/slide6.jpg"
              alt=""
            />
            <div
              class="z-10 flex h-fit flex-col gap-4 rounded bg-main-green/60 sm:mx-16 sm:bg-main-green/70"
            >
              <h2
                class="mx-auto mt-4 text-center text-xl font-bold uppercase text-white"
              >
                Reconversion
              </h2>
              <p class="m-2 mb-4 text-center">
                Je d??cide de reprendre les ??tudes pour me recentrer sur ce qui
                me plait. <br /><br />
                Je valide un BTS en domotique en 2022. <br /><br />
                Aujourd'hui, je suis ?? la "Coding Factory" pour obtenir un
                diplome BAC+2 de d??veloppeur informatique.
              </p>
            </div>
          </div>
        </div>
        <div class="relative my-6 flex justify-center gap-4">
          <div
            id="prev_btn"
            class="absolute left-1/4 -top-full hidden h-[40px] w-[40px] cursor-pointer rounded-full border-2 text-center text-3xl text-main-green transition-all duration-700 hover:bg-main-green hover:text-main-color sm:block"
          >
            <
          </div>
          <div
            id="next_btn"
            class="absolute right-1/4 -top-full hidden h-[40px] w-[40px] cursor-pointer rounded-full border-2 text-center text-3xl text-main-green transition-all duration-700 hover:bg-main-green hover:text-main-color sm:block"
          >
            >
          </div>
          <input
            type="radio"
            disabled
            class="indicator checked:scale-150 checked:disabled:after:block checked:disabled:after:h-full checked:disabled:after:w-full checked:disabled:after:rounded-full checked:disabled:after:bg-main-green"
          />
          <input
            type="radio"
            disabled
            class="indicator checked:scale-150 checked:disabled:after:block checked:disabled:after:h-full checked:disabled:after:w-full checked:disabled:after:rounded-full checked:disabled:after:bg-main-green"
          />
          <input
            type="radio"
            disabled
            class="indicator checked:scale-150 checked:disabled:after:block checked:disabled:after:h-full checked:disabled:after:w-full checked:disabled:after:rounded-full checked:disabled:after:bg-main-green"
          />
          <input
            type="radio"
            disabled
            class="indicator checked:scale-150 checked:disabled:after:block checked:disabled:after:h-full checked:disabled:after:w-full checked:disabled:after:rounded-full checked:disabled:after:bg-main-green"
          />
          <input
            type="radio"
            disabled
            class="indicator checked:scale-150 checked:disabled:after:block checked:disabled:after:h-full checked:disabled:after:w-full checked:disabled:after:rounded-full checked:disabled:after:bg-main-green"
          />
          <input
            type="radio"
            disabled
            class="indicator checked:scale-150 checked:disabled:after:block checked:disabled:after:h-full checked:disabled:after:w-full checked:disabled:after:rounded-full checked:disabled:after:bg-main-green"
          />
        </div>

        <a
          id="cv_btn"
          class="mx-auto mt-16 w-fit rounded-md border border-main-green bg-main-color px-4 py-2 text-main-green transition-all duration-300 ease-linear hover:bg-main-green hover:text-main-color"
          href="./files/Thibault COUANON.pdf"
          target="_blank"
          >TELECHARGEZ MON CV</a
        >
      </section>
    </div>
    <div class="my-16 bg-grey-color py-16">
      <section class="mx-auto flex max-w-5xl flex-col gap-6 px-6">
        <h2
          class="my-5 text-center text-2xl font-bold uppercase text-main-green"
        >
          &lt\CODE&gt
        </h2>
        <div
          class="grid grid-cols-2 items-center justify-items-center gap-6 sm:gap-y-14 md:grid-cols-3 md:gap-y-16"
        >
          <div class="skill_content relative grid items-center justify-items-center">
            <img
              class="transition-all img_skill w-1/2 duration-500 ease-linear"
              src="./img/language_icons/html.svg"
              alt="html_svg"
            />
            <span class="span_skill transition-all duration-500 ease-linear"
              >HTML</span
            >
          </div>
          <div class="skill_content relative grid items-center justify-items-center">
            <img
              class="transition-all img_skill w-1/2 duration-500 ease-linear"
              src="./img/language_icons/css.svg"
              alt="css_svg"
            />
            <span class="span_skill transition-all duration-500 ease-linear"
              >CSS</span
            >
          </div>
          <div class="skill_content relative grid items-center justify-items-center">
            <img
              class="transition-all img_skill w-1/2 duration-500 ease-linear"
              src="./img/language_icons/javascript.svg"
              alt="javascript_svg"
            />
            <span class="span_skill transition-all duration-500 ease-linear"
              >JAVASCRIPT</span
            >
          </div>
          <div class="skill_content relative grid items-center justify-items-center">
            <img
              class="transition-all img_skill w-1/2 duration-500 ease-linear"
              src="./img/language_icons/java.svg"
              alt="java_svg"
            />
            <span class="span_skill transition-all duration-500 ease-linear"
              >JAVA</span
            >
          </div>
          <div class="skill_content relative grid items-center justify-items-center">
            <img
              class="transition-all img_skill w-1/2 duration-500 ease-linear"
              src="./img/language_icons/php.svg"
              alt="php_svg"
            />
            <span class="span_skill transition-all duration-500 ease-linear"
              >PHP</span
            >
          </div>
          <div class="skill_content relative grid items-center justify-items-center">
            <img
              class="transition-all img_skill w-1/2 duration-500 ease-linear"
              src="./img/language_icons/python.svg"
              alt="python_svg"
            />
            <span class="span_skill transition-all duration-500 ease-linear"
              >PYTHON</span
            >
          </div>
        </div>
      </section>
    </div>

    <div class="mx-auto max-w-5xl overflow-x-hidden">
      <section
        id="mes_projets"
        class="mx-6 flex scroll-mt-20 flex-col items-center justify-center gap-16"
      >
        <h2
          class="my-5 text-center text-2xl font-bold uppercase text-main-green"
        >
          mes projets
        </h2>

        <div
          class="flex flex-col items-center justify-center gap-8 md:flex-row md:gap-x-12 translate-x-full opacity-0 blur-sm transition-all duration-1000 delay-300 ease-in-out div_hidden"
        >
          <div
            class="img_skill_container relative w-1/3 overflow-hidden md:basis-1/4"
          >
            <img
              class="w-fit rounded-xl"
              src="./img/project_picture/Fish_Memory.jpg"
              alt="memory_project_img"
            />
            <a
              href="https://github.com/TitiBond/Projet_Python_CF"
              target="_blank"
              class="github_link absolute -right-full top-0 h-full w-full rounded-xl bg-white bg-github bg-contain bg-center bg-no-repeat opacity-70 transition-all duration-500 ease-linear"
            ></a>
          </div>

          <div
            class="flex basis-3/4 flex-col items-center justify-center gap-4 text-justify text-white"
          >
            <h3 class="text-xl font-bold">Fish Memory</h3>
            <p>
              Petit projet en <span class="text-main-green">Python</span> d'un
              jeu de m??moire bas?? sur le Memory. L'id??e ??tait de m??langer cela
              avec des images d'un jeu de soci??t?? que j'adore "Twin it!". Nous
              avons eu 2 jours pour r??aliser ce projet.
            </p>
          </div>
        </div>

        <hr class="mx-auto h-0 w-0 bg-main-green md:my-20 opacity-0 transition-all duration-1000 delay-300 div_hidden" />

        <div
          class="flex flex-col items-center justify-center gap-8 md:flex-row-reverse md:gap-x-12 -translate-x-full opacity-0 blur-sm transition-all duration-1000 delay-300 ease-in-out div_hidden"
        >
          <div
            class="img_skill_container relative w-1/3 overflow-hidden md:basis-1/4"
          >
            <img
              class="w-fit rounded-xl"
              src="./img/project_picture/D&D.jpg"
              alt="DD_project_img"
            />
            <a
              href="https://github.com/TitiBond/Projet_Java_CF"
              target="_blank"
              class="github_link absolute right-full top-0 h-full w-full rounded-xl bg-white bg-github bg-contain bg-center bg-no-repeat opacity-70 transition-all duration-500 ease-linear"
            ></a>
          </div>
          <div
            class="flex basis-3/4 flex-col items-center justify-center gap-4 text-justify text-white"
          >
            <h3 class="text-xl font-bold">Dungeon and Dragon</h3>
            <p>
              Ce projet est un D&D like textuel. Il a ??t?? r??alis?? en
              <span class="text-main-green">JAVA</span> afin de nous permettre
              d'apprendre le <span class="text-main-green">POO</span>. Nous
              avons r??alis?? ce projet en 4 jours.
            </p>
          </div>
        </div>

        <hr class="mx-auto h-0 w-0 bg-main-green md:my-20 opacity-0 transition-all duration-1000 delay-300 div_hidden" />

        <div
          class="flex flex-col items-center justify-center gap-8 md:flex-row md:gap-x-12 translate-x-full opacity-0 blur-sm transition-all duration-1000 delay-300 ease-in-out div_hidden"
        >
          <div
            class="img_skill_container relative w-1/3 overflow-hidden md:basis-1/4"
          >
            <img
              class="w-fit rounded-xl"
              src="./img/project_picture/quiz.jpg"
              alt="quiz_project_img"
            />
            <a
              href="https://github.com/TitiBond/Projet_Android_CF"
              target="_blank"
              class="github_link absolute -right-full top-0 h-full w-full rounded-xl bg-white bg-github bg-contain bg-center bg-no-repeat opacity-70 transition-all duration-500 ease-linear"
            ></a>
          </div>

          <div
            class="flex basis-3/4 flex-col items-center justify-center gap-4 text-justify text-white"
          >
            <h3 class="text-xl font-bold">Quiz Android</h3>
            <p>
              Quiz Android est un petit projet que nous avons r??alis?? en 2
              jours. Nous avons utilis??
              <span class="text-main-green">JAVA</span>. Vraiment interessant de
              d??couvrir la cr??ation d'application smartphone. Notre semaine sur
              <span class="text-main-green">Android</span> n'a dur?? que 4 jours,
              j'aurais ador?? avoir plus de temps !
            </p>
          </div>
        </div>

        <hr class="mx-auto h-0 w-0 bg-main-green md:my-20 opacity-0 transition-all duration-1000 delay-300 div_hidden" />

        <div
          class="flex flex-col items-center justify-center gap-8 md:flex-row-reverse md:gap-x-12 -translate-x-full opacity-0 blur-sm transition-all duration-1000 delay-300 ease-in-out div_hidden"
        >
          <div
            class="img_skill_container relative w-1/3 overflow-hidden md:basis-1/4"
          >
            <img
              class="w-fit rounded-xl"
              src="./img/project_picture/calculator.jpg"
              alt="calculator_training_img"
            />
            <a
              href="https://github.com/TitiBond/Training_Javascript_Calculette"
              target="_blank"
              class="github_link absolute right-full top-0 h-full w-full rounded-xl bg-white bg-github bg-contain bg-center bg-no-repeat opacity-70 transition-all duration-500 ease-linear"
            ></a>
          </div>
          <div
            class="flex basis-3/4 flex-col items-center justify-center gap-4 text-justify text-white"
          >
            <h3 class="text-xl font-bold">Calculator</h3>
            <p>
              J'ai eu envie de pratiquer html/css et
              <span class="text-main-green">Javascript</span>. J'ai donc d??cid??
              de faire cet exercice connu de la calculette. Une petite journ??e
              de travail pour terminer. J'ai pris beaucoup de plaisir ??
              r??fl??chir ?? la logique du script :)
            </p>
          </div>
        </div>

        <hr class="mx-auto h-0 w-0 bg-main-green md:my-20 opacity-0 transition-all duration-1000 delay-300 div_hidden" />

        <div
          class="flex flex-col items-center justify-center gap-8 md:flex-row md:gap-x-12 translate-x-full opacity-0 blur-sm transition-all duration-1000 delay-300 ease-in-out div_hidden"
        >
          <div
            class="img_skill_container relative w-1/3 overflow-hidden md:basis-1/4"
          >
            <img
              class="w-fit rounded-xl"
              src="./img/project_picture/la_caverne.jpg"
              alt="php_project_img"
            />
            <a
              href="https://github.com/TitiBond/PROJET_PHP_CF"
              target="_blank"
              class="github_link absolute -right-full top-0 h-full w-full rounded-xl bg-white bg-github bg-contain bg-center bg-no-repeat opacity-70 transition-all duration-500 ease-linear"
            ></a>
          </div>
          <div
            class="flex basis-3/4 flex-col items-center justify-center gap-4 text-justify text-white"
          >
            <h3 class="text-xl font-bold">La caverne des jeux</h3>
            <p>
              La caverne des jeux est un projet r??alis?? dans le cadre du cours
              de <span class="text-main-green">PHP</span> ?? la Coding Factory.
              L'objectif ??tait de r??aliser, en 3 jours, un site PHP dynamique,
              sans framework, avec connexion ?? une base de donn??es
              <span class="text-main-green">MySQL</span>. Pour la partie Front,
              le framework Bootstrap est utilis??. Le projet r??alis?? correspond
              ?? un site marchand de jeux de soci??t??.
            </p>
          </div>
        </div>
      </section>
    </div>

    <div class="mt-16 bg-grey-color py-16">
      <section
        id="contact"
        class="mx-auto flex max-w-5xl scroll-mt-20 flex-col gap-6 px-6 text-center"
      >
        <h2
          class="my-5 text-center text-2xl font-bold uppercase text-main-green"
        >
          Contact
        </h2>

        <div
          id="contact_card"
          class="mx-auto w-full max-w-[600px] bg-gradient-to-r from-grey-color"
        >
          <div
            id="flip_card_inner"
            class="relative h-full w-full text-center transition-all duration-700 ease-linear"
          >
            <div id="flip_card_front" class="absolute h-full w-full">
              <p class="text-lg">
                Mon profil vous interesse ? <br /><br />
                Parfait ! Je suis ?? la recherche d'un contrat de
                professionnalisation d'une dur??e de 1 an afin de poursuivre ma
                reconversion en Licence. Licence qui s'effectuera de octobre
                2023 ?? juin 2024. <br /><br />
                Contactez moi en cliquant sur le bouton ci-dessous, et je me
                ferai un plaisir de vous r??pondre !
              </p>
              <input
                id="contact_me_btn"
                class="mx-auto mt-16 w-fit rounded-md border border-main-green bg-main-color px-4 py-2 text-main-green transition-all duration-300 ease-linear hover:bg-main-green hover:text-main-color"
                type="button"
                value="CONTACTEZ-MOI"
              />
            </div>

            <div
              id="flip_card_back"
              class="absolute mt-6 flex h-full w-full items-center justify-center sm:mt-0"
            >
              <form
                method="post"
                class="my-auto flex flex-col items-center justify-center gap-6"
              >
                <div class="contact_inputbox relative w-[250px]">
                  <input
                    class="w-full resize-none rounded-md border border-white/25 bg-main-color p-[10px] text-white outline-none duration-500"
                    type="text"
                    name="nom"
                    required="required"
                    placeholder=" "
                  />
                  <span
                    class="pointer-events-none absolute left-0 p-[10px] text-white/50 duration-500"
                    >Votre Nom</span
                  >
                </div>
                <div class="contact_inputbox relative w-[250px]">
                  <input
                    class="w-full resize-none rounded-md border border-white/25 bg-main-color p-[10px] text-white outline-none duration-500"
                    type="email"
                    name="email"
                    required="required"
                    placeholder=" "
                  />
                  <span
                    class="pointer-events-none absolute left-0 p-[10px] text-white/50 duration-500"
                    >Votre email</span
                  >
                </div>
                <div class="contact_inputbox relative w-[250px]">
                  <textarea
                    class="w-full resize-none rounded-md border border-white/25 bg-main-color p-[10px] text-white outline-none duration-500 placeholder:text-white/50"
                    name="message"
                    cols="30"
                    rows="10"
                    required="required"
                    placeholder="Votre message ici"
                  ></textarea>
                </div>
                <input
                  class="mx-auto w-fit rounded-md border border-main-green bg-main-color px-4 py-2 text-main-green transition-all duration-300 ease-linear hover:bg-main-green hover:text-main-color"
                  type="submit"
                  value="ENVOYER"
                  id="submit_btn"
                />
              </form>
              <?php 
                if (isset($_POST['message'])){
                  $retour = mail('email@email.fr', 'Formulaire de contact PortFolio', "Nom du contact : " . $_POST['nom'] . "\r\n" .  "email du contact : " . $_POST['email'] . "\r\n" . "message du contact : " . $_POST['message'], 'From : mon-portfolio@hostinger.fr');
                  if($retour){
                    $_SESSION['form_sent'] = true;
                  }
                }
              ?>
            </div>
          </div>
          <div class="invisible">
            <div class="sm:hidden"><br /><br /><br /><br /></div>
            <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
          </div>
        </div>
      </section>
    </div>

    <footer id="footer" class="bg-main-color text-main-green">
      <section
        class="mx-auto flex max-w-5xl flex-col items-center justify-center gap-3 p-8"
      >
        <p>Copyright &copy Titi - 2023</p>
        <div class="flex justify-around">
          <a
            href="https://fr.linkedin.com/in/thibaultcouanon"
            target="_blank"
            class="w-1/4"
          >
            <img src="./img/linkedin_logo.svg" alt="my_linkedin" />
          </a>
          <a href="https://github.com/TitiBond" target="_blank" class="w-1/4">
            <img src="./img/github_logo.svg" alt="my_github" />
          </a>
        </div>
      </section>
    </footer>

    <?php
      if(isset($_SESSION['form_sent']) && $_SESSION['form_sent'] == true){
        echo "<script>alert('Votre message est envoy??')</script>";
        unset($_SESSION['form_sent']);
      }
    ?>
    <script src="./app2.js"></script>
  </body>
</html>
