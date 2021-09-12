
@extends('headfoot') @section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <h2 class="page-title" style="text-align: center;">Faculty Dashboard</h2>
    <hr>
    <div class="row">
        <div class="col-lg-1 d-none d-lg-block" style="height: 300px; background-color: white; ">
        </div>&nbsp;
        <div id="div1" class="col-lg-3" style="height: 300px; background-color: rgb(209, 188, 229); border-radius: 20px;">
            <img src="{{url('images/icon1.png')}}" alt="" style="width: 100px; margin-left: 100px;"><br>
            <h3 style="text-align: center;">𝑷𝒓𝒐𝒇𝒊𝒍𝒆</h3><br>
            <a href="staffdashprofile" style="color: black; font-size: larger; margin-left: 100px;"><b>𝙻𝚎𝚊𝚛𝚗 𝙼𝚘𝚛𝚎 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
              </svg></b> </a>
        </div>&nbsp;
        <div class="col-lg-3" style="height: 300px; background-color: aquamarine; border-radius: 20px;">
            <img src="{{url('images/icons2.png')}}" alt="" style="width: 100px; margin-left: 100px; ">
            <h3 style="text-align: center;"> 𝑨𝒕𝒕𝒆𝒏𝒅𝒂𝒏𝒄𝒆</h3><br>
            <a href="statd" style="color: black; font-size: larger; margin-left: 100px;"><b>𝙻𝚎𝚊𝚛𝚗 𝙼𝚘𝚛𝚎 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
              </svg></b> </a>
        </div>&nbsp;

        <div class="col-lg-3" style="height: 300px; background-color: rgb(236, 155, 109); border-radius: 20px;">
            <img src="{{url('images/icon3.png')}}" alt="" style="width: 100px; margin-left: 100px;">
            <h3 style="text-align: center;"> 𝑺𝒕𝒖𝒅𝒆𝒏𝒕 𝑨𝒕𝒕𝒆𝒏𝒅𝒂𝒏𝒄𝒆 </h3><br>
            <a href="" style="color: black; font-size: larger; margin-left: 100px;"><b>𝙻𝚎𝚊𝚛𝚗 𝙼𝚘𝚛𝚎 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
              </svg></b> </a>
        </div>




    </div><br>
    <div class="row">
        <div class="col-lg-1 d-none d-lg-block" style="height: 300px; background-color: white; ">
        </div>&nbsp;
        <div id="div1" class="col-lg-3" style="height: 300px; background-color: rgb(245, 130, 168); border-radius: 20px;">
            <img src="{{url('images/icon4.png')}}" alt="" style="width: 100px; margin-left: 100px;"><br>
            <h3 style="text-align: center;">𝑺𝒚𝒍𝒍𝒂𝒃𝒖𝒔</h3><br>
            <a href="" style="color: black; font-size: larger; margin-left: 100px;"><b>𝙻𝚎𝚊𝚛𝚗 𝙼𝚘𝚛𝚎 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
              </svg></b> </a>
        </div>&nbsp;
        <div id="div1" class="col-lg-3" style="height: 300px; background-color: rgb(164, 255, 89); border-radius: 20px;">
            <img src="{{url('images/icon5.png')}}" alt="" style="width: 100px; margin-left: 100px;"><br>
            <h3 style="text-align: center;">𝑨𝒄𝒂𝒅𝒆𝒎𝒊𝒄 𝑨𝒄𝒕𝒊𝒗𝒊𝒕𝒊𝒆𝒔</h3><br>
            <a href="" style="color: black; font-size: larger; margin-left: 100px;"><b>𝙻𝚎𝚊𝚛𝚗 𝙼𝚘𝚛𝚎 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
              </svg></b> </a>
        </div>&nbsp;
    </div>
    <script>
        $(document).ready(function() {
            $('.row').slideDown(2000);
        })
    </script>
        @endsection

    