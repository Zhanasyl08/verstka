<template>
    <div class="main">
    <div class="body_works">
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

   

    </div>


    <div class="sec">
     


         <div class="feat">
        <div class="feat_tit">
            <strong>Works</strong>
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
                 <div class="fourth_block">
                <div class="block_img">
                    <img src="@/assets/work4.png" class="block_imgo">

                </div>
                <div class="column">
                <div class="block_tit">
                    <strong><a href="">Components</a></strong>
                    <br>
                </div>
            <div class="under">
                <div class="year_block">2018</div>

                <div class="subtext_block">Components, Design</div>
</div>
                <div class="text_block">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</div>
            </div>
<hr>

     

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
    </div>
    </div>
</template>

<script>
export default {
  name: "WorksPage" 
};
</script>

<style lang="scss">
.main {
    max-width: 1000px;
    margin: 0% auto;
    padding: 0 20px;
}



.feat_tit {
    display: flex;
    margin-top: 120px;
    font-size: 40px;
    font-weight: 400px;
    font-family: Arial, Helvetica, sans-serif;

}

.column {
    display: flex;
    flex-direction: column;
    .first_block {
    display: flex;
    justify-content: center;
    align-items: center;

    .block_imgo { 
        display: flex;
        margin-top: 40px;
        width: 240px;
        max-width:560px;
        height: 180px;
    }
    .block_tit {
        display:flex;
        flex-direction: column;
        gap:20px;
        margin-left: 20px;
        strong {
            color: black;
            font-size: 25px;
            font-weight: 200px;
            font-family: Arial, Helvetica, sans-serif;
            a {
                 text-decoration: none;
                 color: black;
            }
           
        }
    }
   .under {
    display: flex;
    flex-direction: row;
  

   }
  

    



}
}
.first_block {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 35px;

    .block_imgo { 
        display: flex;
        margin-top: 40px;
        width: 240px;
        max-width:560px;
        height: 180px;
    }
    .column {
        display:flex;
        flex-direction: column;
        
        margin-left: 20px;
        .block_tit {
        strong {
            color: black;
            font-size: 25px;
            font-weight: 200px;
            font-family: Arial, Helvetica, sans-serif;
            a {
                 text-decoration: none;
                 color: black;
                   &:hover{
                color: orangered;
            }
            }
           
           
        }
    }
   
    .year_block {
  background-color: black;
  padding: 4px 10px;
  border-radius: 999px;
  display: inline-block;
  font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-size: 18px;
  color: whitesmoke;
  font-weight: bold;
  
}

    }
.under {
    display: flex;
    align-items: center;
    margin-top: 15px;

    gap:30px;

    .subtext_block {
        color: grey;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 22px;
        font-weight: 200px;
    }

}
    

}

.text_block {
    display: flex;
    margin-top: 15px;
    
}


.column {
    display: flex;
    flex-direction: column;
    .second_block {
    display: flex;
    justify-content: center;
    align-items: center;

    .block_imgo { 
        display: flex;
        margin-top: 40px;
        width: 240px;
        max-width:560px;
        height: 180px;
    }
    .block_tit {
        display:flex;
        flex-direction: column;
        gap:20px;
        margin-left: 20px;
        strong {
            color: black;
            font-size: 25px;
            font-weight: 200px;
            font-family: Arial, Helvetica, sans-serif;
            a {
                 text-decoration: none;
                 color: black;
            }
           
        }
    }
   .under {
    display: flex;
    flex-direction: row;
  

   }
  

    



}
}
.second_block {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 35px;

    .block_imgo { 
        display: flex;
        margin-top: 40px;
        width: 240px;
        max-width:560px;
        height: 180px;
    }
    .column {
        display:flex;
        flex-direction: column;
        
        margin-left: 20px;
        .block_tit {
        strong {
            color: black;
            font-size: 25px;
            font-weight: 200px;
            font-family: Arial, Helvetica, sans-serif;
            a {
                 text-decoration: none;
                 color: black;
                   &:hover{
                color: orangered;
            }
            }
           
           
        }
    }
   
    .year_block {
  background-color: black;
  padding: 4px 10px;
  border-radius: 999px;
  display: inline-block;
  font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-size: 18px;
  color: whitesmoke;
  font-weight: bold;
  
}

    }
.under {
    display: flex;
    align-items: center;
    margin-top: 15px;

    gap:30px;

    .subtext_block {
        color: grey;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 22px;
        font-weight: 200px;
    }

}
    

}

