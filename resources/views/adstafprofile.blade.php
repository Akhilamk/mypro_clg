 @extends('headfoot') @section('content')

<div class="container-fluid ">
    <div class="row">
        <div class="col-lg-3 col-sm-12 col-xs-12 col-md-12" style=" background-color: cornflowerblue;"><br>

            <button type="button" class="btn btn-link" style="color: rgb(19, 3, 77); font-style: oblique;font-size: larger;"> <b>Staff Attendance</b> </button>
        </div>
        <div class="col-lg-9 col-sm-12 col-xs-12 col-md-12" style=" background-color: rgb(169, 169, 169);">
            <h3 style="text-align: center;font-family: Georgia, 'Times New Roman', Times, serif; font-style: oblique;">Our Faculties</h3>
            <hr>
            <div id="grid">

                <div><img src="{{url('images/staff1.jpg')}}" class="st1" alt="">
                    <h6 style="font-family: cursive; text-align: center;">ANUPAMA.V <br>HOD(Cs Dpt)</h6>
                    <a href="" style="margin-left: 70px; color: rgb(6, 6, 151);">Details</a>
                </div>
                <div><img src="{{url('images/staff5.jpg')}}" class="st1" alt="">
                    <h6 style="font-family: cursive; text-align: center;">WILLIAM <br>HOD(Eng Dpt)</h6>
                    <a href="" style="margin-left: 70px; color: rgb(6, 6, 151);">Details</a>
                </div>
                <div><img src="{{url('images/staff3.jpg')}}" class="st1" alt="">
                    <h6 style="font-family: cursive; text-align: center;">HEMA.KP <br>HOD(Commerce Dpt)</h6>
                    <a href="" style="margin-left: 70px; color: rgb(6, 6, 151);">Details</a>
                </div>
                <div><img src="{{url('images/staff2.jpg')}}" class="st1" alt="">
                    <h6 style="font-family: cursive; text-align: center;">ASWIN.R<br>Asst.Professor(Cs Dpt)</h6>
                    <a href="" style="margin-left: 70px; color: rgb(6, 6, 151);">Details</a>
                </div>
                <div><img src="{{url('images/staff4.jpg')}}" class="st1" alt="">
                    <h6 style="font-family: cursive; text-align: center;">SWATHY <br>Asst.Professor(Eng Dpt)</h6>
                    <a href="" style="margin-left: 70px; color: rgb(6, 6, 151);">Details</a>
                </div>
                <div><img src="{{url('images/staff6.jpg')}}" class="st1" alt="">
                    <h6 style="font-family: cursive; text-align: center;">KIRAN<br>Asst.Professor(Com Dpt)</h6>
                    <a href="" style="margin-left: 70px; color: rgb(6, 6, 151);">Details</a>
                </div>
                <div><img src="{{url('images/staff8.jpg')}}" class="st1" alt="">
                    <h6 style="font-family: cursive; text-align: center;">ANU.KP<br>Asst.Professor(Cs Dpt)</h6>
                    <a href="" style="margin-left: 70px; color: rgb(6, 6, 151);">Details</a>
                </div>
                <div><img src="{{url('images/staff7.jpg')}}" class="st1" alt="">
                    <h6 style="font-family: cursive; text-align: center;">RAHUL<br>Asst.Professor(Eng Dpt)</h6>
                    <a href="" style="margin-left: 70px; color: rgb(6, 6, 151);">Details</a>
                </div>
                <div><img src="{{url('images/staff9.jpg')}}" class="st1" alt="">
                    <h6 style="font-family: cursive; text-align: center;">JASNA<br>Asst.Professor(Com Dpt)</h6>
                    <a href="" style="margin-left: 70px; color: rgb(6, 6, 151);">Details</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection