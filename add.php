<header>
    <link rel="stylesheet" href="css/style.css" />
</header>
<div class="header">
    <h1>Product Add</h1>
    <div class="header-right">
        <button id="addbutton" form="addform">Save</button>

        <form action="index.php">
            <button id="cancel">Cancel</button>
        </form>
    </div>
</div>
<div class="add-container">
        <form action="create.php" id="addform" method="post">
            <input type="text" name="SKU" id="SKU" placeholder="Input SKU: " required></input>
            <input type="text" name="Name" id="Name" placeholder="Input name: " required></input>
            <input type="number" name="Price" id="Price" placeholder="Input price: " required></input>

            <select name="ProductType" onchange='submitForm(this)'>
                <option value="" disabled selected>Choose option</option>
                <option value="DVD">DVD</option>
                <option value="Book">Book</option>
                <option value="Furniture">Furniture</option>
            </select>
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
                input.required;
                input.id="Size";
                input.placeholder="Input Size: ";
                document.getElementById('newinput').appendChild(input);
            }else if(value=="Book"){
                var input = document.createElement("input");
                input.type="number";
                input.name="Weight";
                input.required;
                input.id="Weight";
                input.placeholder="Input Weight: ";
                document.getElementById('newinput').appendChild(input);
            }else{
                var input = document.createElement("input");
                input.type="number";
                input.name="Height";
                input.required;
                input.id="Height";
                input.placeholder="Input Height: ";
                document.getElementById('newinput').appendChild(input);

                var input = document.createElement("input");
                input.type="number";
                input.name="Width";
                input.id="Width";
                input.required;
                input.placeholder="Input Width: ";
                document.getElementById('newinput').appendChild(input);
                
                var input = document.createElement("input");
                input.type="number";
                input.name="Length";
                input.id="Length";
                input.required;
                input.placeholder="Input Length: ";
                document.getElementById('newinput').appendChild(input);
            }
        } 
    </script>