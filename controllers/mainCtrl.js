var app = angular.module('myApp', []);
app
    .controller('myCtrl', ['$scope', '$http', function ($scope, $log, $http) {
        $scope.debug = true;
    
    
        //Parent Containers
        $scope.loginContainer = true;
        $scope.mainContainer = false;
        $scope.resultsContainer = false;
        $scope.resultsTitle = "";
        
        $scope.endContainer = false;
        
        
        

        //Questions
        $scope.question1 = true;
        
        $scope.toastPosition = {
            bottom: false,
            top: true,
            left: false,
            right: true
        };
        $scope.getToastPosition = function () {
            return Object.keys($scope.toastPosition)
                .filter(function (pos) {
                    return $scope.toastPosition[pos];
                })
                .join(' ');
        };
 
        this.sendMail = function () {
 
            var data = ({
                Question1 : $scope.question1,
                Question2 : $scope.question2,
                Question3 : $scope.question3,
                Question4 : $scope.question4,
                Question5 : $scope.question5,
                Question6 : $scope.question6,
                Question7 : $scope.question7,
                Question8 : $scope.question8,
                Question9 : $scope.question9,
                Question10 : $scope.question10
            });
 
            // Simple POST request example (passing data) :
            $http.post('/', data).
                success(function(data, status, headers, config) {
                    // this callback will be called asynchronously
                    // when the response is available
 
                    $log.log('Thanks for your message Jedi Master Tester You Rock!');
                    $log.log(data);
 
                }).
                error(function(data, status, headers, config) {
                    // called asynchronously if an error occurs
                    // or server returns response with an error status.
                });
 
        };
    
    }
]);