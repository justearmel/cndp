"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_components_Admin_Homepage_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/Admin/Homepage.vue?vue&type=script&lang=js":
/*!********************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/Admin/Homepage.vue?vue&type=script&lang=js ***!
  \********************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm-bundler.js");
/* harmony import */ var _composables_sessions__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../composables/sessions */ "./resources/js/composables/sessions.js");
/* harmony import */ var _Menus_Sidebar_vue__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./Menus/Sidebar.vue */ "./resources/js/components/Admin/Menus/Sidebar.vue");
/* harmony import */ var _Headers_Header_vue__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./Headers/Header.vue */ "./resources/js/components/Admin/Headers/Header.vue");
/* harmony import */ var _Searchs_Searchbar_vue__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./Searchs/Searchbar.vue */ "./resources/js/components/Admin/Searchs/Searchbar.vue");





/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  setup: function setup() {
    //   const { libellesesion,getallsessionschoosen,getallsessions ,thesessions} = useSessions();
    //      onMounted(getallsessionschoosen);
    //      onMounted(getallsessions);
    console.log('nous sommes au niveau de la homepage');
    return {//  libellesesion,
      // getallsessionschoosen,
      // thesessions,getallsessions
    };
  },
  components: {
    Menu: _Menus_Sidebar_vue__WEBPACK_IMPORTED_MODULE_2__["default"],
    Header: _Headers_Header_vue__WEBPACK_IMPORTED_MODULE_3__["default"],
    SearchStudentbar: _Searchs_Searchbar_vue__WEBPACK_IMPORTED_MODULE_4__["default"]
  },
  mounted: function mounted() {
    console.log('ceci est la page de selection de session');
    this.setUsername(); // this.reduction(this.thesessions);
  },
  data: function data() {
    return {
      isModalVisible: false,
      Username: "",
      UserSession: ""
    };
  },
  methods: {
    showModal: function showModal() {
      this.isModalVisible = !this.isModalVisible;
    },
    setUsername: function setUsername() {
      //nous verifions si l'utilsateur est bien connecté sinon nous le renvoyons sur la page de connexion
      if (localStorage.getItem("UserData") === null) {
        this.$router.push("/");
      } else {
        var UsernameData = localStorage.getItem("UserName");
        this.Username = UsernameData; //   console.log(UsernameData);
      }
    },
    choisirsession: function choisirsession(sessionEtab) {
      localStorage.setItem("UserSessionchoose", sessionEtab);
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/Admin/Homepage.vue?vue&type=template&id=50562ef9":
/*!************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/Admin/Homepage.vue?vue&type=template&id=50562ef9 ***!
  \************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render)
/* harmony export */ });
/* harmony import */ var vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm-bundler.js");

var _hoisted_1 = {
  "class": "nk-body bg-lighter npc-default has-sidebar"
};
var _hoisted_2 = {
  "class": "nk-app-root"
};
var _hoisted_3 = {
  "class": "nk-main"
};
var _hoisted_4 = {
  "class": "nk-sidebar nk-sidebar-fixed is-light",
  "data-content": "sidebarMenu"
};

var _hoisted_5 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createStaticVNode)("<div class=\"nk-sidebar-element nk-sidebar-head\"><div class=\"nk-sidebar-brand\"><a href=\"html/index.html\" class=\"logo-link nk-sidebar-logo\"><!-- &lt;img class=&quot;logo-light logo-img&quot; src=&quot;/assets/images/logo1.png&quot; srcset=&quot;/assets/images/logo1.png&quot; alt=&quot;logo&quot;&gt; --><img class=\"logo-dark logo-img\" src=\"/assets/images/logo1.png\" srcset=\"/assets/images/logo1.png\" style=\"width:100%;\" alt=\"logo-dark\"><!-- &lt;img class=&quot;logo-small logo-img logo-img-small&quot; src=&quot;/assets/images/logo1.png&quot; srcset=&quot;/assets/images/logo1.png 2x&quot; alt=&quot;logo-small&quot;&gt; --></a></div><div class=\"nk-menu-trigger me-n2\"><a href=\"#\" class=\"nk-nav-toggle nk-quick-nav-icon d-xl-none\" data-target=\"sidebarMenu\"><em class=\"icon ni ni-arrow-left\"></em></a><a href=\"#\" class=\"nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex\" data-target=\"sidebarMenu\"><em class=\"icon ni ni-menu\"></em></a></div></div>", 1);

