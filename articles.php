<!DOCTYPE html>
<html lang="fr">

<?php
include_once "./src/include/head.inc.php";
?>

<body>


  <?php
  include_once "./src/include/scriptAddons.inc.php";
  ?>

<header>
  <nav>
    <input type="checkbox" id="nav-check" />

    <div class="nav-logo">
      <a href="/">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="44" height="70" viewBox="0 0 53 83">
            <path id="Tracé_13" data-name="Tracé 13" d="M28.651,3A25.651,25.651,0,0,1,54.3,28.651V59.432a25.651,25.651,0,0,1-51.3,0V28.651A25.651,25.651,0,0,1,28.651,3" transform="translate(-2.384 -2.384)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"/>
            <path id="Tracé_14" data-name="Tracé 14" d="M47.469,85.174h0a10.854,10.854,0,0,1,15.35,0m11.136-3.179a18.811,18.811,0,0,1-18.811,18.811h0A18.811,18.811,0,0,1,73.954,81.995ZM55.144,100.805A18.811,18.811,0,0,0,36.333,81.995a18.811,18.811,0,0,0,18.811,18.811ZM62.819,45.3h0a10.854,10.854,0,0,1-15.35,0M36.333,48.477a18.811,18.811,0,0,1,18.811-18.81A18.811,18.811,0,0,1,36.333,48.478Zm18.811-18.81A18.811,18.811,0,0,0,73.954,48.478h0A18.811,18.811,0,0,0,55.144,29.667Z" transform="translate(-28.877 -23.579)" fill="none" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/>
            <path id="Tracé_15" data-name="Tracé 15" d="M100.977,166.572a9.405,9.405,0,1,1-9.405-9.405A9.405,9.405,0,0,1,100.977,166.572Z" transform="translate(-65.305 -124.915)" fill="none" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/>  
        </svg>
      </a>
      <p>Premier Pas</p>
    </div>

    <div class="nav-btn">
      <label for="nav-check">
        <span></span>
        <span></span>
        <span></span>
      </label>
    </div>
    <ul class="nav-links">
      <li><a href="#div__temoignages">Témoignages</a></li>
      <li><a href="#div__ressources">Ressources</a></li>
      <li><a href="#div__offres">Accompagnements</a></li>
      <li><a href="#div__aides_femmes">Aides</a></li>
      <li><a href="#div__actualites">Actualités</a></li>
      <li><a href="#div__contact">Contact</a></li>
    </ul>
    <div class="nav-icons">
      <a target="_blank" href="https://www.facebook.com/Premier-Pas-103213425532596">
        <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M14.8069 7.76663C14.8069 5.90949 15.7445 5.90949 16.6821 5.90949H17.8072C17.995 5.91199 18.1815 5.87718 18.3555 5.80714C18.5295 5.73709 18.6877 5.63322 18.8205 5.50165C18.9533 5.37009 19.0582 5.2135 19.1289 5.04113C19.1997 4.86876 19.2348 4.6841 19.2323 4.49806V2.75234C19.2323 2.56542 19.1948 2.38035 19.122 2.20789C19.0492 2.03543 18.9426 1.879 18.8083 1.74769C18.6739 1.61638 18.5146 1.51281 18.3395 1.44298C18.1645 1.37315 17.9771 1.33846 17.7884 1.34092L15.1257 1.30377C14.3504 1.27407 13.5778 1.41135 12.8612 1.70612C12.1447 2.00089 11.5013 2.44614 10.9753 3.01113C10.4494 3.57613 10.0536 4.24742 9.81509 4.97866C9.57661 5.70991 9.50117 6.4837 9.59399 7.24663V9.93949H8.11262C7.73465 9.93949 7.37217 10.0882 7.10491 10.3529C6.83765 10.6176 6.6875 10.9766 6.6875 11.3509V13.0966C6.6875 13.471 6.83765 13.83 7.10491 14.0947C7.37217 14.3594 7.73465 14.5081 8.11262 14.5081H9.59399V24.4809C9.59399 24.7272 9.69277 24.9634 9.8686 25.1375C10.0444 25.3117 10.2829 25.4095 10.5316 25.4095H13.9256C14.1644 25.3953 14.3886 25.2912 14.5525 25.1186C14.7163 24.946 14.8073 24.7178 14.8069 24.4809V14.5081H16.4571C16.835 14.5081 17.1975 14.3594 17.4648 14.0947C17.732 13.83 17.8822 13.471 17.8822 13.0966V11.3509C17.8822 10.9766 17.732 10.6176 17.4648 10.3529C17.1975 10.0882 16.835 9.93949 16.4571 9.93949H14.8069V7.76663Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </a>

      <a target="_blank" href="https://www.instagram.com/premierpas_off/">
        <svg width="27" height="27" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0_755_462)">
            <path d="M21.0026 26.0009H6.01012C5.872 25.9582 5.73764 25.9093 5.59826 25.8754C2.9614 25.2375 1.04528 22.9748 1.02644 20.3367C0.995053 15.7787 0.987519 11.2207 1.02644 6.66391C1.05281 3.63905 3.5729 1.07376 6.60027 1.03609C11.1985 0.978327 15.7979 1.0047 20.3974 1.03609C21.874 1.04362 23.1322 1.66391 24.2045 2.66843C25.1801 3.58506 25.6887 4.74653 25.9976 6.01851V21.011C25.646 21.8397 25.3936 22.7325 24.9202 23.4859C24.0274 24.9048 22.6123 25.628 21.0026 26.0009ZM13.5051 24.3924V24.4389C15.5669 24.4389 17.6286 24.4477 19.6892 24.4314C20.2082 24.4467 20.727 24.3969 21.2336 24.2832C23.2502 23.7445 24.4242 22.121 24.433 19.8482C24.4493 15.6217 24.4556 11.3952 24.4192 7.16617C24.4192 6.45673 24.2936 5.68827 24.0036 5.05417C23.1799 3.27993 21.6656 2.56547 19.7507 2.57049C15.7125 2.58054 11.6731 2.57049 7.63368 2.57049C7.19671 2.57049 6.75472 2.59184 6.32528 2.63202C4.39535 2.81158 2.6839 4.47657 2.64121 6.41404C2.56336 10.4924 2.58721 14.5758 2.57717 18.6541C2.57717 19.341 2.57717 20.0353 2.63744 20.7121C2.78435 22.5642 4.52092 24.3184 6.38682 24.3698C8.75748 24.4427 11.1319 24.3924 13.5051 24.3924Z"/>
            <path d="M4.40513 13.4999C4.40513 12.0421 4.33858 10.5817 4.4202 9.12896C4.57088 6.4268 6.52593 4.47552 9.20925 4.40897C12.0797 4.33698 14.9522 4.33698 17.8268 4.40897C20.4147 4.47552 22.4262 6.31882 22.5518 8.9042C22.6974 11.9353 22.71 14.9853 22.5518 18.0165C22.4137 20.755 20.2766 22.5908 17.5166 22.6197C14.8308 22.646 12.145 22.6511 9.46038 22.6197C6.53849 22.5833 4.44657 20.4851 4.39007 17.5594C4.36495 16.2071 4.39007 14.8535 4.39007 13.5011L4.40513 13.4999ZM21.0174 13.5514C21.0174 12.0534 21.0676 10.5529 21.0048 9.05739C20.9358 7.39868 19.6638 6.05136 18.0176 6.00993C15.0443 5.93626 12.0692 5.93375 9.09248 6.00239C7.31699 6.0476 6.0425 7.36352 6.00483 9.14152C5.94331 12.0747 5.95084 15.0117 6.00483 17.9449C6.03748 19.5697 7.37475 20.9584 8.98952 20.9961C12.0031 21.0664 15.0196 21.0664 18.039 20.9961C19.6136 20.9584 20.9395 19.5483 20.9986 17.9826C21.0588 16.5084 21.0161 15.0293 21.0161 13.5514H21.0174Z" />
            <path d="M17.9127 13.4775C17.9174 14.3504 17.6627 15.2051 17.181 15.933C16.6992 16.661 16.0121 17.2294 15.2067 17.5662C14.4014 17.903 13.5141 17.993 12.6576 17.8248C11.801 17.6566 11.0137 17.2377 10.3956 16.6213C9.77742 16.005 9.3563 15.2189 9.18562 14.3628C9.01495 13.5067 9.10241 12.6192 9.43692 11.8129C9.77143 11.0066 10.3379 10.3179 11.0645 9.83401C11.7911 9.35016 12.645 9.09304 13.5179 9.09527C14.0948 9.09245 14.6665 9.20379 15.2001 9.42286C15.7338 9.64193 16.2188 9.96442 16.6273 10.3717C17.0358 10.7791 17.3597 11.2632 17.5803 11.7962C17.8009 12.3292 17.9138 12.9006 17.9127 13.4775ZM13.4928 16.3655C14.059 16.3682 14.6133 16.203 15.0856 15.8907C15.5579 15.5784 15.927 15.133 16.1462 14.6109C16.3654 14.0889 16.4249 13.5135 16.3171 12.9577C16.2093 12.4018 15.9391 11.8904 15.5407 11.4881C15.1422 11.0858 14.6334 10.8106 14.0786 10.6975C13.5238 10.5843 12.9479 10.6383 12.4238 10.8524C11.8996 11.0666 11.4507 11.4313 11.1339 11.9006C10.817 12.3699 10.6465 12.9226 10.6437 13.4888C10.645 14.2466 10.9447 14.9734 11.4779 15.5118C12.0112 16.0502 12.735 16.3569 13.4928 16.3655Z" />
            <path d="M19.4961 8.71725C19.477 9.02053 19.3459 9.30589 19.1282 9.51797C18.9106 9.73004 18.6219 9.85369 18.3183 9.86492C18.162 9.86603 18.0071 9.83583 17.8626 9.7761C17.7182 9.71636 17.5872 9.6283 17.4774 9.51712C17.3675 9.40594 17.2811 9.27388 17.2231 9.12874C17.1652 8.9836 17.1368 8.82833 17.1399 8.67207C17.1429 8.51581 17.1772 8.36174 17.2407 8.21895C17.3042 8.07616 17.3957 7.94754 17.5098 7.84069C17.6238 7.73383 17.7581 7.6509 17.9047 7.59679C18.0514 7.54268 18.2073 7.51849 18.3635 7.52564C18.6667 7.54775 18.9507 7.6821 19.1602 7.90245C19.3696 8.1228 19.4894 8.41332 19.4961 8.71725ZM18.882 8.64066C18.5832 8.49249 18.4187 8.34432 18.2705 8.35939C18.1967 8.38819 18.1318 8.436 18.0824 8.49796C18.033 8.55993 18.0009 8.63384 17.9893 8.71223C18.0043 8.83779 18.2115 9.03367 18.3258 9.0274C18.4689 9.01986 18.6108 8.84156 18.882 8.64066Z" />
          </g>
          <defs>
            <clipPath id="clip0_755_462">
              <rect width="25" height="25" fill="white" transform="translate(1 1)"/>
            </clipPath>
          </defs>
        </svg>
      </a>
      <a target="_blank" href="https://www.linkedin.com/company/premier-pas-off/">
        <svg width="27" height="27" viewBox="0 0 28 26" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M7.62072 3.17548C7.62581 3.82424 7.37297 4.44893 6.91684 4.91457C6.46071 5.38022 5.83791 5.64944 5.18301 5.66405C4.52947 5.64031 3.91012 5.3688 3.45295 4.90566C2.99578 4.44251 2.73574 3.82312 2.72656 3.17548C2.75497 2.54449 3.02458 1.94781 3.48072 1.50639C3.93687 1.06498 4.54542 0.811853 5.18301 0.79834C5.81875 0.812106 6.42516 1.06586 6.87827 1.50771C7.33138 1.94956 7.59696 2.54615 7.62072 3.17548ZM2.98908 10.0841C2.98908 8.65405 3.90791 8.87691 5.18301 8.87691C6.45812 8.87691 7.35819 8.65405 7.35819 10.0841V24.0126C7.35819 25.4612 6.43937 25.1641 5.18301 25.1641C3.92666 25.1641 2.98908 25.4612 2.98908 24.0126V10.0841Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M11.1455 10.0839C11.1455 9.28536 11.4455 8.98822 11.9143 8.89536C12.3831 8.8025 13.9957 8.89536 14.5583 8.89536C15.1208 8.89536 15.3459 9.80536 15.3271 10.4925C15.8083 9.85289 16.4472 9.34627 17.1826 9.02111C17.918 8.69595 18.7254 8.56314 19.5274 8.63536C20.3151 8.58767 21.104 8.70462 21.843 8.97862C22.582 9.25261 23.2545 9.67751 23.8169 10.2257C24.3793 10.7739 24.8189 11.4332 25.1072 12.1606C25.3955 12.8881 25.5261 13.6675 25.4904 14.4482V23.9568C25.4904 25.4054 24.5904 25.1082 23.3153 25.1082C22.0402 25.1082 21.1401 25.4054 21.1401 23.9568V16.5282C21.173 16.1459 21.1226 15.761 20.992 15.3997C20.8615 15.0384 20.654 14.7092 20.3836 14.4344C20.1133 14.1596 19.7863 13.9456 19.425 13.807C19.0638 13.6684 18.6766 13.6084 18.2898 13.6311C17.9049 13.6214 17.5222 13.6928 17.1672 13.8406C16.8122 13.9884 16.493 14.2092 16.2306 14.4883C15.9682 14.7675 15.7687 15.0987 15.6453 15.46C15.5218 15.8212 15.4773 16.2043 15.5146 16.5839V24.0125C15.5146 25.4611 14.5958 25.1639 13.3207 25.1639C12.0456 25.1639 11.1455 25.4611 11.1455 24.0125V10.0839Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </a>
    </div>
  </nav>
  
  <div id="div__first_view">
    <div id="filtre"></div>
    <figure>
      <picture>
        <source srcset="assets/img/Fond-tablette.webp" media="(max-width: 1024px)" type="image/webp">
        <source srcset="assets/img/Fond-tablette.png" media="(max-width: 1024px)" type="image/png">
        <source srcset="assets/img/Fond.webp" type="image/webp">
        <img src="assets/img/Fond.png" alt="Femme souriant à l'objectif">
        <picture>
    </figure>
    <div class="first_view__text--center">
        <h1>Les 5 principaux problèmes au sein d’une entreprise</h1>
        <hr/>
    </div>
    <div class="mouse">
      <div class="mouse-shape">
        <div class="mouse-animation"></div>
      </div>
    </div>  
  </div>
