$(document).ready(function(){
$.get("categoryMain.php",function(data)	{
    $("#categoryMainTable tbody").append(data);
    //DataTable for 'Main category'
    $('#categoryMainTable').DataTable({
        destroy: true, //destroy DataTable for reinitialization
        colReorder: true,   
        dom: 'Bfrtip',
        buttons: ['excel', 'pdf','print'],
        responsive: true,
        keys: true
    });
});
});