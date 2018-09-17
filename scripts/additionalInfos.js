function displayProjectInfo(page) {
  const projectInfos = document.getElementById('projectInfos');
  switch(page) {
    case 0 :
      projectInfos.innerHTML = 'Projet'
      break;
    case 1 :
      projectInfos.innerHTML = `<i>Projet</i>  - <b>Campaign Daphine SS18</b> - <span onClick="handleOpenInfo(1)">index</span>`;
      break;
    case 2 :
      projectInfos.innerHTML = `<i>Projet</i>  - <b>The creation behind AURA Mugler by its perfumer-creators</b> - <span onClick="handleOpenInfo(1)">index</span>`;
      break;
    case 3 :
      projectInfos.innerHTML = `<i>Projet</i>  - <b>Campaign Perrier-Jouët Belle Époque Vendanges</b> - <span onClick="handleOpenInfo(1)">index</span>`;
      break;
    case 4 :
      projectInfos.innerHTML = `<i>Projet</i>  - <b>Campaign Perrier-Jouët Blanc de Blanc</b> - <span onClick="handleOpenInfo(1)">index</span>`;
      break;
  }
}