.text_block {
    display: flex;
    margin-top: 15px;
    
}

.column {
    display: flex;
    flex-direction: column;
    .third_block {
    display: flex;
    justify-content: center;
    align-items: center;

    .block_imgo { 
        display: flex;
        margin-top: 40px;
        width: 240px;
        max-width:560px;
        height: 180px;
    }
    .block_tit {
        display:flex;
        flex-direction: column;
        gap:20px;
        margin-left: 20px;
        strong {
            color: black;
            font-size: 25px;
            font-weight: 200px;
            font-family: Arial, Helvetica, sans-serif;
            a {
                 text-decoration: none;
                 color: black;
            }
           
        }
    }
   .under {
    display: flex;
    flex-direction: row;
  

   }
  

    



}
}
.third_block {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 35px;

    .block_imgo { 
        display: flex;
        margin-top: 40px;
        width: 240px;
        max-width:560px;
        height: 180px;
    }
    .column {
        display:flex;
        flex-direction: column;
        
        margin-left: 20px;
        .block_tit {
        strong {
            color: black;
            font-size: 25px;
            font-weight: 200px;
            font-family: Arial, Helvetica, sans-serif;
            a {
                 text-decoration: none;
                 color: black;
                   &:hover{
                color: orangered;
            }
            }
           
           
        }
    }
   
    .year_block {
  background-color: black;
  padding: 4px 10px;
  border-radius: 999px;
  display: inline-block;
  font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-size: 18px;
  color: whitesmoke;
  font-weight: bold;
  
}

    }
.under {
    display: flex;
    align-items: center;
    margin-top: 15px;

    gap:30px;

    .subtext_block {
        color: grey;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 22px;
        font-weight: 200px;
    }

}
    

}

.text_block {
    display: flex;
    margin-top: 15px;
    
}


.column {
    display: flex;
    flex-direction: column;
    .fourth_block {
    display: flex;
    justify-content: center;
    align-items: center;

    .block_imgo { 
        display: flex;
        margin-top: 40px;
        width: 240px;
        max-width:560px;
        height: 180px;
    }
    .block_tit {
        display:flex;
        flex-direction: column;
        gap:20px;
        margin-left: 20px;
        strong {
            color: black;
            font-size: 25px;
            font-weight: 200px;
            font-family: Arial, Helvetica, sans-serif;
            a {
                 text-decoration: none;
                 color: black;
            }
           
        }
    }
   .under {
    display: flex;
    flex-direction: row;
  

   }
  

    



}
}
.fourth_block {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 35px;

    .block_imgo { 
        display: flex;
        margin-top: 40px;
        width: 240px;
        max-width:560px;
        height: 180px;
    }
    .column {
        display:flex;
        flex-direction: column;
        
        margin-left: 20px;
        .block_tit {
        strong {
            color: black;
            font-size: 25px;
            font-weight: 200px;
            font-family: Arial, Helvetica, sans-serif;
            a {
                 text-decoration: none;
                 color: black;
                   &:hover{
                color: orangered;
            }
            }
           
           
        }
    }
   
    .year_block {
  background-color: black;
  padding: 4px 10px;
  border-radius: 999px;
  display: inline-block;
  font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-size: 18px;
  color: whitesmoke;
  font-weight: bold;
  
}

    }
.under {
    display: flex;
    align-items: center;
    margin-top: 15px;

    gap:30px;

    .subtext_block {
        color: grey;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 22px;
        font-weight: 200px;
    }

}
    

}

.text_block {
    display: flex;
    margin-top: 15px;
    
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