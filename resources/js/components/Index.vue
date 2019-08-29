<template>
    <div class="container">
        <header>
            <nav>
                <ul class="brand">
                    <li>
                        <a href="#">MY.WORK</a>
                    </li>
                </ul>
                <ul >
                        <li><a href="#">Plans</a></li>
                        <li><a href="#">Aims</a></li>
                        <li><a href="#">Management</a></li>
                        <li><a href="#">About</a></li>
                </ul>
            </nav>
            <div class="container">
                <div class="item content">
                  <h2>Adventure</h2>
                  <p>s. Confluence® Is the Team Collaboration Software That Changes How Modern Teams Work. 1K Add Ons & Integrations.</p>
                  <button class="btn">Start your adventure</button>
                </div>
                <div class="item content1">
                    <img :src="'./images/speech.svg'" class="img">

                </div>
            </div>
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
header{
    width: 90% !important;



}

header nav ul{
    margin-top: 45px;

}
header nav ul li{
    display: inline;

}
header nav ul li a{
    padding: 12px 30px;
    color: grey;
    text-decoration: none;
}
.brand{
    float: left;
    margin-top: 0px;
    padding-left: 0px;
}
.brand li a{
    color: blue;
    font-weight: 700;
    padding-left: 0;
}
.container{
    display: flex;
}
.img{
    width:100%;
}
.content{
    margin-top: 140px;
}
.content h2{
    text-transform: uppercase;
    color: rgb(44, 41, 41);
}
.content p{
    color: grey;
}
.btn{
 background-color: rgb(66, 66, 143);
 color:white;
 border-radius: 40px;
 border: 0px;
 padding: 10px 25px;
 margin-top: 30px;
}

.content1{
    margin-top: 80px;
}


</style>