var _hoisted_6 = {
  "class": "nk-wrap"
};
var _hoisted_7 = {
  "class": "nk-content"
};
var _hoisted_8 = {
  "class": "container-fluid"
};

var _hoisted_9 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createStaticVNode)("<div class=\"nk-block\"><div class=\"row g-gs\"><div class=\"col-xxl-3 col-sm-3\"><div class=\"card\"><div class=\"nk-ecwg nk-ecwg6\"><div class=\"card-inner\"><div class=\"card-title-group\"><div class=\"card-title\"><h6 class=\"title\"><em class=\"icon ni ni-user-alt\"></em> Elèves</h6></div></div><div class=\"data\"><div class=\"data-group\"><div class=\"amount\">1,945</div><div class=\"nk-ecwg6-ck\"><div class=\"chartjs-size-monitor\"><div class=\"chartjs-size-monitor-expand\"><div class=\"\"></div></div><div class=\"chartjs-size-monitor-shrink\"><div class=\"\"></div></div></div></div></div></div></div><!-- .card-inner --></div><!-- .nk-ecwg --></div><!-- .card --></div><!-- .col --><div class=\"col-xxl-3 col-sm-3\"><div class=\"card\"><div class=\"nk-ecwg nk-ecwg6\"><div class=\"card-inner\"><div class=\"card-title-group\"><div class=\"card-title\"><h6 class=\"title\"><em class=\"icon ni ni-user-alt\"></em> Enseignants</h6></div></div><div class=\"data\"><div class=\"data-group\"><div class=\"amount\">$2,338</div><div class=\"nk-ecwg6-ck\"><div class=\"chartjs-size-monitor\"><div class=\"chartjs-size-monitor-expand\"><div class=\"\"></div></div><div class=\"chartjs-size-monitor-shrink\"><div class=\"\"></div></div></div></div></div></div></div><!-- .card-inner --></div><!-- .nk-ecwg --></div><!-- .card --></div><!-- .col --><div class=\"col-xxl-3 col-sm-3\"><div class=\"card\"><div class=\"nk-ecwg nk-ecwg6\"><div class=\"card-inner\"><div class=\"card-title-group\"><div class=\"card-title\"><h6 class=\"title\"><em class=\"icon ni ni-user-alt\"></em> Parents</h6></div></div><div class=\"data\"><div class=\"data-group\"><div class=\"amount\">847</div><div class=\"nk-ecwg6-ck\"><div class=\"chartjs-size-monitor\"><div class=\"chartjs-size-monitor-expand\"><div class=\"\"></div></div><div class=\"chartjs-size-monitor-shrink\"><div class=\"\"></div></div></div></div></div></div></div><!-- .card-inner --></div><!-- .nk-ecwg --></div><!-- .card --></div><!-- .col --><div class=\"col-xxl-3 col-sm-3\"><div class=\"card\"><div class=\"nk-ecwg nk-ecwg6\"><div class=\"card-inner\"><div class=\"card-title-group\"><div class=\"card-title\"><h6 class=\"title\"><em class=\"icon ni ni-building\"></em> Classes</h6></div></div><div class=\"data\"><div class=\"data-group\"><div class=\"amount\">23,485</div><div class=\"nk-ecwg6-ck\"><div class=\"chartjs-size-monitor\"><div class=\"chartjs-size-monitor-expand\"><div class=\"\"></div></div><div class=\"chartjs-size-monitor-shrink\"><div class=\"\"></div></div></div></div></div></div></div><!-- .card-inner --></div><!-- .nk-ecwg --></div><!-- .card --></div><!-- .col --><div class=\"col-xxl-3 col-sm-3\"><div class=\"card\"><div class=\"nk-ecwg nk-ecwg6\"><div class=\"card-inner\"><div class=\"card-title-group\"><div class=\"card-title\"><h6 class=\"title\"><em class=\"icon ni ni-comments\"></em> Messages</h6></div></div><div class=\"data\"><div class=\"data-group\"><div class=\"amount\">23,485</div><div class=\"nk-ecwg6-ck\"><div class=\"chartjs-size-monitor\"><div class=\"chartjs-size-monitor-expand\"><div class=\"\"></div></div><div class=\"chartjs-size-monitor-shrink\"><div class=\"\"></div></div></div></div></div></div></div><!-- .card-inner --></div><!-- .nk-ecwg --></div><!-- .card --></div><!-- .col --></div></div>", 1);

