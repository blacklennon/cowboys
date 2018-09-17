function displayProjectInfo(page) {
  const projectInfos = document.getElementById('projectInfos');
  let name = '';
  if (page == 0) {
    projectInfos.innerHTML = 'Projet';
  } else {
    name = document.querySelector(`#img_container${page} .projectDiv em`).innerText;
    projectInfos.innerHTML = `<i>Projet</i>  - <b>${name}</b> - <span onclick="handleOpenInfo(1)">index</span>`;
  }
}
