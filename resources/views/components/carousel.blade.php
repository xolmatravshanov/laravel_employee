<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img style="height: 400px" class="d-block w-100" src="https://images.unsplash.com/photo-1611896154563-70f0a227013a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="First slide">
            <a href="#">
                <h1>Lorem ipsum dolor sit amet.</h1>
            </a>
        </div>
        @foreach($items as $key => $img)
            <div class="carousel-item">
                <img style="height: 400px" class="d-block w-100" src="{{ $img }}" alt="First slide">
                <a href="{{ $key }}">
                    <h1>Lorem ipsum dolor sit amet.</h1>
                </a>
            </div>
        @endforeach

    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
