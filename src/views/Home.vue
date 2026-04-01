<template>
    <div class="bode">
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

<div class="blocks">
    <div class="title">
        <div class="tot"><strong>
        Hi, I am John,<br> Creative Technologist</strong></div>
         <div class="subt">
        Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
    </div>
    </div>
        
    <div class="avatar">

        <img src="@/assets/avatar.png" class="ava">
    
    </div>
    
 


    </div>
<div class="resume">
    <div class="button">
        <button class="butt" @click="showForm=true">
            <div class="unbut">Оставьте заявку</div>
        </button>
    </div>
<div v-if="showForm" class="modal">
      <div class="modal-content">

        <span class="close" @click="showForm = false">×</span>

        <div class="ostav"><h2>Оставить резюме</h2></div>

        <form @submit.prevent="sendEmail" enctype="multipart/form-data">
          <div class="name">

          <input type="text" v-model="name" required placeholder="Введите имя"/> <br>
          </div>
<div class="email">
     
          <input type="email" v-model="email" required placeholder="Введите почту" /></div>

         <div class="res"> 
          <input type="file"   @change="handleFileUpload" required />
</div>
         <div class="submit"> <button class="subbut" type="submit">
            <div class="unsubmit">
            Отправить
            </div>
        </button></div>
        </form>

        <p v-if="message">{{ message }}</p>

      </div>
      </div>
      </div>

    <div class="sect">
        <div class="seco">
        <div class="abc">
            Recent Post
        </div>
        <div class="lil">
            <nav>
      <router-link to="/Works" class="active">View all</router-link>
      </nav>
        </div>
        </div>

        <div class="boxes">
        <div class="first_box">
            <div class="tit">
                <a href="" class="tits"><strong >Making a design system from scratch</strong></a>
            </div>

            <div class="tegs">
<div class="date">
    12 Feb 2019
</div>
<div class="pipes">
    |
</div>

<div class="hidden_home">Express, Handlebars
    </div>

            </div>
            <div class="under_date">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</div>
            </div>

             <div class="second_box">
            <div class="tit">
                <a href="" class="tits"><strong >Creating pixel perfect icons in Figma</strong></a>
            </div>

            <div class="tegs">
<div class="date">
    12 Feb 2019
</div>
<div class="pipes">
    |
</div>

<div class="hidden_home">Figma, Icon Design
    </div>

            </div>
            <div class="under_date">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</div>
            </div>
            
    </div>
    </div>

       <div class="feat">
        <div class="feat_tit">
            <strong>Featured works</strong>
            </div>
            <div class="first_block">
                <div class="block_img">
                    <img src="@/assets/work1.png" class="block_imgo">

                </div>
                <div class="column">
                <div class="block_tit">
                    <strong><a href="">Designing Dashboard</a></strong>
                    <br>
                </div>
            <div class="under">
                <div class="year_block">2020</div>

                <div class="subtext_block">Dashboard</div>
</div>
                <div class="text_block">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</div>
            </div>
            </div>

<hr>

                  <div class="second_block">
                <div class="block_img">
                    <img src="@/assets/work2.png" class="block_imgo">

                </div>
                <div class="column">
                <div class="block_tit">
                    <strong><a href="">Vibrant Portraits of 2020</a></strong>
                    <br>
                </div>
            <div class="under">
                <div class="year_block">2018</div>

                <div class="subtext_block">Illustration</div>
</div>
                <div class="text_block">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</div>
            </div>
            </div>

<hr>



                  <div class="third_block">
                <div class="block_img">
                    <img src="@/assets/work3.png" class="block_imgo">

                </div>
                <div class="column">
                <div class="block_tit">
                    <strong><a href="">36 Days of Malayalam type</a></strong>
                    <br>
                </div>
            <div class="under">
                <div class="year_block">2018</div>

                <div class="subtext_block">Typography</div>
</div>
                <div class="text_block">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</div>
            </div>
            </div>
            <hr>

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
    </div>
</template>

<script>
export default {
  name: "HomePage",  
  data() {
    return {
      showForm: false,
      name: '',
      email: '',
      resume: null,
      message: ''
    };
  },
  methods: {
    handleFileUpload(event) {
      this.resume = event.target.files[0];
    },
    async sendEmail() {
  const formData = new FormData();
  formData.append('name', this.name);
  formData.append('email', this.email);
  formData.append('resume', this.resume);

  try {
    const response = await fetch('http://localhost:8080/send.php', {
      method: 'POST',
      body: formData
    });
    const text = (await response.text()).trim(); 
    this.message = text;

   if(text === 'success') {
  this.message = 'Отправлено!';
  setTimeout(() => {
    this.showForm = false;
    this.message = '';
    this.name = '';
    this.email = '';
    this.resume = null;
  }, 1500); 
}
  } catch (error) {
    this.message = 'Ошибка отправки: ' + error;
  }
}

  }
};

</script>


