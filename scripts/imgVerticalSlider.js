document.body.addEventListener('keydown', (event) => {
  const keyName = event.key;
  const actualImgContainer = document.getElementById(`img_container${page}`);
  const slider = document.getElementById('slider');

  if (!actualImgContainer) return;
  if (slider.style.transform === "scaleY(0)") return ;
  
  const transformPx = actualImgContainer.style.transform.length === 0 ? 0 : parseInt(actualImgContainer.style.transform.split('(')[1].split(')')[0]);
  const pageIndex = Math.abs(transformPx / 657);
  if (keyName === 'ArrowDown')
  {
    const actualImages = document.getElementsByClassName(`img${page}`);
    if (actualImages.length <= pageIndex + 1) return ;
    handleCloseInfo(page);

    [].slice.call(actualImages).map((actualImage, key) => {
      handleCloseInfo(`${page}-${key}`);
      if (key !== pageIndex + 1) {
        const pageName = key === 0 ? `img${page}` : `img${page}-${key}`;
        const imageToHide = document.getElementById(pageName);
        imageToHide.style.opacity = "0";
      } else {
        const pageName = key === 0 ? `img${page}` : `img${page}-${key}`;
        const imageToReveal = document.getElementById(pageName);
        imageToReveal.style.opacity = "1";
      }
    })
    actualImgContainer.style.transform=`translateY(${transformPx - 657}px)`;
  }
  if (keyName === 'ArrowUp' && pageIndex > 0)
  {
    const actualImages = document.getElementsByClassName(`img${page}`);
    
    [].slice.call(actualImages).map((actualImage, key) => {
      handleCloseInfo(`${page}-${key}`);
      if (key !== pageIndex - 1) {
        const pageName = key === 0 ? `img${page}` : `img${page}-${key}`;
        const imageToHide = document.getElementById(pageName);
        imageToHide.style.opacity = "0";
      } else {
        const pageName = key === 0 ? `img${page}` : `img${page}-${key}`;
        const imageToReveal = document.getElementById(pageName);
        imageToReveal.style.opacity = "1";
      }
    })
    actualImgContainer.style.transform=`translateY(${transformPx + 657}px)`;
  }
})