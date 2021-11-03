(function (factory) {
  if (typeof define === 'function' && define.amd) {
    define(['jquery', 'resources/assets/front/theme-luiza/bower_components/modernizr/modernizr'], factory);
  } else if (typeof exports === 'object') {
    module.exports = factory(require('jquery'), window.Modernizr);
  } else {
    window.Shuffle = factory(window.jQuery, window.Modernizr);
  }
})(function($, Modernizr, undefined) {

'use strict';