<style lang="scss">
.bode {
    max-width: 1000px;
    margin: 0% auto;
    padding: 0 20px;
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
.blocks{
    display: flex;
    flex-direction: row;
    .title {
    display: flex;
   
    flex-direction: column;
    .tot {
        display: flex;
        gap:20px;
        margin-top: 140px;
        color: black;
        font-size: 40px;
        font-weight: 300px;
        font-family: Arial, Helvetica, sans-serif;

    }
   .subt {
    font-size: 14px;
    font-family:Arial, Helvetica, sans-serif;
    font-weight: 100px;
    margin-top: 30px;

   }
}
 .ava {
        display: flex;
        flex-direction: row;
        width:210px;
        max-width: 520px;
        height: 210px;
        filter: drop-shadow(10px 10px 18px 10px rgba(79, 122, 155, 0));
        margin-right: 20px;
        margin-top: 100px;
        margin-left: 250px;
    }

        
        
   
    
}
.resume {
    .button {
        .butt{
            background-color: rgba($color: #a33210, $alpha: 1.0);
            font-size: 18px;
            font-weight: bold;
            border: none;
            color: whitesmoke;
            font-family: Arial, Helvetica, sans-serif;
           padding: 10px;
         
            
        }
    }
}

.form {
    display:flex;
    justify-content: cente;
}


.modal {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;

  background: rgba(0, 0, 0, 0.5); // затемнение
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  z-index: 1000;
}

.modal-content {
  background: whitesmoke;
  padding: 30px;
  border-radius: 10px;
  width: 400px;
  height: 500px;

  display: flex;
  flex-direction: column;
  gap: 10px;
}

.close {
  position: absolute;
  top: 20px;
  right: 30px;
  font-size: 25px;
  cursor: pointer;
}

input {
  padding: 8px;
  border-radius: 5px;
  border: 1px solid #ccc;
}

button {
  margin-top: 10px;
}

.ostav {
    display: flex;
    justify-content: center;
    font-family: Arial, Helvetica, sans-serif;
    font-size:  20px;
    font-weight: 200px;
    color: rgba($color: #3f1e1e, $alpha: 1.0)
}

.name, .email {
    display: flex;
    justify-content: center;
    font-size: 30px;
    margin-top: 18px;
}

.res {
    display: flex;
    justify-content: center;
    font-size: 30px;
    margin-top: 120px;
}
.submit{
    display: flex;
    justify-content: center;
    
}
.subbut {
    padding: 20px 40px;
    display: flex;
    justify-content: center;
    align-self: center;
  
    border: none;
}
    .unsubmit {
        background-color: #3f1e1e;
        color: white;
        border-radius: 200px;
        align-self:center;
        font-size: 20px;
        margin-top: 40px;
        font-family: Arial, Helvetica, sans-serif;
         padding: 10px 20px;
    }
    




</style>

<style lang="scss">
.sect {
  background-color: #ddebf0; 
  margin: 0 -190px;
  padding: 0 auto;
  max-width: 3000px;
  margin-top: 40px;
  height:340px;


}
  .seco {
    display: flex;
    max-width: 1000px;
    margin: 0% auto;
    padding: 0 0px;
    margin-top: 40px;
    font-weight: 100px;
    font-size:20px;
    font-family: Arial, Helvetica, sans-serif;
    justify-content: space-between;
    .abc {
        margin-top: 25px;
    }
    .lil {
        margin-top: 25px;
        .active{
        text-decoration: none;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 15px;
        color: rgb(14, 64, 85);
        }
}
  }

.first_box {
  background-color: whitesmoke;
  margin: 0 50px;
  padding: 0 auto;
  max-width: 450px;
  margin-top: 40px; 
  height:210px;
.tit{
    display:flex;
    margin-top: 25px;
  
}
  .tits {
    margin-left: 15px;
    text-decoration: none;
    font-size: 22px;
    font-weight: 400px;
    font-family: Arial, Helvetica, sans-serif;
    color: black;
    

  }
  .tegs { 
    display: flex;
    justify-content: flex-start;
    align-items: center;
    gap: 20px;
    margin-left: 15px;
    margin-top: 10px;

    .date {
        font-size: 17px;
        font-family:Arial, Helvetica, sans-serif;
        font-weight:10px;
    }
    .pipes {
        font-weight: 2000px;
        font-size: 20px;
    }
    .hidden_home {
        font-weight: 200px;
        font-size: 19px;
        font-family: Arial, Helvetica, sans-serif;
        color: grey;

    }
}
.under_date {
    margin-top: 15px;
    margin-left: 15px;
    font-family: Arial, Helvetica, sans-serif ;
    font-size: 15px;
}
}




.sect {
  background-color: #ddebf0; 
  margin: 0 -190px;
  padding: 0 auto;
  max-width: 3000px;
  margin-top: 40px;
  height:340px;


}
  .seco {
    display: flex;
    max-width: 1000px;
    margin: 0% auto;
    padding: 0 20px;
    margin-top: 40px;
    font-weight: 100px;
    font-size:20px;
    font-family: Arial, Helvetica, sans-serif;
    justify-content: space-between;
    .abc {
        margin-top: 25px;
    }
    .lil {
        margin-top: 25px;
        .active{
        text-decoration: none;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 15px;
        color: rgb(14, 64, 85);
        }
}
  }

.second_box {
  background-color: whitesmoke;
  max-width:425px;
  margin-top: 40px; 
  height:210px;
.tit{
    display:flex;
    margin-top: 25px;
  
}
  .tits {
    margin-left: 15px;
    text-decoration: none;
    font-size: 22px;
    font-weight: 400px;
    font-family: Arial, Helvetica, sans-serif;
    color: black;
    

  }
  .tegs { 
    display: flex;
    justify-content: flex-start;
    align-items: center;
    gap: 20px;
    margin-left: 15px;
    margin-top: 10px;

    .date {
        font-size: 17px;
        font-family:Arial, Helvetica, sans-serif;
        font-weight:10px;
    }
    .pipes {
        font-weight: 2000px;
        font-size: 20px;
    }
    .hidden_home {
        font-weight: 200px;
        font-size: 19px;
        font-family: Arial, Helvetica, sans-serif;
        color: grey;

    }
}
.under_date {
    margin-top: 15px;
    margin-left: 15px;
    font-family: Arial, Helvetica, sans-serif ;
    font-size: 15px;
}
}



.boxes {
    display: flex;
    justify-content: center;
}


.feat_title {
    margin-top: 45px;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 18px;
}

.block_imgon {
    margin-top: 30px;
}
</style>