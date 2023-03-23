let profile =document.querySelector('.profile')
let profile_Detile =document.querySelector('.profile_Detile')
let Profile_pic = document.getElementById('profile_pic')
let Uplode_photo =document.querySelector(".uplode_Profile_picture")
let cancel =document.getElementById('cancel')
let Menutoggler = document.querySelector('.Menutoggler')
let sidebar = document.querySelector('.sidebar')
let collapser  = document.querySelector('.Model_1')
let collapser2  = document.querySelector('.Model_19')
// let bin_card_titel_img =document.querySelector('.bin_card_titel_img')
// let bincard_Detiel = doucment.querySelector('.bincard_Detiel')


// bin_card_titel_img.onclick= function(){
//     bincard_Detiel.classList,toggle('active')
// }
profile.onclick = function(){
    profile_Detile.classList.toggle('active') 
}

const profile_pic = () =>{
  console.log('active')
Uplode_photo.classList.toggle('active')

}
const canceler =() =>{
Uplode_photo.classList.remove('active')
}

const down =() =>{
collapser.classList.toggle('active')
}
const down19 =() =>{
collapser2.classList.toggle('active')
}

const re19 =() =>{
    collapser2.classList.remove('active')
    }
Menutoggler.onclick = function(){
    sidebar.classList.toggle('active')

   
}

profile.onclick = function(){
    profile_Detile.classList.toggle('active') 
}



