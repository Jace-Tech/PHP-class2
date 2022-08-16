<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>USING JSON</title>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            .container {
                margin: 0 auto;
                max-width: 1024px;
                width: 45%;
            }
            
            .form-group {
                margin-top: 2rem;
                display: flex;
            }

            .form-control {
                flex: 1;
                display: flex;
                border: 1px solid #ccc;
                padding: .6rem 1rem;
                background-color: #fff;
                color: #555;
            }

            .btn {
                display: flex;
                align-items: center;
                justify-content: center;
                border: none;
                background-color: transparent;
                font-size: .85rem;
                font-weight: 500;
                padding: .6rem 2rem;
                cursor: pointer;
            }

            .btn.btn-add {
                background-color: #1e1e1e;
                color: #fff;
            }
        </style>
    </head>
    
    <body>
        <div class="container">
            <div class="form-group">
                <input type="text" class="form-control">
                <button class="btn btn-add">Add Item</button>
            </div>

            <div class="list-items">
                <div class="item">
                    <span class="task">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</span>

                    <div class="options">
                        <button class="btn btn-sm btn-delete">delete</button>
                        <button class="btn btn-sm btn-edit">edit</button>
                    </div>  
                </div>
            </div>
        </div>
        <script src="./main.js"></script>
    </body>
</html>