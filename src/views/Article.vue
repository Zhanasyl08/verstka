<template>
       <div class="bod">
    <div class="Menu">
      <span class="Home">
   

      </span>

      <span class="Works">
    

      </span>

      <span class="Blog">
      
      </span>

      <span class="Article">
  
        
      </span>
    </div>



    <div class="app">
      <h1>Design Dashboards with usability in mind</h1>
    </div>

<div class="tag">
    <div class="year">2018</div>

    <div class="subt">Dashboard, User Experience Design
    </div>
</div>

    <div class="art_text">
      Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia <br> consequat duis enim velit mollit.
      Exercitation veniam consequat sunt nostrud amet.
    </div>


    <div class="img-one">
      <img src="@/assets/1-1.png" class="imgone">
    </div>

<div class="links">
     <a href="">Heading</a>
</div>

<div class="art_text">
      Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia <br> consequat duis enim velit mollit.
      Exercitation veniam consequat sunt nostrud amet.
    </div>

      <div class="img-two">
      <img src="@/assets/1-2.png" class="imgtwo">
    </div>
      <div class="img-three">
      <img src="@/assets/1-3.png" class="imgthree">
    </div>


    <div class="social">
      <div class="fb">
      <a href="https://www.facebook.com/?locale=ru_RU"><img src="@/assets/fb.png"> </a>
      </div>

      <div class="inst">
        <a href="https://www.instagram.com/mosttalentedbaldman/"><img src="@/assets/insta.png"></a>
      </div>

      <div class="twitter">
        <a href="https://x.com/?lang=ru"><img src="@/assets/twitter.png"></a>
      </div>

      <div class="linkedin">
        <a href="https://ru.linkedin.com/">
          <img src="@/assets/linkedin.png">
        </a>
      </div>

    </div>

    <div class="end">Copyright ©2020 All rights reserved</div>
  </div>
</template>

<script>
export default {
  name: "ArticlePage"  
};
</script>

<style lang="scss">


.imgone {
  margin-top: 40px;
  width : 960px;
  max-width: auto;
  height: 720px;
}

.imgtwo {
  margin-top: 40px;
  width : 960px;
  max-width: auto;
  height: 720px;
}

.imgthree {
  margin-top: 40px;
  width : 960px;
  max-width: auto;
  height: 720px;
}

.bod {
  max-width: 1000px;
  margin: 0% auto;
  padding: 0 20px;

}

.app {
  display: flex;
  font-family:Arial, Helvetica, sans-serif;
  font-size: 21px;
  margin-top: 120px;
}


.tag{
  display:flex;
  gap:30px;

}
.year {
  background-color: palevioletred;
  padding: 4px 10px;
  border-radius: 999px;
  display: inline-block;
  font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-size: 18px;
  color: whitesmoke;
  font-weight: bold;
  
}

.subt {
  font-size: 22px;
  display: flex;
  align-items: center;
}

.art_text {
  display: flex;
  margin-top: 20px;

}


.img-one {
  display: flex;

  width: 50%;
  max-width: 120px;
  height: auto;

}

.links {
  margin-top: 30px;
  font-family:Arial, Helvetica, sans-serif;
  font-weight: 400px;
  font-size: 25px;

  a { 
    text-decoration: none;
    color: black;

  }
}

.social {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 30px;
  margin-top: 150px;

}

.end {
  display: flex;
  justify-content: center;
  align-content: center;
  margin-top: 20px;
  font-size: 14px;
  font-family: 'Times New Roman', Times, serif;
  margin-bottom: 60px;
}

</style>