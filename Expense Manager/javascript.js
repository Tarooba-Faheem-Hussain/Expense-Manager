
    $(document).ready(function(){
    var i = 1;
    
    $('#add').click(function(){
    i++;
    
    $('#dynamic_fields').append('<tr id="row'+i+'"><td><button name="remove" id="+i+" class="btn btn-danger btn-remove">x</button></td><td><input type="text" class="form-control" placeholder="Enter Product"><td><input type="text" class="form-control" id="price" placeholder="Enter price"> </td></td><td><select class="custom-select" required><option value="select ">Select </option><option value="1">1</option><option value="2">2</option> <option value="3">3</option><option value="3">4</option><option value="3">5</option><option value="3">6</option><option value="3">7</option> <option value="3">8</option> <option value="3">9</option><option value="3">10</option></select></td></tr>');                                         
    });
    
    $(document).on('click', '.btn-remove', function() {
        //  var button_id=$(this).attr("id");
       // $("#row"+button_id+"").remove();
       $(this).closest('tr').remove();
    }); 
    });
    
   
    