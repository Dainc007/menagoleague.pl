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

$(function() {
  $('[data-toggle="tooltip"]').tooltip();
});

const burgerMenu = document.querySelector('.burger-menu');
const closeBurgerMenu = document.querySelector('.close-burger-menu');
const responsiveMenu = document.querySelector('.responsive-menu');

burgerMenu.addEventListener('click', () => {
  const openResponsiveMenu = () => {
    if (responsiveMenu.style.display == 'none') {
      responsiveMenu.style.display = 'flex';
      document.body.style.overflow = 'hidden';
    }
  };
  openResponsiveMenu();
});

closeBurgerMenu.addEventListener('click', () => {
  const closeResponsiveMenu = () => {
    if (responsiveMenu.style.display == 'flex') {
      responsiveMenu.style.display = 'none';
      document.body.style.overflow = 'auto';
    }
  };
  closeResponsiveMenu();
});

// Game responsive menu

const gameBurgerMenu = document.querySelector('.central-burger-menu');
const gameResponsiveMenu = document.querySelector('.responsive-central-menu');
const centralBurgerMenuImg = document.querySelector('.central-burger-menu');

if (gameBurgerMenu !== null) {
  gameBurgerMenu.addEventListener('click', () => {
    const openGameResponsiveMenu = () => {
      if (gameResponsiveMenu.style.display == 'none') {
        gameResponsiveMenu.style.display = 'flex';
        centralBurgerMenuImg.src = '/images/close-burger-menu.svg';
      } else {
        gameResponsiveMenu.style.display = 'none';
        centralBurgerMenuImg.src = '/images/burger-menu.svg';
      }
    };
    openGameResponsiveMenu();
  });
}

// Tab responsive menu
const tabMenuButton = document.querySelector('.responsive-tab-menu');
const tabMenuNav = document.querySelector('.players .nav');
const tabMenuItems = document.querySelectorAll('.players .main-tab .nav-link');
const tabMenuActiveItems = document.querySelectorAll('.players .main-tab .nav-link');
let activeItem;

const checkActiveItem = () => {
  tabMenuActiveItems.forEach((item) => {
    if (item.classList.contains('active') == true) {
      activeItem = item;
      activeItem.style.display = 'flex';
    }
  });
};

if (tabMenuButton !== null) {
  tabMenuButton.addEventListener('click', () => {
    if (tabMenuNav.style.display == 'flex') {
      tabMenuNav.style.display = 'block';
      tabMenuButton.src = '/images/close.svg';
      tabMenuItems.forEach((item) => (item.style.display = 'flex'));
    } else {
      tabMenuNav.style.display = 'flex';
      tabMenuButton.src = '/images/menu.svg';
      tabMenuItems.forEach((item) => (item.style.display = 'none'));
      checkActiveItem();
    }
  });
}

/* Finances view */

const financesBtn = document.querySelectorAll('.details-buttons > li[data-number]'),
  financesData = document.querySelectorAll('.finances-view > div[data-number]');

function resetFinances() {
  financesData.forEach((el) => {
    el.classList.remove('active');
  });
  financesBtn.forEach((el) => {
    el.classList.remove('active');
  });
}

financesBtn.forEach((el) => {
  el.addEventListener('click', () => {
    resetFinances();
    key = el.dataset.number;
    financesData[key].classList.add('active');
    el.classList.add('active');
  });
});

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
  var allOffersCount = btn.parentElement.parentElement.parentNode.children[btn.dataset.number].childElementCount - 1;
  for (var a = 0; a <= allOffersCount; a++) {
    if (allOffers[a].classList.contains('active')) {
      var thisOffer = a;
      allOffers[a].classList.remove('active');
    }
  }
  thisOffer += 1;
  if (thisOffer == allOffersCount) thisOffer = 0;
  allOffers[thisOffer].classList.add('active');
}

function previousOffer(btn) {
  var allOffers = btn.parentElement.parentElement.parentNode.children[btn.dataset.number].children;
  var allOffersCount = btn.parentElement.parentElement.parentNode.children[btn.dataset.number].childElementCount - 1;
  for (var a = 0; a <= allOffersCount; a++) {
    if (allOffers[a].classList.contains('active')) {
      var thisOffer = a;
      allOffers[a].classList.remove('active');
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
});

previousOfferBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    previousOffer(btn);
  });
});

// Messages 

var progressBar = document.querySelectorAll('span[data-progress]');

if(progressBar.length > 0) {
  progressBar[0].style.setProperty(
    '--data-progress', 
    `calc(
      ${progressBar[0].getAttribute('data-progress')} - 5%)`
    );
  
  progressBar[0].style.setProperty(
    '--data-progress-bar',
    progressBar[0].getAttribute('data-progress')
  );
  let progressScore = progressBar[0].getAttribute('data-progress');
  progressScore = progressScore.substring(0, progressScore.length - 1);
  console.log(progressScore);
  if (progressScore < 20) {
    progressBar[0].classList.add('bad-moral');
  }
  else if (progressScore > 20 && progressScore < 40) {
    progressBar[0].classList.add('sad-moral');
  }
  else if (progressScore > 40 && progressScore < 60) {
    progressBar[0].classList.add('neutral-moral');
  }
  else if (progressScore > 60 && progressScore < 80) {
    progressBar[0].classList.add('good-moral');
  }
  else if (progressScore > 80){
    progressBar[0].classList.add('happy-moral');
  }
}


const messagesTabs = document.querySelectorAll('.messages-tabs > div'),
  messageLists = document.querySelectorAll('.messages-list > div'),
  messageDetails = document.querySelectorAll('.messages-text > div');

messagesTabs.forEach((el, index) => {
  el.addEventListener('click', () => {
    messagesTabs.forEach((tab) => {
      tab.classList.remove('active');
    });
    el.classList.add('active');
    messageLists.forEach((message) => {
      message.classList.add('hidden');
    });
    messageDetails.forEach((text)=>{
      text.classList.add('hidden');
    })
    messageLists[index].classList.remove('hidden');
    messageDetails[index].classList.remove('hidden');
  })
});

const inboxTabs = document.querySelectorAll('.inbox-list > .inbox-tabs > div > a');
inboxTabs.forEach((item) => {
  item.addEventListener('click', () => {
    inboxTabs.forEach((el) => {
      el.classList.remove('activeTab');
      let messageType = item.getAttribute('message-type');
      let hideMessages = document.querySelectorAll('.inbox-list > div[message-type]');
      hideMessages.forEach((change) => {
        change.classList.add('hide');
      });
      document.querySelectorAll(`.inbox-list > div[message-type="${messageType}"]`).forEach((show) => {
        show.classList.remove('hide');
      });
    });
    item.classList.add('activeTab');
  })
});

const playersMessages = document.querySelectorAll('.players-list > div[message-id]');
const playersMessagesFull = document.querySelectorAll('.messages-chat > div[message-id]');

playersMessages.forEach((msg, index) => {
  msg.addEventListener('click', () => {
    playersMessages.forEach((all) => {
      all.classList.remove('active');
    });
    playersMessagesFull.forEach((msgFull) => {
      msgFull.classList.remove('active');
    });
    playersMessagesFull[index].classList.add('active');
    msg.classList.add('active');
  });
})
