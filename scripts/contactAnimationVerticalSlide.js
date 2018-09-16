document.body.addEventListener('keydown', (event) => {
  const keyName = event.key;
  const mainWrapper = document.getElementById('mainWrapper');

  if (mainWrapper.style.transform !== "scaleY(0.5)") return;
  if (keyName === 'ArrowUp') {
    const mainWrapper = document.getElementById('mainWrapper');
    const contactText = document.getElementById('contactText');
    const bottomContactText = document.getElementById('bottomContactText');

    bottomContactText.style.top = "-810px"
    contactText.style.top = "-500px";
    mainWrapper.style.top = "-810px"; //default -400px
  }

  if (keyName === 'ArrowDown') {
    const mainWrapper = document.getElementById('mainWrapper');
    const contactText = document.getElementById('contactText');
    const bottomContactText = document.getElementById('bottomContactText');

    bottomContactText.style.top = "-400px"
    contactText.style.top = "22px";
    mainWrapper.style.top = "-500px";
  }
});