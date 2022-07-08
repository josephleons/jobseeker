{{-- footer here!! --}}
<style>
    p {
        color: white;
        padding-top: 20px;
        text-transform: capitalize;
        font-family: sans-serif;
        text-align: center;
    }

    /* #2E3C51 */
    /* 30BCED */

    .footer {
        background-color: #2E3C51;

    }

    /* color:#F56565; */
</style>
<div class="footer w-auto p-3">
    <div class="row">
        <div class="col-md-2 p-5">
            <h3 class="fs-2" style="padding-top:30px;color:white;font-weight:20em">{{config('app.name','JOBSEK')}}</h3>
        </div>
        {{-- //top left appname --}}
        <div class="col-3">
            <div class="row">
                <p class="fs-4">About</p>
                <div class="col-2">
                    <div class="d-flex" style="height: 100px;">
                        <div class="vr text-white"></div>
                    </div>
                    {{-- p-text --}}
                </div>
                <div class="col-md-10">
                    <p>Lorem ipsum dolor sit amet consectetur facilis magni molestias.
                        soluta reiciendis enim quia nemo cumque delectus modi, sit dicta ea </p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="row">
                <p class="fs-4 ">Contact Us</p>
                <div class="col-2">
                    <div class="d-flex" style="height: 100px;">
                        <div class="vr text-white"></div>
                    </div>
                    {{-- p-text --}}
                </div>
                <div class="col-md-10 fs-6">
                    <p>Lorem ipsum dolor sit amet consectetur facilis magni molestias.
                        soluta reiciendis enim quia nemo cumque delectus modi, sit dicta ea </p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="row">
                <p class="fs-4">Share with Us on:</p>
                <div class="col-2">
                    <div class="d-flex" style="height: 100px;">
                        <div class="vr text-white"></div>
                    </div>
                    {{-- p-text --}}
                </div>
                <div class="col-md-10 p-5">
                    <section class="mb-4">
                        <!-- Facebook -->
                        <a class="m-1" href="#!"><i class="bi bi-facebook"></i></a>
                        <!-- Twitter -->
                        <a class="m-1" href="#!"><i class="bi bi-twitter"></i></a>
                        <!-- Google -->
                        <a class="m-1" href="#!"><i class="bi bi-google"></i></a>
                        <!-- Instagram -->
                        <a class="m-1" href="#!"><i class="bi bi-instagram"></i></a>
                        <!-- Linkedin -->
                        <a class="m-1" href="#!"><i class="bi bi-linkedin"></i></a>
                        <!-- Github -->
                        <a class="m-1" href="#!"><i class="bi bi-github"></i></a>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="text-white text-center p-3">
            © 2022 Copyright:
            <a class="text-white" href="http://jobseek.com/">Jobseek@ajira.go.tz</a>
        </div>
    </div>
</div>