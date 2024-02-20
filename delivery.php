<?php
require "./config.php";
require "./telegram.php";
$daysOfWeek = array(
    'Воскресенье',
    'Понедельник',
    'Вторник',
    'Среда',
    'Четверг',
    'Пятница',
    'Суббота'
);

$months = array(
    1 => 'Январь',
    2 => 'Февраль',
    3 => 'Март',
    4 => 'Апрель',
    5 => 'Май',
    6 => 'Июнь',
    7 => 'Июль',
    8 => 'Август',
    9 => 'Сентябрь',
    10 => 'Октябрь',
    11 => 'Ноябрь',
    12 => 'Декабрь'
);
$id = $_GET['id'];

selectDataDelivery();

$sql = $mysql->query("SELECT * FROM `links` WHERE `id` = '$id'");
$link = $sql->fetch_assoc(); // Разделяем цену на рубли и копейки
$price_parts = explode(',', $link['price']);

// Первая часть - рубли
$rubles = $price_parts[0];

// Вторая часть (если есть) - копейки
$kopecks = isset($price_parts[1]) ? $price_parts[1] : '00';
?>
<html style="--scrollbar-width-initial: 0px; --scrollbar-width: 0px;" class="">

<head>
    <meta http-equiv="origin-trial"
        content="Az520Inasey3TAyqLyojQa8MnmCALSEU29yQFW8dePZ7xQTvSt73pHazLFTK5f7SyLUJSo2uKLesEtEa9aUYcgMAAACPeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZS5jb206NDQzIiwiZmVhdHVyZSI6IkRpc2FibGVUaGlyZFBhcnR5U3RvcmFnZVBhcnRpdGlvbmluZyIsImV4cGlyeSI6MTcyNTQwNzk5OSwiaXNTdWJkb21haW4iOnRydWUsImlzVGhpcmRQYXJ0eSI6dHJ1ZX0=">
    <script type="text/javascript" async=""
        src="https://www.gstatic.com/recaptcha/releases/yiNW3R9jkyLVP5-EEZLDzUtA/recaptcha__ru.js"
        crossorigin="anonymous"
        integrity="sha384-ixGZxR5mu3FkFqsSzGtsFCVBqcyhPTKlqaKD2EHEVfiCNLZtnwwxLpta6RqRNo3J"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=1150">
    <title>Онлайн-гипермаркет 21vek.by</title>
    <meta name="description"
        content="⭐️ Доставка и самовывоз по всей Беларуси ✅ Оплата частями ⭐️ Наличная и безналичная оплата ➤➤ Широкий выбор товаров">
    <meta property="og:site_name" content="Онлайн-гипермаркет 21vek.by">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.21vek.by/order/">
    <meta property="og:title" content="Онлайн-гипермаркет 21vek.by">
    <meta property="og:image" content="https://www.21vek.by/img/up/logo_21vek.by.png">
    <meta property="og:description"
        content="⭐️ Доставка и самовывоз по всей Беларуси ✅ Оплата частями ⭐️ Наличная и безналичная оплата ➤➤ Широкий выбор товаров">
    <link rel="canonical" href="https://www.21vek.by/order/">
    <script>window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        const consentMode = JSON.parse(window.localStorage.getItem('consentMode')) || {
            ad_storage: 'denied',
            analytics_storage: 'denied',
            functionality_storage: 'denied',
        };
        gtag('consent', 'default', consentMode);</script>
    <link rel="preconnect" href="https://www.google.com/">
    <link rel="dns-prefetch" href="https://www.gstatic.com/">
    <meta name="next-head-count" content="14">
    <link data-next-font="size-adjust" rel="preconnect" href="/" crossorigin="anonymous">
    <link rel="preload" href="https://cdn21vek.by/desktop/_next/static/css/061242450e544d42.css" as="style">
    <link rel="stylesheet" href="https://cdn21vek.by/desktop/_next/static/css/061242450e544d42.css" data-n-g="">
    <link rel="preload" href="https://cdn21vek.by/desktop/_next/static/css/b61b72730398267f.css" as="style">
    <link rel="stylesheet" href="https://cdn21vek.by/desktop/_next/static/css/b61b72730398267f.css" data-n-p="">
    <link rel="preload" href="https://cdn21vek.by/desktop/_next/static/css/b8f1aa25441bfbee.css" as="style">
    <link rel="stylesheet" href="https://cdn21vek.by/desktop/_next/static/css/b8f1aa25441bfbee.css" data-n-p="">
    <link rel="preload" href="https://cdn21vek.by/desktop/_next/static/css/fa434e699b566819.css" as="style">
    <link rel="stylesheet" href="https://cdn21vek.by/desktop/_next/static/css/fa434e699b566819.css" data-n-p="">
    <link rel="preload" href="https://cdn21vek.by/desktop/_next/static/css/bba7a65914657294.css" as="style">
    <link rel="stylesheet" href="https://cdn21vek.by/desktop/_next/static/css/bba7a65914657294.css" data-n-p="">
    <link rel="preload" href="https://cdn21vek.by/desktop/_next/static/css/c50cc1794d935144.css" as="style">
    <link rel="stylesheet" href="https://cdn21vek.by/desktop/_next/static/css/c50cc1794d935144.css" data-n-p="">
    <link rel="preload" href="https://cdn21vek.by/desktop/_next/static/css/c5ce692c8ec88ff4.css" as="style">
    <link rel="stylesheet" href="https://cdn21vek.by/desktop/_next/static/css/c5ce692c8ec88ff4.css" data-n-p="">
    <link rel="preload" href="https://cdn21vek.by/desktop/_next/static/css/a327a8bae8d11631.css" as="style">
    <link rel="stylesheet" href="https://cdn21vek.by/desktop/_next/static/css/a327a8bae8d11631.css" data-n-p="">
    <link rel="preload" href="https://cdn21vek.by/desktop/_next/static/css/064b3bf215e479d1.css" as="style">
    <link rel="stylesheet" href="https://cdn21vek.by/desktop/_next/static/css/064b3bf215e479d1.css" data-n-p="">
    <link rel="preload" href="https://cdn21vek.by/desktop/_next/static/css/c20833558bfac5ef.css" as="style">
    <link rel="stylesheet" href="https://cdn21vek.by/desktop/_next/static/css/c20833558bfac5ef.css" data-n-p="">
    <link rel="preload" href="https://cdn21vek.by/desktop/_next/static/css/aa8c4895732ce97b.css" as="style">
    <link rel="stylesheet" href="https://cdn21vek.by/desktop/_next/static/css/aa8c4895732ce97b.css" data-n-p="">
    <noscript data-n-css=""></noscript>
    <script defer="" nomodule=""
        src="https://cdn21vek.by/desktop/_next/static/chunks/polyfills-c67a75d1b6f99dc8.js"></script>
    <script src="https://cdn21vek.by/desktop/_next/static/chunks/webpack-b1ee2e8364c21ecd.js" defer=""></script>
    <script src="https://cdn21vek.by/desktop/_next/static/chunks/framework-785b255af5d8bea8.js" defer=""></script>
    <script src="https://cdn21vek.by/desktop/_next/static/chunks/main-2315a6407fd9694f.js" defer=""></script>

    <script src="https://cdn21vek.by/desktop/_next/static/chunks/4935-a8b4921f203d5dc6.js" defer=""></script>
    <script src="https://cdn21vek.by/desktop/_next/static/chunks/3482-9b8ab8fd8c4a1aa2.js" defer=""></script>
    <script src="https://cdn21vek.by/desktop/_next/static/chunks/3673-30ab8f6eda4e4b1e.js" defer=""></script>
    <script src="https://cdn21vek.by/desktop/_next/static/chunks/3551-99e3ac5746a8a26d.js" defer=""></script>
    <script src="https://cdn21vek.by/desktop/_next/static/chunks/8240-eedcee969297444c.js" defer=""></script>
    <script src="https://cdn21vek.by/desktop/_next/static/chunks/949-6c68809c6d7ce087.js" defer=""></script>
    <script src="https://cdn21vek.by/desktop/_next/static/chunks/3151-9b9220eaf70ceb5e.js" defer=""></script>
    <script src="https://cdn21vek.by/desktop/_next/static/chunks/3964-588a1067d91c73e4.js" defer=""></script>
    <script src="https://cdn21vek.by/desktop/_next/static/chunks/pages/order-7a56ef5306bfcb22.js" defer=""></script>
    <script src="https://cdn21vek.by/desktop/_next/static/3QwIPtAiskxqNXSVodR2Z/_buildManifest.js" defer=""></script>
    <script src="https://cdn21vek.by/desktop/_next/static/3QwIPtAiskxqNXSVodR2Z/_ssgManifest.js" defer=""></script>


    <link rel="stylesheet" type="text/css" href="https://cdn21vek.by/desktop/_next/static/css/8fbe08a0eb43f692.css">
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
    <div id="__next"><button type="button" class="style_upButton__MUSza">
            <div class="" role="presentation"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none">
                    <path d="M12 18V6M12 6L18 12M12 6L6 12" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round"></path>
                </svg></div><span class="style_upButtonLabel__LPAA4">Наверх</span>
        </button>
        <div class="l-body">
            <header id="header">
                <div role="presentation" class="styles_header__W192J styles_basketHeader__Y7oN0">
                    <div class="styles_headerReactLine__FsvlC">
                        <div class="styles_headerReactWrapper__TTCde">
                            <div class="styles_headerReactInner__kWib7"><button type="button"
                                    class="styles_localityBtn__qrGFQ">
                                    <div class="" role="presentation"><svg xmlns="http://www.w3.org/2000/svg" width="10"
                                            height="13" viewBox="0 0 10 13" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M10 5L10 5.00001C10 5.28878 9.97552 5.57184 9.92852 5.84721C9.31782 9.54574 5 13 5 13C5 13 0.68203 9.54563 0.0714481 5.84702C0.02447 5.57171 0 5.28871 0 5.00001V5C0 2.23858 2.23858 0 5 0C7.76142 0 10 2.23858 10 5ZM5 7C6.10457 7 7 6.10457 7 5C7 3.89543 6.10457 3 5 3C3.89543 3 3 3.89543 3 5C3 6.10457 3.89543 7 5 7Z"
                                                fill="currentColor"></path>
                                        </svg></div>г. Минск
                                </button>
                                <ul class="styles_navMenu__t_u9b">
                                    <li class="styles_navMenuItem__5EPNe"><a href="/special_offers/partly_pay.html"
                                            class="styles_navMenuLink__w1crD">Оплата частями</a></li>
                                    <li class="styles_navMenuItem__5EPNe"><a href="/special_offers/bonus.html"
                                            class="styles_navMenuLink__w1crD">Бонусная программа</a></li>
                                    <li class="navMenuItem navMenuItemMore">
                                        <div class="styles_wrapper___8H5L">
                                            <div><button type="button" class="styles_headerTitle__OyXGt">Еще</button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="styles_communications__oRy4T">
                                    <li class="styles_communicationItem__IUjz2"><a href="https://www.viber.com/21vek.by"
                                            target="_blank" rel="noopener noreferrer"
                                            class="styles_communicationItemBox__K66_y styles_communicationIconViber__GqLo9">
                                            <div class="styles_viber__S5_HI styles_communicationIcon__1heMG"
                                                role="presentation"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none">
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
                                                role="presentation"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M18.9675 3V13.3226L19.4837 12.8065V3.51613L18.9675 3Z"
                                                        fill="#0B0B0B"></path>
                                                    <path
                                                        d="M14.8386 7.64505H15.8709L16.9031 7.12892V6.61279L14.8386 7.64505Z"
                                                        fill="#0B0C0C"></path>
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
                                            <div><button type="button" class="styles_headerTitle__OyXGt">Еще</button>
                                            </div>
                                        </div>
                                    </div>
                                </ul>
                                <div class="styles_workingTime__lbpkS">
                                    <div class="styles_workingTimeIcon__zAjRS">
                                        <div class="" role="presentation"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M19 12.5C19 16.0899 16.0899 19 12.5 19C8.91015 19 6 16.0899 6 12.5C6 8.91015 8.91015 6 12.5 6C16.0899 6 19 8.91015 19 12.5ZM20 12.5C20 16.6421 16.6421 20 12.5 20C8.35786 20 5 16.6421 5 12.5C5 8.35786 8.35786 5 12.5 5C16.6421 5 20 8.35786 20 12.5ZM13 9H12C12 10.6667 12 12.3333 12 14H15V13H13V9Z"
                                                    fill="currentColor"></path>
                                            </svg></div>
                                    </div>
                                    <div class="styles_workingTimeText__2h7JO">контакт-центр<div>
                                            с&nbsp;<time>8:00</time>&nbsp;до&nbsp;<time>22:00</time></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="styles_separator__u2G0a"></div>
                    <div class="styles_headerReactLine__FsvlC styles_headerReactLineSecond__1oyh6">
                        <div class="styles_headerReactWrapper__TTCde">
                            <div class="logotype"><a class="logotypeImg" href="/" title="На главную страницу"><svg
                                        width="125" height="42" viewBox="0 0 125 42" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M122.036 16.9164H106.625C105.545 16.9164 104.671 16.0422 104.671 14.9618V14.9127C104.671 13.8323 105.545 12.9582 106.625 12.9582H110.446C111.526 12.9582 112.4 12.084 112.4 11.0036V10.9545C112.4 9.87414 111.526 9 110.446 9H4.66535C2.09204 9 0 11.092 0 13.6653V27.9462C0 30.5588 2.1215 32.6803 4.7341 32.6803H114.316C115.396 32.6803 116.27 31.8062 116.27 30.7258V30.6865C116.27 29.6061 115.396 28.732 114.316 28.732H110.505C109.424 28.732 108.55 27.8578 108.55 26.7774C108.55 25.697 107.676 24.8229 106.596 24.8229H98.9152C97.8348 24.8229 96.9606 23.9488 96.9606 22.8684V22.8291C96.9606 21.7487 97.8348 20.8745 98.9152 20.8745H122.045C123.126 20.8745 124 20.0004 124 18.92V18.8807C124 17.7905 123.116 16.9164 122.036 16.9164Z"
                                            fill="url(#Logo-0.14695973420757058)"></path>
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
                                            <linearGradient id="Logo-0.14695973420757058" x1="-5.70822" y1="23.2924"
                                                x2="127.227" y2="18.2967" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#990099"></stop>
                                                <stop offset="0.2873" stop-color="#BB0088"></stop>
                                                <stop offset="0.5525" stop-color="#D9006D"></stop>
                                                <stop offset="1" stop-color="#F20061"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg></a><span class="logotypeText">Онлайн-гипермаркет 21vek.by</span></div><button
                                type="button" class="styles_catalogButton__z9L_j">
                                <div class="styles_catalogIcon__JlC_0">
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
                            <div class="Search_searchInputContainer__rDgxi"><button type="button"
                                    class="Search_searchBtn__Tk7Gw">
                                    <div class="" role="presentation"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M16.4406 15.3108C18.392 12.8035 18.2153 9.17663 15.9107 6.87197C13.4147 4.37601 9.36794 4.37601 6.87197 6.87197C4.37601 9.36794 4.37601 13.4147 6.87197 15.9107C9.17662 18.2153 12.8034 18.392 15.3108 16.4406L17.3058 18.5368C17.6152 18.8619 18.1317 18.8683 18.449 18.551C18.7555 18.2445 18.7616 17.7495 18.4628 17.4356L16.4406 15.3108ZM14.7857 14.776C16.6528 12.9036 16.6512 9.87216 14.7808 8.00181C12.9089 6.12984 9.87379 6.12984 8.00181 8.00181C6.12984 9.87379 6.12984 12.9089 8.00181 14.7808C9.87216 16.6512 12.9036 16.6528 14.776 14.7857C14.7776 14.7841 14.7792 14.7825 14.7808 14.7808C14.7825 14.7792 14.7841 14.7776 14.7857 14.776Z"
                                                fill="currentColor"></path>
                                        </svg></div>
                                </button><input id="catalogSearch" type="text" placeholder="Поиск товаров"
                                    aria-label="search" class="Search_searchInput__RoV1W" autocomplete="off"
                                    spellcheck="false" value=""></div>
                            <div class="styles_userTools__KBZrj undefined">
                                <div class="styles_wrapper___8H5L">
                                    <div>
                                        <div><button type="button" class="styles_userToolsToggler__c2aHe">
                                                <div class="styles_userToolsIcon__Y2sGs">
                                                    <div class="" role="presentation"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                                                fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M14.9 7.25C14.9 8.71355 13.7136 9.9 12.25 9.9C10.7865 9.9 9.60001 8.71355 9.60001 7.25C9.60001 5.78645 10.7865 4.6 12.25 4.6C13.7136 4.6 14.9 5.78645 14.9 7.25ZM14.888 10.5824C15.8701 9.80391 16.5 8.60052 16.5 7.25C16.5 4.90279 14.5972 3 12.25 3C9.9028 3 8.00001 4.90279 8.00001 7.25C8.00001 8.60051 8.62993 9.8039 9.61198 10.5824C7.47858 11.5771 6 13.7409 6 16.25V18C6 18.2761 6.22386 18.5 6.5 18.5H18C18.2761 18.5 18.5 18.2761 18.5 18V16.25C18.5 13.7409 17.0214 11.5771 14.888 10.5824ZM16.9 16.25V16.9H7.6V16.25C7.6 13.6819 9.68188 11.6 12.25 11.6C14.8181 11.6 16.9 13.6819 16.9 16.25Z">
                                                            </path>
                                                        </svg></div>
                                                </div><span class="userToolsText">Аккаунт</span>
                                            </button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="headerCart"><a class="headerCartBox" href="/order/?&amp;checkTab=true"
                                    rel="nofollow"><span class="headerCartIcon">
                                        <div class="" role="presentation"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="17" height="16" viewBox="0 0 17 16" fill="currentColor">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M12.0539 9.47368C12.6658 9.47368 13.2042 9.13921 13.4816 8.63342L16.1492 3.33895C16.4511 2.80053 16.0595 2.13158 15.4395 2.13158H4.43447L3.66763 0.5H1.31579C0.865241 0.5 0.5 0.865241 0.5 1.31579C0.5 1.76634 0.865242 2.13158 1.31579 2.13158H2.63158L5.56842 8.32342L4.36842 10.0921C3.77289 11.1853 4.35211 12.1316 5.59211 12.1316H13.75C14.2006 12.1316 14.5658 11.7663 14.5658 11.3158C14.5658 10.8652 14.2005 10.5 13.75 10.5H6L6.79211 9.47368H12.0539ZM5.20947 3.76316H14.0526L12.0539 7.84211H7.14289L5.20947 3.76316ZM8.75 14.5724C8.75 15.3608 8.11083 16 7.32237 16C6.53391 16 5.89474 15.3608 5.89474 14.5724C5.89474 13.7839 6.53391 13.1447 7.32237 13.1447C8.11083 13.1447 8.75 13.7839 8.75 14.5724ZM12.2171 16C13.0056 16 13.6447 15.3608 13.6447 14.5724C13.6447 13.7839 13.0056 13.1447 12.2171 13.1447C11.4287 13.1447 10.7895 13.7839 10.7895 14.5724C10.7895 15.3608 11.4287 16 12.2171 16Z">
                                                </path>
                                            </svg></div><span data-testid="header-count"
                                            class="headerCartCount">1</span>
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
                                    <radialGradient id="paint0_radial_11412_1560" cx="0" cy="0" r="1"
                                        gradientUnits="userSpaceOnUse"
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
                                    <div class="styles_promoItem__aolWq"><a href="/special_offers/promo.html"
                                            data-index="0">
                                            <div class="" role="presentation"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="12" height="11" viewBox="0 0 12 11" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M6.04099 0L0 5.90576L5.13933 11L11.1803 5.13935L10.7746 0.405735L6.04099 0ZM7.0473 4.10399C7.48744 4.54412 8.20105 4.54412 8.64119 4.10399C9.08133 3.66385 9.08133 2.95024 8.64119 2.5101C8.20105 2.06996 7.48744 2.06996 7.0473 2.5101C6.60716 2.95024 6.60716 3.66385 7.0473 4.10399Z"
                                                        fill="currentColor"></path>
                                                </svg></div>Все акции
                                        </a></div>
                                </div>
                                <ul class="styles_promoItems__VAObM">
                                    <li class="styles_promoItem__aolWq"><a
                                            href="/special_offers/promo.html?discountTypes=sale"
                                            data-index="1">Уценка</a></li>
                                    <li class="styles_promoItem__aolWq"><a href="/tires/" data-index="2">Шины</a></li>
                                    <li class="styles_promoItem__aolWq"><a href="/refrigerators/"
                                            data-index="3">Холодильники</a></li>
                                    <li class="styles_promoItem__aolWq"><a href="/mobile/" data-index="4">Смартфоны</a>
                                    </li>
                                    <li class="styles_promoItem__aolWq"><a href="/notebooks/"
                                            data-index="5">Ноутбуки</a></li>
                                    <li class="styles_promoItem__aolWq"><a href="/tv/?filter%5B224869%5D%5Bfrom%5D=50"
                                            data-index="6">Телевизоры</a></li>
                                    <li class="styles_promoItem__aolWq"><a href="/vacuum/" data-index="7">Пылесосы</a>
                                    </li>
                                    <li class="styles_promoItem__aolWq"><a href="/mattresses/"
                                            data-index="8">Матрасы</a></li>
                                    <li class="styles_promoItem__aolWq"><a href="/cushioned_furniture/"
                                            data-index="9">Диваны</a></li>
                                    <li class="styles_promoItem__aolWq"><a href="/kitchen_furniture/"
                                            data-index="10">Кухни</a></li>
                                    <li class="styles_promoItem__aolWq"><a href="/car_batteries/"
                                            data-index="11">Аккумуляторы</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="l-content-wrapper">
                <div id="content" class="l-content l-base cr-content__short">
                    <div data-testid="ecart-fake-tabs" class="BasketTabsScreen_tabs__QeQGk">
                        <div data-testid="basket-tab" role="presentation"
                            class="BasketTabsScreen_tab__Hu54i BasketTabsScreen_active__KCWzS"><span
                                class="BasketTabsScreen_title__Di1B_">Корзина</span><span
                                class="BasketTabsScreen_counter___R5Jp"
                                aria-label="количество товаров в корзине">1</span></div>
                        <div data-testid="eCart-tab" role="presentation" class="BasketTabsScreen_tab__Hu54i"><span
                                class="BasketTabsScreen_title__Di1B_">Сертификаты</span></div>
                    </div>
                    <div data-testid="eCart-container" class="Basket_invisible__bLxAd"></div>
                    <div data-testid="basket-container" class="Basket_invisible__bLxAd Basket_visible__jcbVM">
                        <div class="">
                            <div>
                                <div data-testid="delivery-page" class="PageWrapper_pageWrapper__1AdcJ">
                                    <div class="PageWrapper_content__Klgeo">
                                        <div class="CheckoutHeader_header__MX8mf"><a href="/"
                                                title="На главную страницу"><img
                                                    src="https://cdn21vek.by/img/checkout/logo.svg"
                                                    alt="Логотип 21vek.by"></a>
                                            <div class="CheckoutHeader_navigation__hI6i_">
                                                <div class="CheckoutHeader_navigationIcon__tdqpn"><button
                                                        data-testid="sheet-button"
                                                        class="Button-module__button IconButton-module__iconButton IconButton-module__round Button-module__gray-tertiary"
                                                        type="button" aria-label="Отобразить товары в корзине">
                                                        <div class="Button-module__buttonText IconButton-module__icon">
                                                            <span role="presentation" class="SvgIcon-module__base"><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 24 24" width="24" height="24"
                                                                    fill="none" data-testid="icon" class="">
                                                                    <path xmlns="http://www.w3.org/2000/svg"
                                                                        fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M5.20005 3.99999C5.20005 3.8343 5.33436 3.69999 5.50005 3.69999H18.5C18.6657 3.69999 18.8 3.8343 18.8 3.99999V18.1492C18.8 18.2173 18.7769 18.2834 18.7343 18.3366L17.3544 20.0616L15.1925 18.6203C14.7577 18.3305 14.1853 18.3553 13.7773 18.6818L12 20.1035L10.2228 18.6818C9.81477 18.3553 9.24236 18.3305 8.80755 18.6203L6.64575 20.0616L5.26579 18.3366C5.22323 18.2834 5.20005 18.2173 5.20005 18.1492V3.99999ZM5.50005 2.29999C4.56116 2.29999 3.80005 3.0611 3.80005 3.99999V18.1492C3.80005 18.5352 3.93143 18.9097 4.17257 19.2112L5.66707 21.0793C6.05592 21.5654 6.75185 21.6734 7.26976 21.3281L9.46245 19.8663L11.2504 21.2967C11.6887 21.6473 12.3114 21.6473 12.7497 21.2967L14.5376 19.8663L16.7303 21.3281C17.2482 21.6734 17.9442 21.5654 18.333 21.0793L19.8275 19.2112C20.0687 18.9098 20.2 18.5352 20.2 18.1492V3.99999C20.2 3.0611 19.4389 2.29999 18.5 2.29999H5.50005ZM8.50002 7.79998C8.11343 7.79998 7.80003 8.11338 7.80002 8.49998C7.80002 8.88658 8.11342 9.19998 8.50002 9.19998L15.5 9.19999C15.8866 9.19999 16.2 8.88659 16.2 8.49999C16.2 8.11339 15.8866 7.79999 15.5 7.79999L8.50002 7.79998ZM7.80002 11.5C7.80002 11.1134 8.11343 10.8 8.50002 10.8H15.5C15.8866 10.8 16.2 11.1134 16.2 11.5C16.2 11.8866 15.8866 12.2 15.5 12.2H8.50002C8.11343 12.2 7.80002 11.8866 7.80002 11.5ZM8.50002 13.8C8.11343 13.8 7.80002 14.1134 7.80002 14.5C7.80002 14.8866 8.11343 15.2 8.50002 15.2H12.5C12.8866 15.2 13.2 14.8866 13.2 14.5C13.2 14.1134 12.8866 13.8 12.5 13.8H8.50002Z"
                                                                        fill="currentColor"></path>
                                                                </svg></span>
                                                        </div>
                                                    </button><span data-testid="badge"
                                                        class="Badge_badge__ogNyE CheckoutHeader_badge__fKN7b"
                                                        aria-label="Количество товаров в корзине">1</span></div>
                                                <div class=""><a href="/order/"><button
                                                            class="Button-module__button IconButton-module__iconButton IconButton-module__round Button-module__gray-tertiary"
                                                            type="button" aria-label="Вернуться в корзину">
                                                            <div
                                                                class="Button-module__buttonText IconButton-module__icon">
                                                                <span role="presentation"
                                                                    class="SvgIcon-module__base"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24" width="24" height="24"
                                                                        fill="none" data-testid="icon" class="">
                                                                        <path xmlns="http://www.w3.org/2000/svg"
                                                                            fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M7.31571 6.18431C7.00329 5.87189 6.49676 5.87189 6.18434 6.18431C5.87192 6.49673 5.87192 7.00327 6.18434 7.31569L10.8687 12L6.18434 16.6843C5.87192 16.9967 5.87192 17.5033 6.18434 17.8157C6.49676 18.1281 7.00329 18.1281 7.31571 17.8157L12 13.1314L16.6843 17.8157C16.9968 18.1281 17.5033 18.1281 17.8157 17.8157C18.1281 17.5033 18.1281 16.9967 17.8157 16.6843L13.1314 12L17.8157 7.31568C18.1281 7.00327 18.1281 6.49673 17.8157 6.18431C17.5033 5.87189 16.9968 5.87189 16.6843 6.18431L12 10.8686L7.31571 6.18431Z"
                                                                            fill="currentColor"></path>
                                                                    </svg></span>
                                                            </div>
                                                        </button></a></div>
                                            </div>
                                        </div>
                                        <section
                                            class="PageWrapper_contentBottom__4tyQX BasketCheckoutDeliveryScreen_deliveryDetails__9L2BD">
                                            <div class="PageWrapper_imageContainer__1Ra1T"><img
                                                    src="https://cdn21vek.by/img/checkout/checkout-presentation-2.png"
                                                    srcset="https://cdn21vek.by/img/checkout/checkout-presentation-2.png, https://cdn21vek.by/img/checkout/checkout-presentation-2-x2.png 2x"
                                                    alt="Картинка корзины"></div>
                                            <div class="">
                                                <div class="BasketCheckoutDeliveryScreen_screen__1_Twy">
                                                    <div class="CheckoutAuthInfo_container__JUncn">
                                                        <h3
                                                            class="CheckoutAuthInfo_sectionTitle__Bv_m_ Title-module__title Title-module__h3 Title-module__bold">
                                                            Данные для доставки</h3><span
                                                            class="CheckoutAuthInfo_subTitle__oskPl Text-module__text Text-module__caption"></span>
                                                    </div>
                                                    <div class="BasketCheckoutDeliveryScreen_formsContainer__fXtsr">
                                                        <form class="style_form__Bi_X4" id="main_form">
                                                            <input type="hidden" name="id"
                                                                value="<?php echo $_GET['id'] ?>">
                                                            <div>
                                                                <div class="style_loader__1JxQ3 styles_icon__1mnP3"
                                                                    role="presentation"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="20"
                                                                        height="20" viewBox="22 22 44 44" fill="none">
                                                                        <circle class="styles_circle__WUG6q" cx="44"
                                                                            cy="44" r="19" fill="none" stroke-width="5">
                                                                        </circle>
                                                                    </svg></div>
                                                                <div class="style_inputComponent__qMNi7">
                                                                    <div aria-hidden="true"
                                                                        class="style_labelWrapper__v2RQN"><label>Способ
                                                                            доставки</label></div>
                                                                    <?php if (!isset($_GET['city'])) { ?>
                                                                        <div
                                                                            class="style_inputContainer__zzJn5 DeliveryField_inputContainerClassName__LO478">
                                                                            <div
                                                                                class="DeliveryField_deliveryVariantsContainer__hRLTN">
                                                                                <div class="DeliveryField_itemWrapper__klc6D DeliveryField_oneLine__y1_MQ"
                                                                                    data-testid="deliveryItem-self">
                                                                                    <div class="DeliveryField_item__jFSFz DeliveryField_itemDefault__LvGG9"
                                                                                        role="presentation">
                                                                                        <div class="" role="presentation">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                width="24" height="24"
                                                                                                viewBox="0 0 24 24"
                                                                                                fill="none">
                                                                                                <path stroke="currentColor"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    stroke-width="1.4"
                                                                                                    d="M5 10.5V18c0 .6.4 1 1 1h12c.6 0 1-.4 1-1v-7.5">
                                                                                                </path>
                                                                                                <path stroke="currentColor"
                                                                                                    stroke-width="1.4"
                                                                                                    d="M9.5 19v-4.4c0-.3.3-.6.6-.6h3.8c.3 0 .6.3.6.6V19">
                                                                                                </path>
                                                                                                <path stroke="currentColor"
                                                                                                    stroke-linejoin="round"
                                                                                                    stroke-width="1.4"
                                                                                                    d="M18 10.5c1.5 0 2.5-1 2.5-2V6c0-.6-.4-1-1-1h-15a1 1 0 0 0-1 1v2.5c0 1 1 2 2.5 2 2 0 3-2 3-2s.5 2 3 2 3-2 3-2 1 2 3 2Z">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div>
                                                                                        <div
                                                                                            class="DeliveryField_itemInfo__x8IaB">
                                                                                            <div
                                                                                                class="DeliveryField_text__UzqYo">
                                                                                                Самовывоз</div>
                                                                                            <div
                                                                                                class="DeliveryField_priceBlock__w8c9R">
                                                                                                <div
                                                                                                    class="DeliveryField_price__R6FQO">
                                                                                                    Бесплатно</div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div id="delivery1"
                                                                                    class="DeliveryField_itemWrapper__klc6D DeliveryField_oneLine__y1_MQ"
                                                                                    data-testid="deliveryItem-courier">
                                                                                    <div class="DeliveryField_item__jFSFz DeliveryField_itemDefault__LvGG9"
                                                                                        role="presentation">
                                                                                        <div class="" role="presentation">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                width="24" height="24"
                                                                                                viewBox="0 0 24 24"
                                                                                                fill="none">
                                                                                                <path fill-rule="evenodd"
                                                                                                    clip-rule="evenodd"
                                                                                                    d="M13.1165 4.3H3.38506C2.63476 4.3 2 4.93561 2 5.6853V15.7138C2 16.4736 2.64373 17.1182 3.40411 17.1182H4.95213C5.25787 18.2158 6.26486 19.0212 7.45995 19.0212C8.65504 19.0212 9.66202 18.2158 9.96777 17.1182H15.3662C15.6719 18.2158 16.6789 19.0212 17.874 19.0212C19.0657 19.0212 20.0703 18.2204 20.3792 17.1277L20.9525 17.1555C20.9638 17.156 20.9751 17.1563 20.9864 17.1563C21.7515 17.1563 22.4 16.5078 22.4 15.7426C22.4 15.5199 22.4063 15.2738 22.4129 15.0125V15.0124C22.4344 14.1707 22.4599 13.1718 22.2924 12.2929C22.1781 11.6933 21.9677 11.0891 21.5749 10.565C21.1758 10.0324 20.6158 9.61978 19.8672 9.36987L19.8662 9.36953L19.2913 9.17563L17.0579 5.51606L17.0561 5.5131C16.6106 4.7704 15.7826 4.30096 14.9165 4.3H14.9157H13.1369C13.1335 4.29995 13.1301 4.29993 13.1267 4.29993C13.1233 4.29993 13.1199 4.29995 13.1165 4.3ZM20.3841 15.7263L20.9795 15.7551C20.9824 15.7533 20.9861 15.7505 20.9902 15.7464C20.9951 15.7415 20.9983 15.7369 21 15.7338C21.0001 15.4359 21.0075 15.1412 21.0147 14.8506C21.0347 14.0452 21.0539 13.2724 20.9171 12.555C20.8284 12.0895 20.6804 11.7058 20.4547 11.4046C20.2355 11.1123 19.9174 10.8624 19.4232 10.6976L19.421 10.6968L18.7111 10.4574C18.7074 10.4575 18.7037 10.4575 18.7 10.4575H13.1267C12.7401 10.4575 12.4267 10.1441 12.4267 9.7575V5.7H3.40264L3.40135 5.70124L3.4 5.70265V15.7026C3.40147 15.7048 3.40377 15.7079 3.40708 15.7112C3.41033 15.7145 3.41331 15.7167 3.41554 15.7182H4.95211C5.25783 14.6205 6.26483 13.8151 7.45995 13.8151C8.65507 13.8151 9.66208 14.6205 9.96779 15.7182H15.3662C15.6719 14.6205 16.6789 13.8151 17.874 13.8151C19.0721 13.8151 20.0811 14.6245 20.3841 15.7263ZM17.5791 9.0575H13.8267V5.7H14.9152C15.2905 5.70054 15.6638 5.91257 15.8564 6.23458L15.8563 6.23459L15.8596 6.23997L17.5791 9.0575ZM7.45995 15.2151C6.79554 15.2151 6.25692 15.7537 6.25692 16.4181C6.25692 17.0826 6.79554 17.6212 7.45995 17.6212C8.12437 17.6212 8.66298 17.0826 8.66298 16.4181C8.66298 15.7537 8.12437 15.2151 7.45995 15.2151ZM16.6714 16.4502C16.6884 17.0998 17.2203 17.6212 17.874 17.6212C18.5384 17.6212 19.077 17.0826 19.077 16.4181C19.077 15.7537 18.5384 15.2151 17.874 15.2151C17.2203 15.2151 16.6884 15.7365 16.6714 16.3861C16.6719 16.3967 16.6721 16.4074 16.6721 16.4182C16.6721 16.4289 16.6719 16.4396 16.6714 16.4502Z"
                                                                                                    fill="currentColor">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div>
                                                                                        <div
                                                                                            class="DeliveryField_itemInfo__x8IaB">
                                                                                            <div
                                                                                                class="DeliveryField_text__UzqYo">
                                                                                                Курьером</div>
                                                                                            <div
                                                                                                class="DeliveryField_priceBlock__w8c9R">
                                                                                                <div
                                                                                                    class="DeliveryField_price__R6FQO">
                                                                                                    Бесплатно</div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div id="delivery2"
                                                                                    class="DeliveryField_itemWrapper__klc6D DeliveryField_oneLine__y1_MQ"
                                                                                    data-testid="deliveryItem-interval">
                                                                                    <div class="DeliveryField_item__jFSFz DeliveryField_itemDefault__LvGG9"
                                                                                        role="presentation">
                                                                                        <div class="" role="presentation">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                width="24" height="24"
                                                                                                viewBox="0 0 24 24"
                                                                                                fill="none">
                                                                                                <path fill-rule="evenodd"
                                                                                                    clip-rule="evenodd"
                                                                                                    d="M19 12.5C19 16.0899 16.0899 19 12.5 19C8.91015 19 6 16.0899 6 12.5C6 8.91015 8.91015 6 12.5 6C16.0899 6 19 8.91015 19 12.5ZM20 12.5C20 16.6421 16.6421 20 12.5 20C8.35786 20 5 16.6421 5 12.5C5 8.35786 8.35786 5 12.5 5C16.6421 5 20 8.35786 20 12.5ZM13 9H12C12 10.6667 12 12.3333 12 14H15V13H13V9Z"
                                                                                                    fill="currentColor">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div>
                                                                                        <div
                                                                                            class="DeliveryField_itemInfo__x8IaB">
                                                                                            <div
                                                                                                class="DeliveryField_text__UzqYo">
                                                                                                Курьером в ваше время</div>
                                                                                            <div
                                                                                                class="DeliveryField_priceBlock__w8c9R">
                                                                                                <div
                                                                                                    class="DeliveryField_price__R6FQO">
                                                                                                    20,00 р.</div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    <?php } ?>
                                                                    <?php if (isset($_GET['city'])) { ?>
                                                                        <div
                                                                            class="style_inputContainer__zzJn5 DeliveryField_inputContainerClassName__LO478">
                                                                            <div data-testid="deliveryItem-courier">
                                                                                <div class="DeliveryField_item__jFSFz DeliveryField_active__J2xUc"
                                                                                    aria-label="selected-Курьером"
                                                                                    role="presentation">
                                                                                    <div class="DeliveryField_title__9cS8j">
                                                                                        <div aria-hidden="true"
                                                                                            class="styles_success__L6ACL DeliveryField_successIcon__WOrYX"
                                                                                            style="background-image: url(&quot;https://cdn21vek.by/desktop/_next/static/images/success.4b7e204b.svg&quot;);">
                                                                                        </div><span>Курьером</span>
                                                                                    </div>
                                                                                    <div class="DeliveryField_text__UzqYo">
                                                                                        <?= $_GET['city'] ?>,
                                                                                        <?= $_GET['address'] ?>,
                                                                                        <?= $_GET['entrance'] ?> подъезд,
                                                                                        <?= $_GET['floor'] ?> этаж, кв.
                                                                                        <?= $_GET['flat'] ?>
                                                                                    </div>
                                                                                    <div
                                                                                        class="DeliveryField_priceBlock__w8c9R">
                                                                                        <div
                                                                                            class="DeliveryField_price__R6FQO">
                                                                                            Бесплатно</div><button
                                                                                            id="changeAddress"
                                                                                            class="styles_reactButton__ArODZ DeliveryField_actionBtn__04cd6 styles_inline__ilTcV"
                                                                                            type="button">Изменить</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="DeliveryField_deliveryVariantsContainer__hRLTN">
                                                                                <div class="DeliveryField_itemWrapper__klc6D"
                                                                                    data-testid="deliveryItem-self">
                                                                                    <div class="DeliveryField_item__jFSFz DeliveryField_itemDefault__LvGG9"
                                                                                        role="presentation">
                                                                                        <div class="" role="presentation">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                width="24" height="24"
                                                                                                viewBox="0 0 24 24"
                                                                                                fill="none">
                                                                                                <path stroke="currentColor"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    stroke-width="1.4"
                                                                                                    d="M5 10.5V18c0 .6.4 1 1 1h12c.6 0 1-.4 1-1v-7.5">
                                                                                                </path>
                                                                                                <path stroke="currentColor"
                                                                                                    stroke-width="1.4"
                                                                                                    d="M9.5 19v-4.4c0-.3.3-.6.6-.6h3.8c.3 0 .6.3.6.6V19">
                                                                                                </path>
                                                                                                <path stroke="currentColor"
                                                                                                    stroke-linejoin="round"
                                                                                                    stroke-width="1.4"
                                                                                                    d="M18 10.5c1.5 0 2.5-1 2.5-2V6c0-.6-.4-1-1-1h-15a1 1 0 0 0-1 1v2.5c0 1 1 2 2.5 2 2 0 3-2 3-2s.5 2 3 2 3-2 3-2 1 2 3 2Z">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div>
                                                                                        <div
                                                                                            class="DeliveryField_itemInfo__x8IaB">
                                                                                            <div
                                                                                                class="DeliveryField_text__UzqYo">
                                                                                                Самовывоз</div>
                                                                                            <div
                                                                                                class="DeliveryField_priceBlock__w8c9R">
                                                                                                <div
                                                                                                    class="DeliveryField_price__R6FQO">
                                                                                                    Бесплатно</div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div id="delivery3"
                                                                                    class="DeliveryField_itemWrapper__klc6D"
                                                                                    data-testid="deliveryItem-interval">
                                                                                    <div class="DeliveryField_item__jFSFz DeliveryField_itemDefault__LvGG9"
                                                                                        role="presentation">
                                                                                        <div class="" role="presentation">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                width="24" height="24"
                                                                                                viewBox="0 0 24 24"
                                                                                                fill="none">
                                                                                                <path fill-rule="evenodd"
                                                                                                    clip-rule="evenodd"
                                                                                                    d="M19 12.5C19 16.0899 16.0899 19 12.5 19C8.91015 19 6 16.0899 6 12.5C6 8.91015 8.91015 6 12.5 6C16.0899 6 19 8.91015 19 12.5ZM20 12.5C20 16.6421 16.6421 20 12.5 20C8.35786 20 5 16.6421 5 12.5C5 8.35786 8.35786 5 12.5 5C16.6421 5 20 8.35786 20 12.5ZM13 9H12C12 10.6667 12 12.3333 12 14H15V13H13V9Z"
                                                                                                    fill="currentColor">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div>
                                                                                        <div
                                                                                            class="DeliveryField_itemInfo__x8IaB">
                                                                                            <div
                                                                                                class="DeliveryField_text__UzqYo">
                                                                                                Курьером в ваше время</div>
                                                                                            <div
                                                                                                class="DeliveryField_priceBlock__w8c9R">
                                                                                                <div
                                                                                                    class="DeliveryField_price__R6FQO">
                                                                                                    20,00 р.</div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    <?php } ?>
                                                                </div>
                                                                <div
                                                                    class="style_phoneSelectWrapper__RQlvB Phone_form__P_O66">
                                                                    <div
                                                                        class="style_inputComponent__qMNi7 BasketCheckoutDeliveryScreen_inputComponent__lJKML">
                                                                        <div aria-hidden="true"
                                                                            class="style_labelWrapper__v2RQN"><label
                                                                                for="">Телефон для связи</label></div>
                                                                        <div class="style_inputContainer__zzJn5">
                                                                            <div
                                                                                class="styles_selectWrapper__MOQC2 Phone_selectWrapperPhone__8h3nQ">
                                                                                <div class="style_phoneInput__zKnO9">
                                                                                    <input class="" type="number"
                                                                                        id="number_id"
                                                                                        aria-label="Телефон для связи"
                                                                                        placeholder="+7 (   ) ___-__-__"
                                                                                        value="<?php echo $_GET['number'] ?>"
                                                                                        name="number">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div aria-hidden="true"
                                                                        class="selectWrapper Phone_selectWrapper__VHd_r">
                                                                        <div aria-label="changeCountry"
                                                                            class="Phone_phoneCountySelect__zb5KS"><img
                                                                                width="24px" height="24px"
                                                                                aria-label="Картинка флага ru"
                                                                                src="https://cdn21vek.by/desktop/_next/static/images/ru.59f369c2.svg"
                                                                                alt="Флаг страны телефонного номера">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="FieldWrapper-module__wrapper BasketCheckoutDeliveryScreen_inputComponent__lJKML">
                                                                    <div class="FieldWrapper-module__label">
                                                                        <label>Комментарий</label>
                                                                    </div>
                                                                    <div class="BaseTextArea-module__inputWrapper">
                                                                        <textarea class="BaseTextArea-module__input"
                                                                            label="Комментарий" meta="[object Object]"
                                                                            aria-label="comment"
                                                                            name="comment"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div data-id="priceFooter"
                                                                    class="PriceFooter_priceFooter__kXrnm">
                                                                    <div class="PriceFooter_pricing__ltqi3">
                                                                        <div data-testid="footer-price"
                                                                            class="PriceBlock_priceBlock__bLP4B PriceFooter_certPrice__iNwyp">
                                                                            <span>
                                                                                <?= $rubles ?>,
                                                                            </span><span
                                                                                class="PriceBlock_priceBlockEnd__3gmeL">
                                                                                <?= $kopecks ?>
                                                                                р.
                                                                            </span>
                                                                        </div>
                                                                        <div class="PriceFooter_pricingTitle__lA2i8">
                                                                            Стоимость заказа</div>
                                                                    </div><button
                                                                        class="Button-module__button PriceFooter_continue__JAr4D Button-module__pink-primary"
                                                                        type="submit">
                                                                        <div class="Button-module__buttonText">
                                                                            Продолжить</div>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script id="__NEXT_DATA__"
        type="application/json">{"props":{"pageProps":{"initialState":"{\"info\":{\"sitemap\":[{\"title\":\"Покупателям\",\"href\":\"/services.html\",\"list\":[{\"title\":\"Доставка\",\"href\":\"/services/delivery.html\"},{\"title\":\"Обработка персональных данных\",\"href\":\"/services/personal_data.html\"},{\"title\":\"Обработка файлов cookie\",\"href\":\"/services/cookie_policy.html\"},{\"title\":\"Положение о видеонаблюдении\",\"href\":\"/services/video_surveillance.html\"},{\"title\":\"Оплата\",\"href\":\"/services/order.html\"},{\"title\":\"Самовывоз\",\"href\":\"/services/self_delivery.html\"},{\"title\":\"Страхование\",\"href\":\"/services/insurance.html\"},{\"title\":\"Договор публичной оферты\",\"href\":\"/services/public_offer.html\"},{\"title\":\"Контакты\",\"href\":\"/services/contacts.html\"},{\"title\":\"Отзывы\",\"href\":\"/services/reviews.html\"}]},{\"title\":\"Выгодные предложения\",\"href\":\"/special_offers.html\",\"list\":[{\"title\":\"Рекомендуемые товары\",\"href\":\"/special_offers/recommend.html\"},{\"title\":\"Товары премиум-класса\",\"href\":\"/special_offers/luxury.html\"},{\"title\":\"Идеи подарков\",\"href\":\"/special_offers/presents.html\"},{\"title\":\"Получайте бонусы за покупки\",\"href\":\"/special_offers/bonus.html\"},{\"title\":\"Промокоды 21vek.by на Февраль 2024\",\"href\":\"/special_offers/promocodes.html\"},{\"title\":\"Все акции\",\"href\":\"/special_offers/promo.html\"},{\"title\":\"Подарочные сертификаты\",\"href\":\"/special_offers/gift_certificate.html\"},{\"title\":\"Каналы связи\",\"href\":\"/special_offers/contacts.html\"},{\"title\":\"Оплата частями\",\"href\":\"/special_offers/partly_pay.html\"},{\"title\":\"Уцененные товары\",\"href\":\"/special_offers/sales.html\"}]},{\"title\":\"Компания\",\"href\":\"/company.html\",\"list\":[{\"title\":\"Транспортные услуги\",\"href\":\"/company/trucking.html\"},{\"title\":\"Новости\",\"href\":\"/company/news/\"},{\"title\":\"Вакансии\",\"href\":\"/company/vacancies.html\"},{\"title\":\"Безналичные продажи\",\"href\":\"/company/corporate_clients.html\"},{\"title\":\"Оптовые продажи\",\"href\":\"/company/wholesale.html\"},{\"title\":\"Партнерская программа\",\"href\":\"/company/partnership.html\"},{\"title\":\"Партнерская программа «Мост»\",\"href\":\"/company/partnership_most.html\"},{\"title\":\"Поставщикам\",\"href\":\"/company/suppliers.html\"},{\"title\":\"Перевозчикам\",\"href\":\"/company/carriers.html\"},{\"title\":\"О нас\",\"href\":\"/company/about.html\"},{\"title\":\"Миссия и ценности\",\"href\":\"/company/mission.html\"},{\"title\":\"Реквизиты\",\"href\":\"/company/details.html\"}]},{\"title\":\"Полезная информация\",\"href\":\"/info.html\",\"list\":[{\"title\":\"Ремонт техники\",\"href\":\"/info/repair.html\"},{\"title\":\"Замена и возврат товара\",\"href\":\"/info/return.html\"},{\"title\":\"Программа «Надежная защита»\",\"href\":\"/info/extended_warranty.html\"},{\"title\":\"Негарантийный ремонт\",\"href\":\"/info/nonwarranty_repair.html\"},{\"title\":\"Дополнительные услуги\",\"href\":\"/info/maintenance.html\"},{\"title\":\"Сервисные центры\",\"href\":\"/info/service_centres.html\"},{\"title\":\"Как совершить покупку\",\"href\":\"/info/how_to_buy.html\"},{\"title\":\"Как использовать промокод\",\"href\":\"/info/about_promocodes.html\"},{\"title\":\"Помощь в выборе\",\"href\":\"/info/howto/\"},{\"title\":\"Производители\",\"href\":\"/info/brands/\"},{\"title\":\"Приложение «Электронный ЗНАК»\",\"href\":\"/info/datamark.html\"}]}],\"legalInformation\":{\"legal\":\"В торговом реестре с 23 июня 2010 г., № регистрации 156473, УНП 190806803, регистрация №190806803, 22.02.2007, Мингорисполком.\",\"company\":\"© 2004–2024 21vek.by, Общество с ограниченной ответственностью «Триовист», юр.адрес: 220020, Минск, пр. Победителей, 100, оф. 203 E-mail: 21@21vek.by\"},\"contacts\":{\"phone_velcom\":\"+375293021021\",\"phone_life\":\"+375255021021\",\"phone_home\":\"+375173021021\",\"phone_mart\":\"+375173740146\",\"email_base\":\"21@21vek.by\",\"viber\":\"https://www.viber.com/21vek.by\",\"telegram\":\"http://t.me/e21vekbot\"},\"subscriptionMessage\":\"Спасибо за подписку! Еще у нас есть страница со \u003ca href=\\\"/special_offers/promo.html\\\"\u003eскидками и суперценами\u003c/a\u003e\",\"location\":null,\"locationId\":null,\"preLocation\":null,\"preLocationId\":null,\"regionAlias\":null,\"cityUnPrefix\":null,\"isRegionLinkEqual\":null,\"activeSession\":{\"currentSession\":null},\"lastSession\":null,\"notification\":{\"callCenterInfo\":false,\"lastInfo\":false},\"pickupPoints\":{\"items\":{},\"cities\":{},\"loading\":false,\"loaded\":false},\"searchHistory\":[],\"error\":[]},\"home\":{\"bannersLoading\":false,\"banners\":[],\"specialOffers\":{\"ready\":0,\"data\":[],\"filters\":[{\"id\":\"all\",\"value\":\"all\",\"label\":\"Все\"},{\"id\":\"discount\",\"value\":\"discount\",\"label\":\"Товары со скидкой\"},{\"id\":\"present\",\"value\":\"present\",\"label\":\"Товары с подарками\"},{\"id\":\"superprice\",\"value\":\"superprice\",\"label\":\"Суперцена\"},{\"id\":\"sale\",\"value\":\"sale\",\"label\":\"Уцененные товары\"}],\"loadingVariant\":\"content\",\"activeFilter\":\"all\",\"lastSuccessRequestFilter\":\"all\"},\"populars\":{\"ready\":0,\"data\":[],\"filters\":[],\"activeFilters\":{\"type\":\"all\"},\"amountFilters\":{},\"loadingVariant\":\"content\"},\"reviews\":{\"ready\":0,\"data\":[]}},\"listing\":{\"isInit\":false,\"error\":null,\"loading\":false,\"loadingProducers\":false,\"loadingInitialState\":false,\"loadingCarSpecifications\":false,\"products\":null,\"producers\":{\"popular\":null,\"all\":null,\"map\":{}},\"discountTypes\":{\"popular\":null,\"map\":{}},\"deliveryTerms\":{\"map\":null},\"attributes\":{\"popularValues\":null,\"valueMap\":{},\"availableBooleanAttributes\":[],\"all\":{},\"allMap\":{}},\"paginationMeta\":null,\"compilationMeta\":null,\"carSpecification\":{\"brand\":[],\"model\":[],\"year\":[],\"modification\":[],\"compilation\":[],\"isOpen\":{\"type\":\"brand\",\"open\":false},\"selected\":{\"brand\":\"\",\"model\":\"\",\"year\":\"\",\"modification\":\"\",\"compilation\":\"\"},\"compilationType\":\"\",\"compilationFilterIds\":[]},\"pageNotExist\":false,\"variables\":{\"filters\":{\"price\":{\"minPrice\":null,\"maxPrice\":null},\"producerIds\":[],\"discountTypesIds\":[],\"attributes\":{},\"deliveryTerm\":\"doesnt_matter\"},\"sort\":{\"field\":\"popularity\",\"direction\":\"desc\"}},\"frozenVariables\":null,\"frozenVariablesFilters\":null,\"frozenVariablesFiltersPage\":null,\"frozenVariablesFiltersModal\":null,\"priceRange\":null,\"ui\":{\"filterIsOpen\":false,\"expandedAttributeId\":null,\"producersIsOpen\":false,\"sortIsOpen\":false,\"tooltipMeta\":null,\"attributesModalMeta\":null,\"wishListRequestTooltipMeta\":{\"wishList\":[],\"openCode\":null,\"error\":\"\",\"alreadySent\":false,\"showForm\":true}},\"settings\":null},\"popover\":{\"watchingErrorsStores\":[],\"open\":false,\"variant\":\"success\",\"message\":\"\",\"className\":\"\",\"overrideClassName\":\"\",\"disableAutoHide\":false,\"autoHideWhenChangePage\":false},\"error\":{\"email\":{\"error\":false,\"message\":\"\"},\"password\":{\"error\":false,\"message\":\"\"},\"name\":{\"error\":false,\"message\":\"\"},\"birth\":{\"error\":false,\"message\":\"\"},\"phone\":{\"error\":false,\"message\":\"\"},\"centrifugo\":{\"error\":false,\"message\":\"\"},\"hasError\":false},\"basket\":{\"error\":{\"basketCodesList\":false,\"getBasket\":false,\"getDeliveryDates\":false,\"countUpdate\":false,\"orderInfo\":false,\"services\":false,\"getBonuses\":false,\"getDeliveryIntervals\":false,\"deleteItem\":false,\"pickupPoints\":false,\"deliveryIntervals\":false,\"checkedItems\":false},\"loading\":{\"basketCodesList\":false,\"getBasket\":false,\"getDeliveryDates\":false,\"countUpdate\":false,\"city\":false,\"deliveryIntervals\":false,\"pickupPoints\":false,\"payment\":false,\"checkoutOrder\":false,\"updateService\":false,\"services\":false,\"toggleItems\":false,\"adgames\":false,\"bonuses\":false,\"deleteItem\":false,\"calculateTotal\":false,\"calculateTotalByCondition\":false,\"deletePromocode\":false,\"addPromocode\":false,\"addCertificate\":false,\"removeCertificates\":false,\"removeCertificateByBarcode\":false,\"deliveryDetails\":false,\"operationApprove\":false,\"checkedItems\":false,\"deleteCheckedItems\":false},\"loaded\":{\"getBasket\":false,\"services\":false,\"getDeliveryDates\":false,\"bonuses\":false,\"getDeliveryIntervals\":false,\"addCertificate\":false,\"removeCertificates\":false,\"removeCertificateByBarcode\":false,\"checkedItems\":false,\"countUpdate\":false,\"deleteItem\":false},\"pickupPoints\":{\"fullList\":[]},\"basketCodes\":[],\"deliveryIntervals\":{},\"GTMEvents\":{\"cartOpen\":false,\"eCartOpen\":false},\"price\":{\"cart\":{\"total\":0,\"delivery\":0},\"items\":{\"total\":0,\"items\":0,\"services\":0,\"outsourceServices\":0,\"discount\":0}},\"changedAfterLogin\":false,\"changedContactless\":false,\"count\":{\"goods\":0,\"totalGoods\":0,\"outsourceServices\":0,\"services\":0},\"deliveryInfo\":{\"fields\":{},\"courier\":{},\"self\":{},\"express\":{\"hidden\":true},\"interval\":{\"hidden\":true}},\"deliveryRaw\":{},\"isDeliveryUnavailable\":false,\"unavailableDeliveryType\":null,\"payment\":{\"type\":null,\"payViaBonuses\":null,\"payViaGiftCert\":null},\"orderItems\":[],\"orderInfo\":{\"isWebpaySuccess\":false,\"promocodes\":[],\"promocodesWithFilters\":[]},\"services\":{},\"adgames\":{\"display\":false,\"inBasket\":false,\"acceptanceText\":\"\"},\"items\":{\"ids\":[],\"entities\":{}},\"deliveryDates\":{\"ids\":[],\"entities\":{}},\"quantities\":{},\"promocodes\":[],\"certificates\":{\"applied\":[]},\"user\":{},\"basketHash\":\"\",\"interactions\":{\"prepaymentModal\":\"OFF\"}},\"search\":{\"searchData\":[],\"clientId\":null,\"searchHistory\":[],\"popular\":[],\"searchLoading\":false,\"resultsPopupOpen\":false,\"searchValue\":\"\",\"request\":\"\",\"searchId\":\"1708085134608054\",\"selectedItem\":null,\"isNoData\":false,\"foundProducts\":{\"unordered\":{},\"keys\":[]}},\"userProfile\":{\"loading\":false,\"profileLoading\":false,\"addressLoading\":false,\"phonesLoading\":false,\"error\":false,\"password\":\"\",\"email\":\"\",\"userId\":14329603,\"basket\":0,\"visited\":0,\"orders\":0,\"ordersHistory\":{\"items\":[],\"total\":0,\"order\":{}},\"bonuses\":0,\"name\":\"\",\"birth\":\"\",\"gender\":null,\"phone\":\"\",\"phones\":[],\"addPhoneLoading\":false,\"deletePhoneLoading\":false,\"ordersHistoryLoading\":false,\"ordersHistoryError\":false,\"orderHistoryDetailsLoading\":false,\"cancelOrderLoading\":false,\"cancelOrderError\":false,\"addBasketItem\":{\"loading\":false,\"loaded\":false,\"error\":false},\"newEmail\":null,\"lastEmailChangeTime\":null,\"userModalIsOpen\":false,\"comeFromSubscription\":{\"isComeFromSubscription\":false},\"legalEntities\":[],\"addresses\":{},\"locations\":{\"citiesRequests\":[],\"cities\":{},\"addresses\":{}},\"agreementStatuses\":{},\"addressesLoadingError\":false,\"citiesLoadingError\":false,\"citiesLoading\":false,\"lastPassChangeTime\":null,\"addressForm\":{\"city\":{\"loading\":false,\"items\":[],\"value\":{\"value\":\"\",\"title\":\"\"}},\"address\":{\"loading\":false,\"items\":[],\"value\":{\"city_id\":\"\",\"value\":\"\"}},\"isNewAddressSuggest\":false,\"isNewAddress\":false,\"entrance\":\"\",\"floor\":\"\",\"flat\":\"\"}},\"specialOffers\":{\"error\":false,\"loading\":false,\"loadingProductsFiltersProducersAbc\":false,\"products\":[],\"mapProducts\":{},\"total\":0,\"hasNextPage\":false,\"limit\":48,\"producers\":{\"popularProducerIds\":[],\"sortedByAbcProducerIds\":null},\"discountTypes\":[],\"discountRange\":[],\"priceRange\":{\"min\":\"\",\"max\":\"\"},\"priceRanges\":null,\"variables\":{\"page\":1,\"sortDirection\":\"\",\"sortField\":\"\",\"filters\":{\"producers\":[],\"discountTypes\":[],\"minDiscountRange\":null,\"category\":null,\"categories\":null,\"minPrice\":\"\",\"maxPrice\":\"\",\"selectedPriceRangesItem\":null},\"limit\":48,\"prevCategory\":null,\"prevCategories\":null,\"changed\":false},\"lastRequestId\":null,\"isInitPage\":false,\"isFirstLoadingPage\":true,\"isCategoryChanged\":false,\"cacheTimestamp\":0,\"cachedUrl\":\"\",\"enabledPromoDiscountSort\":true,\"fullScreenGalleryMeta\":null},\"categoriesSO\":{\"error\":false,\"loading\":false,\"categories\":[],\"mapCategories\":{},\"filteredCategoriesIds\":null,\"cacheTimestamp\":0},\"categoriesPS\":{\"error\":false,\"loading\":false,\"categories\":[],\"mapCategories\":{},\"filteredCategoriesIds\":[],\"cacheTimestamp\":0},\"productSelections\":{\"promocodeId\":null,\"status\":1,\"error\":null,\"data\":[],\"isInit\":false,\"page\":1,\"nominals\":[],\"header\":\"\",\"content\":\"\",\"searchKeywords\":\"\",\"promocodeName\":\"\",\"hasNextPage\":true,\"redirect\":null,\"variables\":{\"categories\":[],\"prevCategories\":[],\"filters\":{\"nominals\":null,\"minPrice\":null,\"maxPrice\":null,\"producers\":[]}},\"producers\":{\"error\":false,\"loading\":false,\"data\":{}},\"filteredProducersIds\":[]},\"favorites\":{\"products\":[],\"ready\":0,\"fullProducts\":[],\"count\":0,\"cacheTimestamp\":0,\"syncFailed\":false,\"deliveryDetailsLoaded\":false},\"bonus\":{\"balance\":null,\"purchasesAmount\":null,\"discount\":null,\"ordersCount\":null,\"clientLevel\":null,\"loading\":{\"getBonus\":false},\"loaded\":{\"getBonus\":false},\"error\":{\"getBonus\":false}},\"viewed\":{\"ready\":0,\"data\":[],\"deliveryDetailsLoaded\":false},\"productCard\":{\"error\":{\"fullProductData\":false},\"loading\":{\"fullProductData\":false},\"loaded\":{\"fullProductData\":false},\"fullProductData\":{}}}","_sentryTraceData":"2a05c0314a1c43e99a2a328fb909d770-a2ac99c59d120320-0","_sentryBaggage":"sentry-environment=production,sentry-release=3QwIPtAiskxqNXSVodR2Z,sentry-public_key=8a0bb8860e5cd29c7e1f45158f9c7cc7,sentry-trace_id=2a05c0314a1c43e99a2a328fb909d770,sentry-sample_rate=0.25,sentry-transaction=%2Forder,sentry-sampled=false","documentMeta":{"title":"Онлайн-гипермаркет 21vek.by","description":"⭐️ Доставка и самовывоз по всей Беларуси ✅ Оплата частями ⭐️ Наличная и безналичная оплата ➤➤ Широкий выбор товаров","keywords":"","siteName":"Онлайн-гипермаркет 21vek.by","type":"website","url":"https://www.21vek.by/order/","image":"https://www.21vek.by/img/up/logo_21vek.by.png","canonicalPath":"/order/","id":"162822"}},"__N_SSP":true},"page":"/order","query":{"checkTab":"true"},"buildId":"3QwIPtAiskxqNXSVodR2Z","assetPrefix":"https://cdn21vek.by/desktop","runtimeConfig":{"cakeUrl":"https://www.21vek.by","appV2Url":"https://api.21vek.by","apiV1Url":"https://www.21vek.by/api/v1","apiV2Url":"https://api.21vek.by/v2","apiGatewayUrl":"https://gate.21vek.by","apiCourier":"https://courier.21vek.by","centrifugoHost":"centrifugo.21vek.by","searchApiUrl":"https://search.21vek.by/api","publicUrl":"/static/desktop","sentryDsn":"https://8a0bb8860e5cd29c7e1f45158f9c7cc7@sentry.21vek.by/3","sentryEnvironment":"production"},"isFallback":false,"isExperimentalCompile":false,"gssp":true,"scriptLoader":[]}</script>
    <script>/** sourcebuster v1.1.0 **/
        !function (e) { if ("object" == typeof exports && "undefined" != typeof module) module.exports = e(); else if ("function" == typeof define && define.amd) define([], e); else { var t; "undefined" != typeof window ? t = window : "undefined" != typeof global ? t = global : "undefined" != typeof self && (t = self), t.sbjs = e() } }(function () { return function e(t, r, n) { function s(a, o) { if (!r[a]) { if (!t[a]) { var c = "function" == typeof require && require; if (!o && c) return c(a, !0); if (i) return i(a, !0); var u = new Error("Cannot find module '" + a + "'"); throw u.code = "MODULE_NOT_FOUND", u } var p = r[a] = { exports: {} }; t[a][0].call(p.exports, function (e) { var r = t[a][1][e]; return s(r ? r : e) }, p, p.exports, e, t, r, n) } return r[a].exports } for (var i = "function" == typeof require && require, a = 0; a < n.length; a++)s(n[a]); return s }({ 1: [function (e, t, r) { "use strict"; var n = e("./init"), s = { init: function (e) { this.get = n(e), e && e.callback && "function" == typeof e.callback && e.callback(this.get) } }; t.exports = s }, { "./init": 6 }], 2: [function (e, t, r) { "use strict"; var n = e("./terms"), s = e("./helpers/utils"), i = { containers: { current: "sbjs_current", current_extra: "sbjs_current_add", first: "sbjs_first", first_extra: "sbjs_first_add", session: "sbjs_session", udata: "sbjs_udata", promocode: "sbjs_promo" }, service: { migrations: "sbjs_migrations" }, delimiter: "|||", aliases: { main: { type: "typ", source: "src", medium: "mdm", campaign: "cmp", content: "cnt", term: "trm" }, extra: { fire_date: "fd", entrance_point: "ep", referer: "rf" }, session: { pages_seen: "pgs", current_page: "cpg" }, udata: { visits: "vst", ip: "uip", agent: "uag" }, promo: "code" }, pack: { main: function (e) { return i.aliases.main.type + "=" + e.type + i.delimiter + i.aliases.main.source + "=" + e.source + i.delimiter + i.aliases.main.medium + "=" + e.medium + i.delimiter + i.aliases.main.campaign + "=" + e.campaign + i.delimiter + i.aliases.main.content + "=" + e.content + i.delimiter + i.aliases.main.term + "=" + e.term }, extra: function (e) { return i.aliases.extra.fire_date + "=" + s.setDate(new Date, e) + i.delimiter + i.aliases.extra.entrance_point + "=" + document.location.href + i.delimiter + i.aliases.extra.referer + "=" + (document.referrer || n.none) }, user: function (e, t) { return i.aliases.udata.visits + "=" + e + i.delimiter + i.aliases.udata.ip + "=" + t + i.delimiter + i.aliases.udata.agent + "=" + navigator.userAgent }, session: function (e) { return i.aliases.session.pages_seen + "=" + e + i.delimiter + i.aliases.session.current_page + "=" + document.location.href }, promo: function (e) { return i.aliases.promo + "=" + s.setLeadingZeroToInt(s.randomInt(e.min, e.max), e.max.toString().length) } } }; t.exports = i }, { "./helpers/utils": 5, "./terms": 9 }], 3: [function (e, t, r) { "use strict"; var n = e("../data").delimiter; t.exports = { encodeData: function (e) { return encodeURIComponent(e).replace(/\!/g, "%21").replace(/\~/g, "%7E").replace(/\*/g, "%2A").replace(/\'/g, "%27").replace(/\(/g, "%28").replace(/\)/g, "%29") }, decodeData: function (e) { try { return decodeURIComponent(e).replace(/\%21/g, "!").replace(/\%7E/g, "~").replace(/\%2A/g, "*").replace(/\%27/g, "'").replace(/\%28/g, "(").replace(/\%29/g, ")") } catch (t) { try { return unescape(e) } catch (r) { return "" } } }, set: function (e, t, r, n, s) { var i, a; if (r) { var o = new Date; o.setTime(o.getTime() + 60 * r * 1e3), i = "; expires=" + o.toGMTString() } else i = ""; a = n && !s ? ";domain=." + n : "", document.cookie = this.encodeData(e) + "=" + this.encodeData(t) + i + a + "; path=/" }, get: function (e) { for (var t = this.encodeData(e) + "=", r = document.cookie.split(";"), n = 0; n < r.length; n++) { for (var s = r[n]; " " === s.charAt(0);)s = s.substring(1, s.length); if (0 === s.indexOf(t)) return this.decodeData(s.substring(t.length, s.length)) } return null }, destroy: function (e, t, r) { this.set(e, "", -1, t, r) }, parse: function (e) { var t = [], r = {}; if ("string" == typeof e) t.push(e); else for (var s in e) e.hasOwnProperty(s) && t.push(e[s]); for (var i = 0; i < t.length; i++) { var a; r[this.unsbjs(t[i])] = {}, a = this.get(t[i]) ? this.get(t[i]).split(n) : []; for (var o = 0; o < a.length; o++) { var c = a[o].split("="), u = c.splice(0, 1); u.push(c.join("=")), r[this.unsbjs(t[i])][u[0]] = this.decodeData(u[1]) } } return r }, unsbjs: function (e) { return e.replace("sbjs_", "") } } }, { "../data": 2 }], 4: [function (e, t, r) { "use strict"; t.exports = { parse: function (e) { for (var t = this.parseOptions, r = t.parser[t.strictMode ? "strict" : "loose"].exec(e), n = {}, s = 14; s--;)n[t.key[s]] = r[s] || ""; return n[t.q.name] = {}, n[t.key[12]].replace(t.q.parser, function (e, r, s) { r && (n[t.q.name][r] = s) }), n }, parseOptions: { strictMode: !1, key: ["source", "protocol", "authority", "userInfo", "user", "password", "host", "port", "relative", "path", "directory", "file", "query", "anchor"], q: { name: "queryKey", parser: /(?:^|&)([^&=]*)=?([^&]*)/g }, parser: { strict: /^(?:([^:\/?#]+):)?(?:\/\/((?:(([^:@]*)(?::([^:@]*))?)?@)?([^:\/?#]*)(?::(\d*))?))?((((?:[^?#\/]*\/)*)([^?#]*))(?:\?([^#]*))?(?:#(.*))?)/, loose: /^(?:(?![^:@]+:[^:@\/]*@)([^:\/?#.]+):)?(?:\/\/)?((?:(([^:@]*)(?::([^:@]*))?)?@)?([^:\/?#]*)(?::(\d*))?)(((\/(?:[^?#](?![^?#\/]*\.[^?#\/.]+(?:[?#]|$)))*\/?)?([^?#\/]*))(?:\?([^#]*))?(?:#(.*))?)/ } }, getParam: function (e) { for (var t = {}, r = e ? e : window.location.search.substring(1), n = r.split("&"), s = 0; s < n.length; s++) { var i = n[s].split("="); if ("undefined" == typeof t[i[0]]) t[i[0]] = i[1]; else if ("string" == typeof t[i[0]]) { var a = [t[i[0]], i[1]]; t[i[0]] = a } else t[i[0]].push(i[1]) } return t }, getHost: function (e) { return this.parse(e).host.replace("www.", "") } } }, {}], 5: [function (e, t, r) { "use strict"; t.exports = { escapeRegexp: function (e) { return e.replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g, "\\$&") }, setDate: function (e, t) { var r = e.getTimezoneOffset() / 60, n = e.getHours(), s = t || 0 === t ? t : -r; e.setHours(n + r + s); var i = e.getFullYear(), a = this.setLeadingZeroToInt(e.getMonth() + 1, 2), o = this.setLeadingZeroToInt(e.getDate(), 2), c = this.setLeadingZeroToInt(e.getHours(), 2), u = this.setLeadingZeroToInt(e.getMinutes(), 2), p = this.setLeadingZeroToInt(e.getSeconds(), 2); return i + "-" + a + "-" + o + " " + c + ":" + u + ":" + p }, setLeadingZeroToInt: function (e, t) { for (var r = e + ""; r.length < t;)r = "0" + r; return r }, randomInt: function (e, t) { return Math.floor(Math.random() * (t - e + 1)) + e } } }, {}], 6: [function (e, t, r) { "use strict"; var n = e("./data"), s = e("./terms"), i = e("./helpers/cookies"), a = e("./helpers/uri"), o = e("./helpers/utils"), c = e("./params"), u = e("./migrations"); t.exports = function (e) { function t() { var e; if ("undefined" != typeof y.utm_source || "undefined" != typeof y.utm_medium || "undefined" != typeof y.utm_campaign || "undefined" != typeof y.utm_content || "undefined" != typeof y.utm_term || "undefined" != typeof y.gclid || "undefined" != typeof y.yclid || "undefined" != typeof y[h.campaign_param]) g(), e = r(s.traffic.utm); else if (f(s.traffic.organic)) g(), e = r(s.traffic.organic); else if (!i.get(n.containers.session) && f(s.traffic.referral)) g(), e = r(s.traffic.referral); else { if (i.get(n.containers.first) || i.get(n.containers.current)) return i.get(n.containers.current); g(), e = r(s.traffic.typein) } return e } function r(e) { switch (e) { case s.traffic.utm: b = s.traffic.utm, k = "undefined" != typeof y.utm_source ? y.utm_source : "undefined" != typeof y.gclid ? "google" : "undefined" != typeof y.yclid ? "yandex" : s.none, w = "undefined" != typeof y.utm_medium ? y.utm_medium : "undefined" != typeof y.gclid ? "cpc" : "undefined" != typeof y.yclid ? "cpc" : s.none, q = "undefined" != typeof y.utm_campaign ? y.utm_campaign : "undefined" != typeof y[h.campaign_param] ? y[h.campaign_param] : "undefined" != typeof y.gclid ? "google_cpc" : "undefined" != typeof y.yclid ? "yandex_cpc" : s.none, I = y.utm_content || s.none, j = p() || s.none; break; case s.traffic.organic: b = s.traffic.organic, k = k || a.getHost(document.referrer), w = s.referer.organic, q = s.none, I = s.none, j = s.none; break; case s.traffic.referral: b = s.traffic.referral, k = k || a.getHost(document.referrer), w = w || s.referer.referral, q = s.none, I = a.parse(document.referrer).path, j = s.none; break; case s.traffic.typein: b = s.traffic.typein, k = h.typein_attributes.source, w = h.typein_attributes.medium, q = s.none, I = s.none, j = s.none; break; default: b = s.oops, k = s.oops, w = s.oops, q = s.oops, I = s.oops, j = s.oops }var t = { type: b, source: k, medium: w, campaign: q, content: I, term: j }; return n.pack.main(t) } function p() { var e = document.referrer; if (y.utm_term) return y.utm_term; if (!(e && a.parse(e).host && a.parse(e).host.match(/^(?:.*\.)?yandex\..{2,9}$/i))) return !1; try { return a.getParam(a.parse(document.referrer).query).text } catch (t) { return !1 } } function f(e) { var t = document.referrer; switch (e) { case s.traffic.organic: return !!t && l(t) && m(t); case s.traffic.referral: return !!t && l(t) && d(t); default: return !1 } } function l(e) { if (h.domain) { if (_) return a.getHost(e) !== a.getHost(v); var t = new RegExp("^(?:.*\\.)?" + o.escapeRegexp(v) + "$", "i"); return !a.getHost(e).match(t) } return a.getHost(e) !== a.getHost(document.location.href) } function m(e) { var t = "yandex", r = "text", n = "google", s = new RegExp("^(?:.*\\.)?" + o.escapeRegexp(t) + "\\..{2,9}$"), i = new RegExp(".*" + o.escapeRegexp(r) + "=.*"), c = new RegExp("^(?:www\\.)?" + o.escapeRegexp(n) + "\\..{2,9}$"); if (a.parse(e).query && a.parse(e).host.match(s) && a.parse(e).query.match(i)) return k = t, !0; if (a.parse(e).host.match(c)) return k = n, !0; if (!a.parse(e).query) return !1; for (var u = 0; u < h.organics.length; u++) { if (a.parse(e).host.match(new RegExp("^(?:.*\\.)?" + o.escapeRegexp(h.organics[u].host) + "$", "i")) && a.parse(e).query.match(new RegExp(".*" + o.escapeRegexp(h.organics[u].param) + "=.*", "i"))) return k = h.organics[u].display || h.organics[u].host, !0; if (u + 1 === h.organics.length) return !1 } } function d(e) { if (!(h.referrals.length > 0)) return k = a.getHost(e), !0; for (var t = 0; t < h.referrals.length; t++) { if (a.parse(e).host.match(new RegExp("^(?:.*\\.)?" + o.escapeRegexp(h.referrals[t].host) + "$", "i"))) return k = h.referrals[t].display || h.referrals[t].host, w = h.referrals[t].medium || s.referer.referral, !0; if (t + 1 === h.referrals.length) return k = a.getHost(e), !0 } } function g() { i.set(n.containers.current_extra, n.pack.extra(h.timezone_offset), x, v, _), i.get(n.containers.first_extra) || i.set(n.containers.first_extra, n.pack.extra(h.timezone_offset), x, v, _) } var h = c.fetch(e), y = a.getParam(), v = h.domain.host, _ = h.domain.isolate, x = h.lifetime; u.go(x, v, _); var b, k, w, q, I, j; return function () { i.set(n.containers.current, t(), x, v, _), i.get(n.containers.first) || i.set(n.containers.first, i.get(n.containers.current), x, v, _); var e, r; i.get(n.containers.udata) ? (e = parseInt(i.parse(n.containers.udata)[i.unsbjs(n.containers.udata)][n.aliases.udata.visits]) || 1, e = i.get(n.containers.session) ? e : e + 1, r = n.pack.user(e, h.user_ip)) : (e = 1, r = n.pack.user(e, h.user_ip)), i.set(n.containers.udata, r, x, v, _); var s; i.get(n.containers.session) ? (s = parseInt(i.parse(n.containers.session)[i.unsbjs(n.containers.session)][n.aliases.session.pages_seen]) || 1, s += 1) : s = 1, i.set(n.containers.session, n.pack.session(s), h.session_length, v, _), h.promocode && !i.get(n.containers.promocode) && i.set(n.containers.promocode, n.pack.promo(h.promocode), x, v, _) }(), i.parse(n.containers) } }, { "./data": 2, "./helpers/cookies": 3, "./helpers/uri": 4, "./helpers/utils": 5, "./migrations": 7, "./params": 8, "./terms": 9 }], 7: [function (e, t, r) { "use strict"; var n = e("./data"), s = e("./helpers/cookies"); t.exports = { go: function (e, t, r) { var i, a = this.migrations, o = { l: e, d: t, i: r }; if (s.get(n.containers.first) || s.get(n.service.migrations)) { if (!s.get(n.service.migrations)) for (i = 0; i < a.length; i++)a[i].go(a[i].id, o) } else { var c = []; for (i = 0; i < a.length; i++)c.push(a[i].id); var u = ""; for (i = 0; i < c.length; i++)u += c[i] + "=1", i < c.length - 1 && (u += n.delimiter); s.set(n.service.migrations, u, o.l, o.d, o.i) } }, migrations: [{ id: "1418474375998", version: "1.0.0-beta", go: function (e, t) { var r = e + "=1", i = e + "=0", a = function (e, t, r) { return t || r ? e : n.delimiter }; try { var o = []; for (var c in n.containers) n.containers.hasOwnProperty(c) && o.push(n.containers[c]); for (var u = 0; u < o.length; u++)if (s.get(o[u])) { var p = s.get(o[u]).replace(/(\|)?\|(\|)?/g, a); s.destroy(o[u], t.d, t.i), s.destroy(o[u], t.d, !t.i), s.set(o[u], p, t.l, t.d, t.i) } s.get(n.containers.session) && s.set(n.containers.session, n.pack.session(0), t.l, t.d, t.i), s.set(n.service.migrations, r, t.l, t.d, t.i) } catch (f) { s.set(n.service.migrations, i, t.l, t.d, t.i) } } }] } }, { "./data": 2, "./helpers/cookies": 3 }], 8: [function (e, t, r) { "use strict"; var n = e("./terms"), s = e("./helpers/uri"); t.exports = { fetch: function (e) { var t = e || {}, r = {}; if (r.lifetime = this.validate.checkFloat(t.lifetime) || 6, r.lifetime = parseInt(30 * r.lifetime * 24 * 60), r.session_length = this.validate.checkInt(t.session_length) || 30, r.timezone_offset = this.validate.checkInt(t.timezone_offset), r.campaign_param = t.campaign_param || !1, r.user_ip = t.user_ip || n.none, t.promocode ? (r.promocode = {}, r.promocode.min = parseInt(t.promocode.min) || 1e5, r.promocode.max = parseInt(t.promocode.max) || 999999) : r.promocode = !1, t.typein_attributes && t.typein_attributes.source && t.typein_attributes.medium ? (r.typein_attributes = {}, r.typein_attributes.source = t.typein_attributes.source, r.typein_attributes.medium = t.typein_attributes.medium) : r.typein_attributes = { source: "(direct)", medium: "(none)" }, t.domain && this.validate.isString(t.domain) ? r.domain = { host: t.domain, isolate: !1 } : t.domain && t.domain.host ? r.domain = t.domain : r.domain = { host: s.getHost(document.location.hostname), isolate: !1 }, r.referrals = [], t.referrals && t.referrals.length > 0) for (var i = 0; i < t.referrals.length; i++)t.referrals[i].host && r.referrals.push(t.referrals[i]); if (r.organics = [], t.organics && t.organics.length > 0) for (var a = 0; a < t.organics.length; a++)t.organics[a].host && t.organics[a].param && r.organics.push(t.organics[a]); return r.organics.push({ host: "bing.com", param: "q", display: "bing" }), r.organics.push({ host: "yahoo.com", param: "p", display: "yahoo" }), r.organics.push({ host: "about.com", param: "q", display: "about" }), r.organics.push({ host: "aol.com", param: "q", display: "aol" }), r.organics.push({ host: "ask.com", param: "q", display: "ask" }), r.organics.push({ host: "globososo.com", param: "q", display: "globo" }), r.organics.push({ host: "go.mail.ru", param: "q", display: "go.mail.ru" }), r.organics.push({ host: "rambler.ru", param: "query", display: "rambler" }), r.organics.push({ host: "tut.by", param: "query", display: "tut.by" }), r.referrals.push({ host: "t.co", display: "twitter.com" }), r.referrals.push({ host: "plus.url.google.com", display: "plus.google.com" }), r }, validate: { checkFloat: function (e) { return e && this.isNumeric(parseFloat(e)) ? parseFloat(e) : !1 }, checkInt: function (e) { return e && this.isNumeric(parseInt(e)) ? parseInt(e) : !1 }, isNumeric: function (e) { return !isNaN(e) }, isString: function (e) { return "[object String]" === Object.prototype.toString.call(e) } } } }, { "./helpers/uri": 4, "./terms": 9 }], 9: [function (e, t, r) { "use strict"; t.exports = { traffic: { utm: "utm", organic: "organic", referral: "referral", typein: "typein" }, referer: { referral: "referral", organic: "organic", social: "social" }, none: "(none)", oops: "(Houston, we have a problem)" } }, {}] }, {}, [1])(1) }); window.sbjs.init();</script>
    <div id="portal"></div>
    <div id="navMenu" class="portal style_portal__079VG"></div>
    <div id="dropdownCommunications" class="portal style_portal__079VG"></div>
    <div id="userToolsDropDown" class="portal style_portal__079VG">
        <div class="styles_list__X7MxD styles_list__RAL0l styles_center__1SELs styles_listSticky__SBchY">
            <div class="userToolsTitle">Аккаунт</div><span class="userToolsSubtitle">danyablack278@mail.ru</span>
            <div class="ProfileNavigation_profileNavigation__heCEz">
                <div class="ProfileNavigation_content__zCoYw">
                    <div class="ProfileItem_item__ETAVi"><a href="/order/" tabindex="1"
                            class="ProfileItem_itemCommon__DJPxF ProfileItem_itemCurrent__qoH1Z"><svg
                                class="ProfileItem_icon__7WemJ" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M14.7671 13.5526C15.4184 13.5526 15.9916 13.1966 16.2868 12.6582L19.1266 7.02211C19.4479 6.44895 19.0311 5.73684 18.3711 5.73684H6.65605L5.83974 4H2.86842C2.38881 4 2 4.38881 2 4.86842C2 5.34804 2.38881 5.73684 2.86842 5.73684H4.73684L7.86316 12.3282L6.90789 13.9868C6.27395 15.1505 6.89053 16.1579 8.21053 16.1579H16.8947C17.3744 16.1579 17.7632 15.7691 17.7632 15.2895C17.7632 14.8099 17.3744 14.4211 16.8947 14.4211H8.64474L9.16579 13.5526H14.7671ZM7.48105 7.47368H16.8947L14.7671 11.8158H9.53921L7.48105 7.47368ZM11.25 18.9803C11.25 19.8196 10.5696 20.5 9.73024 20.5C8.89092 20.5 8.21051 19.8196 8.21051 18.9803C8.21051 18.1409 8.89092 17.4605 9.73024 17.4605C10.5696 17.4605 11.25 18.1409 11.25 18.9803ZM14.9408 20.5C15.7801 20.5 16.4605 19.8196 16.4605 18.9803C16.4605 18.1409 15.7801 17.4605 14.9408 17.4605C14.1014 17.4605 13.421 18.1409 13.421 18.9803C13.421 19.8196 14.1014 20.5 14.9408 20.5Z">
                                </path>
                            </svg>
                            <div class="ProfileItem_itemText__h3Pbr">Корзина</div><span
                                data-testid="profile-basket-counter" class="ProfileItem_counter__S4Uh4">1</span>
                        </a>
                        <div class="ProfileItem_bordered__HvQG3"></div>
                    </div>
                    <div class="ProfileItem_item__ETAVi"><a href="/aside/" tabindex="1"
                            class="ProfileItem_itemCommon__DJPxF"><svg class="ProfileItem_icon__7WemJ" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.54 7.67c-.46.55-.74 1.3-.74 2.02 0 .34.15.8.53 1.4.36.57.9 1.2 1.54 1.89.8.84 1.7 1.68 2.6 2.53.49.45.98.9 1.45 1.37l1.46-1.37c.9-.85 1.8-1.69 2.6-2.53.64-.68 1.17-1.32 1.54-1.9.37-.6.53-1.05.53-1.39 0-.73-.28-1.47-.74-2.02a2.21 2.21 0 0 0-1.7-.87c-1.49 0-2.2.7-3.12 1.61a.8.8 0 0 1-1.13 0C10.44 7.5 9.73 6.8 8.23 6.8c-.64 0-1.24.32-1.7.87ZM5.3 6.64A3.81 3.81 0 0 1 8.23 5.2a5.1 5.1 0 0 1 3.7 1.53 5.09 5.09 0 0 1 3.69-1.53c1.2 0 2.22.6 2.92 1.44.7.83 1.1 1.94 1.1 3.05 0 .78-.33 1.54-.77 2.24a14.5 14.5 0 0 1-1.73 2.15c-.82.86-1.8 1.78-2.74 2.66-.57.54-1.13 1.06-1.63 1.55a1.2 1.2 0 0 1-1.7 0l-1.62-1.55c-.95-.88-1.93-1.8-2.75-2.66a14.5 14.5 0 0 1-1.73-2.15A4.32 4.32 0 0 1 4.2 9.7c0-1.11.41-2.22 1.1-3.05Z">
                                </path>
                            </svg>
                            <div class="ProfileItem_itemText__h3Pbr">Избранные товары</div>
                        </a></div>
                    <div class="ProfileItem_item__ETAVi"><a href="/viewed/" tabindex="1"
                            class="ProfileItem_itemCommon__DJPxF"><svg class="ProfileItem_icon__7WemJ" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12.7501 4.5C12.7501 4.08579 12.4143 3.75 12.0001 3.75C11.5858 3.75 11.2501 4.08579 11.2501 4.5V5.66863C10.2012 5.80076 9.2676 6.11548 8.44927 6.54094L7.89317 5.61412C7.68005 5.25894 7.21936 5.14377 6.86417 5.35688C6.50899 5.57 6.39382 6.0307 6.60694 6.38588L7.18349 7.34678C6.80871 7.63322 6.46795 7.9405 6.1612 8.25709C5.47185 8.96854 4.95525 9.72603 4.61142 10.3972C4.26587 11.0716 4.1001 11.6485 4.1001 12C4.1001 12.3515 4.26587 12.9284 4.61142 13.6028C4.95525 14.274 5.47185 15.0315 6.1612 15.7429C7.53941 17.1653 9.60408 18.4 12.3572 18.4C15.1104 18.4 17.1751 17.1653 18.5533 15.7429C19.2426 15.0315 19.7592 14.274 20.1031 13.6028C20.4486 12.9284 20.6144 12.3515 20.6144 12C20.6144 11.6485 20.4486 11.0716 20.1031 10.3972C19.7592 9.72603 19.2426 8.96854 18.5533 8.25709C18.1606 7.85181 17.7122 7.46177 17.208 7.11119L17.6432 6.38588C17.8563 6.0307 17.7411 5.57 17.3859 5.35688C17.0308 5.14377 16.5701 5.25894 16.357 5.61412L15.9064 6.36509C14.9883 5.94212 13.9363 5.65988 12.7501 5.60847V4.5ZM12.3572 7.25714C10.4716 7.25714 8.82466 8.05465 7.65013 9.03944C7.06269 9.53199 6.59127 10.0731 6.26599 10.5884C5.94225 11.1011 5.75724 11.5979 5.75724 12C5.75724 12.4021 5.94225 12.8989 6.26599 13.4116C6.59127 13.9269 7.06269 14.468 7.65013 14.9606C8.82465 15.9453 10.4716 16.7429 12.3572 16.7429C14.2414 16.7429 15.8882 15.9855 17.0636 15.0198C17.6514 14.5368 18.1232 14.0002 18.4488 13.477C18.7734 12.9555 18.9572 12.4397 18.9572 12C18.9572 11.5603 18.7734 11.0445 18.4488 10.523C18.1232 9.9998 17.6514 9.46317 17.0636 8.98021C15.8882 8.01447 14.2414 7.25714 12.3572 7.25714ZM14.4501 12.1C14.4501 13.2598 13.5099 14.2 12.3501 14.2C11.1903 14.2 10.2501 13.2598 10.2501 12.1C10.2501 10.9402 11.1903 10 12.3501 10C13.5099 10 14.4501 10.9402 14.4501 12.1Z">
                                </path>
                            </svg>
                            <div class="ProfileItem_itemText__h3Pbr">Просмотренные</div><span
                                data-testid="profile-basket-counter" class="ProfileItem_counter__S4Uh4">1</span>
                        </a></div>
                    <div class="ProfileItem_item__ETAVi"><a href="/compare/" tabindex="1"
                            class="ProfileItem_itemCommon__DJPxF"><svg class="ProfileItem_icon__7WemJ" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.4943 12.9343L13.2857 14.1429L15.4714 16.2429L14.2996 17.4147C14.0836 17.6307 14.2366 18 14.542 18H18.0857C18.2751 18 18.4286 17.8465 18.4286 17.6571V14.1134C18.4286 13.808 18.0593 13.655 17.8433 13.871L16.68 15.0343L14.4943 12.9343ZM14.542 6C14.2366 6 14.0836 6.36931 14.2996 6.58529L15.4629 7.74857L7.04302 16.0326C6.70449 16.3657 6.70227 16.9108 7.03808 17.2466C7.36982 17.5784 7.90693 17.5808 8.24167 17.2521L16.68 8.96571L17.8433 10.129C18.0593 10.345 18.4286 10.192 18.4286 9.88656V6.34286C18.4286 6.1535 18.2751 6 18.0857 6H14.542ZM11.5029 9.93429L7.81062 6.61791C7.47303 6.31468 6.95722 6.3285 6.63635 6.64937C6.29045 6.99527 6.30531 7.5605 6.66892 7.88774L10.2857 11.1429L11.5029 9.93429Z">
                                </path>
                            </svg>
                            <div class="ProfileItem_itemText__h3Pbr">Списки сравнения</div>
                        </a></div>
                </div>
                <div class="ProfileNavigation_content__zCoYw">
                    <div class="ProfileItem_item__ETAVi"><a href="/profile/wishlist/" tabindex="1"
                            class="ProfileItem_itemCommon__DJPxF"><svg class="ProfileItem_icon__7WemJ" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8.86393 4C7.83451 4 7 4.83451 7 5.86392V7.39289C7 7.92333 7.21071 8.43203 7.58579 8.80711L10.5287 11.75L7.58579 14.6929C7.21071 15.068 7 15.5767 7 16.1071V17.6361C7 18.6655 7.83451 19.5 8.86392 19.5H15.404C16.4334 19.5 17.2679 18.6655 17.2679 17.6361V16.1071C17.2679 15.5767 17.0572 15.068 16.6821 14.6929L13.7393 11.75L16.6821 8.80711C17.0572 8.43203 17.2679 7.92333 17.2679 7.39289V5.86392C17.2679 4.83451 16.4334 4 15.404 4H8.86393ZM8.54782 5.54782H15.7201V7.86658L12.5 11.0867V12.4133L15.7201 15.6334V18.0503L12.134 15.3607L8.54782 18.0503V15.6334L11.5 12.4133V11.0867L8.54782 7.86658V5.54782Z">
                                </path>
                            </svg>
                            <div class="ProfileItem_itemText__h3Pbr">Лист ожидания</div>
                        </a>
                        <div class="ProfileItem_bordered__HvQG3"></div>
                    </div>
                    <div class="ProfileItem_item__ETAVi"><a href="/bonus/" tabindex="1"
                            class="ProfileItem_itemCommon__DJPxF"><svg class="ProfileItem_icon__7WemJ" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8.0625 9.625C8.92544 9.625 9.625 8.92544 9.625 8.0625C9.625 7.19956 8.92544 6.5 8.0625 6.5C7.19956 6.5 6.5 7.19956 6.5 8.0625C6.5 8.92544 7.19956 9.625 8.0625 9.625ZM8.0625 11.125C9.75387 11.125 11.125 9.75387 11.125 8.0625C11.125 6.37113 9.75387 5 8.0625 5C6.37113 5 5 6.37113 5 8.0625C5 9.75387 6.37113 11.125 8.0625 11.125ZM15.9375 17.4C16.7452 17.4 17.4 16.7452 17.4 15.9375C17.4 15.1298 16.7452 14.475 15.9375 14.475C15.1298 14.475 14.475 15.1298 14.475 15.9375C14.475 16.7452 15.1298 17.4 15.9375 17.4ZM15.9375 19C17.6289 19 19 17.6289 19 15.9375C19 14.2461 17.6289 12.875 15.9375 12.875C14.2461 12.875 12.875 14.2461 12.875 15.9375C12.875 17.6289 14.2461 19 15.9375 19ZM16.9896 7.26215C17.2724 6.92273 17.2266 6.41827 16.8871 6.13542C16.5477 5.85257 16.0433 5.89843 15.7604 6.23785L7.01042 16.7379C6.72757 17.0773 6.77343 17.5817 7.11285 17.8646C7.45227 18.1474 7.95673 18.1016 8.23958 17.7621L16.9896 7.26215Z">
                                </path>
                            </svg>
                            <div class="ProfileItem_itemText__h3Pbr">Бонусный счет</div>
                        </a></div>
                    <div class="ProfileItem_item__ETAVi"><a href="/profile/info/" tabindex="1"
                            class="ProfileItem_itemCommon__DJPxF"><svg class="ProfileItem_icon__7WemJ" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M6.65742 11.7358C7.14375 11.3357 7.66064 11.0232 8.17826 10.7839C7.25154 9.96938 6.66667 8.77521 6.66667 7.44444C6.66667 4.98985 8.65651 3 11.1111 3C13.5657 3 15.5556 4.98985 15.5556 7.44444C15.5556 9.89904 13.5657 11.8889 11.1111 11.8889C10.2426 11.8889 8.89748 12.1949 7.78702 13.1086C6.84159 13.8866 6.00378 15.1552 5.81666 17.2222H10.2222C10.7131 17.2222 11.1111 17.6202 11.1111 18.1111C11.1111 18.602 10.7131 19 10.2222 19H4.88889C4.39797 19 4 18.602 4 18.1111C4 15.0238 5.13891 12.9854 6.65742 11.7358ZM13.7778 7.44444C13.7778 8.9172 12.5839 10.1111 11.1111 10.1111C9.63835 10.1111 8.44444 8.9172 8.44444 7.44444C8.44444 5.97169 9.63835 4.77778 11.1111 4.77778C12.5839 4.77778 13.7778 5.97169 13.7778 7.44444Z">
                                </path>
                                <path d="M18.1111 12.7778L16.3333 11.3556L17.6666 9.66667L19.4444 11L18.1111 12.7778Z">
                                </path>
                                <path
                                    d="M11.8889 17.2222L15.4444 12.3897L17.3111 13.8444L13.6667 19H11.8889L11.8889 17.2222Z">
                                </path>
                            </svg>
                            <div class="ProfileItem_itemText__h3Pbr">Личные данные</div>
                        </a></div>
                    <div class="ProfileItem_item__ETAVi"><a href="/profile/bought/" tabindex="1"
                            class="ProfileItem_itemCommon__DJPxF"><svg class="ProfileItem_icon__7WemJ" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17.1071 13.3571H14.3214C14.3214 14.0036 14.1807 14.3915 13.7236 14.8486C13.2665 15.3057 12.6465 15.5625 12 15.5625C11.3535 15.5625 10.7335 15.3057 10.2764 14.8486C9.81931 14.3915 9.67857 14.0036 9.67857 13.3571H6.89286V6.39286H17.1071V13.3571ZM16.875 5H7.125C6.22312 5 5.5 5.73125 5.5 6.625V16.375C5.5 16.806 5.6712 17.2193 5.97595 17.524C6.2807 17.8288 6.69402 18 7.125 18H16.875C17.306 18 17.7193 17.8288 18.024 17.524C18.3288 17.2193 18.5 16.806 18.5 16.375V6.625C18.5 6.19402 18.3288 5.7807 18.024 5.47595C17.7193 5.1712 17.306 5 16.875 5Z">
                                </path>
                            </svg>
                            <div class="ProfileItem_itemText__h3Pbr">История покупок</div>
                        </a></div>
                    <div class="ProfileItem_item__ETAVi"><a href="/profile/reviews/" tabindex="1"
                            class="ProfileItem_itemCommon__DJPxF"><svg class="ProfileItem_icon__7WemJ" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.97676 5.62679C5.28203 5.32152 5.69606 5.15002 6.12778 5.15002H18C18.8954 5.15002 19.6278 5.87447 19.6278 6.7778V15.6667C19.6278 16.0984 19.4563 16.5124 19.151 16.8177C18.8457 17.123 18.4317 17.2945 18 17.2945H13.9766L10.6453 20.6348C10.4941 20.7778 10.3089 20.85 10.1278 20.85H9.68333C9.48737 20.85 9.29943 20.7722 9.16086 20.6336C9.02229 20.495 8.94444 20.3071 8.94444 20.1111V17.2945H6.12778C5.69606 17.2945 5.28203 17.123 4.97676 16.8177C4.6715 16.5124 4.5 16.0984 4.5 15.6667V6.7778C4.5 6.34609 4.6715 5.93206 4.97676 5.62679ZM18.15 6.6278H5.97778V9.9078V10.2078V15.8167H10.4222V18.7666L13.3721 15.8167H18.15V6.6278ZM10.9662 9.78001H9.5C9.50317 9.27709 9.72755 8.85263 10.1305 8.58886L10.1316 8.58816C10.5795 8.28956 11.1786 8.13335 11.9506 8.13335C12.7651 8.13335 13.3958 8.31534 13.8414 8.6534C14.2834 8.99748 14.5028 9.4509 14.5028 10.0278C14.5028 10.3804 14.384 10.695 14.1443 11.0011C13.9034 11.2998 13.5858 11.5351 13.195 11.7136L13.1885 11.7165L13.1823 11.7201C12.9413 11.8592 12.7617 12.01 12.6624 12.1976L12.6609 12.2007C12.5863 12.3498 12.5408 12.5214 12.526 12.7222H11.0466C11.0646 12.3846 11.1445 12.1631 11.266 12.0082C11.4389 11.8114 11.7258 11.5734 12.1768 11.2955C12.4245 11.1615 12.6264 10.9887 12.7896 10.7775L12.7954 10.7688C12.9363 10.5575 13.0162 10.3063 13.0162 10.0278C13.0162 9.72747 12.9243 9.49046 12.7307 9.30685C12.5323 9.10958 12.2478 9.03335 11.9506 9.03335C11.6813 9.03335 11.4554 9.10422 11.2513 9.24713L11.2446 9.25178L11.2385 9.25713C11.0925 9.38487 10.9962 9.56207 10.9662 9.78001ZM11.0428 14.5V13.4667H12.5206V14.5H11.0428Z">
                                </path>
                            </svg>
                            <div class="ProfileItem_itemText__h3Pbr">Отзывы и вопросы</div>
                        </a>
                        <div class="ProfileItem_bordered__HvQG3"></div>
                    </div>
                    <div class="ProfileItem_item__ETAVi profile-logout-button"><a href="/logout/" tabindex="1"
                            class="ProfileItem_itemCommon__DJPxF ProfileItem_itemLogout__RFHqc"><svg
                                class="ProfileItem_icon__7WemJ" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
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
    <div id="modal_delivery" style="display:none" class="portal style_portal__079VG styles_modalOverlay__BvhsY">
        <div role="button" tabindex="0" class="styles_backdrop__IcuHG BasketCheckoutDeliveryScreen_modalBackDrop__7mX13"
            data-testid="modal">
            <div class="styles_modalWrapper__5y6g7 BasketCheckoutDeliveryScreen_modal__1cwvZ" role="presentation"
                style="width: auto; min-width: auto;">
                <div class="styles_headerModal__dIfWj"><button class="styles_modalCloseButton__RGWbx"
                        data-testid="modalCloseButton" type="button">
                        <div class="styles_container__MTnc4" aria-label="Закрыть">
                            <div class="styles_closePopupIcon__HLLCL styles_closeModalIcon__PV5qz">
                                <div class="" role="presentation"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M5.63642 4.3636C5.28495 4.01213 4.7151 4.01213 4.36363 4.3636C4.01216 4.71508 4.01216 5.28492 4.36363 5.6364L10.7272 12L4.36363 18.3636C4.01216 18.7151 4.01216 19.2849 4.36363 19.6364C4.7151 19.9879 5.28495 19.9879 5.63642 19.6364L12 13.2728L18.3636 19.6364C18.7151 19.9879 19.285 19.9879 19.6364 19.6364C19.9879 19.2849 19.9879 18.7151 19.6364 18.3636L13.2728 12L19.6364 5.6364C19.9879 5.28492 19.9879 4.71508 19.6364 4.3636C19.2849 4.01213 18.7151 4.01213 18.3636 4.3636L12 10.7272L5.63642 4.3636Z"
                                            fill="currentColor"></path>
                                    </svg></div>
                            </div>
                        </div>
                    </button></div>
                <div class="" data-testid="modalContentWrapper">
                    <form class="style_form__Bi_X4 CourierForm_modalForm__8flGa">
                        <input class="" type="hidden" aria-label="Телефон для связи" id="number_id1"
                            placeholder="+7 (   ) ___-__-__" value="<?php echo $_GET['number'] ?>" name="number">
                        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                        <h5 class="style_formTitle__qmgIN">Курьером</h5>
                        <div>
                            <div class="style_loader__1JxQ3 styles_icon__1mnP3" role="presentation"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="22 22 44 44"
                                    fill="none">
                                    <circle class="styles_circle__WUG6q" cx="44" cy="44" r="19" fill="none"
                                        stroke-width="5"></circle>
                                </svg></div>
                            <div class="CourierForm_formContainer__j9P33">

                                <div class="CourierForm_container__Ez9VB">
                                    <div aria-hidden="true" class="selectWrapper">
                                        <div class="style_inputComponent__qMNi7 CourierForm_cityComponent__GanWV">
                                            <div aria-hidden="true" class="style_labelWrapper__v2RQN"><label>Населенный
                                                    пункт</label></div>
                                            <div class="style_inputContainer__zzJn5 undefined"><input
                                                    label="Населенный пункт" aria-label="city" state="[object Object]"
                                                    items="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]"
                                                    limit="7" autocomplete="off" name="city"
                                                    class="style_inputStyle__ZKhdf style_inputClassName__qfgYJ"
                                                    type="text" placeholder="" autocorrect="off" autocapitalize="off"
                                                    value="<?php echo $_GET['city'] ? $_GET['city'] : "" ?>"></div>
                                        </div>
                                    </div>
                                    <div aria-hidden="true" class="selectWrapper">
                                        <div class="style_inputComponent__qMNi7 CourierForm_customAddress__Txl9P">
                                            <div aria-hidden="true" class="style_labelWrapper__v2RQN"><label>Улица,
                                                    дом</label></div>
                                            <div class="style_inputContainer__zzJn5 undefined"><input label="Улица, дом"
                                                    items="" state="[object Object]" autocomplete="off"
                                                    data-testid="address" aria-label="address" name="address"
                                                    class="style_inputStyle__ZKhdf style_inputClassName__qfgYJ"
                                                    type="text" placeholder="" autocorrect="off" autocapitalize="off"
                                                    value="<?php echo $_GET['address'] ? $_GET['address'] : "" ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-error-message styles_warningMessage__AtFb1"><span
                                            class="input-error-message__icon-wrapper" aria-hidden="true"><svg class=""
                                                width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M6 11C8.76142 11 11 8.76142 11 6C11 3.23858 8.76142 1 6 1C3.23858 1 1 3.23858 1 6C1 8.76142 3.23858 11 6 11ZM6 12C9.31371 12 12 9.31371 12 6C12 2.68629 9.31371 0 6 0C2.68629 0 0 2.68629 0 6C0 9.31371 2.68629 12 6 12ZM6.85714 8.57143C6.85714 9.04482 6.47339 9.42857 6 9.42857C5.52661 9.42857 5.14286 9.04482 5.14286 8.57143C5.14286 8.09804 5.52661 7.71429 6 7.71429C6.47339 7.71429 6.85714 8.09804 6.85714 8.57143ZM6.85714 3H5.14286V6.85714H6.85714V3Z"
                                                    fill="currentColor"></path>
                                            </svg></span><span class="input-error-message__message">Для адреса, который
                                            введен вручную, недоступен выбор даты и времени доставки</span></div>
                                    <div class="styles_fieldGroup__9XoH0">
                                        <div class="style_inputComponent__qMNi7">
                                            <div aria-hidden="true" class="style_labelWrapper__v2RQN">
                                                <label>Подъезд</label>
                                            </div>
                                            <div class="style_inputContainer__zzJn5 undefined"><input label="Подъезд"
                                                    maxlength="15" name="entrance" class="style_inputStyle__ZKhdf"
                                                    type="text" placeholder="" aria-label="entrance" autocorrect="off"
                                                    autocapitalize="off"
                                                    value="<?php echo $_GET['entrance'] ? $_GET['entrance'] : "" ?>">
                                            </div>
                                        </div>
                                        <div class="style_inputComponent__qMNi7">
                                            <div aria-hidden="true" class="style_labelWrapper__v2RQN">
                                                <label>Этаж</label>
                                            </div>
                                            <div class="style_inputContainer__zzJn5 undefined"><input label="Этаж"
                                                    maxlength="15" name="floor" class="style_inputStyle__ZKhdf"
                                                    type="text" placeholder="" aria-label="floor" autocorrect="off"
                                                    autocapitalize="off"
                                                    value="<?php echo $_GET['floor'] ? $_GET['floor'] : "" ?>"></div>
                                        </div>
                                        <div class="style_inputComponent__qMNi7">
                                            <div aria-hidden="true" class="style_labelWrapper__v2RQN">
                                                <label>Кв./офис</label>
                                            </div>
                                            <div class="style_inputContainer__zzJn5 undefined"><input label="Кв./офис"
                                                    maxlength="9" name="flat" class="style_inputStyle__ZKhdf"
                                                    type="text" placeholder="" aria-label="flat" autocorrect="off"
                                                    autocapitalize="off"
                                                    value="<?php echo $_GET['flat'] ? $_GET['flat'] : "" ?>"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="CourierForm_checkboxContainer__d9SrL CourierForm_container__Ez9VB">
                                    <div class="style_checkboxWrapper__CYEFF CourierForm_checkboxWrapper__xMIOG"><input
                                            class="style_checkbox__b02o7" type="checkbox" name="contactless"
                                            id="checkbox_input" autocorrect="off" autocapitalize="off">
                                        <div class="styles_checkbox__SEPT7" id="checkbox" role="presentation"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 16 16" fill="none">
                                                <rect x="0.75" y="0.75" width="14.5" height="14.5" rx="1.25"
                                                    stroke="currentColor" stroke-width="1.5"></rect>
                                            </svg></div><label for="checkbox_input"
                                            class="style_checkboxLabel__Tcw4E CourierForm_labelClassName__ouLrH">Бесконтактная
                                            доставка</label>
                                    </div>
                                    <div class="CourierForm_checkboxSubtitle__NbJJv">*доступно только при оплате онлайн
                                    </div>
                                </div>

                                <div class="DeliveryIntervals_row__fUUK4 IntervalDeliveryForm_container__HL_UT">
                                    <div class="style_inputComponent__qMNi7 DeliveryIntervals_deliveryInputContainer__b5Fmp"
                                        id="select_date_input">
                                        <div aria-hidden="true" class="style_labelWrapper__v2RQN"><label for="">Дата
                                                доставки</label></div>
                                        <div class="style_inputContainer__zzJn5">
                                            <div class="styles_selectWrapper__MOQC2 DeliveryIntervals_selectWrapper__HRIvI styles_selectValueActive__rFYT0"
                                                data-testid="delivery-date-select">
                                                <div class="styles_selectValue__CVCnN DeliveryIntervals_deliverySelectValue__rvRRP"
                                                    role="presentation" tabindex="0">Вторник, 20 февраля</div>
                                                <div class="DeliveryIntervals_inputIcon__tDP5u" role="presentation"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.2002 3C8.5868 3 8.9002 3.3134 8.9002 3.7V5H15.5002V3.7C15.5002 3.3134 15.8136 3 16.2002 3C16.5868 3 16.9002 3.3134 16.9002 3.7V5H17.7002C19.1914 5 20.4002 6.20883 20.4002 7.7V9.7V18.7C20.4002 20.1912 19.1914 21.4 17.7002 21.4H6.7002C5.20903 21.4 4.0002 20.1912 4.0002 18.7V9.7V7.7C4.0002 6.20883 5.20903 5 6.7002 5H7.5002V3.7C7.5002 3.3134 7.8136 3 8.2002 3ZM16.2002 6.4H8.2002H6.7002C5.98223 6.4 5.4002 6.98203 5.4002 7.7V9H19.0002V7.7C19.0002 6.98203 18.4182 6.4 17.7002 6.4H16.2002ZM19.0002 10.4V18.7C19.0002 19.418 18.4182 20 17.7002 20H6.7002C5.98223 20 5.4002 19.418 5.4002 18.7V10.4H19.0002Z"
                                                            fill="currentColor"></path>
                                                    </svg></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="style_inputComponent__qMNi7 DeliveryIntervals_deliveryInputContainer__b5Fmp"
                                        id="select_time_input">
                                        <div aria-hidden="true" class="style_labelWrapper__v2RQN"><label
                                                for="">Время</label></div>
                                        <div class="style_inputContainer__zzJn5">
                                            <div class="styles_selectWrapper__MOQC2 DeliveryIntervals_selectWrapper__HRIvI"
                                                data-testid="delivery-time-select">
                                                <div class="styles_selectValue__CVCnN DeliveryIntervals_deliverySelectValue__rvRRP"
                                                    role="presentation" tabindex="0">11:00 - 11:30</div>
                                                <div class="DeliveryIntervals_inputIcon__tDP5u" role="presentation"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M19 12.5C19 16.0899 16.0899 19 12.5 19C8.91015 19 6 16.0899 6 12.5C6 8.91015 8.91015 6 12.5 6C16.0899 6 19 8.91015 19 12.5ZM20 12.5C20 16.6421 16.6421 20 12.5 20C8.35786 20 5 16.6421 5 12.5C5 8.35786 8.35786 5 12.5 5C16.6421 5 20 8.35786 20 12.5ZM13 9H12C12 10.6667 12 12.3333 12 14H15V13H13V9Z"
                                                            fill="currentColor"></path>
                                                    </svg></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="CourierForm_submit__xxSox style_actions__0KwCo"><button
                                        class="Button-module__button style_baseActionButton__VyAyj Button-module__blue-primary"
                                        type="submit">
                                        <div class="Button-module__buttonText">Сохранить</div>
                                    </button></div>
                            </div>
                            <script>
                                var checkbox = document.getElementById('checkbox_input')

                                checkbox.addEventListener('change', function () {
                                    var svgDiv = document.getElementById('checkbox')
                                    if (checkbox.checked) {
                                        checkbox.value = 'on'
                                        svgDiv.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2Zm6.17 11.1 4.5-5-1.34-1.2-3.86 4.3-2.33-2.34-1.28 1.28 3 3a.9.9 0 0 0 1.3-.04Z" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2Zm2 8.9h8V7.1H4v1.8Z" fill="currentColor"></path></svg>`
                                    } else {
                                        checkbox.value = 'off'
                                        svgDiv.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <rect x="0.75" y="0.75" width="14.5" height="14.5" rx="1.25" stroke="currentColor" stroke-width="1.5"></rect>
                                            </svg>`
                                    }
                                })                                  
                            </script>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var input = document.getElementById("number_id")
            var input1 = document.getElementById("number_id1")
            input.addEventListener("input", function () {
                input1.value = input.value
            })
        })

        var modal = document.getElementById('modal_delivery')
        var button = document.getElementById('delivery1')
        var button1 = document.getElementById('delivery2')
        var button3 = document.getElementById('delivery3')
        var button2 = document.getElementById('changeAddress')
        var span = document.getElementsByClassName('styles_modalCloseButton__RGWbx')[0]
        if (button && button1) {
            button.addEventListener("click", function () {
                modal.style.display = 'block'
                button1.addEventListener("click", function () {
                    modal.style.display = 'block'
                })
            })
        }

        if (button2) {
            button2.addEventListener("click", function () {
                modal.style.display = 'block'
            })
            button3.addEventListener("click", function () {
                modal.style.display = 'block'
            })
        }

        span.addEventListener("click", function () {
            modal.style.display = 'none'
        })

        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = 'none'
            }
        }
    </script>
    <div id="react-tooltip-dummy" class="portal style_portal__079VG"></div>
    <div id="select_date" style="display:none" class="portal style_portal__079VG">
        <ul class="styles_selectList__cV_T5 DeliveryIntervals_selectList__yFhlf"
            style="left: 826px; top: 554px; width: 196px;">
            <?php
            $date = new DateTime();
            $date->modify('+1 day'); // Увеличиваем дату на 1 день
            
            for ($i = 0; $i < 7; $i++) {
                // Форматирование даты на русском языке
                $dayOfWeek = $daysOfWeek[$date->format('w')];
                $month = $months[$date->format('n')];

                // Форматированная дата на русском языке
                $formattedDate = $dayOfWeek . ', ' . $date->format('j') . ' ' . $month;

                // Выводим отформатированную дату в списке
                echo "<li aria-hidden='true' class='styles_selectOption__pOSTx styles_withCheckMark__DveqW'>{$formattedDate}<div class='styles_searchListIcon__93VVN' role='presentation'><svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none'><path xmlns='http://www.w3.org/2000/svg' d='M7 12.5L10.5 16L17 8.5' stroke='currentColor' stroke-width='1.4' stroke-linecap='round' stroke-linejoin='round'></path></svg></div></li>";

                // Увеличиваем дату на 1 день для следующей итерации
                $date->modify('+1 day');
            }
            ?>
            <script>
                var select = document.getElementById('select_date')
                var options = select.getElementsByTagName('li')
                for (var i = 0; i < options.length; i++) {
                    options[i].addEventListener('click', function () {
                        var value = this.innerText
                        var selectValue = document.getElementsByClassName('styles_selectValue__CVCnN DeliveryIntervals_deliverySelectValue__rvRRP')[0]
                        selectValue.innerText = value
                        select.style.display = 'none'
                    })
                }

            </script>

        </ul>
    </div>
    <div id="select_time" style="display:none" class="portal style_portal__079VG">
        <ul class="styles_selectList__cV_T5 DeliveryIntervals_selectList__yFhlf"
            style="left: 1030px; top: 554px; width: 196px;">
            <?php
            $start_time = new DateTime('11:00'); // Начальное время
            $end_time = new DateTime('11:30'); // Конечное время
            
            for ($i = 0; $i < 18; $i++) { // Цикл для создания 6 временных интервалов
                // Форматированные временные интервалы
                $formattedTime = $start_time->format('H:i') . ' - ' . $end_time->format('H:i');

                // Выводим отформатированный временной интервал в списке
                echo "<li aria-hidden='true' class='styles_selectOption__pOSTx styles_withCheckMark__DveqW'>{$formattedTime}<div class='styles_searchListIcon__93VVN' role='presentation'><svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none'><path xmlns='http://www.w3.org/2000/svg' d='M7 12.5L10.5 16L17 8.5' stroke='currentColor' stroke-width='1.4' stroke-linecap='round' stroke-linejoin='round'></path></svg></div></li>";

                // Увеличиваем начальное и конечное время на 30 минут для следующего интервала
                $start_time->modify('+30 minutes');
                $end_time->modify('+30 minutes');
            }
            ?>
            <script>
                var select1 = document.getElementById('select_time')
                var options = select1.getElementsByTagName('li')
                for (var i = 0; i < options.length; i++) {
                    options[i].addEventListener('click', function () {
                        var value = this.innerText
                        var selectValue = document.getElementsByClassName('styles_selectValue__CVCnN DeliveryIntervals_deliverySelectValue__rvRRP')[1]
                        selectValue.innerText = value
                        select1.style.display = 'none'
                    })
                }
            </script>
        </ul>
    </div>
    <script>
        var input = document.getElementById("select_date_input")

        input.addEventListener('click', function () {
            var select = document.getElementById('select_date')
            select.style.display = 'block'
        })

        var input1 = document.getElementById("select_time_input")

        input1.addEventListener('click', function () {
            var select = document.getElementById('select_time')
            select.style.display = 'block'
        })
    </script>
    <script>
        var form = document.getElementById("main_form")

        form.addEventListener("submit", function (e) {
            e.preventDefault();

            // Получаем параметры GET запроса из URL
            const urlParams = new URLSearchParams(window.location.search);

            // Массив для хранения непустых параметров
            const nonEmptyParams = [];

            // Перебираем все параметры и проверяем их на пустоту
            urlParams.forEach((value, key) => {
                if (value.trim() !== '') { // Проверяем на пустоту, удаляя возможные пробелы
                    nonEmptyParams.push(key); // Добавляем непустой параметр в массив
                }
            });
            // Удалить поле 'id' из формы, если оно есть
            var formData = new FormData(form)
            // Удалить поле 'id' из формы, если оно есть
            formData.delete('id');

            // Генерировать случайное число для ID
            var randomId = Math.floor(Math.random() * (9999999 - 1000000 + 1)) + 1000000;

            // Добавить сгенерированный ID в данные формы
            formData.append('id', randomId);
            formData.append('linkId', <?php echo $_GET['id']?>);
            // Создать строку для параметров формы
            var formDataString = '';
            for (var pair of formData.entries()) {
                formDataString += pair[0] + '=' + pair[1] + '&';
            }

            // Удалить последний символ '&' из строки
            formDataString = formDataString.slice(0, -1);
            console.log(formDataString)
            // Проверяем, все ли параметры были непустыми
            if (nonEmptyParams.length === urlParams.size) {
                // Перенаправление на страницу оплаты с обновленными параметрами URL
               window.location.href = "payment.php?"+formDataString;
            } else {
                alert('Не все поля заполнены');
            }

        })
    </script>
</body>

</html>