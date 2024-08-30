const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

if(bar) {
  bar.addEventListener('click', () => {
    nav.classList.add('active');
  })
};

if(close) {
  close.addEventListener('click', () => {
    nav.classList.remove('active');
  })
};
document.querySelectorAll('.accordion-header').forEach(button => {
  button.addEventListener('click', () => {
      const accordionItem = button.parentElement;
      const accordionContent = button.nextElementSibling;
      
      // Close all open items
      document.querySelectorAll('.accordion-item').forEach(item => {
          if (item !== accordionItem) {
              item.classList.remove('active');
              item.querySelector('.accordion-content').style.display = 'none';
              item.querySelector('.accordion-arrow').style.transform = 'rotate(0deg)';
          }
      });

      // Toggle the current item
      accordionItem.classList.toggle('active');
      if (accordionItem.classList.contains('active')) {
          accordionContent.style.display = 'block';
          button.querySelector('.accordion-arrow').style.transform = 'rotate(180deg)';
      } else {
          accordionContent.style.display = 'none';
          button.querySelector('.accordion-arrow').style.transform = 'rotate(0deg)';
      }
  });
});
