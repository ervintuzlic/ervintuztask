<div>
        <form action="create.php" id="addform" method="post">
            <input type="text" name="SKU" id="SKU" placeholder="input SKU: "></input>
            <input type="text" name="Name" id="Name" placeholder="input name: "></input>
            <input type="number" name="Price" id="Price" placeholder="input price: "></input>

            <select name="ProductType" onchange='submitForm(this)'>
                <option value="" disabled selected>Choose option</option>
                <option value="DVD">DVD</option>
                <option value="Book">Book</option>
                <option value="Furniture">Furniture</option>
            </select>

            <button type="submit">Submit</button>
        </form>
    </div>

<script type='text/javascript'> 
        function submitForm(selectObject){ 
            var value = selectObject.value;
            
            if(document.contains(document.getElementById('newinput')))
                document.getElementById('newinput').remove();


            newDiv = document.createElement("div");
            newDiv.id="newinput";
            document.getElementById('addform').appendChild(newDiv);


            if(value=="DVD"){
                var input = document.createElement("input");
                input.type="number";
                input.name="Size";
                input.id="Size";
                input.placeholder="input size: ";
                document.getElementById('newinput').appendChild(input);
            }else if(value=="Book"){
                var input = document.createElement("input");
                input.type="number";
                input.name="Weight";
                input.id="Weight";
                input.placeholder="input weight: ";
                document.getElementById('newinput').appendChild(input);
            }else{
                var input = document.createElement("input");
                input.type="number";
                input.name="Height";
                input.id="Height";
                input.placeholder="input height: ";
                document.getElementById('newinput').appendChild(input);

                var input = document.createElement("input");
                input.type="number";
                input.name="Width";
                input.id="Width";
                input.placeholder="input width: ";
                document.getElementById('newinput').appendChild(input);
                
                var input = document.createElement("input");
                input.type="number";
                input.name="Length";
                input.id="Length";
                input.placeholder="input length: ";
                document.getElementById('newinput').appendChild(input);
            }
        } 
    </script>