<template>
    <div class="container">
      <div class="card-body">
                                    <div class="step1">
                                    <h5 class="card-title">Age</h5>
                                    <p class="card-text"> What is your DOB</p>
                                    <form action="">
                                        <div>
                                            <label for="dob">Date of Birth</label>
                                            <input  type="date" name="dob" id="dob">
                                        </div>
                                    </form>

                                    <a id="calDob" type="button" class="btn btn-danger">Continue</a>
                                    </div>
                                    
                                </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
