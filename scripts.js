const products = document.querySelectorAll('.restrictions-students > li span');
const studentMenu = document.querySelectorAll('.student-menu');
const foods = document.querySelectorAll('.student-menu foods');

const closeButton = document.querySelectorAll('.close-button, .no-button');
const removeModal = document.querySelector('.remove-modal');
const removeButtons = document.querySelectorAll('.remove-button');

const studentsBalance = document.querySelectorAll('.balance .students > li');
const studentsBalanceInfo = document.querySelectorAll('.balance > .students .extract');

const backButton = document.querySelector('.back-button h4');

products.forEach((item, index) => {
  item.addEventListener('click', () => {
    studentMenu[index].classList.toggle('hide');
  })
});

studentsBalance.forEach((item, index) => {
  item.addEventListener('click', () => {
    studentsBalanceInfo[index].classList.toggle('hide');
  })
});

closeButton.forEach(item => {
  item.addEventListener('click', () => {
    handleHideClass()
  });
})

removeButtons.forEach(item => {
  item.addEventListener('click', () => {
    handleHideClass()
  });
});

backButton.addEventListener('click', () => {
  window.history.back();
})

function handleHideClass(){
  removeModal.classList.toggle('hide');
}