/*global app, DATA*/
app.controller('companies-controller', ['$scope', function ($scope){
	$scope.companies = DATA.COMPANIES;
	$scope.activeCompany = $scope.companies['company0'];
	$scope.showCompany = function(company){
		$scope.activeCompany = $scope.companies[company];
	};
}]);