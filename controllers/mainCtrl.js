var app = angular.module('myApp', []);
app 
//    .config(function($logProvider){
//      $logProvider.debugEnabled(true);
//    })
    .controller('myCtrl', function ($scope, $log, $filter, $http) {
            $scope.debug = true;

            //User Data    
            $scope.email = "";
            $scope.dateRaw = new Date();
            $scope.date = $filter('date')($scope.dateRaw, 'MM-dd-yyyy');
            $scope.time = $filter('date')($scope.dateRaw, 'shortTime');
        
        
            //Parent Containers
            $scope.loginContainer = true;
            $scope.mainContainer = false;
            $scope.resultsContainer = false;
            $scope.resultsTitle = "";

            $scope.endContainer = false;




            //Questions
            $scope.question1 = true;
            $scope.question2 = false;
            $scope.question3 = false;
            $scope.question4 = false;
            $scope.question5 = false;
            $scope.question6 = false;
            $scope.question7 = false;
            $scope.question8 = false;
            $scope.question9 = false;
            $scope.question10 = false;


            //Posting AngularJS Data to PHP/MySQL
            $scope.postData = function () {
                if ($scope.resultsTitle) {
                    $scope.resultsTitle = $scope.resultsTitle;
                }
                else if ($scope.resultsTitle == "") {
                    $scope.resultsTitle = "Survey Not Completed";
                }
                  $scope.userData = {
                    "userEmail": $scope.email,
                    "todaysDate": $scope.date,
                    "timeNow": $scope.time,
                    "question1": $scope.question1.toString(),
                    "question2": $scope.question2.toString(),
                    "question3": $scope.question3.toString(),
                    "question4": $scope.question4.toString(),
                    "question5": $scope.question5.toString(),
                    "question6": $scope.question6.toString(),
                    "question7": $scope.question7.toString(),
                    "question8": $scope.question8.toString(),
                    "question9": $scope.question9.toString(),
                    "question10": $scope.question10.toString(),
                    "endResult": $scope.resultsTitle
                  };
                  $log.info($scope.userData);
                    
                
                    $http({
                        method: 'POST',
                        data: $scope.userData,
                        url: '/arqi/wp-content/themes/bootstrap2wordpress/controllers/postData.php',
                        headers: { 'Content-Type': 'application/x-www-form-urlencoded' }

                    }).then(function successCallback(response) {
                          $log.log(response);
                    }, function errorCallback(response) {
                          $log.warn(response);
                    });
            }

            
            
            //Email
            
            //        $scope.toastPosition = {
            //            bottom: false,
            //            top: true,
            //            left: false,
            //            right: true
            //        };
            //        $scope.getToastPosition = function () {
            //            return Object.keys($scope.toastPosition)
            //                .filter(function (pos) {
            //                    return $scope.toastPosition[pos];
            //                })
            //                .join(' ');
            //        };
            // 
            //        this.sendMail = function () {
            // 
            //            var data = ({
            //                Question1 : $scope.question1,
            //                Question2 : $scope.question2,
            //                Question3 : $scope.question3,
            //                Question4 : $scope.question4,
            //                Question5 : $scope.question5,
            //                Question6 : $scope.question6,
            //                Question7 : $scope.question7,
            //                Question8 : $scope.question8,
            //                Question9 : $scope.question9,
            //                Question10 : $scope.question10
            //            });
            // 
            //            // Simple POST request example (passing data) :
            //            $http.post('/', data).
            //                success(function(data, status, headers, config) {
            //                    // this callback will be called asynchronously
            //                    // when the response is available
            // 
            //                    $log.log('Thanks for your message Jedi Master Tester You Rock!');
            //                    $log.log(data);
            // 
            //                }).
            //                error(function(data, status, headers, config) {
            //                    // called asynchronously if an error occurs
            //                    // or server returns response with an error status.
            //                });
            // 
            //        };

    }
);