<!DOCTYPE html>
<html>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<body>

<div ng-app="">
 
<p>Input something in the input box:</p>
<p>Name : <input type="text" ng-model="name" placeholder="Enter name here"></p>
<p>Age : <input type="text" ng-model="age" placeholder="Enter name here"></p>
<h1>Name {{name}}</h1>
<h1>Age {{age}}</h1>

</div>

</body>
</html>
