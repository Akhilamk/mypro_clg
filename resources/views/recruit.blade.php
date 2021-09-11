
   
@extends('headfoot') @section('content')
    <h4 style="background-color: rgb(175, 228, 225); text-align: center;"><b>𝙲𝚊𝚖𝚙𝚞𝚜 𝚁𝚎𝚌𝚛𝚞𝚒𝚝𝚖𝚎𝚗𝚝</b> </h4>
    <div class="row">
        <div class="col-lg-8 col-sm-12 col-xs-12 col-md-12" style=" height: 500px;">
            <div class="container-content"> <img src="{{url('images/recrt.png')}}" width="400px" alt="">
                <h3 style="background-color: yellow;">
                    <marquee behavior="" direction=""> ℂ𝕒𝕞𝕡𝕦𝕤 𝕕𝕣𝕚𝕧𝕖 𝕗𝕠𝕣(𝔹ℂ𝔸 & 𝔹𝕊ℂ 𝟚𝟘𝟚𝟘 𝔽𝕣𝕖𝕤𝕙𝕖𝕣) </marquee>
                </h3>
                <h4 class="rct" style="background-color: blanchedalmond;">Our focus is placing quality students in corporate</h4>
            </div>

        </div>
        <div class="col-lg-4 col-sm-12 col-xs-12 col-md-12" style="background-color: rgb(237, 221, 241); height: 500px;">
            <form method="get" align="center">
                <table class="recrt" cellspacing="10px" cellpadding="10px" align="center" width="200px"><br><br>
                    <tr>
                        <td><u style="font-size: larger;"> 𝔏𝔬𝔤𝔦𝔫<br><br><img src="{{url('images/loginrct.png')}}"  width="40px"></u></td>

                    </tr>
                    <tr>
                        <td><input class="inputcrt" type="text" placeholder="UserName"></td>
                    </tr>
                    <tr>
                        <td><input class="inputcrt" type="password" placeholder="Password"></td>
                    </tr>
                    <tr>
                        <td><b><button class="btn btn-success">LOGIN</b></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            New Student?
                            <a href="">Register Now</a>
                        </td>
                    </tr>
                </table>

            </form>
        </div>
    </div>
    @endsection
    
    