</header>
  
  <main id="div__articles">
    <div>
        <div class="head-article">
            <div>
                <div>
                    <p>Écrit par</p>
                    <p>PREMIER PAS</p>
                </div>
                <div>
                    <p>Publié le</p>
                    <p>05 décembre 2021</p>
                </div>
            </div>
            <div class="nav-icons">
                <a target="_blank" href="https://www.facebook.com/Premier-Pas-103213425532596">
                    <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.8069 7.76663C14.8069 5.90949 15.7445 5.90949 16.6821 5.90949H17.8072C17.995 5.91199 18.1815 5.87718 18.3555 5.80714C18.5295 5.73709 18.6877 5.63322 18.8205 5.50165C18.9533 5.37009 19.0582 5.2135 19.1289 5.04113C19.1997 4.86876 19.2348 4.6841 19.2323 4.49806V2.75234C19.2323 2.56542 19.1948 2.38035 19.122 2.20789C19.0492 2.03543 18.9426 1.879 18.8083 1.74769C18.6739 1.61638 18.5146 1.51281 18.3395 1.44298C18.1645 1.37315 17.9771 1.33846 17.7884 1.34092L15.1257 1.30377C14.3504 1.27407 13.5778 1.41135 12.8612 1.70612C12.1447 2.00089 11.5013 2.44614 10.9753 3.01113C10.4494 3.57613 10.0536 4.24742 9.81509 4.97866C9.57661 5.70991 9.50117 6.4837 9.59399 7.24663V9.93949H8.11262C7.73465 9.93949 7.37217 10.0882 7.10491 10.3529C6.83765 10.6176 6.6875 10.9766 6.6875 11.3509V13.0966C6.6875 13.471 6.83765 13.83 7.10491 14.0947C7.37217 14.3594 7.73465 14.5081 8.11262 14.5081H9.59399V24.4809C9.59399 24.7272 9.69277 24.9634 9.8686 25.1375C10.0444 25.3117 10.2829 25.4095 10.5316 25.4095H13.9256C14.1644 25.3953 14.3886 25.2912 14.5525 25.1186C14.7163 24.946 14.8073 24.7178 14.8069 24.4809V14.5081H16.4571C16.835 14.5081 17.1975 14.3594 17.4648 14.0947C17.732 13.83 17.8822 13.471 17.8822 13.0966V11.3509C17.8822 10.9766 17.732 10.6176 17.4648 10.3529C17.1975 10.0882 16.835 9.93949 16.4571 9.93949H14.8069V7.76663Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>

                <a target="_blank" href="https://www.instagram.com/premierpas_off/">
                    <svg width="27" height="27" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_755_462)">
                        <path d="M21.0026 26.0009H6.01012C5.872 25.9582 5.73764 25.9093 5.59826 25.8754C2.9614 25.2375 1.04528 22.9748 1.02644 20.3367C0.995053 15.7787 0.987519 11.2207 1.02644 6.66391C1.05281 3.63905 3.5729 1.07376 6.60027 1.03609C11.1985 0.978327 15.7979 1.0047 20.3974 1.03609C21.874 1.04362 23.1322 1.66391 24.2045 2.66843C25.1801 3.58506 25.6887 4.74653 25.9976 6.01851V21.011C25.646 21.8397 25.3936 22.7325 24.9202 23.4859C24.0274 24.9048 22.6123 25.628 21.0026 26.0009ZM13.5051 24.3924V24.4389C15.5669 24.4389 17.6286 24.4477 19.6892 24.4314C20.2082 24.4467 20.727 24.3969 21.2336 24.2832C23.2502 23.7445 24.4242 22.121 24.433 19.8482C24.4493 15.6217 24.4556 11.3952 24.4192 7.16617C24.4192 6.45673 24.2936 5.68827 24.0036 5.05417C23.1799 3.27993 21.6656 2.56547 19.7507 2.57049C15.7125 2.58054 11.6731 2.57049 7.63368 2.57049C7.19671 2.57049 6.75472 2.59184 6.32528 2.63202C4.39535 2.81158 2.6839 4.47657 2.64121 6.41404C2.56336 10.4924 2.58721 14.5758 2.57717 18.6541C2.57717 19.341 2.57717 20.0353 2.63744 20.7121C2.78435 22.5642 4.52092 24.3184 6.38682 24.3698C8.75748 24.4427 11.1319 24.3924 13.5051 24.3924Z"/>
                        <path d="M4.40513 13.4999C4.40513 12.0421 4.33858 10.5817 4.4202 9.12896C4.57088 6.4268 6.52593 4.47552 9.20925 4.40897C12.0797 4.33698 14.9522 4.33698 17.8268 4.40897C20.4147 4.47552 22.4262 6.31882 22.5518 8.9042C22.6974 11.9353 22.71 14.9853 22.5518 18.0165C22.4137 20.755 20.2766 22.5908 17.5166 22.6197C14.8308 22.646 12.145 22.6511 9.46038 22.6197C6.53849 22.5833 4.44657 20.4851 4.39007 17.5594C4.36495 16.2071 4.39007 14.8535 4.39007 13.5011L4.40513 13.4999ZM21.0174 13.5514C21.0174 12.0534 21.0676 10.5529 21.0048 9.05739C20.9358 7.39868 19.6638 6.05136 18.0176 6.00993C15.0443 5.93626 12.0692 5.93375 9.09248 6.00239C7.31699 6.0476 6.0425 7.36352 6.00483 9.14152C5.94331 12.0747 5.95084 15.0117 6.00483 17.9449C6.03748 19.5697 7.37475 20.9584 8.98952 20.9961C12.0031 21.0664 15.0196 21.0664 18.039 20.9961C19.6136 20.9584 20.9395 19.5483 20.9986 17.9826C21.0588 16.5084 21.0161 15.0293 21.0161 13.5514H21.0174Z" />
                        <path d="M17.9127 13.4775C17.9174 14.3504 17.6627 15.2051 17.181 15.933C16.6992 16.661 16.0121 17.2294 15.2067 17.5662C14.4014 17.903 13.5141 17.993 12.6576 17.8248C11.801 17.6566 11.0137 17.2377 10.3956 16.6213C9.77742 16.005 9.3563 15.2189 9.18562 14.3628C9.01495 13.5067 9.10241 12.6192 9.43692 11.8129C9.77143 11.0066 10.3379 10.3179 11.0645 9.83401C11.7911 9.35016 12.645 9.09304 13.5179 9.09527C14.0948 9.09245 14.6665 9.20379 15.2001 9.42286C15.7338 9.64193 16.2188 9.96442 16.6273 10.3717C17.0358 10.7791 17.3597 11.2632 17.5803 11.7962C17.8009 12.3292 17.9138 12.9006 17.9127 13.4775ZM13.4928 16.3655C14.059 16.3682 14.6133 16.203 15.0856 15.8907C15.5579 15.5784 15.927 15.133 16.1462 14.6109C16.3654 14.0889 16.4249 13.5135 16.3171 12.9577C16.2093 12.4018 15.9391 11.8904 15.5407 11.4881C15.1422 11.0858 14.6334 10.8106 14.0786 10.6975C13.5238 10.5843 12.9479 10.6383 12.4238 10.8524C11.8996 11.0666 11.4507 11.4313 11.1339 11.9006C10.817 12.3699 10.6465 12.9226 10.6437 13.4888C10.645 14.2466 10.9447 14.9734 11.4779 15.5118C12.0112 16.0502 12.735 16.3569 13.4928 16.3655Z" />
                        <path d="M19.4961 8.71725C19.477 9.02053 19.3459 9.30589 19.1282 9.51797C18.9106 9.73004 18.6219 9.85369 18.3183 9.86492C18.162 9.86603 18.0071 9.83583 17.8626 9.7761C17.7182 9.71636 17.5872 9.6283 17.4774 9.51712C17.3675 9.40594 17.2811 9.27388 17.2231 9.12874C17.1652 8.9836 17.1368 8.82833 17.1399 8.67207C17.1429 8.51581 17.1772 8.36174 17.2407 8.21895C17.3042 8.07616 17.3957 7.94754 17.5098 7.84069C17.6238 7.73383 17.7581 7.6509 17.9047 7.59679C18.0514 7.54268 18.2073 7.51849 18.3635 7.52564C18.6667 7.54775 18.9507 7.6821 19.1602 7.90245C19.3696 8.1228 19.4894 8.41332 19.4961 8.71725ZM18.882 8.64066C18.5832 8.49249 18.4187 8.34432 18.2705 8.35939C18.1967 8.38819 18.1318 8.436 18.0824 8.49796C18.033 8.55993 18.0009 8.63384 17.9893 8.71223C18.0043 8.83779 18.2115 9.03367 18.3258 9.0274C18.4689 9.01986 18.6108 8.84156 18.882 8.64066Z" />
                    </g>
                    <defs>
                        <clipPath id="clip0_755_462">
                        <rect width="25" height="25" fill="white" transform="translate(1 1)"/>
                        </clipPath>
                    </defs>
                    </svg>
                </a>
                <a target="_blank" href="https://www.linkedin.com/company/premier-pas-off/">
                    <svg width="27" height="27" viewBox="0 0 28 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.62072 3.17548C7.62581 3.82424 7.37297 4.44893 6.91684 4.91457C6.46071 5.38022 5.83791 5.64944 5.18301 5.66405C4.52947 5.64031 3.91012 5.3688 3.45295 4.90566C2.99578 4.44251 2.73574 3.82312 2.72656 3.17548C2.75497 2.54449 3.02458 1.94781 3.48072 1.50639C3.93687 1.06498 4.54542 0.811853 5.18301 0.79834C5.81875 0.812106 6.42516 1.06586 6.87827 1.50771C7.33138 1.94956 7.59696 2.54615 7.62072 3.17548ZM2.98908 10.0841C2.98908 8.65405 3.90791 8.87691 5.18301 8.87691C6.45812 8.87691 7.35819 8.65405 7.35819 10.0841V24.0126C7.35819 25.4612 6.43937 25.1641 5.18301 25.1641C3.92666 25.1641 2.98908 25.4612 2.98908 24.0126V10.0841Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M11.1455 10.0839C11.1455 9.28536 11.4455 8.98822 11.9143 8.89536C12.3831 8.8025 13.9957 8.89536 14.5583 8.89536C15.1208 8.89536 15.3459 9.80536 15.3271 10.4925C15.8083 9.85289 16.4472 9.34627 17.1826 9.02111C17.918 8.69595 18.7254 8.56314 19.5274 8.63536C20.3151 8.58767 21.104 8.70462 21.843 8.97862C22.582 9.25261 23.2545 9.67751 23.8169 10.2257C24.3793 10.7739 24.8189 11.4332 25.1072 12.1606C25.3955 12.8881 25.5261 13.6675 25.4904 14.4482V23.9568C25.4904 25.4054 24.5904 25.1082 23.3153 25.1082C22.0402 25.1082 21.1401 25.4054 21.1401 23.9568V16.5282C21.173 16.1459 21.1226 15.761 20.992 15.3997C20.8615 15.0384 20.654 14.7092 20.3836 14.4344C20.1133 14.1596 19.7863 13.9456 19.425 13.807C19.0638 13.6684 18.6766 13.6084 18.2898 13.6311C17.9049 13.6214 17.5222 13.6928 17.1672 13.8406C16.8122 13.9884 16.493 14.2092 16.2306 14.4883C15.9682 14.7675 15.7687 15.0987 15.6453 15.46C15.5218 15.8212 15.4773 16.2043 15.5146 16.5839V24.0125C15.5146 25.4611 14.5958 25.1639 13.3207 25.1639C12.0456 25.1639 11.1455 25.4611 11.1455 24.0125V10.0839Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="body-article">
            <h2>Les 5 principaux problèmes au sein d’une entreprise </h2>
            <p>Gouverner une entreprise n’est pas une chose aisée, si l’aventure peut paraitre fascinante, elle peut 
                aussi rapidement se transformer en cauchemar, que ce soit pour les employés ou pour 
                l’entrepreneur. Des mauvaises pratiques existent. Il y a peu, nous nous sommes entretenus avec une 
                ancienne salariée devenue repreneure d’entreprise et elle a évoqué le nom de « collectivités 
                criminelles » pour désigner le fonctionnement interne des entreprises classiques. Un terme fort, 
                symbole du traumatisme vécu et des témoignages reçus du calvaire des salariés. Alors, quels sont les 
                5 principaux problèmes au sein d’une entreprise ? Zoom sur des situations et des pratiques à bannir.
            </p>
            <h3>Le micro-management</h3>
            <p>
            Le micro-management, c’est le mode opératoire de ce manager excessivement contrôlant qui 
            souhaite tout savoir du moindre faits et gestes de ses subalternes, c’est le N+1 dans toute sa 
            splendeur, arrogant, autoritaire, qui assujetti les autres et qui écrase plus qu’il ne fait grandir les 
            talents qui lui sont confiés. Le mot « subalterne » vous dérange ? C’est normal, parce que dans ce 
            type de management, il n’y a plus aucune place laissée à la collaboration et à la reconnaissance des 
            compétences d’autrui. Impossible pour ce manager abusif et anxieux de déléguer une prise de 
            décision. Plusieurs cas de figure existe. Si le manager en question est oppressé par une hiérarchie 
            autoritaire, il transmet cette oppression à l’équipe sous sa responsabilité. Comme il est lui-même 
            dans un état de stress et de tension permanente, il pense ne pas avoir d’autres choix que de 
            s’investir partout et d’essayer de tout contrôler par peur que les erreurs des autres ne lui retombent 
            dessus. Dans ce cas-là, le problème peut venir de plus haut, et c’est toute la culture d’entreprise qui 
            est à retravailler. Une formation des leaders par exemple peut être une solution. 
            </p>
            <p>
            Il existe aussi une autre forme de micro-management, plus dangereuse pour la santé psychologique 
            des employés. C’est le manager qui oublie complétement la vision globale et les objectifs à atteindre 
            et dont la principale fonction est de traquer vos faits et gestes quotidien. Au début vous vous sentez 
            observés, puis vous vous sentez jugés, et finalement, vous ne vous sentez plus en sécurité en allant 
            travailler. Vous avez eu 10 minutes de retard jeudi matin ? Il le sait, il vous le fera remarqué. Il fera 
            même un point à ce sujet, qu’il bloquera dans votre emploi du temps sans votre consentement, qui 
            vous fera perdre plus de temps à tout les deux que le retard en question. Pendant votre pause-café, 
            vous n’arrivez pas à vous détendre. Chaque fois que vous vous levez de votre chaise, il réagit, soupir, 
            lève les yeux au ciel, bref, il témoigne de son mécontentement. Sans le dire, toujours avec des 
            moyens détournés. Lorsque vous lui partagez votre travail, il y a peu de retour positif. Lorsque vous 
            faites une erreur, il ne manque pas l’occasion de la mettre en valeur, voir de se moquer. Vous ne 
            vous sentez pas bien en sa présence, vous ne vous reconnaissez pas, vous vous sentez inhibé et il y a 
            un vrai manque d’authenticité et de communication. Il est votre supérieur, et il fait tout pour que ce 
            soit l’information capitale à retenir. Finalement vous travaillez dans un climat hostile. Puis vous 
            apprenez qu’il y a eu de nombreux conflits avec lui pour les personnes qui occupaient votre poste 
            précédemment. Résultat : un fort turnover dans les équipes, l’entreprise perd de l’argent à former 
            des salariés qui ne resteront pas, qui ne seront pas engagés dans leur travail.
            </p>
            <h3>Un manque d’engagement des employés </h3>
            <p>Pendant le recrutement, cette personne avait l’air vraiment motivée, brillante et déterminée à être 
            un atout pour votre entreprise, la RH vous a venté ses mérites. Pourtant, 6 moins plus tard, vous 
            apprenez qu’elle est complétement désengagée de l’entreprise. Cet employé est connu pour arriver 
            en retard et pour faire le minimum dans ce qui lui est demandé. Vous voyez bien que la plupart de 
            vos employés manquent de dynamisme, qu’ils sont plutôt sombres quand vous les croisez dans les 
            couloirs. Alors que faire ?
            </p>
            <p>La première étape, c’est de soigner l’intégration de vos salariés. Une intégration superficielle ne suffit 
            pas. L’employé doit pouvoir développer, à travers un temps d’intégration réussi, un sentiment 
            d’appartenance à l’entreprise. Pour cela, il faut déjà avoir défini en amont une identité, une culture 
            d’entreprise humaine et agréable pour vos employés. Vous avez des valeurs. Si vous ne les avez pas 
            défini, ce n’est pas bon signe. C’est important de donner la priorité à l’édification de relations 
            authentiques entre collègues à travers des temps de séminaires et de teambuilding pensés pour cela. 
            Tout le monde n’est pas fait pour s’entendre et nos collègues ne sont pas forcément nos amis. Mais 
            nous sommes appelés à passer beaucoup de temps en présence de nos collègues, et je pense que 
            cette idée doit être présente même durant les phases de recrutement. Essayez, autant que possible, 
            de constituer une équipe dans laquelle les membres sont susceptibles de s’entendre. Une bonne 
            gestion et maitrise des ressources humaines peut permettre cela.
            </p>
            <h3>Un mauvais leadership </h3>
            <ol>
                <p>Quelques critères d’un mauvais leadership :  </p>
                <li>Vous n’arrivez pas à faire confiance  </li>
                <li>Vous n’incarnez pas du tout les valeurs que vous prônez</li>
                <li>Vous êtes impatients et fermé aux échanges</li>
                <li>Vous prenez pour acquis le bon travail fourni par les employés </li>
                <li>Vous ne prenez pas soin de vous </li>
                <li>Vous filtrez et cachez beaucoup d’informations cruciales concernant l’entreprise</li>
                <li>Vous n’écoutez pas les feedbacks et vous prenez pour de l’insubordination les employés 
                qui vous font remarqués des comportements déplaisants</li>
            </ol>
            <h3>Une ambiance à couteaux tirés</h3>
            <p>De nombreux conflits, un collègue toxique, des situations d’injustice à répétition, ce sont autant 
            de facteurs qui peuvent générer une mauvaise ambiance au sein de votre entreprise. </p>
            <p>Dans un premier temps, la bonne ambiance de votre entreprise doit être l’un de vos objectifs 
            prioritaires. En effet, une bonne ambiance permettra un meilleur engagement de vos salariés, un 
            meilleur engagement accroitra la productivité, la prise d’initiative et donc une bonne répartition 
            des tâches. Cela encouragera également vos salariés à développer leurs compétences et à rester 
            dans une optique de croissance et d’optimisation de leur temps de travail.</p>
            <p>Définissez des objectifs clairs et félicitez vos employés lorsqu’ils parviennent à les atteindre. Les 
            temps de reconnaissance et de félicitations ne sont pas à négliger. N’humiliez pas un salarié qui a 
            échoué, mais encouragez le à réfléchir à son expérience pour faire mieux la prochaine fois. Un 
            salarié qui se sent soutenu et épaulé dans l’épreuve est bien plus susceptible d’être loyal et 
            engagé par la suite.</p>
            <h3>Une mauvaise répartition des tâches </h3>
            <p>Que ce soit en concentrant la productivité là où le pouvoir est concentré ou bien en déléguant trop 
            de responsabilité sur un employé investi, la mauvaise répartition des tâches est dangereuse pour 
            l’équilibre de votre écosystème. Veillez à ce que vos managers répartissent les tâches équitablement 
            et que les bons éléments de vos équipes ne soient pas toujours ceux sollicités pour les tâches 
            ingrates ou difficiles. Encouragez à la création de dispositifs qui permettent l’équité, comme un 
            tableau de répartition des tâches, avec un suivi. Soyez le plus juste et le plus équitable possible, mais 
            laissez à vos employés le droit de venir en aide à leurs collègues pour réaliser ensemble les tâches les 
            moins attrayantes. Si l’initiative de s’entraider vient d’eux, elle sera bien plus valorisante que si elle 
            était imposée</p>
            <p class="conclusion">En conclusion, un bon leadership peut vraiment motiver les troupes et favoriser une ambiance 
            dynamique et enthousiaste, c’est un facteur essentiel surtout si vous désirez vivre une hyper-
            croissance. Investissez dans le bien-être de vos employés et dans des RH compétentes et vous ne 
            serez plus le/la seul/e à porter votre entreprise. </p>
        </div>
    </div>
  </main>
  
  <?php
  include_once "./src/include/footer.inc.php";
  include_once "./src/include/scriptCookie.inc.php";
  ?>

</body>

<script>
  function avoidJump() {
    var reg = /^[0-9a-zA-Z_.-]+[@][0-9a-zA-Z_.-]+([.][a-zA-Z]+){1,2}$/;
    v = document.getElementById('mce-EMAIL');
    if ((v.value == "") || (!reg.test(v.value))) {
      v.style.border = "2px solid red";
      return false;
    }
  }
</script>

</html>

</html>