function render(_ctx, _cache, $props, $setup, $data, $options) {
  var _component_Menu = (0,vue__WEBPACK_IMPORTED_MODULE_0__.resolveComponent)("Menu");

  var _component_Header = (0,vue__WEBPACK_IMPORTED_MODULE_0__.resolveComponent)("Header");

  var _component_SearchStudentbar = (0,vue__WEBPACK_IMPORTED_MODULE_0__.resolveComponent)("SearchStudentbar");

  return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", _hoisted_1, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_2, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" main @s "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_3, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" sidebar @s "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_4, [_hoisted_5, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" .nk-sidebar-element "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" debut le menu "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)(_component_Menu), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" fin le menu ")]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" sidebar @e "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" wrap @s "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_6, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" main header @s "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" debut Header "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)(_component_Header), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" fin Header "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" main header @e "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" content @s "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_7, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_8, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" debut barre de recherche "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)(_component_SearchStudentbar), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" fin barre de recherche "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" ici le corps "), _hoisted_9])]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" content @e "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" footer @s "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" footer @e ")]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" wrap @e ")]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" main @e ")])]);
}

/***/ }),

/***/ "./resources/js/components/Admin/Homepage.vue":
/*!****************************************************!*\
  !*** ./resources/js/components/Admin/Homepage.vue ***!
  \****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Homepage_vue_vue_type_template_id_50562ef9__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Homepage.vue?vue&type=template&id=50562ef9 */ "./resources/js/components/Admin/Homepage.vue?vue&type=template&id=50562ef9");
/* harmony import */ var _Homepage_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Homepage.vue?vue&type=script&lang=js */ "./resources/js/components/Admin/Homepage.vue?vue&type=script&lang=js");
/* harmony import */ var _Users_macbookpro1_Desktop_Projets_cndp_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./node_modules/vue-loader/dist/exportHelper.js */ "./node_modules/vue-loader/dist/exportHelper.js");




;
const __exports__ = /*#__PURE__*/(0,_Users_macbookpro1_Desktop_Projets_cndp_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__["default"])(_Homepage_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_1__["default"], [['render',_Homepage_vue_vue_type_template_id_50562ef9__WEBPACK_IMPORTED_MODULE_0__.render],['__file',"resources/js/components/Admin/Homepage.vue"]])
/* hot reload */
if (false) {}


/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (__exports__);

/***/ }),

/***/ "./resources/js/components/Admin/Homepage.vue?vue&type=script&lang=js":
/*!****************************************************************************!*\
  !*** ./resources/js/components/Admin/Homepage.vue?vue&type=script&lang=js ***!
  \****************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Homepage_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__["default"])
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Homepage_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./Homepage.vue?vue&type=script&lang=js */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/Admin/Homepage.vue?vue&type=script&lang=js");
 

/***/ }),

/***/ "./resources/js/components/Admin/Homepage.vue?vue&type=template&id=50562ef9":
/*!**********************************************************************************!*\
  !*** ./resources/js/components/Admin/Homepage.vue?vue&type=template&id=50562ef9 ***!
  \**********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Homepage_vue_vue_type_template_id_50562ef9__WEBPACK_IMPORTED_MODULE_0__.render)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Homepage_vue_vue_type_template_id_50562ef9__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./Homepage.vue?vue&type=template&id=50562ef9 */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/Admin/Homepage.vue?vue&type=template&id=50562ef9");


/***/ })

}]);