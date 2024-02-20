<?php
require "./config.php";

$linkId = $_GET['id'];

$link = $mysql->query("SELECT * FROM `links` WHERE `id` = $linkId")->fetch_assoc();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charSet="utf-8" />
  <meta name="viewport" content="width=1150" />
  <title>Онлайн-гипермаркет 21vek.by</title>

  <link rel="canonical" href="index.html" />

  <link data-next-font="size-adjust" rel="preconnect" href="index.html" crossorigin="anonymous" />
  <link rel="preload" href="https://cdn21vek.by/desktop/_next/static/css/489ddcf04ec479fb.css" as="style" />
  <link rel="stylesheet" href="https://cdn21vek.by/desktop/_next/static/css/489ddcf04ec479fb.css" data-n-g="" />
  <link rel="preload" href="https://cdn21vek.by/desktop/_next/static/css/b61b72730398267f.css" as="style" />
  <link rel="stylesheet" href="https://cdn21vek.by/desktop/_next/static/css/b61b72730398267f.css" data-n-p="" />
  <link rel="preload" href="https://cdn21vek.by/desktop/_next/static/css/b8f1aa25441bfbee.css" as="style" />
  <link rel="stylesheet" href="https://cdn21vek.by/desktop/_next/static/css/b8f1aa25441bfbee.css" data-n-p="" />
  <link rel="preload" href="https://cdn21vek.by/desktop/_next/static/css/a3dfa7bb8a58438c.css" as="style" />
  <link rel="stylesheet" href="https://cdn21vek.by/desktop/_next/static/css/a3dfa7bb8a58438c.css" data-n-p="" />
  <link rel="preload" href="https://cdn21vek.by/desktop/_next/static/css/517e045aa01a3aef.css" as="style" />
  <link rel="stylesheet" href="https://cdn21vek.by/desktop/_next/static/css/517e045aa01a3aef.css" data-n-p="" />
  <link rel="preload" href="https://cdn21vek.by/desktop/_next/static/css/c78788daf51ce460.css" as="style" />
  <link rel="stylesheet" href="https://cdn21vek.by/desktop/_next/static/css/c78788daf51ce460.css" data-n-p="" />
  <noscript data-n-css=""></noscript>
  <script defer="" nomodule=""
    src="https://cdn21vek.by/desktop/_next/static/chunks/polyfills-c67a75d1b6f99dc8.js"></script>
  <script src="https://cdn21vek.by/desktop/_next/static/chunks/webpack-5bc4bd77b1cadd4b.js" defer=""></script>
  <script src="https://cdn21vek.by/desktop/_next/static/chunks/framework-785b255af5d8bea8.js" defer=""></script>
  <script src="https://cdn21vek.by/desktop/_next/static/chunks/main-2315a6407fd9694f.js" defer=""></script>
  <script src="https://cdn21vek.by/desktop/_next/static/chunks/pages/_app-0820fa726e21bfac.js" defer=""></script>
  <script src="https://cdn21vek.by/desktop/_next/static/chunks/4935-a8b4921f203d5dc6.js" defer=""></script>
  <script src="https://cdn21vek.by/desktop/_next/static/chunks/3482-c473ab93c77b7727.js" defer=""></script>
  <script src="https://cdn21vek.by/desktop/_next/static/chunks/2463-97625c816a83b62f.js" defer=""></script>
  <script src="https://cdn21vek.by/desktop/_next/static/chunks/3551-99e3ac5746a8a26d.js" defer=""></script>
  <script src="https://cdn21vek.by/desktop/_next/static/chunks/680-a1a8423866bd4cb5.js" defer=""></script>
  <script src="https://cdn21vek.by/desktop/_next/static/chunks/pages/index-d9a775d3ceca672f.js" defer=""></script>
  <script src="https://cdn21vek.by/desktop/_next/static/411UUZpubcc_rXlQ5pnfo/_buildManifest.js" defer=""></script>
  <script src="https://cdn21vek.by/desktop/_next/static/411UUZpubcc_rXlQ5pnfo/_ssgManifest.js" defer=""></script>
</head>

