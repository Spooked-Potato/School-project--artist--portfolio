const images = document.querySelectorAll('.image-project');
const modalImagem = document.querySelector('.modal-imagem-project');
const modal = document.querySelector('.modal-project');
const overlay = document.querySelector('.overlay-project');
const closeModal = document.querySelector('.close-modal-project');
const descriptionModal = document.querySelector('.modal-description-project');
const headingModal = document.querySelector('.modal-heading-project');

const descriptions = 
[
    'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
    'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
    'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
    'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.', 
    'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
    'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
    'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
    'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.'
];

 const headings = 
 [
    'https://www.w3schools.com/',
    'https://www.w3schools.com/',
    'https://www.w3schools.com/',
    'https://www.w3schools.com/',
    'https://www.w3schools.com/',
    'https://www.w3schools.com/',
    'https://www.w3schools.com/',
    'https://www.w3schools.com/'
];


//nav-bar
$('#hamburger').on('click', function()
{
    console.log('oi');
    $('.navbar-mobile-overlay').css('display', 'flex');
    $('.navbar-mobile-overlay').css('visibility', 'visible');
})

$('#close-hamburger').on('click', function()
{
    $('.navbar-mobile-overlay').css('display', 'none');
    $('.navbar-mobile-overlay').css('visibility', 'hidden');
})
//nav-bar

//response button contact page
$('.overlay-contact, .modal-contact').hide();  
    $('.btn-show-contact').on('click',function()
    {
        $('.overlay-contact, .modal-contact').fadeIn(200);       
    });
 
     $('.btn-hide-contact').on('click',function()
     {
         $('.overlay-contact, .modal-contact').fadeOut(200);
     });
//response button contact page

//close button project page

$('.close-modal-project').on('click', function()
{
    modal.style.display = 'none';
    overlay.style.display = 'none';
})
//close button project page

//image button project page
for (let i = 0; i <= images.length; i++) 
{
    images[i].addEventListener('click', function () 
    {
        modal.style.display = 'block';
        overlay.style.display = 'block';
        modalImagem.src = images[i].src;
        descriptionModal.textContent = descriptions[i];
        headingModal.textContent = headings[i];
        headingModal.href = headings[i];
    })
}
//image button project page
