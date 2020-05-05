@extends('layouts.app')

@section('title',' - Contact')

@section('content')
<!-- To hero ths selidas me ton titlo -->
<section class="bgimage">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h1>Contact</h1>
      </div>
    </div>
  </div>
</section>
<div class="container" style="margin-bottom:4% !important;">
  <div class="row">
    <!-- H forma tou contact -->
    <div class="col-md-7">
      <h4>Fill the form below to submit your message:</h4>
      <br>
      <form id="contact_form">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="email_input" aria-describedby="emailHelp">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputText">Message</label>
          <textarea class="form-control" id="message_input" rows="3"></textarea>
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">I want to receive emails for new products</label>
        </div>
        <button type="submit" class="btn btn-primary" id="submit_button_form">Submit</button>
      </form>
    </div>
    <!-- H lista me ta stoixeia epikoinwnias -->
    <div class="col-md-5 col-sm-12 col-xs-12" id="contact_list">
      <ul class="fa-ul">
        <li><span style="width: 3.14285714em;" class="fa-li"><i class="fa fa-map-marker"></i></span><label>Celeste Slater
        606-3727 Ullamcorper</label></li>
        <li id="srdli"><span style="width: 3.14285714em;" class="fa-li"><i class="fa fa-envelope-o"></i></span><label>info@lorem.com</label></li>
        <li id="frdli"><span style="width: 3.14285714em;" class="fa-li"><i class="fa fa-globe"></i></span><label>twitter.com/LoremOfficial</label></li>
        <li id="trdli"><span style="width: 3.14285714em;" class="fa-li"><i class="fa fa-mobile"></i></span><label>+66 859038213</label></li>
      </ul>
    </div>
  </div>
</div>
<!-- To google map -->
<iframe id="contact_map" width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJxZZwR28JvUcRAMawKVBDIgQ&key=AIzaSyDajbn3k4UTno2iwTGgv-0htSPM1RSmWFM&zoom=15" allowfullscreen></iframe>
@endsection
