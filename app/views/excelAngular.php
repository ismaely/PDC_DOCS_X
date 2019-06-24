
<!DOCTYPE html>
<html data-ng-app="app">
<head>
<!--  <base href="http://handsontable.github.io/ngHandsontable/node_modules/">-->
  <link rel="stylesheet" href="././bower_components/handsontable/dist/handsontable.full.css">
  <script src="././bower_components/angular/angular.min.js"></script>
  <script src="././bower_components/handsontable/dist/handsontable.full.js"></script>
  <script src="././bower_components/ngHandsontable/dist/ngHandsontable.js"></script>
  <!-- demo helpers -->
  <script src="././bower_components/ngHandsontable/demo/js/services/dataFactory.js"></script>
   <script src="app\app_js\app.js"></script>
  <meta charset="utf-8">
</head>
<body data-ng-controller="MainCtrl as ctrl">

  <hot-table
    settings="ctrl.settings"
    row-headers="ctrl.rowHeaders"
    col-headers="ctrl.colHeaders"
    datarows="ctrl.db.size"
    >
  </hot-table>


</body>
</html>



<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

