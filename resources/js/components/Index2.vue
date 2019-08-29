<template>
    <div class="main-header" >
        <header >
            <nav>
                <ul class="brand">
                    <li>
                        <a href="#">MODIST</a>
                    </li>

                </ul>
                <ul class="nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>

                </ul>
            </nav>

        </header>



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
.main-header{
    background-image: url('/images/bg2.jpg') !important ;

    /* background-repeat: no-repeat; */
    /* background-size: cover; */
    /* height:100% !important; */
    /* width: 100%; */
}
header nav ul li a {
    text-decoration: none !important;
     padding: 0px 0px !important;
}
.brand{
    margin-top:45px !important;
}
.brand li a{
    color:rgba(0, 0, 0, 0.295) !important;
    padding-left: 300px !important;
}
.nav{
    float: right;
}
.nav li a {
    padding-right: 100px !important;
}

</style>

