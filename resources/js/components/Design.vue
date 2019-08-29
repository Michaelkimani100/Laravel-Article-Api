<template>
    <div class="container-fluid">
        <div class="row ">
            <div class="col col-lg-12">
                  <nav class="navbar navbar-light bg-transparent">
                <a class="navbar-brand"><span class="text-yellow text" id="t1">Food</span><span class="text-white text" id="t2">picky</span></a>
                <form class="form-inline">
                    <button class="btn btn-sm btn-outline-secondary">Login</button>
                    <button class="btn btn-sm btn-outline-secondary ">Signup</button>

                </form>

            </nav>


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
<style>
header{
    width: 90%;
}
.form{
    float:right !important;
}
.text{
      font-weight: 700;
    font-size: 1.5em;
    font-family: 'Times New Roman', Times, serif;
}
.col{
    background-image: url(/images/bg2.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    height:100% !important;
    width: 100%;

}




</style>
