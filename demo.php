<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script>
            function show() {
                var x = document.getElementById("values").rows.length;
                if (x >= 1) {
                    document.getElementById("values").style.display = "table";
                    var table = document.getElementById("values");
                    var row = table.insertRow(1);
                    var cell1 = row.insertCell(0);
                    var cell2 = row.insertCell(1);
                    var cell3 = row.insertCell(2);
                    var cell4 = row.insertCell(3);
                    cell1.innerHTML = document.forms["QEnquiry"]["name"].value;
                    cell2.innerHTML = document.forms["QEnquiry"]["email"].value;
                    cell3.innerHTML = document.forms["QEnquiry"]["contact"].value;
                    cell4.innerHTML = document.forms["QEnquiry"]["desc"].value;
                    document.forms["QEnquiry"].reset();
                }
            }
        </script>

        <style>
            *{
                margin: 0;
                padding: 0;
            }
            h1
            {
                position:absolute;
                top: 50%;
                left:50%;
                margin-top: -18px;
                margin-left: -62px;
            }
            div nav a{text-decoration: none; display: inline-block; line-height: 37px; margin: 20px 90px 15px 0px; font-size: 200%; color: green;
            }
            #container { position: relative;}
            #div1 { background: orange; width: 100%;position: fixed; z-index: 1;}   
            #div2 { background: orange; position:relative;padding:0px;}
            #div3 { background-image: url("banner.jpg"); width:100% ; height:300px;top: 90px;position: relative;}
            #div6 { background: orange; width: 100%; float: center;padding:0px;position: relative;}
            #div7 { width:100%;}
            #divbox{background: orange; width: 100%;border-width: 0;
                    overflow: visible;
                    overflow-x: hidden;
                    padding: 1em;position: relative;margin-top: 90px}
            #img1 { width: 140px; height: 80px; margin-top:10px;margin-left:10px; }
            .clearfix::after{content: ''; display: block;  width: 100%; height: 0; clear: both;}
            .left{float: left;}
            .right{float: right;}
            html, body { height: 100%; padding: 0; margin: 0; }
            b:hover
            {
                background-color: yellow;
            }
        </style>

    </head>
    <body>
        <div id="container" class="clearfix">
            <div>
                <form>
                    <input type="text">
                </form>
            </div>
        </div>

    </body>
</html>
