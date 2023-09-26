@extends('layouts.all')

@section('content')
<!-- contact section start -->
<div class="contact_section layout_padding">
    <div class="container-fluid">
      <h1 class="ballet_text">Testimonial</h1>
      <p class="amet_text">amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore </p>
      <div class="contact_section2">
        <div class="row">
          <div class="col-md-6 padding_left_0">
            <div class="mail_section">
            <form action="/join" method="post">
                @csrf
              <input type="text" class="mail_text" placeholder="Name" name="Name">
              <input type="text" class="mail_text" placeholder="Phone Number" name="Phone">
              <input type="text" min="14" max="14" class="mail_text" placeholder="National ID" name="ID">
              <input type="email" class="mail_text" placeholder="Email" name="Email">
              <input type="text" class="mail_text" placeholder="What's Up" name="what">
              <select name="dance" class="mail_text">
                <option value="Hip Hop Dance" selected>Hip Hop Dance</option>
                <option value="Ballet">Ballet</option>
                <option value="Break Dance">Break Dance</option>
                <option value="Salsa">Salsa</option>
                <option value="Tab Dancing">Tab Dancing</option>
              </select>
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
