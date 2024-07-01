<style>
  .button-doku{
    text-align: center;
    border: 1px solid;
    width: 65%;
    padding: 17px;
    display: flex;
    justify-content: center;
    margin: auto;
    transition: 0.5s ease box-shadow, 0.5s ease color, 0.5s ease background;
    border-radius: 10px;
    background: beige;
    color: black;
    font-weight: 400;
    cursor: pointer;
  }
  .button-doku:hover{
    background: #a89f4e;
    transition: 0.5s ease box-shadow, 0.5s ease color, 0.5s ease background;
    color: white;
    font-weight: 400;
    border: 1px solid #FFEB3B;
  }
</style>
<!-- Projects Section -->
<section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">PAMERAN ANALOG</h1>
      </div>
      <div class="col-12">
        <p style="font-size: 20px; font-weight: 400; margin-bottom: 30px;">Setiap pameran foto adalah kesempatan bagi kami untuk merangkul inspirasi, kreativitas, dan inovasi. Melalui kumpulan karya yang di pamerkan, kami telah berusaha memberikan wadah bagi bakat-bakat yang menginspirasi dan mencerahkan lembaga kami.</p>

        <p style="font-size: 3.2rem; font-weight: 500; text-align: center; margin-bottom: 25px;">1. “KEGALIBAN” Merupakan Tema Dari Angkatan XI</p>
        <div class="row">
          <div class="col-7">
          <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Open Modal
          </button> -->
            
              <img src="gambar/poster/Poster kegaliban.jpg" data-toggle="modal" data-target="#myModal" alt="Poster" style="cursor: pointer;">
            
          </div>
          <div class="col-5">
            <p style="line-height: 3rem;">Kegaliban merupakan tema pameran Rencana Tindak Lanjut (RTL) dari Angkatan XI” MPF Analog yang terdiri dari 17 pameris.</p>
            <p style="line-height: 3rem; margin-bottom: 20px;">Menurut Kamus Besar Bahasa Indonesia (KBBI), Kegaliban adalah sebuah kata yang memiliki arti suatu kebiasaan atau suatu hal yang lazim atau sering kita jumpai di sekitar kita terutama di jalanan. Dalam tema pameran ini, kegaliban merupakan penggambaran perasaan para pemeris terhadap bagaimana situasi di kehidupan yang sering kita temui di jalanan.</p>
            <!-- <p class="button-doku" style="">Lihat Dokumentasi Kegaliban</p> -->
            <button class="custom-button" onclick="window.location.href='index.php?page=sections&sec=1'"> Lihat Dokumentasi Kegaliban </button>
          </div>
        </div>

        <div class="modal fade" id="myModal">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">“KEGALIBAN”</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                <img src="gambar/poster/Poster kegaliban.jpg" alt="Poster">
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- <div class="all-projects">
        <div class="project-item">
          <div class="project-info">
            <h1>PAMERAN</h1>
            <h2>KELESAH</h2>
            <p>Kelesah merupakan tema pameran dari Angkatan X MPF Analog yang terdiri dari 13 pameris.Kelesah menurut Kamus Besar Bahasa Indonesia (KBBI) berarti keresahan hati, tidak tenang, dan gelisah. Dalam tema ini, kelesah merupakan penggambaran perasaan para pameris terhadap situasi di kehidupan sehari-hari yang dapat menimbulkan perasaan resah.</p>
          </div>
          <div class="project-img">
            <img src="gambar/pameran/pameran1.jpg">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>PAMERAN</h1>
            <h2>KEGALIBAN</h2>
            <p>Kegaliban merupakan tema pameran Rencana Tindak Lanjut (RTL) dari Angkatan XI” MPF Analog yang terdiri dari 17 pameris.Menurut Kamus Besar Bahasa Indonesia (KBBI), Kegaliban adalah sebuah kata yang memiliki arti suatu kebiasaan atau suatu hal yang lazim atau sering kita jumpai di sekitar kita terutama di jalanan. Dalam tema pameran ini, kegaliban merupakan penggambaran perasaan para pemeris terhadap bagaimana situasi di kehidupan yang sering kita temui di jalanan.</p>
          </div>
          <div class="project-img">
            <img src="gambar/pameran/pameran2.jpg">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>PAMERAN</h1>
            <h2>RANA</h2>
            <p>Dalam pameran ini, dikonseptualisasikan dalam sebuah gambar yang menceritakan medan perang tiap orang. Pameris mengambil gambar yang menceritakan dari setiap mata pencaharian yang merupakan sebuah cara untuk mereka bertahan hidup di medan perang mereka masing-masing.</p>
          </div>
          <div class="project-img">
            <img src="gambar/pameran/pameran3.jpg">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>PAMERAN</h1>
            <h2>ATINDRIYA</h2>
            <p>Dalam tema pameran ini, atindriya merupakan penggambaran para pameris yang ingin menunjukkan kepribadian mereka kepada khalayak, serta memperkenalkan apa saja yang menjadi ciri khas dan kesukaan dari para pameris.</p>
          </div>
          <div class="project-img">
            <img src="gambar/pameran/pameran4.jpg">
          </div>
        </div>
      </div>   -->
    </div>
  </section>

  <!-- End Projects Section -->

  <style>
    #atindriya .atindriya {
      flex-direction: column;
      max-width: 1200px;
      margin: 0 auto;
      padding: 100px 0;
    }
    .custom-button {
      padding: 15px 20px;
      font-size: 16px;
      background: transparent;
      border: none;
      position: relative;
      color: #f0f0f0;
      z-index: 1;
    }

    .custom-button::after,
    .custom-button::before {
      content: '';
      position: absolute;
      bottom: 0;
      right: 0;
      z-index: -99999;
      transition: all .4s;
    }

    .custom-button::before {
      transform: translate(0%, 0%);
      width: 100%;
      height: 100%;
      background: #28282d;
      border-radius: 10px;
    }
    
    .cusbut::before{
      background: #181818 !important;
    }

    .custom-button::after {
      transform: translate(10px, 10px);
      width: 35px;
      height: 35px;
      background: #ffffff15;
      backdrop-filter: blur(5px);
      border-radius: 50px;
    }

    .custom-button:hover::before {
      transform: translate(5%, 20%);
      width: 110%;
      height: 110%;
    }

    .custom-button:hover::after {
      border-radius: 10px;
      transform: translate(0, 0);
      width: 100%;
      height: 100%;
    }

    .custom-button:active::after {
      transition: 0s;
      transform: translate(0, 5%);
    }
  </style>
  <section id="atindriya" style="background: #29323c;">
    <div class="atindriya container">
      <div class="col-12">
        <!-- <p style="font-size: 20px; font-weight: 400; margin-bottom: 30px;">Setiap pameran foto adalah kesempatan bagi kami untuk merangkul inspirasi, kreativitas, dan inovasi. Melalui kumpulan karya yang di pamerkan, kami telah berusaha memberikan wadah bagi bakat-bakat yang menginspirasi dan mencerahkan lembaga kami.</p>
        <p style="font-size: 3rem; font-weight: 400; margin-bottom: 30px;">Berikut beberapa pameran foto MPF Analog :</p> -->
        <p style="font-size: 3.2rem; font-weight: 500; text-align: center; margin-bottom: 25px;color: white;">2. “ATINDRIYA” Merupakan Tema Dari Angkatan XI</p>
        <div class="row">
          <div class="col-7">
          <img src="gambar/poster/File_Fix_Atindriya.png" data-toggle="modal" data-target="#myModal1" alt="Poster" style="cursor: pointer;">
            
          </div>
          <div class="col-5">
            <p style="line-height: 3rem;color: white;margin-bottom: 20px;">Dalam tema pameran ini, atindriya merupakan penggambaran para pameris yang ingin menunjukkan kepribadian mereka kepada khalayak, serta memperkenalkan apa saja yang menjadi ciri khas dan kesukaan dari para pameris.</p>
            <!-- <p style="line-height: 3rem; margin-bottom: 20px;color: white;">Menurut Kamus Besar Bahasa Indonesia (KBBI), Kegaliban adalah sebuah kata yang memiliki arti suatu kebiasaan atau suatu hal yang lazim atau sering kita jumpai di sekitar kita terutama di jalanan. Dalam tema pameran ini, kegaliban merupakan penggambaran perasaan para pemeris terhadap bagaimana situasi di kehidupan yang sering kita temui di jalanan.</p> -->
            <!-- <p class="button-doku" style="">Lihat Dokumentasi Atindriya</p> -->
            <button class="custom-button cusbut" onclick="window.location.href='index.php?page=sections&sec=2'"> Lihat Dokumentasi Atindriya </button>
          </div>
        </div>

        <div class="modal fade" id="myModal1">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">“ATINDRIYA”</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                <img src="gambar/poster/File_Fix_Atindriya.png" alt="Poster">
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <style>
    #rana .rana {
      flex-direction: column;
      max-width: 1200px;
      margin: 0 auto;
      padding: 100px 0;
    }

  </style>
  <!-- <section id="rana">
    <div class="rana container">
      <div class="col-12">
        
        <p style="font-size: 3.2rem; font-weight: 500; text-align: center; margin-bottom: 25px;">3. “RANA” oleh Angkatan XII</p>
        <div class="row">
          <div class="col-7">
            <img src="gambar/poster/File_Fix_Atindriya.png" data-toggle="modal" data-target="#myModal1" alt="Poster" style="cursor: pointer;">
            
          </div>
          <div class="col-5">
            <p style="line-height: 3rem;margin-bottom: 20px;">Dalam pameran ini, dikonseptualisasikan dalam sebuah gambar yang menceritakan medan perang tiap orang. Pameris mengambil gambar yang menceritakan dari setiap mata pencaharian yang merupakan sebuah cara untuk mereka bertahan hidup di medan perang mereka masing-masing.</p>
            
            <button class="custom-button" onclick="window.location.href='index.php?page=sections&sec=3'"> Lihat Dokumentasi Rana </button>
          </div>
        </div>

        <div class="modal fade" id="myModal2">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              
              <div class="modal-header">
                <h4 class="modal-title">“RANA”</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              
              <div class="modal-body">
                <img src="gambar/poster/File_Fix_Atindriya.png" alt="Poster">
              </div>
              
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->