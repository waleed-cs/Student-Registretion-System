<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../styles/HomePage.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500&display=swap" rel="stylesheet"> 
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <title>HomePage</title>
  </head>
  <body>
    <?php
    require('C:\xampp\htdocs\Task2\pages\header.html');
    ?>
    <i class="fas fa-chevron-up" onclick="scrollToTop()"></i>
    <main>
      <div class="text_parent">
        <div class="text">
          <p class="title-header">Student Managment System</p>
          <p class="pargraph">
            Where you can register your courses in one click
          </p>
        </div>
      </div>
      <div class="image">
        <svg width="641" height="594" viewBox="0 0 641 594" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="71.1747" y="36.045" width="569.825" height="353.345" fill="#9C9C9C"/>
          <path d="M566.348 29.2367H0.821286C0.604088 29.236 0.396058 29.1501 0.242741 28.9978C0.0894235 28.8456 0.00332642 28.6395 0.00332642 28.4246C0.00332642 28.2097 0.0894235 28.0035 0.242741 27.8513C0.396058 27.6991 0.604088 27.6132 0.821286 27.6124H566.348C566.565 27.6132 566.773 27.6991 566.927 27.8513C567.08 28.0035 567.166 28.2097 567.166 28.4246C567.166 28.6395 567.08 28.8456 566.927 28.9978C566.773 29.1501 566.565 29.236 566.348 29.2367Z" fill="#CACACA"/>
          <path d="M19.2951 17.8668C24.2815 17.8668 28.3238 13.8672 28.3238 8.93342C28.3238 3.99963 24.2815 0 19.2951 0C14.3087 0 10.2664 3.99963 10.2664 8.93342C10.2664 13.8672 14.3087 17.8668 19.2951 17.8668Z" fill="#9C9C9C"/>
          <path d="M50.4853 17.8668C55.4717 17.8668 59.514 13.8672 59.514 8.93342C59.514 3.99963 55.4717 0 50.4853 0C45.4988 0 41.4565 3.99963 41.4565 8.93342C41.4565 13.8672 45.4988 17.8668 50.4853 17.8668Z" fill="#BCBCBC"/>
          <path d="M81.6754 17.8668C86.6618 17.8668 90.7041 13.8672 90.7041 8.93342C90.7041 3.99963 86.6618 0 81.6754 0C76.689 0 72.6467 3.99963 72.6467 8.93342C72.6467 13.8672 76.689 17.8668 81.6754 17.8668Z" fill="#D9DCD6"/>
          <path d="M547.66 5.46434H525.498C525.064 5.46285 524.648 5.29107 524.341 4.98663C524.035 4.68218 523.863 4.26989 523.863 3.84008C523.863 3.41027 524.035 2.99798 524.341 2.69354C524.648 2.38909 525.064 2.21731 525.498 2.21583H547.66C547.876 2.21509 548.09 2.25656 548.29 2.33785C548.49 2.41915 548.671 2.53868 548.824 2.68957C548.977 2.84047 549.099 3.01977 549.182 3.2172C549.264 3.41463 549.307 3.62631 549.307 3.84008C549.307 4.05386 549.264 4.26553 549.182 4.46296C549.099 4.66039 548.977 4.83969 548.824 4.99059C548.671 5.14149 548.49 5.26102 548.29 5.34231C548.09 5.42361 547.876 5.46507 547.66 5.46434Z" fill="#3F3D56"/>
          <path d="M547.66 11.5553H525.498C525.064 11.5538 524.648 11.382 524.341 11.0776C524.035 10.7731 523.863 10.3608 523.863 9.93102C523.863 9.50121 524.035 9.08892 524.341 8.78448C524.648 8.48003 525.064 8.30826 525.498 8.30677H547.66C547.876 8.30603 548.09 8.3475 548.29 8.42879C548.49 8.51009 548.671 8.62962 548.824 8.78052C548.977 8.93142 549.099 9.11072 549.182 9.30815C549.264 9.50558 549.307 9.71725 549.307 9.93102C549.307 10.1448 549.264 10.3565 549.182 10.5539C549.099 10.7513 548.977 10.9306 548.824 11.0815C548.671 11.2324 548.49 11.352 548.29 11.4333C548.09 11.5146 547.876 11.556 547.66 11.5553Z" fill="#3F3D56"/>
          <path d="M547.66 17.6462H525.498C525.064 17.6447 524.648 17.473 524.341 17.1685C524.035 16.8641 523.863 16.4518 523.863 16.022C523.863 15.5922 524.035 15.1799 524.341 14.8754C524.648 14.571 525.064 14.3992 525.498 14.3977H547.66C547.876 14.397 548.09 14.4385 548.29 14.5198C548.49 14.601 548.671 14.7206 548.824 14.8715C548.977 15.0224 549.099 15.2017 549.182 15.3991C549.264 15.5965 549.307 15.8082 549.307 16.022C549.307 16.2357 549.264 16.4474 549.182 16.6448C549.099 16.8423 548.977 17.0216 548.824 17.1725C548.671 17.3234 548.49 17.4429 548.29 17.5242C548.09 17.6055 547.876 17.647 547.66 17.6462Z" fill="#3F3D56"/>
          <path d="M535.293 65.9641H17.037V337.645H535.293V65.9641Z" fill="#E7E7E7"/>
          <path d="M535.293 116.818V114.154H434.409V65.9641H431.716V114.154H330.832V65.9641H328.139V114.154H227.255V65.9641H224.563V114.154H123.678V65.9641H120.986V114.154H17.037V116.818H120.986V170.056H17.037V172.72H120.986V225.958H17.037V228.622H120.986V281.85H17.037V284.514H120.986V337.645H123.678V284.514H224.563V337.645H227.255V284.514H328.139V337.645H330.832V284.514H431.716V337.645H434.409V284.514H535.293V281.85H434.409V228.622H535.293V225.958H434.409V172.72H535.293V170.056H434.409V116.818L535.293 116.818ZM224.563 281.85H123.678V228.622H224.563V281.85ZM224.563 225.958H123.678V172.72H224.563V225.958ZM224.563 170.056H123.678V116.818H224.563V170.056ZM328.139 281.85H227.255V228.622H328.139V281.85ZM328.139 225.958H227.255V172.72H328.139V225.958ZM328.139 170.056H227.255V116.818H328.139V170.056ZM431.716 281.85H330.832V228.622H431.716V281.85ZM431.716 225.958H330.832V172.72H431.716V225.958ZM431.716 170.056H330.832V116.818H431.716V170.056Z" fill="#CDCDCD"/>
          <path d="M178.419 129.765H143.747V162.977H178.419V129.765Z" fill="#CACACA"/>
          <path d="M497.629 237.306H462.958V270.518H497.629V237.306Z" fill="#CACACA"/>
          <path d="M189.19 292.53H154.518V325.742H189.19V292.53Z" fill="#CACACA"/>
          <path d="M199.437 123.604H164.765V156.816H199.437V123.604Z" fill="#6C63FF"/>
          <path d="M362.421 261.659L403.565 225.389L415.703 231.34L366.356 282.551L362.421 261.659Z" fill="#FFB6B6"/>
          <path d="M408.98 237.855C414.388 237.855 418.772 233.517 418.772 228.167C418.772 222.816 414.388 218.478 408.98 218.478C403.572 218.478 399.188 222.816 399.188 228.167C399.188 233.517 403.572 237.855 408.98 237.855Z" fill="#FFB6B6"/>
          <path d="M323.909 534.658H314.173L309.542 497.503L323.91 497.504L323.909 534.658Z" fill="#FFB6B6"/>
          <path d="M326.392 543.995L295.001 543.994V543.601C295.001 540.395 296.288 537.32 298.58 535.053C300.871 532.786 303.979 531.513 307.219 531.512H307.22L326.392 531.513L326.392 543.995Z" fill="#2F2E41"/>
          <path d="M288.659 534.658H278.923L274.292 497.503L288.66 497.504L288.659 534.658Z" fill="#FFB6B6"/>
          <path d="M291.142 543.995L259.75 543.994V543.601C259.751 540.395 261.038 537.32 263.329 535.053C265.621 532.786 268.728 531.513 271.969 531.512H271.97L291.142 531.513L291.142 543.995Z" fill="#2F2E41"/>
          <path d="M332.086 322.273C332.086 322.273 356.565 320.335 348.731 362.964C340.898 405.593 324.672 522.203 324.672 522.203L309.962 524.204L301.271 368.648L294.696 524.204L275.987 522.203L257.669 355.213C257.669 355.213 251.787 341.787 257.665 332.514C263.544 323.242 332.086 322.273 332.086 322.273Z" fill="#41362E"/>
          <path d="M316.419 216.67L323.215 213.067C323.215 213.067 339.96 211.654 346.794 231.116L364.917 258.201L394.292 233.011L407.022 241.73L370 285.449L354.607 287.395L321.315 244.766L316.419 216.67Z" fill="#3F3D56"/>
          <path d="M291.757 138.065C263.833 138.065 256.017 168.416 256.017 185.538C256.017 202.66 272.018 200.07 291.757 200.07C300.229 200.07 308.008 200.544 314.133 199.734L317.079 192.616L319.45 198.514C324.478 196.686 327.497 192.971 327.497 185.538C327.497 168.415 320.642 138.065 291.757 138.065Z" fill="#2F2E41"/>
          <path d="M291.637 200.042C304.919 200.042 315.687 189.388 315.687 176.246C315.687 163.104 304.919 152.451 291.637 152.451C278.355 152.451 267.588 163.104 267.588 176.246C267.588 189.388 278.355 200.042 291.637 200.042Z" fill="#FFB6B6"/>
          <path d="M263.85 173.912H273.362L277.559 162.286L278.398 173.912H282.944L285.392 167.13L285.882 173.912H319.663C319.663 167.231 316.981 160.824 312.207 156.1C307.432 151.376 300.957 148.722 294.205 148.722H289.309C282.557 148.722 276.081 151.376 271.307 156.1C266.533 160.824 263.85 167.231 263.85 173.912Z" fill="#2F2E41"/>
          <path d="M424.647 191.422H389.975V224.634H424.647V191.422Z" fill="#6C63FF"/>
          <path d="M339.695 313.506C336.002 313.553 324.88 248.255 324.88 248.255L323.215 213.067L311.063 212.663V211.872C311.063 210.284 310.425 208.76 309.29 207.637C308.155 206.514 306.615 205.883 305.01 205.883H281.865C280.327 205.884 278.848 206.464 277.727 207.506C276.606 208.548 275.929 209.972 275.832 211.491L266.302 211.174L249.797 263.059C249.797 263.059 265.006 311.269 257.665 332.514C257.665 332.514 329.182 338.591 342.873 325.103C342.873 325.103 343.387 313.459 339.695 313.506Z" fill="#3F3D56"/>
          <path d="M270.398 217.638L266.302 211.174C266.302 211.174 252.975 207.914 247.488 216.652C242.002 225.389 225.875 272.733 225.875 272.733L242.521 278.546L261.41 252.343L270.398 217.638Z" fill="#3F3D56"/>
          <path d="M312.042 251.49H277.37V284.702H312.042V251.49Z" fill="#6C63FF"/>
          <path d="M250.769 263.494L238.706 262.231C237.945 263.839 237.563 265.597 237.589 267.372C237.615 269.148 238.05 270.894 238.859 272.479C239.668 274.064 240.831 275.446 242.259 276.521C243.688 277.596 245.345 278.335 247.105 278.682L294.833 288.107L289.855 272.936L250.769 263.494Z" fill="#FFB6B6"/>
          <path d="M294.977 288.282C300.385 288.282 304.769 283.945 304.769 278.594C304.769 273.243 300.385 268.905 294.977 268.905C289.569 268.905 285.185 273.243 285.185 278.594C285.185 283.945 289.569 288.282 294.977 288.282Z" fill="#FFB6B6"/>
          <path d="M282.753 288.577L246.392 280.356C243.758 279.753 241.325 278.487 239.329 276.681C237.334 274.875 235.843 272.59 235.002 270.047L233.533 265.563L242.97 258.216L286.203 270.172L282.753 288.577Z" fill="#3F3D56"/>
          <path d="M487.078 545.945H114.014C113.754 545.945 113.505 545.843 113.321 545.661C113.138 545.48 113.035 545.233 113.035 544.976C113.035 544.719 113.138 544.473 113.321 544.291C113.505 544.109 113.754 544.007 114.014 544.007H487.078C487.338 544.007 487.587 544.109 487.771 544.291C487.954 544.473 488.058 544.719 488.058 544.976C488.058 545.233 487.954 545.48 487.771 545.661C487.587 545.843 487.338 545.945 487.078 545.945Z" fill="#CACACA"/>
        </svg>
      </div>
    </main>
    <section id="aboutUS">
      <div>
      <h1>About us</h1>
      <p class="des">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque esse soluta et consectetur expedita officiis illum ducimus dolorem reiciendis, velit maiores ullam enim consequuntur laboriosam eveniet amet voluptatibus iusto excepturi!
      Temporibus voluptatum quam, doloremque voluptates eos accusantium aliquam iusto. At laboriosam officia eveniet non adipisci ipsa quidem ipsum quos sint sequi nobis reiciendis magnam aut, error aperiam dolore natus sit?
      Nostrum, nobis. Esse, porro asperiores. Aliquid numquam perspiciatis fuga voluptates recusandae ex, quas alias est magnam, eveniet nihil mollitia quo ratione, odit officiis hic accusantium? Magnam soluta quas aperiam reprehenderit?
      Labore sed, dolores earum mollitia aperiam laborum? Eveniet accusamus at earum ea culpa, debitis, dicta officia ducimus dolores sit repellat sunt distinctio quos, magni dolor quisquam pariatur blanditiis architecto cum?
      Iusto officia atque minima totam labore minus accusantium nobis, exercitationem dolore odio velit dicta tempora adipisci mollitia magni quaerat omnis rem cumque. Fugiat asperiores ullam deserunt alias sequi, voluptatem omnis.
      Dolores ad eaque nam esse veniam explicabo quis pariatur nesciunt, distinctio voluptates nobis illum consequatur error eligendi excepturi molestias optio debitis ut in enim hic obcaecati impedit perspiciatis eius? Molestias!
      Eaque ullam ipsa dolore enim est voluptatibus unde necessitatibus explicabo hic! Sed iste non alias maiores error asperiores expedita, earum deleniti suscipit dolor a accusantium. Temporibus aliquid animi saepe labore.</p>
      </div>
    </section>
    <section id="contactUs">
      <div class="cards">
        <div class="card1">
        <div class="info">
        <i class="fas fa-user"></i>
        <p class="name">Waleed Alharthi</p>
        </div>
        <div class="info">
        <i class="fas fa-envelope"></i>
        <p class="name">waleedmh.cs@gmail.com</p>
        </div>
        <div class="info">
        <i class="fas fa-phone-square-alt"></i>
        <p class="name">+966536847851</p>
        </div>
        </div>
        <div class="card1">
        <div class="info">
        <i class="fas fa-user"></i>
        <p class="name">Waleed Alharthi</p>
        </div>
        <div class="info">
        <i class="fas fa-envelope"></i>
        <p class="name">waleedmh.cs@gmail.com</p>
        </div>
        <div class="info">
        <i class="fas fa-phone-square-alt"></i>
        <p class="name">+966536847851</p>
        </div>
        </div>
        <div class="card1">
        <div class="info">
        <i class="fas fa-user"></i>
        <p class="name">Waleed Alharthi</p>
        </div>
        <div class="info">
        <i class="fas fa-envelope"></i>
        <p class="name">waleedmh.cs@gmail.com</p>
        </div>
        <div class="info">
        <i class="fas fa-phone-square-alt"></i>
        <p class="name">+966536847851</p>
        </div>
        </div>
      </div>
    </section>
    <script src="../js/homePage.js"></script>
  </body>
</html>
