/*global app, DATA*/
app.controller('companies-controller', ['$scope', function ($scope, $sce){
	$scope.companies = DATA.COMPANIES;
	$scope.activeCompany = $scope.companies['company0'];
	$scope.showCompany = function(company){
		$scope.activeCompany = $scope.companies[company];
	};
	$scope.trustSrc = function(src) {
		return $sce.trustAsResourceUrl(src);
	}
}]);
