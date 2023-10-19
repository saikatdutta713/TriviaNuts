/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	// The require scope
/******/ 	var __webpack_require__ = {};
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
/*!*************************************!*\
  !*** ./resources/js/adminTables.js ***!
  \*************************************/
__webpack_require__.r(__webpack_exports__);
function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }
function _regeneratorRuntime() { "use strict"; /*! regenerator-runtime -- Copyright (c) 2014-present, Facebook, Inc. -- license (MIT): https://github.com/facebook/regenerator/blob/main/LICENSE */ _regeneratorRuntime = function _regeneratorRuntime() { return exports; }; var exports = {}, Op = Object.prototype, hasOwn = Op.hasOwnProperty, defineProperty = Object.defineProperty || function (obj, key, desc) { obj[key] = desc.value; }, $Symbol = "function" == typeof Symbol ? Symbol : {}, iteratorSymbol = $Symbol.iterator || "@@iterator", asyncIteratorSymbol = $Symbol.asyncIterator || "@@asyncIterator", toStringTagSymbol = $Symbol.toStringTag || "@@toStringTag"; function define(obj, key, value) { return Object.defineProperty(obj, key, { value: value, enumerable: !0, configurable: !0, writable: !0 }), obj[key]; } try { define({}, ""); } catch (err) { define = function define(obj, key, value) { return obj[key] = value; }; } function wrap(innerFn, outerFn, self, tryLocsList) { var protoGenerator = outerFn && outerFn.prototype instanceof Generator ? outerFn : Generator, generator = Object.create(protoGenerator.prototype), context = new Context(tryLocsList || []); return defineProperty(generator, "_invoke", { value: makeInvokeMethod(innerFn, self, context) }), generator; } function tryCatch(fn, obj, arg) { try { return { type: "normal", arg: fn.call(obj, arg) }; } catch (err) { return { type: "throw", arg: err }; } } exports.wrap = wrap; var ContinueSentinel = {}; function Generator() {} function GeneratorFunction() {} function GeneratorFunctionPrototype() {} var IteratorPrototype = {}; define(IteratorPrototype, iteratorSymbol, function () { return this; }); var getProto = Object.getPrototypeOf, NativeIteratorPrototype = getProto && getProto(getProto(values([]))); NativeIteratorPrototype && NativeIteratorPrototype !== Op && hasOwn.call(NativeIteratorPrototype, iteratorSymbol) && (IteratorPrototype = NativeIteratorPrototype); var Gp = GeneratorFunctionPrototype.prototype = Generator.prototype = Object.create(IteratorPrototype); function defineIteratorMethods(prototype) { ["next", "throw", "return"].forEach(function (method) { define(prototype, method, function (arg) { return this._invoke(method, arg); }); }); } function AsyncIterator(generator, PromiseImpl) { function invoke(method, arg, resolve, reject) { var record = tryCatch(generator[method], generator, arg); if ("throw" !== record.type) { var result = record.arg, value = result.value; return value && "object" == _typeof(value) && hasOwn.call(value, "__await") ? PromiseImpl.resolve(value.__await).then(function (value) { invoke("next", value, resolve, reject); }, function (err) { invoke("throw", err, resolve, reject); }) : PromiseImpl.resolve(value).then(function (unwrapped) { result.value = unwrapped, resolve(result); }, function (error) { return invoke("throw", error, resolve, reject); }); } reject(record.arg); } var previousPromise; defineProperty(this, "_invoke", { value: function value(method, arg) { function callInvokeWithMethodAndArg() { return new PromiseImpl(function (resolve, reject) { invoke(method, arg, resolve, reject); }); } return previousPromise = previousPromise ? previousPromise.then(callInvokeWithMethodAndArg, callInvokeWithMethodAndArg) : callInvokeWithMethodAndArg(); } }); } function makeInvokeMethod(innerFn, self, context) { var state = "suspendedStart"; return function (method, arg) { if ("executing" === state) throw new Error("Generator is already running"); if ("completed" === state) { if ("throw" === method) throw arg; return doneResult(); } for (context.method = method, context.arg = arg;;) { var delegate = context.delegate; if (delegate) { var delegateResult = maybeInvokeDelegate(delegate, context); if (delegateResult) { if (delegateResult === ContinueSentinel) continue; return delegateResult; } } if ("next" === context.method) context.sent = context._sent = context.arg;else if ("throw" === context.method) { if ("suspendedStart" === state) throw state = "completed", context.arg; context.dispatchException(context.arg); } else "return" === context.method && context.abrupt("return", context.arg); state = "executing"; var record = tryCatch(innerFn, self, context); if ("normal" === record.type) { if (state = context.done ? "completed" : "suspendedYield", record.arg === ContinueSentinel) continue; return { value: record.arg, done: context.done }; } "throw" === record.type && (state = "completed", context.method = "throw", context.arg = record.arg); } }; } function maybeInvokeDelegate(delegate, context) { var methodName = context.method, method = delegate.iterator[methodName]; if (undefined === method) return context.delegate = null, "throw" === methodName && delegate.iterator["return"] && (context.method = "return", context.arg = undefined, maybeInvokeDelegate(delegate, context), "throw" === context.method) || "return" !== methodName && (context.method = "throw", context.arg = new TypeError("The iterator does not provide a '" + methodName + "' method")), ContinueSentinel; var record = tryCatch(method, delegate.iterator, context.arg); if ("throw" === record.type) return context.method = "throw", context.arg = record.arg, context.delegate = null, ContinueSentinel; var info = record.arg; return info ? info.done ? (context[delegate.resultName] = info.value, context.next = delegate.nextLoc, "return" !== context.method && (context.method = "next", context.arg = undefined), context.delegate = null, ContinueSentinel) : info : (context.method = "throw", context.arg = new TypeError("iterator result is not an object"), context.delegate = null, ContinueSentinel); } function pushTryEntry(locs) { var entry = { tryLoc: locs[0] }; 1 in locs && (entry.catchLoc = locs[1]), 2 in locs && (entry.finallyLoc = locs[2], entry.afterLoc = locs[3]), this.tryEntries.push(entry); } function resetTryEntry(entry) { var record = entry.completion || {}; record.type = "normal", delete record.arg, entry.completion = record; } function Context(tryLocsList) { this.tryEntries = [{ tryLoc: "root" }], tryLocsList.forEach(pushTryEntry, this), this.reset(!0); } function values(iterable) { if (iterable) { var iteratorMethod = iterable[iteratorSymbol]; if (iteratorMethod) return iteratorMethod.call(iterable); if ("function" == typeof iterable.next) return iterable; if (!isNaN(iterable.length)) { var i = -1, next = function next() { for (; ++i < iterable.length;) if (hasOwn.call(iterable, i)) return next.value = iterable[i], next.done = !1, next; return next.value = undefined, next.done = !0, next; }; return next.next = next; } } return { next: doneResult }; } function doneResult() { return { value: undefined, done: !0 }; } return GeneratorFunction.prototype = GeneratorFunctionPrototype, defineProperty(Gp, "constructor", { value: GeneratorFunctionPrototype, configurable: !0 }), defineProperty(GeneratorFunctionPrototype, "constructor", { value: GeneratorFunction, configurable: !0 }), GeneratorFunction.displayName = define(GeneratorFunctionPrototype, toStringTagSymbol, "GeneratorFunction"), exports.isGeneratorFunction = function (genFun) { var ctor = "function" == typeof genFun && genFun.constructor; return !!ctor && (ctor === GeneratorFunction || "GeneratorFunction" === (ctor.displayName || ctor.name)); }, exports.mark = function (genFun) { return Object.setPrototypeOf ? Object.setPrototypeOf(genFun, GeneratorFunctionPrototype) : (genFun.__proto__ = GeneratorFunctionPrototype, define(genFun, toStringTagSymbol, "GeneratorFunction")), genFun.prototype = Object.create(Gp), genFun; }, exports.awrap = function (arg) { return { __await: arg }; }, defineIteratorMethods(AsyncIterator.prototype), define(AsyncIterator.prototype, asyncIteratorSymbol, function () { return this; }), exports.AsyncIterator = AsyncIterator, exports.async = function (innerFn, outerFn, self, tryLocsList, PromiseImpl) { void 0 === PromiseImpl && (PromiseImpl = Promise); var iter = new AsyncIterator(wrap(innerFn, outerFn, self, tryLocsList), PromiseImpl); return exports.isGeneratorFunction(outerFn) ? iter : iter.next().then(function (result) { return result.done ? result.value : iter.next(); }); }, defineIteratorMethods(Gp), define(Gp, toStringTagSymbol, "Generator"), define(Gp, iteratorSymbol, function () { return this; }), define(Gp, "toString", function () { return "[object Generator]"; }), exports.keys = function (val) { var object = Object(val), keys = []; for (var key in object) keys.push(key); return keys.reverse(), function next() { for (; keys.length;) { var key = keys.pop(); if (key in object) return next.value = key, next.done = !1, next; } return next.done = !0, next; }; }, exports.values = values, Context.prototype = { constructor: Context, reset: function reset(skipTempReset) { if (this.prev = 0, this.next = 0, this.sent = this._sent = undefined, this.done = !1, this.delegate = null, this.method = "next", this.arg = undefined, this.tryEntries.forEach(resetTryEntry), !skipTempReset) for (var name in this) "t" === name.charAt(0) && hasOwn.call(this, name) && !isNaN(+name.slice(1)) && (this[name] = undefined); }, stop: function stop() { this.done = !0; var rootRecord = this.tryEntries[0].completion; if ("throw" === rootRecord.type) throw rootRecord.arg; return this.rval; }, dispatchException: function dispatchException(exception) { if (this.done) throw exception; var context = this; function handle(loc, caught) { return record.type = "throw", record.arg = exception, context.next = loc, caught && (context.method = "next", context.arg = undefined), !!caught; } for (var i = this.tryEntries.length - 1; i >= 0; --i) { var entry = this.tryEntries[i], record = entry.completion; if ("root" === entry.tryLoc) return handle("end"); if (entry.tryLoc <= this.prev) { var hasCatch = hasOwn.call(entry, "catchLoc"), hasFinally = hasOwn.call(entry, "finallyLoc"); if (hasCatch && hasFinally) { if (this.prev < entry.catchLoc) return handle(entry.catchLoc, !0); if (this.prev < entry.finallyLoc) return handle(entry.finallyLoc); } else if (hasCatch) { if (this.prev < entry.catchLoc) return handle(entry.catchLoc, !0); } else { if (!hasFinally) throw new Error("try statement without catch or finally"); if (this.prev < entry.finallyLoc) return handle(entry.finallyLoc); } } } }, abrupt: function abrupt(type, arg) { for (var i = this.tryEntries.length - 1; i >= 0; --i) { var entry = this.tryEntries[i]; if (entry.tryLoc <= this.prev && hasOwn.call(entry, "finallyLoc") && this.prev < entry.finallyLoc) { var finallyEntry = entry; break; } } finallyEntry && ("break" === type || "continue" === type) && finallyEntry.tryLoc <= arg && arg <= finallyEntry.finallyLoc && (finallyEntry = null); var record = finallyEntry ? finallyEntry.completion : {}; return record.type = type, record.arg = arg, finallyEntry ? (this.method = "next", this.next = finallyEntry.finallyLoc, ContinueSentinel) : this.complete(record); }, complete: function complete(record, afterLoc) { if ("throw" === record.type) throw record.arg; return "break" === record.type || "continue" === record.type ? this.next = record.arg : "return" === record.type ? (this.rval = this.arg = record.arg, this.method = "return", this.next = "end") : "normal" === record.type && afterLoc && (this.next = afterLoc), ContinueSentinel; }, finish: function finish(finallyLoc) { for (var i = this.tryEntries.length - 1; i >= 0; --i) { var entry = this.tryEntries[i]; if (entry.finallyLoc === finallyLoc) return this.complete(entry.completion, entry.afterLoc), resetTryEntry(entry), ContinueSentinel; } }, "catch": function _catch(tryLoc) { for (var i = this.tryEntries.length - 1; i >= 0; --i) { var entry = this.tryEntries[i]; if (entry.tryLoc === tryLoc) { var record = entry.completion; if ("throw" === record.type) { var thrown = record.arg; resetTryEntry(entry); } return thrown; } } throw new Error("illegal catch attempt"); }, delegateYield: function delegateYield(iterable, resultName, nextLoc) { return this.delegate = { iterator: values(iterable), resultName: resultName, nextLoc: nextLoc }, "next" === this.method && (this.arg = undefined), ContinueSentinel; } }, exports; }
function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }
function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }
// User Management
var user_management_table = document.getElementById("user_management_table");
if (user_management_table) {
  var loadUsers = /*#__PURE__*/function () {
    var _ref = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee() {
      var tableLength,
        query,
        url,
        response,
        data,
        users,
        row,
        hint__text,
        user__table__pagination,
        pageLinks,
        length,
        _args = arguments;
      return _regeneratorRuntime().wrap(function _callee$(_context) {
        while (1) switch (_context.prev = _context.next) {
          case 0:
            tableLength = _args.length > 0 && _args[0] !== undefined ? _args[0] : 5;
            query = _args.length > 1 && _args[1] !== undefined ? _args[1] : undefined;
            url = _args.length > 2 && _args[2] !== undefined ? _args[2] : "/api/get/users/".concat(tableLength);
            _context.prev = 3;
            user_management_table.innerHTML = "";
            if (query) {
              url = "/api/get/users/".concat(tableLength, "/").concat(query);
            }
            _context.next = 8;
            return fetch(url);
          case 8:
            response = _context.sent;
            _context.next = 11;
            return response.json();
          case 11:
            data = _context.sent;
            if (data.total > 0) {
              users = data.data;
              users.forEach(function (user) {
                var row = document.createElement("tr");
                row.innerHTML = "\n                        <td>".concat(user.user_id, "</td>\n                        <td>\n                        <div class=\"avatar-container\">\n                        <img src=\"").concat(window.location.origin + "/images/avatar.png", "\" alt=\"\" />\n                        </div>\n                        </td>\n                        <td>").concat(user.name, "</td>\n                        <td>").concat(user.email, "</td>\n                        <td>").concat(user.role_name, "</td>\n                        <td>").concat(user.active ? "Active" : "Inactive", "</td>\n                        <td>").concat(user.last_login_location, "</td>\n                        <td>").concat(user.last_login, "</td>\n                        <td>\n                            <span>\n                                <a title=\"Edit\" class=\"editButton\"\n                                    href=\"/admin/user/edit/").concat(user.user_id, "\">\n                                    <i class=\"fa fa-pen\"></i>\n                                </a>\n                                    <a title=\"Delete\" href=\"/admin/user/delete/attempt/").concat(user.user_id, "\">\n                                        <i class=\"fa fa-trash\"></i>\n                                    </a>\n                            </span>\n                        </td>\n                    ");
                user_management_table.appendChild(row);
              });
            } else {
              row = document.createElement("tr");
              row.innerHTML = "<td colspan=\"9\" style=\"text-align: center;\">No records found</td>";
              user_management_table.appendChild(row);
            }

            // Hint Text
            hint__text = document.getElementById("user__hint__text");
            hint__text.childNodes[1].innerHTML = tableLength;
            hint__text.childNodes[3].innerHTML = data.total;

            // pagination
            user__table__pagination = document.getElementById("user__table__pagination");
            user__table__pagination.innerHTML = "";
            pageLinks = data.links;
            pageLinks.forEach(function (link) {
              var li = document.createElement("li");
              li.innerHTML = "<span>".concat(link.label, "</span>");
              li.classList.add("page__link");
              link.active ? li.classList.add("active") : null;
              user__table__pagination.appendChild(li);

              // Load users on click pagination link
              li.addEventListener("click", function (ev) {
                loadUsers(user__table__length.value, undefined, link.url);
              });
            });
            user__table__pagination.childNodes[0].childNodes[0].classList.add("prev");
            length = user__table__pagination.childNodes.length;
            user__table__pagination.childNodes[length - 1].childNodes[0].classList.add("next");
            data.prev_page_url === null ? user__table__pagination.childNodes[0].style.display = "none" : null;
            data.next_page_url === null ? document.querySelector(".next").style.display = "none" : null;
            _context.next = 30;
            break;
          case 27:
            _context.prev = 27;
            _context.t0 = _context["catch"](3);
            console.error("Error:", _context.t0);
          case 30:
          case "end":
            return _context.stop();
        }
      }, _callee, null, [[3, 27]]);
    }));
    return function loadUsers() {
      return _ref.apply(this, arguments);
    };
  }();

  // load users on page load
  document.addEventListener("DOMContentLoaded", function () {
    loadUsers();
  });

  // Handle user table length
  var user__table__length = document.getElementById("user__table__length");
  user__table__length.addEventListener("change", function (ev) {
    loadUsers(user__table__length.value, userDataSearchForm.value);
  });

  // User data search
  var userDataSearchForm = document.getElementById("user__data__search");
  var apiCallTimer;
  var apiCallDelay = 1000;
  userDataSearchForm.addEventListener("keyup", function (ev) {
    ev.preventDefault();
    clearTimeout(apiCallTimer);
    var searchQuery = userDataSearchForm.value;
    apiCallTimer = setTimeout(function () {
      loadUsers(user__table__length.value, searchQuery);
    }, apiCallDelay);
  });
}

