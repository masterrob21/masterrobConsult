@extends('layouts.app')

@section('style')
<style>
  form{
    background-color: white;
    padding: 20px;

  }

  img{
    width: 100%;
    object-fit: cover
    

  }

  .wrapper{
    height: 30rem;
  }

 
</style>
@endsection

@section('banner')
<div class="banner_container">
  <h1>Contact us</h1>
</div>
@endsection

@section('content')
<div class="container my-5" >
  <div >
    <div class="row">
      <h2 class="text-primary">Send us a message</h2>
      <div class="col-md-6">
        <form class="wrapper" action="https://formspree.io/f/xaygokqk" method="POST"  >
          <div class="form-group">
            <label for="fullname">Name</label>
            <input type="text" class="form-control" id="fullname" name="fullname" required>
          </div>
    
          <div class="form-group mt-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="form-group mt-3">
            <label for="phone">Phone #</label>
            <input type="number" class="form-control" placeholder="eg. 233" id="phone" name="phone" required>
          </div>
          <div class="form-group mt-3">
            <label for="message" class="control-label">Message</label>
            <textarea name="message" id="message" cols="30" rows="5" class="form-control" required></textarea>
          </div>
          <div class="mt-3"><button type="submit" class="btn btn-outline-primary">Submit</button></div>
        </form>
      </div>
      <div class="col-md-6" >
        <div >
          <img class="wrapper" src="/images/contact_image.jpg" alt="media image">
        </div>
      </div>
    </div>
  </div>
</div>
@endsection