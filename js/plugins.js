"use strict";window.console&&console.log||!function(){for(var i=function(){},e=["assert","clear","count","debug","dir","dirxml","error","exception","group","groupCollapsed","groupEnd","info","log","markTimeline","profile","profileEnd","markTimeline","table","time","timeEnd","timeStamp","trace","warn"],o=e.length,n=window.console={};o--;)n[e[o]]=i}(),$(window).load(function(){var i=function(){var i=$("#mainNav"),e=$(i).find(".active"),o=$(i).find("ul");console.log(o),$(o).append('<li class="activeMark"></li>');var n=$(o).find(".activeMark");$(n).css({width:$(e).outerWidth(),left:$(e).position().left,opacity:1})};i(),$("#toggleMenu").click(function(i){i.preventDefault(),$(this).toggleClass("active"),$("#mainNav").find("ul").toggleClass("show")})});