$(document).ready(function(){
$("#submit").click(function(){
var item = $("#item").val();
var itemdes = $("#itemdes").val();
var itemimg = $("#itemimg").val().split('\\').pop();// .split and .pop is for removing the c:fakepath that is genereated by the browser when uploading files.
var itemspecs = $("#itemspecs").val();
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'item='+ item + '&itemdes='+ itemdes + '&itemimg='+ itemimg + '&itemspec=' + itemspecs;
if(item==''||itemdes==''||itemimg=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
// this code submits the form to the database using ajax call without refresshing the page
$.ajax({
type: "POST",
url: "index.php",
data: dataString,
cache: false,
success: function(data){
var item = $("#item").val('');//empty the input element after submiting the data
var itemdes = $("#itemdes").val('');//empty the input element after submiting the data
var itemimg = $("#itemimg").val('');//empty the input element after submiting the data
    console.log(data);
alert("you successfully added a product , and sent an email");
}
});
}
return false;
});
    
 $(".hiden").hide();
$(".additem").click(function(){
    $(".hiden").toggle();
});
    
  //this function is used to retrieve the data from the database with an ajax call without refreshing the page
     function retrievedata() {
  $.ajax({
    type: "POST",
    url:"ajax.php",
    data:{
        display: 1
    },
    cache: false,
    success:function(data)//this success function executes when the ajax call is successful and the data parameter returns the printed data from the page url in the ajax call
    {
     console.log(data);
    $("#display").html(data);
    }
   });
}

    setInterval(retrievedata, 1000);//this function running the function of the retreival of data every certain amount of time
   
    //this code creates the datatable and it's attached by the table with it's id
  var table = $('#memListTable').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "datatable.php"
                },
      "columns" : [ //here we define  the columns of the data table and we should associata the data with real name of the columns in the database
          {"data":"id"},
          {"data":"itemname"},
          {"data":"description"},
          {render: function(data) {
        return '<img style="width: 50px;height: 50px;margin: auto;border-radius: 10%;" src="images/'+data+'">'}
          }]
    });     
   
   setInterval( function () {
    table.ajax.reload();
}, 30000 );
 
});

          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          