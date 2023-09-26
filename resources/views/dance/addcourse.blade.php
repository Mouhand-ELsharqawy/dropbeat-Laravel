@extends('layouts.all')

@section('content')
<!-- contact section start -->
<div class="contact_section layout_padding">
    <div class="container-fluid">
     
      <div class="contact_section2">
        <div class="row">
          <div class="col-md-6 padding_left_0">
            <div class="mail_section">
            <form action="/addcourse" method="Post">
                @csrf
              <input type="text" class="mail_text" placeholder="Name" name="name">
              <input type="time" class="mail_text" placeholder="Starting Time" name="strat_time">
              <input type="time" class="mail_text" placeholder="End Time" name="end_time">
              <button class="send_bt" type="submit"> send </button> 
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- contact section end -->
@endsection
