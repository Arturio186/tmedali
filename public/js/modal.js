const modal = document.getElementById("requestModal");

const buttons = document.querySelectorAll('.opener');


for (const button of buttons) {
  button.addEventListener('click', (e) => {
    e.preventDefault();

    modal.classList.add('active')
  })
}

document.getElementById("closeModal").onclick = () => {
  modal.classList.remove("active");
};

document.querySelector(".modal__overlay").onclick = () => {
  modal.classList.remove("active");
};

document.addEventListener("keydown", e => {
  if (e.key === "Escape") {
    modal.classList.remove("active");
  }
});

const fileInput = document.getElementById('file');
const fileName = document.getElementById('fileName');

fileInput.addEventListener('change', () => {
  if (fileInput.files.length) {
    fileName.textContent = fileInput.files[0].name;
  } else {
    fileName.textContent = '';
  }
});