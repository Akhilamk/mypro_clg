 @extends('headfoot') @section('content')

<div class="row" id="rowimg">
    <div class="col-lg-6 col-sm-12 col-xs-12 col-md-12" style="height: 450px;">
        <div class="content">
            <img src="{{url('images/staffregbutton.jpg')}}" style="width:  40px;  margin-top: 100px; border-radius: 20px;" alt=""><button onclick="document.location='staffregister'" class="btn btn-outline-light" style="margin-top: 100px; margin-left: 50px; font-size: larger;">  𝐒𝐭𝐚𝐟𝐟  <br> 𝐑𝐞𝐠𝐢𝐬𝐭𝐫𝐚𝐭𝐢𝐨𝐧</button>
        </div>
        <div class="content">
            <img src="{{url('images/studentregbn.jpg')}}" style="width: 40px; margin-top: 100px; border-radius: 20px;" alt=""><button class="btn btn-outline-light" style="margin-top: 100px; margin-left: 50px; font-size: larger;">  𝐒𝐭𝐮𝐝𝐞𝐧𝐭 <br> 𝐑𝐞𝐠𝐢𝐬𝐭𝐫𝐚𝐭𝐢𝐨𝐧</button>

        </div>


    </div>
    <div class="col-lg-6 col-sm-12 col-xs-12 col-md-12" style="height: 450px;"><br><br><br><br>
        <span><br><h2 style="color: rgb(182, 174, 159);  text-align: center;">ℝ𝔼𝔾𝕀𝕊𝕋𝔼ℝ ℕ𝕆𝕎</h2><h4 style="color: rgb(231, 214, 114); font-size: large;">𝑡𝑜 𝑟𝑒𝑐𝑒𝑖𝑣𝑒 𝑎𝑙𝑙 𝑡ℎ𝑒 𝑢𝑝𝑑𝑎𝑡𝑒𝑠 𝑟𝑒𝑙𝑎𝑡𝑒𝑑  𝑡𝑜 𝑎𝑑𝑚𝑖𝑠𝑠𝑖𝑜𝑛 𝑝𝑟𝑜𝑐𝑒𝑠𝑠...</h4></span>
    </div>

</div>



@endsection