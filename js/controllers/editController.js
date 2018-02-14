angular.module('edit', [])

  .controller('editCtrl', function($scope, db, $routeParams, $location) {
    $scope.para = $routeParams.id;
    $scope.accountForEdit = {};

    db.getAccounts().then(function(res) {
      let account = res.data.filter(function(e) {
        return e.id == $scope.para;
      });
      $scope.accountForEdit = account[0];
    })

    $scope.adjustAcc = function() {
      db.editDb($scope.accountForEdit).then(function(res) {
        $location.path("/");
      })
    }

  })
