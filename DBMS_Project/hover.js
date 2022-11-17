const getAllClassElements = (className) => {
  const docs = document.getElementsByClassName(className);
  const elements = [];
  for (let i = 0; i < docs.length; i++) {
    elements.push(docs.item(i));
  }
  return elements;
};

console.log("script loaded");

const onHover = ({ target }) => {
  target.className += " hover";
};

const onMouseOut = ({ target }) => {
  const classNames = target.className.split(" ");
  console.log(classNames);
  target.className = classNames[0];
};


const row1_nav_elements = getAllClassElements("nav-hover");
row1_nav_elements.forEach((element) =>
  element.addEventListener("mouseover", onHover)
);
row1_nav_elements.forEach((element) =>
  element.addEventListener("mouseout", onMouseOut)
);

const red_hover_elements = getAllClassElements("red-hover");
red_hover_elements.forEach((element) =>
  element.addEventListener("mouseover", onHover)
);
red_hover_elements.forEach((element) =>
  element.addEventListener("mouseout", onMouseOut)
);


const slide = {
  1: document.getElementById("slide1"),
  2: document.getElementById("slide2"),
  3: document.getElementById("slide3"),
  4: document.getElementById("slide4"),
  5: document.getElementById("slide5"),
};
const slide_radio = {
  1: document.getElementById("slider-radio-1"),
  2: document.getElementById("slider-radio-2"),
  3: document.getElementById("slider-radio-3"),
  4: document.getElementById("slider-radio-4"),
  5: document.getElementById("slider-radio-5"),
};

const setSlideShow = (index) => {
  for (let i = 1; i <= 5; i++) {
    if (i == index) {
      slide[i].className = "slide-child active";
    } else {
      slide[i].className = "slide-child";
    }
  }
};

const handleRadioChange = ({ target }) => {
  const index = Number.parseInt(target.value, 10);
  console.log(index);
  if (index >= 1 && index <= 5) {
    setSlideShow(index);
  }
};

for (let i in slide_radio) {
  slide_radio[i].addEventListener("change", handleRadioChange);
}
