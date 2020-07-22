define(["TYPO3/CMS/In2studyfinder/Utility/MiscUtility", "TYPO3/CMS/In2studyfinder/Utility/ArrayUtility", "TYPO3/CMS/In2studyfinder/Utility/UiUtility", "TYPO3/CMS/In2studyfinder/Utility/UrlUtility", "TYPO3/CMS/In2studyfinder/Utility/AjaxUtility"], function (e, s, a, c, t) {
  "use strict";
  var y = {
    identifiers: {
      in2studyfinderContainer: ".in2studyfinder",
      filterForm: ".js-in2studyfinder-filter",
      filterContainer: ".js-in2studyfinder-filter-options",
      filterFieldset: ".js-in2studyfinder-filter-section",
      filterLegend: ".js-in2studyfinder-filter-legend",
      filterCheckbox: ".in2studyfinder-js-checkbox",
      filterRadio: ".in2studyfinder-js-radio",
      filterCheckboxAll: ".in2studyfinder-js-checkbox-all",
      showFilterButton: ".js-in2studyfinder-filter-button-show",
      hideFilterButton: ".js-in2studyfinder-filter-button-reset",
      hideElement: ".u-in2studyfinder-hide",
      isHidden: ".is-hidden"
    }, filter: [], initialize: function () {
      document.querySelector(y.identifiers.filterForm) && (y.setEventListener(), y.prepareFilter())
    }, prepareFilter: function () {
      y.prepareCheckboxes();
      var e = c.getHashArgumentsFromUrl();
      if (0 < e.length && null === document.querySelector('[data-in2studyfinder-isAjax="1"]') && y.updateFilterByHashArguments(e), 0 < y.filter.length) {
        y.toggleFilterVisibility();
        for (var t = 0; t < y.filter.length; t++) {
          var i = document.querySelector('[data-filtergroup="' + y.filter[t] + '"]').querySelector(y.identifiers.filterContainer);
          a.toggleClassForElement(i, y.identifiers.isHidden.substr(1))
        }
      }
    }, prepareCheckboxes: function () {
      for (var e = document.querySelectorAll(y.identifiers.filterContainer), t = 0; t < e.length; t++) {
        if (y.isFilterSet(e[t])) {
          -1 === y.filter.indexOf(e[t].parentNode.getAttribute("data-filtergroup")) && y.filter.push(e[t].parentNode.getAttribute("data-filtergroup"));
          var i = e[t].querySelector(y.identifiers.filterCheckboxAll);
          i.checked = !1, i.disabled = !1
        }
      }
    }, updateFilterByHashArguments: function (e) {
      for (var t = 0; t < e.length; t++) {
        var i = 1;
        if ("page" === e[t].name) i = e[t].values[0]; else if (null !== document.querySelector('[data-filtergroup="' + e[t].name + '"]')) {
          for (var r = document.querySelector('[data-filtergroup="' + e[t].name + '"]'), n = r.querySelectorAll("input[type=checkbox],input[type=radio]"), l = !1, d = 0; d < n.length; d++) s.isInArray(n[d].value, e[t].values) && (l = n[d].checked = !0);
          l && (r.querySelector(y.identifiers.filterCheckboxAll).checked = !1)
        }
      }
      y.updateFilter(i)
    }, setEventListener: function () {
      document.querySelector(y.identifiers.hideFilterButton).addEventListener("click", y.resetAllFilter), document.querySelector(y.identifiers.showFilterButton).addEventListener("click", y.toggleFilterVisibility), y.setFilterVisibilityEventListener(), y.setFilterCheckboxEventListener()
    }, setFilterCheckboxEventListener: function () {
      document.querySelector(".c-in2studyfinder-filter__sections").addEventListener("click", function (e) {
        var t = e.target;
        if ("INPUT" === t.tagName) {
          if (t.classList.contains(y.identifiers.filterCheckboxAll.substr(1))) {
            var i = t.parentNode;
            y.resetFilter(i)
          }
          if (t.classList.contains(y.identifiers.filterCheckbox.substr(1)) || t.classList.contains(y.identifiers.filterRadio.substr(1))) {
            var r = t.parentNode.querySelector(y.identifiers.filterCheckboxAll);
            r.checked = !1, r.disabled = !1
          }
          y.updateFilter()
        }
      })
    }, resetAllFilter: function () {
      if (0 === y.filter.length) y.toggleFilterVisibility(); else {
        var e = document.querySelectorAll(y.identifiers.filterContainer);
        y.toggleFilterVisibility();
        for (var t = 0; t < e.length; t++) y.resetFilter(e[t]);
        y.updateFilter()
      }
    }, resetFilter: function (e) {
      var t = e.querySelector(y.identifiers.filterCheckboxAll), i = e.querySelectorAll(y.identifiers.filterCheckbox);
      t.checked = !0, t.disabled = !0;
      for (var r = 0; r < i.length; r++) i[r].checked = !1;
      var n = y.filter.indexOf(e.parentNode.getAttribute("data-filtergroup"));
      -1 !== n && y.filter.splice(n, 1)
    }, updateFilter: function (t) {
      var e = document.querySelector(y.identifiers.in2studyfinderContainer),
        i = document.querySelector(y.identifiers.filterForm), r = e.getAttribute("data-plugin-uid"),
        n = e.getAttribute("data-pid"), l = e.getAttribute("data-in2studyfinder-language"), d = "", s = "", o = "",
        u = "";
      void 0 === t && (t = 1), void 0 !== r && (d = "&ce=" + r), null != l && (s = "&L=" + l), void 0 !== t && (o = "&tx_in2studyfinder_pi1[@widget_0][currentPage]=" + t), u = null != n ? "/index.php?id=" + n + "&type=1308171055&studyFinderAjaxRequest=1" + d + s + o : "/?type=1308171055&studyFinderAjaxRequest=1" + d + s + o;
      var f = new XMLHttpRequest;
      f.onreadystatechange = function () {
        if (1 === this.readyState && a.enableLoader(), 4 === this.readyState && 200 === this.status) {
          y.setSelectedFilterToUrl(t);
          var e = document.createElement("div");
          e.innerHTML = f.responseText, document.querySelector(y.identifiers.in2studyfinderContainer).parentNode.replaceChild(e.querySelector(y.identifiers.in2studyfinderContainer), document.querySelector(y.identifiers.in2studyfinderContainer)), require("TYPO3/CMS/In2studyfinder/Frontend").initialize(), a.disableLoader()
        }
      }, f.open("POST", u, !0), f.setRequestHeader("Content-type", "application/x-www-form-urlencoded"), f.send(c.serialize(i))
    }, setSelectedFilterToUrl: function (e) {
      for (var t = "", i = document.querySelector(y.identifiers.filterForm).querySelectorAll(y.identifiers.filterFieldset), r = 0; r < i.length; r++) {
        var n = i[r].querySelectorAll(y.identifiers.filterCheckbox + ":checked, " + y.identifiers.filterRadio + ":checked");
        if (0 < n.length) {
          t += i[r].getAttribute("data-filtergroup") + "=";
          for (var l = 0; l < n.length; l++) t += n[l].value + "+";
          1 <= n.length && (t = t.substring(0, t.length - 1)), t += "&"
        }
      }
      e && (t += "page=" + e), window.location = location.protocol + "//" + location.host + location.pathname + (location.search ? location.search : "") + "#" + t
    }, setFilterVisibilityEventListener: function () {
      for (var e = document.querySelectorAll(y.identifiers.filterFieldset), t = 0; t < e.length; t++) e[t].querySelector(y.identifiers.filterLegend).addEventListener("click", function () {
        var e = this.parentNode.querySelector(y.identifiers.filterContainer);
        a.toggleClassForElement(e, y.identifiers.isHidden.substr(1))
      })
    }, toggleFilterVisibility: function () {
      for (var e = document.querySelectorAll(y.identifiers.filterFieldset), t = 0; t < e.length; t++) a.toggleClassForElement(e[t], y.identifiers.hideElement.substr(1));
      var i = document.querySelector(y.identifiers.showFilterButton),
        r = document.querySelector(y.identifiers.hideFilterButton);
      a.toggleClassForElement(i, y.identifiers.hideElement.substr(1)), a.toggleClassForElement(r, y.identifiers.hideElement.substr(1))
    }, isFilterSet: function (e) {
      for (var t = !1, i = e.querySelectorAll(y.identifiers.filterCheckbox + ", " + y.identifiers.filterRadio), r = 0; r < i.length; r++) i[r].checked && (t = !0);
      return t
    }
  };
  return y
});