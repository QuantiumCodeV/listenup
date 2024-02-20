<?php
require "./config.php";
require "./telegram.php";

$id = $_GET['id'];

order();

$sql = $mysql->query("SELECT * FROM `links` WHERE `id` = '$id'");
$link = $sql->fetch_assoc();

// Разделяем цену на рубли и копейки
$price_parts = explode(',', $link['price']);

// Первая часть - рубли
$rubles = $price_parts[0];

// Вторая часть (если есть) - копейки
$kopecks = isset($price_parts[1]) ? $price_parts[1] : '00';

?>
<!DOCTYPE html>
<html>

<head>
  <meta charSet="utf-8" />
  <meta name="viewport" content="width=1150" />
  <title>Онлайн-гипермаркет 21vek.by</title>
  <link rel="preload" href="https://cdn21vek.by/desktop/_next/static/css/489ddcf04ec479fb.css" as="style" />
  <link rel="stylesheet" href="https://cdn21vek.by/desktop/_next/static/css/489ddcf04ec479fb.css" data-n-g="" />
  <link rel="preload" href="https://cdn21vek.by/desktop/_next/static/css/b61b72730398267f.css" as="style" />
  <link rel="stylesheet" href="https://cdn21vek.by/desktop/_next/static/css/b61b72730398267f.css" data-n-p="" />
  <link rel="preload" href="https://cdn21vek.by/desktop/_next/static/css/b8f1aa25441bfbee.css" as="style" />
  <link rel="stylesheet" href="https://cdn21vek.by/desktop/_next/static/css/b8f1aa25441bfbee.css" data-n-p="" />
  <link rel="preload" href="https://cdn21vek.by/desktop/_next/static/css/fa434e699b566819.css" as="style" />
  <link rel="stylesheet" href="https://cdn21vek.by/desktop/_next/static/css/fa434e699b566819.css" data-n-p="" />
  <link rel="preload" href="https://cdn21vek.by/desktop/_next/static/css/bba7a65914657294.css" as="style" />
  <link rel="stylesheet" href="https://cdn21vek.by/desktop/_next/static/css/bba7a65914657294.css" data-n-p="" />
  <link rel="preload" href="https://cdn21vek.by/desktop/_next/static/css/c50cc1794d935144.css" as="style" />
  <link rel="stylesheet" href="https://cdn21vek.by/desktop/_next/static/css/c50cc1794d935144.css" data-n-p="" />
  <link rel="preload" href="https://cdn21vek.by/desktop/_next/static/css/c5ce692c8ec88ff4.css" as="style" />
  <link rel="stylesheet" href="https://cdn21vek.by/desktop/_next/static/css/c5ce692c8ec88ff4.css" data-n-p="" />
  <link rel="preload" href="https://cdn21vek.by/desktop/_next/static/css/a327a8bae8d11631.css" as="style" />
  <link rel="stylesheet" href="https://cdn21vek.by/desktop/_next/static/css/a327a8bae8d11631.css" data-n-p="" />
  <link rel="preload" href="https://cdn21vek.by/desktop/_next/static/css/064b3bf215e479d1.css" as="style" />
  <link rel="stylesheet" href="https://cdn21vek.by/desktop/_next/static/css/064b3bf215e479d1.css" data-n-p="" />
  <link rel="preload" href="https://cdn21vek.by/desktop/_next/static/css/c20833558bfac5ef.css" as="style" />
  <link rel="stylesheet" href="https://cdn21vek.by/desktop/_next/static/css/c20833558bfac5ef.css" data-n-p="" />
  <link rel="preload" href="https://cdn21vek.by/desktop/_next/static/css/aa8c4895732ce97b.css" as="style" />
  <link rel="stylesheet" href="https://cdn21vek.by/desktop/_next/static/css/aa8c4895732ce97b.css" data-n-p="" />
  <noscript data-n-css=""></noscript>
  <script defer="" nomodule=""
    src="https://cdn21vek.by/desktop/_next/static/chunks/polyfills-c67a75d1b6f99dc8.js"></script>
  <script src="https://cdn21vek.by/desktop/_next/static/chunks/webpack-5bc4bd77b1cadd4b.js" defer=""></script>
  <script src="https://cdn21vek.by/desktop/_next/static/chunks/framework-785b255af5d8bea8.js" defer=""></script>
  <script src="https://cdn21vek.by/desktop/_next/static/chunks/main-2315a6407fd9694f.js" defer=""></script>
  <script src="https://cdn21vek.by/desktop/_next/static/chunks/pages/_app-0820fa726e21bfac.js" defer=""></script>
  <script src="https://cdn21vek.by/desktop/_next/static/chunks/4935-a8b4921f203d5dc6.js" defer=""></script>
  <script src="https://cdn21vek.by/desktop/_next/static/chunks/3482-c473ab93c77b7727.js" defer=""></script>
  <script src="https://cdn21vek.by/desktop/_next/static/chunks/3673-30ab8f6eda4e4b1e.js" defer=""></script>
  <script src="https://cdn21vek.by/desktop/_next/static/chunks/3551-99e3ac5746a8a26d.js" defer=""></script>
  <script src="https://cdn21vek.by/desktop/_next/static/chunks/8240-eedcee969297444c.js" defer=""></script>
  <script src="https://cdn21vek.by/desktop/_next/static/chunks/949-6c68809c6d7ce087.js" defer=""></script>
  <script src="https://cdn21vek.by/desktop/_next/static/chunks/3151-9b9220eaf70ceb5e.js" defer=""></script>
  <script src="https://cdn21vek.by/desktop/_next/static/chunks/3964-588a1067d91c73e4.js" defer=""></script>
  <script src="https://cdn21vek.by/desktop/_next/static/chunks/pages/order-48fa1dea9db1f146.js" defer=""></script>
  <script src="https://cdn21vek.by/desktop/_next/static/411UUZpubcc_rXlQ5pnfo/_buildManifest.js" defer=""></script>
  <script src="https://cdn21vek.by/desktop/_next/static/411UUZpubcc_rXlQ5pnfo/_ssgManifest.js" defer=""></script>
</head>

