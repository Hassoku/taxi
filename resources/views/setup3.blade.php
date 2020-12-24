@extends('layouts.master')
@section('style')
<style>
.form-section {
  position: absolute;
  padding-left: 15px;
  border-left: 2px solid #FF851B;
  visibility:hidden;
  opacity:0;
  transition: opacity 1.75s ;
   -moz-transition: opacity 1.75s ;
   -webkit-transition: opacity 1.75s ;
}
.form-section.current {
 position: relative;
  visibility:visible;
  opacity:1;
  transition: opacity 1.75s ease-in-out;
   -moz-transition: opacity 1.75s ease-in-out;
   -webkit-transition: opacity 1.75s ease-in-out;
}
.btn-info, .btn-default {
  margin-top: 10px;
}
html.codepen body {
  margin: 1em;
}
.form-navigation{
 transition: all 1.75s ease-in-out;
   -moz-transition: all 1.75s ease-in-out;
   -webkit-transition: all 1.75s ease-in-out; 
}
</style>

@endsection
@section('content')
    <!--begin section-white -->
    <section class="section-white" id="services" style="padding:inherit;">
        <!--begin services-wrapper -->
        <div class="services-wrapper">
         
           
                <!--begin row -->
                <div class="row">

                    <!--begin col-md-4 -->
                    <div class="col-md-3" style="background: #f4f5f5;height: 516px;">

                    </div>
                    <div class="col-md-6">

                        <h2 class="section-title text-center">How it works</h2>
                        <p class="section-subtitle text-center">Quis autem velis ets reprehender net etid quiste voluptate.</p>
                        
                        <div class="main-services">

                            <i class="pe-7s-medal"></i>
        

                            <h4>Eligibility</h4>

                            <p>
                            </p>
                            <div class="card" style="" id="dobDiv">
      <form class="demo-form">
  <div class="form-section">
    <label for="firstname">First Name:</label>
    <input type="text" class="form-control" name="firstname" required="">

    <label for="lastname">Last Name:</label>
    <input type="text" class="form-control" name="lastname" required="">
  </div>

  <div class="form-section">
    <label for="email">Email:</label>
    <input type="email" class="form-control" name="email" required="">
  </div>

  <div class="form-section">
    <label for="color">Favorite color:</label>
    <input type="text" class="form-control" name="color" required="">
  </div>

  <div class="form-navigation">
    <button type="button" class="previous btn btn-info pull-left">&lt; Previous</button>
    <button type="button" class="next btn btn-info pull-right">Next &gt;</button>
    <input type="submit" class="btn btn-default pull-right">
    <span class="clearfix"></span>
  </div>

</form>                      </div>
                        </div>
                    </div>
                    <!--end col-md-4 -->
                    <div class="col-md-3" style="background: #f4f5f5;">

                    </div>

                </div>
                <!--end row -->
        </div>
        <!--end services-wrapper -->
    </section>
    <!--end section-white -->
@endsection
@section('scripts')
<script type="text/javascript">
 $(function () {
  var $sections = $('.form-section');

  function navigateTo(index) {
    // Mark the current section with the class 'current'
    $sections
      .removeClass('current')
      .eq(index)
        .addClass('current');
    // Show only the navigation buttons that make sense for the current section:
    $('.form-navigation .previous').toggle(index > 0);
    var atTheEnd = index >= $sections.length - 1;
    $('.form-navigation .next').toggle(!atTheEnd);
    $('.form-navigation [type=submit]').toggle(atTheEnd);
  }

  function curIndex() {
    // Return the current index by looking at which section has the class 'current'
    return $sections.index($sections.filter('.current'));
  }

  // Previous button is easy, just go back
  $('.form-navigation .previous').click(function() {
    navigateTo(curIndex() - 1);
  });

  // Next button goes forward iff current block validates
  $('.form-navigation .next').click(function() {
    if ($('.demo-form').parsley().validate('block-' + curIndex()))
      navigateTo(curIndex() + 1);
  });

  // Prepare sections by setting the `data-parsley-group` attribute to 'block-0', 'block-1', etc.
  $sections.each(function(index, section) {
    $(section).find(':input').attr('data-parsley-group', 'block-' + index);
  });
  navigateTo(0); // Start at the beginning
});



  // from textBoxes.html
  function sayHi(){
  var txtName = document.getElementById("txtName");
  var txtOutput = document.getElementById("txtOutput");
  var name = txtName.value;
  txtOutput.value = "Hi there, " + name + "! Could you pop your email address below?"
  } // end sayHi

</script>

@endsection
