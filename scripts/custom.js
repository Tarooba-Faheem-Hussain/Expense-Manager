
    $(document).ready(function(){

    

    var i = 0;
    
    $('#add').click(function(){
    i++; 
    $('#dynamic_fields').append(`
            <tr id="row'+i+'">
                <td><button name="remove" id="`+i+`" class="btn btn-danger btn-remove" data-index="`+i+`">x</button></td>
                <td><input type="text" class="form-control" placeholder="Enter Product" data-index="`+i+`"></td>
                <td><input type="number" class="form-control price" id="price`+i+`" placeholder="Enter price" data-index="`+i+`"></td>
                <td>
                    <select class="custom-select quantity" required id="quantity`+i+`" data-index="`+i+`">
                        <option value="0">Select 
                        <option value="1">1</option>
                        <option value="2">2</option> 
                        <option value="3">3</option>
                        <option value="3">4</option>
                        <option value="3">5</option>
                        <option value="3">6</option>
                        <option value="3">7</option> 
                        <option value="3">8</option> 
                        <option value="3">9</option>
                        <option value="3">10</option>
                    </select>
                </td>
            </tr>`
        );
        attachTrigger();
    });
    
    $(document).on('click', '.btn-remove', function() {
        //  var button_id=$(this).attr("id");
       // $("#row"+button_id+"").remove();
       $(this).closest('tr').remove();
       calculateTotal();
    }); 

    function attachTrigger()
    {
        $('.price').on('change',function(){
            calculateTotal();
        })
        $('.quantity').on('change',function(){
            calculateTotal();
        })
    }
    function calculateTotal()
    {   
        var totalAmount = 0;
        var price = 0;
        var quantity = 0;
        for(var rows = 0;rows<=i;rows++)
        {
            price = $('#price'+rows).val();
            quantity = $('#quantity'+rows).val();
            if(parseFloat(price) && parseFloat(quantity))
            {
                totalAmount += (parseFloat(price) * parseFloat(quantity));
            }
        }
        $('#Total').val(totalAmount);
    }

    attachTrigger();
    });
    
   
    