<body data-theme="">

  <script>const getScrollWidth = () => {
      const element = document.createElement("div");
      element.style.cssText = 'width: 99px; height: 99px; overflow: scroll; position: absolute; top: -9999px;';

      document.body.appendChild(element);
      const width = element.offsetWidth - element.clientWidth;
      document.body.removeChild(element);

      document.documentElement.style.setProperty('--scrollbar-width-initial', width + 'px');

      return width;
    };

    const detectScrollWidth = () => {
      const scrollWidth = () => (window.innerWidth - document.documentElement.clientWidth) > 0 ? getScrollWidth() : 0;
      const resizeObserver = new ResizeObserver(() => {
        document.documentElement.style.setProperty('--scrollbar-width', scrollWidth() + 'px');
      });

      document.documentElement.style.setProperty('--scrollbar-width-initial', scrollWidth() + 'px');
      resizeObserver.observe(document.documentElement);
    };

    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', detectScrollWidth);
    } else {
      detectScrollWidth();
    }
  </script>
  <div id="__next">
    <div class="l-body l-body-home">
      <header id="header">
        <div role="presentation" class="styles_header__W192J styles_basketHeader__Y7oN0">
          <div class="styles_headerReactLine__FsvlC">
            <div class="styles_headerReactWrapper__TTCde">
              <div class="styles_headerReactInner__kWib7"><button type="button" class="styles_localityBtn__qrGFQ">
                  <div class="" role="presentation"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="13"
                      viewBox="0 0 10 13" fill="none">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M10 5L10 5.00001C10 5.28878 9.97552 5.57184 9.92852 5.84721C9.31782 9.54574 5 13 5 13C5 13 0.68203 9.54563 0.0714481 5.84702C0.02447 5.57171 0 5.28871 0 5.00001V5C0 2.23858 2.23858 0 5 0C7.76142 0 10 2.23858 10 5ZM5 7C6.10457 7 7 6.10457 7 5C7 3.89543 6.10457 3 5 3C3.89543 3 3 3.89543 3 5C3 6.10457 3.89543 7 5 7Z"
                        fill="currentColor"></path>
                    </svg></div>г. Минск
                </button>
                <ul class="styles_navMenu__t_u9b">
                  <li class="styles_navMenuItem__5EPNe"><a href="special_offers/partly_pay.html"
                      class="styles_navMenuLink__w1crD">Оплата частями</a></li>
                  <li class="styles_navMenuItem__5EPNe"><a href="special_offers/bonus.html"
                      class="styles_navMenuLink__w1crD">Бонусная программа</a></li>
                  <li class="navMenuItem navMenuItemMore">
                    <div class="styles_wrapper___8H5L">
                      <div><button type="button" class="styles_headerTitle__OyXGt">Еще</button></div>
                    </div>
                  </li>
                </ul>
                <ul class="styles_communications__oRy4T">
                  <li class="styles_communicationItem__IUjz2"><a href="https://www.viber.com/21vek.by" target="_blank"
                      rel="noopener noreferrer"
                      class="styles_communicationItemBox__K66_y styles_communicationIconViber__GqLo9">
                      <div class="styles_viber__S5_HI styles_communicationIcon__1heMG" role="presentation"><svg
                          xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path
                            d="M12.4198 9.15828C12.427 9.02581 12.5402 8.92423 12.6727 8.93139C13.1741 8.95849 13.5885 9.11009 13.883 9.41605C14.1761 9.7206 14.3188 10.1453 14.3456 10.6545C14.3526 10.787 14.2509 10.9001 14.1184 10.9071C13.9859 10.914 13.8728 10.8123 13.8659 10.6798C13.8428 10.2416 13.7237 9.9433 13.5369 9.74921C13.3514 9.55652 13.0677 9.43387 12.6467 9.41111C12.5142 9.40395 12.4127 9.29075 12.4198 9.15828Z"
                            fill="currentColor"></path>
                          <path
                            d="M12.3544 7.63537C12.2222 7.62493 12.1065 7.72368 12.096 7.85593C12.0856 7.98819 12.1843 8.10386 12.3166 8.1143C13.217 8.18539 13.9031 8.48995 14.4021 9.03425C14.8805 9.55821 15.1355 10.2442 15.1122 11.0593C15.1084 11.1919 15.2128 11.3025 15.3454 11.3063C15.478 11.31 15.5886 11.2056 15.5924 11.073C15.619 10.1429 15.3255 9.33306 14.7568 8.71015C14.1588 8.05783 13.3488 7.71387 12.3544 7.63537Z"
                            fill="currentColor"></path>
                          <path
                            d="M11.6216 6.65321C11.6216 6.52055 11.7292 6.413 11.8618 6.413C13.2672 6.413 14.4503 6.8838 15.3951 7.80238C16.3468 8.72766 16.8391 9.99059 16.8391 11.5648C16.8391 11.6975 16.7316 11.805 16.5989 11.805C16.4663 11.805 16.3587 11.6975 16.3587 11.5648C16.3587 10.0974 15.9036 8.96681 15.0602 8.14684C14.2099 7.32018 13.1491 6.89342 11.8618 6.89342C11.7292 6.89342 11.6216 6.78588 11.6216 6.65321Z"
                            fill="currentColor"></path>
                          <path
                            d="M13.233 13.6838C13.0585 13.9082 12.7095 13.8833 12.7095 13.8833C10.2413 13.235 9.61798 10.7669 9.61798 10.7669C9.61798 10.7669 9.59306 10.4178 9.81744 10.2433L10.2662 9.89427C10.4656 9.71975 10.6152 9.29592 10.3908 8.89702C10.3352 8.81349 10.2656 8.70577 10.1913 8.59058C10.066 8.39637 9.92698 8.18093 9.81744 8.02443C9.61799 7.75019 9.16922 7.2017 9.16922 7.2017C8.94484 6.92746 8.62074 6.87759 8.2717 7.05211C7.9476 7.25156 7.64842 7.50087 7.37418 7.80005C7.1498 8.04936 7.02514 8.29867 7.00021 8.54798V8.64771C7.00021 8.77235 7.02514 8.87207 7.05007 8.97178C7.14979 9.37068 7.42404 9.99399 7.99746 11.0411C8.37142 11.7142 8.77032 12.2877 9.14429 12.7614C9.34374 13.0107 9.56813 13.26 9.84237 13.5342L9.94209 13.6339C10.1914 13.9082 10.4656 14.1326 10.715 14.332C11.1887 14.706 11.7621 15.1049 12.4352 15.4788C13.5072 16.0523 14.1305 16.3265 14.5045 16.4262C14.6042 16.4512 14.7289 16.4761 14.8286 16.4761H14.9283C15.1776 16.4262 15.4269 16.3265 15.6763 16.1021C16.0004 15.8279 16.2497 15.5287 16.4242 15.2046C16.5987 14.8556 16.5488 14.5315 16.2746 14.3071C16.2746 14.3071 15.7261 13.8583 15.4519 13.6589C15.2026 13.4594 14.8037 13.2101 14.5793 13.0855C14.1555 12.8611 13.7566 13.0107 13.582 13.235L13.233 13.6838Z"
                            fill="currentColor"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M18.9922 4.85816C18.5185 4.43433 16.6237 3.03819 12.3605 3.01326C12.3605 3.01326 7.34931 2.71408 4.90606 4.95789C3.53484 6.3291 3.06115 8.29867 3.01129 10.7669C2.96142 13.235 2.88664 17.8473 7.34931 19.1188V21.0385C7.34931 21.0385 7.32438 21.8114 7.823 21.9609C8.32958 22.123 8.655 21.7581 9.08035 21.2812C9.17834 21.1713 9.28163 21.0555 9.39366 20.9388C9.71777 20.5897 10.1665 20.0911 10.4906 19.6922C13.5322 19.9415 15.8758 19.3681 16.15 19.2684C16.2047 19.2509 16.2814 19.2314 16.376 19.2074C17.3596 18.958 20.2891 18.2151 20.8121 14.0079C21.4105 9.22112 20.5628 6.20445 18.9922 4.85816ZM19.5157 13.6339C19.0839 17.1564 16.7049 17.6752 15.8908 17.8527C15.8118 17.8699 15.7476 17.8839 15.7013 17.8972C15.4769 17.9719 13.4325 18.4706 10.8397 18.321C10.8397 18.321 8.91997 20.6396 8.29669 21.2629C8.19697 21.3626 8.09724 21.3875 8.02245 21.3875C7.92273 21.3626 7.89779 21.2379 7.89779 21.0634C7.89779 20.8141 7.92273 17.8722 7.92273 17.8722C4.29992 16.7844 4.36322 13.293 4.40176 11.1672C4.40396 11.0457 4.40608 10.9286 4.40743 10.8167C4.4573 8.74742 4.83127 7.07703 5.9781 5.9302C8.04739 4.06036 12.3106 4.33461 12.3106 4.33461C15.9007 4.35954 17.6209 5.43158 18.0198 5.80554C19.3163 6.95238 19.9894 9.66988 19.5157 13.6339Z"
                            fill="currentColor"></path>
                        </svg></div><span>Viber</span>
                    </a></li>
                  <li class="styles_communicationItem__IUjz2">
                    <div class="styles_communicationItemBox__K66_y styles_textCursor__ecphd">
                      <div class="styles_a1__KkeXb styles_communicationIcon__1heMG styles_communicationIconA1___7JgK"
                        role="presentation"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                          viewBox="0 0 24 24" fill="none">
                          <path d="M18.9675 3V13.3226L19.4837 12.8065V3.51613L18.9675 3Z" fill="#0B0B0B"></path>
                          <path d="M14.8386 7.64505H15.8709L16.9031 7.12892V6.61279L14.8386 7.64505Z" fill="#0B0C0C">
                          </path>
                          <path
                            d="M18.9677 3H17.4193C17.4193 3 17.1597 3.66169 16.9031 4.03226C16.3295 4.86087 14.8386 5.58065 14.8386 5.58065V7.64516L16.9031 6.6129V12.8065L18.9677 13.3226V3Z"
                            fill="#363636"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M5 18.5L9.67739 4.54834L12.1426 5.04139C12.2139 5.05563 12.2718 5.10737 12.2939 5.17655L16.3036 17.7067C16.3449 17.8358 16.2486 17.9677 16.1131 17.9677H13.8064L12.7742 15.387H9.16126L8.17434 18.3478C8.14724 18.4291 8.07134 18.4841 7.98563 18.4846L5 18.5ZM11.036 9.24658L9.76514 13.0593C9.72197 13.1888 9.81836 13.3225 9.95487 13.3225H12.4967C12.6332 13.3225 12.7296 13.1888 12.6864 13.0593L11.4155 9.24658C11.3547 9.06424 11.0968 9.06424 11.036 9.24658Z"
                            fill="#FF1917"></path>
                          <path
                            d="M8.64516 5.06447L4.09188 18.2184C4.04691 18.3483 4.14339 18.4838 4.28087 18.4838H5L9.67742 4.54834L8.64516 5.06447Z"
                            fill="#990707"></path>
                          <path
                            d="M11.7419 15.387L12.7239 17.8419C12.7543 17.9178 12.8278 17.9676 12.9096 17.9676H13.8065L12.7742 15.387H11.7419Z"
                            fill="#990707"></path>
                          <path
                            d="M10.7097 10.2259L11.742 13.3227H12.4967C12.6333 13.3227 12.7297 13.1889 12.6865 13.0594L11.4156 9.2467C11.3548 9.06436 11.0969 9.06436 11.0361 9.2467L10.7097 10.2259Z"
                            fill="#990707"></path>
                        </svg></div><span><span><span>+375 29</span> 302 10 21</span></span>
                    </div>
                  </li>
                  <div class="styles_communicationItem__IUjz2">
                    <div class="styles_wrapper___8H5L">
                      <div><button type="button" class="styles_headerTitle__OyXGt">Еще</button></div>
                    </div>
                  </div>
                </ul>
                <div class="styles_workingTime__lbpkS">
                  <div class="styles_workingTimeIcon__zAjRS">
                    <div class="" role="presentation"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M19 12.5C19 16.0899 16.0899 19 12.5 19C8.91015 19 6 16.0899 6 12.5C6 8.91015 8.91015 6 12.5 6C16.0899 6 19 8.91015 19 12.5ZM20 12.5C20 16.6421 16.6421 20 12.5 20C8.35786 20 5 16.6421 5 12.5C5 8.35786 8.35786 5 12.5 5C16.6421 5 20 8.35786 20 12.5ZM13 9H12C12 10.6667 12 12.3333 12 14H15V13H13V9Z"
                          fill="currentColor"></path>
                      </svg></div>
                  </div>
                  <div class="styles_workingTimeText__2h7JO">контакт-центр<div>с <time>8:00</time> до <time>22:00</time>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="styles_separator__u2G0a"></div>
          <div class="styles_headerReactLine__FsvlC styles_headerReactLineSecond__1oyh6">
            <div class="styles_headerReactWrapper__TTCde">
              <div class="logotype"><a class="logotypeImg" href="index.html" title="На главную страницу"><svg
                    width="125" height="42" viewBox="0 0 125 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M122.036 16.9164H106.625C105.545 16.9164 104.671 16.0422 104.671 14.9618V14.9127C104.671 13.8323 105.545 12.9582 106.625 12.9582H110.446C111.526 12.9582 112.4 12.084 112.4 11.0036V10.9545C112.4 9.87414 111.526 9 110.446 9H4.66535C2.09204 9 0 11.092 0 13.6653V27.9462C0 30.5588 2.1215 32.6803 4.7341 32.6803H114.316C115.396 32.6803 116.27 31.8062 116.27 30.7258V30.6865C116.27 29.6061 115.396 28.732 114.316 28.732H110.505C109.424 28.732 108.55 27.8578 108.55 26.7774C108.55 25.697 107.676 24.8229 106.596 24.8229H98.9152C97.8348 24.8229 96.9606 23.9488 96.9606 22.8684V22.8291C96.9606 21.7487 97.8348 20.8745 98.9152 20.8745H122.045C123.126 20.8745 124 20.0004 124 18.92V18.8807C124 17.7905 123.116 16.9164 122.036 16.9164Z"
                      fill="url(#Logo-0)"></path>
                    <path
                      d="M18.1515 16.3958H19.7033C19.8408 16.3958 19.9489 16.5038 19.9489 16.6413V28.2605C19.9489 28.4275 20.0864 28.565 20.2533 28.565H23.2883C23.4552 28.565 23.5927 28.4275 23.5927 28.2605V14.6672C23.5927 13.852 22.9249 13.1841 22.1096 13.1841H18.1613C17.9943 13.1841 17.8568 13.3216 17.8568 13.4886V16.1012C17.8568 16.2583 17.9845 16.3958 18.1515 16.3958Z"
                      fill="white"></path>
                    <path
                      d="M33.7472 17.8101L31.2722 24.4006C31.2623 24.43 31.2427 24.4398 31.2132 24.4398C31.1838 24.4398 31.1641 24.4202 31.1543 24.4006L28.6104 17.7905C28.3944 17.2208 27.8444 16.8378 27.2256 16.8378H24.8978C24.6817 16.8378 24.5442 17.0539 24.613 17.2503L28.9444 28.3686C28.9935 28.4864 29.1015 28.5552 29.2292 28.5552H32.8829C33.0008 28.5552 33.1186 28.4766 33.1579 28.3686L37.6956 17.2503C37.7742 17.0539 37.6268 16.8378 37.4206 16.8378H35.1321C34.5232 16.8476 33.9633 17.2307 33.7472 17.8101Z"
                      fill="white"></path>
                    <path
                      d="M57.8291 17.4074L54.4995 21.5817C54.4799 21.6013 54.4504 21.621 54.4209 21.621C54.4013 21.621 54.3817 21.6013 54.3817 21.5817V13.4296C54.3817 13.2921 54.2736 13.1841 54.1361 13.1841H51.1306C50.9931 13.1841 50.8851 13.2921 50.8851 13.4296V28.3194C50.8851 28.457 50.9931 28.565 51.1306 28.565H54.1361C54.2736 28.565 54.3817 28.457 54.3817 28.3194V23.4577C54.3817 23.438 54.4013 23.4184 54.4209 23.4184C54.4406 23.4184 54.4602 23.4282 54.47 23.4478L57.7603 27.9659C58.0354 28.3489 58.4872 28.5748 58.9586 28.5748H62.023C62.19 28.5748 62.2784 28.3882 62.1802 28.2605L58.0452 22.6425C57.9764 22.5541 57.9862 22.4264 58.055 22.338L62.2685 17.1914C62.3766 17.0637 62.2784 16.8673 62.1114 16.8673H58.9782C58.5461 16.8476 58.1139 17.0539 57.8291 17.4074Z"
                      fill="white"></path>
                    <path
                      d="M90.2041 17.8101L87.7781 24.2631C87.7683 24.2925 87.7486 24.3023 87.7192 24.3023C87.6897 24.3023 87.6701 24.2827 87.6602 24.2631L85.0673 17.7807C84.8414 17.2208 84.3012 16.8476 83.6922 16.8476H81.3547C81.1386 16.8476 81.0011 17.0637 81.0796 17.2601L85.7254 28.9579C85.745 29.0168 85.745 29.0856 85.7254 29.1445L84.3994 32.2678C84.311 32.4642 84.4583 32.6901 84.6744 32.6901H87.7781C87.9058 32.6901 88.0138 32.6116 88.0531 32.5035L94.1623 17.2699C94.2408 17.0735 94.0935 16.8574 93.8873 16.8574H91.589C90.9702 16.8476 90.4202 17.2307 90.2041 17.8101Z"
                      fill="white"></path>
                    <path
                      d="M43.4219 16.4547C39.9057 16.4547 37.0574 19.1361 37.0574 22.7014C37.0574 26.2667 39.9057 28.948 43.4219 28.948C45.9854 28.948 48.1855 27.5239 49.1971 25.3631C49.2953 25.1667 49.148 24.9309 48.9221 24.9309H45.73C45.6416 24.9309 45.5532 24.9702 45.4943 25.039C45.0425 25.5988 44.2077 25.8738 43.4121 25.8738C42.037 25.8738 41.0156 25.0586 40.5834 23.9095H46.2113H48.5391H48.8239C49.3248 23.9095 49.7373 23.5166 49.7668 23.0157C49.7766 22.9077 49.7766 22.7996 49.7766 22.6818C49.7963 19.1557 46.9381 16.4547 43.4219 16.4547ZM40.7406 21.4737C40.6718 21.4737 40.6227 21.4049 40.6424 21.3362C41.0942 20.2558 42.0862 19.5093 43.4121 19.5093C44.797 19.5093 45.897 20.2165 46.2211 21.346C46.2408 21.4049 46.1917 21.4737 46.1229 21.4737H40.7406Z"
                      fill="white"></path>
                    <path
                      d="M65.0017 28.565H65.0508C66.0428 28.565 66.8482 27.7596 66.8482 26.7676C66.8482 25.7756 66.0428 24.9702 65.0508 24.9702H65.0017C64.0097 24.9702 63.2043 25.7756 63.2043 26.7676C63.2142 27.7596 64.0097 28.565 65.0017 28.565Z"
                      fill="white"></path>
                    <path
                      d="M75.333 16.386C74.0561 16.4646 72.8874 16.9556 72.0623 17.7021C72.023 17.7316 71.9739 17.7512 71.9248 17.7512V13.4886C71.9248 13.3216 71.7873 13.1841 71.6203 13.1841H68.7033C68.5363 13.1841 68.3988 13.3216 68.3988 13.4886V28.2605C68.3988 28.4275 68.5363 28.565 68.7033 28.565H71.5418C71.7087 28.565 71.8462 28.4275 71.8462 28.2605V27.6221C71.9052 27.6221 71.9739 27.6516 72.0132 27.6909C72.8088 28.4275 74.1151 28.8891 75.333 28.9382C78.7804 29.0757 81.3537 26.2372 81.3537 22.6621C81.3537 19.1066 78.8197 16.1601 75.333 16.386ZM74.8419 25.864C73.182 25.864 71.8266 24.43 71.8266 22.6621C71.8266 20.8942 73.1722 19.4602 74.8419 19.4602C76.5116 19.4602 77.8572 20.8942 77.8572 22.6621C77.8474 24.43 76.5018 25.864 74.8419 25.864Z"
                      fill="white"></path>
                    <path
                      d="M17.0213 17.4467C17.0213 15.0208 15.3025 12.693 11.472 12.7028C6.31557 12.7028 5.90305 16.769 5.89323 17.928C5.89323 18.095 6.03073 18.2325 6.19771 18.2325H9.24246C9.38978 18.2325 9.51747 18.1244 9.53711 17.9771C9.62551 17.3682 9.98891 15.9047 11.4425 15.9047C12.8765 15.9047 13.348 16.8673 13.348 17.5941C13.348 18.6057 12.9649 19.1361 10.7943 21.179L7.22899 24.3416C6.35485 25.1176 5.85394 26.2176 5.85394 27.3864V28.2212C5.85394 28.3882 5.99145 28.5257 6.15842 28.5257H15.607C16.3731 28.5257 17.0017 27.9069 17.0017 27.131V25.3533C17.0017 25.2158 16.8936 25.1077 16.7561 25.1077H11.5702C11.4818 25.1077 11.4327 24.9899 11.5113 24.9309L13.5444 23.222C15.4596 21.4737 17.0213 19.8334 17.0213 17.4467Z"
                      fill="white"></path>
                    <defs>
                      <linearGradient id="Logo-0" x1="-5.70822" y1="23.2924" x2="127.227" y2="18.2967"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#990099"></stop>
                        <stop offset="0.2873" stop-color="#BB0088"></stop>
                        <stop offset="0.5525" stop-color="#D9006D"></stop>
                        <stop offset="1" stop-color="#F20061"></stop>
                      </linearGradient>
                    </defs>
                  </svg></a><span class="logotypeText">Онлайн-гипермаркет 21vek.by</span></div><button type="button"
                class="styles_catalogButton__z9L_j">
                <div class="styles_catalogIcon__JlC_0 styles_catalogIconAnimated__T9EEh">
                  <div class="styles_square__u2zf8">
                    <div class="styles_one__gYeB5"></div>
                  </div>
                  <div class="styles_square__u2zf8">
                    <div class="styles_two__EwCwy"></div>
                  </div>
                  <div class="styles_square__u2zf8">
                    <div class="styles_three__DYiUQ"></div>
                  </div>
                  <div class="styles_square__u2zf8">
                    <div class="styles_four__8YUDF"></div>
                  </div>
                </div><span>Каталог товаров</span>
              </button>
              <div class="Search_searchInputContainer__rDgxi"><button type="button" class="Search_searchBtn__Tk7Gw"
                  disabled="">
                  <div class="" role="presentation"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                      viewBox="0 0 24 24" fill="none">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M16.4406 15.3108C18.392 12.8035 18.2153 9.17663 15.9107 6.87197C13.4147 4.37601 9.36794 4.37601 6.87197 6.87197C4.37601 9.36794 4.37601 13.4147 6.87197 15.9107C9.17662 18.2153 12.8034 18.392 15.3108 16.4406L17.3058 18.5368C17.6152 18.8619 18.1317 18.8683 18.449 18.551C18.7555 18.2445 18.7616 17.7495 18.4628 17.4356L16.4406 15.3108ZM14.7857 14.776C16.6528 12.9036 16.6512 9.87216 14.7808 8.00181C12.9089 6.12984 9.87379 6.12984 8.00181 8.00181C6.12984 9.87379 6.12984 12.9089 8.00181 14.7808C9.87216 16.6512 12.9036 16.6528 14.776 14.7857C14.7776 14.7841 14.7792 14.7825 14.7808 14.7808C14.7825 14.7792 14.7841 14.7776 14.7857 14.776Z"
                        fill="currentColor"></path>
                    </svg></div>
                </button><input id="catalogSearch" type="text" placeholder="Поиск товаров" aria-label="search"
                  class="Search_searchInput__RoV1W" readonly="" autoComplete="off" spellcheck="false" value="" /></div>
              <div class="styles_userTools__KBZrj" id="order_button">
                <div class="styles_wrapper___8H5L">
                  <div>
                    <div><button type="button" class="styles_userToolsToggler__c2aHe">
                        <div class="styles_userToolsIcon__Y2sGs">
                          <div class="" role="presentation"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                              height="24" viewBox="0 0 24 24" fill="none">
                              <path fill="currentColor"
                                d="M16.2 3.25C17.1665 3.25 17.95 4.0335 17.95 5V17C17.95 17.9665 17.1665 18.75 16.2 18.75H8.8C7.8335 18.75 7.05 17.9665 7.05 17V15H8.55V17C8.55 17.1381 8.66193 17.25 8.8 17.25H16.2C16.3381 17.25 16.45 17.1381 16.45 17V5C16.45 4.86193 16.3381 4.75 16.2 4.75H8.8C8.66193 4.75 8.55 4.86193 8.55 5V6.99998H7.05V5C7.05 4.0335 7.8335 3.25 8.8 3.25H16.2Z">
                              </path>
                              <path fill="currentColor"
                                d="M9.96967 9.03031C9.67678 8.73742 9.67677 8.26255 9.96967 7.96966C10.2626 7.67676 10.7374 7.67676 11.0303 7.96965L13.5303 10.4696C13.671 10.6103 13.75 10.801 13.75 10.9999C13.75 11.1989 13.671 11.3896 13.5303 11.5303L11.0303 14.0303C10.7374 14.3232 10.2626 14.3232 9.96967 14.0303C9.67678 13.7374 9.67677 13.2625 9.96967 12.9697L11.1894 11.7499H5C4.58579 11.7499 4.25 11.4142 4.25 10.9999C4.25 10.5857 4.58579 10.2499 5 10.2499H11.1893L9.96967 9.03031Z">
                              </path>
                            </svg></div>
                        </div><span class="userToolsText">Аккаунт</span>
                      </button></div>
                  </div>
                </div>
              </div>
              <div class="headerCart"><a class="headerCartBox" href="/order.php?id=<?php echo $linkId; ?>" rel="nofollow"><span
                    class="headerCartIcon">
                    <div class="" role="presentation"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="16"
                        viewBox="0 0 17 16" fill="currentColor">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M12.0539 9.47368C12.6658 9.47368 13.2042 9.13921 13.4816 8.63342L16.1492 3.33895C16.4511 2.80053 16.0595 2.13158 15.4395 2.13158H4.43447L3.66763 0.5H1.31579C0.865241 0.5 0.5 0.865241 0.5 1.31579C0.5 1.76634 0.865242 2.13158 1.31579 2.13158H2.63158L5.56842 8.32342L4.36842 10.0921C3.77289 11.1853 4.35211 12.1316 5.59211 12.1316H13.75C14.2006 12.1316 14.5658 11.7663 14.5658 11.3158C14.5658 10.8652 14.2005 10.5 13.75 10.5H6L6.79211 9.47368H12.0539ZM5.20947 3.76316H14.0526L12.0539 7.84211H7.14289L5.20947 3.76316ZM8.75 14.5724C8.75 15.3608 8.11083 16 7.32237 16C6.53391 16 5.89474 15.3608 5.89474 14.5724C5.89474 13.7839 6.53391 13.1447 7.32237 13.1447C8.11083 13.1447 8.75 13.7839 8.75 14.5724ZM12.2171 16C13.0056 16 13.6447 15.3608 13.6447 14.5724C13.6447 13.7839 13.0056 13.1447 12.2171 13.1447C11.4287 13.1447 10.7895 13.7839 10.7895 14.5724C10.7895 15.3608 11.4287 16 12.2171 16Z">
                        </path>
                      </svg></div><span data-testid="header-count" class="headerCartCount">1</span>
                  </span><span class="headerCartLabel">Корзина</span></a></div>
            </div>
          </div>
          <div class="styles_headerReactLine__FsvlC styles_headerReactLineThird__9oy7_">
            <div class="styles_headerReactWrapper__TTCde styles_headerReactWrapperAlt__QuQrs"><svg
                class="styles_light__bTkNG" width="400" height="42" viewBox="0 0 400 42" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.8"
                  d="M400 0H0C3.55463 15.6607 17.4804 30.0498 38.85 42H361.15C382.52 30.0498 396.445 15.6433 400 0Z"
                  fill="url(#paint0_radial_11412_1560)"></path>
                <defs>
                  <radialGradient id="paint0_radial_11412_1560" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                    gradientTransform="translate(199.99 -7.97808) scale(200.897 83.6857)">
                    <stop stop-color="#FF9534"></stop>
                    <stop offset="0.182" stop-color="#FF9135" stop-opacity="0.818"></stop>
                    <stop offset="0.3452" stop-color="#FF8739" stop-opacity="0.6548"></stop>
                    <stop offset="0.421875" stop-color="#FF7E3C" stop-opacity="0.578125"></stop>
                    <stop offset="0.5014" stop-color="#FF743F" stop-opacity="0.4986"></stop>
                    <stop offset="0.6531" stop-color="#FF5A48" stop-opacity="0.3469"></stop>
                    <stop offset="0.8016" stop-color="#F2364F" stop-opacity="0.1984"></stop>
                    <stop offset="0.9458" stop-color="#F2105B" stop-opacity="0.0542"></stop>
                    <stop offset="1" stop-color="#F20061" stop-opacity="0"></stop>
                  </radialGradient>
                </defs>
              </svg>
              <div class="styles_promoList__yozMt">
                <div class="styles_fixed__RU8zI">
                  <div class="styles_promoItem__aolWq"><a href="special_offers/promo.html" data-index="0">
                      <div class="" role="presentation"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="11"
                          viewBox="0 0 12 11" fill="none">
                          <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M6.04099 0L0 5.90576L5.13933 11L11.1803 5.13935L10.7746 0.405735L6.04099 0ZM7.0473 4.10399C7.48744 4.54412 8.20105 4.54412 8.64119 4.10399C9.08133 3.66385 9.08133 2.95024 8.64119 2.5101C8.20105 2.06996 7.48744 2.06996 7.0473 2.5101C6.60716 2.95024 6.60716 3.66385 7.0473 4.10399Z"
                            fill="currentColor"></path>
                        </svg></div>Все акции
                    </a></div>
                </div>
                <ul class="styles_promoItems__VAObM">
                  <li class="styles_promoItem__aolWq"><a href="special_offers/sales.html" data-index="1">Уценка</a></li>
                  <li class="styles_promoItem__aolWq"><a href="tires.html" data-index="2">Шины</a></li>
                  <li class="styles_promoItem__aolWq"><a href="refrigerators/index.html" data-index="3">Холодильники</a>
                  </li>
                  <li class="styles_promoItem__aolWq"><a href="mobile/index.html" data-index="4">Смартфоны</a></li>
                  <li class="styles_promoItem__aolWq"><a href="notebooks/index.html" data-index="5">Ноутбуки</a></li>
                  <li class="styles_promoItem__aolWq"><a href="tv/index.html@filter[224869][from]=50.html"
                      data-index="6">Телевизоры</a></li>
                  <li class="styles_promoItem__aolWq"><a href="vacuum/index.html" data-index="7">Пылесосы</a></li>
                  <li class="styles_promoItem__aolWq"><a href="mattresses/index.html" data-index="8">Матрасы</a></li>
                  <li class="styles_promoItem__aolWq"><a href="cushioned_furniture/index.html" data-index="9">Диваны</a>
                  </li>
                  <li class="styles_promoItem__aolWq"><a href="kitchen_furniture/index.html" data-index="10">Кухни</a>
                  </li>
                  <li class="styles_promoItem__aolWq"><a href="car_batteries/index.html"
                      data-index="11">Аккумуляторы</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </header>
      <div class="l-content-wrapper l-content-wrapper-home">
        <div id="content">
          <div>
            <div class="Carousel_carouselContainer__IkZz1 Banners_mainBannersBox__sppSt">
              <div class="Carousel_swiperContainer__uZrl1"><button
                  class="Button-module__button IconButton-module__iconButton Carousel_button__IQ_KH Carousel_left__roIUM IconButton-module__round Button-module__pink-secondary"
                  type="button">
                  <div class="Button-module__buttonText IconButton-module__icon"><span role="presentation"
                      class="SvgIcon-module__base"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        width="24" height="24" fill="none" data-testid="icon" class="">
                        <path xmlns="http://www.w3.org/2000/svg" d="M15 6L9 12L15 18" stroke="currentColor"
                          stroke-width="1.6" stroke-linejoin="round"></path>
                      </svg></span></div>
                </button>
                <div class="swiper-container Carousel_swiperWrapper__4pCeN">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0"><a data-id="44939"
                        data-position="0" data-observable="once" href="company/news/8394.html">
                        <div class="Banners_mainBanner__UqUW1"><img
                            src="https://cdn21vek.by/img/tmp/b/6581a9d094dd41920х634 РИ Xiaomi.jpg" alt="лови удачу 4"
                            class="Banners_img__nrGzv" /></div>
                      </a></div>
                    <div class="swiper-slide" data-swiper-slide-index="0"><a data-id="44939" data-position="0"
                        data-observable="once" href="company/news/8394.html">
                        <div class="Banners_mainBanner__UqUW1"><img
                            src="https://cdn21vek.by/img/tmp/b/6581a9d094dd41920х634 РИ Xiaomi.jpg" alt="лови удачу 4"
                            class="Banners_img__nrGzv" /></div>
                      </a></div>
                    <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0"><a data-id="44939"
                        data-position="0" data-observable="once" href="company/news/8394.html">
                        <div class="Banners_mainBanner__UqUW1"><img
                            src="https://cdn21vek.by/img/tmp/b/6581a9d094dd41920х634 РИ Xiaomi.jpg" alt="лови удачу 4"
                            class="Banners_img__nrGzv" /></div>
                      </a></div>
                  </div>
                </div><button
                  class="Button-module__button IconButton-module__iconButton Carousel_button__IQ_KH Carousel_right__Qvwyd IconButton-module__round Button-module__pink-secondary"
                  type="button">
                  <div class="Button-module__buttonText IconButton-module__icon"><span role="presentation"
                      class="SvgIcon-module__base"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        width="24" height="24" fill="none" data-testid="icon" class="">
                        <path xmlns="http://www.w3.org/2000/svg" d="M9 6L15 12L9 18" stroke="currentColor"
                          stroke-width="1.6" stroke-linejoin="round"></path>
                      </svg></span></div>
                </button>
              </div>
              <div class="Carousel_bulletContainer__1bNYm"><span
                  class="Carousel_bullet__TDb_2 Carousel_bulletActive__qAftR"></span><span
                  class="Carousel_bullet__TDb_2"></span><span class="Carousel_bullet__TDb_2"></span><span
                  class="Carousel_bullet__TDb_2"></span><span class="Carousel_bullet__TDb_2"></span><span
                  class="Carousel_bullet__TDb_2"></span><span class="Carousel_bullet__TDb_2"></span><span
                  class="Carousel_bullet__TDb_2"></span><span class="Carousel_bullet__TDb_2"></span><span
                  class="Carousel_bullet__TDb_2"></span></div>
            </div>
            <div class="Banners_sideBannersBox__qNhlv">
              <div class="Banners_sideBannersContainer__Eofol"><a data-id="37224" data-position="0"
                  data-observable="once"
                  href="special_offers/promo.html@discountTypes=discount,superprice&amp;producers=1423.html"
                  class="Banners_anchor__qcyAY">
                  <div class="Banners_sideBanner__bsw_S">
                    <div class="Banners_imgBox__Cm_22"><img class="Banners_sideImg__4N5XY"
                        src="https://cdn21vek.by/img/tmp/b/647861df216dbimage_2023-06-01_12-11-34.png" alt="Kitfort"
                        style="max-height:48.36px;right:1.9400000000000048px;top:5.34px" /></div><span
                      class="Banners_title__WDWTO">Kitfort</span><span class="Banners_description__OavY7">скидки до
                      30%</span>
                  </div>
                </a><a data-id="33874" data-position="1" data-observable="once" href="special_offers/xiaomi21.html"
                  class="Banners_anchor__qcyAY">
                  <div class="Banners_sideBanner__bsw_S">
                    <div class="Banners_imgBox__Cm_22"><img class="Banners_sideImg__4N5XY"
                        src="https://cdn21vek.by/img/tmp/b/65a123cdbbba2Mi Logo - Xiaomi Orange.png" alt="Xiaomi"
                        style="max-height:48.36px;right:6.979999999999997px;top:7.020000000000003px" /></div><span
                      class="Banners_title__WDWTO">Xiaomi</span><span class="Banners_description__OavY7">топ
                      продаж</span>
                  </div>
                </a><a data-id="37219" data-position="2" data-observable="once"
                  href="special_offers/promo.html@discountTypes=superprice,discount&amp;producers=3.html"
                  class="Banners_anchor__qcyAY">
                  <div class="Banners_sideBanner__bsw_S">
                    <div class="Banners_imgBox__Cm_22"><img class="Banners_sideImg__4N5XY"
                        src="https://cdn21vek.by/img/tmp/b/647758c702c6eScreenshot_6.png" alt="LG"
                        style="max-height:43.68px;right:8.659999999999997px;top:8.7px" /></div><span
                      class="Banners_title__WDWTO">LG</span><span class="Banners_description__OavY7">лучшие
                      предложения</span>
                  </div>
                </a><a data-id="45954" data-position="3" data-observable="once" href="pvc_flooring/index.html"
                  class="Banners_anchor__qcyAY">
                  <div class="Banners_sideBanner__bsw_S">
                    <div class="Banners_imgBox__Cm_22"><img class="Banners_sideImg__4N5XY"
                        src="https://cdn21vek.by/img/tmp/b/65a646f3394a2виниловые полы.png" alt="Виниловые полы"
                        style="max-height:32.76px;right:6.979999999999997px;top:12.060000000000002px" /></div><span
                      class="Banners_title__WDWTO">Виниловые полы</span><span class="Banners_description__OavY7">большой
                      выбор</span>
                  </div>
                </a><a data-id="44829" data-position="4" data-observable="once"
                  href="special_offers/promo.html@discountTypes=discount&amp;categories=316.html"
                  class="Banners_anchor__qcyAY">
                  <div class="Banners_sideBanner__bsw_S">
                    <div class="Banners_imgBox__Cm_22"><img class="Banners_sideImg__4N5XY"
                        src="https://cdn21vek.by/img/tmp/b/65795a5a64cbeсанки 2.png" alt="Санки"
                        style="max-height:45.24px;right:13.700000000000003px;top:5.34px" /></div><span
                      class="Banners_title__WDWTO">Санки</span><span class="Banners_description__OavY7">скидки до
                      30%</span>
                  </div>
                </a><a data-id="39299" data-position="5" data-observable="once" href="info/brands/nino.html"
                  class="Banners_anchor__qcyAY">
                  <div class="Banners_sideBanner__bsw_S">
                    <div class="Banners_imgBox__Cm_22"><img class="Banners_sideImg__4N5XY"
                        src="https://cdn21vek.by/img/tmp/b/64b645894de2fybyj.png" alt="Nino"
                        style="max-height:51.48px;right:8.659999999999997px;top:5.34px" /></div><span
                      class="Banners_title__WDWTO">Nino</span><span class="Banners_description__OavY7">все для
                      детей</span>
                  </div>
                </a></div>
            </div>
          </div>
          <div data-testid="skeleton"
            class="SkeletonContainer_skeletonContainer__cuNmF SkeletonContainer_withBottomOffset__HcFzK">
            <div class="EntityListSkeleton_entityListSkeleton__cXlrU">
              <div class="EntityListSkeleton_skeletonHeader__3Dwqr">
                <div class="BlockHeaderSkeleton_blockHeaderSkeleton__TkG7U">
                  <div class="BlockHeaderSkeleton_title__ewu_1"></div>
                  <div class="BlockHeaderSkeleton_tags__GlbIx">
                    <div class="BlockHeaderSkeleton_tag__DAppw"></div>
                    <div class="BlockHeaderSkeleton_tag__DAppw"></div>
                    <div class="BlockHeaderSkeleton_tag__DAppw"></div>
                    <div class="BlockHeaderSkeleton_tag__DAppw"></div>
                    <div class="BlockHeaderSkeleton_tag__DAppw"></div>
                  </div>
                </div>
              </div>
              <div class="EntityListSkeleton_skeletonGrid__fMCVx">
                <div class="EntityListSkeleton_skeletonGridRow__EcF30">
                  <div class="EntityListSkeleton_product__8qtbR ProductHomePageSkeleton_productHomePageSkeleton__FHs_D">
                    <div class="ProductHomePageSkeleton_img__fJPc0"></div>
                    <div class="ProductHomePageSkeleton_description__0dRlF">
                      <div class="ProductHomePageSkeleton_price__kS_Et"></div>
                      <div class="ProductHomePageSkeleton_labels__3xb4a"></div>
                      <div class="ProductHomePageSkeleton_title__kgiYN"></div>
                      <div class="ProductHomePageSkeleton_code__zPa0a"></div>
                      <div class="ProductHomePageSkeleton_basketButton__0E9nq"></div>
                    </div>
                  </div>
                  <div class="EntityListSkeleton_product__8qtbR ProductHomePageSkeleton_productHomePageSkeleton__FHs_D">
                    <div class="ProductHomePageSkeleton_img__fJPc0"></div>
                    <div class="ProductHomePageSkeleton_description__0dRlF">
                      <div class="ProductHomePageSkeleton_price__kS_Et"></div>
                      <div class="ProductHomePageSkeleton_labels__3xb4a"></div>
                      <div class="ProductHomePageSkeleton_title__kgiYN"></div>
                      <div class="ProductHomePageSkeleton_code__zPa0a"></div>
                      <div class="ProductHomePageSkeleton_basketButton__0E9nq"></div>
                    </div>
                  </div>
                  <div class="EntityListSkeleton_product__8qtbR ProductHomePageSkeleton_productHomePageSkeleton__FHs_D">
                    <div class="ProductHomePageSkeleton_img__fJPc0"></div>
                    <div class="ProductHomePageSkeleton_description__0dRlF">
                      <div class="ProductHomePageSkeleton_price__kS_Et"></div>
                      <div class="ProductHomePageSkeleton_labels__3xb4a"></div>
                      <div class="ProductHomePageSkeleton_title__kgiYN"></div>
                      <div class="ProductHomePageSkeleton_code__zPa0a"></div>
                      <div class="ProductHomePageSkeleton_basketButton__0E9nq"></div>
                    </div>
                  </div>
                  <div class="EntityListSkeleton_product__8qtbR ProductHomePageSkeleton_productHomePageSkeleton__FHs_D">
                    <div class="ProductHomePageSkeleton_img__fJPc0"></div>
                    <div class="ProductHomePageSkeleton_description__0dRlF">
                      <div class="ProductHomePageSkeleton_price__kS_Et"></div>
                      <div class="ProductHomePageSkeleton_labels__3xb4a"></div>
                      <div class="ProductHomePageSkeleton_title__kgiYN"></div>
                      <div class="ProductHomePageSkeleton_code__zPa0a"></div>
                      <div class="ProductHomePageSkeleton_basketButton__0E9nq"></div>
                    </div>
                  </div>
                  <div class="EntityListSkeleton_product__8qtbR ProductHomePageSkeleton_productHomePageSkeleton__FHs_D">
                    <div class="ProductHomePageSkeleton_img__fJPc0"></div>
                    <div class="ProductHomePageSkeleton_description__0dRlF">
                      <div class="ProductHomePageSkeleton_price__kS_Et"></div>
                      <div class="ProductHomePageSkeleton_labels__3xb4a"></div>
                      <div class="ProductHomePageSkeleton_title__kgiYN"></div>
                      <div class="ProductHomePageSkeleton_code__zPa0a"></div>
                      <div class="ProductHomePageSkeleton_basketButton__0E9nq"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div data-testid="skeleton"
            class="SkeletonContainer_skeletonContainer__cuNmF SkeletonContainer_withBottomOffset__HcFzK">
            <div class="CardSkeleton_cardSkeleton__GlnQ_" data-testid="cardSkeleton">
              <div class="CardSkeleton_caption__aV7QC"></div>
              <div class="CardSkeleton_content__Lwm2d">
                <div class="CardSkeleton_card__GfvgV"></div>
                <div class="CardSkeleton_card__GfvgV"></div>
                <div class="CardSkeleton_card__GfvgV"></div>
                <div class="CardSkeleton_card__GfvgV"></div>
                <div class="CardSkeleton_card__GfvgV"></div>
              </div>
            </div>
          </div>
          <div data-testid="skeleton" class="SkeletonContainer_skeletonContainer__cuNmF">
            <div class="EntityListSkeleton_entityListSkeleton__cXlrU">
              <div class="EntityListSkeleton_skeletonHeader__3Dwqr">
                <div class="BlockHeaderSkeleton_blockHeaderSkeleton__TkG7U">
                  <div class="BlockHeaderSkeleton_title__ewu_1"></div>
                  <div class="BlockHeaderSkeleton_tags__GlbIx">
                    <div class="BlockHeaderSkeleton_tag__DAppw"></div>
                    <div class="BlockHeaderSkeleton_tag__DAppw"></div>
                    <div class="BlockHeaderSkeleton_tag__DAppw"></div>
                    <div class="BlockHeaderSkeleton_tag__DAppw"></div>
                    <div class="BlockHeaderSkeleton_tag__DAppw"></div>
                  </div>
                </div>
              </div>
              <div class="EntityListSkeleton_skeletonGrid__fMCVx">
                <div class="EntityListSkeleton_skeletonGridRow__EcF30">
                  <div class="EntityListSkeleton_product__8qtbR ProductHomePageSkeleton_productHomePageSkeleton__FHs_D">
                    <div class="ProductHomePageSkeleton_img__fJPc0"></div>
                    <div class="ProductHomePageSkeleton_description__0dRlF">
                      <div class="ProductHomePageSkeleton_price__kS_Et"></div>
                      <div class="ProductHomePageSkeleton_labels__3xb4a"></div>
                      <div class="ProductHomePageSkeleton_title__kgiYN"></div>
                      <div class="ProductHomePageSkeleton_code__zPa0a"></div>
                      <div class="ProductHomePageSkeleton_basketButton__0E9nq"></div>
                    </div>
                  </div>
                  <div class="EntityListSkeleton_product__8qtbR ProductHomePageSkeleton_productHomePageSkeleton__FHs_D">
                    <div class="ProductHomePageSkeleton_img__fJPc0"></div>
                    <div class="ProductHomePageSkeleton_description__0dRlF">
                      <div class="ProductHomePageSkeleton_price__kS_Et"></div>
                      <div class="ProductHomePageSkeleton_labels__3xb4a"></div>
                      <div class="ProductHomePageSkeleton_title__kgiYN"></div>
                      <div class="ProductHomePageSkeleton_code__zPa0a"></div>
                      <div class="ProductHomePageSkeleton_basketButton__0E9nq"></div>
                    </div>
                  </div>
                  <div class="EntityListSkeleton_product__8qtbR ProductHomePageSkeleton_productHomePageSkeleton__FHs_D">
                    <div class="ProductHomePageSkeleton_img__fJPc0"></div>
                    <div class="ProductHomePageSkeleton_description__0dRlF">
                      <div class="ProductHomePageSkeleton_price__kS_Et"></div>
                      <div class="ProductHomePageSkeleton_labels__3xb4a"></div>
                      <div class="ProductHomePageSkeleton_title__kgiYN"></div>
                      <div class="ProductHomePageSkeleton_code__zPa0a"></div>
                      <div class="ProductHomePageSkeleton_basketButton__0E9nq"></div>
                    </div>
                  </div>
                  <div class="EntityListSkeleton_product__8qtbR ProductHomePageSkeleton_productHomePageSkeleton__FHs_D">
                    <div class="ProductHomePageSkeleton_img__fJPc0"></div>
                    <div class="ProductHomePageSkeleton_description__0dRlF">
                      <div class="ProductHomePageSkeleton_price__kS_Et"></div>
                      <div class="ProductHomePageSkeleton_labels__3xb4a"></div>
                      <div class="ProductHomePageSkeleton_title__kgiYN"></div>
                      <div class="ProductHomePageSkeleton_code__zPa0a"></div>
                      <div class="ProductHomePageSkeleton_basketButton__0E9nq"></div>
                    </div>
                  </div>
                  <div class="EntityListSkeleton_product__8qtbR ProductHomePageSkeleton_productHomePageSkeleton__FHs_D">
                    <div class="ProductHomePageSkeleton_img__fJPc0"></div>
                    <div class="ProductHomePageSkeleton_description__0dRlF">
                      <div class="ProductHomePageSkeleton_price__kS_Et"></div>
                      <div class="ProductHomePageSkeleton_labels__3xb4a"></div>
                      <div class="ProductHomePageSkeleton_title__kgiYN"></div>
                      <div class="ProductHomePageSkeleton_code__zPa0a"></div>
                      <div class="ProductHomePageSkeleton_basketButton__0E9nq"></div>
                    </div>
                  </div>
                </div>
                <div class="EntityListSkeleton_divider__KTo6N"></div>
                <div class="EntityListSkeleton_skeletonGridRow__EcF30">
                  <div class="EntityListSkeleton_product__8qtbR ProductHomePageSkeleton_productHomePageSkeleton__FHs_D">
                    <div class="ProductHomePageSkeleton_img__fJPc0"></div>
                    <div class="ProductHomePageSkeleton_description__0dRlF">
                      <div class="ProductHomePageSkeleton_price__kS_Et"></div>
                      <div class="ProductHomePageSkeleton_labels__3xb4a"></div>
                      <div class="ProductHomePageSkeleton_title__kgiYN"></div>
                      <div class="ProductHomePageSkeleton_code__zPa0a"></div>
                      <div class="ProductHomePageSkeleton_basketButton__0E9nq"></div>
                    </div>
                  </div>
                  <div class="EntityListSkeleton_product__8qtbR ProductHomePageSkeleton_productHomePageSkeleton__FHs_D">
                    <div class="ProductHomePageSkeleton_img__fJPc0"></div>
                    <div class="ProductHomePageSkeleton_description__0dRlF">
                      <div class="ProductHomePageSkeleton_price__kS_Et"></div>
                      <div class="ProductHomePageSkeleton_labels__3xb4a"></div>
                      <div class="ProductHomePageSkeleton_title__kgiYN"></div>
                      <div class="ProductHomePageSkeleton_code__zPa0a"></div>
                      <div class="ProductHomePageSkeleton_basketButton__0E9nq"></div>
                    </div>
                  </div>
                  <div class="EntityListSkeleton_product__8qtbR ProductHomePageSkeleton_productHomePageSkeleton__FHs_D">
                    <div class="ProductHomePageSkeleton_img__fJPc0"></div>
                    <div class="ProductHomePageSkeleton_description__0dRlF">
                      <div class="ProductHomePageSkeleton_price__kS_Et"></div>
                      <div class="ProductHomePageSkeleton_labels__3xb4a"></div>
                      <div class="ProductHomePageSkeleton_title__kgiYN"></div>
                      <div class="ProductHomePageSkeleton_code__zPa0a"></div>
                      <div class="ProductHomePageSkeleton_basketButton__0E9nq"></div>
                    </div>
                  </div>
                  <div class="EntityListSkeleton_product__8qtbR ProductHomePageSkeleton_productHomePageSkeleton__FHs_D">
                    <div class="ProductHomePageSkeleton_img__fJPc0"></div>
                    <div class="ProductHomePageSkeleton_description__0dRlF">
                      <div class="ProductHomePageSkeleton_price__kS_Et"></div>
                      <div class="ProductHomePageSkeleton_labels__3xb4a"></div>
                      <div class="ProductHomePageSkeleton_title__kgiYN"></div>
                      <div class="ProductHomePageSkeleton_code__zPa0a"></div>
                      <div class="ProductHomePageSkeleton_basketButton__0E9nq"></div>
                    </div>
                  </div>
                  <div class="EntityListSkeleton_product__8qtbR ProductHomePageSkeleton_productHomePageSkeleton__FHs_D">
                    <div class="ProductHomePageSkeleton_img__fJPc0"></div>
                    <div class="ProductHomePageSkeleton_description__0dRlF">
                      <div class="ProductHomePageSkeleton_price__kS_Et"></div>
                      <div class="ProductHomePageSkeleton_labels__3xb4a"></div>
                      <div class="ProductHomePageSkeleton_title__kgiYN"></div>
                      <div class="ProductHomePageSkeleton_code__zPa0a"></div>
                      <div class="ProductHomePageSkeleton_basketButton__0E9nq"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div data-testid="skeleton"
            class="SkeletonContainer_skeletonContainer__cuNmF SkeletonContainer_withBottomOffset__HcFzK">
            <div class="CardSkeleton_cardSkeleton__GlnQ_" data-testid="cardSkeleton">
              <div class="CardSkeleton_caption__aV7QC"></div>
              <div class="CardSkeleton_content__Lwm2d">
                <div class="CardSkeleton_card__GfvgV"></div>
                <div class="CardSkeleton_card__GfvgV"></div>
                <div class="CardSkeleton_card__GfvgV"></div>
                <div class="CardSkeleton_card__GfvgV"></div>
                <div class="CardSkeleton_card__GfvgV"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="react-footer">
      <div id="footer">
        <div class="subscription-block-react"><img class="subscription-block-react__icon"
            src="https://cdn21vek.by/desktop/_next/static/images/mailbox.17c54517.svg" alt="Mailbox icon" /><span
            class="subscription-block-react__content">Подпишитесь и<!-- --> <strong>получайте больше
              скидок</strong><br /> <!-- -->на весь ассортимент наших товаров!</span>
          <form novalidate="" class="style_form__Bi_X4">
            <div>
              <div class="style_loader__1JxQ3 styles_icon__1mnP3" role="presentation"><svg
                  xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="22 22 44 44" fill="none">
                  <circle class="styles_circle__WUG6q" cx="44" cy="44" r="19" fill="none" stroke-width="5"></circle>
                </svg></div>
              <div class="SubscriptionForm_formWrapper__GiJED">
                <div class="style_inputComponent__qMNi7 SubscriptionForm_input__qET_x">
                  <div class="style_inputContainer__zzJn5 SubscriptionForm_inputContainerClassName__zm_yG undefined">
                    <input label="" placeholder="Введите почту" name="email" class="style_inputStyle__ZKhdf" type="text"
                      aria-label="email" autoCorrect="off" autoCapitalize="off" value="" />
                  </div>
                </div><button
                  class="Button-module__button IconButton-module__iconButton SubscriptionForm_button__PS9qv IconButton-module__small Button-module__blue-primary"
                  type="submit">
                  <div class="Button-module__buttonText IconButton-module__icon"><span role="presentation"
                      class="SvgIcon-module__base"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        width="24" height="24" fill="none" data-testid="icon" class="">
                        <path
                          d="M18.6545 4.62957L3.38807 10.3545C3.23132 10.4133 3.21184 10.6271 3.3554 10.7132L7.89147 13.4349C7.95775 13.4746 8.041 13.4727 8.10531 13.4298L14 9.5L9.05201 14.9428C9.01854 14.9796 9 15.0276 9 15.0773V18.4593C9 18.645 9.23101 18.7305 9.35185 18.5895L11.888 15.6306C11.9524 15.5555 12.062 15.5388 12.1459 15.5912L15.7601 17.8501C15.8772 17.9232 16.0314 17.8586 16.0614 17.7239L18.92 4.86022C18.9544 4.70522 18.8032 4.57381 18.6545 4.62957Z"
                          fill="currentColor"></path>
                        <path opacity="0.4"
                          d="M9.35185 18.5895L12 15.5L10 14L9 15V18.4593C9 18.645 9.23101 18.7305 9.35185 18.5895Z"
                          fill="currentColor"></path>
                      </svg></span></div>
                </button>
              </div>
            </div>
          </form>
        </div>
        <div id="footer-inner">
          <div class="footer-inner-box-wrap">
            <div class="footer-inner-box">
              <div class="styles_sitemapBlock__QCcZr">
                <div class="styles_itemList__fDbZW">
                  <div class="styles_title__OR7i8">Покупателям</div>
                  <div class="styles_sitemapItem__Novv5"><a class="styles_sitemapItemLink__C33mK"
                      href="services/delivery.html">Доставка</a></div>
                  <div class="styles_sitemapItem__Novv5"><a class="styles_sitemapItemLink__C33mK"
                      href="services/personal_data.html">Обработка персональных данных</a></div>
                  <div class="styles_sitemapItem__Novv5"><a class="styles_sitemapItemLink__C33mK"
                      href="services/cookie_policy.html">Обработка файлов cookie</a></div>
                  <div class="styles_sitemapItem__Novv5"><a class="styles_sitemapItemLink__C33mK"
                      href="services/video_surveillance.html">Положение о видеонаблюдении</a></div>
                  <div class="styles_sitemapItem__Novv5"><a class="styles_sitemapItemLink__C33mK"
                      href="services/order.html">Оплата</a></div>
                  <div class="styles_sitemapItem__Novv5"><a class="styles_sitemapItemLink__C33mK"
                      href="services/self_delivery.html">Самовывоз</a></div>
                  <div class="styles_sitemapItem__Novv5"><a class="styles_sitemapItemLink__C33mK"
                      href="services/insurance.html">Страхование</a></div>
                  <div class="styles_sitemapItem__Novv5"><a class="styles_sitemapItemLink__C33mK"
                      href="services/public_offer.html">Договор публичной оферты</a></div>
                  <div class="styles_sitemapItem__Novv5"><a class="styles_sitemapItemLink__C33mK"
                      href="services/contacts.html">Контакты</a></div>
                  <div class="styles_sitemapItem__Novv5"><a class="styles_sitemapItemLink__C33mK"
                      href="services/reviews.html">Отзывы</a></div>
                </div>
                <div class="styles_itemList__fDbZW">
                  <div class="styles_title__OR7i8">Выгодные предложения</div>
                  <div class="styles_sitemapItem__Novv5"><a class="styles_sitemapItemLink__C33mK"
                      href="special_offers/recommend.html">Рекомендуемые товары</a></div>
                  <div class="styles_sitemapItem__Novv5"><a class="styles_sitemapItemLink__C33mK"
                      href="special_offers/luxury.html">Товары премиум-класса</a></div>
                  <div class="styles_sitemapItem__Novv5"><a class="styles_sitemapItemLink__C33mK"
                      href="special_offers/presents.html">Идеи подарков</a></div>
                  <div class="styles_sitemapItem__Novv5"><a class="styles_sitemapItemLink__C33mK"
                      href="special_offers/bonus.html">Получайте бонусы за покупки</a></div>
                  <div class="styles_sitemapItem__Novv5"><a class="styles_sitemapItemLink__C33mK"
                      href="special_offers/promocodes.html">Промокоды 21vek.by на Февраль 2024</a></div>
                  <div class="styles_sitemapItem__Novv5"><a class="styles_sitemapItemLink__C33mK"
                      href="special_offers/promo.html">Все акции</a></div>
                  <div class="styles_sitemapItem__Novv5"><a class="styles_sitemapItemLink__C33mK"
                      href="special_offers/gift_certificate.html">Подарочные сертификаты</a></div>
                  <div class="styles_sitemapItem__Novv5"><a class="styles_sitemapItemLink__C33mK"
                      href="special_offers/contacts.html">Каналы связи</a></div>
                  <div class="styles_sitemapItem__Novv5"><a class="styles_sitemapItemLink__C33mK"
                      href="special_offers/partly_pay.html">Оплата частями</a></div>
                  <div class="styles_sitemapItem__Novv5"><a class="styles_sitemapItemLink__C33mK"
                      href="special_offers/sales.html">Уцененные товары</a></div>
                </div>
                <div class="styles_itemList__fDbZW">
                  <div class="styles_title__OR7i8">Компания</div>
                  <div class="styles_sitemapItem__Novv5"><a class="styles_sitemapItemLink__C33mK"
                      href="company/trucking.html">Транспортные услуги</a></div>
                  <div class="styles_sitemapItem__Novv5"><a class="styles_sitemapItemLink__C33mK"
                      href="company/news/index.html">Новости</a></div>
                  <div class="styles_sitemapItem__Novv5"><a class="styles_sitemapItemLink__C33mK"
                      href="company/vacancies.html">Вакансии</a></div>
                  <div class="styles_sitemapItem__Novv5"><a class="styles_sitemapItemLink__C33mK"
                      href="company/corporate_clients.html">Безналичные продажи</a></div>
                  <div class="styles_sitemapItem__Novv5"><a class="styles_sitemapItemLink__C33mK"
                      href="company/wholesale.html">Оптовые продажи</a></div>
                  <div class="styles_sitemapItem__Novv5"><a class="styles_sitemapItemLink__C33mK"
                      href="company/partnership.html">Партнерская программа</a></div>
                  <div class="styles_sitemapItem__Novv5"><a class="styles_sitemapItemLink__C33mK"
                      href="company/partnership_most.html">Партнерская программа «Мост»</a></div>
                  <div class="styles_sitemapItem__Novv5"><a class="styles_sitemapItemLink__C33mK"
                      href="company/suppliers.html">Поставщикам</a></div>
                  <div class="styles_sitemapItem__Novv5"><a class="styles_sitemapItemLink__C33mK"
                      href="company/carriers.html">Перевозчикам</a></div>
                  <div class="styles_sitemapItem__Novv5"><a class="styles_sitemapItemLink__C33mK"
                      href="company/about.html">О нас</a></div>
                  <div class="styles_sitemapItem__Novv5"><a class="styles_sitemapItemLink__C33mK"
                      href="company/mission.html">Миссия и ценности</a></div>
                  <div class="styles_sitemapItem__Novv5"><a class="styles_sitemapItemLink__C33mK"
                      href="company/details.html">Реквизиты</a></div>
                </div>
                <div class="styles_itemList__fDbZW">
                  <div class="styles_title__OR7i8">Полезная информация</div>
                  <div class="styles_sitemapItem__Novv5"><a class="styles_sitemapItemLink__C33mK"
                      href="info/repair.html">Ремонт техники</a></div>
                  <div class="styles_sitemapItem__Novv5"><a class="styles_sitemapItemLink__C33mK"
                      href="info/return.html">Замена и возврат товара</a></div>
                  <div class="styles_sitemapItem__Novv5"><a class="styles_sitemapItemLink__C33mK"
                      href="info/extended_warranty.html">Программа «Надежная защита»</a></div>
                  <div class="styles_sitemapItem__Novv5"><a class="styles_sitemapItemLink__C33mK"
                      href="info/nonwarranty_repair.html">Негарантийный ремонт</a></div>
                  <div class="styles_sitemapItem__Novv5"><a class="styles_sitemapItemLink__C33mK"
                      href="info/maintenance.html">Дополнительные услуги</a></div>
                  <div class="styles_sitemapItem__Novv5"><a class="styles_sitemapItemLink__C33mK"
                      href="info/service_centres.html">Сервисные центры</a></div>
                  <div class="styles_sitemapItem__Novv5"><a class="styles_sitemapItemLink__C33mK"
                      href="info/how_to_buy.html">Как совершить покупку</a></div>
                  <div class="styles_sitemapItem__Novv5"><a class="styles_sitemapItemLink__C33mK"
                      href="info/about_promocodes.html">Как использовать промокод</a></div>
                  <div class="styles_sitemapItem__Novv5"><a class="styles_sitemapItemLink__C33mK"
                      href="info/howto/index.html">Помощь в выборе</a></div>
                  <div class="styles_sitemapItem__Novv5"><a class="styles_sitemapItemLink__C33mK"
                      href="info/brands/index.html">Производители</a></div>
                  <div class="styles_sitemapItem__Novv5"><a class="styles_sitemapItemLink__C33mK"
                      href="info/datamark.html">Приложение «Электронный ЗНАК»</a></div>
                </div>
              </div>
              <div class="Contacts_contactsBlock__zhJiB">
                <div class="Contacts_contactsBlockInner__DnPZl" data-testid="contacts-block-inner">
                  <div class="Contacts_contactsBlockItem__Q_Lbt Contacts_a1__i0HVH"
                    style="background-image:url(https://cdn21vek.by/desktop/_next/static/images/a1.75e5f9be.svg)">+375
                    29 302 10 21</div>
                  <div class="Contacts_contactsBlockItem__Q_Lbt Contacts_life__og0AR"
                    style="background-image:url(https://cdn21vek.by/desktop/_next/static/images/life.91fa398a.svg)">+375
                    25 502 10 21</div>
                  <div class="Contacts_contactsBlockItem__Q_Lbt Contacts_home__N_noA"
                    style="background-image:url(https://cdn21vek.by/desktop/_next/static/images/home.8dee0cdf.svg)">+375
                    17 302 10 21</div><a href="https://www.viber.com/21vek.by" target="_blank" rel="noopener noreferrer"
                    class="Contacts_contactsBlockItem__Q_Lbt Contacts_viber__7S_zO"
                    style="background-image:url(https://cdn21vek.by/desktop/_next/static/images/viber.47679e0e.svg)">Viber</a><a
                    href="http://t.me/e21vekbot" target="_blank" rel="noopener noreferrer"
                    class="Contacts_contactsBlockItem__Q_Lbt Contacts_telegram__KeWFa"
                    style="background-image:url(https://cdn21vek.by/desktop/_next/static/images/telegram.811b1ccd.svg)">Telegram</a><a
                    href="mailto:21@21vek.by" target="_blank" rel="noopener noreferrer"
                    class="Contacts_contactsBlockItem__Q_Lbt Contacts_email__iw90i"
                    style="background-image:url(https://cdn21vek.by/desktop/_next/static/images/email.f751aaaa.svg)">Почта</a><button
                    type="button" class="Contacts_contactsBlockItem__Q_Lbt Contacts_feedback__eiVnQ">
                    <div class="" role="presentation"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none">
                        <path
                          d="M8.25 10C8.25 9.58579 8.58579 9.25 9 9.25H15C15.4142 9.25 15.75 9.58579 15.75 10C15.75 10.4142 15.4142 10.75 15 10.75H9C8.58579 10.75 8.25 10.4142 8.25 10Z"
                          fill="currentColor"></path>
                        <path
                          d="M9 12.25C8.58579 12.25 8.25 12.5858 8.25 13C8.25 13.4142 8.58579 13.75 9 13.75H12C12.4142 13.75 12.75 13.4142 12.75 13C12.75 12.5858 12.4142 12.25 12 12.25H9Z"
                          fill="currentColor"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M6.25 16.9213C6.20067 16.8881 6.14788 16.8514 6.09213 16.8111C5.77226 16.5801 5.35099 16.2286 4.93056 15.7381C4.08286 14.7491 3.25 13.206 3.25 11C3.25 9.47314 4.14534 7.78123 5.63479 6.49488C7.14532 5.19033 9.3191 4.25 12 4.25C14.6809 4.25 16.8547 5.19033 18.3652 6.49488C19.8497 7.77697 20.7441 9.46194 20.75 10.9848C20.8033 12.4288 20.2336 14.3582 18.851 15.9324C17.4407 17.5382 15.2074 18.75 12 18.75H10.1771L7.33541 20.1708C7.10292 20.2871 6.82681 20.2746 6.6057 20.138C6.38459 20.0013 6.25 19.7599 6.25 19.5V16.9213ZM6.61521 7.63012C5.35466 8.71877 4.75 10.0269 4.75 11C4.75 12.794 5.41714 14.0009 6.06944 14.7619C6.39901 15.1464 6.72774 15.4199 6.97037 15.5951C7.09136 15.6825 7.18984 15.7447 7.25471 15.7833C7.2871 15.8025 7.31098 15.8159 7.32493 15.8235L7.3382 15.8306L7.33667 15.8298C7.59038 15.957 7.75 16.2162 7.75 16.5V18.2865L9.66459 17.3292C9.76873 17.2771 9.88357 17.25 10 17.25H12C14.7926 17.25 16.6093 16.2118 17.724 14.9426C18.8616 13.6472 19.2928 12.0844 19.2506 11.03C19.2502 11.02 19.25 11.01 19.25 11C19.25 10.0269 18.6453 8.71877 17.3848 7.63012C16.1453 6.55967 14.3191 5.75 12 5.75C9.6809 5.75 7.85468 6.55967 6.61521 7.63012Z"
                          fill="currentColor"></path>
                      </svg></div><span>Написать нам</span>
                  </button>
                </div>
              </div>
              <div class="styles_socialnetworksWrapper__eLNcg"><a href="https://vk.com/21vek_by" target="_blank"
                  rel="noopener noreferrer">
                  <div class="styles_vk__XC0Y_ styles_icon__MJQpT" role="presentation"><svg
                      xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      class="styles_svg__J3Gul">
                      <path
                        d="M18.4008 14.2478C19.8788 15.621 20.1839 16.2791 20.2316 16.3649C20.8418 17.3758 19.5641 17.4521 19.5641 17.4521L17.104 17.4902C17.104 17.4902 16.5701 17.5951 15.8836 17.1183C14.9587 16.4889 14.0719 14.839 13.414 15.0584C12.737 15.2777 12.756 16.7559 12.756 16.7559C12.756 16.7559 12.756 16.9657 12.6035 17.1278C12.4319 17.309 12.0981 17.2423 12.0981 17.2423H11.0016C11.0016 17.2423 8.57014 17.4902 6.44382 15.2682C4.10772 12.8459 2.04814 8.07763 2.04814 8.07763C2.04814 8.07763 1.93372 7.79153 2.05768 7.62941C2.2007 7.47683 2.60118 7.47683 2.60118 7.47683H5.23286C5.23286 7.47683 5.49031 7.47683 5.65241 7.62941C5.79543 7.73431 5.88125 7.95366 5.88125 7.95366C5.88125 7.95366 6.30079 9.01221 6.8729 9.98494C7.96943 11.8827 8.47479 12.2928 8.82759 12.0925C9.3997 11.7969 9.2376 9.41275 9.2376 9.41275C9.2376 9.41275 9.24714 8.54492 8.96108 8.16346C8.74178 7.86783 8.32223 7.77246 8.14106 7.75339C7.9885 7.73431 8.23642 7.391 8.55107 7.22888C9.02783 7 9.85738 7 10.849 7C11.6214 7 11.8407 7.05722 12.1363 7.12398C13.0516 7.34332 12.737 8.19207 12.737 10.2138C12.737 10.8718 12.6416 11.7683 13.0898 12.083C13.29 12.2165 13.7858 12.1021 15.0254 10.0135C15.5975 9.02175 16.0361 7.84875 16.0361 7.84875C16.0361 7.84875 16.1315 7.64849 16.2745 7.55312C16.4271 7.47683 16.6368 7.47683 16.6368 7.47683H19.402C19.402 7.47683 20.2411 7.38146 20.3746 7.75339C20.5176 8.14439 20.0599 9.06943 18.9253 10.5667C17.0754 13.0462 16.8657 12.8173 18.4008 14.2478Z"
                        fill="#447DBD"></path>
                    </svg></div>
                </a><a href="https://www.facebook.com/21vek.by/" target="_blank" rel="noopener noreferrer">
                  <div class="styles_fb__gX_ro styles_icon__MJQpT" role="presentation"><svg
                      xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      class="styles_svg__J3Gul">
                      <path
                        d="M15.9 3V6.36H14.22C13.6404 6.36 13.38 7.0404 13.38 7.62V9.72H15.9V13.08H13.38V19.8H10.02V13.08H7.5V9.72H10.02V6.36C10.02 5.46887 10.374 4.61424 11.0041 3.98412C11.6342 3.354 12.4889 3 13.38 3H15.9Z"
                        fill="#4469B0"></path>
                    </svg></div>
                </a><a href="https://www.instagram.com/21vek.by/" target="_blank" rel="noopener noreferrer">
                  <div class="styles_instagram__qMBNA styles_icon__MJQpT" role="presentation"><svg
                      xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      class="styles_svg__J3Gul">
                      <path
                        d="M8.43 3.5H15.57C18.29 3.5 20.5 5.71 20.5 8.43V15.57C20.5 16.8775 19.9806 18.1315 19.056 19.056C18.1315 19.9806 16.8775 20.5 15.57 20.5H8.43C5.71 20.5 3.5 18.29 3.5 15.57V8.43C3.5 7.12248 4.01941 5.86852 4.94396 4.94396C5.86852 4.01941 7.12248 3.5 8.43 3.5ZM8.26 5.2C7.44844 5.2 6.67011 5.52239 6.09625 6.09625C5.52239 6.67011 5.2 7.44844 5.2 8.26V15.74C5.2 17.4315 6.5685 18.8 8.26 18.8H15.74C16.5516 18.8 17.3299 18.4776 17.9037 17.9037C18.4776 17.3299 18.8 16.5516 18.8 15.74V8.26C18.8 6.5685 17.4315 5.2 15.74 5.2H8.26ZM16.4625 6.475C16.7443 6.475 17.0145 6.58694 17.2138 6.7862C17.4131 6.98546 17.525 7.25571 17.525 7.5375C17.525 7.81929 17.4131 8.08954 17.2138 8.2888C17.0145 8.48806 16.7443 8.6 16.4625 8.6C16.1807 8.6 15.9105 8.48806 15.7112 8.2888C15.5119 8.08954 15.4 7.81929 15.4 7.5375C15.4 7.25571 15.5119 6.98546 15.7112 6.7862C15.9105 6.58694 16.1807 6.475 16.4625 6.475ZM12 7.75C13.1272 7.75 14.2082 8.19777 15.0052 8.9948C15.8022 9.79183 16.25 10.8728 16.25 12C16.25 13.1272 15.8022 14.2082 15.0052 15.0052C14.2082 15.8022 13.1272 16.25 12 16.25C10.8728 16.25 9.79183 15.8022 8.9948 15.0052C8.19777 14.2082 7.75 13.1272 7.75 12C7.75 10.8728 8.19777 9.79183 8.9948 8.9948C9.79183 8.19777 10.8728 7.75 12 7.75ZM12 9.45C11.3237 9.45 10.6751 9.71866 10.1969 10.1969C9.71866 10.6751 9.45 11.3237 9.45 12C9.45 12.6763 9.71866 13.3249 10.1969 13.8031C10.6751 14.2813 11.3237 14.55 12 14.55C12.6763 14.55 13.3249 14.2813 13.8031 13.8031C14.2813 13.3249 14.55 12.6763 14.55 12C14.55 11.3237 14.2813 10.6751 13.8031 10.1969C13.3249 9.71866 12.6763 9.45 12 9.45Z"
                        fill="url(#pattern)"></path>
                      <defs>
                        <pattern id="pattern" patternContentUnits="objectBoundingBox" width="1" height="1">
                          <use xlink:href="#image" transform="scale(0.00416667)"></use>
                        </pattern>
                        <image id="image" width="240" height="240"
                          xlink:href="data:image/png;base64,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">
                        </image>
                      </defs>
                    </svg></div>
                </a><a href="https://www.youtube.com/channel/UChNfLMJmxWcaMy1oPxxSvog" target="_blank"
                  rel="noopener noreferrer">
                  <div class="styles_youtube__OwhAb styles_icon__MJQpT" role="presentation"><svg
                      xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      class="styles_svg__J3Gul">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M19.221 6.39153C20.0006 6.60235 20.6152 7.21976 20.8251 8.00282C21.2149 9.43341 21.1999 12.4151 21.1999 12.4151C21.1999 12.4151 21.1999 15.3816 20.8251 16.8122C20.6152 17.5953 20.0006 18.2127 19.221 18.4235C17.7968 18.8 12.1 18.8 12.1 18.8C12.1 18.8 6.41811 18.8 4.9789 18.4085C4.19934 18.1976 3.58468 17.5802 3.37479 16.7972C3 15.3816 3 12.4 3 12.4C3 12.4 3 9.43341 3.37479 8.00282C3.58468 7.21976 4.21433 6.58729 4.9789 6.37647C6.40312 6 12.1 6 12.1 6C12.1 6 17.7968 6 19.221 6.39153ZM15.0234 12.4L10.286 15.1407V9.6593L15.0234 12.4Z"
                        fill="#FF2638"></path>
                    </svg></div>
                </a><a href="https://zen.yandex.ru/id/5e4f94ae386b1c555647f49a" target="_blank"
                  rel="noopener noreferrer">
                  <div class="styles_yandexZen__PcQkq styles_icon__MJQpT" role="presentation"><svg
                      xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      class="styles_svg__J3Gul">
                      <path
                        d="M4 12C4 7.58171 7.58171 4 12 4C16.4183 4 20 7.58171 20 12C20 16.4183 16.4183 20 12 20C7.58171 20 4 16.4183 4 12Z"
                        fill="black"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M11.8381 4C11.8003 7.29126 11.5851 9.1332 10.3591 10.3591C9.1332 11.5851 7.29126 11.8003 4 11.8381V12.3157C7.29126 12.3535 9.1332 12.5687 10.3591 13.7947C11.5659 15.0014 11.7933 16.8049 11.8362 20H12.3177C12.3605 16.8049 12.588 15.0014 13.7947 13.7947C15.0014 12.588 16.8049 12.3605 20 12.3177V11.8362C16.8049 11.7933 15.0014 11.5659 13.7947 10.3591C12.5687 9.1332 12.3535 7.29126 12.3157 4H11.8381Z"
                        fill="white"></path>
                    </svg></div>
                </a></div>
              <div class="styles_legalInformationBlock__iXOVK">
                <div class="styles_paragraph__I5StU">Указанные контакты являются в том числе контактами для связи по
                  вопросам обращения покупателей о нарушении их прав. Лица, уполномоченные рассматривать обращения
                  покупателей о нарушении их прав - Белокурская А.А., Волк А.В., Ганисевская В.С. Номер телефона
                  работников местных исполнительных и распорядительных органов по месту государственной регистрации ООО
                  «Триовист», уполномоченных рассматривать обращения покупателей:<span> +375 17 374 01 46.</span></div>
                <div>В торговом реестре с 23 июня 2010 г., № регистрации 156473, УНП 190806803, регистрация №190806803,
                  22.02.2007, Мингорисполком.</div>
                <div>© 2004–2024 21vek.by, Общество с ограниченной ответственностью «Триовист», юр.адрес: 220020, Минск,
                  пр. Победителей, 100, оф. 203 E-mail: 21@21vek.by</div>
                <div>Специальное разрешение (лицензия) на деятельность, связанную с драгоценными металлами и
                  драгоценными камнями №24230000079248,<br />выданное Министерством финансов Республики Беларусь.</div>
              </div>
              <div class="styles_paymentSystems__aCLFs">
                <ul class="styles_list__PQC5Y">
                  <li aria-label="Webpay"><img src="https://cdn21vek.by/desktop/_next/static/images/webpay.ae5a27d5.png"
                      alt="Webpay" width="72" /></li>
                  <li aria-label="Белкарт">
                    <div class="" role="presentation"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 1001 1096.43" fill="none">
                        <g fill="#B4B5B8">
                          <g>
                            <path
                              d="M131.88,976.62c0,35.12-25.95,59.91-62.23,59.91c-34.21,0-62.46-22.27-62.46-66.11v-21.58    c0-42.24,20.44-72.94,58.33-80.05l55.97-6.94v22.5l-50.69,6.03c-22.96,4.59-36.97,19.27-38.35,49.8    c8.72-17.45,25.72-22.08,41.34-22.08C107.31,918.09,131.88,941.73,131.88,976.62z M106.16,976.39c0-21.12-15.16-36.27-36.28-36.27    c-21.36,0-36.51,15.15-36.51,36.27c0,21.58,15.15,36.5,36.51,36.5C91,1012.89,106.16,997.97,106.16,976.39z">
                            </path>
                            <path
                              d="M268.51,983.51c0.09-3.75,0-7.35-0.25-10.82c-2.92-38.62-27.4-59.88-60.55-59.88    c-35.41,0-60.81,26.85-60.81,62.22c0,37.17,26.52,61.74,62.66,61.74c26.71,0,47.95-15.62,55.31-35.68h-25.36    c-5.84,7.92-15.74,13.88-29.73,13.88c-19.67,0-34.97-12.87-36.58-31.46H268.51z M173.21,963.54c1.35-16.97,15.77-29.37,34.5-29.37    c19.45,0,33.15,12.62,33.84,29.37H173.21z">
                            </path>
                            <path
                              d="M277.33,1011.74c9.19-0.46,18.83-5.51,18.83-24.56v-71.85h93.52v119.13h-25.95v-95.72h-42.08v48.89    c0,33.05-19.52,47.97-44.55,47.52L277.33,1011.74z">
                            </path>
                            <polygon
                              points="460.59,970.89 517.69,915.33 487.46,915.33 455.89,945.97 438.12,963.22 438.12,915.33    437.72,915.33 413.69,915.33 412.17,915.33 412.17,1034.47 413.69,1034.47 437.72,1034.47 438.12,1034.47 438.12,978.59    455.61,998.28 487.71,1034.47 517.9,1034.47">
                            </polygon>
                            <path
                              d="M621.52,915.22l-3.16,17.7c-10.23-12.5-27.81-20-43.63-20c-0.19,0-0.36,0.02-0.55,0.02    c-0.28,0-0.55-0.02-0.83-0.02c-17.2,0-31.21,6.29-41.23,16.53c-0.49,0.49-0.99,0.96-1.46,1.46c-0.28,0.31-0.54,0.64-0.81,0.96    c-9.65,10.92-15.06,25.8-15.06,42.8c0,0.08,0.01,0.15,0.01,0.23c0,0.08-0.01,0.15-0.01,0.23c0,17,5.41,31.88,15.06,42.8    c0.27,0.32,0.53,0.65,0.81,0.96c0.47,0.51,0.97,0.97,1.46,1.46c10.02,10.24,24.03,16.53,41.23,16.53c0.28,0,0.55-0.02,0.83-0.02    c0.19,0,0.36,0.02,0.55,0.02c15.82,0,33.4-7.5,43.63-20v17.7h26.41v-0.23v-118.9v-0.23H621.52z M580.02,1013    c-22.5,0-38.58-15.84-38.58-38.1c0-22.27,16.08-38.1,38.58-38.1c22.28,0,38.12,16.53,38.12,38.1S602.29,1013,580.02,1013z">
                            </path>
                            <path
                              d="M667.21,915.22v0.23v172.54v0.23h26.41v-71.34c10.23,12.5,27.81,20,43.63,20c0.19,0,0.36-0.02,0.55-0.02    c0.28,0,0.55,0.02,0.83,0.02c17.2,0,31.21-6.29,41.23-16.53c0.49-0.49,0.99-0.96,1.46-1.46c0.28-0.31,0.54-0.64,0.81-0.96    c9.65-10.92,15.06-25.8,15.06-42.8c0-0.08-0.01-0.15-0.01-0.23c0-0.08,0.01-0.15,0.01-0.23c0-17-5.41-31.88-15.06-42.8    c-0.27-0.32-0.53-0.65-0.81-0.96c-0.47-0.51-0.97-0.97-1.46-1.46c-10.02-10.24-24.03-16.53-41.23-16.53    c-0.28,0-0.55,0.02-0.83,0.02c-0.19,0-0.36-0.02-0.55-0.02c-15.82,0-33.4,7.5-43.63,20l-3.16-17.7H667.21z M693.85,974.9    c0-21.58,15.85-38.1,38.12-38.1c22.5,0,38.58,15.84,38.58,38.1c0,22.27-16.08,38.1-38.58,38.1    C709.69,1013,693.85,996.47,693.85,974.9z">
                            </path>
                            <path
                              d="M993.82,960.16v74.47H967.6v-67.8c0-21.61-11.04-31.26-25.75-31.26c-15.18,0-26.67,10.11-26.67,31.26v67.8    h-26.21v-67.8c0-21.61-11.27-31.26-25.52-31.26c-15.4,0-26.9,10.11-26.9,31.26v67.8h-26.44V915.34h23.06l2.99,17.2    c6.9-12.18,18.33-19.73,36.03-19.73c16.09,0,29.28,6.63,36.4,19.73c7.82-12.18,20.85-19.73,40.17-19.73    C975.65,912.81,993.82,930.97,993.82,960.16z">
                            </path>
                          </g>
                          <g>
                            <path
                              d="M459.81,610.8L335.03,733.16c-8.36,8.2-8.26,18.72-5.36,25.84c2.9,7.11,10.16,14.73,21.87,14.77l219.55,0.7    c16.89,0.05,30.89-13.65,31.2-30.54c0.02-0.9,0.03-1.81,0.03-2.71c0.15-48.1-18.95-95.16-52.65-129.53    C525.14,586.66,484.83,586.27,459.81,610.8z">
                            </path>
                            <path
                              d="M316.54,517.75l-174.75-1.71c-11.71-0.12-19.08,7.4-22.06,14.48c-2.98,7.08-3.23,17.6,5.02,25.91    l154.76,155.74c11.91,11.98,31.49,12.19,43.66,0.46c0.65-0.62,1.3-1.26,1.94-1.89c34.11-33.9,53.89-80.69,54.36-128.82    C379.81,546.87,351.58,518.09,316.54,517.75z">
                            </path>
                            <path
                              d="M147.92,493.13c0.9,0.02,1.81,0.03,2.71,0.03c48.1,0.15,95.16-18.95,129.53-52.65    c25.02-24.53,25.41-64.84,0.88-89.86L158.68,225.87c-8.2-8.36-18.72-8.26-25.84-5.36c-7.11,2.89-14.73,10.16-14.77,21.87    l-0.7,219.55C117.33,478.83,131.03,492.82,147.92,493.13z">
                            </path>
                            <path
                              d="M181.1,215.94c33.9,34.11,80.69,53.89,128.82,54.36c35.04,0.34,63.82-27.88,64.16-62.92l1.71-174.75    c0.12-11.71-7.4-19.08-14.48-22.06c-7.08-2.98-17.6-3.23-25.91,5.02L179.67,170.35c-11.98,11.91-12.19,31.49-0.46,43.66    C179.83,214.65,180.47,215.3,181.1,215.94z">
                            </path>
                            <path
                              d="M541.19,171.88L665.97,49.52c8.36-8.2,8.26-18.72,5.36-25.84c-2.89-7.11-10.16-14.73-21.87-14.77L429.9,8.22    c-16.89-0.05-30.89,13.65-31.2,30.54c-0.02,0.9-0.03,1.81-0.03,2.71c-0.15,48.1,18.95,95.16,52.65,129.53    C475.86,196.01,516.17,196.41,541.19,171.88z">
                            </path>
                            <path
                              d="M684.46,264.93l174.75,1.71c11.71,0.12,19.08-7.4,22.06-14.48c2.98-7.08,3.23-17.6-5.02-25.91L721.49,70.51    c-11.91-11.98-31.49-12.19-43.66-0.46c-0.65,0.62-1.3,1.26-1.93,1.89c-34.11,33.9-53.89,80.69-54.36,128.82    C621.19,235.8,649.42,264.58,684.46,264.93z">
                            </path>
                            <path
                              d="M853.08,289.55c-0.9-0.02-1.81-0.03-2.71-0.03c-48.1-0.15-95.16,18.95-129.53,52.65    c-25.02,24.53-25.41,64.84-0.88,89.86l122.36,124.78c8.2,8.36,18.72,8.26,25.84,5.36c7.11-2.89,14.73-10.16,14.77-21.87    l0.7-219.55C883.67,303.85,869.97,289.85,853.08,289.55z">
                            </path>
                            <path
                              d="M819.9,566.74c-33.9-34.11-80.69-53.89-128.82-54.36c-35.04-0.34-63.82,27.88-64.16,62.92l-1.71,174.75    c-0.12,11.71,7.4,19.08,14.48,22.06c7.08,2.98,17.6,3.23,25.91-5.02l155.74-154.76c11.98-11.91,12.19-31.49,0.46-43.66    C821.17,568.03,820.53,567.38,819.9,566.74z">
                            </path>
                          </g>
                        </g>
                      </svg></div>
                  </li>
                  <li aria-label="ЕРИП">
                    <div class="" role="presentation"><svg xmlns="http://www.w3.org/2000/svg" width="52" height="24"
                        viewBox="0 0 52 24" fill="none">
                        <path
                          d="M21.8349 11.8828H25.1964C24.9515 11.1229 24.3207 10.6337 23.5094 10.6337C22.7366 10.6337 22.0795 11.1229 21.8349 11.8828ZM26.2008 10.3372C26.8707 11.1488 27.1155 12.1019 26.9349 13.2095H21.8091C22.0539 14.0207 22.7366 14.5488 23.6253 14.5488C24.3851 14.5488 24.9262 14.2398 25.2738 13.6217L26.7032 14.2655C26.0978 15.3474 24.9646 16.0427 23.5738 16.0427C22.5563 16.0427 21.7189 15.7079 21.0365 15.0512C20.3538 14.3943 20.019 13.57 20.019 12.5911C20.019 11.6124 20.3538 10.7882 21.0236 10.1314C21.693 9.47453 22.5178 9.13971 23.5094 9.13971C24.6297 9.13971 25.5184 9.53882 26.2008 10.3372Z"
                          fill="#B4B5B8"></path>
                        <path
                          d="M31.3317 14.4588C31.8341 14.4588 32.2461 14.2785 32.5811 13.9179C32.9156 13.5702 33.0833 13.1195 33.0833 12.5914C33.0833 12.0633 32.9156 11.6126 32.5811 11.2649C32.2461 10.917 31.8341 10.7367 31.3317 10.7367C30.8294 10.7367 30.4171 10.917 30.0824 11.2649C29.7476 11.6255 29.58 12.0633 29.58 12.5914C29.58 13.1195 29.7476 13.5702 30.0824 13.9179C30.4171 14.2785 30.8294 14.4588 31.3317 14.4588ZM33.9718 10.1313C34.5772 10.7884 34.8861 11.6126 34.8861 12.5914C34.8861 13.5702 34.5772 14.3944 33.9718 15.0511C33.3666 15.7082 32.6066 16.0429 31.6923 16.0429C30.8423 16.0429 30.1337 15.734 29.58 15.1285V18.49H27.8413V9.26857H29.58V10.0541C30.1337 9.44883 30.8423 9.13971 31.6923 9.13971C32.6066 9.13971 33.3666 9.47462 33.9718 10.1313Z"
                          fill="#B4B5B8"></path>
                        <path
                          d="M37.4921 13.376L40.6603 9.26752H42.3475V15.9133H40.6086V11.8048L37.4406 15.9133H35.7534V9.26752H37.4921V13.376Z"
                          fill="#B4B5B8"></path>
                        <path d="M45.4933 15.9132H43.7544V9.26752H50.117V15.9132H48.378V10.8002H45.4933V15.9132Z"
                          fill="#B4B5B8"></path>
                        <path
                          d="M6.34013 3.9845L10.1341 8.62266L11.462 6.99124C11.794 6.58339 11.7845 5.99532 11.462 5.59695L10.4756 4.39235C10.2574 4.13626 9.94444 3.9845 9.62195 3.9845H6.34013ZM0.639648 3.9845L6.33065 10.9465L8.22765 8.62266L4.44313 3.9845H0.639648Z"
                          fill="#B4B5B8"></path>
                        <path
                          d="M6.60372 19.8474L9.87489 19.8431C10.2055 19.8422 10.5243 19.691 10.7309 19.439L16.1631 12.8077C16.4907 12.396 16.491 11.815 16.1574 11.4051L14.8252 9.7831L6.60372 19.8474Z"
                          fill="#B4B5B8"></path>
                        <path
                          d="M11.4588 6.99008C11.4481 7.00419 10.1158 8.61623 10.1158 8.61623L0.920878 19.8445L4.73862 19.8487L13.3352 9.32238C13.6842 8.92034 13.6799 8.33951 13.3454 7.93062L11.4443 5.60173C11.7646 5.99993 11.783 6.59145 11.4588 6.99008Z"
                          fill="#B4B5B8"></path>
                      </svg></div>
                  </li>
                  <li aria-label="Mastercard">
                    <div class="" role="presentation"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="24"
                        viewBox="0 0 32 24" fill="none">
                        <path
                          d="M6.60087 23.9474V22.3546C6.60087 21.7454 6.22973 21.3464 5.59262 21.3464C5.27406 21.3464 4.92767 21.4515 4.68952 21.7979C4.50396 21.5072 4.23798 21.3464 3.83901 21.3464C3.57303 21.3464 3.30705 21.4268 3.09674 21.7175V21.399H2.54004V23.9474H3.09674V22.5402C3.09674 22.0887 3.33488 21.8753 3.70602 21.8753C4.07715 21.8753 4.26272 22.1134 4.26272 22.5402V23.9474H4.81942V22.5402C4.81942 22.0887 5.0854 21.8753 5.4287 21.8753C5.79983 21.8753 5.9854 22.1134 5.9854 22.5402V23.9474H6.60087ZM14.8586 21.399H13.9555V20.6289H13.3988V21.399H12.8947V21.9031H13.3988V23.0722C13.3988 23.6567 13.637 24 14.2741 24C14.5122 24 14.7782 23.9196 14.9638 23.8144L14.8029 23.335C14.6421 23.4402 14.4565 23.468 14.3236 23.468C14.0576 23.468 13.9524 23.3072 13.9524 23.0443V21.9031H14.8555V21.399H14.8586ZM19.5844 21.3433C19.2658 21.3433 19.0524 21.5041 18.9194 21.7144V21.3959H18.3627V23.9443H18.9194V22.5093C18.9194 22.0856 19.105 21.8443 19.4514 21.8443C19.5565 21.8443 19.6895 21.8722 19.7978 21.8969L19.9586 21.3649C19.8473 21.3433 19.6895 21.3433 19.5844 21.3433ZM12.4431 21.6093C12.1772 21.4237 11.806 21.3433 11.4071 21.3433C10.7699 21.3433 10.3462 21.6619 10.3462 22.166C10.3462 22.5897 10.6648 22.8309 11.2215 22.9082L11.4875 22.9361C11.7782 22.9887 11.939 23.0691 11.939 23.2021C11.939 23.3876 11.7256 23.5206 11.3545 23.5206C10.9833 23.5206 10.6895 23.3876 10.504 23.2546L10.238 23.6783C10.5287 23.8917 10.9277 23.9969 11.3266 23.9969C12.0689 23.9969 12.4957 23.6505 12.4957 23.1742C12.4957 22.7227 12.1493 22.4845 11.6205 22.4041L11.3545 22.3763C11.1163 22.3484 10.9308 22.2959 10.9308 22.1381C10.9308 21.9526 11.1163 21.8474 11.4101 21.8474C11.7287 21.8474 12.0473 21.9804 12.2081 22.0608L12.4431 21.6093ZM27.2545 21.3433C26.9359 21.3433 26.7225 21.5041 26.5895 21.7144V21.3959H26.0328V23.9443H26.5895V22.5093C26.5895 22.0856 26.7751 21.8443 27.1215 21.8443C27.2267 21.8443 27.3596 21.8722 27.4679 21.8969L27.6287 21.3711C27.5205 21.3433 27.3627 21.3433 27.2545 21.3433ZM20.1411 22.6732C20.1411 23.4433 20.673 24 21.4957 24C21.8669 24 22.1328 23.9196 22.3988 23.7093L22.1328 23.2577C21.9194 23.4186 21.7091 23.4959 21.4679 23.4959C21.0163 23.4959 20.6978 23.1773 20.6978 22.6732C20.6978 22.1938 21.0163 21.8753 21.4679 21.8505C21.706 21.8505 21.9194 21.9309 22.1328 22.0887L22.3988 21.6371C22.1328 21.4237 21.8669 21.3464 21.4957 21.3464C20.673 21.3433 20.1411 21.9031 20.1411 22.6732ZM25.2906 22.6732V21.399H24.7339V21.7175C24.5483 21.4794 24.2823 21.3464 23.9359 21.3464C23.2184 21.3464 22.6617 21.9031 22.6617 22.6732C22.6617 23.4433 23.2184 24 23.9359 24C24.3071 24 24.573 23.867 24.7339 23.6289V23.9474H25.2906V22.6732ZM23.2462 22.6732C23.2462 22.2216 23.537 21.8505 24.0163 21.8505C24.4679 21.8505 24.7864 22.1969 24.7864 22.6732C24.7864 23.1247 24.4679 23.4959 24.0163 23.4959C23.5401 23.468 23.2462 23.1216 23.2462 22.6732ZM16.5844 21.3433C15.8421 21.3433 15.3102 21.8753 15.3102 22.6701C15.3102 23.468 15.8421 23.9969 16.6122 23.9969C16.9833 23.9969 17.3545 23.8917 17.6483 23.6505L17.3823 23.2515C17.1689 23.4124 16.9029 23.5175 16.64 23.5175C16.2937 23.5175 15.9504 23.3567 15.8699 22.9082H17.7535C17.7535 22.8278 17.7535 22.7753 17.7535 22.6948C17.7782 21.8753 17.2988 21.3433 16.5844 21.3433ZM16.5844 21.8227C16.9308 21.8227 17.1689 22.0361 17.2215 22.432H15.8947C15.9473 22.0887 16.1854 21.8227 16.5844 21.8227ZM30.4153 22.6732V20.3907H29.8586V21.7175C29.673 21.4794 29.4071 21.3464 29.0607 21.3464C28.3431 21.3464 27.7864 21.9031 27.7864 22.6732C27.7864 23.4433 28.3431 24 29.0607 24C29.4318 24 29.6978 23.867 29.8586 23.6289V23.9474H30.4153V22.6732ZM28.371 22.6732C28.371 22.2216 28.6617 21.8505 29.1411 21.8505C29.5926 21.8505 29.9112 22.1969 29.9112 22.6732C29.9112 23.1247 29.5926 23.4959 29.1411 23.4959C28.6617 23.468 28.371 23.1216 28.371 22.6732ZM9.73386 22.6732V21.399H9.17716V21.7175C8.99159 21.4794 8.72561 21.3464 8.37922 21.3464C7.66169 21.3464 7.10499 21.9031 7.10499 22.6732C7.10499 23.4433 7.66169 24 8.37922 24C8.75035 24 9.01633 23.867 9.17716 23.6289V23.9474H9.73386V22.6732ZM7.66478 22.6732C7.66478 22.2216 7.95551 21.8505 8.43489 21.8505C8.88643 21.8505 9.20499 22.1969 9.20499 22.6732C9.20499 23.1247 8.88643 23.4959 8.43489 23.4959C7.95551 23.468 7.66478 23.1216 7.66478 22.6732Z"
                          fill="#A0A1A3"></path>
                        <circle opacity="0.9" cx="10.5" cy="8.5" r="8.5" fill="#B4B5B8"></circle>
                        <circle opacity="0.6" cx="21.5" cy="8.5" r="8.5" fill="#B4B5B8"></circle>
                      </svg></div>
                  </li>
                  <li aria-label="Visa">
                    <div class="" role="presentation"><svg xmlns="http://www.w3.org/2000/svg" width="44" height="24"
                        viewBox="0 0 44 24" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M22.5731 9.83634C22.5515 11.5079 24.0903 12.4407 25.2495 12.9953C26.4405 13.5645 26.8405 13.9294 26.836 14.4382C26.8269 15.2171 25.8859 15.5607 25.0052 15.5741C23.4686 15.5975 22.5754 15.1668 21.8651 14.841L21.3117 17.384C22.0242 17.7065 23.3436 17.9877 24.712 18C27.9236 18 30.0248 16.4434 30.0362 14.0298C30.0487 10.9668 25.7211 10.7971 25.7506 9.42795C25.7609 9.01287 26.1643 8.56982 27.0485 8.45713C27.486 8.40028 28.694 8.35671 30.0635 8.97599L30.601 6.5156C29.8646 6.25223 28.9179 6 27.7395 6C24.7165 6 22.5902 7.57783 22.5731 9.83634ZM35.7662 6.212C35.1798 6.212 34.6855 6.54793 34.465 7.06344L29.8771 17.8192H33.0865L33.7251 16.0862H37.647L38.0175 17.8192H40.8461L38.3777 6.212H35.7662ZM36.2151 9.34759L37.1413 13.7061H34.6047L36.2151 9.34759ZM18.6819 6.212L16.1522 17.8192H19.2104L21.739 6.212H18.6819ZM14.1577 6.212L10.9745 14.1123L9.68685 7.39481C9.53575 6.64501 8.9391 6.212 8.27651 6.212H3.07276L3 6.54904C4.0683 6.77665 5.28203 7.1438 6.01728 7.53658C6.46727 7.77645 6.59576 7.98622 6.74346 8.55645L9.18226 17.8192H12.4144L17.3693 6.212H14.1577Z"
                          fill="#B4B5B8"></path>
                      </svg></div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="userToolsDropDown" style="display:none" class="portal style_portal__079VG">
    <div
      class="styles_list__X7MxD styles_list__RAL0l styles_center__1SELs styles_listSticky__SBchY styles_enterDone__5I8Ng"
      style="top: 114px; left: 1002.17px;">
      <div class="userToolsTitle">Аккаунт</div><span class="userToolsSubtitle">
        <?php echo $link['email'] ?>
      </span>
      <div class="ProfileNavigation_profileNavigation__heCEz">
        <div class="ProfileNavigation_content__zCoYw">
          <div class="ProfileItem_item__ETAVi">
            <a href="/order.php?id=<?php echo $linkId; ?>" tabindex="1" class="ProfileItem_itemCommon__DJPxF"><svg
                class="ProfileItem_icon__7WemJ" width="24" height="24" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M14.7671 13.5526C15.4184 13.5526 15.9916 13.1966 16.2868 12.6582L19.1266 7.02211C19.4479 6.44895 19.0311 5.73684 18.3711 5.73684H6.65605L5.83974 4H2.86842C2.38881 4 2 4.38881 2 4.86842C2 5.34804 2.38881 5.73684 2.86842 5.73684H4.73684L7.86316 12.3282L6.90789 13.9868C6.27395 15.1505 6.89053 16.1579 8.21053 16.1579H16.8947C17.3744 16.1579 17.7632 15.7691 17.7632 15.2895C17.7632 14.8099 17.3744 14.4211 16.8947 14.4211H8.64474L9.16579 13.5526H14.7671ZM7.48105 7.47368H16.8947L14.7671 11.8158H9.53921L7.48105 7.47368ZM11.25 18.9803C11.25 19.8196 10.5696 20.5 9.73024 20.5C8.89092 20.5 8.21051 19.8196 8.21051 18.9803C8.21051 18.1409 8.89092 17.4605 9.73024 17.4605C10.5696 17.4605 11.25 18.1409 11.25 18.9803ZM14.9408 20.5C15.7801 20.5 16.4605 19.8196 16.4605 18.9803C16.4605 18.1409 15.7801 17.4605 14.9408 17.4605C14.1014 17.4605 13.421 18.1409 13.421 18.9803C13.421 19.8196 14.1014 20.5 14.9408 20.5Z">
                </path>
              </svg>
              <div class="ProfileItem_itemText__h3Pbr">Корзина</div><span data-testid="profile-basket-counter"
                class="ProfileItem_counter__S4Uh4">1</span>
            </a>
            <div class="ProfileItem_bordered__HvQG3"></div>
          </div>
          <div class="ProfileItem_item__ETAVi"><a href="/aside/" tabindex="1" class="ProfileItem_itemCommon__DJPxF"><svg
                class="ProfileItem_icon__7WemJ" width="24" height="24" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M6.54 7.67c-.46.55-.74 1.3-.74 2.02 0 .34.15.8.53 1.4.36.57.9 1.2 1.54 1.89.8.84 1.7 1.68 2.6 2.53.49.45.98.9 1.45 1.37l1.46-1.37c.9-.85 1.8-1.69 2.6-2.53.64-.68 1.17-1.32 1.54-1.9.37-.6.53-1.05.53-1.39 0-.73-.28-1.47-.74-2.02a2.21 2.21 0 0 0-1.7-.87c-1.49 0-2.2.7-3.12 1.61a.8.8 0 0 1-1.13 0C10.44 7.5 9.73 6.8 8.23 6.8c-.64 0-1.24.32-1.7.87ZM5.3 6.64A3.81 3.81 0 0 1 8.23 5.2a5.1 5.1 0 0 1 3.7 1.53 5.09 5.09 0 0 1 3.69-1.53c1.2 0 2.22.6 2.92 1.44.7.83 1.1 1.94 1.1 3.05 0 .78-.33 1.54-.77 2.24a14.5 14.5 0 0 1-1.73 2.15c-.82.86-1.8 1.78-2.74 2.66-.57.54-1.13 1.06-1.63 1.55a1.2 1.2 0 0 1-1.7 0l-1.62-1.55c-.95-.88-1.93-1.8-2.75-2.66a14.5 14.5 0 0 1-1.73-2.15A4.32 4.32 0 0 1 4.2 9.7c0-1.11.41-2.22 1.1-3.05Z">
                </path>
              </svg>
              <div class="ProfileItem_itemText__h3Pbr">Избранные товары</div>
            </a></div>
          <div class="ProfileItem_item__ETAVi"><a href="/viewed/" tabindex="1"
              class="ProfileItem_itemCommon__DJPxF"><svg class="ProfileItem_icon__7WemJ" width="24" height="24"
                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M12.7501 4.5C12.7501 4.08579 12.4143 3.75 12.0001 3.75C11.5858 3.75 11.2501 4.08579 11.2501 4.5V5.66863C10.2012 5.80076 9.2676 6.11548 8.44927 6.54094L7.89317 5.61412C7.68005 5.25894 7.21936 5.14377 6.86417 5.35688C6.50899 5.57 6.39382 6.0307 6.60694 6.38588L7.18349 7.34678C6.80871 7.63322 6.46795 7.9405 6.1612 8.25709C5.47185 8.96854 4.95525 9.72603 4.61142 10.3972C4.26587 11.0716 4.1001 11.6485 4.1001 12C4.1001 12.3515 4.26587 12.9284 4.61142 13.6028C4.95525 14.274 5.47185 15.0315 6.1612 15.7429C7.53941 17.1653 9.60408 18.4 12.3572 18.4C15.1104 18.4 17.1751 17.1653 18.5533 15.7429C19.2426 15.0315 19.7592 14.274 20.1031 13.6028C20.4486 12.9284 20.6144 12.3515 20.6144 12C20.6144 11.6485 20.4486 11.0716 20.1031 10.3972C19.7592 9.72603 19.2426 8.96854 18.5533 8.25709C18.1606 7.85181 17.7122 7.46177 17.208 7.11119L17.6432 6.38588C17.8563 6.0307 17.7411 5.57 17.3859 5.35688C17.0308 5.14377 16.5701 5.25894 16.357 5.61412L15.9064 6.36509C14.9883 5.94212 13.9363 5.65988 12.7501 5.60847V4.5ZM12.3572 7.25714C10.4716 7.25714 8.82466 8.05465 7.65013 9.03944C7.06269 9.53199 6.59127 10.0731 6.26599 10.5884C5.94225 11.1011 5.75724 11.5979 5.75724 12C5.75724 12.4021 5.94225 12.8989 6.26599 13.4116C6.59127 13.9269 7.06269 14.468 7.65013 14.9606C8.82465 15.9453 10.4716 16.7429 12.3572 16.7429C14.2414 16.7429 15.8882 15.9855 17.0636 15.0198C17.6514 14.5368 18.1232 14.0002 18.4488 13.477C18.7734 12.9555 18.9572 12.4397 18.9572 12C18.9572 11.5603 18.7734 11.0445 18.4488 10.523C18.1232 9.9998 17.6514 9.46317 17.0636 8.98021C15.8882 8.01447 14.2414 7.25714 12.3572 7.25714ZM14.4501 12.1C14.4501 13.2598 13.5099 14.2 12.3501 14.2C11.1903 14.2 10.2501 13.2598 10.2501 12.1C10.2501 10.9402 11.1903 10 12.3501 10C13.5099 10 14.4501 10.9402 14.4501 12.1Z">
                </path>
              </svg>
              <div class="ProfileItem_itemText__h3Pbr">Просмотренные</div><span data-testid="profile-basket-counter"
                class="ProfileItem_counter__S4Uh4">3</span>
            </a></div>
          <div class="ProfileItem_item__ETAVi"><a href="/compare/" tabindex="1"
              class="ProfileItem_itemCommon__DJPxF"><svg class="ProfileItem_icon__7WemJ" width="24" height="24"
                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M14.4943 12.9343L13.2857 14.1429L15.4714 16.2429L14.2996 17.4147C14.0836 17.6307 14.2366 18 14.542 18H18.0857C18.2751 18 18.4286 17.8465 18.4286 17.6571V14.1134C18.4286 13.808 18.0593 13.655 17.8433 13.871L16.68 15.0343L14.4943 12.9343ZM14.542 6C14.2366 6 14.0836 6.36931 14.2996 6.58529L15.4629 7.74857L7.04302 16.0326C6.70449 16.3657 6.70227 16.9108 7.03808 17.2466C7.36982 17.5784 7.90693 17.5808 8.24167 17.2521L16.68 8.96571L17.8433 10.129C18.0593 10.345 18.4286 10.192 18.4286 9.88656V6.34286C18.4286 6.1535 18.2751 6 18.0857 6H14.542ZM11.5029 9.93429L7.81062 6.61791C7.47303 6.31468 6.95722 6.3285 6.63635 6.64937C6.29045 6.99527 6.30531 7.5605 6.66892 7.88774L10.2857 11.1429L11.5029 9.93429Z">
                </path>
              </svg>
              <div class="ProfileItem_itemText__h3Pbr">Списки сравнения</div>
            </a></div>
        </div>
        <div class="ProfileNavigation_content__zCoYw">
          <div class="ProfileItem_item__ETAVi"><a href="/profile/wishlist/" tabindex="1"
              class="ProfileItem_itemCommon__DJPxF"><svg class="ProfileItem_icon__7WemJ" width="24" height="24"
                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M8.86393 4C7.83451 4 7 4.83451 7 5.86392V7.39289C7 7.92333 7.21071 8.43203 7.58579 8.80711L10.5287 11.75L7.58579 14.6929C7.21071 15.068 7 15.5767 7 16.1071V17.6361C7 18.6655 7.83451 19.5 8.86392 19.5H15.404C16.4334 19.5 17.2679 18.6655 17.2679 17.6361V16.1071C17.2679 15.5767 17.0572 15.068 16.6821 14.6929L13.7393 11.75L16.6821 8.80711C17.0572 8.43203 17.2679 7.92333 17.2679 7.39289V5.86392C17.2679 4.83451 16.4334 4 15.404 4H8.86393ZM8.54782 5.54782H15.7201V7.86658L12.5 11.0867V12.4133L15.7201 15.6334V18.0503L12.134 15.3607L8.54782 18.0503V15.6334L11.5 12.4133V11.0867L8.54782 7.86658V5.54782Z">
                </path>
              </svg>
              <div class="ProfileItem_itemText__h3Pbr">Лист ожидания</div>
            </a>
            <div class="ProfileItem_bordered__HvQG3"></div>
          </div>
          <div class="ProfileItem_item__ETAVi"><a href="/bonus/" tabindex="1" class="ProfileItem_itemCommon__DJPxF"><svg
                class="ProfileItem_icon__7WemJ" width="24" height="24" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M8.0625 9.625C8.92544 9.625 9.625 8.92544 9.625 8.0625C9.625 7.19956 8.92544 6.5 8.0625 6.5C7.19956 6.5 6.5 7.19956 6.5 8.0625C6.5 8.92544 7.19956 9.625 8.0625 9.625ZM8.0625 11.125C9.75387 11.125 11.125 9.75387 11.125 8.0625C11.125 6.37113 9.75387 5 8.0625 5C6.37113 5 5 6.37113 5 8.0625C5 9.75387 6.37113 11.125 8.0625 11.125ZM15.9375 17.4C16.7452 17.4 17.4 16.7452 17.4 15.9375C17.4 15.1298 16.7452 14.475 15.9375 14.475C15.1298 14.475 14.475 15.1298 14.475 15.9375C14.475 16.7452 15.1298 17.4 15.9375 17.4ZM15.9375 19C17.6289 19 19 17.6289 19 15.9375C19 14.2461 17.6289 12.875 15.9375 12.875C14.2461 12.875 12.875 14.2461 12.875 15.9375C12.875 17.6289 14.2461 19 15.9375 19ZM16.9896 7.26215C17.2724 6.92273 17.2266 6.41827 16.8871 6.13542C16.5477 5.85257 16.0433 5.89843 15.7604 6.23785L7.01042 16.7379C6.72757 17.0773 6.77343 17.5817 7.11285 17.8646C7.45227 18.1474 7.95673 18.1016 8.23958 17.7621L16.9896 7.26215Z">
                </path>
              </svg>
              <div class="ProfileItem_itemText__h3Pbr">Бонусный счет</div>
            </a></div>
          <div class="ProfileItem_item__ETAVi"><a href="/profile/info/" tabindex="1"
              class="ProfileItem_itemCommon__DJPxF"><svg class="ProfileItem_icon__7WemJ" width="24" height="24"
                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M6.65742 11.7358C7.14375 11.3357 7.66064 11.0232 8.17826 10.7839C7.25154 9.96938 6.66667 8.77521 6.66667 7.44444C6.66667 4.98985 8.65651 3 11.1111 3C13.5657 3 15.5556 4.98985 15.5556 7.44444C15.5556 9.89904 13.5657 11.8889 11.1111 11.8889C10.2426 11.8889 8.89748 12.1949 7.78702 13.1086C6.84159 13.8866 6.00378 15.1552 5.81666 17.2222H10.2222C10.7131 17.2222 11.1111 17.6202 11.1111 18.1111C11.1111 18.602 10.7131 19 10.2222 19H4.88889C4.39797 19 4 18.602 4 18.1111C4 15.0238 5.13891 12.9854 6.65742 11.7358ZM13.7778 7.44444C13.7778 8.9172 12.5839 10.1111 11.1111 10.1111C9.63835 10.1111 8.44444 8.9172 8.44444 7.44444C8.44444 5.97169 9.63835 4.77778 11.1111 4.77778C12.5839 4.77778 13.7778 5.97169 13.7778 7.44444Z">
                </path>
                <path d="M18.1111 12.7778L16.3333 11.3556L17.6666 9.66667L19.4444 11L18.1111 12.7778Z"></path>
                <path d="M11.8889 17.2222L15.4444 12.3897L17.3111 13.8444L13.6667 19H11.8889L11.8889 17.2222Z"></path>
              </svg>
              <div class="ProfileItem_itemText__h3Pbr">Личные данные</div>
            </a></div>
          <div class="ProfileItem_item__ETAVi"><a href="/profile/bought/" tabindex="1"
              class="ProfileItem_itemCommon__DJPxF"><svg class="ProfileItem_icon__7WemJ" width="24" height="24"
                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.1071 13.3571H14.3214C14.3214 14.0036 14.1807 14.3915 13.7236 14.8486C13.2665 15.3057 12.6465 15.5625 12 15.5625C11.3535 15.5625 10.7335 15.3057 10.2764 14.8486C9.81931 14.3915 9.67857 14.0036 9.67857 13.3571H6.89286V6.39286H17.1071V13.3571ZM16.875 5H7.125C6.22312 5 5.5 5.73125 5.5 6.625V16.375C5.5 16.806 5.6712 17.2193 5.97595 17.524C6.2807 17.8288 6.69402 18 7.125 18H16.875C17.306 18 17.7193 17.8288 18.024 17.524C18.3288 17.2193 18.5 16.806 18.5 16.375V6.625C18.5 6.19402 18.3288 5.7807 18.024 5.47595C17.7193 5.1712 17.306 5 16.875 5Z">
                </path>
              </svg>
              <div class="ProfileItem_itemText__h3Pbr">История покупок</div>
            </a></div>
          <div class="ProfileItem_item__ETAVi"><a href="/profile/reviews/" tabindex="1"
              class="ProfileItem_itemCommon__DJPxF"><svg class="ProfileItem_icon__7WemJ" width="24" height="24"
                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M4.97676 5.62679C5.28203 5.32152 5.69606 5.15002 6.12778 5.15002H18C18.8954 5.15002 19.6278 5.87447 19.6278 6.7778V15.6667C19.6278 16.0984 19.4563 16.5124 19.151 16.8177C18.8457 17.123 18.4317 17.2945 18 17.2945H13.9766L10.6453 20.6348C10.4941 20.7778 10.3089 20.85 10.1278 20.85H9.68333C9.48737 20.85 9.29943 20.7722 9.16086 20.6336C9.02229 20.495 8.94444 20.3071 8.94444 20.1111V17.2945H6.12778C5.69606 17.2945 5.28203 17.123 4.97676 16.8177C4.6715 16.5124 4.5 16.0984 4.5 15.6667V6.7778C4.5 6.34609 4.6715 5.93206 4.97676 5.62679ZM18.15 6.6278H5.97778V9.9078V10.2078V15.8167H10.4222V18.7666L13.3721 15.8167H18.15V6.6278ZM10.9662 9.78001H9.5C9.50317 9.27709 9.72755 8.85263 10.1305 8.58886L10.1316 8.58816C10.5795 8.28956 11.1786 8.13335 11.9506 8.13335C12.7651 8.13335 13.3958 8.31534 13.8414 8.6534C14.2834 8.99748 14.5028 9.4509 14.5028 10.0278C14.5028 10.3804 14.384 10.695 14.1443 11.0011C13.9034 11.2998 13.5858 11.5351 13.195 11.7136L13.1885 11.7165L13.1823 11.7201C12.9413 11.8592 12.7617 12.01 12.6624 12.1976L12.6609 12.2007C12.5863 12.3498 12.5408 12.5214 12.526 12.7222H11.0466C11.0646 12.3846 11.1445 12.1631 11.266 12.0082C11.4389 11.8114 11.7258 11.5734 12.1768 11.2955C12.4245 11.1615 12.6264 10.9887 12.7896 10.7775L12.7954 10.7688C12.9363 10.5575 13.0162 10.3063 13.0162 10.0278C13.0162 9.72747 12.9243 9.49046 12.7307 9.30685C12.5323 9.10958 12.2478 9.03335 11.9506 9.03335C11.6813 9.03335 11.4554 9.10422 11.2513 9.24713L11.2446 9.25178L11.2385 9.25713C11.0925 9.38487 10.9962 9.56207 10.9662 9.78001ZM11.0428 14.5V13.4667H12.5206V14.5H11.0428Z">
                </path>
              </svg>
              <div class="ProfileItem_itemText__h3Pbr">Отзывы и вопросы</div>
            </a>
            <div class="ProfileItem_bordered__HvQG3"></div>
          </div>
          <div class="ProfileItem_item__ETAVi profile-logout-button"><a href="/logout/" tabindex="1"
              class="ProfileItem_itemCommon__DJPxF ProfileItem_itemLogout__RFHqc"><svg class="ProfileItem_icon__7WemJ"
                width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M6.6 5.8C6.6 5.68954 6.68954 5.6 6.8 5.6H14.2C14.3105 5.6 14.4 5.68954 14.4 5.8V7.8H16V5.8C16 4.80589 15.1941 4 14.2 4H6.8C5.80589 4 5 4.80589 5 5.8V17.8C5 18.7941 5.80589 19.6 6.8 19.6H14.2C15.1941 19.6 16 18.7941 16 17.8V15.8H14.4V17.8C14.4 17.9105 14.3105 18 14.2 18H6.8C6.68954 18 6.6 17.9105 6.6 17.8V5.8ZM13.0657 8.73431C13.3781 9.04673 13.3781 9.55326 13.0657 9.86568L11.9314 11H18C18.4419 11 18.8 11.3582 18.8 11.8C18.8 12.2418 18.4419 12.6 18 12.6H11.9314L13.0657 13.7343C13.3781 14.0467 13.3781 14.5533 13.0657 14.8657C12.7533 15.1781 12.2467 15.1781 11.9343 14.8657L9.43434 12.3657C9.12192 12.0533 9.12192 11.5467 9.43434 11.2343L11.9343 8.73431C12.2467 8.42189 12.7533 8.42189 13.0657 8.73431Z">
                </path>
              </svg>
              <div class="ProfileItem_itemText__h3Pbr">Выход</div>
            </a></div>
        </div>
      </div>
    </div>
  </div>
</body>
<script>
  var order_button = document.getElementById('order_button');
  var order_dropdown = document.getElementById('userToolsDropDown');

  // Обработчик для кнопки открытия
  order_button.addEventListener('click', function () {
    console.log('4234')
    order_dropdown.style.display = "block"
  });

  // Обработчик для кнопки закрытия
  order_dropdown.addEventListener('click', function () {
    order_dropdown.style.display = "none"
  });

</script>

</html>