// Question Management
var question_management_table = document.getElementById("question_management_table");
if (question_management_table) {
  var loadQuestions = /*#__PURE__*/function () {
    var _ref2 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee2() {
      var tableLength,
        query,
        url,
        response,
        data,
        questions,
        row,
        hint__text,
        question__table__pagination,
        pageLinks,
        length,
        _args2 = arguments;
      return _regeneratorRuntime().wrap(function _callee2$(_context2) {
        while (1) switch (_context2.prev = _context2.next) {
          case 0:
            tableLength = _args2.length > 0 && _args2[0] !== undefined ? _args2[0] : 5;
            query = _args2.length > 1 && _args2[1] !== undefined ? _args2[1] : undefined;
            url = _args2.length > 2 && _args2[2] !== undefined ? _args2[2] : "/api/get/questions/".concat(tableLength);
            _context2.prev = 3;
            question_management_table.innerHTML = "";
            if (query) {
              url = "/api/get/questions/".concat(tableLength, "/").concat(query);
            }
            _context2.next = 8;
            return fetch(url);
          case 8:
            response = _context2.sent;
            _context2.next = 11;
            return response.json();
          case 11:
            data = _context2.sent;
            if (data.total > 0) {
              questions = data.data;
              questions.forEach(function (question, index) {
                var row = document.createElement("tr");
                row.innerHTML = "\n                    <td>".concat(index + 1, "</td>\n                    <td>").concat(question.question_id, "</td>\n                    <td>").concat(question.category_title, "</td>\n                    <td>").concat(question.question_text, "</td>\n                    <td>").concat(question.answer_option_a, " ").concat(question.answer_option_b, " \n                    ").concat(question.answer_option_c, " ").concat(question.answer_option_a, "</td>\n                    <td>").concat(question.correct_option, "</td>\n                    <td>").concat(question.correct_option, "</td>\n                    <td>\n                        <span>\n                            <a title=\"Edit\" class=\"editButton\"\n                                href=\"/admin/question/edit/").concat(question.question_id, "\"><i class=\"fa fa-pen\"></i>\n                            </a>\n                            <a title=\"Delete\" href=\"/admin/question/delete/attempt/\n                            ").concat(question.question_id, "\">\n                                <i class=\"fa fa-trash\"></i>\n                            </a>\n                        </span>\n                    </td>\n                ");
                question_management_table.appendChild(row);
              });
            } else {
              row = document.createElement("tr");
              row.innerHTML = "<td colspan=\"8\" style=\"text-align: center;\">No records found</td>";
              question_management_table.appendChild(row);
            }

            // Hint Text
            hint__text = document.getElementById("question__hint__text");
            hint__text.childNodes[1].innerHTML = tableLength;
            hint__text.childNodes[3].innerHTML = data.total;

            // pagination
            question__table__pagination = document.getElementById("question__table__pagination");
            question__table__pagination.innerHTML = "";
            pageLinks = data.links;
            pageLinks.forEach(function (link) {
              var li = document.createElement("li");
              li.innerHTML = "<span>".concat(link.label, "</span>");
              li.classList.add("page__link");
              link.active ? li.classList.add("active") : null;
              question__table__pagination.appendChild(li);

              // Load questions on click pagination link
              li.addEventListener("click", function (ev) {
                loadQuestions(question__table__length.value, undefined, link.url);
              });
            });
            question__table__pagination.childNodes[0].childNodes[0].classList.add("prev");
            length = question__table__pagination.childNodes.length;
            question__table__pagination.childNodes[length - 1].childNodes[0].classList.add("next");
            data.prev_page_url === null ? question__table__pagination.childNodes[0].style.display = "none" : null;
            data.next_page_url === null ? document.querySelector(".next").style.display = "none" : null;
            _context2.next = 30;
            break;
          case 27:
            _context2.prev = 27;
            _context2.t0 = _context2["catch"](3);
            console.error("Error:", _context2.t0);
          case 30:
          case "end":
            return _context2.stop();
        }
      }, _callee2, null, [[3, 27]]);
    }));
    return function loadQuestions() {
      return _ref2.apply(this, arguments);
    };
  }();
  // load questions on page load
  document.addEventListener("DOMContentLoaded", function () {
    loadQuestions();
  });

  // Handle question table length
  var question__table__length = document.getElementById("question__table__length");
  question__table__length.addEventListener("change", function (ev) {
    loadQuestions(question__table__length.value, questionDataSearchForm.value);
  });

  // Question data search
  var questionDataSearchForm = document.getElementById("question__data__search");
  var _apiCallTimer;
  var _apiCallDelay = 1000;
  questionDataSearchForm.addEventListener("keyup", function (ev) {
    ev.preventDefault();
    clearTimeout(_apiCallTimer);
    var searchQuery = questionDataSearchForm.value;
    _apiCallTimer = setTimeout(function () {
      loadQuestions(question__table__length.value, searchQuery);
    }, _apiCallDelay);
  });
}

