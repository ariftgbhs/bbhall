// IMAGE GALLERY
const images = [
    {link: './images/hall_images/ground_field.jpg', caption: 'Ground Field'},
    {link: './images/hall_images/top_view.jpg', caption: 'Hall Top View'},
    {link: './images/hall_images/hall_pond_top_view.jpg', caption: 'Hall Pond Top View'},
    {link: './images/hall_images/top_side_view.jpg', caption: 'Top Side View'},
    {link: './images/hall_images/function_day.jpg', caption: 'Function Day'},
    {link: './images/hall_images/sunset_view.jpg', caption: 'Sunset View'},
    {link: './images/hall_images/balcony_view.jpg', caption: 'Balcony View'},
    {link: './images/hall_images/playground.jpg', caption: 'Playground'},
    {link: './images/hall_images/playground_2.jpg', caption: 'Playing Cricket'}
];


let htmlImageCodes = '';

for(let image of images) {
    htmlImageCodes += `<div class="col">
    <div class="card shadow-sm">
    <img src="${image.link}" class="img-fluid" >
      <div class="card-body">
        <p class="card-text"> ${image.caption} </p>
      </div>
    </div>
  </div>`
}

document.getElementById('picgallery').innerHTML = htmlImageCodes;