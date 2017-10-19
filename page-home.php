<?php
/*
	Template Name: Home Page	
*/

get_header(); ?>
    <div ng-app="myApp" ng-controller="myCtrl" id="MasterContainer">
        <div class="container text-center" id="LoginContainer" ng-show="loginContainer">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Please sign in.</h1>
                </div>
                <div class="col-xs-12">
                    <label for="Username">Username</label>
                    <input type="text" class="d-block margin-auto" id="Username">
                </div>
                <div class="col-xs-12">
                    <label for="Password">Password</label>
                    <input type="password" class="d-block margin-auto" id="Password">
                </div>
                <div class="col-xs-12 text-center">
                    <button class="btn btn-md btn-primary" ng-click="loginContainer = !loginContainer; mainContainer = !mainContainer;">Sign In</button>
                </div>
            </div>
        </div>
        <div class="container" id="MainContainer" ng-show="mainContainer">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="text-center">
                        <?php bloginfo('title'); ?>
                    </h1>
                </div>
            </div>
            <!--            <form ng-submit="sendMail();resultsArrow=true;endContainer=true;">-->
            <div class="row question margin-top-none" id="Question1" ng-show="question1" ng-init="question1 = true">
                <div class="col-xs-12 questionHeader">
                    <h3 class="text-center">Will an RTG drug or device be evaluated or be compared to another drug or device?</h3>
                </div>
                <div class="col-xs-6">
                    <button class="btn btn-md btn-success btn-block" ng-click="question1Yes = true;question1No = false;question2=false;question2Yes=false;question2No=false;question3 = false;question3Yes=false;question3No=false;question4 = false;question4Yes=false;question4No=false;question5 = false;question5Yes=false;question5No=false;question6 = false;question6Yes=false;question6No=false;question7 = false;question7Yes=false;question7No=false;question8 = false;question8Yes=false;question8No=false;question9 = false;question9Yes=false;question9No=false;question10 = false;question10Yes=false;question10No=false;endContainer=false;resultsContainer=true;resultsTitle='Consult Clinical Research Attorney'">Yes</button>
                    <div class="arrow arrow-green" ng-show="question1Yes">
                        <div class="rectangle"></div>
                        <div class="triangle-down"></div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <a href="#Question2" class="btn btn-md btn-danger btn-block" ng-click="question1No = true;question1Yes = false;question2 = true;resultsContainer=false;endContainer=false;">No</a>
                    <div class="arrow arrow-red" ng-show="question1No">
                        <div class="rectangle"></div>
                        <div class="triangle-down"></div>
                    </div>
                </div>
            </div>
            <div class="row question" id="Question2" ng-show="question2">
                <div class="col-xs-12 questionHeader">
                    <h3 class="text-center">Does the project involve a drug or device used outside of usual medical practice, including non-FDA- approved drugs or devices, or off-button uses of FDA-approved drugs or devices?</h3>
                </div>
                <div class="col-xs-6">
                    <button class="btn btn-md btn-success btn-block" ng-click="question2Yes = true;question2No = false;question3 = false;question3Yes=false;question3No=false;question4 = false;question4Yes=false;question4No=false;question5 = false;question5Yes=false;question5No=false;question6 = false;question6Yes=false;question6No=false;question7 = false;question7Yes=false;question7No=false;question8 = false;question8Yes=false;question8No=false;question9 = false;question9Yes=false;question9No=false;question10 = false;question10Yes=false;question10No=false;">Yes</button>
                    <div class="arrow arrow-green" ng-show="question2Yes">
                        <div class="rectangle"></div>
                        <div class="triangle-down"></div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <a href="#Question3" class="btn btn-md btn-danger btn-block" ng-click="question2No = true;question2Yes = false;question3 = true;resultsContainer=false;endContainer=false;">No</a>
                    <div class="arrow arrow-red" ng-show="question2No">
                        <div class="rectangle"></div>
                        <div class="triangle-down"></div>
                    </div>
                </div>
            </div>
            <div class="row question" id="Question3" ng-show="question3">
                <div class="col-xs-12 questionHeader">
                    <h3 class="text-center">Is this a systematic investigation designed with the intent to contribute to generalizable knowledge (i.e., testing a hypothesis; randomization; or observational research)?</h3>
                </div>
                <div class="col-xs-6">
                    <button class="btn btn-md btn-success btn-block" ng-click="question3Yes = true;question3No = false;question4 = false;question4Yes=false;question4No=false;question5 = false;question5Yes=false;question5No=false;question6 = false;question6Yes=false;question6No=false;question7 = false;question7Yes=false;question7No=false;question8 = false;question8Yes=false;question8No=false;question9 = false;question9Yes=false;question9No=false;question10 = false;question10Yes=false;question10No=false;">Yes</button>
                    <div class="arrow arrow-green" ng-show="question3Yes">
                        <div class="rectangle"></div>
                        <div class="triangle-down"></div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <a href="#Question4" class="btn btn-md btn-danger btn-block" ng-click="question3No = true;question3Yes = false;question4 = true;resultsContainer=false;endContainer=false;">No</a>
                    <div class="arrow arrow-red" ng-show="question3No">
                        <div class="rectangle"></div>
                        <div class="triangle-down"></div>
                    </div>
                </div>
            </div>
            <div class="row question" id="Question4" ng-show="question4">
                <div class="col-xs-12 questionHeader">
                    <h3 class="text-center">Is the project receiving federal funding?</h3>
                </div>
                <div class="col-xs-6">
                    <button class="btn btn-md btn-success btn-block" ng-click="question4Yes = true;question4No = false;question5 = false;question5Yes=false;question5No=false;question6 = false;question6Yes=false;question6No=false;question7 = false;question7Yes=false;question7No=false;question8 = false;question8Yes=false;question8No=false;question9 = false;question9Yes=false;question9No=false;question10 = false;question10Yes=false;question10No=false;">Yes</button>
                    <div class="arrow arrow-green" ng-show="question4Yes">
                        <div class="rectangle"></div>
                        <div class="triangle-down"></div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <a href="#Question5" class="btn btn-md btn-danger btn-block" ng-click="question4No = true;question4Yes = false;question5 = true;resultsContainer=false;endContainer=false;">No</a>
                    <div class="arrow arrow-red" ng-show="question4No">
                        <div class="rectangle"></div>
                        <div class="triangle-down"></div>
                    </div>
                </div>
            </div>
            <div class="row question" id="Question5" ng-show="question5">
                <div class="col-xs-12 questionHeader">
                    <h3 class="text-center">Will the project be described as research in grants, public presentations, or other representations? (QI findings may be published but may not be represented as research).</h3>
                </div>
                <div class="col-xs-6">
                    <button class="btn btn-md btn-success btn-block" ng-click="question5Yes = true;question5No = false;question6 = false;question6Yes=false;question6No=false;question7 = false;question7Yes=false;question7No=false;question8 = false;question8Yes=false;question8No=false;question9 = false;question9Yes=false;question9No=false;question10 = false;question10Yes=false;question10No=false;">Yes</button>
                    <div class="arrow arrow-green" ng-show="question5Yes">
                        <div class="rectangle"></div>
                        <div class="triangle-down"></div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <a href="#Question6" class="btn btn-md btn-danger btn-block" ng-click="question5No = true;question5Yes = false;question6 = true;resultsContainer=false;endContainer=false;">No</a>
                    <div class="arrow arrow-red" ng-show="question5No">
                        <div class="rectangle"></div>
                        <div class="triangle-down"></div>
                    </div>
                </div>
            </div>
            <div class="row question" id="Question6" ng-show="question6">
                <div class="col-xs-12 questionHeader">
                    <h3 class="text-center">Will the project place individuals at risk above the standard of care?</h3>
                </div>
                <div class="col-xs-6">
                    <button class="btn btn-md btn-success btn-block" ng-click="question6Yes = true;question6No = false;question7 = false;question7Yes=false;question7No=false;question8 = false;question8Yes=false;question8No=false;question9 = false;question9Yes=false;question9No=false;question10 = false;question10Yes=false;question10No=false;">Yes</button>
                    <div class="arrow arrow-green" ng-show="question6Yes">
                        <div class="rectangle"></div>
                        <div class="triangle-down"></div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <a href="#Question7" class="btn btn-md btn-danger btn-block" ng-click="question6No = true;question6Yes = false;question7 = true;resultsContainer=false;endContainer=false;">No</a>
                    <div class="arrow arrow-red" ng-show="question6No">
                        <div class="rectangle"></div>
                        <div class="triangle-down"></div>
                    </div>
                </div>
            </div>
            <div class="row question" id="Question7" ng-show="question7">
                <div class="col-xs-12 questionHeader">
                    <h3 class="text-center">Will the project create a research database or registry containing PHI?</h3>
                </div>
                <div class="col-xs-6">
                    <button class="btn btn-md btn-success btn-block" ng-click="question7Yes = true;question7No = false;question8 = false;question8Yes=false;question8No=false;question9 = false;question9Yes=false;question9No=false;question10 = false;question10Yes=false;question10No=false;">Yes</button>
                    <div class="arrow arrow-green" ng-show="question7Yes">
                        <div class="rectangle"></div>
                        <div class="triangle-down"></div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <a href="#Question8" class="btn btn-md btn-danger btn-block" ng-click="question7No = true;question7Yes = false;question8 = true;resultsContainer=false;endContainer=false;">No</a>
                    <div class="arrow arrow-red" ng-show="question7No">
                        <div class="rectangle"></div>
                        <div class="triangle-down"></div>
                    </div>
                </div>
            </div>
            <div class="row question" id="Question8" ng-show="question8">
                <div class="col-xs-12 questionHeader">
                    <h3 class="text-center">Will the project collect or use residual biological specimens?</h3>
                </div>
                <div class="col-xs-6">
                    <button class="btn btn-md btn-success btn-block" ng-click="question8Yes = true;question8No = false;question9 = false;question9Yes=false;question9No=false;question10 = false;question10Yes=false;question10No=false;resultsContainer=false;endContainer=false;">Yes</button>
                    <div class="arrow arrow-green" ng-show="question8Yes">
                        <div class="rectangle"></div>
                        <div class="triangle-down"></div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <a href="#Question9" class="btn btn-md btn-danger btn-block" ng-click="question8No = true;question8Yes = false;question9 = true;resultsContainer=false;endContainer=false;">No</a>
                    <div class="arrow arrow-red" ng-show="question8No">
                        <div class="rectangle"></div>
                        <div class="triangle-down"></div>
                    </div>
                </div>
            </div>
            <div class="row question" id="Question9" ng-show="question9">
                <div class="col-xs-12 questionHeader">
                    <h3 class="text-center">Is the aim to assess or improve a health care process, delivery of care or system within the standard of care?</h3>
                </div>
                <div class="col-xs-6">
                    <button class="btn btn-md btn-success btn-block" ng-click="question9Yes = true;question9No = false;question10 = false;question10Yes=false;question10No=false;">Yes</button>
                    <div class="arrow arrow-green" ng-show="question9Yes">
                        <div class="rectangle"></div>
                        <div class="triangle-down"></div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <a href="#Question10" class="btn btn-md btn-danger btn-block" ng-click="question9No = true;question9Yes = false;question10 = true;resultsContainer=false;endContainer=false;">No</a>
                    <div class="arrow arrow-red" ng-show="question9No">
                        <div class="rectangle"></div>
                        <div class="triangle-down"></div>
                    </div>
                </div>
            </div>
            <div class="row question" id="Question10" ng-show="question10">
                <div class="col-xs-12 questionHeader">
                    <h3 class="text-center">Do the methods allow for flexibility and incremental changes? Examples include the PDSA (plan, do study, act)) cycle.</h3>
                </div>
                <div class="col-xs-6">
                    <button class="btn btn-md btn-success btn-block" ng-click="question10Yes = true;question10No = false;resultsContainer=true;">Yes</button>
                    <div class="arrow arrow-green" ng-show="question10Yes">
                        <div class="rectangle"></div>
                        <div class="triangle-down"></div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <a href="#ResultsContainer" class="btn btn-md btn-danger btn-block" ng-click="question10Yes = false;question10No = true;resultsContainer=true;resultsTitle='Project is considered QUALITY IMPROVEMENT'">No</a>
                    <div class="arrow arrow-red" ng-show="question10No">
                        <div class="rectangle"></div>
                        <div class="triangle-down"></div>
                    </div>
                </div>
            </div>
            <!--            </form>-->
        </div>
        <div class="container result ng-hide" id="ResultsContainer" ng-show="resultsContainer">
            <div class="row">
                <div class="col-xs-12 questionHeader">
                    <h3 class="text-center header">{{resultsTitle}}</h3>
                </div>
                <div class="col-xs-12 text-center">
                    <a href="#EndContainer" class="btn btn-md btn-primary" ng-click="resultsArrow=true;endContainer=true;">Done</a>
                    <div class="arrow arrow-blue" ng-show="resultsArrow">
                        <div class="rectangle"></div>
                        <div class="triangle-down"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container result ng-hide" id="EndContainer" ng-show="endContainer">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="text-center"><em>Thank you for using ARQI.</em></h1>
                </div>
                <div class="col-xs-12 questionHeader">
                    <h3 class="text-center">Your decisions has been emailed to you.</h3>
                </div>
                <div class="col-xs-12 text-center">
                    <button class="btn btn-md btn-primary">Start Over</button>
                </div>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>