// quiz Management
var quiz_management_table = document.getElementById("quiz_management_table");
if (quiz_management_table) {
  var loadquizzes = /*#__PURE__*/function () {
    var _ref3 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee3() {
      var tableLength,
        query,
        url,
        response,
        data,
        quizzes,
        row,
        hint__text,
        quiz__table__pagination,
        pageLinks,
        length,
        _args3 = arguments;
      return _regeneratorRuntime().wrap(function _callee3$(_context3) {
        while (1) switch (_context3.prev = _context3.next) {
          case 0:
            tableLength = _args3.length > 0 && _args3[0] !== undefined ? _args3[0] : 5;
            query = _args3.length > 1 && _args3[1] !== undefined ? _args3[1] : undefined;
            url = _args3.length > 2 && _args3[2] !== undefined ? _args3[2] : "/api/get/quizzes/".concat(tableLength);
            _context3.prev = 3;
            quiz_management_table.innerHTML = "";
            if (query) {
              url = "/api/get/quizzes/".concat(tableLength, "/").concat(query);
            }
            _context3.next = 8;
            return fetch(url);
          case 8:
            response = _context3.sent;
            _context3.next = 11;
            return response.json();
          case 11:
            data = _context3.sent;
            if (data.total > 0) {
              quizzes = data.data;
              quizzes.forEach(function (quiz, index) {
                var row = document.createElement("tr");
                row.innerHTML = "\n                    <td>".concat(index + 1, "</td>\n                    <td>").concat(quiz.quiz_id, "</td>\n                    <td>").concat(quiz.category_title, "</td>\n                    <td>").concat(quiz.title, "</td>\n                    <td>").concat(quiz.status, "</td>\n                    <td>").concat(quiz.questions, "</td>\n                    <td>").concat(quiz.time, "</td>\n                    <td>\n                        <span>\n                            <a title=\"Edit\" class=\"editButton\"\n                                href=\"/admin/quiz/edit/").concat(quiz.quiz_id, "\"><i class=\"fa fa-pen\"></i>\n                            </a>\n                            <a title=\"Delete\" href=\"/admin/quiz/delete/attempt/").concat(quiz.quiz_id, "\">\n                                <i class=\"fa fa-trash\"></i>\n                            </a>\n                        </span>\n                    </td>\n                ");
                quiz_management_table.appendChild(row);
              });
            } else {
              row = document.createElement("tr");
              row.innerHTML = "<td colspan=\"8\" style=\"text-align: center;\">No records found</td>";
              quiz_management_table.appendChild(row);
            }

            // Hint Text
            hint__text = document.getElementById("quiz__hint__text");
            hint__text.childNodes[1].innerHTML = tableLength;
            hint__text.childNodes[3].innerHTML = data.total;

            // pagination
            quiz__table__pagination = document.getElementById("quiz__table__pagination");
            quiz__table__pagination.innerHTML = "";
            pageLinks = data.links;
            pageLinks.forEach(function (link) {
              var li = document.createElement("li");
              li.innerHTML = "<span>".concat(link.label, "</span>");
              li.classList.add("page__link");
              link.active ? li.classList.add("active") : null;
              quiz__table__pagination.appendChild(li);

              // Load quizzes on click pagination link
              li.addEventListener("click", function (ev) {
                loadquizzes(quiz__table__length.value, undefined, link.url);
              });
            });
            quiz__table__pagination.childNodes[0].childNodes[0].classList.add("prev");
            length = quiz__table__pagination.childNodes.length;
            quiz__table__pagination.childNodes[length - 1].childNodes[0].classList.add("next");
            data.prev_page_url === null ? quiz__table__pagination.childNodes[0].style.display = "none" : null;
            data.next_page_url === null ? document.querySelector(".next").style.display = "none" : null;
            _context3.next = 30;
            break;
          case 27:
            _context3.prev = 27;
            _context3.t0 = _context3["catch"](3);
            console.error("Error:", _context3.t0);
          case 30:
          case "end":
            return _context3.stop();
        }
      }, _callee3, null, [[3, 27]]);
    }));
    return function loadquizzes() {
      return _ref3.apply(this, arguments);
    };
  }();
  // load quizzes on page load
  document.addEventListener("DOMContentLoaded", function () {
    loadquizzes();
  });

  // Handle quiz table length
  var quiz__table__length = document.getElementById("quiz__table__length");
  quiz__table__length.addEventListener("change", function (ev) {
    loadquizzes(quiz__table__length.value, quizDataSearchForm.value);
  });

  // quiz data search
  var quizDataSearchForm = document.getElementById("quiz__data__search");
  var _apiCallTimer2;
  var _apiCallDelay2 = 1000;
  quizDataSearchForm.addEventListener("keyup", function (ev) {
    ev.preventDefault();
    clearTimeout(_apiCallTimer2);
    var searchQuery = quizDataSearchForm.value;
    _apiCallTimer2 = setTimeout(function () {
      loadquizzes(quiz__table__length.value, searchQuery);
    }, _apiCallDelay2);
  });
}
/******/ })()
;