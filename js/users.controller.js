var app = angular.module('app', []);

(function () {
    'use strict';

    angular
        .module('app')
        .controller('UsersController', UsersController);

    UsersController.$inject = ['$http'];

    function UsersController($http) {
        var vm = this;

        // les risques à comparer
        vm.users = [];
        vm.getUsers = getUsers;
        vm.saveUser = saveUser;

        function getUsers(){
            // url += "baselines/compareRisks/" + idRiopp + "/" + date;
            // var url = "http://mypartner.gearhostpreview.com/src/GetUsers.php";
            // var userPromise = $http.get(url);
            // userPromise.then(function(response){
            //     console.log(response.data);
            //     vm.users = response.data;
            // });
        }

        function saveUser(nom, prenom, date_naissance, adresse, cp, club, email, telephone) {
            var url = "http://mypartner.gearhostpreview.com/src/SaveUsers.php?prenom="
                + prenom + "&nom=" + nom + "&user_type=" + user_type + "&email=" + email + "&ville=" + ville;
            var userPromise = $http.get(url);
            userPromise.then(function(response){
                // everything's ok
            });
        }
    }
})();