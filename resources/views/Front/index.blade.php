@extends('Front.layout')
@section('content')



<!--::review_part start::-->
<section class="special_cource padding_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="section_tittle text-center">
                    <p>popular courses</p>
                    <h2>Special Courses</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($courses as $c)
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="{{asset('uploads/courses/'.$c->image)}}" class="special_img " alt="">
                        <div class="special_cource_text">
                            <a href="{{ route('front.category', $c->category->id)}}" class="btn_4">{{$c->category->name}}</a>
                            <h4>${{ $c->price }}</h4>
                            <a href="{{ route('front.show',[$c->category->id, $c->id] )}}"><h3>{{ $c->name }}</h3></a>
                            <p>{{ $c->desc }}</p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src="{{asset('uploads/trainer/'.$c->trainer->img)}}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5>{{ $c->trainer->name }} </h5>
                                    </div>
                                </div>
                        </div>

                    </div>
                </div>
        </div>
            @endforeach


        </div>
    </div>
</section>
<!--::blog_part end::-->



<!-- member_counter counter start -->
<section class="member_counter">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="single_member_counter">
                    <span class="counter">{{ $courses_count }}</span>
                    <h4>Courses</h4>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_member_counter">
                    <span class="counter">{{ $trainers_count }}</span>
                    <h4>Trainers</h4>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_member_counter">
                    <span class="counter">{{ $students_count }}</span>
                    <h4>Students</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- member_counter counter end -->




<!-- footer part start-->
@endsection
