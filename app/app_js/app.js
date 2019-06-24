/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function MainCtrl(dataFactory) {
  // You can pass options by attributes..
  this.rowHeaders = true;
  this.colHeaders = true;
  var tamanho;
  this.db = {
    items: dataFactory.generateArrayOfArrays(20, 10)
  };
  // ..or as one object
  this.settings = {
    contextMenu: [
      'row_above', 'row_below', 'remove_row'
    ]
  };
}

MainCtrl.$inject = ['dataFactory'];

angular
  .module('app', ['ngHandsontable'])
  .controller('MainCtrl', MainCtrl);