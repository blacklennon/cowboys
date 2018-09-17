const blackLogo = document.getElementById('blackLogo');
blackLogo.style.transition = '0.5s';
let page = 0;
let sliderState = 1300;
const centerImageYConvertor = (700 - 600) * 0.5;
const sideImagesYConvertor = (700 - 500) * 0.5;

function setSliderState(newState) {
  const slider = document.getElementById('slider');
  slider.style.left =  `${newState}px`;
  return newState;
}

document.body.addEventListener('keydown', (event) => {
  const keyName = event.key;

  const slider = document.getElementById('slider');
  if (slider.style.transform === "scaleY(0)") return ;

  if (keyName === 'ArrowRight' && page === 0
    || keyName === 'ArrowLeft' && page === 1)
    homePageSlider();

  if (keyName === 'ArrowRight' && page < document.querySelectorAll('.img_container').length) {
    handleCloseInfo(page);
    page++;
    displayProjectInfo(page);
    if (page === 1) {
      const centerImages = document.getElementsByClassName(`img1`);
      const rightImages = document.getElementsByClassName(`img2`);

      [].slice.call(rightImages).map(rightImage => {
        const rightImageScaleConvertor = (500 - rightImage.clientHeight) / rightImage.clientHeight + 1;
        rightImage.style.transform = `scale(${rightImageScaleConvertor}) translateY(${sideImagesYConvertor}px)`;
      });
      [].slice.call(centerImages).map(centerImage => {
        const centerImageScaleConvertor = (600 - centerImage.clientHeight) / centerImage.clientHeight + 1;
        centerImage.style.transform = `scale(${centerImageScaleConvertor}) translateY(${centerImageYConvertor}px)`;
      });
      if (rightImages) {    
      const rightContainer = document.getElementById(`img_container${2}`);
      if (!rightContainer) return;
      const transformPx = rightContainer.style.transform.length === 0 ? 0 : parseInt(rightContainer.style.transform.split('(')[1].split(')')[0]);
      const rightPageIndex = Math.abs(transformPx / 656);

      [].slice.call(rightImages).map(rightImage => {
        const rightImageScaleConvertor = (500 - rightImage.clientHeight) / rightImage.clientHeight + 1;
        rightImage.style.transform = `scale(${rightImageScaleConvertor}) translateY(${sideImagesYConvertor}px)`;
        });
        const selector = rightPageIndex === 0 ? `img${2}` : `img${2}-${rightPageIndex}`
        const selectedRightImage = document.getElementById(selector);
        const selectedImgActualWidth = selectedRightImage.clientWidth * ((500 - selectedRightImage.clientHeight) / selectedRightImage.clientHeight + 1);
        const selectedImageTranslateX = selectedImgActualWidth / 2 - 640;
        selectedRightImage.style.transform = `${selectedRightImage.style.transform} translateX(${selectedImageTranslateX}px)`
      }

      sliderState = setSliderState(58);
    } else {
      const centerImages = document.getElementsByClassName(`img${page}`);
      const leftImages = document.getElementsByClassName(`img${page - 1}`);
      const rightImages = document.getElementsByClassName(`img${page + 1}`);

      const centerContainer = document.getElementById(`img_container${page}`);
      const rightContainer = document.getElementById(`img_container${page + 1}`);
      const leftContainer = document.getElementById(`img_container${page - 1}`);

      if (leftImages && centerImages) {
        sliderState = setSliderState(sliderState - ((centerContainer.clientWidth + leftContainer.clientWidth) * 0.5));

        [].slice.call(leftImages).map((leftImage, key) => {
          const leftImageScaleConvertor = (500 - leftImage.clientHeight) / leftImage.clientHeight + 1;
          leftImage.style.transform = `scale(${leftImageScaleConvertor}) translateY(${sideImagesYConvertor}px)`;
          if (key === 0) {
            handleCloseInfo((page - 1).toString());
          } else handleCloseInfo(`${page - 1}-${key}`);
        });
        [].slice.call(centerImages).map((centerImage) => {
        const centerImageScaleConvertor = (600 - centerImage.clientHeight) / centerImage.clientHeight + 1;
        centerImage.style.transform = `scale(${centerImageScaleConvertor}) translateY(${centerImageYConvertor}px)`;
        });
      }

      if (rightImages && rightContainer) {
      const transformPx = rightContainer.style.transform.length === 0 ? 0 : parseInt(rightContainer.style.transform.split('(')[1].split(')')[0]);
      const rightPageIndex = Math.abs(transformPx / 656);

      [].slice.call(rightImages).map(rightImage => {
        const rightImageScaleConvertor = (500 - rightImage.clientHeight) / rightImage.clientHeight + 1;
        rightImage.style.transform = `scale(${rightImageScaleConvertor}) translateY(${sideImagesYConvertor}px)`;
        });
        const selector = rightPageIndex === 0 ? `img${page + 1}` : `img${page + 1}-${rightPageIndex}`
        const selectedRightImage = document.getElementById(selector);
        const selectedImgActualWidth = selectedRightImage.clientWidth * ((500 - selectedRightImage.clientHeight) / selectedRightImage.clientHeight + 1);
        const selectedImageTranslateX = selectedImgActualWidth / 2 - 640;
        selectedRightImage.style.transform = `${selectedRightImage.style.transform} translateX(${selectedImageTranslateX}px)`
      }

      if (leftImages && leftContainer) {
        [].slice.call(leftImages).map(leftImage => {
          const leftImageScaleConvertor = (500 - leftImage.clientHeight) / leftImage.clientHeight + 1;
          leftImage.style.transform = `scale(${leftImageScaleConvertor}) translateY(${sideImagesYConvertor}px)`;
        });

        const transformPx = leftContainer.style.transform.length === 0 ? 0 : parseInt(leftContainer.style.transform.split('(')[1].split(')')[0]);
        const leftPageIndex = Math.abs(transformPx / 656);
  
        [].slice.call(leftImages).map(leftImage => {
          const leftImageScaleConvertor = (500 - leftImage.clientHeight) / leftImage.clientHeight + 1;
          leftImage.style.transform = `scale(${leftImageScaleConvertor}) translateY(${sideImagesYConvertor}px)`;
          });
          const selector = leftPageIndex === 0 ? `img${page - 1}` : `img${page - 1}-${leftPageIndex}`
          const selectedleftImage = document.getElementById(selector);
          const selectedImgActualWidth = selectedleftImage.clientWidth * ((500 - selectedleftImage.clientHeight) / selectedleftImage.clientHeight + 1);
          const selectedImageTranslateX = (640 - selectedImgActualWidth / 2);

          selectedleftImage.style.transform = `${selectedleftImage.style.transform} translateX(${selectedImageTranslateX}px)`
      }
    }
  };

  if (keyName === 'ArrowLeft' && page > 0)
  {
    page--;
    if (page === 0) {
      sliderState = setSliderState(1300);

      const projectInfos = document.getElementById('projectInfos');
      projectInfos.style.opacity = "0";
      
      const rightImages = document.getElementsByClassName(`img1`);
      
      [].slice.call(rightImages).map((rightImage, key) => {
        const rightImageScaleConvertor = (500 - rightImage.clientHeight) / rightImage.clientHeight + 1;
        rightImage.style.transform = `scale(${rightImageScaleConvertor}) translateY(${sideImagesYConvertor}px)`;
        if (key === 0) {
          handleCloseInfo((page + 1).toString());
        } else handleCloseInfo(`${page + 1}-${key}`);
      });
    } else {
      displayProjectInfo(page);
      const centerImages = document.getElementsByClassName(`img${page}`);
      const leftImages = document.getElementsByClassName(`img${page - 1}`);
      const rightImages = document.getElementsByClassName(`img${page + 1}`);
      const centerContainer = document.getElementById(`img_container${page}`);
      const rightContainer = document.getElementById(`img_container${page + 1}`);
      const leftContainer = document.getElementById(`img_container${page - 1}`);
      
      if (rightImages && centerImages) {
        [].slice.call(rightImages).map((rightImage, key) => { 
          const rightImageScaleConvertor = (500 - rightImage.clientHeight) / rightImage.clientHeight + 1;
          rightImage.style.transform = `scale(${rightImageScaleConvertor}) translateY(${sideImagesYConvertor}px)`;
          if (key === 0) {
            handleCloseInfo((page + 1).toString());
          } else handleCloseInfo(`${page + 1}-${key}`);
        });

        [].slice.call(centerImages).map((centerImage) => {
          const centerImageScaleConvertor = (600 - centerImage.clientHeight) / centerImage.clientHeight + 1;
          centerImage.style.transform = `scale(${centerImageScaleConvertor}) translateY(${centerImageYConvertor}px)`;
        });
        sliderState = setSliderState(sliderState + ((centerContainer.clientWidth + rightContainer.clientWidth) * 0.5));
      }
      
      if (leftImages && leftContainer) {
        [].slice.call(leftImages).map(leftImage => {
          const leftImageScaleConvertor = (500 - leftImage.clientHeight) / leftImage.clientHeight + 1;
          leftImage.style.transform = `scale(${leftImageScaleConvertor}) translateY(${sideImagesYConvertor}px)`;
        });
        const leftContainer = document.getElementById(`img_container${page - 1}`);
        if (!leftContainer) return;
        const transformPx = leftContainer.style.transform.length === 0 ? 0 : parseInt(leftContainer.style.transform.split('(')[1].split(')')[0]);
        const leftPageIndex = Math.abs(transformPx / 656);
  
        [].slice.call(leftImages).map(leftImage => {
          const leftImageScaleConvertor = (500 - leftImage.clientHeight) / leftImage.clientHeight + 1;
          leftImage.style.transform = `scale(${leftImageScaleConvertor}) translateY(${sideImagesYConvertor}px)`;
          });
          const selector = leftPageIndex === 0 ? `img${page - 1}` : `img${page - 1}-${leftPageIndex}`
          const selectedleftImage = document.getElementById(selector);
          const selectedImgActualWidth = selectedleftImage.clientWidth * ((500 - selectedleftImage.clientHeight) / selectedleftImage.clientHeight + 1);
          const selectedImageTranslateX = 640 - selectedImgActualWidth / 2;
          selectedleftImage.style.transform = `${selectedleftImage.style.transform} translateX(${selectedImageTranslateX}px)`
      }

      if (rightImages && rightContainer) {
        if (!rightContainer) return;
        const transformPx = rightContainer.style.transform.length === 0 ? 0 : parseInt(rightContainer.style.transform.split('(')[1].split(')')[0]);
        const rightPageIndex = Math.abs(transformPx / 656);
  
        [].slice.call(rightImages).map(rightImage => {
          const rightImageScaleConvertor = (500 - rightImage.clientHeight) / rightImage.clientHeight + 1;
          rightImage.style.transform = `scale(${rightImageScaleConvertor}) translateY(${sideImagesYConvertor}px)`;
          });
          const selector = rightPageIndex === 0 ? `img${page + 1}` : `img${page + 1}-${rightPageIndex}`
          const selectedrightImage = document.getElementById(selector);
          const selectedImgActualWidth = selectedrightImage.clientWidth * ((500 - selectedrightImage.clientHeight) / selectedrightImage.clientHeight + 1);
          const selectedImageTranslateX = selectedImgActualWidth / 2 - 640;
          selectedrightImage.style.transform = `${selectedrightImage.style.transform} translateX(${selectedImageTranslateX}px)`
      }
    }
  }
});
