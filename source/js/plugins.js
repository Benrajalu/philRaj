/*global $:false */
/*global Modernizr:false */
/*global console:false */
/*global confirm:false */
'use strict';

// Avoid `console` errors in browsers that lack a console.
if (!(window.console && console.log)) {
    (function() {
        var noop = function() {};
        var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'markTimeline', 'table', 'time', 'timeEnd', 'timeStamp', 'trace', 'warn'];
        var length = methods.length;
        var console = window.console = {};
        while (length--) {
            console[methods[length]] = noop;
        }
    }());
}


$(window).load(function () {
  // Marking menu as active
    var activeMenu = function(){
      var menu = $('#mainNav'),
          activeEntry = $(menu).find('.active'),
          scale = $(menu).find('ul');

      $(scale).append('<li class="activeMark"></li>');

      var mark = $(scale).find('.activeMark');
      
      if(activeEntry.position()){
        $(mark).css({'width': $(activeEntry).outerWidth(), 'left' : $(activeEntry).position().left, 'opacity' : 1 });
      }
    }

    activeMenu();

  // Menu button
    $('#toggleMenu').click(function(event){
      event.preventDefault();
      $(this).toggleClass('active');
      $('#mainNav').find('ul').toggleClass('show');
    })

  // Pop up
    $('.popTrigger').magnificPopup({ 
      type: 'inline',
      mainClass: 'mfp-fade'
    });
});