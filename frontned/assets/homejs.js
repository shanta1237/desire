window.addEventListener("load", function () {
    setTimeout(open, 5000);
    function open(event) {
      document.querySelector(".wrapper").classList.add("blur");
      document.querySelector(".popup").style.display = "block";
    }
  });
  
  document.querySelector("#close").addEventListener("click", clo);
  function clo(event) {
    document.querySelector(".wrapper").classList.remove("blur");
    document.querySelector(".popup").style.display = "none";
  }