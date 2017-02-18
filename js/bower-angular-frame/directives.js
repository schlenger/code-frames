// a custom directive
frameApp.directive('customListItem', function () {

  return {
    restrict: 'AE', // allow use as A = Attribute, E = Element, 
                    // C = Class and M = Comment(ed out)
    template: '<p>This is by {{ name }}, from group {{ group }}! <small ng-transclude></small> </p>',
      // access linked controller vars (group), of scope isn't set
      // use overwrite within the html to pass vars from parent scope
    replace: true, // completly replace the tag with the template,
    scope: {
      group: '@', // auto link passed vars in html as text
      name: '@',
      // someObject: '=', // this is a two way binding of an object
      // someFunction: '&', // this is a function, has to be passed an obj
    }, // isolated child scope, don't overwrite controller scope,
    //compile: function (elem, attrs) {...} // custom pre and post steps
    // e.g. inner compile -> change directive on the fly before it is used
    // e.g. inner (pre/post)link -> changes after compiling directive (better use post)
    transclude: true // display what's inside <customListItem></customListItem>
  }
  
});