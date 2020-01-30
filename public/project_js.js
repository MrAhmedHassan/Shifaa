// $(document).ready(function(){



// human_body

// let box = document.getElementById('box');
// console.log(box);

// let eye = document.getElementById("eye");
// let nose = document.getElementById("nose");
// let head = document.getElementById("head");
// let chest = document.getElementById("chest");
// let arms = document.getElementById("arms");
// let bely = document.getElementById("bely");
// let legs = document.getElementById("legs");

// let ulEye = document.getElementById("hisEye");
// let ulNose = document.getElementById("hisNose");
// let ulHead = document.getElementById("hisHead");
// let ulChest = document.getElementById("hisChest");
// let ulArms = document.getElementById("hisArms");
// let ulBely = document.getElementById("hisBely");
// let ulLegs = document.getElementById("hisLegs");

// /************************Image*********************************/
// eye.addEventListener("mouseover", function() {
//     ulEye.style.display = 'block';
//     ulNose.style.display = 'none';
//     ulHead.style.display = 'none';
//     ulChest.style.display = 'none';
//     ulArms.style.display = 'none';
//     ulBely.style.display = 'none';
//     ulLegs.style.display = 'none';
//     ulEye.style.left = '220px';
//     ulEye.style.transitionDuration = '1s';
//     ulEye.style.opacity = '1';
// });

// nose.addEventListener("mouseover", function() {
//     ulEye.style.display = 'none';
//     ulNose.style.display = 'block';
//     ulHead.style.display = 'none';
//     ulChest.style.display = 'none';
//     ulArms.style.display = 'none';
//     ulBely.style.display = 'none';
//     ulLegs.style.display = 'none';
//     ulNose.style.left = '100px';
//     ulNose.style.transitionDuration = '1s';
//     ulNose.style.opacity = '1';
// });

// head.addEventListener("mouseover", function() {
//     ulEye.style.display = 'none';
//     ulNose.style.display = 'none';
//     ulHead.style.display = 'block';
//     ulChest.style.display = 'none';
//     ulArms.style.display = 'none';
//     ulBely.style.display = 'none';
//     ulLegs.style.display = 'none';
//     ulHead.style.left = '220px';
//     ulHead.style.transitionDuration = '1s';
//     ulHead.style.opacity = '1';
// });

// chest.addEventListener("mouseover", function() {
//     ulEye.style.display = 'none';
//     ulNose.style.display = 'none';
//     ulHead.style.display = 'none';
//     ulChest.style.display = 'block';
//     ulArms.style.display = 'none';
//     ulBely.style.display = 'none';
//     ulLegs.style.display = 'none';
//     ulChest.style.left = '220px';
//     ulChest.style.transitionDuration = '1s';
//     ulChest.style.opacity = '1';
// });

// arms.addEventListener("mouseover", function() {
//     ulEye.style.display = 'none';
//     ulNose.style.display = 'none';
//     ulHead.style.display = 'none';
//     ulChest.style.display = 'none';
//     ulArms.style.display = 'block';
//     ulBely.style.display = 'none';
//     ulLegs.style.display = 'none';
//     ulArms.style.left = '220px';
//     ulArms.style.transitionDuration = '1s';
//     ulArms.style.opacity = '1';
// });

// bely.addEventListener("mouseover", function() {
//     ulEye.style.display = 'none';
//     ulNose.style.display = 'none';
//     ulHead.style.display = 'none';
//     ulChest.style.display = 'none';
//     ulArms.style.display = 'none';
//     ulBely.style.display = 'block';
//     ulLegs.style.display = 'none';
//     ulBely.style.left = '220px';
//     ulBely.style.transitionDuration = '1s';
//     ulBely.style.opacity = '1';
// });

// legs.addEventListener("mouseover", function() {
//     ulEye.style.display = 'none';
//     ulNose.style.display = 'none';
//     ulHead.style.display = 'none';
//     ulChest.style.display = 'none';
//     ulArms.style.display = 'none';
//     ulBely.style.display = 'none';
//     ulLegs.style.display = 'block';
//     ulLegs.style.left = '220px';
//     ulLegs.style.transitionDuration = '1s';
//     ulLegs.style.opacity = '1';
// });


// // doctors

// let firstStar = document.getElementById('firstStar');
// let secondStar = document.getElementById('secondStar');
// let thirdStar = document.getElementById('thirdStar');
// let fourthStar = document.getElementById('fourthStar');
// let fifthStar = document.getElementById('fifthStar');

// fifthStar.addEventListener('mouseover', function() {
//     firstStar.style.color = 'yellow';
//     secondStar.style.color = 'yellow';
//     thirdStar.style.color = 'yellow';
//     fourthStar.style.color = 'yellow';
//     fifthStar.style.color = 'yellow';
// })
// fifthStar.addEventListener('mouseout', function() {
//     firstStar.style.color = '';
//     secondStar.style.color = '';
//     thirdStar.style.color = '';
//     fourthStar.style.color = '';
//     fifthStar.style.color = '';
// })

// fourthStar.addEventListener('mouseover', function() {
//     firstStar.style.color = 'yellow';
//     secondStar.style.color = 'yellow';
//     thirdStar.style.color = 'yellow';
//     fourthStar.style.color = 'yellow';
// })
// fourthStar.addEventListener('mouseout', function() {
//     firstStar.style.color = '';
//     secondStar.style.color = '';
//     thirdStar.style.color = '';
//     fourthStar.style.color = '';
// })

// thirdStar.addEventListener('mouseover', function() {
//     firstStar.style.color = 'yellow';
//     secondStar.style.color = 'yellow';
//     thirdStar.style.color = 'yellow';
// })
// thirdStar.addEventListener('mouseout', function() {
//     firstStar.style.color = '';
//     secondStar.style.color = '';
//     thirdStar.style.color = '';
// })

// firstStar.addEventListener('mouseover', function() {
//     firstStar.style.color = 'yellow';
// })
// firstStar.addEventListener('mouseout', function() {
//     firstStar.style.color = '';
// })

// secondStar.addEventListener('mouseover', function() {
//     firstStar.style.color = 'yellow';
//     secondStar.style.color = 'yellow';
// })
// secondStar.addEventListener('mouseout', function() {
//     firstStar.style.color = '';
//     secondStar.style.color = '';
// })

// });
