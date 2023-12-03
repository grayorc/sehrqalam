const pages = ["writer-details", "effect-details", "costumer-details"];
let pageIndex = 0;

let book1 = document.querySelector("#book1");
let book2 = document.querySelector("#book2");
let translatorFields = document.querySelector("#translate-fields");
let perosns = document.querySelector("#translator");

window.addEventListener("load", () => {
  translatorFields.classList.add("active-translator");
  perosns.style.display = "none";
  activedPage(pages[pageIndex]);
});

function toggleCheck() {
  if (book1.checked) {
    translatorFields.classList.add("active-translator");
    perosns.style.display = "none";
  } else {
    translatorFields.classList.remove("active-translator");
    perosns.style.display = "flex";
  }
}

const nextBtn = document.querySelectorAll(".next");
nextBtn.forEach((b) => {
  b.addEventListener("click", () => {
    if (pages.length - 1 > pageIndex) {
      pageIndex++;
      activedPage(pages[pageIndex]);
    } else {
      console.log("hi");
    }
  });
});

const prevBtn = document.querySelectorAll(".prev");
prevBtn.forEach((b) => {
  b.addEventListener("click", () => {
    if (pages.length > 0) {
      pageIndex--;
      activedPage(pages[pageIndex]);
    } else {
      console.log("hi");
    }
  });
});

function activedPage(active) {
  if (history.pushState) {
    var newurl =
      window.location.protocol +
      "//" +
      window.location.host +
      window.location.pathname +
      `?active-page=${active}`;
    window.history.pushState({ path: newurl }, "", newurl);
  }

  var url_string = location.href;
  var url = new URL(url_string);
  var active_page = url.searchParams.get("active-page");

  document.querySelectorAll(".tab-page").forEach((tab) => {
    if (active !== pages[pageIndex]) {
      tab.classList.remove("active-page");
    }
  });
  switch (pages[pageIndex]) {
    case "effect-details":
      document
        .querySelector("." + pages[pages.length - 1])
        .classList.remove("active-page");
      break;
    case "writer-details":
      document
        .querySelector("." + pages[pages.length - 2])
        .classList.remove("active-page");
      break;

    default:
      null;
      break;
  }
  document.querySelector("." + active_page).classList.add("active-page");
  console.log(active);
  console.log(pages[pageIndex]);

  if (active === pages[pageIndex]) {
    document.querySelectorAll(".panel-page").forEach((panel) => {
      panel.style.display = "none";
    });
    document.getElementById(active_page).style.display = "block";
  }
}

book1.addEventListener("change", toggleCheck);
book2.addEventListener("change", toggleCheck);
