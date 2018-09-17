function reduceMainWrapper() {
  const mainWrapper = document.getElementById('mainWrapper');
  const contactText = document.getElementById('contactText');

  if (mainWrapper.style.transform === "scaleY(0.5)") {
    contactText.style.top = "-400px";
    mainWrapper.style.transform = "";
  } else {
    mainWrapper.style.transform = "scaleY(0.5)";
    contactText.style.top = "22px";
  }
}

function reduceSlider() {
  const slider = document.getElementById('slider');

  if (slider.style.transform === "" || slider.style.transform === "scaleY(1)") {
    slider.style.transform = "scaleY(0)";
  } else {
    slider.style.transform = "scaleY(1)";
  }
  const blackContactBackground = document.getElementById('blackContactBackground');
  if (blackContactBackground.style.transform === "" || blackContactBackground.style.transform === "scaleY(1)") {
    blackContactBackground.style.transform = "scaleY(0)";
  } else {
    blackContactBackground.style.transform = "scaleY(1)";
  }
}

function issou() {
  const mainWrapper = document.getElementById('mainWrapper');
  const projectInfos = document.getElementById('projectInfos');
  if (page > 4) return;
  if (mainWrapper.style.top === "-810px") return;
    

    if (mainWrapper.style.transform === "scaleY(0.5)") {
      reduceMainWrapper()
      setTimeout(() => {
        reduceSlider();
      }, 200)
    } else {
      reduceSlider()
      setTimeout(reduceMainWrapper, 200)
    }
}

function verticalSlide() {
  const mainWrapper = document.getElementById('mainWrapper');
  
  if (mainWrapper.style.transform !== "scaleY(0.5)") return;
  if (mainWrapper.style.top === '-500px' || mainWrapper.style.top==="") {
    const contactText = document.getElementById('contactText');
    const bottomContactText = document.getElementById('bottomContactText');
  
    bottomContactText.style.top = "-810px"
    contactText.style.top = "-500px";
  mainWrapper.style.top = "-810px"; //default -400px
  } else if (mainWrapper.style.top === '-810px') {
    const contactText = document.getElementById('contactText');
    const bottomContactText = document.getElementById('bottomContactText');
  
    bottomContactText.style.top = "-400px"
    contactText.style.top = "22px";
    mainWrapper.style.top = "-500px";
  }
}


function DoubleIssou() {
  const contactText = document.getElementById('bottomContactText');
  if (contactText.style.top ===  "-810px") {
    setTimeout(issou, 400);
    verticalSlide();
  } else {
    setTimeout(verticalSlide, 600);
    issou();
  }
}
