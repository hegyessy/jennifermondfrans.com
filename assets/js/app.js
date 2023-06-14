const maximize = (target = ".painting") => {
  const paintings = document.querySelectorAll(target);
  paintings.forEach((painting) => {
    painting.addEventListener("click", function() {
      painting.classList.toggle("maximize");
    })
  })
}

maximize()
