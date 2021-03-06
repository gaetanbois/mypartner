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
        vm.saveCommercant = saveCommercant;
        vm.saveAssociation = saveAssociation;

        function getUsers(){
            // url += "baselines/compareRisks/" + idRiopp + "/" + date;
            // var url = "http://mypartner.gearhostpreview.com/src/GetUsers.php";
            // var userPromise = $http.get(url);
            // userPromise.then(function(response){
            //     console.log(response.data);
            //     vm.users = response.data;
            // });
        }
        
        // todo ensure date format
        function saveLicencie(nom, prenom, date_naissance, adresse, cp, club, email, telephone) {
            // ensure no parameter is empty
            if(nom === undefined || prenom === undefined || date_naissance === undefined || adresse === undefined
                || cp === undefined || club === undefined || email === undefined || telephone === undefined) {
                return;
            }

            // var url = "http://mypartner.gearhostpreview.com/src/SaveUsers.php?prenom="
            //     + prenom + "&nom=" + nom + "&user_type=" + user_type + "&email=" + email + "&ville=" + ville;
            var date_naissance_tmp = date_naissance.split("/");
            date_naissance = date_naissance_tmp[2] + "-" + date_naissance_tmp[1] + "-"+ date_naissance_tmp[0];
            var url = "http://localhost:8888/Amazon%20Drive/Projets_perso/Web/MyPartnerGaetan/mypartner/src/SaveUsers.php"
                + "?user=licencie" + "&nom=" + nom + "&prenom=" + prenom + "&date_naissance=" + date_naissance + "&adresse=" + adresse
                + "&cp=" + cp + "&club=" + club + "&email=" + email + "&telephone=" + telephone;
            var userPromise = $http.get(url);
            userPromise.then(function(response){
                $.toast({
                    heading: 'Félicitations !',
                    text: 'Votre inscription a bien été validée, merci !',
                    icon: 'success',
                    hideAfter:4000
                })
            });
        }

        function saveCommercant(nom, prenom, nom_commerce, type, adresse, cp, email) {
            // ensure no parameter is empty
            if(nom === undefined || prenom === undefined || nom_commerce === undefined || type === undefined
                || adresse === undefined || cp === undefined || email === undefined ) {
                return;
            }

            // var url = "http://mypartner.gearhostpreview.com/src/SaveUsers.php?prenom="
            //     + prenom + "&nom=" + nom + "&user_type=" + user_type + "&email=" + email + "&ville=" + ville;
            var url = "http://localhost:8888/Amazon%20Drive/Projets_perso/Web/MyPartnerGaetan/mypartner/src/SaveUsers.php"
                + "?user=commercant" + "&nom=" + nom + "&prenom=" + prenom + "&nom_commerce=" + nom_commerce
                + "&type=" + type + "&adresse=" + adresse + "&cp=" + cp + "&email=" + email;
            var userPromise = $http.get(url);
            userPromise.then(function(response){
                $.toast({
                    heading: 'Félicitations !',
                    text: 'Votre inscription a bien été validée, merci !',
                    icon: 'success',
                    hideAfter:4000
                })
            });
        }

        function saveAssociation(nom, adresse, cp, email, telephone) {
            // ensure no parameter is empty
            if(nom === undefined || adresse === undefined || cp === undefined || email === undefined
                || telephone === undefined ) {
                return;
            }

            // var url = "http://mypartner.gearhostpreview.com/src/SaveUsers.php?prenom="
            //     + prenom + "&nom=" + nom + "&user_type=" + user_type + "&email=" + email + "&ville=" + ville;
            var url = "http://localhost:8888/Amazon%20Drive/Projets_perso/Web/MyPartnerGaetan/mypartner/src/SaveUsers.php"
                + "?user=association" + "&nom=" + nom + "&adresse=" + adresse + "&cp=" + cp + "&email=" + email
                + "&telephone=" + telephone;
            var userPromise = $http.get(url);
            userPromise.then(function(response){
                $.toast({
                    heading: 'Félicitations !',
                    text: 'Votre inscription a bien été validée, merci !',
                    icon: 'success',
                    hideAfter:4000
                })
            });
        }
    }
})();