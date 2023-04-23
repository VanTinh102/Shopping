const cursor = document.querySelector('.cursor');

document.addEventListener('mousemove', (e)=>{
  cursor.style.top = e.pageY - 10 + 'px';
  cursor.style.left = e.pageX - 11 + 'px';
})

document.addEventListener('click', ()=>{
  cursor.classList.add('expanding');
  setTimeout(()=>{
    cursor.classList.remove('expanding')
  }, 100);
})