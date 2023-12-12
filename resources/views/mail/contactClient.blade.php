@extends("template.mail.templateMail")
@section("title")
Formulaire de contact
@endsection
@section("content")

<div class="container mt-5">
    <!-- Success message -->
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif
    <form action="" method="post" action="{{ route('contact.store') }}">
        <!-- CROSS Site Request Forgery Protection -->
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" id="name">
            <!-- Error -->
        @if ($errors->has('name'))
        <div class="error">
            {{ $errors->first('name') }}
        </div>
        @endif
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" id="email">
            @if ($errors->has('email'))
            <div class="error">
                {{ $errors->first('email') }}
            </div>
            @endif
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control" name="phone" id="phone">
            @if ($errors->has('phone'))
        <div class="error">
            {{ $errors->first('phone') }}
        </div>
        @endif
        </div>
        <div class="form-group">
            <label>Subject</label>
            <input type="text" class="form-control" name="subject" id="subject">
            @if ($errors->has('subject'))
        <div class="error">
            {{ $errors->first('subject') }}
        </div>
        @endif
        </div>
        <div class="form-group">
            <label>Message</label>
            <textarea class="form-control" name="message" id="message" rows="4"></textarea>
            @if ($errors->has('message'))
            <div class="error">
                {{ $errors->first('message') }}
            </div>
            @endif
        </div>
        <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
    </form>
</div>

{{--
<script type="text/javascript">
    $(".btn-refresh").click(function(){
      $.ajax({
         type:'GET',
         url:'/refreshcaptcha',
         success:function(data){
            $(".captcha span").html(data.captcha);
         }
      });
    });


</script> --}}
@endsection
