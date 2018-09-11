// JavaScript Document


//animation effect(waypoint)
//paste this code under head tag or in a seperate js file.
 // Wait for window load
$(window).load(function() {
  // Animate loader off screen
  $(".se-pre-con").fadeOut("slow");;


            function onScrollInit( items, trigger ) {
                items.each( function() {
                var osElement = $(this),
                    osAnimationClass = osElement.attr('data-os-animation'),
                    osAnimationDelay = osElement.attr('data-os-animation-delay');

                    osElement.css({
                        '-webkit-animation-delay':  osAnimationDelay,
                        '-moz-animation-delay':     osAnimationDelay,
                        'animation-delay':          osAnimationDelay
                    });

                    var osTrigger = ( trigger ) ? trigger : osElement;

                    osTrigger.waypoint(function() {
                        osElement.addClass('animated').addClass(osAnimationClass);
                        },{
                            triggerOnce: true,
                            offset: '90%'
                    });
                });
            }

            onScrollInit( $('.os-animation') );
            onScrollInit( $('.staggered-animation'), $('.staggered-animation-container')



);
});

//smooth silding

$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top -110
        }, 2500);
        return false;
      }
    }
  });


});

/*angular js code*/

var app = angular.module("myapp1",[]);
app.controller("mycontroller1",function($scope,$http){
	$scope.arealist = ["maddilapalem","dwarakanagar","asilmetta","Akkayyapalem","Dondaparthy","mvp","rk beach"];

	$scope.hidethis = true;
	$scope.autocompletearea = function(string){
		$scope.hidethis = false;
		var output = [];
		angular.forEach($scope.arealist,function(areaname){
			if(areaname.toLowerCase().indexOf(string.toLowerCase())>=0){
				output.push(areaname);
			}
		});
		$scope.filteredAreaList = output;
	}

	$scope.filltextbox = function(string){
		$scope.areaname = string;
		$scope.hidethis = true;
		showhotels(string);
	}

	var showhotels = function(string)
	{
		$http.get("php/showhotelnames.php?area="+string).then(function(response){
			$scope.filteredhotels = response.data.records;
		});
	}

});