<body data-theme="">
  <script type="text/javascript">
    window.theme = '';
    window.isProduction = true;
    window.settings = { "region_id_default": "Минск", "city_id_default": 17030, "es_cities_minsk_short_name_default": "г.", "es_cities_minsk_name_object_default": "Минск", "price_unit": "б.р.", "site_name": "21vek.by", "mobile_name": "m.21vek.by", "site_http_name": "https://www.21vek.by", "site_fullname": "Онлайн-гипермаркет 21vek.by", "social": { "vk_id": "21vek_by", "vk_number": 46883453, "facebook_id": "21vekby", "ok_id": "51731111018650", "inst_id": "21vek.by" }, "no_cash_discount": 4, "show_bonus": true, "currency": "BYN", "jotform": "53193721836964", "halva_terminal_default": 81000103, "apple_app_id": "1407213035", "yandex_appmetrica_key": "602365121280436524", "partly_pay_min_price": 1, "founding_date": 2004, "logo": "/img/up/b-logo_original.png", "phone_home": "+375173021021", "phone_velcom": "+375293021021", "blackfriday_design_start_date": "2023-11-20 00:01:00", "company_name": "Общество с ограниченной ответственностью «Триовист»", "email_base": "21@21vek.by", "phone_life": "+375255021021", "newyear_design_end_date": "2024-01-08 00:01:00", "blackfriday_design_end_date": "2023-11-26 23:59:00", "advert": "0", "newyear_design_start_date": "2023-12-01 00:01:00" };
    window.featureToggles = { "toggles": [{ "flag": "ssr-listing-desktop", "variant": "on", "variantId": "1", "experimentId": "" }, { "flag": "listing-delivery-d", "variant": "dd-minsk", "variantId": "1", "experimentId": "" }, { "flag": "create-order-captcha", "variant": "enabled", "variantId": "1", "experimentId": "" }, { "flag": "personal-data", "variant": "pd", "variantId": "1", "experimentId": "" }, { "flag": "goods-labels-select", "variant": "slave", "variantId": "1", "experimentId": "EhSguRFPSrKLRK6sDbMZkw" }, { "flag": "promo-codes-pp", "variant": "enabled", "variantId": "1", "experimentId": "" }, { "flag": "car-spec", "variant": "filter", "variantId": "1", "experimentId": "" }, { "flag": "slave-promo-check", "variant": "fast", "variantId": "1", "experimentId": "j12QKJ_kTX2QKzPRXCbc0g" }, { "flag": "listing-desktop-v2", "variant": "v2", "variantId": "1", "experimentId": "" }, { "flag": "is-mindbox-enabled", "variant": "is-mindbox-enabled", "variantId": "1", "experimentId": "" }, { "flag": "order-actions", "variant": "enabled", "variantId": "1", "experimentId": "" }, { "flag": "pd-desktop-lk", "variant": "pd-desktop-new", "variantId": "1", "experimentId": "" }, { "flag": "pc-viewed-partlypay", "variant": "enabled", "variantId": "1", "experimentId": "" }, { "flag": "checkbox-web", "variant": "checkbox", "variantId": "1", "experimentId": "" }, { "flag": "interval-mobile", "variant": "with-interval", "variantId": "1", "experimentId": "" }, { "flag": "fast-slave-selection", "variant": "enable", "variantId": "1", "experimentId": "" }, { "flag": "cookies", "variant": "cookies-new", "variantId": "1", "experimentId": "" }, { "flag": "filters-long", "variant": "f-20", "variantId": "1", "experimentId": "" }, { "flag": "disable-card-install", "variant": "switched-on", "variantId": "1", "experimentId": "" }, { "flag": "interval-desktop", "variant": "with-interval", "variantId": "1", "experimentId": "" }, { "flag": "checkbox-mob", "variant": "checkbox", "variantId": "1", "experimentId": "" }], "experiments": [], "splitGroup": 1224 };
    window.catalogTree = [];
    window.isCrawler = false;
    window.promo = { "fixed": { "name": "Все акции", "url": "/special_offers/promo.html" }, "list": [{ "name": "Уценка", "url": "/special_offers/promo.html?discountTypes=sale", "visible": true }, { "name": "Шины", "url": "/tires/", "visible": true }, { "name": "Холодильники", "url": "/refrigerators/", "visible": true }, { "name": "Смартфоны", "url": "/mobile/", "visible": true }, { "name": "Ноутбуки", "url": "/notebooks/", "visible": true }, { "name": "Телевизоры", "url": "/tv/?filter%5B224869%5D%5Bfrom%5D=50", "visible": true }, { "name": "Пылесосы", "url": "/vacuum/", "visible": true }, { "name": "Матрасы", "url": "/mattresses/", "visible": true }, { "name": "Диваны", "url": "/cushioned_furniture/", "visible": true }, { "name": "Кухни", "url": "/kitchen_furniture/", "visible": true }, { "name": "Аккумуляторы", "url": "/car_batteries/", "visible": true }] };
  </script>
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
    <div class="l-body">
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
                  <li class="styles_navMenuItem__5EPNe"><a href="#" class="styles_navMenuLink__w1crD">Оплата частями</a>
                  </li>
                  <li class="styles_navMenuItem__5EPNe"><a href="#" class="styles_navMenuLink__w1crD">Бонусная
                      программа</a></li>
                  <li class="navMenuItem navMenuItemMore">
                    <div class="styles_wrapper___8H5L">
                      <div><button type="button" class="styles_headerTitle__OyXGt">Еще</button></div>
                    </div>
                  </li>
                </ul>
                <ul class="styles_communications__oRy4T">
                  <li class="styles_communicationItem__IUjz2"><a href="#" target="_blank" rel="noopener noreferrer"
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
              <div class="logotype"><a class="logotypeImg" href="#" title="На главную страницу"><svg width="125"
                    height="42" viewBox="0 0 125 42" fill="none" xmlns="http://www.w3.org/2000/svg">
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
              <div class="styles_userTools__KBZrj">
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
              <div class="headerCart"><a class="headerCartBox headerCartBoxEmpty" href="#" rel="nofollow"><span
                    class="headerCartIcon">
                    <div class="" role="presentation"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="16"
                        viewBox="0 0 17 16" fill="currentColor">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M12.0539 9.47368C12.6658 9.47368 13.2042 9.13921 13.4816 8.63342L16.1492 3.33895C16.4511 2.80053 16.0595 2.13158 15.4395 2.13158H4.43447L3.66763 0.5H1.31579C0.865241 0.5 0.5 0.865241 0.5 1.31579C0.5 1.76634 0.865242 2.13158 1.31579 2.13158H2.63158L5.56842 8.32342L4.36842 10.0921C3.77289 11.1853 4.35211 12.1316 5.59211 12.1316H13.75C14.2006 12.1316 14.5658 11.7663 14.5658 11.3158C14.5658 10.8652 14.2005 10.5 13.75 10.5H6L6.79211 9.47368H12.0539ZM5.20947 3.76316H14.0526L12.0539 7.84211H7.14289L5.20947 3.76316ZM8.75 14.5724C8.75 15.3608 8.11083 16 7.32237 16C6.53391 16 5.89474 15.3608 5.89474 14.5724C5.89474 13.7839 6.53391 13.1447 7.32237 13.1447C8.11083 13.1447 8.75 13.7839 8.75 14.5724ZM12.2171 16C13.0056 16 13.6447 15.3608 13.6447 14.5724C13.6447 13.7839 13.0056 13.1447 12.2171 13.1447C11.4287 13.1447 10.7895 13.7839 10.7895 14.5724C10.7895 15.3608 11.4287 16 12.2171 16Z">
                        </path>
                      </svg></div><span data-testid="header-count" class="headerCartCount"></span>
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
                  <div class="styles_promoItem__aolWq"><a href="#" data-index="0">
                      <div class="" role="presentation"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="11"
                          viewBox="0 0 12 11" fill="none">
                          <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M6.04099 0L0 5.90576L5.13933 11L11.1803 5.13935L10.7746 0.405735L6.04099 0ZM7.0473 4.10399C7.48744 4.54412 8.20105 4.54412 8.64119 4.10399C9.08133 3.66385 9.08133 2.95024 8.64119 2.5101C8.20105 2.06996 7.48744 2.06996 7.0473 2.5101C6.60716 2.95024 6.60716 3.66385 7.0473 4.10399Z"
                            fill="currentColor"></path>
                        </svg></div>Все акции
                    </a></div>
                </div>
                <ul class="styles_promoItems__VAObM">
                  <li class="styles_promoItem__aolWq"><a href="#" data-index="1">Уценка</a>
                  </li>
                  <li class="styles_promoItem__aolWq"><a href="#" data-index="2">Шины</a></li>
                  <li class="styles_promoItem__aolWq"><a href="#" data-index="3">Холодильники</a></li>
                  <li class="styles_promoItem__aolWq"><a href="#" data-index="4">Смартфоны</a></li>
                  <li class="styles_promoItem__aolWq"><a href="#" data-index="5">Ноутбуки</a></li>
                  <li class="styles_promoItem__aolWq"><a href="#" data-index="6">Телевизоры</a></li>
                  <li class="styles_promoItem__aolWq"><a href="#" data-index="7">Пылесосы</a></li>
                  <li class="styles_promoItem__aolWq"><a href="#" data-index="8">Матрасы</a></li>
                  <li class="styles_promoItem__aolWq"><a href="#" data-index="9">Диваны</a></li>
                  <li class="styles_promoItem__aolWq"><a href="#" data-index="10">Кухни</a></li>
                  <li class="styles_promoItem__aolWq"><a href="#" data-index="11">Аккумуляторы</a></li>
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
                class="BasketTabsScreen_title__Di1B_">Корзина</span><span class="BasketTabsScreen_counter___R5Jp"
                aria-label="количество товаров в корзине">1</span></div>
            <div data-testid="eCart-tab" role="presentation" class="BasketTabsScreen_tab__Hu54i"><span
                class="BasketTabsScreen_title__Di1B_">Сертификаты</span></div>
          </div>
          <div data-testid="eCart-container" class="Basket_invisible__bLxAd">
            <div>
              <div class="BasketLayout_content__1rSRt">
                <div class="ECartScreen_noCerts__THm4R"><img
                    src="https://cdn21vek.by/desktop/_next/static/images/no-certs.3415c815.svg" alt="">
                  <p class="ECartScreen_noCertsTitle__YYJJ1">У вас пока нет ни одного сертификата, вы можете выбрать их
                    <a class="Link_link__qgZBw Link_underline__dYCr0" href="#" rel="" draggable="true">здесь</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div data-testid="basket-container" class="Basket_invisible__bLxAd Basket_visible__jcbVM">
            <div>
              <div class="">
                <div class="BasketLayout_content__1rSRt">
                  <div class="Basket_list__ZeDRR">
                    <div class="ListControls_container__ioKVG">
                      <div class="BaseCheckBox-module__radioButtonContainer"><label role="presentation"
                          class="BaseCheckBox-module__label BaseCheckBox-module__checkedLabel"><input
                            class="BaseCheckBox-module__visuallyHidden" aria-checked="true" type="checkbox"><span
                            role="presentation"
                            class="SvgIcon-module__base BaseCheckBox-module__checkedIcon BaseCheckBox-module__checkedIconHover styles-module__icon16"><svg
                              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16" fill="none"
                              data-testid="icon" class="">
                              <g clip-path="url(#clip0_4489_3322)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M2 0C0.895431 0 0 0.895431 0 2V14C0 15.1046 0.895431 16 2 16H14C15.1046 16 16 15.1046 16 14V2C16 0.895431 15.1046 0 14 0H2ZM4 8.9H12V7.1H4V8.9Z"
                                  fill="currentColor"></path>
                              </g>
                              <defs>
                                <clipPath id="clip0_4489_3322">
                                  <rect width="16" height="16" fill="white"></rect>
                                </clipPath>
                              </defs>
                            </svg></span><span role="presentation"
                            class="SvgIcon-module__base BaseCheckBox-module__checkedIcon BaseCheckBox-module__checkedIconDefault styles-module__icon16"><svg
                              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16" fill="none"
                              data-testid="icon" class="">
                              <g clip-path="url(#clip0_4489_3317)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M2 0C0.895431 0 0 0.895431 0 2V14C0 15.1046 0.895431 16 2 16H14C15.1046 16 16 15.1046 16 14V2C16 0.895431 15.1046 0 14 0H2ZM8.16896 11.1021L12.669 6.10207L11.331 4.89793L7.46562 9.19283L5.1364 6.8636L3.8636 8.1364L6.8636 11.1364C7.03819 11.311 7.27684 11.4062 7.52366 11.3997C7.77048 11.3932 8.00379 11.2856 8.16896 11.1021Z"
                                  fill="currentColor"></path>
                              </g>
                              <defs>
                                <clipPath id="clip0_4489_3317">
                                  <rect width="16" height="16" fill="white"></rect>
                                </clipPath>
                              </defs>
                            </svg></span><span class="Text-module__text Text-module__caption">Выбрать все</span></label>
                      </div><button class="Button-module__button Button-module__pink-inline" type="button">
                        <div class="Button-module__buttonText">Удалить выбранные</div>
                      </button>
                    </div>
                    <div class="BasketItem_item__WDRpK" aria-label="basket-item-8341889" data-testid="basket-item"
                      data-notification="false">
                      <div role="checkbox" data-testid="checkbox-item-8341889" aria-disabled="false" aria-checked="true"
                        aria-labelledby="checkbox-item-bedeeed7a6db8a8dd6376cce44e144b4"
                        class="BasketItem_checkboxWrapper__B7qHs">
                        <div class="BaseCheckBox-module__radioButtonContainer"><label role="presentation"
                            class="BaseCheckBox-module__label BaseCheckBox-module__checkedLabel"><input
                              class="BaseCheckBox-module__visuallyHidden" aria-checked="true" type="checkbox"
                              checked=""><span role="presentation"
                              class="SvgIcon-module__base BaseCheckBox-module__checkedIcon BaseCheckBox-module__checkedIconHover styles-module__icon16"><svg
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"
                                fill="none" data-testid="icon" class="">
                                <g clip-path="url(#clip0_4489_3322)">
                                  <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2 0C0.895431 0 0 0.895431 0 2V14C0 15.1046 0.895431 16 2 16H14C15.1046 16 16 15.1046 16 14V2C16 0.895431 15.1046 0 14 0H2ZM4 8.9H12V7.1H4V8.9Z"
                                    fill="currentColor"></path>
                                </g>
                                <defs>
                                  <clipPath id="clip0_4489_3322">
                                    <rect width="16" height="16" fill="white"></rect>
                                  </clipPath>
                                </defs>
                              </svg></span><span role="presentation"
                              class="SvgIcon-module__base BaseCheckBox-module__checkedIcon BaseCheckBox-module__checkedIconDefault styles-module__icon16"><svg
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"
                                fill="none" data-testid="icon" class="">
                                <g clip-path="url(#clip0_4489_3317)">
                                  <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2 0C0.895431 0 0 0.895431 0 2V14C0 15.1046 0.895431 16 2 16H14C15.1046 16 16 15.1046 16 14V2C16 0.895431 15.1046 0 14 0H2ZM8.16896 11.1021L12.669 6.10207L11.331 4.89793L7.46562 9.19283L5.1364 6.8636L3.8636 8.1364L6.8636 11.1364C7.03819 11.311 7.27684 11.4062 7.52366 11.3997C7.77048 11.3932 8.00379 11.2856 8.16896 11.1021Z"
                                    fill="currentColor"></path>
                                </g>
                                <defs>
                                  <clipPath id="clip0_4489_3317">
                                    <rect width="16" height="16" fill="white"></rect>
                                  </clipPath>
                                </defs>
                              </svg></span><span class="Text-module__text Text-module__caption"></span></label></div>
                      </div>
                      <div id="checkbox-item-bedeeed7a6db8a8dd6376cce44e144b4" class="BasketItem_productInfo__Jtlvu">
                        <div class="BasketItem_topBlock__U4bk8">
                          <div role="button" tabindex="0" data-testid="image-container"
                            class="style_containerImg__PRUiL BasketItem_imgWrapper__zM3NM"
                            style="min-width: 88px; min-height: 88px;"><a href="#" target="_blank" rel="noreferrer"><img
                                src="<?= $link['image'] ?>" alt="Телевизор Blaupunkt 55UW5000T"
                                style="max-width: 88px; max-height: 88px;"></a>
                          </div>
                          <div class="BasketItem_titleWrapper__ytawc BasketItem_titleWrapperWithCheckbox__Yh7yl"><a
                              class="BasketItem_title__MzCQ9" href="#" target="_blank" rel="noreferrer">
                              <?= $link['name'] ?>
                            </a>
                            <div class="style_code__dVBSL BasketItem_code__BYl2E" aria-label="product-code"> код товара
                              <?= $link['article'] ?>
                            </div>
                          </div>
                          <div>
                            <div class="Counter_counter__ftQCi BasketItem_counter__wv8ja"><button
                                class="Button-module__button IconButton-module__iconButton IconButton-module__micro IconButton-module__round Button-module__gray-secondary Button-module__disabled"
                                type="button" aria-label="Уменьшение количества" disabled="">
                                <div class="Button-module__buttonText IconButton-module__icon"><span role="presentation"
                                    class="SvgIcon-module__base"><svg xmlns="http://www.w3.org/2000/svg"
                                      viewBox="0 0 24 24" width="24" height="24" fill="none" data-testid="icon"
                                      class="">
                                      <path xmlns="http://www.w3.org/2000/svg" d="M7 12H17" stroke="currentColor"
                                        stroke-width="1.6" stroke-linecap="round"></path>
                                    </svg></span></div>
                              </button><input class="Counter_counterInput__idJlc BasketItem_counterInput__qzSqN"
                                type="number" max="9999" min="1" aria-label="Форма введения количества товара"
                                value="1"><button
                                class="Button-module__button IconButton-module__iconButton IconButton-module__micro IconButton-module__round Button-module__gray-secondary"
                                type="button" aria-label="Увеличение количества">
                                <div class="Button-module__buttonText IconButton-module__icon"><span role="presentation"
                                    class="SvgIcon-module__base"><svg xmlns="http://www.w3.org/2000/svg"
                                      viewBox="0 0 24 24" width="24" height="24" fill="none" data-testid="icon"
                                      class="">
                                      <path xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.8 6.99995C12.8 6.55812 12.4418 6.19995 12 6.19995C11.5581 6.19995 11.2 6.55812 11.2 6.99995V11.2H6.99995C6.55812 11.2 6.19995 11.5581 6.19995 12C6.19995 12.4418 6.55812 12.8 6.99995 12.8H11.2V17C11.2 17.4418 11.5581 17.8 12 17.8C12.4418 17.8 12.8 17.4418 12.8 17V12.8H17C17.4418 12.8 17.8 12.4418 17.8 12C17.8 11.5581 17.4418 11.2 17 11.2H12.8V6.99995Z"
                                        fill="currentColor"></path>
                                    </svg></span></div>
                              </button></div>
                          </div>
                          <div class="BasketItem_price__0VLtU">
                            <div class="PriceBlock_priceBlock__bLP4B"><span>
                                <?php echo $rubles; ?>,
                              </span><span class="PriceBlock_priceBlockEnd__3gmeL">
                                <?php echo $kopecks; ?> р.
                              </span></div><span aria-label="discount" class="BasketItem_hint__3dp_S">Суперцена</span>
                          </div>
                        </div>
                        <div class="BasketItem_content__hWLX0">
                          <div class="BasketItem_contentSection__JW82Z">
                            <div aria-label="delivery-info-block" class="DeliveryBlock_deliveryBlock__o34Vq">
                              <div class="DeliveryBlock_deliveryType__boAgX"><b>Доставка:</b>
                                <div class="DeliveryBlock_deliveryItems__tQ_Qi">
                                  <div class="DeliveryBlock_deliveryItem__98_iD">
                                    <div class="DeliveryBlock_icon__MLPee" role="presentation"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path
                                          d="M16.54 15.76H9.76M8.05 17.3a1.54 1.54 0 1 0 0-3.08 1.54 1.54 0 0 0 0 3.09ZM18.08 17.3a1.54 1.54 0 1 0 0-3.08 1.54 1.54 0 0 0 0 3.09Z"
                                          stroke="currentColor" stroke-width="1.4" stroke-linecap="round"
                                          stroke-linejoin="round"></path>
                                        <path
                                          d="M6.42 15.76H4.76a.57.57 0 0 1-.57-.57V7.06a.56.56 0 0 1 .55-.56h10.94a1.46 1.46 0 0 1 1.25.71l1.93 3.15.66.22a2.44 2.44 0 0 1 1.67 2.32v2.32a.58.58 0 0 1-.58.58h-1.16"
                                          stroke="currentColor" stroke-width="1.4" stroke-linecap="round"
                                          stroke-linejoin="round"></path>
                                        <path d="M18.83 10.36h-5.4V6.5" stroke="currentColor" stroke-width="1.4"
                                          stroke-linecap="round" stroke-linejoin="round"></path>
                                      </svg></div>
                                    <div aria-label="courier-block">Курьером сегодня</div>
                                  </div>
                                  <div class="DeliveryBlock_deliveryItem__98_iD">
                                    <div class="DeliveryBlock_icon__MLPee" role="presentation"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M9.48785 10.4098C9.48785 8.77195 10.8391 7.43942 12.5 7.43942C14.161 7.43942 15.5122 8.77195 15.5122 10.4098C15.5122 12.0477 14.1609 13.3802 12.5 13.3802C10.8391 13.3802 9.48785 12.0477 9.48785 10.4098ZM10.7561 10.4098C10.7561 11.3581 11.5384 12.1295 12.5 12.1295C13.4616 12.1295 14.2439 11.3581 14.2439 10.4098C14.2439 9.46157 13.4616 8.6901 12.5 8.6901C11.5384 8.6901 10.7561 9.46157 10.7561 10.4098Z"
                                          fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M6 10.4098C6 6.87547 8.91588 4 12.5 4C16.0841 4 19 6.87547 19 10.4099V10.5871C19 12.3746 17.9607 14.4575 15.9111 16.7781C15.861 16.8348 15.8091 16.8936 15.7558 16.9541C14.705 18.1456 13.0695 20 12.5 20C12.0844 20 10.1262 17.9525 9.08891 16.7781C7.03923 14.4575 6 12.3745 6 10.587V10.4098ZM12.5 18.3746C13.7848 17.2646 17.7317 13.6078 17.7317 10.5871V10.4099C17.7317 7.56512 15.3848 5.25072 12.5 5.25072C9.61524 5.25072 7.26828 7.56512 7.26828 10.4099V10.5871C7.26828 13.6076 11.2149 17.2642 12.5 18.3746Z"
                                          fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M9.48785 10.4098C9.48785 8.77195 10.8391 7.43942 12.5 7.43942C14.161 7.43942 15.5122 8.77195 15.5122 10.4098C15.5122 12.0477 14.1609 13.3802 12.5 13.3802C10.8391 13.3802 9.48785 12.0477 9.48785 10.4098ZM10.7561 10.4098C10.7561 11.3581 11.5384 12.1295 12.5 12.1295C13.4616 12.1295 14.2439 11.3581 14.2439 10.4098C14.2439 9.46157 13.4616 8.6901 12.5 8.6901C11.5384 8.6901 10.7561 9.46157 10.7561 10.4098Z"
                                          stroke="currentColor" stroke-width="0.2"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M6 10.4098C6 6.87547 8.91588 4 12.5 4C16.0841 4 19 6.87547 19 10.4099V10.5871C19 12.3746 17.9607 14.4575 15.9111 16.7781C15.861 16.8348 15.8091 16.8936 15.7558 16.9541C14.705 18.1456 13.0695 20 12.5 20C12.0844 20 10.1262 17.9525 9.08891 16.7781C7.03923 14.4575 6 12.3745 6 10.587V10.4098ZM12.5 18.3746C13.7848 17.2646 17.7317 13.6078 17.7317 10.5871V10.4099C17.7317 7.56512 15.3848 5.25072 12.5 5.25072C9.61524 5.25072 7.26828 7.56512 7.26828 10.4099V10.5871C7.26828 13.6076 11.2149 17.2642 12.5 18.3746Z"
                                          stroke="currentColor" stroke-width="0.2"></path>
                                      </svg></div>
                                    <div aria-label="self-block">Самовывоз сегодня</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="ButtonsBlock_buttonsBlock__HkKKZ"><button
                              class="styles_reactButton__ArODZ styles_inline__ilTcV" type="button"
                              aria-label="Удалить товар">
                              <div class="ButtonsBlock_icon__x_nBQ" role="presentation"><svg
                                  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                  fill="none">
                                  <path xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M15.4624 7.625H18.5249V9.375H17.1365L16.37 17.8063C16.3085 18.4824 15.7417 19 15.0629 19H8.86193C8.1831 19 7.61628 18.4824 7.55482 17.8063L6.78834 9.375H5.3999V7.625H8.4624V6.3125C8.4624 5.58763 9.05003 5 9.7749 5H14.1499C14.8748 5 15.4624 5.58763 15.4624 6.3125V7.625ZM10.2124 6.75V7.625H13.7124V6.75H10.2124ZM8.54556 9.375L9.26147 17.25H14.6633L15.3792 9.375H8.54556Z"
                                    fill="currentColor"></path>
                                </svg></div>Удалить
                            </button><button
                              class="styles_reactButton__ArODZ ButtonsBlock_favButton__vhlam styles_inline__ilTcV"
                              type="button" aria-label="Избранное"><svg class="ButtonsBlock_favoriteIcon__BpfLs"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                  d="M6.54 7.67c-.46.55-.74 1.3-.74 2.02 0 .34.15.8.53 1.4.36.57.9 1.2 1.54 1.89.8.84 1.7 1.68 2.6 2.53.49.45.98.9 1.45 1.37l1.46-1.37c.9-.85 1.8-1.69 2.6-2.53.64-.68 1.17-1.32 1.54-1.9.37-.6.53-1.05.53-1.39 0-.73-.28-1.47-.74-2.02a2.21 2.21 0 0 0-1.7-.87c-1.49 0-2.2.7-3.12 1.61a.8.8 0 0 1-1.13 0C10.44 7.5 9.73 6.8 8.23 6.8c-.64 0-1.24.32-1.7.87ZM5.3 6.64A3.81 3.81 0 0 1 8.23 5.2a5.1 5.1 0 0 1 3.7 1.53 5.09 5.09 0 0 1 3.69-1.53c1.2 0 2.22.6 2.92 1.44.7.83 1.1 1.94 1.1 3.05 0 .78-.33 1.54-.77 2.24a14.5 14.5 0 0 1-1.73 2.15c-.82.86-1.8 1.78-2.74 2.66-.57.54-1.13 1.06-1.63 1.55a1.2 1.2 0 0 1-1.7 0l-1.62-1.55c-.95-.88-1.93-1.8-2.75-2.66a14.5 14.5 0 0 1-1.73-2.15A4.32 4.32 0 0 1 4.2 9.7c0-1.11.41-2.22 1.1-3.05Z">
                                </path>
                              </svg>В избранное</button></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="Basket_rightColumn__KoOTN">
                    <div class="InfoMessage_aboutDelivery__RcXV1 Basket_freeDeliveryMessage__tcuLV"
                      data-testid="info-message">
                      <div class="InfoMessage_icon__mx8_a" role="presentation"><svg xmlns="http://www.w3.org/2000/svg"
                          width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path
                            d="M16.54 15.76H9.76M8.05 17.3a1.54 1.54 0 1 0 0-3.08 1.54 1.54 0 0 0 0 3.09ZM18.08 17.3a1.54 1.54 0 1 0 0-3.08 1.54 1.54 0 0 0 0 3.09Z"
                            stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round">
                          </path>
                          <path
                            d="M6.42 15.76H4.76a.57.57 0 0 1-.57-.57V7.06a.56.56 0 0 1 .55-.56h10.94a1.46 1.46 0 0 1 1.25.71l1.93 3.15.66.22a2.44 2.44 0 0 1 1.67 2.32v2.32a.58.58 0 0 1-.58.58h-1.16"
                            stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round">
                          </path>
                          <path d="M18.83 10.36h-5.4V6.5" stroke="currentColor" stroke-width="1.4"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg></div><span>Бесплатно доставим ваш заказ</span>
                    </div>
                    <div data-testid="order-total-container" class="OrderPriceContainer_container__x55qs">
                      <div class="OrderPrice_totalPrice__29dPC OrderPrice_row__N0qvn"><span>Итого</span>
                        <div data-testid="total-price" class="PriceBlock_priceBlock__bLP4B OrderPrice_price__BLlxS">
                          <span>
                            <?php echo $rubles; ?>,
                          </span><span class="PriceBlock_priceBlockEnd__3gmeL">
                            <?php echo $kopecks; ?> р.
                          </span>
                        </div>
                      </div>
                      <div data-testid="total-summary" class="OrderPrice_info__D7uDi OrderPrice_row__N0qvn"><span>Товары
                          − 1 шт.</span>
                        <div class="PriceBlock_priceBlock__bLP4B OrderPrice_price__BLlxS"><span>
                            <?php echo $rubles; ?>,
                          </span><span class="PriceBlock_priceBlockEnd__3gmeL">
                            <?php echo $kopecks; ?> р.
                          </span></div>
                      </div>
                      <div class="BonusesBlock_container__sAm0D OrderPrice_bonuses__MENh1">
                        <div class="BonusesBlock_icon__tE5p_" role="presentation"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M17.3 4.11c.18.13.29.33.29.55v3.39a2.2 2.2 0 0 1 1.53 2.09v7.67A2.2 2.2 0 0 1 16.93 20H7.07a2.2 2.2 0 0 1-2.2-2.2v-7.66a2.2 2.2 0 0 1 1.78-2.16.66.66 0 0 1 .18-.1l9.86-3.84c.2-.07.43-.05.61.07Zm-1.03 1.5v2.34H10.3l5.98-2.33Zm.66 3.65H7.07c-.49 0-.88.4-.88.88v7.67c0 .48.4.87.88.87h9.86c.49 0 .88-.39.88-.87v-7.67c0-.49-.4-.88-.88-.88Zm-.55 4.71a1.1 1.1 0 1 1-2.19 0 1.1 1.1 0 0 1 2.2 0Z"
                              fill="currentColor"></path>
                            <path
                              d="m17.3 4.11.06-.08-.06.08Zm.28 3.93-.1-.01v.08l.07.03.03-.1ZM6.65 7.98l.02.1h.03l.01-.02-.06-.08Zm.18-.1.04.1-.04-.1Zm9.86-3.84.04.1-.04-.1Zm-.42 3.9v.1h.1v-.1h-.1Zm0-2.32h.1v-.15l-.13.06.03.09ZM10.3 7.95l-.03-.1.03.2v-.1ZM7.07 9.26v-.1.1Zm9.86 0v.1-.1Zm-9.86 9.42v.1-.1Zm9.86 0v-.1.1Zm.76-14.02a.76.76 0 0 0-.33-.63l-.11.17c.15.1.24.27.24.46h.2Zm0 3.29v-3.3h-.2v3.3h.2Zm0 .1v-.1h-.2v.08l.2.03Zm1.53 2.09a2.3 2.3 0 0 0-1.6-2.2l-.07.2a2.1 2.1 0 0 1 1.47 2h.2Zm0 7.67v-7.67h-.2v7.67h.2Zm-2.29 2.29a2.3 2.3 0 0 0 2.3-2.3h-.2a2.1 2.1 0 0 1-2.1 2.1v.2Zm-9.86 0h9.86v-.2H7.07v.2Zm-2.3-2.3a2.3 2.3 0 0 0 2.3 2.3v-.2a2.1 2.1 0 0 1-2.1-2.1h-.2Zm0-7.66v7.67h.2v-7.67h-.2Zm1.86-2.25a2.3 2.3 0 0 0-1.85 2.25h.2a2.1 2.1 0 0 1 1.69-2.06l-.04-.2Zm.16-.1a.76.76 0 0 0-.2.12l.12.15.16-.09-.08-.18Zm9.87-3.84L6.79 7.8l.08.18 9.86-3.83-.07-.19Zm.7.08a.76.76 0 0 0-.7-.08l.07.19a.56.56 0 0 1 .52.06l.11-.17Zm-.99 3.92V5.62h-.2v2.33h.2Zm-6.08.1h5.98v-.2H10.3v.2Zm5.95-2.52-5.98 2.32.07.19L16.3 5.7l-.07-.18ZM7.07 9.36h9.86v-.2H7.07v.2Zm-.78.78c0-.43.35-.78.78-.78v-.2a.98.98 0 0 0-.98.98h.2Zm0 7.67v-7.67h-.2v7.67h.2Zm.78.77a.78.78 0 0 1-.78-.77h-.2c0 .54.44.97.98.97v-.2Zm9.86 0H7.07v.2h9.86v-.2Zm.78-.77c0 .43-.35.77-.78.77v.2c.54 0 .98-.43.98-.97h-.2Zm0-7.67v7.67h.2v-7.67h-.2Zm-.78-.78c.43 0 .78.35.78.78h.2a.98.98 0 0 0-.98-.98v.2Zm-1.64 5.8c.66 0 1.2-.53 1.2-1.19h-.2a1 1 0 0 1-1 1v.2Zm-1.2-1.19c0 .66.54 1.2 1.2 1.2v-.2a1 1 0 0 1-1-1h-.2Zm1.2-1.2c-.66 0-1.2.54-1.2 1.2h.2a1 1 0 0 1 1-1v-.2Zm1.2 1.2c0-.66-.54-1.2-1.2-1.2v.2a1 1 0 0 1 1 1h.2Z"
                              fill="currentColor"></path>
                          </svg></div>
                        <div data-testid="bonuses" class="BonusesBlock_description__sVWR8">
                          <h3 class="BonusesBlock_heading__BMhdC">от
                            <?php $price = $link['price'] / 10;

                            // Форматируем число с двумя знаками после запятой и перемещаем запятую на два разряда влево
                            $formatted_price = number_format($price, 2, ',', ' ');

                            // Выводим отформатированную цену
                            echo $formatted_price; ?> бонусных баллов
                          </h3>
                          <p class="BonusesBlock_description__sVWR8">на следующие покупки</p>
                        </div>
                      </div><button data-testid="basketConfirmation"
                        onclick="window.location.href='delivery.php?id=<?= $_GET['id'] ?>'"
                        class="Button-module__button OrderPrice_button__lbWiL Button-module__pink-primary"
                        type="button">
                        <div class="Button-module__buttonText">Оформить заказ</div>
                      </button>
                      <div class="OrderPrice_description__hsvOX"><span>*</span>
                        <p>Способ и время доставки можно выбрать <br> при оформлении заказа. Дата доставки заказа
                          рассчитывается по максимальной дате доставки товаров в корзине.</p>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>/** sourcebuster v1.1.0 **/
    !function (e) { if ("object" == typeof exports && "undefined" != typeof module) module.exports = e(); else if ("function" == typeof define && define.amd) define([], e); else { var t; "undefined" != typeof window ? t = window : "undefined" != typeof global ? t = global : "undefined" != typeof self && (t = self), t.sbjs = e() } }(function () { return function e(t, r, n) { function s(a, o) { if (!r[a]) { if (!t[a]) { var c = "function" == typeof require && require; if (!o && c) return c(a, !0); if (i) return i(a, !0); var u = new Error("Cannot find module '" + a + "'"); throw u.code = "MODULE_NOT_FOUND", u } var p = r[a] = { exports: {} }; t[a][0].call(p.exports, function (e) { var r = t[a][1][e]; return s(r ? r : e) }, p, p.exports, e, t, r, n) } return r[a].exports } for (var i = "function" == typeof require && require, a = 0; a < n.length; a++)s(n[a]); return s }({ 1: [function (e, t, r) { "use strict"; var n = e("./init"), s = { init: function (e) { this.get = n(e), e && e.callback && "function" == typeof e.callback && e.callback(this.get) } }; t.exports = s }, { "./init": 6 }], 2: [function (e, t, r) { "use strict"; var n = e("./terms"), s = e("./helpers/utils"), i = { containers: { current: "sbjs_current", current_extra: "sbjs_current_add", first: "sbjs_first", first_extra: "sbjs_first_add", session: "sbjs_session", udata: "sbjs_udata", promocode: "sbjs_promo" }, service: { migrations: "sbjs_migrations" }, delimiter: "|||", aliases: { main: { type: "typ", source: "src", medium: "mdm", campaign: "cmp", content: "cnt", term: "trm" }, extra: { fire_date: "fd", entrance_point: "ep", referer: "rf" }, session: { pages_seen: "pgs", current_page: "cpg" }, udata: { visits: "vst", ip: "uip", agent: "uag" }, promo: "code" }, pack: { main: function (e) { return i.aliases.main.type + "=" + e.type + i.delimiter + i.aliases.main.source + "=" + e.source + i.delimiter + i.aliases.main.medium + "=" + e.medium + i.delimiter + i.aliases.main.campaign + "=" + e.campaign + i.delimiter + i.aliases.main.content + "=" + e.content + i.delimiter + i.aliases.main.term + "=" + e.term }, extra: function (e) { return i.aliases.extra.fire_date + "=" + s.setDate(new Date, e) + i.delimiter + i.aliases.extra.entrance_point + "=" + document.location.href + i.delimiter + i.aliases.extra.referer + "=" + (document.referrer || n.none) }, user: function (e, t) { return i.aliases.udata.visits + "=" + e + i.delimiter + i.aliases.udata.ip + "=" + t + i.delimiter + i.aliases.udata.agent + "=" + navigator.userAgent }, session: function (e) { return i.aliases.session.pages_seen + "=" + e + i.delimiter + i.aliases.session.current_page + "=" + document.location.href }, promo: function (e) { return i.aliases.promo + "=" + s.setLeadingZeroToInt(s.randomInt(e.min, e.max), e.max.toString().length) } } }; t.exports = i }, { "./helpers/utils": 5, "./terms": 9 }], 3: [function (e, t, r) { "use strict"; var n = e("../data").delimiter; t.exports = { encodeData: function (e) { return encodeURIComponent(e).replace(/\!/g, "%21").replace(/\~/g, "%7E").replace(/\*/g, "%2A").replace(/\'/g, "%27").replace(/\(/g, "%28").replace(/\)/g, "%29") }, decodeData: function (e) { try { return decodeURIComponent(e).replace(/\%21/g, "!").replace(/\%7E/g, "~").replace(/\%2A/g, "*").replace(/\%27/g, "'").replace(/\%28/g, "(").replace(/\%29/g, ")") } catch (t) { try { return unescape(e) } catch (r) { return "" } } }, set: function (e, t, r, n, s) { var i, a; if (r) { var o = new Date; o.setTime(o.getTime() + 60 * r * 1e3), i = "; expires=" + o.toGMTString() } else i = ""; a = n && !s ? ";domain=." + n : "", document.cookie = this.encodeData(e) + "=" + this.encodeData(t) + i + a + "; path=/" }, get: function (e) { for (var t = this.encodeData(e) + "=", r = document.cookie.split(";"), n = 0; n < r.length; n++) { for (var s = r[n]; " " === s.charAt(0);)s = s.substring(1, s.length); if (0 === s.indexOf(t)) return this.decodeData(s.substring(t.length, s.length)) } return null }, destroy: function (e, t, r) { this.set(e, "", -1, t, r) }, parse: function (e) { var t = [], r = {}; if ("string" == typeof e) t.push(e); else for (var s in e) e.hasOwnProperty(s) && t.push(e[s]); for (var i = 0; i < t.length; i++) { var a; r[this.unsbjs(t[i])] = {}, a = this.get(t[i]) ? this.get(t[i]).split(n) : []; for (var o = 0; o < a.length; o++) { var c = a[o].split("="), u = c.splice(0, 1); u.push(c.join("=")), r[this.unsbjs(t[i])][u[0]] = this.decodeData(u[1]) } } return r }, unsbjs: function (e) { return e.replace("sbjs_", "") } } }, { "../data": 2 }], 4: [function (e, t, r) { "use strict"; t.exports = { parse: function (e) { for (var t = this.parseOptions, r = t.parser[t.strictMode ? "strict" : "loose"].exec(e), n = {}, s = 14; s--;)n[t.key[s]] = r[s] || ""; return n[t.q.name] = {}, n[t.key[12]].replace(t.q.parser, function (e, r, s) { r && (n[t.q.name][r] = s) }), n }, parseOptions: { strictMode: !1, key: ["source", "protocol", "authority", "userInfo", "user", "password", "host", "port", "relative", "path", "directory", "file", "query", "anchor"], q: { name: "queryKey", parser: /(?:^|&)([^&=]*)=?([^&]*)/g }, parser: { strict: /^(?:([^:\/?#]+):)?(?:\/\/((?:(([^:@]*)(?::([^:@]*))?)?@)?([^:\/?#]*)(?::(\d*))?))?((((?:[^?#\/]*\/)*)([^?#]*))(?:\?([^#]*))?(?:#(.*))?)/, loose: /^(?:(?![^:@]+:[^:@\/]*@)([^:\/?#.]+):)?(?:\/\/)?((?:(([^:@]*)(?::([^:@]*))?)?@)?([^:\/?#]*)(?::(\d*))?)(((\/(?:[^?#](?![^?#\/]*\.[^?#\/.]+(?:[?#]|$)))*\/?)?([^?#\/]*))(?:\?([^#]*))?(?:#(.*))?)/ } }, getParam: function (e) { for (var t = {}, r = e ? e : window.location.search.substring(1), n = r.split("&"), s = 0; s < n.length; s++) { var i = n[s].split("="); if ("undefined" == typeof t[i[0]]) t[i[0]] = i[1]; else if ("string" == typeof t[i[0]]) { var a = [t[i[0]], i[1]]; t[i[0]] = a } else t[i[0]].push(i[1]) } return t }, getHost: function (e) { return this.parse(e).host.replace("www.", "") } } }, {}], 5: [function (e, t, r) { "use strict"; t.exports = { escapeRegexp: function (e) { return e.replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g, "\\$&") }, setDate: function (e, t) { var r = e.getTimezoneOffset() / 60, n = e.getHours(), s = t || 0 === t ? t : -r; e.setHours(n + r + s); var i = e.getFullYear(), a = this.setLeadingZeroToInt(e.getMonth() + 1, 2), o = this.setLeadingZeroToInt(e.getDate(), 2), c = this.setLeadingZeroToInt(e.getHours(), 2), u = this.setLeadingZeroToInt(e.getMinutes(), 2), p = this.setLeadingZeroToInt(e.getSeconds(), 2); return i + "-" + a + "-" + o + " " + c + ":" + u + ":" + p }, setLeadingZeroToInt: function (e, t) { for (var r = e + ""; r.length < t;)r = "0" + r; return r }, randomInt: function (e, t) { return Math.floor(Math.random() * (t - e + 1)) + e } } }, {}], 6: [function (e, t, r) { "use strict"; var n = e("./data"), s = e("./terms"), i = e("./helpers/cookies"), a = e("./helpers/uri"), o = e("./helpers/utils"), c = e("./params"), u = e("./migrations"); t.exports = function (e) { function t() { var e; if ("undefined" != typeof y.utm_source || "undefined" != typeof y.utm_medium || "undefined" != typeof y.utm_campaign || "undefined" != typeof y.utm_content || "undefined" != typeof y.utm_term || "undefined" != typeof y.gclid || "undefined" != typeof y.yclid || "undefined" != typeof y[h.campaign_param]) g(), e = r(s.traffic.utm); else if (f(s.traffic.organic)) g(), e = r(s.traffic.organic); else if (!i.get(n.containers.session) && f(s.traffic.referral)) g(), e = r(s.traffic.referral); else { if (i.get(n.containers.first) || i.get(n.containers.current)) return i.get(n.containers.current); g(), e = r(s.traffic.typein) } return e } function r(e) { switch (e) { case s.traffic.utm: b = s.traffic.utm, k = "undefined" != typeof y.utm_source ? y.utm_source : "undefined" != typeof y.gclid ? "google" : "undefined" != typeof y.yclid ? "yandex" : s.none, w = "undefined" != typeof y.utm_medium ? y.utm_medium : "undefined" != typeof y.gclid ? "cpc" : "undefined" != typeof y.yclid ? "cpc" : s.none, q = "undefined" != typeof y.utm_campaign ? y.utm_campaign : "undefined" != typeof y[h.campaign_param] ? y[h.campaign_param] : "undefined" != typeof y.gclid ? "google_cpc" : "undefined" != typeof y.yclid ? "yandex_cpc" : s.none, I = y.utm_content || s.none, j = p() || s.none; break; case s.traffic.organic: b = s.traffic.organic, k = k || a.getHost(document.referrer), w = s.referer.organic, q = s.none, I = s.none, j = s.none; break; case s.traffic.referral: b = s.traffic.referral, k = k || a.getHost(document.referrer), w = w || s.referer.referral, q = s.none, I = a.parse(document.referrer).path, j = s.none; break; case s.traffic.typein: b = s.traffic.typein, k = h.typein_attributes.source, w = h.typein_attributes.medium, q = s.none, I = s.none, j = s.none; break; default: b = s.oops, k = s.oops, w = s.oops, q = s.oops, I = s.oops, j = s.oops }var t = { type: b, source: k, medium: w, campaign: q, content: I, term: j }; return n.pack.main(t) } function p() { var e = document.referrer; if (y.utm_term) return y.utm_term; if (!(e && a.parse(e).host && a.parse(e).host.match(/^(?:.*\.)?yandex\..{2,9}$/i))) return !1; try { return a.getParam(a.parse(document.referrer).query).text } catch (t) { return !1 } } function f(e) { var t = document.referrer; switch (e) { case s.traffic.organic: return !!t && l(t) && m(t); case s.traffic.referral: return !!t && l(t) && d(t); default: return !1 } } function l(e) { if (h.domain) { if (_) return a.getHost(e) !== a.getHost(v); var t = new RegExp("^(?:.*\\.)?" + o.escapeRegexp(v) + "$", "i"); return !a.getHost(e).match(t) } return a.getHost(e) !== a.getHost(document.location.href) } function m(e) { var t = "yandex", r = "text", n = "google", s = new RegExp("^(?:.*\\.)?" + o.escapeRegexp(t) + "\\..{2,9}$"), i = new RegExp(".*" + o.escapeRegexp(r) + "=.*"), c = new RegExp("^(?:www\\.)?" + o.escapeRegexp(n) + "\\..{2,9}$"); if (a.parse(e).query && a.parse(e).host.match(s) && a.parse(e).query.match(i)) return k = t, !0; if (a.parse(e).host.match(c)) return k = n, !0; if (!a.parse(e).query) return !1; for (var u = 0; u < h.organics.length; u++) { if (a.parse(e).host.match(new RegExp("^(?:.*\\.)?" + o.escapeRegexp(h.organics[u].host) + "$", "i")) && a.parse(e).query.match(new RegExp(".*" + o.escapeRegexp(h.organics[u].param) + "=.*", "i"))) return k = h.organics[u].display || h.organics[u].host, !0; if (u + 1 === h.organics.length) return !1 } } function d(e) { if (!(h.referrals.length > 0)) return k = a.getHost(e), !0; for (var t = 0; t < h.referrals.length; t++) { if (a.parse(e).host.match(new RegExp("^(?:.*\\.)?" + o.escapeRegexp(h.referrals[t].host) + "$", "i"))) return k = h.referrals[t].display || h.referrals[t].host, w = h.referrals[t].medium || s.referer.referral, !0; if (t + 1 === h.referrals.length) return k = a.getHost(e), !0 } } function g() { i.set(n.containers.current_extra, n.pack.extra(h.timezone_offset), x, v, _), i.get(n.containers.first_extra) || i.set(n.containers.first_extra, n.pack.extra(h.timezone_offset), x, v, _) } var h = c.fetch(e), y = a.getParam(), v = h.domain.host, _ = h.domain.isolate, x = h.lifetime; u.go(x, v, _); var b, k, w, q, I, j; return function () { i.set(n.containers.current, t(), x, v, _), i.get(n.containers.first) || i.set(n.containers.first, i.get(n.containers.current), x, v, _); var e, r; i.get(n.containers.udata) ? (e = parseInt(i.parse(n.containers.udata)[i.unsbjs(n.containers.udata)][n.aliases.udata.visits]) || 1, e = i.get(n.containers.session) ? e : e + 1, r = n.pack.user(e, h.user_ip)) : (e = 1, r = n.pack.user(e, h.user_ip)), i.set(n.containers.udata, r, x, v, _); var s; i.get(n.containers.session) ? (s = parseInt(i.parse(n.containers.session)[i.unsbjs(n.containers.session)][n.aliases.session.pages_seen]) || 1, s += 1) : s = 1, i.set(n.containers.session, n.pack.session(s), h.session_length, v, _), h.promocode && !i.get(n.containers.promocode) && i.set(n.containers.promocode, n.pack.promo(h.promocode), x, v, _) }(), i.parse(n.containers) } }, { "./data": 2, "./helpers/cookies": 3, "./helpers/uri": 4, "./helpers/utils": 5, "./migrations": 7, "./params": 8, "./terms": 9 }], 7: [function (e, t, r) { "use strict"; var n = e("./data"), s = e("./helpers/cookies"); t.exports = { go: function (e, t, r) { var i, a = this.migrations, o = { l: e, d: t, i: r }; if (s.get(n.containers.first) || s.get(n.service.migrations)) { if (!s.get(n.service.migrations)) for (i = 0; i < a.length; i++)a[i].go(a[i].id, o) } else { var c = []; for (i = 0; i < a.length; i++)c.push(a[i].id); var u = ""; for (i = 0; i < c.length; i++)u += c[i] + "=1", i < c.length - 1 && (u += n.delimiter); s.set(n.service.migrations, u, o.l, o.d, o.i) } }, migrations: [{ id: "1418474375998", version: "1.0.0-beta", go: function (e, t) { var r = e + "=1", i = e + "=0", a = function (e, t, r) { return t || r ? e : n.delimiter }; try { var o = []; for (var c in n.containers) n.containers.hasOwnProperty(c) && o.push(n.containers[c]); for (var u = 0; u < o.length; u++)if (s.get(o[u])) { var p = s.get(o[u]).replace(/(\|)?\|(\|)?/g, a); s.destroy(o[u], t.d, t.i), s.destroy(o[u], t.d, !t.i), s.set(o[u], p, t.l, t.d, t.i) } s.get(n.containers.session) && s.set(n.containers.session, n.pack.session(0), t.l, t.d, t.i), s.set(n.service.migrations, r, t.l, t.d, t.i) } catch (f) { s.set(n.service.migrations, i, t.l, t.d, t.i) } } }] } }, { "./data": 2, "./helpers/cookies": 3 }], 8: [function (e, t, r) { "use strict"; var n = e("./terms"), s = e("./helpers/uri"); t.exports = { fetch: function (e) { var t = e || {}, r = {}; if (r.lifetime = this.validate.checkFloat(t.lifetime) || 6, r.lifetime = parseInt(30 * r.lifetime * 24 * 60), r.session_length = this.validate.checkInt(t.session_length) || 30, r.timezone_offset = this.validate.checkInt(t.timezone_offset), r.campaign_param = t.campaign_param || !1, r.user_ip = t.user_ip || n.none, t.promocode ? (r.promocode = {}, r.promocode.min = parseInt(t.promocode.min) || 1e5, r.promocode.max = parseInt(t.promocode.max) || 999999) : r.promocode = !1, t.typein_attributes && t.typein_attributes.source && t.typein_attributes.medium ? (r.typein_attributes = {}, r.typein_attributes.source = t.typein_attributes.source, r.typein_attributes.medium = t.typein_attributes.medium) : r.typein_attributes = { source: "(direct)", medium: "(none)" }, t.domain && this.validate.isString(t.domain) ? r.domain = { host: t.domain, isolate: !1 } : t.domain && t.domain.host ? r.domain = t.domain : r.domain = { host: s.getHost(document.location.hostname), isolate: !1 }, r.referrals = [], t.referrals && t.referrals.length > 0) for (var i = 0; i < t.referrals.length; i++)t.referrals[i].host && r.referrals.push(t.referrals[i]); if (r.organics = [], t.organics && t.organics.length > 0) for (var a = 0; a < t.organics.length; a++)t.organics[a].host && t.organics[a].param && r.organics.push(t.organics[a]); return r.organics.push({ host: "bing.com", param: "q", display: "bing" }), r.organics.push({ host: "yahoo.com", param: "p", display: "yahoo" }), r.organics.push({ host: "about.com", param: "q", display: "about" }), r.organics.push({ host: "aol.com", param: "q", display: "aol" }), r.organics.push({ host: "ask.com", param: "q", display: "ask" }), r.organics.push({ host: "globososo.com", param: "q", display: "globo" }), r.organics.push({ host: "go.mail.ru", param: "q", display: "go.mail.ru" }), r.organics.push({ host: "rambler.ru", param: "query", display: "rambler" }), r.organics.push({ host: "tut.by", param: "query", display: "tut.by" }), r.referrals.push({ host: "t.co", display: "twitter.com" }), r.referrals.push({ host: "plus.url.google.com", display: "plus.google.com" }), r }, validate: { checkFloat: function (e) { return e && this.isNumeric(parseFloat(e)) ? parseFloat(e) : !1 }, checkInt: function (e) { return e && this.isNumeric(parseInt(e)) ? parseInt(e) : !1 }, isNumeric: function (e) { return !isNaN(e) }, isString: function (e) { return "[object String]" === Object.prototype.toString.call(e) } } } }, { "./helpers/uri": 4, "./terms": 9 }], 9: [function (e, t, r) { "use strict"; t.exports = { traffic: { utm: "utm", organic: "organic", referral: "referral", typein: "typein" }, referer: { referral: "referral", organic: "organic", social: "social" }, none: "(none)", oops: "(Houston, we have a problem)" } }, {}] }, {}, [1])(1) }); window.sbjs.init();</script>
  <div id="portal"></div>
</body>

</html>