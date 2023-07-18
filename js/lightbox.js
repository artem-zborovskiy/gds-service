var zoomImg = function () {
    var clone = this.cloneNode();
    clone.classList.remove("zoom");
  
    var lb = document.getElementById("lightbox_img");
    lb.innerHTML = "";
    lb.appendChild(clone);
  
    lb = document.getElementById("lightbox_back");
    lb.classList.add("show");
  };
  
window.addEventListener("load", function(){
    var images = document.getElementsByClassName("zoom");
    if (images.length > 0) {
      for (var img of images) {
        img.addEventListener("click", zoomImg);
      }
    }
  
    document.getElementById("lightbox_back").addEventListener("click", function(){
      this.classList.remove("show");
    });
});