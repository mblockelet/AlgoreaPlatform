angular.module('algorea')
.controller('tabsController', ['$rootScope', '$scope', '$state', 'tabsService', function ($rootScope, $scope, $state, tabsService) {
    $scope.displayedTabs = tabsService.displayedTabs;
    $scope.selectTab = tabsService.selectTab;
    $scope.getClass = tabsService.getClass;

    $scope.$watch("item", function() {
        tabsService.newItem($scope.item);
        });
    tabsService.newItem($scope.item);
}]);
