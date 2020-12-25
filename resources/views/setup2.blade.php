@extends('layouts.master')
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

                            	<div>
                            		<form>
                            			<div class="row g-3" id="step1">
                            				 <div class="col-auto">
    <label for="staticEmail2" class="visually-hidden">Enter Your Date Of Birth</label>
  
  </div>
  <div class="col-auto">
   
    <input type="date" class="form-control" id="dob">
  </div>
  <div class="col-auto">
    <!--<button type="submit" class="btn btn-primary mb-3" id="continue1">Continue</button>-->
</div>
  </div>
                            			</div>
                            			<div class="row g-3" id="step2">
                            				
                            				
                            					<div class="col">
                            						<label>Are You US Green Card Holder?</label>
    </div>
    <div class="col">
        <input type="radio" class="service" name="question2" id="yesRadio" value="yes" >
         <label class="form-check-label" for="exampleRadios1">
    yes
  </label>
    </div>
    <div class="col">
        <input  type="radio" class="service" name="question2" id="noRadio" value="no">
         <label class="form-check-label" for="exampleRadios1">
    No
  </label>
                            						
                            					</div> 
                            					<div class="col">

                            						 <!-- <button type="submit" class="btn btn-primary mb-3" id="continue2">Continue</button>-->
                            					</div>
                            						
                            					</div>
                            				</div>
                            			</div>

                            		</form>
                            	</div>
                                
    
 

                            </div>
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
	  $(document).ready(function() {


	  	 //$("#continue1").attr("disabled", true);
	  	 $("#step2").css({"display":"none"});

	  	 $("#dob").on("change",function(){

	  	 	var dob = $("#dob").val();
	  	 	dobirth = new Date(dob);
	  	 	var today = new Date();
	  	 	var age = Math.floor((today-dobirth) / (365.25 * 24 * 60 * 60 * 1000));
	  	 	if (age>18) {

	  	 		
	  	 		$("#step2").css({"display":""});

	  	 	}else{

	  	 		Swal.fire('You are eligible');
	  	 	}

	  	 });
	  	
	  	  	
	  });
</script>
@endsection