import {UiUtility} from './Utility';

import {paginationModule, filterModule, selectModule} from "./Modules";

class Frontend {

  constructor() {
    this.identifiers = {
      in2studyfinderContainer: '.in2studyfinder'
    }
  }

  initialize() {
    let in2studyfinderContainer = document.querySelector(this.identifiers.in2studyfinderContainer);
    if (in2studyfinderContainer !== null) {

      UiUtility.removeClass(in2studyfinderContainer, 'no-js');
      UiUtility.addClass(in2studyfinderContainer, 'js');

      filterModule.initialize();
      selectModule.initialize();

      paginationModule.initialize();
    }
  };
}

export let frontend = new Frontend();
