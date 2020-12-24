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
                                <div id="smartwizard">
    <ul class="nav">
       <li>
           <a class="nav-link" href="#step-1">
              Step 1
           </a>
       </li>
       <li>
           <a class="nav-link" href="#step-2">
              Step 2
           </a>
       </li>
       <li>
           <a class="nav-link" href="#step-3">
              Step 3
           </a>
       </li>
       <li>
           <a class="nav-link" href="#step-4">
              Step 4
           </a>
       </li>
         <li>
           <a class="nav-link" href="#step-5">
              Step 5
           </a>
       </li>
    </ul>-
 
    <div class="tab-content">
       <div id="step-1" class="tab-pane" role="tabpanel">
          <form>
  <div class="row">
    <div class="col">
     <label>Enter Your Date Of Birth</label>
    </div>
    <div class="col">
      <input type="date" class="form-control" name="dob" id="dob">
    </div>
    <div class="col">
        <a type="button" class="btn btn-primary" id="checkAgeBtn">check</a>
          </div>
  </div>
</form>
       </div>
       <div id="step-2" class="tab-pane" role="tabpanel">
          <form>
  <div class="row">
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
  </div>
</form>
       </div>
       <div id="step-3" class="tab-pane" role="tabpanel">
          <div class="row">
              <div class="col">
                <label>When did you become US green card holder?</label>
                  <input type="date" name="greenCard" id="greenCard">
                  <a type="button" class="btn btn-danger" id="greenCardbtn">Check Eligibility</a>
                  
              </div>
          </div>
       </div>
       <div id="step-4" class="tab-pane" role="tabpanel">
          <div>
            <form>
              <div class="row">
                <div class="col">
                   <label>When did you get married to US Citizen?</label>
                  <input type="date" name="maritalStatus" id="maritalStatus">
                  <a type="button" class="btn btn-danger" id="maritalStatusbtn">Check Eligibility</a>
                  
                </div>
              </div>
            </form>
            
          </div>
       </div>
        <div id="step-5" class="tab-pane" role="tabpanel">
          <form>
              <div class="row">
                <div class="col">
                   <label>When did your spouse become US citizen?</label>
                  <input type="date" name="citizenshipDate" id="citizenshipDate">
                  <a type="button" class="btn btn-danger" id="citizenshipDatebtn">Check Eligibility</a>
                  
                </div>
              </div>
            </form>
        </div>
    </div>
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

    $('#smartwizard').smartWizard(
      
    

 

    );

});
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    $(document).ready(function () {


        $("#checkAgeBtn").on('click', (function () {
           
           var dob = $("#dob").val();
          
            $.ajax({
                url: '/step1',
                type: "POST",
                data: {dob: dob},
                dataType: 'json',
                
                success: function (data) {
                   
                    
                   console.log(data)
                    if (data < 18) {
                        Swal.fire('Please Proceed To Next Step')
                      
                       
                   
                      
                    }else{
                        const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: 'Are you sure?',
  text: "You Are Member Of US Armed Force!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes',
  cancelButtonText: 'No, cancel!',
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {
    swalWithBootstrapButtons.fire(
      'Success!',
      'Please proceed to next step.',
      'success'
    )
  } else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire(
      'Cancelled',
      'You are not eligible :)',
      'error'
    )
  }
})


  



                        
                    }
                    $("#formeditpabtn").button('reset');
                },
               
            });
        }));
    });
   
        $(".service").change(function() {
          var confirm = $(".service:checked").val();

          if (confirm == "yes") {
            Swal.fire("yuo are eligible proceed to next question");
          }else if(confirm == "no"){
             Swal.fire("yuo are not eligible");

          }
          $.ajax({
      url: '/step2',
      type: "POST",
      data: {green_card_holder: confirm},
      dataType: 'json',
      success:function(data){
        console.log(data);
       

      }

  });
});


 
$('#greenCardbtn').on('click', function() {
  var dor = $('#greenCard').val();


console.log(green_card_holder);
            $.ajax({
                url: '/step3',
                type: "POST",
                data: {dor: dor, green_card_holder: green_card_holder},
                dataType: 'json',
                success:function(data){
                    console.log(data)
                   if (data >=36 ) {
                              const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: 'Are you sure?',
  text: "Are You Currently Married To A US Citizen?",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes',
  cancelButtonText: 'No',
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {
    swalWithBootstrapButtons.fire(
      'Success!',
      'please proceed to next step.',
      'success'
    )
  } else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
   Swal.fire({
  title: 'Are you sure?',
  text: "Are You Member Of US Armed Forces, an employee of US research institute, Engage in foriegn trade,Or Religious Worker!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      
      'Proceed To Next Step.',
      'success'
    )
  }
})
  }
})
                    
                   }else if(data <= 60 ){
                    Swal.fire('Yor Are Eligible')

                   }else{
                    Swal.fire("yor not Eligible")
                   }
                }
                });




});



$('#maritalStatusbtn').on('click', function() {
  var dom = $('#maritalStatus').val();
  $.ajax({
      url: '/step4',
      type: "POST",
      data: {dom: dom},
      dataType: 'json',
      success:function(data){
        console.log(data)
        if (data == 36) {
          Swal.fire('Proceed To Step')
        }else{
          Swal.fire('You are not Eligible');
        }

      }

  });


});
$('#citizenshipDatebtn').on('click', function() {
  var doc = $('#citizenshipDate').val();
  $.ajax({
      url: '/step5',
      type: "POST",
      data: {doc: doc},
      dataType: 'json',
      success:function(data){
        console.log(data);
        if (data >= 36) {
          Swal.fire('You Are Eligible')
        }else{
          Swal.fire('You are not Eligible');
        }

      }

  });


});


</script>

@endsection
