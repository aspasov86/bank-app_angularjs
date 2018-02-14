angular.module("dbService", [])

  .service('db', function($http) {

    this.getAccounts = function() {
      return $http({
        method: "get",
        url: "php/accounts.php"
      })
    };

    this.addToDb = function(account) {
      return $http({
        method: "post",
        url: "php/addToDb.php",
        data: account
      })
    };

    this.removeFromDb = function(id) {
      return $http({
        method: "post",
        url: "php/removeFromDb.php",
        data: {
          id: id
        }
      })
    };

    this.editDb = function(account) {
      return $http({
        method: "post",
        url: "php/editDb.php",
        data: account
      })
    }

  })
