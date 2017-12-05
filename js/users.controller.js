var app = angular.module('app', []);

(function () {
    'use strict';

    angular
        .module('app')
        .controller('UsersController', UsersController);

    UsersController.$inject = ['$http'];

    function UsersController($http) {
        var vm = this;

        vm.users = [];
        vm.getUsers = getUsers;
        vm.saveLicencie = saveLicencie;

        function getUsers(){
            // url += "baselines/compareRisks/" + idRiopp + "/" + date;
            // var url = "http://mypartner.gearhostpreview.com/src/GetUsers.php";
            // var userPromise = $http.get(url);
            // userPromise.then(function(response){
            //     console.log(response.data);
            //     vm.users = response.data;
            // });
        }

        // todo add toast after save
        // todo ensure date format
        function saveLicencie(nom, prenom, date_naissance, adresse, cp, club, email, telephone) {
            // var url = "http://mypartner.gearhostpreview.com/src/SaveUsers.php?prenom="
            //     + prenom + "&nom=" + nom + "&user_type=" + user_type + "&email=" + email + "&ville=" + ville;
            var date_naissance_tmp = date_naissance.split("/");
            date_naissance = date_naissance_tmp[2] + "-" + date_naissance_tmp[1] + "-"+ date_naissance_tmp[0];
            var url = "http://localhost:8888/Amazon%20Drive/Projets_perso/Web/MyPartnerGaetan/mypartner/src/SaveUsers.php"
                + "?nom=" + nom + "&prenom=" + prenom + "&date_naissance=" + date_naissance + "&adresse=" + adresse
                + "&cp=" + cp + "&club=" + club + "&email=" + email + "&telephone=" + telephone;
            var userPromise = $http.get(url);
            userPromise.then(function(response){
            });
        }
    }
})();