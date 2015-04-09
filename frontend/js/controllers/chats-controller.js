/*global app, DATA*/
app.controller('chats-controller', ['$scope', function ($scope){
	$scope.companies = DATA.COMPANIES;
	$scope.activeCompany = $scope.companies['chat0'];
	$scope.showCompany = function(company){
		$scope.activeCompany = $scope.companies[company];
	};
}]);