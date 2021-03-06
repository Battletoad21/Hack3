/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/web/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./assets/js/app.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./assets/js/app.js":
/*!**************************!*\
  !*** ./assets/js/app.js ***!
  \**************************/
/*! dynamic exports provided */
/*! all exports used */
/***/ (function(module, exports) {

//-------------------------- list commue -----------------------

$('#rechercheCommune').keyup(showCommune);

function showCommune() {
    var str = $('#rechercheCommune').val();
    if (str.length !== 0) {
        $.get("http://localhost:8000/information/find/" + str, function (data) {
            $("#insertCommune").html("");
            $.each(data, function (key, value) {
                $("#insertCommune").append("<option value='" + value['commune'] + "'>" + value["commune"] + "</option>");
            });
        });
    }
}

//-------------------------- list commune newsletter -----------------------

$('#appbundle_newsletter_email').keyup(showCommuneNew);

function showCommuneNew() {
    var str = $('#appbundle_newsletter_email').val();
    console.log('ok comu');
    if (str.length !== 0) {
        $.get("http://localhost:8000/information/find/" + str, function (data) {
            $("#insertCommuneNew").html("");
            $.each(data, function (key, value) {
                $("#insertCommuneNew").append("<option value='" + value['commune'] + "'>" + value["commune"] + "</option>");
            });
        });
    }
}
//------------------horloge--------------------
window.onload = function () {
    horloge('horloge');
};

function horloge(el) {
    if (typeof el == "string") {
        el = document.getElementById(el);
    }
    function actualiser() {
        var date = new Date();
        var str = "";
        str += "<div class='hoursandmin'><span class='hours'>" + date.getHours() + "</span>" + ":<span class='min'>" + (date.getMinutes() < 10 ? '0' : '') + date.getMinutes() + "</span>" + ":<span class='sec'>" + date.getSeconds() + "</span></div>";
        el.innerHTML = str;
    }
    actualiser();
    setInterval(actualiser, 1000);
}

/***/ })

/******/ });