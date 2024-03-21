
<script src="https://kit.fontawesome.com/06a2671576.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="main.css">
<script
  src="https://code.jquery.com/jquery-1.12.4.js"
  integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
  crossorigin="anonymous">
</script>

<style>
.aaafont { font-size:20px; }
.pc_wrap{
  display: block;
  padding-top: 120px;
}
.mobile_wrap{
    display: none; 
}
@media(max-width:700px){ 
  .pc_wrap{
    display: none;
  }
  .mobile_wrap{
    display: block; 
  }
}

</style>



<div class="layout_fix pc_wrap">
  <div id="search_box_outer">
      <form action="#" id="search_box">
        <button><i class="fa-solid fa-magnifying-glass"  style="color: #093687; font-size: 24px;" ></i></button>
        <input type="text" class="search" placeholder="상담 사례 검색"/>
      </form>
  </div>

  <div id="select_outer">
    <div id="select_box">
      <div>실시간 상담사례</div>
      <div>변호사 구하기</div>
    </div>
  </div>

  <div id="content_box_outer">
   
   <?php
   for($i=0; $i<5; $i++)
   {
      ?>
      <div class="content_box">
      <div class="content_box_inner">
      <div>
      <div class="content_box1">
      <span>•</span>
      사건내용 : 단톡방에서의 공연 모독성 이 보이고 너무 수치스럽고 앞으로 그 사람들을 어떻게 봐야할지도 모르겠고 무섭기도하고 두렵습니다....
      </div>
      <div class="content_box2">
      <i class="fa-regular fa-user"></i>24
      </div>
      </div>

      <div>
      <span class="content_font1">1분전</span>
      <span class="content_font2">매칭중</span>
      <span class="content_font3" >4,000,000원</span>
      </div>
      </div>
      </div>
      <?php 
   }
   ?>
   
   <?php
   for($i=0; $i<6; $i++)
   {
      ?>
      <div class="content_box">
      <div class="content_box_inner">
      <div>
      <div class="content_box1">
      <span>•</span>
      사건내용 : 단톡방에서의 공연 모독성 이 보이고 너무 수치스럽고 앞으로 그 사람들을 어떻게 봐야할지도 모르겠고 무섭기도하고 두렵습니다....
      </div>
      <div class="content_box2">
      <i class="fa-regular fa-user"></i>24
      </div>
      </div>

      <div>
      <span class="content_font1">1분전</span>
      <span class="content_font4">1시간내 매칭 완료</span>
      <span class="content_font3" >4,000,000원</span>
      </div>
      </div>
      </div>
      <?php 
   }
   ?>

  </div>

  <div id="page">
    <div class="arrow1"><i class="fa-solid fa-chevron-left"></i></div>
   <div class="arrow_num" style="background-color:#F3F3FB; color:rgb(9, 54, 135);">1</div>
      <?php
        for($i=2; $i<=5; $i++)
        {
      ?>
          <div class="arrow_num"><?php echo $i; ?></div>
      <?php 
        }
      ?>
    <div class="arrow2"><i class="fa-solid fa-chevron-right"></i></div>
  </div>
</div>


<div class="mobile_wrap">
<div id="search_box_outer">
      <form action="#" id="search_box">
        <button><i class="fa-solid fa-magnifying-glass"  style="color: #093687; font-size: 24px;" ></i></button>
        <input type="text" class="search" placeholder="상담 사례 검색"/>
      </form>
  </div>

  <div id="select_outer">
    <div id="select_box">
      <div>실시간 상담사례</div>
      <div>변호사 구하기</div>
    </div>
  </div>

  <div id="content_box_outer">
   
   <?php
   for($i=0; $i<5; $i++)
   {
      ?>
      <div class="content_box">
      <div class="content_box_inner">
      <div>
      <div class="content_box1">
      <span>•</span>
      사건내용 : 단톡방에서의 공연 모독성 이 보이고 너무 수치스럽고 앞으로 그 사람들을 어떻게 봐야할지도 모르겠고 무섭기도하고 두렵습니다....
      </div>
      <div class="content_box2">
      <i class="fa-regular fa-user"></i>24
      </div>
      </div>

      <div>
      <span class="content_font1">1분전</span>
      <span class="content_font2">매칭중</span>
      <span class="content_font3" >4,000,000원</span>
      </div>
      </div>
      </div>
      <?php 
   }
   ?>
   
   <?php
   for($i=0; $i<6; $i++)
   {
      ?>
      <div class="content_box">
      <div class="content_box_inner">
      <div>
      <div class="content_box1">
      <span>•</span>
      사건내용 : 단톡방에서의 공연 모독성 이 보이고 너무 수치스럽고 앞으로 그 사람들을 어떻게 봐야할지도 모르겠고 무섭기도하고 두렵습니다....
      </div>
      <div class="content_box2">
      <i class="fa-regular fa-user"></i>24
      </div>
      </div>

      <div>
      <span class="content_font1">1분전</span>
      <span class="content_font4">1시간내 매칭 완료</span>
      <span class="content_font3" >4,000,000원</span>
      </div>
      </div>
      </div>
      <?php 
   }
   ?>

  </div>

  <div id="page">
    <div class="arrow1"><i class="fa-solid fa-chevron-left"></i></div>
   <div class="arrow_num" style="background-color:#F3F3FB; color:rgb(9, 54, 135);">1</div>
      <?php
        for($i=2; $i<=5; $i++)
        {
      ?>
          <div class="arrow_num"><?php echo $i; ?></div>
      <?php 
        }
      ?>
    <div class="arrow2"><i class="fa-solid fa-chevron-right"></i></div>
  </div>
</div>
</div>

<?php
 include_once('tail.php');
?> 

<script>
$(function(){
  $("#select_box div").click(function(){
    // 클릭한 div의 현재 배경색 가져오기
    var currentColor = $(this).css("background-color");
    
    // 만약 현재 배경색이 흰색이라면
    if (currentColor === "rgb(255, 255, 255)") {
      // 흰색 유지
      $(this).css("background-color", "white");
    } else {
      // 다른 div의 배경색을 파란색으로 초기화하고 클릭한 div의 배경색을 흰색으로 변경
      $("#select_box div").css("background-color", "#F3F3FB");
      $(this).css("background-color", "white");
    }
  });

  $(".arrow_num").click(function() {

   //현재배경색
   let currentColor = $(this).css("background-color");

   if (currentColor === "#F3F3FB") {
      // 만약 현재의 색이 파란색이라면 파란색을 유지해라
      $(this).css("background-color", "#F3F3FB");
     $(this).css("color", "rgba(9, 54, 135, 1)");
    } else {
      // 다른 div의 배경색을 파란색으로 초기화하고 클릭한 div의 배경색을 흰색으로 변경
      $(".arrow_num").css("background-color", "rgba(0, 0, 0, 0)");
     $(".arrow_num").css("color", "rgba(94, 94, 94, 1)");
      $(this).css("background-color", "#F3F3FB");
     $(this).css("color", "rgba(9, 54, 135, 1)");
    }
});

});
</script>