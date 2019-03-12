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
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/assets/source/js/cp.js":
/*!************************************!*\
  !*** ./src/assets/source/js/cp.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval("\n\n(function () {\n  document.querySelector('[data-method]').onclick = function (event) {\n    event.preventDefault();\n    var data = event.target.dataset;\n    var method = data.method || 'post';\n    var params = data.params || [];\n    var url = event.target.href;\n    customrequest(method, url, params);\n  };\n\n  var customrequest = function customrequest(method, url, params) {\n    params = isJson(params) ? JSON.parse(params) : params;\n    var form = document.createElement('form');\n    form.setAttribute('method', method);\n    form.setAttribute('action', url);\n    for (var key in params) {\n      if (params.hasOwnProperty(key)) {\n        var hiddenField = document.createElement('input');\n        hiddenField.setAttribute('type', 'hidden');\n        hiddenField.setAttribute('name', key);\n        hiddenField.setAttribute('value', params[key]);\n\n        form.appendChild(hiddenField);\n      }\n    }\n    document.body.appendChild(form);\n    form.submit();\n  };\n\n  var isJson = function isJson(str) {\n    try {\n      JSON.parse(str);\n    } catch (e) {\n      return false;\n    }\n    return true;\n  };\n})();\n\n//# sourceURL=webpack:///./src/assets/source/js/cp.js?");

/***/ }),

/***/ "./src/assets/source/scss/cp.scss":
/*!****************************************!*\
  !*** ./src/assets/source/scss/cp.scss ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("module.exports = __webpack_require__.p + \"asset.cp.css\";\n\n//# sourceURL=webpack:///./src/assets/source/scss/cp.scss?");

/***/ }),

/***/ 0:
/*!***************************************************************************!*\
  !*** multi ./src/assets/source/js/cp.js ./src/assets/source/scss/cp.scss ***!
  \***************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("__webpack_require__(/*! ./src/assets/source/js/cp.js */\"./src/assets/source/js/cp.js\");\nmodule.exports = __webpack_require__(/*! ./src/assets/source/scss/cp.scss */\"./src/assets/source/scss/cp.scss\");\n\n\n//# sourceURL=webpack:///multi_./src/assets/source/js/cp.js_./src/assets/source/scss/cp.scss?");

/***/ })

/******/ });