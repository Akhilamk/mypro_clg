 @extends('headfoot') @section('content')
<header class="page-heading clearfix">
    <h2 class="heading-title float-left" style="text-align: center;">𝙾𝚞𝚛 𝙵𝚊𝚚𝚞𝚕𝚝𝚒𝚎𝚜</h2>
    <br>
    <hr><br>
    <div class="page-content" style="background-color: blanchedalmond;">
        <div id="gallery-album" class="gallery-album row page-row">

            <div class="item col-md-3 col-6">
                <a href="">
                    <img class="img-fluid" src="{{url('images/staff1.jpg')}}" alt="">
                </a>
                <h6 style="font-family: cursive; ">ANUPAMA.V <br>HOD(Cs Dpt)</h6>
            </div><br>
            <div class="item col-md-3 col-6">
                <a href="">
                    <img src="{{url('images/staff5.jpg')}}" class="st1" alt="">
                </a>
                <h6 style="font-family: cursive; ">WILLIAM <br>HOD(Eng Dpt)</h6>
            </div><br>
            <div class="item col-md-3 col-6">
                <a href="">
                    <img src="{{url('images/staff3.jpg')}}" class="st1" alt="">
                </a>
                <h6 style="font-family: cursive; ">HEMA.KP <br>HOD(Commerce Dpt)</h6>
            </div><br>
            <div class="item col-md-3 col-6">
                <a href="">
                    <img src="{{url('images/staff2.jpg')}}" class="st1" alt="">
                </a>
                <h6 style="font-family: cursive; ">ASWIN.R<br>Asst.Professor(Cs Dpt)</h6>
            </div><br>
            <div class="item col-md-3 col-6">
                <a href="">
                    <img src="{{url('images/staff4.jpg')}}" class="st1" alt="">
                </a>
                <h6 style="font-family: cursive; ">SWATHY <br>Asst.Professor(Eng Dpt)</h6>
            </div><br>

            <div class="item col-md-3 col-6">
                <a href="">
                    <img src="{{url('images/staff6.jpg')}}" class="st1" alt="">
                </a>
                <h6 style="font-family: cursive;">KIRAN<br>Asst.Professor(Com Dpt)</h6>
            </div><br>
            <div class="item col-md-3 col-6">
                <a href="">
                    <img src="{{url('images/staff8.jpg')}}" class="st1" alt="">
                </a>
                <h6 style="font-family: cursive;">ANU.KP<br>Asst.Professor(Cs Dpt)</h6>
            </div><br>
            <div class="item col-md-3 col-6">
                <a href="">
                    <img src="{{url('images/staff7.jpg')}}" class="st1" alt="">
                </a>
                <h6 style="font-family: cursive; ">RAHUL<br>Asst.Professor(Eng Dpt)</h6>
            </div><br>
            <div class="item col-md-3 col-6">
                <a href="">
                    <img src="{{url('images/staff9.jpg')}}" class="st1" alt="">
                </a>
                <h6 style="font-family: cursive;">JASNA<br>Asst.Professor(Com Dpt)</h6>
            </div><br>

        </div>
    </div>
    </div>

    @endsection