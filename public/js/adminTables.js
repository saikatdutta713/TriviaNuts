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
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _regeneratorRuntime() { "use strict"; /*! regenerator-runtime -- Copyright (c) 2014-present, Facebook, Inc. -- license (MIT): https://github.com/facebook/regenerator/blob/main/LICENSE */ _regeneratorRuntime = function _regeneratorRuntime() { return e; }; var t, e = {}, r = Object.prototype, n = r.hasOwnProperty, o = Object.defineProperty || function (t, e, r) { t[e] = r.value; }, i = "function" == typeof Symbol ? Symbol : {}, a = i.iterator || "@@iterator", c = i.asyncIterator || "@@asyncIterator", u = i.toStringTag || "@@toStringTag"; function define(t, e, r) { return Object.defineProperty(t, e, { value: r, enumerable: !0, configurable: !0, writable: !0 }), t[e]; } try { define({}, ""); } catch (t) { define = function define(t, e, r) { return t[e] = r; }; } function wrap(t, e, r, n) { var i = e && e.prototype instanceof Generator ? e : Generator, a = Object.create(i.prototype), c = new Context(n || []); return o(a, "_invoke", { value: makeInvokeMethod(t, r, c) }), a; } function tryCatch(t, e, r) { try { return { type: "normal", arg: t.call(e, r) }; } catch (t) { return { type: "throw", arg: t }; } } e.wrap = wrap; var h = "suspendedStart", l = "suspendedYield", f = "executing", s = "completed", y = {}; function Generator() {} function GeneratorFunction() {} function GeneratorFunctionPrototype() {} var p = {}; define(p, a, function () { return this; }); var d = Object.getPrototypeOf, v = d && d(d(values([]))); v && v !== r && n.call(v, a) && (p = v); var g = GeneratorFunctionPrototype.prototype = Generator.prototype = Object.create(p); function defineIteratorMethods(t) { ["next", "throw", "return"].forEach(function (e) { define(t, e, function (t) { return this._invoke(e, t); }); }); } function AsyncIterator(t, e) { function invoke(r, o, i, a) { var c = tryCatch(t[r], t, o); if ("throw" !== c.type) { var u = c.arg, h = u.value; return h && "object" == _typeof(h) && n.call(h, "__await") ? e.resolve(h.__await).then(function (t) { invoke("next", t, i, a); }, function (t) { invoke("throw", t, i, a); }) : e.resolve(h).then(function (t) { u.value = t, i(u); }, function (t) { return invoke("throw", t, i, a); }); } a(c.arg); } var r; o(this, "_invoke", { value: function value(t, n) { function callInvokeWithMethodAndArg() { return new e(function (e, r) { invoke(t, n, e, r); }); } return r = r ? r.then(callInvokeWithMethodAndArg, callInvokeWithMethodAndArg) : callInvokeWithMethodAndArg(); } }); } function makeInvokeMethod(e, r, n) { var o = h; return function (i, a) { if (o === f) throw new Error("Generator is already running"); if (o === s) { if ("throw" === i) throw a; return { value: t, done: !0 }; } for (n.method = i, n.arg = a;;) { var c = n.delegate; if (c) { var u = maybeInvokeDelegate(c, n); if (u) { if (u === y) continue; return u; } } if ("next" === n.method) n.sent = n._sent = n.arg;else if ("throw" === n.method) { if (o === h) throw o = s, n.arg; n.dispatchException(n.arg); } else "return" === n.method && n.abrupt("return", n.arg); o = f; var p = tryCatch(e, r, n); if ("normal" === p.type) { if (o = n.done ? s : l, p.arg === y) continue; return { value: p.arg, done: n.done }; } "throw" === p.type && (o = s, n.method = "throw", n.arg = p.arg); } }; } function maybeInvokeDelegate(e, r) { var n = r.method, o = e.iterator[n]; if (o === t) return r.delegate = null, "throw" === n && e.iterator["return"] && (r.method = "return", r.arg = t, maybeInvokeDelegate(e, r), "throw" === r.method) || "return" !== n && (r.method = "throw", r.arg = new TypeError("The iterator does not provide a '" + n + "' method")), y; var i = tryCatch(o, e.iterator, r.arg); if ("throw" === i.type) return r.method = "throw", r.arg = i.arg, r.delegate = null, y; var a = i.arg; return a ? a.done ? (r[e.resultName] = a.value, r.next = e.nextLoc, "return" !== r.method && (r.method = "next", r.arg = t), r.delegate = null, y) : a : (r.method = "throw", r.arg = new TypeError("iterator result is not an object"), r.delegate = null, y); } function pushTryEntry(t) { var e = { tryLoc: t[0] }; 1 in t && (e.catchLoc = t[1]), 2 in t && (e.finallyLoc = t[2], e.afterLoc = t[3]), this.tryEntries.push(e); } function resetTryEntry(t) { var e = t.completion || {}; e.type = "normal", delete e.arg, t.completion = e; } function Context(t) { this.tryEntries = [{ tryLoc: "root" }], t.forEach(pushTryEntry, this), this.reset(!0); } function values(e) { if (e || "" === e) { var r = e[a]; if (r) return r.call(e); if ("function" == typeof e.next) return e; if (!isNaN(e.length)) { var o = -1, i = function next() { for (; ++o < e.length;) if (n.call(e, o)) return next.value = e[o], next.done = !1, next; return next.value = t, next.done = !0, next; }; return i.next = i; } } throw new TypeError(_typeof(e) + " is not iterable"); } return GeneratorFunction.prototype = GeneratorFunctionPrototype, o(g, "constructor", { value: GeneratorFunctionPrototype, configurable: !0 }), o(GeneratorFunctionPrototype, "constructor", { value: GeneratorFunction, configurable: !0 }), GeneratorFunction.displayName = define(GeneratorFunctionPrototype, u, "GeneratorFunction"), e.isGeneratorFunction = function (t) { var e = "function" == typeof t && t.constructor; return !!e && (e === GeneratorFunction || "GeneratorFunction" === (e.displayName || e.name)); }, e.mark = function (t) { return Object.setPrototypeOf ? Object.setPrototypeOf(t, GeneratorFunctionPrototype) : (t.__proto__ = GeneratorFunctionPrototype, define(t, u, "GeneratorFunction")), t.prototype = Object.create(g), t; }, e.awrap = function (t) { return { __await: t }; }, defineIteratorMethods(AsyncIterator.prototype), define(AsyncIterator.prototype, c, function () { return this; }), e.AsyncIterator = AsyncIterator, e.async = function (t, r, n, o, i) { void 0 === i && (i = Promise); var a = new AsyncIterator(wrap(t, r, n, o), i); return e.isGeneratorFunction(r) ? a : a.next().then(function (t) { return t.done ? t.value : a.next(); }); }, defineIteratorMethods(g), define(g, u, "Generator"), define(g, a, function () { return this; }), define(g, "toString", function () { return "[object Generator]"; }), e.keys = function (t) { var e = Object(t), r = []; for (var n in e) r.push(n); return r.reverse(), function next() { for (; r.length;) { var t = r.pop(); if (t in e) return next.value = t, next.done = !1, next; } return next.done = !0, next; }; }, e.values = values, Context.prototype = { constructor: Context, reset: function reset(e) { if (this.prev = 0, this.next = 0, this.sent = this._sent = t, this.done = !1, this.delegate = null, this.method = "next", this.arg = t, this.tryEntries.forEach(resetTryEntry), !e) for (var r in this) "t" === r.charAt(0) && n.call(this, r) && !isNaN(+r.slice(1)) && (this[r] = t); }, stop: function stop() { this.done = !0; var t = this.tryEntries[0].completion; if ("throw" === t.type) throw t.arg; return this.rval; }, dispatchException: function dispatchException(e) { if (this.done) throw e; var r = this; function handle(n, o) { return a.type = "throw", a.arg = e, r.next = n, o && (r.method = "next", r.arg = t), !!o; } for (var o = this.tryEntries.length - 1; o >= 0; --o) { var i = this.tryEntries[o], a = i.completion; if ("root" === i.tryLoc) return handle("end"); if (i.tryLoc <= this.prev) { var c = n.call(i, "catchLoc"), u = n.call(i, "finallyLoc"); if (c && u) { if (this.prev < i.catchLoc) return handle(i.catchLoc, !0); if (this.prev < i.finallyLoc) return handle(i.finallyLoc); } else if (c) { if (this.prev < i.catchLoc) return handle(i.catchLoc, !0); } else { if (!u) throw new Error("try statement without catch or finally"); if (this.prev < i.finallyLoc) return handle(i.finallyLoc); } } } }, abrupt: function abrupt(t, e) { for (var r = this.tryEntries.length - 1; r >= 0; --r) { var o = this.tryEntries[r]; if (o.tryLoc <= this.prev && n.call(o, "finallyLoc") && this.prev < o.finallyLoc) { var i = o; break; } } i && ("break" === t || "continue" === t) && i.tryLoc <= e && e <= i.finallyLoc && (i = null); var a = i ? i.completion : {}; return a.type = t, a.arg = e, i ? (this.method = "next", this.next = i.finallyLoc, y) : this.complete(a); }, complete: function complete(t, e) { if ("throw" === t.type) throw t.arg; return "break" === t.type || "continue" === t.type ? this.next = t.arg : "return" === t.type ? (this.rval = this.arg = t.arg, this.method = "return", this.next = "end") : "normal" === t.type && e && (this.next = e), y; }, finish: function finish(t) { for (var e = this.tryEntries.length - 1; e >= 0; --e) { var r = this.tryEntries[e]; if (r.finallyLoc === t) return this.complete(r.completion, r.afterLoc), resetTryEntry(r), y; } }, "catch": function _catch(t) { for (var e = this.tryEntries.length - 1; e >= 0; --e) { var r = this.tryEntries[e]; if (r.tryLoc === t) { var n = r.completion; if ("throw" === n.type) { var o = n.arg; resetTryEntry(r); } return o; } } throw new Error("illegal catch attempt"); }, delegateYield: function delegateYield(e, r, n) { return this.delegate = { iterator: values(e), resultName: r, nextLoc: n }, "next" === this.method && (this.arg = t), y; } }, e; }
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

// if(document.body.contains(document.getElementById('admin-dashboard'))){
/******/ })()
;