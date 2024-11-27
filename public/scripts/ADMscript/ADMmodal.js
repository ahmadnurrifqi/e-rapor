//modal popup
const open = document.getElementById('open');
const close = document.getElementById('close');
const wrapper = document.getElementById('wrapper');

const open1 = document.getElementById('open1');
const close1 = document.getElementById('close1');
const wrapper1 = document.getElementById('wrapper1');
// const edit = document.getElementById('edit');
// const wrapper2 = document.getElementById('wrapper2');
// const close2 = document.getElementById('close2');

const hapus = document.getElementById('hapus');
const wrapper3 = document.getElementById('wrapper3');
const close3 = document.getElementById('close3');

//tambah
open.addEventListener('click', () => {
    wrapper.classList.add('active');
});
close.addEventListener('click', () => {
    wrapper.classList.remove('active');
});

//hapus
const elements = document.getElementsByClassName("btn-hapus")
Array.from(elements).forEach(element => {
    element.addEventListener("click", (e) => {
        wrapper3.classList.add("active");

        const hrefHapus = document.getElementById("href-hapus");
        
        hrefHapus.href = e.target.getAttribute("delete-url");
    });
});
close3.addEventListener('click', () => {
    wrapper3.classList.remove('active');
});

//edit
// edit.addEventListener('click', () => {
//     wrapper2.classList.add('active');
// });
// close2.addEventListener('click', () => {
//     wrapper2.classList.remove('active');
// });