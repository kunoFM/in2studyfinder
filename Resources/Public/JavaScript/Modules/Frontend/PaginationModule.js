define(["TYPO3/CMS/In2studyfinder/Utility/UrlUtility","TYPO3/CMS/In2studyfinder/Utility/AjaxUtility","TYPO3/CMS/In2studyfinder/Utility/UiUtility","TYPO3/CMS/In2studyfinder/Modules/Frontend/FilterModule"],function(n,i,e,r){"use strict";var t={identifiers:{in2studyfinderContainer:".in2studyfinder",paginationLink:".js-get-by-ajax",paginationContainer:".js-in2studyfinder-pagebrowser",loader:".in2studyfinder-loader",loaderActive:".in2studyfinder-loader--active"},initialize:function(){null!==document.querySelector(t.identifiers.paginationContainer)&&document.querySelector(t.identifiers.paginationContainer).addEventListener("click",t.callPagination)},callPagination:function(i){i.preventDefault();var e=1,t=i.target.href;""!==n.getParameterFromUrl(t,"tx_in2studyfinder_pi1[@widget_0][currentPage]")&&(e=n.getParameterFromUrl(t,"tx_in2studyfinder_pi1[@widget_0][currentPage]")),n.addOrUpdateHash("page",[e]),r.updateFilter(e)}};return t});