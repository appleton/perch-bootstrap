//
// Author:     Andrew Appleton
// Author URL: http://floatleft.com/
//
// Contents:
//
// 1. Global Scripts
// 2. Modules
// 3. Pages


//*********************** 1. Global Scripts  ***********************************
// Global object - all modules live under this
window.App = window.App || {};

// Scope scripts to an individual page by <html> element id
App.htmlID = function(id, fn){
  $(function(){
    var htmlID = App.htmlID;
    if(htmlID.value === undefined){ htmlID.value = $('html').attr('id'); }
    if(htmlID.value === id){ fn(); }
  });
};

//************************ 2. Modules  *****************************************
// All modules to follow this pattern
App.ModuleName = function(){
  var publics, privates;

  //Define private methods and variables
  privates = {};

  //Constructor

  //Define public methods and variables
  publics = {};
  return publics;
};

// Module inheritance to follow this pattern
App.SubModule = function(){
  var publics, privates;

  //Define private methods and variables
  privates = {};

  //Constructor - inherits from App.ClassName
  publics = new App.ModuleName();

  //Define additional public methods and variables
  publics.methodName = function(){};
  return publics;
};

//************************ 3. Pages  *******************************************
// Everything in this section scoped to <html> ID
App.htmlID('index', function(){
  //Instatiate a module object
  var myModule = new App.SubModule();
});