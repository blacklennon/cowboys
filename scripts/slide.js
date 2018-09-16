function homePageSlider() {
  const blackLogo = document.getElementById('blackLogo');
  const projectInfos = document.getElementById('projectInfos');

  if (blackLogo.className === 'black_logo_active') {
    blackLogo.className = 'black_logo_inactive';
    projectInfos.style.opacity = "0";
  } else {
    blackLogo.className = 'black_logo_active'
    setTimeout(() => projectInfos.style.opacity = "1", 200);

  }
}