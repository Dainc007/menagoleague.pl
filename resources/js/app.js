/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

const files = require.context('./', true, /\.vue$/i);
files.keys().map((key) =>
  Vue.component(
    key
      .split('/')
      .pop()
      .split('.')[0],
    files(key).default
  )
);

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
  el: '#app',
});

// Responsive menu
// Main responsive menu

const burgerMenu = document.querySelector('.burger-menu');
const closeBurgerMenu = document.querySelector('.close-burger-menu');
const responsiveMenu = document.querySelector('.responsive-menu');

burgerMenu.onclick = () => {
  const openResponsiveMenu = () => {
    if (responsiveMenu.style.display == 'none') {
      responsiveMenu.style.display = 'flex';
      document.body.style.overflow = 'hidden';
    }
  };
  openResponsiveMenu();
};

closeBurgerMenu.onclick = () => {
  const closeResponsiveMenu = () => {
    if (responsiveMenu.style.display == 'flex') {
      responsiveMenu.style.display = 'none';
      document.body.style.overflow = 'auto';
    }
  };
  closeResponsiveMenu();
};

// Game responsive menu

const gameBurgerMenu = document.querySelector('.central-burger-menu');
const gameResponsiveMenu = document.querySelector('.responsive-central-menu');
const centralBurgerMenuImg = document.querySelector('.central-burger-menu');

gameBurgerMenu.onclick = () => {
  const openGameResponsiveMenu = () => {
    if (gameResponsiveMenu.style.display == 'none') {
      gameResponsiveMenu.style.display = 'flex';
      centralBurgerMenuImg.src = './images/close-burger-menu.svg';
    } else {
      gameResponsiveMenu.style.display = 'none';
      centralBurgerMenuImg.src = './images/burger-menu.svg';
    }
  };
  openGameResponsiveMenu();
};

/* Finances view */

const financesBtn = document.querySelectorAll('.details-buttons > li[data-number]'),
  financesData = document.querySelectorAll('.finances-view > div[data-number]');

function resetFinances() {
  financesData.forEach((el) => {
    el.classList.remove('active')
  });
  financesBtn.forEach((el) => {
    el.classList.remove('active');
  })
}

financesBtn.forEach((el) => {
  el.addEventListener('click', () => {
    resetFinances();
    key = el.dataset.number;
    financesData[key].classList.add('active');
    el.classList.add('active');
  });
})

/* Jobs offer */
const jobsCategories = document.querySelectorAll('.offer-cards > div[data-type]');
const jobsButtons = document.querySelectorAll('.offers-buttons > li[data-type]');

jobsButtons.forEach((el) => {
  el.addEventListener('click', () => {
    jobsCategories.forEach((category, index) => {
      const button = jobsButtons[index];
      category.classList.remove('active');
      button.classList.remove('active');
    });
    jobsButtons[el.dataset.number].classList.add('active');
    jobsCategories[el.dataset.number].classList.add('active');
  });
});
const nextOfferBtn = document.querySelectorAll('.offers-controls > #nextOffer');
const previousOfferBtn = document.querySelectorAll('.offers-controls > #previousOffer');

function nextOffer(btn) {
  var allOffers = btn.parentElement.parentElement.parentNode.children[btn.dataset.number].children;
  var allOffersCount = btn.parentElement.parentElement.parentNode.childElementCount - 1;
  for (var a = 0; a <= allOffersCount; a++) {
    if (allOffers[a].classList.contains("active")) {
      var thisOffer = a;
      allOffers[a].classList.remove("active");

    }
  }
  thisOffer += 1;
  if (thisOffer == allOffersCount) thisOffer = 0;
  allOffers[thisOffer].classList.add('active');

}

function previousOffer(btn) {
  var allOffers = btn.parentElement.parentElement.parentNode.children[btn.dataset.number].children;
  var allOffersCount = btn.parentElement.parentElement.parentNode.childElementCount - 1;
  for (var a = 0; a <= allOffersCount; a++) {
    if (allOffers[a].classList.contains("active")) {
      var thisOffer = a;
      allOffers[a].classList.remove("active");
      if (thisOffer == 0) thisOffer = allOffersCount;
    }
  }
  thisOffer -= 1;
  allOffers[thisOffer].classList.add('active');
}

nextOfferBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    nextOffer(btn);
  });
})

previousOfferBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    previousOffer(btn);
  });
})