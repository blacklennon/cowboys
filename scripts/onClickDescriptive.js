function handleCloseInfo(clickedButton) {
  const info = document.getElementById(`info1`);
  if (info) {
    info.style.display = 'none';
  }
}

function handleOpenInfo(clickedImage) {
    const info = document.getElementById(`info1`);
    if(info) {
      info.style.display = 'block';
    }
}
