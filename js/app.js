function opac(){
	$(".item").hover(function(){
				$(this).siblings().each(function(){
					$(this).css("opacity", "0.3");
					});
				}, function(){$(this).siblings().css("opacity", "1");
			});
}

var rightTransit = 'animated fadeInRight';
var leftTransit = 'animated fadeInLeft';
var deleteClass = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

angular.module('myApp', []).controller('myCtrl', function($scope) {
    $scope.projects = [
        {
			name:'Interactive Resume',
			imgSrc:'img/ppage/ir1.jpg',
			desc: 'A Resume Page generating with JS and JQuery according to the stored data.',
			link: 'resume.html'
		},
        {
			name:'Neighborhood Map',
			imgSrc:'img/ppage/nm1.jpg',
			desc: 'Map of Manhattan with some API functionalities.',
			link: 'neighborhoodMap.html'
		},
		{
			name:'Classical Arcade Game',
			imgSrc:'img/ppage/arcade.jpg',
			desc: 'Clone of platform arcade game Frogger. Coded in JavaScript using the pseudo-classical pattern',
			link: 'arcade.html'
		},
        {
			name:'Mobile Portfolio',
			imgSrc:'img/ppage/op1.jpg',
			desc: 'Focus on optimizing the critical rendering path',
			link: 'mobilePortfolio.html'
		},
        {
			name:'TEDx ShirazUniversity',
			imgSrc:'img/ppage/tedx1.jpg',
			desc: 'Front-End Web Developer and Graphic Designer',
			link: 'tedx.html'
		}
    ];
	
	$scope.about = false;
	$scope.pro = false;
	$scope.home = true;
	
    $scope.toAbout = function() {
		//Need conditions because I have to buttons in different section for coming to this section
		if ($scope.home){
			$scope.about = !$scope.about;
			$scope.home = !$scope.home;
		};
		if ($scope.pro){
			$scope.pro = !$scope.pro;
			$scope.about = !$scope.about;
		};
		$('#about').addClass(leftTransit).one(deleteClass, 
		function(){
			$('#about').removeClass(leftTransit);
		});
    };
	$scope.toPro = function() {
        if ($scope.home){
			$scope.pro = !$scope.pro;
			$scope.home = !$scope.home;
		} else {
			$scope.pro = !$scope.pro;
			$scope.about = !$scope.about;
		};
		$('#pro').addClass(rightTransit).one(deleteClass, 
		function(){
			$('#pro').removeClass(rightTransit);
		});
	
	};

});