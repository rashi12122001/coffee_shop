function togglemenu(){
    const menut = document.getElementById("toggle");
    const navigation=document.querySelector('.navigation');
    menut.classList.toggle('active');
    navigation.classList.toggle('active');
    }
    var image = document.getElementById('img');
    function changeImage() {
        document.getElementById("img").src="/images/strawberry_base.png";
      }
      function changevanilla() {
        document.getElementById("img").src="/images/vanillla_base.png";
      }
      function changechoco() {
        document.getElementById("img").src="/images/choco_base.png";
      }
      function changeice1() {
  if (image.src.match("choco_base")) {
    image.src = "/images/pink_choco.png";
  } else if(image.src.match("vanillla_base")) {
    image.src = "/images/pink_vanilla.png";
  }
  else if(image.src.match("strawberry_base")) {
    image.src = "/images/all_pink.png";
  }
  else{
    image.src="/images/main.png";
  }
}
function changeice2() {
      if (image.src.match("choco_base")) {
        image.src = "/images/vanilla_choco.png";
      } else if(image.src.match("vanillla_base")) {
        image.src = "/images/all_vanilla.png";
      }
      else if(image.src.match("strawberry_base")) {
        image.src = "/images/vanilla_pink.png";
      }
      else{
        image.src="/images/main.png";
      }
    }
    function changeice3() {
          if (image.src.match("choco_base")) {
            image.src = "/images/all_choco.png";
          } else if(image.src.match("vanillla_base")) {
            image.src = "/images/choco_vanilla.png";
          }
          else if(image.src.match("strawberry_base")) {
            image.src = "/images/choco_pink.png";
          }
          else{
            image.src="/images/main.png";
          }
        }
function reset() {
    image.src="/images/main.png";
  }