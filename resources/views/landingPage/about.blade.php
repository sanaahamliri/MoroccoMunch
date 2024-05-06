@extends('layouts.navbar')

@section('content')


<div class="page-header mb-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>About Us</h2>
            </div>
            <div class="col-12">
                <a href="">Home</a>
                <a href="">About Us</a>
            </div>
        </div>
    </div>
</div>







<div id="dd" class="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img">
                    <img src="img/about.jpg" alt="Image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <div class="section-header">
                        <p>About Us</p>
                        <h2>traditional Moroccan dishes</h2>
                    </div>
                    <div class="about-text">
                        <p>
                            MoroccoMunch aims to revolutionize the Moroccan culinary scene by providing an innovative platform where amateur chefs can freely showcase their talents, while food enthusiasts discover a diverse array of authentic dishes. Join our vibrant online community today and indulge in a culinary journey that celebrates the richness of Moroccan gastronomy while supporting local economy. </p>

                    </div>
                    <a class="btn custom-btn" href="">Join Us</a>

                </div>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer">

    <div class="copyright">
        <div class="container">
            <p>Copyright &copy; <a href="#">Morocco Munch</a>, All Right Reserved.</p>
            <p>Designed By <a>Hamliri Sanae</a></p>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script src="js/main.js"></script>
@endsection