function displayProjectInfo(page) {
  const projectInfos = document.getElementById('projectInfos');
  switch(page) {
    case 1 :
      projectInfos.innerHTML = `Projet  - <b>Campaign Daphine SS18</b> - <a onClick="handleOpenInfo(1)">index</a>`;
      break;
    case 2 :
      projectInfos.innerHTML = `Projet  - <b>The creation behind AURA Mugler by its perfumer-creators</b> - <a onClick="handleOpenInfo(1)">index</a>`;
      break;
    case 3 :
      projectInfos.innerHTML = `Projet  - <b>Campaign Perrier-Jouët Blanc de Blanc</b> - <a onClick="handleOpenInfo(1)">index</a>`;
      break;
    case 4 :
      projectInfos.innerHTML = `Projet  - <b>Campaign Perrier-Jouët Belle Époque Vendanges</b> - <a onClick="handleOpenInfo(1)">index</a>`;
      break;
  }
}