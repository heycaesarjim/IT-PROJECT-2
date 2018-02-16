<script>
  function searchItem2(a){
   $.ajax({
          method: 'get',
          //url: 'items/' + document.getElementById("inputItem").value,
          url: 'items/' + a.value,
          dataType: "json",
          success: function(data){
              if(a.id === "addQuantity"){
                  $("#addQuantityTbody tr").remove();
                  for(var i=0; i < data.length; i++){
                      //alert(data[i].description);
                      var thatTable = document.getElementById("addQuantityTbody");
                      var newRow = thatTable.insertRow(-1);
                      var itemId = newRow.insertCell(-1);
                      itemId.innerHTML = "<td>" + data[i].product_id + "</td>";
                      var newCell = newRow.insertCell(-1);
                      newCell.innerHTML = "<td>" +data[i].description+ "</td>";
                      var secondCell = newRow.insertCell(-1); 
                      secondCell.innerHTML = "<td>query</td>";
                      var thirdCell = newRow.insertCell(-1);
                      thirdCell.innerHTML = "<td>\
                              <input value='' type='number' min='1'> \
                          </td>";
                      //<form action='items/3' 'method'='POST' id='form" +data[i].product_id+ "'> \
                      // <input type='text'> \
                  // </form> \

                      var forthCell = newRow.insertCell(-1);
                      forthCell.innerHTML = "<td>" + data[i].price + "</td>";
                      var fifthCell = newRow.insertCell(-1);
                      fifthCell.innerHTML = "<td>query</td>";
                      var sixthCell = newRow.insertCell(-1);
                      //sixthCell.innerHTML = "<td><button type='submit' value='Submit' form='form" +data[i].product_id+"'"+">Submit</button></td>";
                      sixthCell.innerHTML = "<td><button onclick='addQuantitySubmit(this)'>Submit</button></td>";
                  }
              }else if(a.id === "subtractQuantity"){
                  $("#subtractQuantityTbody tr").remove();
                  for(var i=0; i < data.length; i++){
                      //alert(data[i].description);
                      var thatTable = document.getElementById("subtractQuantityTbody");
                      var newRow = thatTable.insertRow(-1);
                      var itemId = newRow.insertCell(-1);
                      itemId.innerHTML = "<td>" + data[i].product_id + "</td>";
                      var firstCell = newRow.insertCell(-1);
                      firstCell.innerHTML = "<td>" +data[i].description+ "</td>";
                      var secondCell = newRow.insertCell(-1); 
                      secondCell.innerHTML = "<td>query</td>";
                      var thirdCell = newRow.insertCell(-1);
                      thirdCell.innerHTML = "<td>\
                              <input value='' type='number' min='1'> \
                          </td>";


                      var forthCell = newRow.insertCell(-1);
                      forthCell.innerHTML = "<td>" + data[i].price + "</td>";
                      var fifthCell = newRow.insertCell(-1);
                      fifthCell.innerHTML = "<td>query</td>";
                      var sixthCell = newRow.insertCell(-1);
                      //sixthCell.innerHTML = "<td><button type='submit' value='Submit' form='form" +data[i].product_id+"'"+">Submit</button></td>";
                      sixthCell.innerHTML = "  <select name='reason'>\
                                                  <option value='Salable'>Salable</option>\
                                                  <option value='Damaged-Salable'>Damaged-Salable</option>\
                                                  <option value='Damaged'>Damaged</option>\
                                              </select>";
                  }

                  if(data.length == 1){
                    document.getElementById("mod_footer").innerHTML="<div class='col-md-12'>\
                        <input type='submit' onclick='window.alert(\"to be continue..\")' name='submitedit' class='btn btn-primary'>\
                        <button class='btn btn-primary' data-dismiss='modal'>Cancel</button></div>";
                }else{
                    $("#mod_footer div").remove();
                }

              }else if(a.id === "returnItem"){
                  $("#returnItemTbody tr").remove();                        
                  for(var i=0; i < data.length; i++){
                      //<div class="btn-group" >
                          //<button class="btn btn-success" type="button">Item1</button>
                          //<button class="btn btn-danger" type="button"><i class="fa fa-close"></i></button>
                     // </div>
                      var thatTable = document.getElementById("returnItemTbody");
                      var newRow = thatTable.insertRow(-1);
                      var firstCell = newRow.insertCell(-1);
                      firstCell.innerHTML = "<td>" +data[i].description+ "</td>";
                      var secondCell = newRow.insertCell(-1); 
                      secondCell.innerHTML = "<td>query</td>";
                      var thirdCell = newRow.insertCell(-1);
                      //sixthCell.innerHTML = "<td><button type='submit' value='Submit' form='form" +data[i].product_id+"'"+">Submit</button></td>";
                      thirdCell.innerHTML = "<td><button class='btn btn-danger' onclick='displayForm(this)'>Return</button></td>";
                  }
              }else if(a.id === "removeItem"){
                  $("#removeItemTbody tr").remove();                        
                  for(var i=0; i < data.length; i++){
                      var thatTable = document.getElementById("removeItemTbody");
                      var newRow = thatTable.insertRow(-1);
                      var itemId = newRow.insertCell(-1);
                      itemId.innerHTML = "<td>" + data[i].product_id + "</td>";
                      var firstCell = newRow.insertCell(-1);
                      firstCell.innerHTML = "<td>" +data[i].description+ "</td>";
                      var secondCell = newRow.insertCell(-1); 
                      secondCell.innerHTML = "<td>query</td>";
                      var thirdCell = newRow.insertCell(-1);
                      thirdCell.innerHTML = "<td>" + data[i].price + "</td>";
                      var fifthCell = newRow.insertCell(-1);
                      fifthCell.innerHTML = "<td>query</td>";
                      var sixthCell = newRow.insertCell(-1);
                      //sixthCell.innerHTML = "<td><button type='submit' value='Submit' form='form" +data[i].product_id+"'"+">Submit</button></td>";
                      sixthCell.innerHTML = "<td><button id='removedItemDelete' class='btn btn-danger'>Delete</button></td>";
                  }
              }
            
          }
      });
  
  }
  function addQuantitySubmit(a){
      var input = a.parentNode.previousSibling.previousSibling.previousSibling.childNodes[1].value;
      if(input == ""){
          a.parentNode.previousSibling.previousSibling.previousSibling.childNodes[1].focus();
          a.parentNode.previousSibling.previousSibling.previousSibling.childNodes[1].setAttribute('style','border:1px solid red');
      }else{
          alert('to be continue..');
      }
      
  }
  function displayForm(a){
      $("#returnFormDiv").css("display:block");
      $("#returnFormDiv").slideDown("slow",function(){
           document.getElementById("returnItemName").value = a.parentNode.previousSibling.previousSibling.innerHTML;
      });

  }

  /*function displayItem(a){
      var description = a.parentNode.previousSibling.previousSibling.innerHTML;
          if(){

          }else{
              $("#displayReturnedItem").append("<div class='btn-group' >\
                      <button class='btn btn-success'>"+ a.parentNode.previousSibling.previousSibling.innerHTML +"</button>\
                      <button class='btn btn-danger' id=''><i class='fa fa-close'></i></button>\
                  </div>");

          }
             

  }
 */ 
</script>